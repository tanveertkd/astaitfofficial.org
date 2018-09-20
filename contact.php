<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Welcome to the Assam State Taekwon-do Association." />
    <title>Welcome to ASTA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheets -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!--Navigation Bar-->

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">

        <!-- LOGO -->

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html" class="navbar-brand">Assam State Taekwon-do Association</a>
        </div>

        <!-- Items -->

        <div class="collapse navbar-collapse" id="mainNavBar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <!--<li><a href="gallery.html">Gallery</a></li>-->
            <!-- Dropdown Menu -->

            <li class="dropdown">
              <div class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> navigation <span class="caret"></span></div>
              <ul class="dropdown-menu">
                <li><a href="events.html">Events</a></li>
      					<li><a href="about.html">About</a></li>
      					<li><a href="contact.php">Get In Touch</a></li>
              </ul>
            </li>
          </ul>

          <!-- Social Icons -->

          <ul class="nav navbar-nav navbar-right">
            <li class="facebook"><a href="https://www.facebook.com/contactasta/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li class="instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>

          <!-- Social Icons Ends -->

        </div>

      </div>
    </nav>

    <!--Navigation Bar Ends-->

    <!-- Header

    <header class="container-fluid">
      <div class="row">
        <h2>WELCOME</h2>
        <p>This is the official website of ASTA</p>
      </div>
    </header>

    Header Ends-->

    <!-- Main Content -->
    <div class="main-content container">
      <div class="row">
        <!--Contact Form Starts-->
        <div class="contact">
          <h3>Get In Touch!</h3>
          <h4>Please fill out the form below and we will get back to you as soon as possible.</h4>
          <!-- Contact Details -->
          <div class="col-md-9">
            <form action="contact.php" method="POST">
              <input type="text" name="contact_name" maxlength="30" placeholder="Name"> <br />
              <input type="email" name="contact_email" maxlength="25" placeholder="Email"> <br />
              <input type="text" name="message" class="message" maxlength="1000" placeholder="Your Query"></textarea><br />
              <input class="send" type="submit" value="Submit">
            </form>

            <!--PHP Starts-->

              <?php
              if(isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['message']))
              {
                $contact_name=$_POST['contact_name'];
                $contact_email=$_POST['contact_email'];
                $message=$_POST['message'];

                if(!empty($contact_name)&&!empty($contact_email)&&!empty($message))
                {
                  if(strlen($contact_name)>30||strlen($contact_email)>25||strlen($message)>1000)
                  {
                    echo "<html><body><div class=\"alert-warning\"> Max length excceded in some field/fields </div></body></html>";
                  }
                  else
                  {
                    $to='admin@astaitfofficial.org';
                    $subject='Contact From Submitted';
                    $body=$message;
                    $headers='From: '.$contact_email;

                    if(@mail($to, $subject, $body, $headers))
                    {
                      echo "<html><body><div class=\"alert alert-success\">
                            <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> Query Submitted! We'll get back to you soon!
                            </div></body></html>";
                    }
                    else
                    {
                      echo "<html><body><div class=\"alert alert-danger\">
                            <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> Sorry. Something went wrong.
                            </div></body></html>";
                    }
                  }
                }
                else
                {
                  echo "<html><body><div class=\"alert alert-warning\">
                        <a href=\"#\" class\"close\" data-dismiss=\"alert\" aria-lebel=\"close\">&times</a> All fields are required.
                        </div></body></html>";
                }
              }
            ?>

            <!--PHP Ends-->
          </div>
          <!-- Contact Details Ends-->
          <div class="col-md-3 side">
            <div><i class="fa fa-envelope" aria-hidden="true"></i> <p>contact@astaitfofficial.org</p>
            </div>
            <div><i class="fa fa-map-marker" aria-hidden="true"></i> <p>Manisha Residency
                    Rukminigaon, Guwahati
                    Assam - 781022</p>
            </div>
            <div><i class="fa fa-mobile" aria-hidden="true"></i> <p>+91 97070 27636</p></div>
          </div>
        </div>
        <!--Contact Form Ends-->
      </div>
      <!-- Row Ends -->
    </div>
    <!-- Main Content Ends -->

    <!-- Footer Starts -->
    <footer>
      <div class="container">
        <div class="pull-left">
          <i class="fa fa-copyright" aria-hidden="true"></i>ASTA
        </div>
        <div class="pull-right">
          Developed & Maintained By: Tanveer Hazarika
        </div>
      </div>
    </footer>
    <!-- Footer Ends -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
