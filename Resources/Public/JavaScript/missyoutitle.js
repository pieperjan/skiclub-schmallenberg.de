
// Get current title and icon
var title = $('title').text();
var favicon = $('link[rel=icon]').attr('href');
var newtitle = 'Geh nicht!';

// Active
window.addEventListener('focus', resetTitleicon);

// Inactive
window.addEventListener('blur', changeTitleicon);

// Change page title and icon
function changeTitleicon(){
 $("title").text(newtitle); 
 $('link[rel=icon]').attr('href', 'i-Miss-You-master/favicon.ico');
}

// Reset the page title and icon
function resetTitleicon(){
 $('title').text(title);
 $('link[rel=icon]').attr('href', favicon);
}