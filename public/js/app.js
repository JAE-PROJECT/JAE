const MenuHamburger = document.querySelector(".bouton-menu")
  const menu_composant = document.querySelector(".menu_composant")
  MenuHamburger.addEventListener('click',()=>{
    menu_composant.classList.toggle('mobile-menu')
  })
  const menuToggle = document.querySelector(".menu-toggle")
  MenuHamburger.addEventListener('click',()=>{
    menuToggle.classList.toggle('button-close')
  })
