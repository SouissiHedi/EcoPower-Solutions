
<?php

session_start();
$emailErr = $email = $contentMail= $nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["contentMail"])) {
    $nameErr = "Message is required";
  } else {
    $contentMail = test_input($_POST["contentMail"]);
  }

  if($nameErr=="" && $emailErr=="" && !empty($_POST["contentMail"])&& !empty($_POST["email"])){
    $_SESSION['mail_env']=$_POST["email"];
    $_SESSION['message']=$_POST["contentMail"];
    header("Location: sendmail.php");
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"/>

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>EcoPower Solutions</title>
  <!--<img src="images/logo.png" height="100px" width="100px">-->

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
</head>
  
  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
              <img src="images/logo.png" height="50px" width="60px">
                <a class="navbar-brand" href="home.php">
                &thinsp;
                  <span>
                  EcoPower Solutions
                  </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex  flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="About.php">About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Media.php">Media </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">Contact <span class="sr-only">(current)</span></a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->
    </div>
    
    
  
    <!-- contact section -->
    

    <section class="contact_section layout_padding">
      <div class="container contact_heading">
        <h2>
        Contact
        </h2>
      </div>
      <div class="container">
        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="form1" enctype="multipart/form-data"  method="post" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNameP">Email<span style="font-size: 80%;color: #D63301;" id="nameErr">&emsp;* <?php echo $emailErr;?></span></label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>"/>
            </div>

          </div>
            <div class="form-group">
              <label for="inputdesc">Your Message<span style="font-size: 80%;color: #D63301;" id="descErr">&emsp;* <?php echo $nameErr;?></span></label>
              <input type="text" class="form-control" id="contentMail" name="contentMail" value="<?php echo $contentMail;?>"/>
            </div>

          <div class="d-flex justify-content-center">
            <button type="submit" class="">Send</button>
          </div>
        </form>
      </div>
    </section>
  
    <br><br><br><br><br>
  
    <!-- end contact section -->
    <div class="footer_bg">
      <!-- info section -->
      <section class="info_section layout_padding2-bottom">
        <div class="container">
          <h3 class="">
          EcoPower Solutions
          </h3>
        </div>
        <div class="container info_content">
  
          <div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    contact us
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Lorem ipsum
                      </a>
                    </li>
                    <li>
                      <a href="">
                        dolor sit amet,
                      </a>
                    </li>
                    <li>
                      <a href="">
                        consectetur
                      </a>
                    </li>
                    <li>
                      <a href="">
                        adipiscing
                      </a>
                    </li>
                    <li>
                      <a href="">
                        elit, sed do eiusmod
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
            <div class="social-box">
              <a href="https://www.facebook.com/profile.php?id=61553911525344">
                <img src="images/fb.png" alt=""/>
              </a>
              <a href="">
                <img src="images/instagram1.png" alt=""/>
              </a>
            </div>
          </div>
        </div>
  
      </section>
  
      <!-- end info_section -->
  
      <!-- footer section -->
      
    </div>
  
  
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
 
  </body></html>
