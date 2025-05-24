$(document).ready(function(){

    const mediaQuery = window.matchMedia('(min-width: 768px)')

    if (mediaQuery.matches) {
       
         $('.notification').mouseenter(function(){
         $('.ul2').css('display','inline-flex');
          });

        $('.notification').mouseleave(function(){
        $('.ul2').css('display','none');
        });
 
    }

});