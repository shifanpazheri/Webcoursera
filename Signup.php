
<!DOCTYPE html>

<head>
    <title>SignUp Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <!-- CSS and Bootsrap -->
    <link href="web/css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>


  body {
    background-image: url("bg1.jpg");

  background-color: #cccccc;
  }
</style>
<body>


  <script>

  function ValidateEmail(inputText)
  {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat))
    {
      alert("Valid email address!");
      document.form1.text1.focus();
      return true;
    }
    else
    {
      alert("You have entered an invalid email address!");
      document.form1.text1.focus();
      return false;
    }
  }

  </script>

    <nav class="navbar navbar-inverse ">
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
                </div><!-- /input-group -->
             </p>
        </div>
        </div>
      </nav>
    <!-------------- Login Form ----------------------------------------------->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="workinghny-block-grid">
                    <div class="form-right-inf">
                        <h2>SignUp Page</h2>
                        <div class="login-form-content">
                            <form action="Signup.inc.php" class="signin-form" method="post">
                              <div class="one-frm">
                                  <input type="text" name="firstName" placeholder="First Name" required="" autofocus>
                              </div>
                              <div class="one-frm">
                                  <input type="text" name="lastName" placeholder="Last Name" required="" autofocus>
                              </div>
                                <div class="one-frm">
                                    <input type="text" name="username" placeholder="Username" required="" autofocus>
                                </div>
                                <div class="one-frm">
                                    <input type="password" name="password" placeholder="Password" required="">
                                <div class="one-frm">
                                      <input type="text" name="email" placeholder="Email" required="" autofocus>

                                </div>
                                <div class="one-frm">
                                      <input type="text" name="mobile" placeholder="Mobile" required="">
                                </div>
                                <button class="btn btn-style mt-3">SignUp</button>
                                <p class="already" style="margin-top : -1px; text-align: center;">Acoount already exist? <a href="Login.php">Login</a></p>
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
