
jQuery(window).on('load',function($){
  initSlider();
  initProgressBars();
});

/*progress bar*/

function initSlider(){
  jQuery('.main-dashboard').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.dashboard-years',
  });
  jQuery('.dashboard-years').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    centerMode: true,
    vertical: true,
    focusOnSelect: true,
    asNavFor: '.main-dashboard'
  });
}

function initProgressBars(){
  jQuery('.circle-item').each(function(i,v){
    var val = parseInt(jQuery(this).attr('data-current'));
    var $circle = jQuery(this).find('svg .bar-circle');
    var r = $circle.attr('r');
    var c = Math.PI*(r*2);
    var maxValue = parseInt(jQuery(this).attr('data-max'));

    if (val < 0) { val = 0;}
    if (val > maxValue) { val = maxValue;}
    
    var pct = ((maxValue-val)/maxValue)*c;
    
    $circle.css({ strokeDashoffset: pct});
    
    jQuery(this).find('.count-circle').attr('data-pct',val);
  });
}