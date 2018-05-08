function showPage(selectedPage){
	var pages = document.getElementsByClassName("page");

	var index;
	for(index = 0; index < pages.length; index++){
		var page = pages[index];
		page.style.display = 'none';
	}

	var pageToShow = document.getElementById(selectedPage);
	pageToShow.style.display = 'block';

    if(selectedPage == 'home')
        document.getElementsByClassName("header")[0].classList.remove("header-relative");
    else
        document.getElementsByClassName("header")[0].classList.add("header-relative");
}
//
// function setSlidesBackground() {
// 	var slides = document.getElementsByClassName("slide");
//
// 	for(var i = 0; i < slides.length; i++) {
// 		slides.item(i).style.background = "url("+slides.item(i).getAttribute("data-source")+")";
// 	}
// }
