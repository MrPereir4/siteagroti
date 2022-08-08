$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 6000,
        easing: 'swing',
        step: function (now) {

            console.log(now)
            $(this).text(Math.ceil(now));
            if(now == 3000) {
              $(this).text("3.000");
            }
        }
    });
});
