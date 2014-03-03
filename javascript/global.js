$( document ).ready(function() {
    //validates contact form
    $("#contactForm").validate({
        submitHandler: function(form) {
            var serialized = $(form).serialize();
            var keyValuePairs = serialized.split('&');
            var formData = {};
            $.each(keyValuePairs, function(index, value) {
                //formData[key] = value
                var holder = value.split('=');
                formData[holder[0]] = holder[1];
            });

            $.ajax({
                url: 'php/validate_contact.php',
                type: 'POST',
                data: formData
            })
            .done(function(r) {
                console.log(r);
                $('#formErrors').empty();
                if (r.response == 'ok') {
                    alert("Your message has been sent.");
                    $("#contactForm")[0].reset();
                }
                else {
                    $.each(r.errors, function(index, value) {
                        $('#formErrors').append($('<li class="error">' + value + '</li>'));
                    });
                }
            })
            .fail(function(jqXHR, textStatus, error) {
                console.log(error);
                alert("There was an error sending your message. Please try again.");
            });
        }
    });

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

