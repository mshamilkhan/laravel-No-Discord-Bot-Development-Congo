<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="leftimg"><img src="{{ asset('assets/images/dis.png') }}" alt="Left Image" /></div>
            <div class="head">
                <h1 class="grey">Unlock Your Creativity, No Code Needed</h1>
                <br />
                <h1 class="blue"> Discord, Your Canvas.</h1>
                <br />
                <p>Empower Your Ideas, No Coding Required. Discord: Where Imagination Thrives.</p>
            </div>
        </div>
        
        <div class="right">
            <form action="login.submit" method="POST">
                @csrf
                <div class="loginbox">
                    <img  src="{{ asset('assets/images/msk.png') }}" alt="Logo" class="logoimg" />
                    <div class="logo"></div>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email Here" class="inp emailinp" required/>
                    
                    <label for="password">Password</label>
                    <div class="pas">
                        <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                        <p class="togglepass" id="toggleBtn" onClick={passwordToggle}>show/hide</p>
                    </div>
                    
                    <div class="btnbox">
                        <input type="submit"  value="Login" class="btn" name="login"/>
                        {{-- <button class="btn"><a href="{{ route('signup') }}">Signup</a></button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('assets/javascripts/login.js') }}"></script>
</html>
