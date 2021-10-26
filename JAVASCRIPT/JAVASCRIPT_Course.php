<!DOCTYPE JAVASCRIPT>
<JAVASCRIPT lang="en">
<head>
  <title>JAVASCRIPT Course</title>
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


    body { background-color: #e6e6e6 ; }
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
  
  if(isset($_POST['jsv1'])){
    updatedb("javascript","v1");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uDwSnnhl1Ng&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV");
  }
  if(isset($_POST['jsv2'])){
    updatedb("javascript","v2");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=2");
  }
  if(isset($_POST['jsv3'])){
    updatedb("javascript","v3");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=3");
  }
  if(isset($_POST['jsv4'])){
    updatedb("javascript","v4");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=4");
  }
  if(isset($_POST['jsv5'])){
    updatedb("javascript","v5");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=5");
  }
  if(isset($_POST['jsv6'])){
    updatedb("javascript","v6");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=6");
  }
  if(isset($_POST['jsv7'])){
    updatedb("javascript","v7");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=7");
  }
  if(isset($_POST['jsv8'])){
    updatedb("javascript","v8");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uxWO8Sd8PoY&list=PLsyeobzWxl7qtP8Lo9TReqUMkiOp446cV&index=8");
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
      <div style="display: flex; justify-content: flex-end;padding-top: 10px;" >
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
  <img class="img-responsive" src="JAVASCRIPT.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>Faculty Name:Dr. Debasis Samanta</h3>
  <h3>References</h3>
  <p>Eloquent JavaScript: A Modern Introduction to Programming
Book by Marijn Haverbeke</p>
  <p>JavaScript: The Good Parts</p>
  <h3 >No of Lectures: 8</h3>
  <h3>Categories: <td><button type="button" class="btn btn-secondary"><a href="JAVASCRIPT_short.php">Short</a></button> <td><button type="button" class="btn btn-secondary"><a href="JAVASCRIPT_long.php">Long</a></button> </td></h3>
  <table class="table table-condensed">
    <thead style="background-color: #737373;">
      <tr>
        <th>Lecture No</th>
        <th>Topic</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv1" name="jsv1"  value ="Introduction"/></form></td>
        <td>02:44</td>
      </tr>
      <tr>
        <td>2</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv2" name="jsv2" value ="Why you should Learn JavaScript Today"/></form></td>
        <td>06:48</td>
      </tr>
      <tr>
        <td>3</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv3" name="jsv3" value =What is Dom? | Document Object Model"/></form></td>
        <td>10:26</td>
      </tr>
      <tr>
        <td>4</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv4" name="jsv4" value ="First Hello World Program"/></form></td>
        <td>10:02</td>
      </tr>
      <tr>
        <td>5</td>
<td><form method="POST" action="#"><input type="submit"  id="jsv5" name="jsv5" value ="Statements and comments"/></form></td>
        <td>06:21</td>
      </tr>
      <tr>
        <td>6</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv6" name="jsv6" value ="VS code Theme & Live Server Plugin Setup"/></form></td>
        <td>12:07</td>
      </tr>
      <tr>
        <td>7</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv7" name="jsv7" value ="Variables & Data Types"/></form></td>
        <td>09:31</td>
      </tr>
      <tr>
        <td>8</td>
        <td><form method="POST" action="#"><input type="submit"  id="jsv8" name="jsv8" value ="Operators"/></form></td>
        <td>12:28</td>
      </tr>
    </tbody>
  </table>
  <h3 >About Author</h3>
  <p >Dr. Debasis Samanta holds a Ph.D. in Computer Science and Engineering from Indian Institute of Technology Kharagpur. His research interests and work experience spans the areas of Computational Intelligence, Data Analytics, Human Computer Interaction, Brain Computing and Biometric Systems. Dr. Samanta currently works as a faculty member at the Department of Computer Science & Engineering at IIT Kharagpur.</p>
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
</JAVASCRIPT>
