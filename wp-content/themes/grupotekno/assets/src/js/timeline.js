$(".timeline-image-holder").on("mouseover", function() {
  $(this).children('img').fadeTo(250,0.30, function() {
      $(this).attr("src",$(".timeline-image-holder").attr("data-src-open"));
  }).fadeTo(250,1);
  return false; 
});
$(".timeline-image-holder").on("mouseout", function() {
  $(this).children('img').fadeTo(250,0.30, function() {
      $(this).attr("src",$(".timeline-image-holder").attr("data-src"));
  }).fadeTo(250,1);
  return false;  
});