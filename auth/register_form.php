<div class="signUpModal-container" id="signUpModal">

        <div class="signUp-modal-content">
            <span class="close">&times</span>
            
            <div class="formCircleLogo"><img src="images/circleLogo.png"></div>
            <div><h1>Sign-up</h1></div>

            <form action="" class="signUp-form">
                <div> 
                    <label class="signUp-input">
                        User name or email:<br>
                        <input type="text" required>
                    </label>
                </div>
    
                <div> 
                    <label class="signUp-input">
                        Password:<br>
                        <input type="password" required>
                    </label>
                </div>
                
                <div> 
                    <label class="signUp-input">
                        Confirm password:<br>
                        <input type="password" required>
                    </label>
                </div>

                <div>
                    <button type="submit"> Create Account</button>
                </div>

            </form>

            <p class="p-buttonBottom">OR</p>
            
            <div class="loginUsingGoogle-container">
                <button type="submit" class="loginUsingGoogle"> Google account
                </button>
            </div>
            
            <p class="p-ifNotLogin">Already have an account?<a onclick="openLoginModal()">Login</a></p>
        </div>
    </div>