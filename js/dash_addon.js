$(document).on("click",".sidebar-toggle",function(){
    $(".wrapper").toggleClass("toggled");
});

function locationHashChanged() {
	var includeDiv = $("#include");
  	if (location.hash === '#meet') {
    	includeDiv.load('int/meet.php');
  	}
  	else if (location.hash === '#add') {
    	includeDiv.load('int/chooseadd.php');
  	}
  	else if (location.hash === '#edit') {
    	includeDiv.load('int/chooseedit.php');
  	}
  	else if (location.hash === '#logout') {
    	location.href = 'int/logout.php';
  	}
}
window.onhashchange = locationHashChanged;