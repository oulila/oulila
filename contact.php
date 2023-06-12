<?php
include "./nav.php";
?>




    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>contact</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-area area-padding">
        <div class="container margin-tb">
            <div class="row">
                <div class="contact-inner">

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa-solid fa-mobile"></i>
                                <p>
                                    Call : +971 56 252 3238<br>
                                    <span>Monday-Friday (10am-18pm)</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <!-- <i class="ti-email"></i> -->
                                <i class="fa-solid fa-envelope"></i>
                                <p>
                                    Email : Yassine@oulilaconsulting.online<br>
                                    <span>Web: www.oulila.com</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <!-- <i class="ti-location-pin"></i> -->
                                <i class="fa-solid fa-location-dot"></i>
                                <p>
                                    Location : Location :Discovery gardens building no.36 Dubai, UAE. 
                                    <span>LANDMARK: near gardens metro station</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 70px;">
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="map-area">
                        <div id="googleMap" style="width:100%;height:420px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.9494499741154!2d72.2696618748475!3d32.28633700890181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39213c47b90ccd93%3A0x399966242325176!2sCivil%20Line%20Jauharabad%20Rd%2C%20Joharabad%2C%20Khushab%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1685007923194!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                        
                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contactForm" method="POST" action="https://rockstheme.com/rocks/randerc-preview/contact.php" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


   

    <?php
    include "./footer.php";
    ?>