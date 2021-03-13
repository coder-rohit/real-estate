// getting navbar
var navbar = document.getElementById('navbarMain');
// calling function function for sticky navbar
window.onscroll = function() {stickyNavbar()};
// creating function
function stickyNavbar(){
var x = $("#navbarMain").offset();
var w = window.pageYOffset;
  if (w >= x.top) {
    $( "#navbarMain" ).addClass( 'stickyNavbar');
  } else {
    $( "#navbarMain" ).removeClass( 'stickyNavbar');
    
  }
}