document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.querySelector('.menu');
    var menuContent = document.querySelector('.menu-content');
      
      document.addEventListener('click', function(event) {
        var eventname = event.target;
        var className = eventname.classList[0];
        
        
        if(className=='logo'){    
           menuContent.style.display = menuContent.style.display === 'block' ? 'none' : 'block';
        }

        else{
        menuContent.style.display =  'none';
        }

      });
    });
    var slideIndex = 0;
  var slides = document.getElementsByClassName("slide-image");

  function showSlide(n) {
    if (n >= slides.length) {
      slideIndex = 0;
    } else if (n < 0) {
      slideIndex = slides.length - 1;
    } else {
      slideIndex = n;
    }
    
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    
    slides[slideIndex].style.display = "block";
  }

  function nextSlide() {
    showSlide(slideIndex + 1);
  }

  function prevSlide() {
    showSlide(slideIndex - 1);
  }

  document.querySelector(".next").addEventListener("click", nextSlide);
  document.querySelector(".prev").addEventListener("click", prevSlide);

  showSlide(0);
      