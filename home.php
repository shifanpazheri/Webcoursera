<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.footer-bs {
      background-color: #3c3d41;
    padding: 60px 40px;
    color: rgba(255,255,255,1.00);
    margin-bottom: 20px;
    border-bottom-right-radius: 6px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 6px;
  }
  .footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
  .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
  .footer-bs .footer-brand h2 { margin:0px 0px 10px; }
  .footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

  .footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
  .footer-bs .footer-nav ul.pages li { padding:5px 0px;}
  .footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00);  text-transform:uppercase; }
  .footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
  .footer-bs .footer-nav h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
  }

  .footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
  .footer-bs .footer-nav ul.list li { padding:5px 0px;}
  .footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
  .footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

  .footer-bs .footer-social ul { list-style:none; padding:0px; }
  .footer-bs .footer-social h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
  }
  .footer-bs .footer-social li { padding:5px 4px;}
  .footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
  .footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

  .footer-bs .footer-ns h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
  }
  .footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

  @media (min-width: 768px) {
    .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
  }

.checked {
  color: orange;
}
body {
  background-color: #e6e6e6;
}
table.table-bordered{
    border:2px solid  black;
    margin-top:20px;
  }

table.table-bordered > thead > tr > th{
    border:2px solid black;
}
table.table-bordered > tbody > tr > td{
    border:2px solid black;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Webcoursera</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#" >Categories</a></li>
      <li><a href="Login.php" >Login</a></li>
      <li><a href="Signup.php">Sign up</a></li>
    </ul>
    <div style="display: flex; justify-content: flex-end;padding-top: 10px;" >


      <p>
          <div class="input-group" >
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            </span>
          </div><!-- /input-group -->
       </p>
  </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h1>Webcoursera</h1>
   <p>Welcome to Webcoursera</p>
    <p>Webcoursera has the most popular HTML, CSS, JS and other related courses for developing
    responsive, mobile-first projects on the web.</p>
  </div>
</div>
<h1 style="text-align:center;">Courses </h1>

<div class="container">

  <table class="table table-bordered" style="text-align:center;" ">
    <thead style="text-align:center;background-color: #737373;">
      <tr style="text-align:center;" >
        <th style="text-align:center;">HTML</th>
        <th style="text-align:center;">CSS</th>
        <th style="text-align:center;">JAVASCRIPT</th>
      </tr>
    </thead>
    <tbody style="text-align:center;">
      <tr>
        <td style="text-align:center;">
<div><a href="HTML\HTML_Course.php">
<img src="HTML.png" alt="HTML" height=200 width=200">
</a>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<div><a class="btn btn-primary" href="HTML\HTML_Course.php" role="button">View Course</a></div>
</td>
        <td style="text-align:center;" ><div><a href="CSS\CSS_Course.php">
<img src="CSS.png" alt="CSS" height=200 width=200">
</a>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<div><a class="btn btn-primary" href="CSS\CSS_Course.php" role="button">View Course</a></div>
</td>
        <td style="text-align:center;"><div><a href="JAVASCRIPT\JAVASCRIPT_Course.php">
<img src="JAVASCRIPT.png" alt="JAVASCRIPT" height=200 width=200>
</a>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<div><a class="btn btn-primary" href="JAVASCRIPT\JAVASCRIPT_Course.php" role="button">View Course</a></div>
</td>
      </tr>
    </tbody>
  </table>
  <table  class="table table-bordered" style="text-align:center;">
    <thead style="text-align:center;background-color: #737373;>
      <tr style="text-align:center;">
        <th style="text-align:center;">JAVA</th>
        <th style="text-align:center;">AJAX</th>
        <th style="text-align:center;">PYTHON</th>
      </tr>
    </thead>
    <tbody style="text-align:center;">
      <tr style="text-align:center;">
        <td style="text-align:center;"><div><a href="JAVA\JAVA_Course.php">
<img src="JAVA.png" alt="JAVA" height=200 width=200>
</a>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<div><a class="btn btn-primary" href="JAVA\JAVA_Course.php" role="button">View Course</a></div>
</td>
        <td style="text-align:center;"><div><a href="AJAX\AJAX_Course.php">
<img src="AJAX.png" alt="AJAX" height=200 width=200>
</a>
</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<div><a class="btn btn-primary" href="AJAX\AJAX_Course.php" role="button">View Course</a></div>
</td>
        <td style="text-align:center;"><div><a href="PYTHON\PYTHON_Course.php">
<img src="PYTHON.png" alt="PYTHON" height=200 width=200>
</a></div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<div><a class="btn btn-primary" href="PYTHON\PYTHON_Course.php" role="button">View Course</a></div>
</td>
      </tr>
    </tbody>
  </table>
</div>

</body>

<div class="container">
  <section style="height:80px;"></section>
<div class="row" style="text-align:center;">

</div>
  <!----------- Footer ------------>
  <footer class="footer-bs">
      <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>Webcoursera</h2>
              <p>Your One stop Site to learn it all</p>
              <p>© 2014 BS3, All rights reserved</p>
          </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <h4>Courses</h4>
            <div class="col-md-6">
                  <ul class="pages">
                      <li><a href="PYTHON\PYTHON_Course.php">PYTHON</a></li>
                      <li><a href="AJAX\AJAX_Course.php">AJAX</a></li>
                      <li><a href="JAVA\JAVA_Course.php">JAVA</a></li>
                      <li><a href="JAVASCRIPT\JAVASCRIPT_Course.php">JAVASCRIPT</a></li>
                      <li><a href="HTML\HTML_Course.php">HTML</a></li>
                      <li><a href="CSS\CSS_Course.php">CSS</a></li>
                  </ul>
              </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
          <h4>Quick Links</h4>
          <ul>
              <li><a href="extra.php#about">About us</a></li>
              <li><a href="extra.php#contact">Contact Us</a></li>
              <li><a href="extra.php#privacy">Privacy Policy</a></li>
              <li><a href="extra.php#terms">Terms And Conditions</a></li>
              <li><a href="extra.php#help">Help And Support</a></li>
            </ul>
        </div>

      </div>
  </footer>


</div>
<!-- Footer -->
</html>
