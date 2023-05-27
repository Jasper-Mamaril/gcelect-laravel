<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>
<body> 
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- LOGIN FORM -->
                <form action="{{ route('login.perform') }}" method="POST" class="sign-in-form">
                    @csrf
                    <div class="signin-form-container">
                        <div class="logoTitle">
                            <img class="icon" src="./img/icon2.png"/>
                            <h1 class="title">GC ELECT</h1>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="email" placeholder="Email" name="email"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" />
                        </div>
                        @if ($errors->has('email'))
                            <span style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $errors->first('email') }}</span>
                        @endif
                        <button class="loginBtn" id="login-btn" type="submit">Login</button>  
                    </div>
                    <p class="social-text">Register for an Account Here!</p>
                    <button type="button" class="btn" id="sign-up-btn">Sign up</button>
                </form>
                <!-- REGISTER FORM -->
                <form action="{{ route('register.perform') }}" method="POST" class="sign-up-form">
                    @csrf
                    <div class="signup-form-container">
                        <div class="logoTitle">
                            <img class="icon" src="./img/icon2.png"/>
                            <h1 class="title">GC ELECT</h1>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Firstname" name="firstname" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Lastname" name="lastname" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirm Password" name="checkPassword"/>
                        </div>
                        @error('email', 'register') 
                            <span style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                        @enderror
                        <button class="loginBtn" id="register-btn" type="submit">REGISTER</button>
                    </div>
                    <p class="social-text">Back to Login</p>
                    <button type="button" class="btn" id="sign-in-btn">Sign In</button>
                </form>
            </div>
        </div>
        <!-- END OF FORMS CONTAINER -->
        <div class="panels-container">
            <div class="panel left-panel">
                <img src="./img/userLogin.png" class="image imgLogo" alt="" />
            </div>
            <div class="panel right-panel">
                {{-- <img src="./img/signup.png" class="image imgLogo2" alt="" /> --}}
                <!-- REGISTER FORM for candidate -->
                <div class="image imgLogo2">
                    <h1>Register for a Partylist Account Here!</h1>
                    <form action="{{ route('registerPartylist.perform') }}" method="POST" class="sign-up-form">
                        @csrf
                        <div class="signup-form-container">
                            <div class="logoTitle">
                                <img class="icon" src="./img/icon2.png"/>
                                <h1 class="title">GC ELECT</h1>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Partylist Name" name="firstname" required/>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Email" name="email" required/>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" name="password" required/>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm Password" name="checkPassword" required/>
                            </div>
                            @error('email', 'registerPartylist') 
                                <span style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                            @enderror
                            <button class="loginBtn" id="register-btn" type="submit">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
