<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use App\Models\RatingPost;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    
    // protected $guarded = [
    //     'name',
    // ]

    public function post()
    {
        return $this->hasMany(Post::class);
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

    public function scopeFilter($query, array $filters) {
        // if(request('search')) {
        //     return $query->where('id', request('search'))
        //                 ->orWhere('username', 'like', '%' . request('search') . '%')
        //                 ->orWhere('email', 'like', '%' . request('search') . '%');
        // }
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('id', request('search'))
                        ->orWhere('username', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('title', $category);
            });
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
