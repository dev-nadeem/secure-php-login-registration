<!DOCTYPE html>
<html>
    <head>
        <title>Login / Registration Form</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="wrapper">
            <!-- Create a First Div for Login Form -->
            <div id="loginContainer">
                <form id="loginForm" method="post">
                    <h3>Members Login Page</h3>
                    <div class="display-error" style="display: none;"></div>
                    <input type="email" name="lemail" placeholder="Enter a valid Email" required>
                    <input type="password" name="lpassword" placeholder="Enter your password" required>
                    <input type="submit" value="sign In">
                    <p><a href="forgetPassword.php">Forget Password</a></p>
                    <p id="bottom">Don't have account yet?<a href='#' id='signup'> Signup here</a></p>
                </form>
            </div>
            <!--End First Div--->
            <!--Open Second Div -->
            <div id="signupContainer">
                <form id="registFrm" method="post">
                    <h3>New Member signUp</h3>
                    <div class="display-error" style="display: none;"></div>
                    <input type="text" name="rname" placeholder="Name" required>
                    <input type="email" name="remail" placeholder="Enater Valid Email" required >
                    <input type="password" name="rpassword" placeholder="Password" required >
                    <input type="text" name="rmobile" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile" required>
                    <input type="submit" value="Create your account">
                    <p id ="bottom">Already have an account?<a href="#" id="signin">SignIn</a></p>
                </form>
            </div>
            <!--End second div--->
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script>
      $(document).ready(function(){
          $("#loginForm").submit(function(){
           var data = $("#loginForm").serialize();
           checkRecords(data);
           return false;
          });
          function checkRecords(data) {
              $.ajax({
                  url:'loginProcess.php',
                  data : data,
                  type:'POST',
                  dataType:'json',
                  success:function(data){
                      if(data.code == 200){
                          alert('You have successfully login');
                          window.location='dashboard.php';
                      } else {
                          $(".display-error").html("<ul>"+data.msg+"</ul>");
                          $(".display-error").css("display","block");
                      }
                  },
                  error: function(){
                      alert("Operation failed");
                  }
              });
          }
      });
  </script>
  <!-- for singup form -->
  <script>
      $(document).ready(function(){
          $("#registFrm").submit(function(){
           var data = $("#registFrm").serialize();
           singupRecords(data);
           return false;
          });
          function singupRecords(data) {
              $.ajax({
                  url:'signupProcess.php',
                  data : data,
                  type:'POST',
                  dataType:'json',
                  success:function(data){
                      if(data.code == 200){
                          alert('You have successfully signUp \n Please Login now.');
                          setTimeout(function(){
                            location.reload();
                          }, 1000 );
                          
                      } else {
                          $(".display-error").html("<ul>"+data.msg+"</ul>");
                          $(".display-error").css("display","block");
                      }
                  },
                  error: function(jqXHR,exception){
                      console.log(jqXHR);
                  }
              });
          }
      });
  </script>
    </body>
    
</html>