// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const allInforms = document.getElementById('all-informs')
    allInforms.addEventListener('click', (e) => {
        e.stopPropagation()
        const menu = document.getElementById('menu')
        const space = document.getElementById('space')
        const hidden = space.classList.contains('hidden')
        menu.classList.toggle('hidden')
        space.classList.add('hidden')
        if(hidden){
            space.classList.toggle('hidden')
        }
        else{
            space.classList.add('hidden')
        }
    })

    const submenus = document.querySelectorAll('.submenu')
    submenus.forEach((submenu) => {
        submenu.addEventListener('click', (e) => {
            //alert('submenu')
            e.stopPropagation()
            const submenusShowed = document.querySelectorAll('.ul-menu')
            for (var i = 0; i < submenusShowed.length; i++) {
                submenusShowed[i].classList.add('hide-sub-menu')
                submenusShowed[i].classList.remove('show-sub-menu')
            }
            const submenuSelected = document.getElementById('sub-menu-' + submenu.id)
            submenuSelected.classList.add('show-sub-menu')
        })
    })

    const finalmenus = document.querySelectorAll('.finalmenu')
    finalmenus.forEach((finalmenu) => {
        finalmenu.addEventListener('click', (e) => {
            // alert('finalmenu')
            e.stopPropagation()
            const listas = document.querySelectorAll('.list')
            for (var i = 0; i < listas.length; i++) {
                listas[i].classList.add('hidden')
            }
            const finalmenuid = finalmenu.id
            const lista = document.getElementById('lista-' + finalmenuid) 
            const hidden = lista.classList.contains('hidden')
            if(hidden){
                lista.classList.toggle('hidden')
            }
        })
    })
})