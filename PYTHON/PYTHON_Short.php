<!DOCTYPE html>
<html lang="en">
<head>
  <title>PYTHON Course</title>
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
 body { background-color: #e6e6e6 ; 
color: white;
 background-image: url("bg1.jpg");}
  a:link {
  color: black;
}
/* visited link */
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: black;
}
/* selected link */
a:active {
  color: black;
}
</style>
</head>
<body>
<?php

  include ("../func.php") ; 
  
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  if(isset($_POST['pv1'])){
    updatedb("python","v1");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=Bx19jnGg14M&list=PLr6-GrHUlVf8num0GwJbdt0qKoIAxUIG6&index=1");
  }
  if(isset($_POST['pv2'])){
    updatedb("python","v2");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=hY-ycQImdxU&list=PLr6-GrHUlVf8num0GwJbdt0qKoIAxUIG6&index=2");
  }
  if(isset($_POST['pv4'])){
    updatedb("python","v4");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=-lASmlptciU&list=PLr6-GrHUlVf8num0GwJbdt0qKoIAxUIG6&index=4");
  }
  if(isset($_POST['pv6'])){
    updatedb("python","v6");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=89RRgHL9yVE&list=PLr6-GrHUlVf8num0GwJbdt0qKoIAxUIG6&index=6");
  }
}

?>
  <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Webcoursera</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home.php">Home</a></li>
        <li><a href="#" >Categories</a></li>
        <?php
        session_start();
        if ((isset($_SESSION["logg"])) && ($_SESSION["logg"]==="1")){
          echo "<li><a> Welcome ".$_SESSION["name"]. " </a></li>" ;
          echo "<li><a href=\"../logout.php\">Log Out</a></li>";
        } else {

          echo "<li><a href=\"../login.php\">Log In</a></li>";
        }?>
      </ul>
      <div style="display: flex; justify-content: flex-end;padding-top: 12px;" >
        <p>
            <div class="input-group" >
              <form>
              <input type="text" size="30" onkeyup="showResult(this.value)" placeholder="Search Courses...."  style=" padding-bottom: 12px padding-top: 12px;">
              <div id="livesearch"></div>
            </form>
            <span class="input-group-btn">
              <button class="btn btn-default" size: "30" stype="button"  style="font-size: 9px;"><span class="glyphicon glyphicon-search"></span></button>
            </span>
            </div>
         </p>
    </div>
    </div>
  </nav>
<div class="container">
 <img class="img-responsive" src="PYTHON.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>Channel Name: EJ Media</h3>
  <h3>References</h3>
  <p>Learn Python the Hard Way</p>
  <p>Fluent Python: Clear, Concise, and Effective Programming</p>
  <h3 >No of Lectures: 9</h3>
<h3>Current Category: <td><button type="button" class="btn btn-secondary"><a href="PYTHON_short.php">Short</a></button></h3>
  <h3>Categories:<td><button type="button" class="btn btn-secondary"><a href="PYTHON_short.php">Short</a></button> <td><button type="button" class="btn btn-secondary"><a href="PYTHON_long.php">Long</a> </button></td></h3>
  <table class="table table-condensed">
    <thead style="background-color: #737373;">
      <tr>
        <th>Lecture No</th>
        <th>Links</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="pv1" name="pv1" value ="Python Tutorial for Beginners - 1 - Introduction"/></form></td>
        <td>2:21</td>
      </tr>
      <tr>
        <td>2</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="pv2" name="pv2" value ="Python Tutorial for Beginners - 2 - Install"/></form></td>
        <td>2:57</td>
      </tr>
      <tr>
        <td>4</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="pv4" name="pv4" value ="Python Tutorial for Beginners - 4 - Data types - Strings"/></form></td>
        <td>3:45</td>
      </tr>
      <tr>
        <td>6</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="pv6" name="pv6" value ="Python Tutorial for Beginners - 6 - Data types - Numerics"/></form></td>
        <td>3:18</td>
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
              <p>?? 2014 BS3, All rights reserved</p>
          </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <h4>Courses</h4>
            <div class="col-md-6">
                  <ul class="pages">
                      <li><a href="../PYTHON/PYTHON_Course.php">PYTHON</a></li>
                      <li><a href="../AJAX/AJAX_Course.php">AJAX</a></li>
                      <li><a href="../JAVA/JAVA_Course.php">JAVA</a></li>
                      <li><a href="../JAVASCRIPT/JAVASCRIPT_Course.php">JAVASCRIPT</a></li>
                      <li><a href="../HTML/HTML_Course.php">HTML</a></li>
                      <li><a href="../CSS/CSS_Course.php">CSS</a></li>
                  </ul>
              </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="../extra.php#about">About us</a></li>
            <li><a href="../extra.php#contact">Contact Us</a></li>
            <li><a href="../extra.php#privacy">Privacy Policy</a></li>
            <li><a href="../extra.php#terms">Terms And Conditions</a></li>
            <li><a href="../extra.php#help">Help And Support</a></li>
          </ul>
      </div>
        </div>

      </div>
  </footer>


</div>
</html>
