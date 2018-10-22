<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>School Fund Grant</title>

  <!-- Favicons -->
 <!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  
</head>

<body>
  <section id="container">

    <!--header start-->
    <header class="header black-bg">
     <?php include ('includes/header.php');?>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <?php include('includes/sidebar.php');?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Withdrawal Page</h3>
        <!-- NOTIFICATION -->
        <div class="row mt">
         <div class="col-lg-4 col-md-4 col-sm-4">
            <h4 class="title"><strong>Notification!</strong></h4>
            <p>Maximum of <strong style="color:#F00">GHC500,000.00</strong> allow per transaction.</p>
            <p>Kindly contact the following for more details</p>
            <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i> info@schoolgrant.com</li>
              <li><i class="fa fa-phone-square"></i> +233558715384</li>
              <li><i class="fa fa-home"></i> Data Link Institude, Tema Main Campus,  5th Avenue Road (Comm. 10 & 11 New Road).</li>
              <li>P.O. Box CO 2481 Tema, Ghana.</li>
            </ul>
            <!-- contact_details -->
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Withdrawal Form</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="" method="POST">
			 <div class="form-group">
                <input type="number" name="amount" class="form-control" placeholder="Enter the Amount" data-rule="number" data-msg="Please enter Amount">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="detail" placeholder="Withdrawal Details" rows="3" data-rule="required" data-msg="Please write something!"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"><img src="lib/php-mail-form/loading.gif"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-success">Withdraw</button>
              </div>

            </form>
          </div>
		</div>
        <!-- /row -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
     <?php include('includes/footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>

  <!--Contactform Validation-->
  <script src="lib/php-mail-form/validate.js"></script>

</body>

</html>
