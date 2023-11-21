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

// Slider maxicorrectores

document.addEventListener('DOMContentLoaded', () => {
  var slides = document.querySelectorAll('.slide-maxicorrectores');
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
  var prevButton = document.getElementById('prevButton-maxi');
  var nextButton = document.getElementById('nextButton-maxi');

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

document.addEventListener('DOMContentLoaded', function () {
  // Function to check if email has been submitted
  function hasSubmittedEmail() {
      return localStorage.getItem('submittedEmail') === 'true';
  }

  // Function to set that email has been submitted
  function setSubmittedEmail() {
      localStorage.setItem('submittedEmail', 'true');
  }

  // Function to open Modal 2
  function openModal2(modalId) {
      var instanceNumber = modalId.split('_')[1];
      document.getElementById('modal2_' + instanceNumber).showModal();
  }

  // Event listener for the "submit" button
  function handleFormSubmission(emailForm) {
      event.preventDefault(); // Prevent the form from submitting in the traditional way

      // Set that email has been submitted
      setSubmittedEmail();

      // Use AJAX to submit the form data to the server
      var formData = new FormData(emailForm);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', emailForm.action, true);
      xhr.onload = function () {
          if (xhr.status === 200) {
              // Form submitted successfully, close the modal and open Modal 2
              emailForm.closest('.modal').close();
              openModal2(emailForm.closest('.modal').id);
          }
      };
      xhr.send(formData);
  }

  // Attach click event listeners to all buttons
  document.querySelectorAll('.openModalBtn, .closeModalBtn').forEach(function (button) {
      button.addEventListener('click', function () {
          var targetModalId = button.getAttribute('data-modal');
          var targetModal = document.getElementById(targetModalId);

          if (button.classList.contains('openModalBtn')) {
              // Show Modal 1 only if email has not been submitted
              if (!hasSubmittedEmail()) {
                  targetModal.showModal();
              } else {
                  // Open Modal 2 directly if email has been submitted
                  openModal2(targetModalId);
              }
          } else if (button.classList.contains('closeModalBtn')) {
              targetModal.close();
          }
      });
  });

  // Attach form submission handling
  document.querySelectorAll('.emailForm').forEach(function (emailForm) {
      emailForm.addEventListener('submit', function (event) {
          handleFormSubmission(emailForm);
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

