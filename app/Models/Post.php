<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;
use App\Models\RatingPost;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function like() {
        return $this->hasMany(Like::class);
    }
    public function ratingpost() {
        return $this->hasMany(RatingPost::class);
    }

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('descript', 'like', '%' . $search . '%')
                        ->orWhere('price', 'like', '%' . $search . '%')
                        ->orWhere('created_at', 'like', '%' . $search . '%')
                        ->orWhere('updated_at', 'like', '%' . $search . '%');
        });
        $query->when($filter['created_at'] ?? false, function($query, $created_at) {
            return $query->whereHas('created_at', function($query) use ($created_at) {
                $query->where('created_at', $created_at);
            });
        });
        $query->when($filter['updated_at'] ?? false, function($query, $updated_at) {
            return $query->whereHas('updated_at', function($query) use ($updated_at) {
                $query->where('updated_at', $updated_at);
            });
        });
    }
}
