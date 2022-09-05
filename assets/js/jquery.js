jQuery(document).on('ready', function() {
    jQuery("#.article-card").slick({
      dots: false, // ドットインジケーターの表示
      vertical: true, // 垂直スライドモード
      verticalSwiping: true, // 垂直のスワイプを有効
      centerMode: true, // スライドを中心に表示して部分的に前後のスライドが見えるように設定（奇数番号のスライドに使用）
      slidesToShow: 3, // 表示するスライド数を設定
      cssEase: "linear",
      autoplaySpeed: 0,
      autoplay: true,
      speed: 7000,//画像が切り替わるまでの時間 今回の場合は難病で1枚分動くか
      pauseOnHover: false,//hoverしても止めない
      pauseOnFocus: false,//フォーカスが合っても止めない
      arrows: false,
    });
  });