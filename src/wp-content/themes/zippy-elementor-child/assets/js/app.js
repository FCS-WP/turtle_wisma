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
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
        },
      },
    ]
  });
  $("[data-fancybox='gallery-slicks']").fancybox({
    toolbar: true,
    thumbs: false,
    hash: false,
  });

  // $(".fancybox-trigger img").on("click", function () {
  //   if ($(this).closest(".fancybox-trigger").length) {
  //     let gallery = [];
  //     $(".fancybox-trigger img").each(function () {
  //       gallery.push({ src: $(this).attr("src"), type: "image" });
  //     });

  //     let index = $(".fancybox-trigger img").index(this);

  //     $.fancybox.open(gallery, { index: index });
  //   }
  // });
});
