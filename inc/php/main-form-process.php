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

    if (empty($_POST['company-size']))
        $errors['company-size'] = 'Company size is required.';

    if (empty($_POST['message']))
        $errors['message'] = 'Message is required.';


// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        $emailto = "Leads@computrad.co.uk";
        $subject = "New Lead";
        $name =         $_POST['name'];
        $email =        $_POST['email'];
        $phone =        $_POST['phone'];
        $company =      $_POST['company'];
        $companysize =  $_POST['company-size'];
        $message =      $_POST['message'];
        $webpage =      $_POST['webpage'];


    $email_message = "Lead details below.\n\n";
    $email_message .= "Name: ". $name ."\n";
    $email_message .= "Company: ". $company ."\n";
    $email_message .= "Company Size: ". $companysize ."\n"; 
    $email_message .= "Email: ". $email ."\n";
    $email_message .= "Phone Number: ". $phone ."\n";
    $email_message .= "Message: ". $message ."\n";
    $email_message .= "Webpage submitted on: ". $webpage."\n";
 

        $headers = 'From: '.$emailto."\r\n".'Reply-To:'.$emailto."\r\n".'X-Mailer: PHP/' . phpversion();
        
        mail($emailto, $subject, $email_message, $headers);

        $data['success'] = true;
        $data['message'] = 'Success!';


    }

    // return all our data to an AJAX call
    echo json_encode($data);