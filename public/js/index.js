const navbar = document.querySelector('#Navbar')
const bar = document.querySelector('.bar')
const barIcon = document.querySelector('.bar-icon')
let lastScroll = 0

const root = document.documentElement

window.addEventListener('scroll', () => 
{
    const currentScroll = window.pageYOffset
    if( currentScroll <= 1 )
    {
        navbar.classList.remove('-translate-y-16')
    }

    if( currentScroll > lastScroll && !navbar.classList.contains('-translate-y-16'))
    {
        navbar.classList.add('-translate-y-16')
    }

    if( currentScroll < lastScroll && navbar.classList.contains('-translate-y-16'))
    {
        navbar.classList.remove('-translate-y-16')
    }

    lastScroll = currentScroll
})

document.addEventListener('click', (e) => 
{
    if( !barIcon.contains(e.target) && !bar.contains(e.target) )
    {
        bar.classList.remove('active')
    }
})

window.addEventListener('dblclick', () => 
{
    navbar.classList.toggle('-translate-y-16')
})

// document.addEventListener('mousemove', (e) => 
// {
//     root.style.setProperty('--mouse-x', (e.clientX - 10) + 'px')
//     root.style.setProperty('--mouse-y', (e.clientY - 10) + 'px')
// })

function setClass(e, c, ...j) 
{
    e.classList.toggle(c)
    console.log(j)
    j.forEach(h => {
        e.classList.toggle(h)
    });
}

function setHidden(e)
{
    e.forEach(e => {
        e.classList.toggle('hidden')
    });
}

// function setTheme(e)
// {
//     root.style.setProperty('--theme', e)
// }