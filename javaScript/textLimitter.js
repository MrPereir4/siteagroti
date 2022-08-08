jQuery(document).ready(function ($) {


    var captionHeight= $("#thisImg").height(); //160px - 10px bottom margin.
    $(".post_title_and_content").each(function(){

      var title=$(this).find(".post_title");
      var date=$(this).find(".post_date");
      var p=$(this).find(".post_content");
      var readMore=$(this).find(".read_more");

      var titleHeight = title.outerHeight();
      var dateHeight = date.outerHeight();
      var readMoreHeight = readMore.outerHeight();

      var lineHeight = 21;
      var pHeight= captionHeight - titleHeight - dateHeight - readMoreHeight;
      var newHeight= Math.floor(pHeight/lineHeight)*lineHeight;

      //p.height(newHeight);
      console.log(155);
    });
});
