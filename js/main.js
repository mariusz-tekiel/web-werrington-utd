$(function() {
  // Header Carousel
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;

    if (myIndex > x.length) {
      myIndex = 1;
    }
    x[myIndex - 1].style.display = "block";

    setTimeout(carousel, 5000);
  }

  window.onscroll = function() {
    onScrollChangeNavbarBgColor();
    onScrollHandleActiveButton();
    hideNavbarOnScroll();
  };

  function hideNavbarOnScroll() {
    var op = $(document.getElementById("navbarNav"));

    if (op.hasClass("show")) {
      $(".navbar-toggler").click();
    }
  }

  function onScrollChangeNavbarBgColor() {
    if (
      document.body.scrollTop > 100 ||
      document.documentElement.scrollTop > 100
    ) {
      document.getElementById("navbar").style.background = " rgb(25, 1, 49)";
      document.getElementById("navbar").style.padding = "5px 5%";
    } else {
      document.getElementById("navbar").style.background = "";
      document.getElementById("navbar").style.padding = "40px 5%";
    }
  }

  function onScrollHandleActiveButton() {
    //Get current scroll position
    var currentScrollPos = $(document).scrollTop();
    //Iterate through all node
    $("#navbarNav > ul > li > a").each(function() {
      var curLink = $(this);
      var refElem = $(curLink.attr("href"));
      //Compare the value of current position and the every section position in each scroll
      if (refElem.length) {
        let position = refElem.position().top - 10;
        if (
          position <= currentScrollPos &&
          position + refElem.height() > currentScrollPos
        ) {
          //Remove class active in all nav
          $("#navbarNav > ul > li").removeClass("active");
          //Add class active
          curLink.parent().addClass("active");
        } else {
          curLink.parent().removeClass("active");
        }
      }
    });
  }

  $(window).click(function(e) {
    hideNavbarOnClick();
  });

  function hideNavbarOnClick() {
    var op = $(document.getElementById("navbarNav"));

    if (op.hasClass("show")) {
      $(".navbar-toggler").click();
    }
  }

  // Smooth Scroll functionality
  var heightHeader = 10;
  smoothScroll();

  function smoothScroll() {
    $("#navbarNav a").on("click", function(event) {
      if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;
        var scrollToPosition = $(hash).offset().top;

        $("html, body").animate(
          {
            scrollTop: scrollToPosition
          },
          800,
          function() {
            window.location.hash = hash;
          }
        );
      }
    });
  }

  // Toggle close navbar onClick
  toggleColseNavBar();

  function toggleColseNavBar() {
    $(".navbar-nav a").on("click", function() {
      if ($(window).width() < 767) {
        $(".navbar-toggler").click();
      }
    });
  }

  // Set Background-color onClick before scroll
  setBackgroundColorOnClick();

  function setBackgroundColorOnClick() {
    $(".navbar-toggler").on("click", function() {
      document.getElementById("navbar").style.background = "#000";
    });
  }
});

// News Carousel
$("#myCarousel").on("slide.bs.carousel", function(e) {
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 3;
  var totalItems = $(".carousel-item").length;

  if (idx >= totalItems - (itemsPerSlide - 1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i = 0; i < it; i++) {
      // append slides to end
      if (e.direction == "left") {
        $(".carousel-item")
          .eq(i)
          .appendTo(".carousel-inner");
      } else {
        $(".carousel-item")
          .eq(0)
          .appendTo(".carousel-inner");
      }
    }
  }
});
