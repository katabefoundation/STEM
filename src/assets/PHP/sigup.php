<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.0.2-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
 
    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Sign in</a></li>
                    <li class="signup-inactive"><a class="btn">Sign up </a></li>
                </ul>
            </div>
            <div ng-app ng-init="checked = false">
                <form class="form-signin form" action="" method="post" name="form"> 
                    <span class="flex-row d-flex" ><i class="bi-person-circle text-white"></i>
                        <label for="username" class="form-label">Username</label> 
                    </span>
                   
                    <input class="form-styling form-control" type="text" name="username" placeholder="" /> 
                    <span class="flex-row d-flex">
                        <i class="bi-key text-white"></i>
                        <label for="password">Password</label> 
                    </span>
                    
                    <input class="form-styling" type="text" name="password" placeholder="" /> 
                    <input type="checkbox" id="checkbox" /> 
                    <label for="checkbox">
                        <span class="ui"></span>Keep me signed in
                    </label>
                    <div class="btn-animate"> 
                        <a class="btn-signin">Sign in</a> 
                    </div>
                </form>

                <form class="form-signup" action="" method="post" name="form"> 
                    <label for="fullname">Full name</label> 
                    <input class="form-styling" type="text" name="fullname" placeholder="" /> 
                    <label for="gender">Gender</label>
                    <span class="flex-row d-flex " style="justify-content: space-evenly;align-items: center;">
                        <div class="flex-row d-flex float-start" style="justify-content: space-between;align-items: center;">
                            <input type="radio" name="gender" value="Male" id="male">
                            <label for="male">Male</label>
                        </div>
                       <div class="flex-row d-flex  float-end" style="justify-content: space-between;align-items: center;">
                            <input type="radio" name="gender" value="Female" id="female">
                            <label for="female">Female</label>
                       </div>
                    </span>
                    <label for="phone">Parent's or Guardian's Phone Number</label> 
                    <input class="form-styling" type="tel" name="fullname" placeholder="0620000001" id="phone" /> 
                    <label for="email">Parent's or Guardian's Email</label> 
                    <input class="form-styling" type="text" name="email" placeholder="" /> 


                    <label for="region">Region</label>
                    <select name="state" id="Region" size="1" class="form-styling form-select">
                        <option value="" class="text-white" selected="true" disabled >Select Region</option>
                    </select>

                    <label for="region">District</label>
                    <select name="state" id="District" size="1" class="form-styling form-select">
                        <option value="" class="input" selected="selected" selected disabled>Select District</option>
                    </select>


                    <label for="pobox">post box</label> 
                    <input class="form-styling" type="text" name="pobox" placeholder="P. O. BOX 1234 Dar es salaam" id="pobox" /> 


                    <label for="password">Password</label> 
                    <input class="form-styling" type="text" name="password" placeholder="" /> 
                    <label for="confirmpassword">Confirm password</label> 
                    <input class="form-styling" type="text" name="confirmpassword" placeholder="" /> 
                    <a ng-click="checked = !checked" class="btn-signup">Sign Up</a> 
                </form>

                <div class="success"> 
                    <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">

                        <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314 c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042 c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />

                        <div class="successtext text-success">
                            <p> Thanks for signing up! Check your email for confirmation.</p>
                        </div>
                </div>
            </div>
            <div class="forgot link"> <a href="#">Forgot your password?</a> </div>
           
        </div> 
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/region&districtTz.js"></script>
    <script>
        $(function() {
            $(".btn").click(function() {
            $(".form-signin").toggleClass("form-signin-left");
            $(".form-signup").toggleClass("form-signup-left");
            $(".frame").toggleClass("frame-long");
            $(".signup-inactive").toggleClass("signup-active");
            $(".signin-active").toggleClass("signin-inactive");
            $(".forgot").toggleClass("forgot-left");
            $(this).removeClass("idle").addClass("active");
            });
            });
            
            $(function() {
            $(".btn-signup").click(function() {
            $(".nav").toggleClass("nav-up");
            $(".form-signup-left").toggleClass("form-signup-down");
            $(".success").toggleClass("success-left");
            $(".frame").toggleClass("frame-short");
            });
            });
            
            $(function() {
            $(".btn-signin").click(function() {
            $(".btn-animate").toggleClass("btn-animate-grow");
            $(".welcome").toggleClass("welcome-left");
            $(".frame").toggleClass("frame-short");
            $(".profile-photo").toggleClass("profile-photo-down");
            $(".btn-goback").toggleClass("btn-goback-up");
            $(".forgot").toggleClass("forgot-fade");
            });
            });
    </script>
</body>
</html>