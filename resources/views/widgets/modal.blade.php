<!-- cta-horizon Ends -->
<div class="modal fade in" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bordernone p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="login-content p-4">
                    <div class="login-title section-border text-center">
                        <h3 class="pink">Login</h3>
                    </div>
                    <div class="login-form">

                        <form action="{{ route('login') }}" id="loginForm" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="loginEmail" class="form-control form-control-md" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="loginPassword" class="form-control form-control-md" required>
                            </div>

                            <div class="form-group mb-0 form-checkbox mt-1">
                                <input type="checkbox"> Remember Me | <a href="#" class="">Forgot
                                    password?</a>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="nir-btn">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="login-social border-t mt-3 pt-2 mb-1 text-center">
                        <p class="mb-2">OR continue with</p>
                        <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i>
                            Facebook</a>
                        <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i>
                            Twitter</a>
                    </div>

                    <div class="sign-up">
                        <p class="m-0">Do not have an account? <a href="#" data-toggle="modal"
                                data-target="#register" class="pink">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade in" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bordernone p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="login-content p-4">
                    <div class="login-title section-border text-center">
                        <h3 class="pink mb-1">Register</h3>
                        <p>Access thousands of homes, traavel destinations, hotels and easy booking for many hotels all around the world!</p>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('register') }}" id="registerForm" method="POST">
                        @csrf
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="registerName" class="form-control form-control-md border-primary">
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="registerEmail" class="form-control form-control-md border-primary">
                            </div>
                            <div class="col-md-12">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="registerPhone" class="form-control form-control-md border-primary">
                            </div>
                            <div class="col-md-12">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="registerPassword" class="form-control form-control-md border-primary">
                            </div>

                            <div class="col-md-12 mb-0 form-checkbox mt-1">
                                <input type="checkbox" required> By clicking this, you are agree to to<a href="#"
                                    class=""> our terms of use</a> and <a href="#" class="">privacy
                                    policy</a> including the use of cookies
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="nir-btn">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="login-social border-t mt-1 pt-2 mb-1 text-center">
                        <p class="mb-2">OR continue with</p>
                        <a href="{{ route('facebook.login') }}" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i>
                            Facebook</a>
                        <a href="{{ route('twitter.login') }}" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i>
                            Twitter</a>
                        <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i>
                            Google</a>
                    </div>
                    <div class="sign-up">
                        <p class="m-0">Already have an account? <a href="#" data-toggle="modal"
                                data-target="#login" class="pink">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
