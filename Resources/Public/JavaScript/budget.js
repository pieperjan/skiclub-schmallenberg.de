jQuery(document).ready(function () {
    getValue();
}); 
jQuery('.budget input').on('hover', function () {
    getValue();
}); 
function getValue() {
    var a = jQuery('.budget input');
}


 document.registrationForm.ageInputId.oninput = function(){
    document.registrationForm.ageOutputId.value = document.registrationForm.ageInputId.value;
 }