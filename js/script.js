jQuery(document).ready(function($){	
	$('.tabs-2966-tab').on('click',function(e){
      e.preventDefault();
      smoothScroll($(this.hash));
    });

    function smoothScroll(target){
      $('body,html').animate({
        'scrollTop':target.offset().top
      },600);
    }

    $('#cred_user_form_589_1-submit-1-1580196645').appendTo('#form_group_submit');

    $('.row-detail-img-slider').slick({
        dots:true,
        infinite:true,
        slidesToShow:1,
        slidesToScroll:1,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint:550,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
      });
});

