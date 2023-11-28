<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hair Health & Wellness Centre</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'header.php';?>

    <div class="top-section"></div>


    <div class="contact-bg">
        <div class="container">
            <div class="row g-4 align-items-center py-5">

                <div class="col-md-5 pb-5 mb-5">
                    <h1 class="hhwc2 fw-bold">Contact Us</h1>
                    <p class="text-dark fw-bold">
                        Need a healthcare expert? You are more than welcomed to leave your contact 
                        info and we will get in touch with you shortly.
                    </p>
                </div>

                <div class="col-md-3"></div>

                <div class="col-md-4">
                    <div class="con-form rounded-2">

                        <form id="contactForm">

                            <h2 class="text-light text-center fw-bold pb-2">
                                Get In Touch
                            </h2>
                            <p class="text-light text-center pb-4 h6">
                                Feel free to contact us if you need any assistance, any help or another question.
                            </p>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name">
                                <label for="name" class="hhwc2 fw-bold">Name</label>
                                <span class="text-dark fw-bold" id="contact_name_error"></span>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                                <label for="floatingInput" class="hhwc2 fw-bold">Email address</label>
                                <span class="text-dark fw-bold" id="contact_email_error"></span>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="Number" maxlength="10">
                                <label for="number" class="hhwc2 fw-bold">Number</label>
                                <span class="text-dark fw-bold" id="contact_number_error"></span>
                            </div>
                            
                            <button type="button" class="btn btn-contact" id="contactSubmit">Submit</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row g-3 mx-2">

                <div class="col-lg-6 col-md-6 py-4 px-3 px-lg-5 shadow-lg rounded-3 hhwbg">
                    <div class="text-white px-2 px-lg-5">
                        <br>
                        <h2 class="text-center fw-bold">Address</h2>
                        <p class="h5">
                            A Wing 2nd Floor, Rizvi Palace, 
                            opposite Hotel Metro Palace, 
                            above Hotel Amrut Sagar, 
                            Hill Road, Bandra West, 
                            Mumbai, Maharashtra 400050
                        </p>
                    </div>
                </div>

                <div class="col-lg-1 col-md-6"></div>

                <div class="col-lg-5 col-md-6 py-4 px-3 px-lg-5 shadow-lg rounded-3 hhwbg">

                    <div class="text-white text-center">
                        <h2 class="fw-bold">Call Us</h2>
                        <a href="tel:+917045555008">
                            <button type="button" class="btn btn-contact">
                                +91 7045555008
                            </button>
                        </a><br><br>
                        <a href="tel:+918850680795">
                            <button type="button" class="btn btn-contact">
                                +91 8850680795
                            </button>
                        </a>
                    </div>
                    <br>
                    <div class="text-white text-center">
                        <h2 class="fw-bold">Email Us</h2>
                        <a href="mailto:hairhealthwellnesscentre@gmail.com">
                            <button type="button" class="btn btn-contact">
                                hairhealthwellnesscentre@gmail.com
                            </button>
                        </a>
                    </div>
                    <br>

                </div>

            </div>
        </div>
    </section>


    <div class="">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6342.32269638788!2d72.83242403340513!3d19.0563656960397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9461d476d2d%3A0x3e52affeea3ac54f!2sHair%2C%20Health%20and%20Wellness%20Center!5e0!3m2!1sen!2sin!4v1675314939284!5m2!1sen!2sin" frameborder="0" allowfullscreen>
        </iframe>
    </div>


    <?php include 'footer.php';?>