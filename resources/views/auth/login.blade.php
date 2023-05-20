<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../css/login.css" />
    <title>GC ELECT</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            <!-- LOGIN FORM -->
       
          <form action="#" class="sign-in-form">
            <div class="signin-form-container">
                    <div class="logoTitle">
                        <img class="icon" src="./img/icon2.png"/>
                        <h1 class="title">GC ELECT</h1>
                    </div>
                <!-- <h2 class="title">Sign in</h2> -->
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" />
                </div>
                <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
                </div>
                    <button class="loginBtn" id="login-btn" href="#">
                        <a href="#">Login</a>
                    </button>  
                </div>
                <p class="social-text">Register for a Partylist Account Here!</p>
                    <button class="btn" id="sign-up-btn">
                        Sign up
                    </button>
          </form>


          <!-- REGISTER FORM -->
          <form action="#" class="sign-up-form">
            <div class="signup-form-container">
                    <div class="logoTitle">
                        <img class="icon" src="./img/icon2.png"/>
                        <h1 class="title">GC ELECT</h1>
                    </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Partylist Name" required/>
                </div>
                {{-- <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Lastname" required value="partylistName"/>
                </div> --}}
                    
                {{-- <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" />
                </div> --}}
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Registrant Email" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" required/>
                </div>
                    <button class="loginBtn" id="register-btn">
                        REGISTER
                    </button>  

            </div>
                
                {{-- <p class="social-text">Back to Login</p> --}}
                
          </form>
          <span role="button" class="btn" id="sign-in-btn">
            Back to Login
        </span>
          
        </div>
      </div>
      <!-- END OF FORMS CONTAINER -->

      <div class="panels-container">
        <div class="panel left-panel">
          <img src="./img/userLogin.png" class="image imgLogo" alt="" />
        </div>
        <div class="panel right-panel">
          <img src="./img/signup.png" class="image imgLogo2" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
