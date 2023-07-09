// Modal
document.addEventListener('DOMContentLoaded', () => {
  const openButtons = document.querySelectorAll('.open-button');
  const closeButtons = document.querySelectorAll('.close-button');

  openButtons.forEach((openButton) => {
    const modalId = openButton.dataset.modal;
    const modal = document.querySelector(`#${modalId}`);

    openButton.addEventListener('click', () => {
      modal.showModal();
    });
  });

  closeButtons.forEach((closeButton) => {
    const modal = closeButton.closest('dialog');

    closeButton.addEventListener('click', () => {
      modal.close();
    });
  });
});

// Burger menu

document.addEventListener("DOMContentLoaded", function () {
  /* Funcion que maneja el menu */
  function navResponsive() {
    /* primero guardo en constantes los elementos HTML que necesito */
    const burgerMenuBtn = document.querySelector("#burger-menu-toggler");

    /* En este caso, al ser varios items y seleccionarlos todos, lo que se guarda
          en la constante menuItems es una lista de nodos*/
    const menuItems = document.querySelectorAll(".nav-menu-element");

    // Agrego o quito una clase al body para activar el menu mobile
    burgerMenuBtn.addEventListener("click", function () {
      document.body.classList.toggle("mobile-menu-active");
    });

    //recorro la lista de nodos menuItems
    menuItems.forEach(function (menuItem) {
      //ejecuto el método addEventListener() en cada uno
      menuItem.addEventListener("click", function () {
        //Al clickear un item del menu mobile, este se cierra
        document.body.classList.remove("mobile-menu-active");

        //selecciono el elemento con la clase y se la quito
        let currentItem = document.querySelector(".active");
        currentItem.classList.remove("active");
        //le pongo la clase al elemento clickeado
        this.classList.add("active");
      });
    });
  }

  navResponsive();
});

// Scrolled Page class
window.addEventListener('scroll', function () {
if (window.scrollY > 0) {
    document.body.classList.add('page-scrolled');
} else {
    document.body.classList.remove('page-scrolled');
}
});