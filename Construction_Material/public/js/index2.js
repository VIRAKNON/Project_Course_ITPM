function showsidebar1() {
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'flex';
}

function hidesidebar1(event) {
    event.preventDefault();
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'none';
}

function show() {
    const side_bar = document.querySelector(".sideBar");
    side_bar.style.display = 'flex';
}

function hide(event) {
    event.preventDefault();
    const side_bar = document.querySelector(".sideBar");
    side_bar.style.display = 'none';
}

$(document).ready(function(){
    $(".loadPage").click(function(e){
      e.preventDefault(); // Prevent the default link behavior
      var url = $(this).attr("href"); // Get the URL of the link
      $("#main_content").load(url); // Load the URL into the main_content div
    });
});
