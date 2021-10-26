<!DOCTYPE html>
<html lang="en">
<head>
  <title>html Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Webcoursera</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home.php">Home</a></li>
        <li><a href="#" >Categories</a></li>
        <li><a href="Login.php" >Login</a></li>
        <li><a href="Signup.php">Sign up</a></li>
      </ul>
      <div style="display: flex; justify-content: flex-end;padding-top: 12px;" >


        <p>
            <div class="input-group" >
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" style="padding-top: 6px;"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
         </p>
    </div>
    </div>
  </nav>
<div class="container">
  <img class="img-responsive" src="HTML.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>Faculty Name:Prof. Aditya K. Jagannatham</h3>
  <h3>References</h3>
  <p>Head First HTML and CSS, 2nd Edition</p>
  <p>HTML and CSS: Design and Build Websites</p>
  <h3 >No of Lectures: 8</h3>
  <h3>Categories: <button type="button" class="btn btn-secondary"><a href="HTML_short.php">Short</a></button> <td><a href="HTML_long.php"><button type="button" class="btn btn-secondary">Long</a></button> </h3>
  <table class="table">
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
        <td><a href="https://www.youtube.com/watch?v=ExsuwzamwH0&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5">Overview of HTML</a></td>
        <td>04:42</td>
      </tr>
      <tr>
        <td>2</td>
        <td><a href="https://www.youtube.com/watch?v=fG1d6Agq78o&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=2">My first HTML program</a></td>
        <td>06:51</td>
      </tr>
      <tr>
        <td>3</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=3">Elements-Tags-Attributes in HTML</a></td>
        <td>11:25</td>
      </tr>
      <tr>
        <td>4</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=4">Formatting Tags in HTML</a></td>
        <td>13:38</td>
      </tr>
      <tr>
        <td>5</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=5">Styles and CSS in HTML</a></td>
        <td>11:05</td>
      </tr>
      <tr>
        <td>6</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=6">Lists in HTML</a></td>
        <td>08:05</td>
      </tr>
      <tr>
        <td>7</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=7">Tables in HTML</a></td>
        <td>09:31</td>
      </tr>
      <tr>
        <td>8</td>
        <td><a href="https://www.youtube.com/watch?v=Murn0xZGrG4&list=PLqLNUdJt9E4cSWpo8aIJ9GQf3EgzDJMi5&index=8">Phrase Tags in HTML</a></td>
        <td>10:13</td>
      </tr>
    </tbody>
  </table>
  <h3 >About Author</h3>
  <p >Prof. Aditya K. Jagannatham received his Bachelors degree from the Indian Institute of Technology, Bombay and M.S. and Ph.D. degrees from the University of California, San Diego, U.S.A. From April '07 to May'09 he was employed as a senior wireless systems engineer at Qualcomm Inc., San Diego, California, where he was a part of the Qualcomm CDMA technologies (QCT) division. His research interests are in the area of next-generation wireless cellular and WiFi networks, with special emphasis on various 5G technologies such as massive MIMO, mmWave MIMO, FBMC, NOMA, Full Duplex and others. He has contributed to the 802.11n high throughput wireless LAN standard and has published extensively in leading international journals and conferences. He was awarded the CAL(IT)2 fellowship at the University of California San Diego and the Upendra Patel Achievement Award at Qualcomm.</p>
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
                      <li><a href="PYTHON_Course.php">PYTHON</a></li>
                      <li><a href="AJAX_Course.php">AJAX</a></li>
                      <li><a href="JAVA_Course.php">JAVA</a></li>
                      <li><a href="JAVASCRIPT_Course.php">JAVASCRIPT</a></li>
                      <li><a href="HTML_Course.php">HTML</a></li>
                      <li><a href="CSS_Course.php">CSS</a></li>
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
