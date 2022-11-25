/* 
    $(document).ready(function () {
        // Declare Carousel jquery object
        var owl = $('.owl-carousel');

        // Carousel initialization
        owl.owlCarousel({
            loop :true ,
            margin: 0,
            navSpeed: 500,
            nav: true,
            autoplay: true,
            rewind: true,
            items: 1
        });

        // add animate.css class(es) to the elements to be animated
        function setAnimation(_elem, _InOut) {
            // Store all animationend event name in a string.
            // cf animate.css documentation
            var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

            _elem.each(function () {
                var $elem = $(this);
                var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

                $elem.addClass($animationType).one(animationEndEvent, function () {
                    $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                });
            });
        }

        // Fired before current slide change
        owl.on('change.owl.carousel', function (event) {
            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation($elemsToanim, 'out');
        });

        // Fired after current slide has been changed
        var round = 0;
        owl.on('changed.owl.carousel', function (event) {

            var $currentItem = $('.owl-item', owl).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");

            setAnimation($elemsToanim, 'in');
        })

        owl.on('translated.owl.carousel', function (event) {
            console.log(event.item.index, event.page.count);

            if (event.item.index == (event.page.count - 1)) {
                if (round < 1) {
                    round++
                    console.log(round);
                } else {
                    owl.trigger('stop.owl.autoplay');
                    var owlData = owl.data('owl.carousel');
                    owlData.settings.autoplay = false; //don't know if both are necessary
                    owlData.options.autoplay = false;
                    owl.trigger('refresh.owl.carousel');
                }
            }
        });

    });
 */


  /*   NEWWWWWWWW */

  $(".owl-carousel").on("initialized.owl.carousel", () => {
    setTimeout(() => {
      $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
      $("section").show();
    }, 200);
  });
  
  const $owlCarousel = $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    
    autoplay:true
    
    
  });
  
  $owlCarousel.on("changed.owl.carousel", e => {
    $(".owl-slide-animated").removeClass("is-transitioned");
  
    const $currentOwlItem = $(".owl-item").eq(e.item.index);
    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
  
    const $target = $currentOwlItem.find(".owl-slide-text");
    doDotsCalculations($target);
  });
  
  $owlCarousel.on("resize.owl.carousel", () => {
    setTimeout(() => {
      setOwlDotsPosition();
    }, 50);
  });
  
  /*if there isn't content underneath the carousel*/
  //$owlCarousel.trigger("refresh.owl.carousel");
  
  setOwlDotsPosition();
  
  function setOwlDotsPosition() {
    const $target = $(".owl-item.active .owl-slide-text");
    doDotsCalculations($target);
  }
  
  function doDotsCalculations(el) {
    const height = el.height();
    const {top, left} = el.position();
    const res = height + top + 20;
  
    $(".owl-carousel .owl-dots").css({
      top: `${res}px`,
      left: `${left}px`
    });
  }