jQuery(document).on("click", ".openbtn8" ,function () {
    $(this).toggleClass('active');
})
   


  jQuery(function(){
    jQuery("nav").hide();
    jQuery(document).on("click",".menubtn" ,function(){//メニューボタンをクリックしたとき
        $("nav").slideToggle(300);//0.3秒で表示したり非表示にしたりする
    });
});
  

// jQuery('.zoomInClickTrigger').on('click', function() {
//     $(this).addClass('zoomIn2');
//   })
  
//   jQuery('.news-item').on('click', function() {
//     $(this).addClass('fadeUp2');
//   })
  
  
//   jQuery('.zoomInClickTrigger').on('mouseenter', function() {
//     $(this).addClass('zoomIn');
//   })
//   jQuery('.zoomInClickTrigger').on('mouseenter', function() {
//     $(this).removeClass('zoomOut');
//   })
  
  
//   jQuery('.zoomInClickTrigger').on('mouseleave', function() {
//     $(this).addClass('zoomOut');
//   })
//   jQuery('.zoomInClickTrigger').on('mouseleave', function() {
//     $(this).removeClass('zoomIn');
//   });
  
 

  
  jQuery('.job-contents').slick({
    
  
    autoplay: false, //自動でスクロール
      autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
      speed: 300, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 2, //表示するスライドの数
      swipe: true, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: true, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: true, //スライダーにマウスホバーした時にスライドを停止させるか
      centerMode: true,
      centerPadding: '10%',
      dots: true,
      
    responsive: [
      {
          breakpoint: 1200,
          settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '5%',
          speed: 300,
      }}
  ]
  });

 