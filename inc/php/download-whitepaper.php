<?php include '../layout/whitepapers.php'; ?>
<?php

$errorMSG = "";

$this_w = $w[$_GET['w_id']];
//print_r($whitepaper);

// NAME
if (empty($_GET["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_GET["name"];
}

// EMAIL
if (empty($_GET["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_GET["email"];
}



$EmailTo = "sales@computrad.co.uk";
$Subject = "Whitepaper Download ";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Whitepaper: ";
$Body .= $this_w['name'];
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == "")
{
   echo '
    <a href="'.$this_w['file'].'" target="_blank" class="pdf_download">
         <h2>Your Download:</h2>
         <img src="' . $this_w['thumb'] . '" />
         ' . $this_w['name'] . '
    </a>
    ';
}
else
    {
    echo '<div class="alert alert-danger">';
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
    echo '</div>';
}

?>