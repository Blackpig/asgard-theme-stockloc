$(document).ready(function(){

  $win = $(window);

  var backgrounds = [];
  $('section[data-type="background"]').each(function(){
    backgrounds.push($(this));
  });

  $(window).scroll(function() {
    for(var i=0; i < backgrounds.length; i++) {
      var $elem = backgrounds[i];
      var speed = $elem.data('speed');
      var yPos = -($win.scrollTop() / speed);
      var coords = '50% '+ yPos + 'px';
      $elem.css({ backgroundPosition: coords });  
    }
  });
}); 