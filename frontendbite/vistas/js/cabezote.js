/*=============================================
CABEZOTE
=============================================*/

$(document).ready(function(){
$("#menu-icon").click(function(){

   if($(".menu").hasClass('open')){
            $(".menu").removeClass('open');
        }
        else{
            $(".menu").addClass('open');
        }
		
})
});
