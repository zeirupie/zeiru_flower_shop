<div class="loginModal-container" id="loginModal">

        <div class="login-modal-content">
            <span class="close">&times</span>
            
            <div class="formCircleLogo"><img src="images/circleLogo.png"></div>
            <div><h1>Login</h1></div>

            <form action="" class="login-form">
                <div> 
                    <label class="login-input">
                        User name or email:<br>
                        <input type="text" required>
                    </label>
                </div>
    
                <div> 
                    <label class="login-input">
                        Password:<br>
                        <input type="password" required>
                    </label>
                </div>

                <div class="a_forgotPassword">
                    <a href="#">Forgot your password?</a>
                </div>

                <div>
                    <button type="submit"> Login</button>
                </div>

            </form>

            <p class="p-buttonBottom">OR</p>
            
            <div class="loginUsingGoogle-container">
                <button type="submit" class="loginUsingGoogle"> Google account
                </button>
            </div>
            
            <p class="p-ifNotLogin">Don't have an account yet?<a onclick="openSignUpModal()">Sign-up</a></p>
        </div>
    </div>