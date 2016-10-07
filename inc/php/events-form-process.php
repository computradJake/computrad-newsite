<?php
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';

    if (empty($_POST['company']))
        $errors['company'] = 'Company name is required.';


// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        $emailto = "compleads@epaymentsprocessing.co.uk";
        $subject = "New Event Inquiry";
        $name =         $_POST['name'];
        $email =        $_POST['email'];
        $company =      $_POST['company'];
        $reference =    $_POST['reference'];


    $email_message = "Event Inquiry details below.\n\n";
    $email_message .= "Name: ". $name ."\n";
    $email_message .= "Email: ". $email ."\n";    
    $email_message .= "Company: ". $company ."\n";
    $email_message .= "Event Reference: ". $reference ."\n"; 

 

        $headers = 'From: '.$emailto."\r\n".'Reply-To:'.$emailto."\r\n".'X-Mailer: PHP/' . phpversion();
        
        mail($emailto, $subject, $email_message, $headers);

        $data['success'] = true;
        $data['message'] = 'Success!';


    }

    // return all our data to an AJAX call
    echo json_encode($data);