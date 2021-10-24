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
        <li class="active"><a href="home.html">Home</a></li>
        <li><a href="#" >Categories</a></li>
        <li><a href="Login.html" >Login</a></li>
        <li><a href="Signup.html">Sign up</a></li>
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

  <img class="img-responsive" src="AJAX.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>Channel Name: Mopixie Stats Infographics</h3>
  <h3>References</h3>
  <p>Professional Ajax, 2nd Edition</p>
  <p>Head First Ajax</p>
  <h3 >No of Lectures: 8</h3>
  <h3>Current Category: <button type="button" class="btn btn-secondary"><td><a href="AJAX_long.html">Long</a> </td></h3></button>
  <h3>Categories: <button type="button" class="btn btn-secondary"><td><a href="AJAX_short.html">Short</a></button> <td><button type="button" class="btn btn-secondary"><a href="AJAX_long.html">Long</a> </button></td></h3>
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
        <td>2</td>
        <td><a href="https://www.youtube.com/watch?v=lX5e0_3hvOw&list=PL75533094B526EBAC&index=2">Ajax Tutorial 2 System Requirements</a></td>
        <td>06:35</td>
      </tr>
      <tr>
        <td>4</td>
        <td><a href="https://www.youtube.com/watch?v=c3Dcyz9PDwc&list=PL75533094B526EBAC&index=4">Ajax tutorial 4 Modifying Web Pages on the Fly</a></td>
        <td>05:30</td>
      </tr>
      <tr>
        <td>7</td>
        <td><a href="https://www.youtube.com/watch?v=uthxzVAo4ws&list=PL75533094B526EBAC&index=7">Dragging and Dropping HTML Elements With Ajax - 7</a></td>
        <td>05:43</td>
      </tr>
      <tr>
        <td>8</td>
        <td><a href="https://www.youtube.com/watch?v=A6iu0Ma1xl4&list=PL75533094B526EBAC&index=8">Getting instant login feedback Ajax Tutorial 8</a></td>
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
                      <li><a href="PYTHON_Course.html">PYTHON</a></li>
                      <li><a href="AJAX_Course.html">AJAX</a></li>
                      <li><a href="JAVA_Course.html">JAVA</a></li>
                      <li><a href="JAVASCRIPT_Course.html">JAVASCRIPT</a></li>
                      <li><a href="HTML_Course.html">HTML</a></li>
                      <li><a href="CSS_Course.html">CSS</a></li>
                  </ul>
              </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="extra.html#about">About us</a></li>
            <li><a href="extra.html#contact">Contact Us</a></li>
            <li><a href="extra.html#privacy">Privacy Policy</a></li>
            <li><a href="extra.html#terms">Terms And Conditions</a></li>
            <li><a href="extra.html#help">Help And Support</a></li>
          </ul>
      </div>
        </div>

      </div>
  </footer>


</div>
</html>
