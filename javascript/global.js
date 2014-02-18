$( document ).ready(function() {
    //validates contact form
    $("#contactForm").validate();

    //animated scroll to elements on page
    $("#indexLink").click(function() {
        target = $("#index");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    $("#homeLink").click(function() {
        target = $("#index");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    $("#portfolioLink").click(function() {
        target = $("#portfolio");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    $("#resumeLink").click(function() {
        target = $("#resume");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    $("#contactLink").click(function() {
        target = $("#contact");
        $('body').animate({scrollTop: target.offset().top}, 600);
    });

    
});