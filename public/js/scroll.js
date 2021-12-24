$(function(){
  $('a[href^="#"]').click(function(){
    let speed = 800;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top - 50;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
})