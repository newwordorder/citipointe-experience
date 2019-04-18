function openTab(e,t){
// Declare all variables
var a,l,n;
// Get all elements with class="tab-content" and hide them
for(l=document.getElementsByClassName("tab-content"),a=0;a<l.length;a++)l[a].style.display="none";
// Get all elements with class="tablinks" and remove the class "active"
for(n=document.getElementsByClassName("tab-link"),a=0;a<n.length;a++)n[a].className=n[a].className.replace(" active","");
// Show the current tab, and add an "active" class to the button that opened the tab
document.getElementById(t).style.display="block",e.currentTarget.className+=" active"}