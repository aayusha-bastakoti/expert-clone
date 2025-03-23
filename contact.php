<?php
include("includes/header.php");
?>

<main>
    <section class="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-12 my-4">
                    <div class="contact-topic">
                        <h2>Get in touch!</h2>
                        <p>We love to hear from you!!</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 my-4">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 info-div">
                            <a href="/" class="info-tag">
                                <i class="ri-map-pin-line icon"></i>
                                <h5>Putalisadak, Kathmandu, Nepal</h5>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12 info-div">
                            <a href="mailto:info@evc.edu.np"class="info-tag">
                                <i class="ri-mail-fill icon"></i>
                                <h5>info@evc.edu.np</h5>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12 info-div">
                            <a href="tel:014168189 / 9855085588"class="info-tag">
                                <i class="ri-phone-fill icon"></i>
                                <h5>014168189 / 9855085588</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form mb-4">
        <div class="container">
            <div class="row contact-card justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <h3>Contact Us</h3>

                    <form id="inquiryform" method="POST">
                        <input type="hidden" name="_token" value="8fCy0JnTF4sR3E38J0Nidf0JFJAgSeMsDtSrymqK">                        <fieldset>
                            <div class="mb-3">
                                <label class="form-label" for="formGroupExampleInput">Name</label>
                                <input class="form-control" id="full_name" name="full_name" type="text"
                                    placeholder="Name" />
                                <span class="text-error">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formGroupExampleInput">Email Address</label>
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Email" />
                                <span class="text-error">
                                    <strong id="email-error"></strong>
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formGroupExampleInput">Phone</label>
                                <input class="form-control" id="phone" name="phone" type="number"
                                    placeholder="Phone" />
                                <span class="text-error">
                                    <strong id="phone-error"></strong>
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formGroupExampleInput">Message</label>
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Your Message"></textarea>
                            </div>

                            <button class="text-white btn btn-secondary w-100 py-2 heading-6" id="contactform"
                                type="submit">
                                Submit
                            </button>
                        </fieldset>
                    </form>

                </div>
                <div class="col-md-5 col-sm-12 contact-image">
                    <div class="overlay">
                        <div class="overlay-right ">
                            <img src="./expert-img/contactblue.png" width="250" height="150"
                                alt="loading" />

                        </div>
                        <div class="overlay-left ">
                            <img src="./expert-img/contactblue.png" width="250" height="15"
                                alt="loading" />

                        </div>
                    </div>
                    <div class="media-wrapper ">
                        <img class="contact-photo" src="https://evc.edu.np/admin/images/20221225013101contact_image-contact.jpeg"
                            alt="contact" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        
    </section>
</main>



<?php
include("includes/footer.php");
?>