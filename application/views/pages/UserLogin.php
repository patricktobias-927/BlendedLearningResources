<?php if($this->session->flashdata('failed_login')) : ?>
<?= '<p class="alert alert-danger">'.$this->session->flashdata('failed_login').'</p>' ?>
<?php endif;?>


      

<?= form_open('login');?>

<div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">Blended Learning Resources</span>
                                </a>
                            </div>
                            <!-- <a href="page_register.html" class="btn-link text-white ml-auto">
                                Create Account
                            </a> -->
                        </div>
                    </div>
                    <div class="flex-1" style="background: url(assets/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 ">
                            <div class="row d-flex justify-content-center">
                              
                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ">
                                    <!-- <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                        Secure login
                                    </h1> -->
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <form>
                                            <div class="form-group">
                                                <label class="form-label" for="user_name">Username</label>
                                                <input type="text" id="user_name" name="user_name" class="form-control form-control-lg" placeholder="Username" value="<?= set_value('user_name'); ?>" required>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Your username</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" value="" required>
                                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                <div class="help-block">Your password</div>
                                            </div>
                                            <!-- <div class="form-group text-left">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                                    <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                                                </div>
                                            </div> -->
                                            <div class="row no-gutters justify-content-center">
                                                <div class="col-lg-6 pr-lg-1 my-2">
                                                    <button type="submit" class="btn btn-info btn-block btn-lg">Sign In</button>
                                                </div>
                                                <!-- <div class="col-lg-6 pl-lg-1 my-2">
                                                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2019 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="assets/js/vendors.bundle.js"></script>
        <script src="assets/js/app.bundle.js"></script>
        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>