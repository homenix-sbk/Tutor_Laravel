//activeクラス追加
$(function(){
 $('.global-nav li a').each(function(){
    var target = $(this).attr('href');
    if(location.href.match(target)) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });
});