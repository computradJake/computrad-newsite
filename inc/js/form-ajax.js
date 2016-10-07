$(function() {
    // Get the form.
    var form = $('#contactForm');

    // Get the messages div.
    var formMessages = $('#message');

    // TODO: The rest of the code will go here...

    // Set up an event listener for the contact form.
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    // TODO
    // Serialize the form data.
	var formData = $(form).serialize();
	// Submit the form using AJAX.
	$.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
})
	.done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');

    // Set the message text.
    $(formMessages).text(response);

    // Clear the form.
    $('#name').val('');
    $('#email').val('');
    $('#msg_subject').val('');
    $('#message').val('');
})
	.fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');

    // Set the message text.
    if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
    } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
    }
});
});



});