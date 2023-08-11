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

// Slider productos mobile

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton');
  var nextButton = document.getElementById('nextButton');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Slider productos desktop

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-amino-desktop');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton-amino-d');
  var nextButton = document.getElementById('nextButton-amino-d');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Slider fosfitos mobile

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-fosfito');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton-fosfito');
  var nextButton = document.getElementById('nextButton-fosfito');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Slider fosfitos desktop

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-fosfito-desktop');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton-fosfito-d');
  var nextButton = document.getElementById('nextButton-fosfito-d');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Modal productos

document.addEventListener('DOMContentLoaded', () => {
  const openButtonsProd = document.querySelectorAll('.open-boton-prod');

  openButtonsProd.forEach((openButtonProd) => {
    const modal = openButtonProd.nextElementSibling;

    openButtonProd.addEventListener('click', () => {
      modal.showModal();
    });

    const closeButtonProd = modal.querySelector('.close-boton-prod');
    closeButtonProd.addEventListener('click', () => {
      modal.close();
    });
  });
});

// Slider suelo > sólidos mobile

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-solidos');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton-solidos');
  var nextButton = document.getElementById('nextButton-solidos');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Slider suelo > sólidos desktop

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-solidos-desktop');
  var currentSlide = 0;

  function showSlide(n) {
    slides[currentSlide].style.display = 'none';
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].style.display = 'flex';
  }

  function showPrevious() {
    var previousSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[previousSlide].style.display = 'flex';
  }

  function showNext() {
    var nextSlide = (currentSlide + 1) % slides.length;
    slides[nextSlide].style.display = 'flex';
  }

  showSlide(0); // Show the first slide

  // Button event listeners
  var prevButton = document.getElementById('prevButton-solidos-desktop');
  var nextButton = document.getElementById('nextButton-solidos-desktop');

  prevButton.addEventListener('click', function () {
    showPrevious();
    showSlide(currentSlide - 1);
  });

  nextButton.addEventListener('click', function () {
    showNext();
    showSlide(currentSlide + 1);
  })
});

// Flores distribuidores

// Get all province image elements
const provinceImages = document.querySelectorAll('.province-img');

// Attach click event listeners to each province image
provinceImages.forEach(image => {
    image.addEventListener('click', () => {
        // Hide all province info articles
        const allProvinceInfo = document.querySelectorAll('.province-info');
        allProvinceInfo.forEach(info => {
            info.style.display = 'none';
        });

        // Show the clicked province's info
        const provinceId = image.id.split('-')[2]; // Extract the numeric part of the ID
        const provinceInfoArticle = document.getElementById(`province-info-${provinceId}`);
        provinceInfoArticle.style.display = 'block';
    });
});