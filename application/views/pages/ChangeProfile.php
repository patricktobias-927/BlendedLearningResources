        
        <?= form_open('submitPassword');?>
        <div class="page-wrapper">
            <!-- <div class="page-inner bg-brand-gradient"> -->
            <div class="page-inner">
                <div class="page-content-wrapper bg-transparent m-0">
                    <!-- <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">Blended Learning Resources</span>
                                </a>
                            </div>
                            <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down"> -->
                                <!-- Already a member? -->
                            <!-- </span>
                            <a href="page_login-alt.html" class="btn-link text-white ml-auto ml-sm-0">
                                Sign Out
                            </a>
                        </div>
                    </div> -->

                    <!--BACKGROUND COVER->
                    <!-- <div class="flex-1" style="background: url(assets/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;"> -->
                    <div class="flex-1" style="">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <div class="row">
                                <!-- <div class="col-xl-12">
                                    <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                                        "My dog ate my password"
                                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                                            Not a problem, happens to the best of us. Just use the form below to reset it!
                                        </small>
                                    </h2>
                                </div> -->
                                <div class="col-xl-6 ml-auto mr-auto">
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <form id="js-login" name="js-login" novalidate="" action="<?= base_url();?>submitPassword">
                                            <div class="form-group">
                                                <!-- <label class="form-label" for="lostaccount">Old Password</label> -->
                                                <input type="text" id="user_id" name="user_id" class="form-control" placeholder="Old Password" value="<?= $this->session->user_id?>" disabled style="display:none;">
                                                <input type="text" id="user_password" name="user_password" class="form-control" placeholder="Old Password" value="<?= $this->session->password?>" disabled style="display:none;">
                                                <div class="invalid-feedback">Please, fill out the field</div>
                                                <!-- <div class="help-block">Old Password</div> -->
                                                <label class="form-label" for="lostaccount" style="margin-top: 20px;">New Password</label>
                                                <input type="password" id="lostaccount" class="form-control" placeholder="New Password" value="" required>
                                                <div class="invalid-feedback">Please, fill out the field</div>
                                                <div class="help-block">New Password</div>
                                                <label class="form-label" for="lostaccount" style="margin-top: 20px;">Confirm Password</label>
                                                <input type="password" id="confirmed_password" name="confirmed_password" class="form-control" placeholder="Confirm Password" value="" required>
                                                <div class="invalid-feedback">Please, fill out the field</div>
                                                <div class="help-block">Confirm Password</div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col-md-4 ml-auto text-right">
                                                    <button id="js-login-btn" type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-block text-center text-white">
                            2019 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a>
                            <button id="js-sweetalert2-example-6" type="submit" class="btn btn-danger">test</button>
                           <!-- Password Saved 
                            <a href="javascript:void(0);" class="btn btn-outline-primary waves-effect waves-themed" id="js-sweetalert2-example-6">Try me!</a>
        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        