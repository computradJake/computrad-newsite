// main-form.js
$(document).ready(function() {

    // process the form
    $('#eventsform').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)


        var formData = {
            'name'              : $('input[id=name]').val(),
            'company'           : $('input[id=company]').val(),            
            'email'             : $('input[id=email]').val(),
            'reference'         : $('input[id=reference]').val(),
        };

        console.log(formData);

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'http://www.computrad.co.uk/new-site2/inc/php/events-form-process.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                if (data.success){
                $('form').append('<div id="alert-success" class="alert alert-success">Thank you for contacting us</div>');
                }
                $("#eventsform")[0].reset();
                setTimeout(function(){
                    $('#alert-success').remove();
                }, 5000);
                

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});