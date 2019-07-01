$('#menu-burger').click(function() {
  $(this).toggleClass('active');
   $('.ca-menu').toggleClass('ca-menu-active');
});

window.onload = function (){
  var scrolled;
  var timer;

  document.getElementById('Scroll').onclick = function(){
    scrolled = window.pageYOffset;
    scrollToTop();
  }
  function scrollToTop(){
    if(scrolled > 0){
      window.scrollTo(0,scrolled);
      scrolled = scrolled - 50;
      timer = setTimeout(scrollToTop, 10);
    }
    else{
      cleanTimeout(timer);
      window.scrollTo(0,0);
    }
  }
}
