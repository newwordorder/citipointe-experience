$(document).ready(function(){
// Add smooth scrolling to all links
$("a:not(.accordian-toggle)").on("click",function(o){
// Make sure this.hash has a value before overriding default behavior
if(""!==this.hash){
// Prevent default anchor click behavior
o.preventDefault();
// Store hash
var t=this.hash;
// Using jQuery's animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
$("html, body").animate({scrollTop:$(t).offset().top},800,function(){
// Add hash (#) to URL when done scrolling (default click behavior)
window.location.hash=t})}// End if
})});