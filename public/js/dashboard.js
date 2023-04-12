const navbar = document.querySelector('#Navbar')
const tool = document.querySelector('#Tool')
const main = document.querySelector('#Main')
const figure = document.querySelectorAll('figure')
const fig = document.querySelectorAll('figure figcaption')
const fig2 = document.querySelectorAll('figure w-4')

function setClass(a)
{
    a.forEach(e => 
        {
        if(e.classList.contains('lg:col-span-2'))
        {
            e.classList.remove('lg:col-span-2')    
            e.classList.add('lg:col-span-1')    
            tool.classList.remove('lg:col-span-10')
            tool.classList.add('lg:col-span-11')
            main.classList.remove('lg:col-span-10')
            main.classList.add('lg:col-span-11')

            fig.forEach(e => {
                e.classList.add('hidden')
            });
            fig2.forEach(e => {
                e.classList.add('hidden')
            });
            figure.forEach(e => {
                e.classList.add('justify-center')
            });
        }
        else if(e.classList.contains('lg:col-span-1'))
        {
            e.classList.remove('lg:col-span-1')    
            e.classList.add('lg:col-span-2')    
            tool.classList.remove('lg:col-span-11')
            tool.classList.add('lg:col-span-10')
            main.classList.remove('lg:col-span-11')
            main.classList.add('lg:col-span-10')
            
            fig.forEach(e => {
                e.classList.remove('hidden')
            });
            fig2.forEach(e => {
                e.classList.remove('hidden')
            });
            figure.forEach(e => {
                e.classList.remove('justify-center')
            });
        }
    });
}

function setToggle(e, c, ...j) 
{
    e.classList.toggle(c)
    console.log(j)
    j.forEach(h => {
        e.classList.toggle(h)
    });
}
