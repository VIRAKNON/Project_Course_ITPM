$(document).ready(function(){
    $(".nav-link").click(function(e){
      e.preventDefault(); // Prevent the default link behavior
        var contentUrl = $(this).data("content");
        $("#main_content").load(contentUrl);
    });
});
