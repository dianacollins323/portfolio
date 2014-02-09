$( document ).ready(function() {
    //validates contact form
    $("#contactForm").validate();

    $("#indexLink").click(function() {
        target = $("#index");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    $("#contactLink").click(function() {
        target = $("#contact");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    //$('body').animate({scrollTop: target.offset().top}, 300);
});