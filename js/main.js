$ = jQuery;

  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    var collapseMenu, detailHeight, newsSlider;
    newsSlider = function() {
        console.log('initializing the news slider ...');
      var containerWidth, newsArticleWidth, newsItems, newsWidth, nextNewsitem, panel, panelEnd, panelPosition, prevNewsItem;
      panel = $("#panel");
      newsItems = $('#news').find("article").length;
      newsArticleWidth = 276;
      newsWidth = newsItems * newsArticleWidth;
      panel.width(newsWidth);
      panelPosition = 0;
      containerWidth = panel.parent().width();
      panelEnd = Math.ceil((panel.width() - containerWidth) / newsArticleWidth);
      console.log(panelEnd);
      prevNewsItem = function(e) {
        e.preventDefault();
        if (!(panelPosition <= 0)) {
          panelPosition -= 1;
          return panel.animate({
            left: -panelPosition * newsArticleWidth
          });
        }
      };
      nextNewsitem = function(e) {
        e.preventDefault();
        if (!(panelPosition >= panelEnd)) {
          panelPosition += 1;
          return panel.animate({
            left: -panelPosition * newsArticleWidth
          });
        }
      };
      $("#news .next").on("click", function(e) {
        return nextNewsitem(e);
      });
      return $("#news .prev").on("click", function(e) {
        return prevNewsItem(e);
      });
    };
    collapseMenu = function() {
      var documentWidth;
      documentWidth = window.innerWidth;
      if (documentWidth < 767) {
        return $("#sidebar .heading").on("click", function(e) {
          e.preventDefault();
          return $(".collapsable").slideToggle();
        });
      }
    };
    detailHeight = function() {
      if ($('#detail').height() < $('#sidebar').height()) {
        return $('#detail').height($('#sidebar').height() + 20);
      }
    };
    $(".slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2500,
      speed: 1200,
      infinite: true,
      dots: true,
      pauseOnHover: false
    });
    $(".carousel").slick({
      slidesToShow: 8,
      slidesToScroll: 4,
      autoplay: true,
      swipe: true,
      autoplaySpeed: 2500,
      speed: 1200,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 2500,
            speed: 800
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2500,
            speed: 600
          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            speed: 400
          }
        }
      ]
    });
    newsSlider();
    collapseMenu();
    return detailHeight();
  });
