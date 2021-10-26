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
      <div style="display: flex; justify-content: flex-end;padding-top: 10px;" >


        <p>
            <div class="input-group" >
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" style="padding-top: 5px;"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
         </p>
    </div>
    </div>
  </nav>
<div class="container">
  <h1 style="text-align:center;">JAVA</h1>
  <img class="img-responsive" src="JAVA.png" alt="Chania" width="304" height="236" style="vertical-align:middle;margin:0px 350px">
  <h3>References</h3>
  <p>Java: The Complete Reference</p>
  <p>Java 8 in Action: Lambdas, Streams, and Functional-style Programming</p>
  <h3 >No of Lectures: 10</h3>
 <h3 >Current Category: <button type="button" class="btn btn-secondary"><a href="JAVA_short.php">Short</a></h3>
 <h3>Categories: <td><button type="button" class="btn btn-secondary"><a href="JAVA_short.php">Short</a></button> <td><button type="button" class="btn btn-secondary"><a href="JAVA_long.php">Long</a></button> </td></h3>
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
        <td><a href="https://www.youtube.com/watch?v=yMkFYxrDL2M&list=PLuVT2Ug8ISOUeumoUczDqraT_EO6qFdWt">Java Strings Tutorial</a></td>
        <td>09:04</td>
      </tr>
      <tr>
        <td>5</td>
        <td><a href="https://www.youtube.com/watch?v=Yat8l37XGFA&list=PLuVT2Ug8ISOUeumoUczDqraT_EO6qFdWt&index=5">Java File I/O (Reading and Writing)</a></td>
        <td>06:58</td>
      </tr>
      <tr>
        <td>6</td>
        <td><a href="https://www.youtube.com/watch?v=Yat8l37XGFA&list=PLuVT2Ug8ISOUeumoUczDqraT_EO6qFdWt&index=6">Java Enum Tutorial</a></td>
        <td>06:23</td>
      </tr>
       <tr>
        <td>9</td>
        <td><a href="https://www.youtube.com/watch?v=FWoYpM-E3EQ&list=PLuVT2Ug8ISOUeumoUczDqraT_EO6qFdWt&index=9">Java Streams Tutorial</a></td>
        <td>07:56</td>
      </tr>
       <tr>
        <td>10</td>
        <td><a href="https://www.youtube.com/watch?v=M_0q6rGUsNc&list=PLuVT2Ug8ISOUeumoUczDqraT_EO6qFdWt&index=10">Array List vs Linked List | Which one should you use??</a></td>
        <td>07:57</td>
      </tr>
    </tbody>
  </table>
  <h3 >About Author</h3>
  <p >Coding in a nutshell. Programming tutorials, experiences in the tech industry, and the occasional satire because it's good to laugh at ourselves once in a while.</p>
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
