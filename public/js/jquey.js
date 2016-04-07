 $(document).ready(function(){
 	 $(function() {
    	$("#draggable").draggable();
  });
  $(function() {
    $("#draggable2").draggable();
  });
   $(function() {
    $("#draggable3").draggable();
  });
    $(function() {
    $("#draggable4").draggable();
  });
  	
 });

var a=$(".pagehome")
 var b=$(".pageimages")
var c=$(".pagenosotros")
$(".mymenu li" ).removeClass("active")
if (page=="home"){
	a.addClass("active");
}
else if(page=="images"){
	b.addClass("active");
}
else if(page=="nosotros"){
	c.addClass("active");
}





   