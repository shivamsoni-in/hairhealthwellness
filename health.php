<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hair Health & Wellness Centre</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'header.php';?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold h3 hhwc" id="exampleModalLabel">Ready to Schedule ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="enquiryForm">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="enquiry_name" name="enquiry_name" placeholder="name@example.com">
                  <label for="floatingname">Name</label>
                  <span class="text-danger" id="enquiry_name_error"></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="enquiry_email" name="enquiry_email" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                  <span class="text-danger" id="enquiry_email_error"></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="tel" class="form-control" id="enquiry_number" name="enquiry_number" placeholder="Number" maxlength="10">
                  <label for="floatingnumber">Number</label>
                  <span class="text-danger" id="enquiry_number_error"></span>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-select" id="enquiry_treatment" name="enquiry_treatment" aria-label="Floating label select example">
                    <option selected value="0">Open this select menu</option>
                    <option value="GENERAL O.P.D">GENERAL O.P.D</option>
                    <option value="DIABETIC CLINIC">DIABETIC CLINIC</option>
                    <option value="INTERNAL MEDICINE">INTERNAL MEDICINE</option>
                    <option value="DERMATOLOGY">DERMATOLOGY</option>
                    <option value="GENERAL SURGERY">GENERAL SURGERY</option>
                    <option value="PHYSIOTHERAPY">PHYSIOTHERAPY</option>
                    <option value="OBSTETRICS / GYNAECOLOGY">OBSTETRICS / GYNAECOLOGY</option>
                    <option value="ORTHOPAEDICS">ORTHOPAEDICS</option>
                    <option value="ENT">ENT</option>
                    <option value="OPHTHALMOLOGY">OPHTHALMOLOGY</option>
                  </select>
                  <span class="text-danger" id="enquiry_treatment_error"></span>
                  <label for="floatingSelect">Select Your Process</label>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="enquiry_comment" name="enquiry_comment"  style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mb-3 fw-bold px-4" id="enquirySubmit">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="top-section"></div>
    
    <!-- <img src="assets/img/health/health-banner.jpg" class="img-fluid desktop-display" alt="">
    <img src="assets/img/home/slider-mob.jpg" class="img-fluid mobile-display" alt=""> -->


    <div class="health-banner-cen">
      <img src="assets/img/health/health-banner.jpg" class="img-fluid w-100 desktop-display" alt="">
      <img src="assets/img/health/health-banner-mob.jpg" class="img-fluid w-100 mobile-display" alt="">
      <div class="health-text-cen">
        Health
      </div>
    </div>


    <div class="pt-3">

        <div class="container">

            <div class="section-title position-relative text-center mx-auto mb-2 pb-3">
                <h1 class="display-5 hhwc2 fw-bold">Health</h1>
                <div class="hrline-bottom"></div>
            </div>
        </div>

        <div class="bg-department pt-5 pb-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-3 mx-1 mx-lg-4 px-0 px-lg-4">
                    
                    
                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/opd.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">General O.P.D</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                O.P.D. stands for Outpatient Department or Outpatient Clinic, which is a healthcare facility that provides medical care to 
                                <p class="collapse p-justify" id="text1">
                                  patients who do not require an overnight stay in the hospital. General O.P.D.s provide general medical care to patients with a wide range of health conditions.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/diabetic-clinic.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Diabetic Clinic</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                A diabetic clinic is a healthcare facility that provides specialized care for patients with diabetes.Diabetes is a chronic condition that 
                                <p class="collapse p-justify" id="text2">
                                  affects the way the body processes sugar and insulin. People with diabetes need regular monitoring and management of their blood sugar levels to prevent complications such as heart disease, stroke, blindness, kidney disease, and nerve damage.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/internal-medicine.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Internal Medicine</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                Internal Medicine deals with nearly 98% of worlds medical diseases, conditions, 
                                disorders, Prevention & management for the 
                                <p class="collapse p-justify" id="text3">
                                  same. Internal Medicine deals with Diagnosis & treatment of conditions that affect Internal Organs such as Neurology, Heart diseases, Diabetes, Hypertension, lung diseases, Endocrine 
                                  disorders, metabolic disorders, Chronic & Acute complex Multisystem Disease/ disorders.
                                </p>
                                <!-- Internal Medicine deals with Diagnosis & treatment of conditions that affect Internal 
                                Organs such as Neurology, Heart diseases, Diabetes, Hypertension, lung diseases, Endocrine 
                                disorders, metabolic disorders, Chronic & Acute complex Multisystem Disease/ disorders. -->
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/dermatology.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <a href="javascript:void(0);">
                                <h4 class="card-title hhwc fw-bold">Dermatology</h4>
                              </a>
                              <p class="text-dark mb-0" style="text-align:justify;">
                                Dermatology is a branch of Medicals that Leaks with Diseases / Disorders 
                                of Skin, Hair & nails Dermatology deals with cosmetic 
                                <p class="collapse p-justify" id="text4">
                                  procedures like Chemical feel, Botox, 
                                  fillers, Skin lightings microdermabrasion, Skin PRP, Skin infections like fungal infections, 
                                  leprosey.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/general-surgery.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">General Surgery</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                General surgery is a surgical specialty that deals with the treatment of a wide range of conditions that affect the abdomen, chest 
                                <p class="collapse p-justify" id="text5">
                                   and other parts of the body. General surgeons are trained to perform a variety of procedures.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/physiotherapy.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Physiotherapy</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                Physiotherapy, also known as physical therapy, is a healthcare profession that focuses on the assessment, diagnosis
                                 <p class="collapse p-justify" id="text6">
                                   treatment and prevention of physical impairments. Physiotherapists work with individuals of all ages, from newborns to the elderly, to improve their movement and function.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/obstetrics.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Obstetrics / Gynaecology</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                Obstetrics and Gynaecology (Ob/Gyn) is a medical specialty that deals with the care of women's reproductive health and childbirth. 
                                <p class="collapse p-justify" id="text7">
                                  Obstetricians are specialists in pregnancy, childbirth, and postpartum care, while gynecologists are specialists in the health of the female reproductive system, including the uterus, ovaries, and vagina.
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/orthopaedics.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Orthopaedics</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                Orthopaedics is a medical specialty that deals with the diagnosis, treatment, and prevention of injuries and diseases of the
                                <p class="collapse p-justify" id="text8">
                                  musculoskeletal system, which includes the bones, joints, ligaments, muscles, and tendons. Orthopaedic surgeons are specialists in restoring the function and movement of these structures.
                                </p>
                              </p>
                              <p>
                                <a data-bs-toggle="collapse" href="#text8" aria-expanded="false" aria-controls="text8">
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/ent.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">ENT</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                ENT, or Ear, Nose, and Throat, is a medical specialty that deals with the diagnosis and treatment of conditions affecting the ear,
                                <p class="collapse p-justify" id="text9">
                                  nose, and throat as well as the head and neck. ENT specialists, also known as otolaryngologists, are trained in the medical and surgical treatment of a wide range of conditions.
                                </p>
                              </p>
                              <p>
                                <a data-bs-toggle="collapse" href="#text9" aria-expanded="false" aria-controls="text9">
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Book Now
                                  </button>
                                </a>
                              </p>
                          </div>
                      </div>
                    </div>

                    <!--<div class="col rounded-3 d-flex">-->
                    <!--  <div class="card border-0 shadow-sm">-->
                    <!--      <img src="assets/img/health/ophthalmology.jpg" class="card-img-top" alt="...">-->
                    <!--      <div class="card-body">-->
                    <!--        <a href="javascript:void(0);">-->
                    <!--          <h4 class="card-title hhwc fw-bold">Ophthalmology</h4>-->
                    <!--        </a>-->
                    <!--          <p class="text-dark mb-0 p-justify">-->
                    <!--            Ophthalmology is a medical specialty that deals with the diagnosis, treatment, and prevention of eye and vision disorders.-->
                    <!--            <p class="collapse p-justify" id="text10">-->
                    <!--              Ophthalmologists are specialists in the anatomy, function, and diseases of the eye and vision system.-->
                    <!--            </p>-->
                    <!--          </p>-->
                    <!--          <p>-->
                    <!--            <a data-bs-toggle="collapse" href="#text10" aria-expanded="false" aria-controls="text10">-->
                    <!--              Read More-->
                    <!--            </a>-->
                    <!--          </p>-->
                    <!--          <hr>-->
                    <!--          <p class="hhwc h5 fw-bold text-center">-->
                    <!--            For Appointment-->
                    <!--          </p>-->
                    <!--          <p class="text-dark text-center">-->
                    <!--            <a href="tel:+" class="hhwc">-->
                    <!--              <button type="button" class="btn bk-btn">-->
                    <!--                Call Now-->
                    <!--              </button>-->
                    <!--            </a>-->
                    <!--            <a href="javascript:void(0);" class="hhwc">-->
                    <!--              <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                    <!--                Book Now-->
                    <!--              </button>-->
                    <!--            </a>-->
                    <!--          </p>-->
                    <!--      </div>-->
                    <!--  </div>-->
                    <!--</div>-->

                    <div class="col rounded-3 d-flex">
                      <div class="card border-0 shadow-sm">
                          <img src="assets/img/health/pediatrics.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <h4 class="card-title hhwc fw-bold">Pediatrics</h4>
                            </a>
                              <p class="text-dark mb-0 p-justify">
                                Pediatrics is Specialized Branch of Medicines That involves medical 
                                care of Infants, Neonates, Children, Adolescent &
                                <p class="collapse p-justify" id="text11">
                                  young adults. It deals with routine medical Immunization of
                                  Neonates & Infants , Auto Immune diseases, Chronic and Acute disorders, Infant 
                                  nutrition, Congenital diseases/dondo disorders, metabolic diseases.
                                </p>
                              </p>
                              <p>
                                <a data-bs-toggle="collapse" href="#text11" aria-expanded="false" aria-controls="text11">
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
                                  <button type="button" class="btn bk-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
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