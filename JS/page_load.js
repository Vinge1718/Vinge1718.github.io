var Start;

//Show Page Content after 2.5s
function myFunction(){
  Start = setTimeout(showpage,2500);
}

//Hide animation loader and show page content
function showpage(){
  // document.getElementById("loader").style.display="none";
  // document.getElementById("content").style.display="block";
  var loader = document.getElementById("loader");
  var content = document.getElementById("content");
  loader.parentNode.replaceChild(content, loader);
}
