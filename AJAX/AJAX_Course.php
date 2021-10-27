<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJAX Course</title>
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
 background-image: url("bg1.jpg"); }
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

<?php

  include ("../func.php") ;

if($_SERVER["REQUEST_METHOD"]=="POST"){

  if(isset($_POST['av1'])){
    updatedb("ajax","v1");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=dtrWHL9Asec&list=PL75533094B526EBAC&index=1");
  }
  if(isset($_POST['av2'])){
    updatedb("ajax","v2");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=lX5e0_3hvOw&list=PL75533094B526EBAC&index=2");
  }
  if(isset($_POST['av3'])){
    updatedb("ajax","v3");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=ZImyZeO4VBc&list=PL75533094B526EBAC&index=3");
  }
  if(isset($_POST['av4'])){
    updatedb("ajax","v4");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=c3Dcyz9PDwc&list=PL75533094B526EBAC&index=4");
  }
  if(isset($_POST['av5'])){
    updatedb("ajax","v5");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=xv3plu45yZ4&list=PL75533094B526EBAC&index=5");
  }
  if(isset($_POST['av6'])){
    updatedb("ajax","v6");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=UhUCg11M5Nw&list=PL75533094B526EBAC&index=6");
  }
  if(isset($_POST['av7'])){
    updatedb("ajax","v7");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=uthxzVAo4ws&list=PL75533094B526EBAC&index=7");
  }
  if(isset($_POST['av8'])){
    updatedb("ajax","v8");
    unset($_POST);
    header("location: https://www.youtube.com/watch?v=A6iu0Ma1xl4&list=PL75533094B526EBAC&index=8");
  }
}

?>
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
<img class="img-responsive" src="AJAX.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>Channel Name: Mopixie Stats Infographics</h3>
  <h3>References</h3>
  <p>Professional Ajax, 2nd Edition</p>
  <p>Head First Ajax</p>
  <h3 >No of Lectures: 8</h3>

  <h3>Categories: <button type="button" class="btn btn-secondary"><a href="AJAX_short.php">Short</a></button> <td><a href="AJAX_long.php"><button type="button" class="btn btn-secondary">Long</a></button> </h3>

  <table class="table table-condensed">
    <thead  style="background-color: #737373;">
      <tr>
        <th>Lecture No</th>
        <th>Links</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>1</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av1" name="av1" value ="AJAX Tutorial - Introduction"/></form></td>
        <td>3:21</td>
      </tr>
      <tr>
        <td>2</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av2" name="av2" value ="Ajax Tutorial 2 System Requirements"/></form></td>
        <td>06:35</td>
      </tr>

      <tr>
        <td>3</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av3" name="av3" value ="AJAX Tutorial 3 - Getting to know Ajax"/></form></td>
        <td>3:09</td>
      </tr>
      <tr>
        <td>4</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av4" name="av4" value ="AJAX Tutorial 4 Modifying Web Pages on the Fly"/></form></td>
        <td>05:30</td>
      </tr>
      <tr>
        <td>5</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av5" name="av5" value ="Ajax tutorials 5 Searching in Real Time with Live Searches"/></form></td>
        <td>3:05</td>
      </tr>
      <tr>
        <td>6</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av6" name="av6" value ="Ajax tutorials 6 Getting the Answer With Autocomplete"/></form></td>
        <td>3:10</td>
      </tr>
      <tr>
        <td>7</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av7" name="av7" value ="Dragging and Dropping HTML Elements With Ajax - 7"/></form></td>
        <td>05:43</td>
      </tr>
      <tr>
        <td>8</td>
        <td style="color: #000000;"><form method="POST" action="#"><input type="submit"  id="av8" name="av8" value ="Getting instant login feedback Ajax Tutorial 8"/></form></td>
        <td>10:13</td>
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
