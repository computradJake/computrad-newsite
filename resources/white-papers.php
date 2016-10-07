<!doctype html>
<html lang="en">

  <head>    
    <meta charset="utf-8">
    <meta name="keywords" content="IT Support, IT Support Services, Computer Support, IT Services, IT Outsourcing, Managed Services, Managed IT Services, CompuSupport, CompuManage">
    <meta name="description" content="Computrad (Europe) Holdings Ltd provide IT support services in London. Please call 0208 997 9888 for more information on our range of IT services.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Computrad">
<?php include '../inc/modules/headinglinks.php'; ?>
    <title>Free Downloadable Whitepapers | Computrad</title>

    <style>



    </style>

  </head>

  <body>
<?php include '../inc/modules/navbar.php'; ?>




      <div class="content-wrap">



<section id="main-services" class="section main-feature-gray first-section">
  <div class="container">

    <div class="section-header">
        <h1 class="section-title">Whitepapers</h1>
        <p>Browse our range of whitepapers</p>
    </div>

  </div>
</section>



<?php include '../inc/layout/whitepapers.php'; ?>
<?php

$class = '';
foreach($w as $id=>$wp) {

  if ($class == 'main-feature-gray') {
    echo '
    <section >
    <div class="container">
      <div class="row">
    
        <div class="col-md-4 col-sm-4 fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="' . $wp['thumb'] . '" class="img-responsive" alt=""> 
          
        </div>
    
        <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="feature-item">
            <h2 class="title-small">' . $wp['name'] . '</h2>
            ' . $wp['desc'] . '
            <button onClick="openWhitepaperForm(' . $id . ', \'' . $wp['name'] . '\');" class="btn btn-lg btn-primary">Download Whitepaper</button>
          </div>
        </div>  
    
      </div>
    </div>
    </section>
    ';

    $class = '';
  } else {
    $class = 'main-feature-gray';

    echo '
    <section id="" class="main-feature-gray">
    <div class="container">
      <div class="row">
    
         <div class="col-md-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="feature-item">
            <h2 class="title-small">' . $wp['name'] . '</h2>
            ' . $wp['desc'] . '
             <button onClick="openWhitepaperForm(' . $id . ', \'' . $wp['name'] . '\');" class="btn btn-lg btn-primary">Download Whitepaper</button>
          </div>
        </div>  
        
        <div class="col-md-4 col-sm-4 fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="' . $wp['thumb'] . '" class="img-responsive" alt="">
         
        </div>
    
      </div>
    </div>
    </section>
    ';
  }
}


?>



<!-- Modal -->
<div class="modal fade" id="datasheetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Download Dastasheet</h4>
      </div>
      <div class="modal-body">





        <form role="form" id="whitepaperForm" class="contact-form" data-toggle="validator" class="shake" action="">
            <div class="form-group">
              <div class="controls">
                <i class="mdi-action-account-box"></i>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="row nopadding">
            <div class="col-md-6">
            <div class="form-group">
              <div class="controls">
                <i class="mdi-content-mail"></i>
                <input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <div class="controls">
                <i class="mdi-communication-phone"></i>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            </div>
            </div>
            <div class="row nopadding">
            <div class="col-md-8">
            <div class="form-group">
              <div class="controls">
                <input type="text" name="company" id="company" class="form-control" placeholder="Company" required data-error="Please enter your company name">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            </div>

            </div>


            <button type="button" id="submit" class="btn btn-primary btn-block" onclick="subWhitepaperForm();"></i> Download Whitepaper</button>
            <input type="hidden" name="w_id" id="w_id" value="" />
            <div id="msgSubmit" class="h3 text-center hidden"></div>

            <div id="whitepaperResult"></div>

            <div class="clearfix"></div>

          </form>




<script>

  function openWhitepaperForm(w_id, w_name)
  {
    $("#datasheetModal").modal('show');
    $("#w_id").val(w_id);
    $("#whitepaperResult").html(w_name);
  }

  function subWhitepaperForm()
  {
    var vars = $("#whitepaperForm").serialize();
    //alert(vars);

    $.get( "/inc/php/download-whitepaper.php", vars, function(data) {
      $("#whitepaperResult").html(data);
    });
  }

</script>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









        <section id="cta">
          <div class="container">
            <div class="row text-center">         
                <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Interested in our services?</h3>
                 <a href="#contact" class="btn btn-lg btn-border">Contact Us</a>
              </div>
          </div>
        </section>



<?php include '../inc/modules/footer.php'; ?>
<?php include '../inc/modules/js_plus.php'; ?>


  </body>

</html>
