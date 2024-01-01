<?php include("includes/header.php"); ?>

<!-- End Header Area -->
<!-- Start breadcrumbs area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Contact Us</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 col-sm-8 col-xs-12">
                        <div class="login-form">
                            <h4 class="login-title text-center">Contact Us </h4>
                            <div class="row">
                                <div class="col-lg-5 " style="padding-right: 0px;">
                                    <div class="contact-box">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="single-contact-box">
                                                    <h2>LET’S GET TO WORK</h2>
                                                    <p>
                                                        Fill up the form and leave your query here. Our team will assist
                                                        you shortly or email us directly on

                                                        <a href="mailto:sales@fxbrokerservice.com"
                                                            style="color: 000;font-weight: 600;">sales@fxbrokerservice.com</a>
                                                    </p>
                                                    <p>We look forward to hearing from you!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form method="POST" action="contact-us.php" class="log-form">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label for="name">Name <span class="req">*</span></label>
                                        <input type="text" id="name" class="form-control" placeholder="name" name="name"
                                            required data-error="Please enter your name">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label for="name">Email <span class="req">*</span></label>
                                        <input type="text" id="name" class="form-control" placeholder="Email" name="email" required
                                            data-error="Please enter your email">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label for="name">Phone<span class="req">*</span></label>
                                        <input type="text" id="name" class="form-control" placeholder="Phone" name="phone" required
                                            data-error="Please enter your phone">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label for="message">Message</label>
                                        <textarea cols="46" rows="3" name="message" class="form-control"></textarea>
                                        <div class="g-recaptcha"
                                            data-sitekey="6Lejq5EnAAAAAI9fsOplf3te6eRj_j5B_CX73BbR">
                                            <div>
                                                <div><iframe title="reCAPTCHA" width="304" height="78"
                                                        role="presentation" name="a-z7042un4hgwg" frameborder="0"
                                                        scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lejq5EnAAAAAI9fsOplf3te6eRj_j5B_CX73BbR&amp;co=aHR0cHM6Ly9meGJyb2tlcnNlcnZpY2UuY29tOjQ0Mw..&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=normal&amp;cb=nd56xwlcw3tl"></iframe>
                                                </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                    class="g-recaptcha-response"
                                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                                    required=""></textarea>
                                            </div><iframe style="display: none;"></iframe>
                                        </div>
                                        <button class="slide-btn login-btn" type="submit"  value="submit"> Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 text-center">

                                    </div>
                                </form>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="brand-area area-padding fix" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>We’re here to help and answer any question you might have.</h3>
                    <a class="hire-btn" href="#">Let's Talk Now</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php"); ?>