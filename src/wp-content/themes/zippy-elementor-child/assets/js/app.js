import "../lib/slick/slick.min.js";
import "../lib/fancybox/jquery.fancybox.min.js";

$(document).ready(function () {
  $(".gallery-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    infinite: false,
    dots: false,
    arrows: true,
  });
  $("[data-fancybox='gallery-slicks']").fancybox({
    toolbar: true,
    thumbs: false,
    hash: false,
  });
});
