
<!DOCTYPE html>

<head>
    <title>Login Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <!-- CSS and Bootsrap -->
    <link href="web/css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>


  body {
    background-image: url("bg1.jpg");

  background-color: #cccccc;
  }
  </style>

<body>
    <nav class="navbar navbar-inverse " style="margin-bottom:none">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" >Webcoursera</a>
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
                </div>
             </p>
        </div>
        </div>
      </nav>
    <!-------------- Login Form ----------------------------------------------->
    <section class="w3l-workinghny-form">
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="workinghny-block-grid">
                    <div class="form-right-inf">
                        <h2>Login Page</h2>
                        <div class="login-form-content">
                            <form action="Login.inc.php" class="signin-form" method="post">
                                <div class="one-frm">
                                    <input type="text" name="username" placeholder="Username" required="" autofocus>
                                </div>
                                <div class="one-frm">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>
                                <button class="btn btn-style mt-3">Login</button>
                                <p class="already" style="margin-top : -1px; text-align: center;">Don't have an account? <a href="Signup.php">Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------- -->
</body>

</html>
