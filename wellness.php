<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hair Health & Wellness Centre</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'header.php';?>

    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold h3 hhwc" id="exampleModalLabel">Ready to Schedule ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="wellnessForm">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="wellness_name" name="wellness_name" placeholder="name@example.com" >
                  <label for="floatingname">Name</label>
                  <span class="text-danger" id="wellness_name_error"></span>
                </div>
                
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="wellness_email" name="wellness_email" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                  <span class="text-danger" id="wellness_email_error"></span>
                </div>
                
                <div class="form-floating mb-3">
                  <input type="tel" class="form-control" id="wellness_number" name="wellness_number" placeholder="Number" maxlength="10">
                  <label for="floatingnumber">Number</label>
                  <span class="text-danger" id="wellness_number_error"></span>
                </div>
                
                <div class="form-floating mb-3">
                  <select class="form-select" id="wellness_treatment" name="wellness_treatment" aria-label="Floating label select example">
                    <option selected value="0">Open this select menu</option>
                    <option value="VITADRIPS">VITADRIPS</option>
                    <option value="WEIGHT LOSS / WEIGHT GAIN TREATMENT">WEIGHT LOSS / WEIGHT GAIN TREATMENT</option>
                    <!-- <option value="SUPPORT NUTRITION">SUPPORT NUTRITION</option> -->
                    <option value="NUTRITION / DIET CONSULTATION">NUTRITION / DIET CONSULTATION</option>
                    <!-- <option value="SUPPORT MUSCLE STRETCHING">SUPPORT MUSCLE STRETCHING</option> -->
                    <option value="SPORTS STRETCHING">SPORTS STRETCHING</option>
                    <option value="FITNESS CONSULTATION">FITNESS CONSULTATION AND PERSONAL TRAINING</option>
                    <!-- <option value="PERSONAL TRAINING">PERSONAL TRAINING</option> -->
                    <option value="BLOOD TESTS">BLOOD TESTS</option>
                    <option value="ECG">ECG</option>
                  </select>
                  <span class="text-danger" id="wellness_treatment_error"></span>
                  <label for="floatingSelect">Select Your Process</label>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="wellness_comment" name="wellness_comment" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mb-3 fw-bold px-4" id="wellnessSubmit">Submit</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    
    <div class="top-section"></div>
    
    <!-- <img src="assets/img/wellness/wellness-banner.jpg" class="img-fluid desktop-display" alt="">
    <img src="assets/img/home/slider-mob.jpg" class="img-fluid mobile-display" alt=""> -->


    <div class="wellness-banner-cen">
      <img src="assets/img/wellness/wellness-banner.jpg" class="img-fluid w-100 desktop-display" alt="">
      <img src="assets/img/wellness/wellness-banner-mob.jpg" class="img-fluid w-100 mobile-display" alt="">
      <div class="wellness-text-cen">
        Wellness
      </div>
    </div>


    <div class="pt-3">

        <div class="container">

            <div class="section-title position-relative text-center mx-auto mb-2 pb-3">
                <h1 class="display-5 hhwc2 fw-bold">Wellness</h1>
                <div class="hrline-bottom"></div>
            </div>
        </div>

        <div class="bg-department pt-5 pb-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-3 mx-1 mx-lg-4 px-0 px-lg-4">
                    
                    
                  <div class="col rounded-3 d-flex">
                    <div class="card border-0 shadow-sm">
                      <img src="assets/img/wellness/vitadrips.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="javascript:void(0);">
                          <h4 class="card-title hhwc fw-bold">Vitadrips</h4>
                        </a>
                          <p class="text-dark mb-0 p-justify">
                                Vitadrips refers to a type of intravenous (IV) therapy that involves administering vitamins, minerals, and other nutrients directly into the bloodstream. 
                            <p class="collapse p-justify" id="text1">
                              Vitadrips are designed to provide the body with a concentrated dose of essential nutrients to help improve health and well-being.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text1" aria-expanded="false" aria-controls="text1">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                      </div>
                    </div>
                  </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                        <img src="assets/img/wellness/weight-loss-treatment.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="javascript:void(0);">
                            <h4 class="card-title hhwc fw-bold">Weight Loss / Weight Gain Treatment</h4>
                          </a>
                            <p class="text-dark mb-0 p-justify">
                              Weight loss and weight gain treatments are designed to help individuals achieve and maintain a healthy weight. 
                              <p class="collapse p-justify" id="text2">
                                The goal of these treatments is to promote sustainable weight changes through lifestyle modifications, such as changes in diet and physical activity, as well as other therapeutic interventions, such as medications or surgery.
                              </p>
                            </p>
                            <p>
                              <a data-bs-toggle="collapse" href="#text2" aria-expanded="false" aria-controls="text2">
                                Read More
                              </a>
                            </p>
                            <hr>
                            <p class="hhwc h5 fw-bold text-center">
                              For Appointment
                            </p>
                            <p class="text-dark text-center">
                              <a href="tel:+" class="hhwc">
                                <button type="button" class="btn bk-btn">
                                  Call Now
                                </button>
                              </a>
                              <a href="javascript:void(0);" class="hhwc">
                                <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                  Book Now
                                </button>
                              </a>
                            </p>
                        </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                        <img src="assets/img/wellness/support-nutrition.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="javascript:void(0);">
                            <!-- <h4 class="card-title hhwc fw-bold">Support Nutrition</h4> -->
                            <h4 class="card-title hhwc fw-bold">Nutrition / Diet Consultation</h4>
                          </a>
                          <p class="text-dark mb-0 p-justify">
                            Nutrition and diet consultation involves seeking advice from a trained professional, such as a registered dietitian, about the types and amounts of food to eat to achieve 
                            <p class="collapse p-justify" id="text3">
                              and maintain a healthy diet. During a consultation, the dietitian will assess the individual's current eating habits and overall health status, and provide guidance on how to make dietary changes to improve health.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text3" aria-expanded="false" aria-controls="text3">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                        <img src="assets/img/wellness/support-muscle-stretching.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="javascript:void(0);">
                            <!-- <h4 class="card-title hhwc fw-bold">Support Muscle Stretching</h4> -->
                            <h4 class="card-title hhwc fw-bold">Sports Stretching</h4>
                          </a>
                          <p class="text-dark mb-0 p-justify">
                            Sports stretching is a type of stretching that is specifically designed to enhance athletic performance and prevent injury. It involves a series of stretches that target the muscles
                            <p class="collapse p-justify" id="text4">
                               and joints that are most commonly used during physical activity. The goal of sports stretching is to improve flexibility, range of motion, and overall athletic performance.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text4" aria-expanded="false" aria-controls="text4">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                        <img src="assets/img/wellness/fitness-consultation.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="javascript:void(0);">
                            <h4 class="card-title hhwc fw-bold">Fitness Consultation and Personal Training</h4>
                          </a>
                          <p class="text-dark mb-0 p-justify">
                            Fitness consultation and personal training are services provided by fitness professionals, such as personal trainers, to 
                            <p class="collapse p-justify" id="text5">
                              help individuals achieve their fitness goals. During a fitness consultation, the trainer will assess the individual's current fitness level, physical capabilities, and fitness goals. Based on this information, the trainer will create a customized fitness plan that is tailored to the individual's needs and abilities.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text5" aria-expanded="false" aria-controls="text5">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                        <img src="assets/img/wellness/personal-training.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="javascript:void(0);">
                            <h4 class="card-title hhwc fw-bold">Personal Training</h4>
                          </a>
                          <p class="text-dark mb-0 p-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, 
                            eum a hic beatae fugit veritatis maiores? Odio nam veniam.
                            <p class="collapse p-justify" id="text6">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque 
                              minima, vel aperiam magni nemo at! Molestias cum minus, animi 
                              quis repudiandae praesentium ipsam aliquam numquam, perferendis, 
                              incidunt illo mollitia quaerat.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text6" aria-expanded="false" aria-controls="text6">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div> -->

                  <!--<div class="col rounded-3 d-flex">-->
                  <!--  <div class="card border-0 shadow-sm">-->
                  <!--    <img src="assets/img/wellness/vitadrips.jpg" class="card-img-top" alt="...">-->
                  <!--    <div class="card-body">-->
                  <!--      <a href="javascript:void(0);">-->
                  <!--        <h4 class="card-title hhwc fw-bold">Blood Tests</h4>-->
                  <!--      </a>-->
                  <!--        <p class="text-dark mb-0 p-justify">-->
                  <!--          Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, -->
                  <!--          eum a hic beatae fugit veritatis maiores? Odio nam veniam.-->
                  <!--          <p class="collapse p-justify" id="text7">-->
                  <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque -->
                  <!--            minima, vel aperiam magni nemo at! Molestias cum minus, animi -->
                  <!--            quis repudiandae praesentium ipsam aliquam numquam, perferendis, -->
                  <!--            incidunt illo mollitia quaerat.-->
                  <!--          </p>-->
                  <!--        </p>-->
                  <!--        <p>-->
                  <!--          <a data-bs-toggle="collapse" href="#text7" aria-expanded="false" aria-controls="text7">-->
                  <!--            Read More-->
                  <!--          </a>-->
                  <!--        </p>-->
                  <!--        <hr>-->
                  <!--        <p class="hhwc h5 fw-bold text-center">-->
                  <!--          For Appointment-->
                  <!--        </p>-->
                  <!--        <p class="text-dark text-center">-->
                  <!--          <a href="tel:+" class="hhwc">-->
                  <!--            <button type="button" class="btn bk-btn">-->
                  <!--              Call Now-->
                  <!--            </button>-->
                  <!--          </a>-->
                  <!--          <a href="javascript:void(0);" class="hhwc">-->
                  <!--            <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">-->
                  <!--              Book Now-->
                  <!--            </button>-->
                  <!--          </a>-->
                  <!--        </p>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->

                  <div class="col rounded-3 d-flex">
                    <div class="card border-0 shadow-sm">
                      <img src="assets/img/wellness/blood-test.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="javascript:void(0);">
                          <h4 class="card-title hhwc fw-bold">Blood Tests</h4>
                        </a>
                          <p class="text-dark mb-0 p-justify">
                            Blood tests are laboratory examinations of a sample of a person's blood that can provide information about their health. Blood tests are used to diagnose and monitor various
                            <p class="collapse p-justify" id="text7">
                              medical conditions, as well as to evaluate the function of certain organs and systems.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text7" aria-expanded="false" aria-controls="text7">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                      </div>
                    </div>
                  </div>

                  <div class="col rounded-3 d-flex">
                    <div class="card border-0 shadow-sm">
                      <img src="assets/img/wellness/ECG.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="javascript:void(0);">
                          <h4 class="card-title hhwc fw-bold">ECG</h4>
                        </a>
                          <p class="text-dark mb-0 p-justify">
                            An Electrocardiogram (ECG) is a test that measures the electrical activity of the heart. It is used to diagnose various heart conditions, such as arrhythmias (abnormal heart rhythms), heart attacks, and heart disease.
                            <p class="collapse p-justify" id="text7">
                              During an ECG, small sticky electrodes are attached to the chest, arms, and legs. These electrodes detect the electrical signals produced by the heart and transmit them to a machine that records the signals and displays them as a graph.
                            </p>
                          </p>
                          <p>
                            <a data-bs-toggle="collapse" href="#text7" aria-expanded="false" aria-controls="text7">
                              Read More
                            </a>
                          </p>
                          <hr>
                          <p class="hhwc h5 fw-bold text-center">
                            For Appointment
                          </p>
                          <p class="text-dark text-center">
                            <a href="tel:+" class="hhwc">
                              <button type="button" class="btn bk-btn">
                                Call Now
                              </button>
                            </a>
                            <a href="javascript:void(0);" class="hhwc">
                              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Book Now
                              </button>
                            </a>
                          </p>
                      </div>
                    </div>
                  </div>


                </div>
            </div>
        </div>

    </div>

    <?php include 'footer.php';?>