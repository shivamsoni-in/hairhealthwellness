$(document).ready(function(){
    
    $('#name').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^a-zA-Z ]/g, '');
        $(this).val(sanitized);
    });
    
    $('#contact_name').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^a-zA-Z ]/g, '');
        $(this).val(sanitized);
    });
    
    $('#enquiry_name').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^a-zA-Z ]/g, '');
        $(this).val(sanitized);
    });
    
    $('#wellness_name').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^a-zA-Z ]/g, '');
        $(this).val(sanitized);
    });
    
    $('#hair_name').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^a-zA-Z ]/g, '');
        $(this).val(sanitized);
    });
    
    $('#number').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
    });
    
    $('#contact_number').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
    });
    
    $('#enquiry_number').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
    });
    
    $('#wellness_number').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
    });
    
    $('#hair_number').on('change keyup', function () {
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(sanitized);
    });
    
    $('#appointmentBookingSubmit').on('click',function(){
       
        var name = $('#name').val();
        var email = $('#email').val();
        var contact = $('#number').val();
        
        $('#name_error').html('');
        $('#email_error').html('');
        $('#number_error').html('');
        
        if(name !== '')
        {
            $('#name').addClass('is-valid').removeClass('is-invalid');
            if(email !== '')
            {
                if(isValidEmailAddress(email))
                {
                    $('#email').addClass('is-valid').removeClass('is-invalid');
                    if(contact !== '')
                    {
                        if(contact.length === 10)
                        {
                            $('#number').addClass('is-valid').removeClass('is-invalid');
                            
                            /* All Details are entered submit the form */
                            $.ajax({
                                url : "bookAppointment.php",
                                type : "POST",
                                data : $('#bookappointmentForm').serialize(),
                                dataType : 'json',
                                beforeSend: function () {
                                    $('#appointmentBookingSubmit').attr('disabled', true);
                                    $('#appointmentBookingSubmit').removeClass('btn-primary').addClass('btn-success');
                                    $("#appointmentBookingSubmit").html("Booking Your Appointment ...");
                                },
                                success : function(response)
                                {
                                    console.log(response);
                                    if(response.status === true)
                                    {
                                        $('#bookappointmentForm')[0].reset();
                                        $('#exampleModal1').modal('hide');
                                        $('#appointmentBookingSubmit').attr('disabled', false);
                                        $('#appointmentBookingSubmit').removeClass('btn-success').addClass('btn-primary');
                                        $("#appointmentBookingSubmit").html("Book Your Appointment");
                                        $('#name').removeClass('is-valid').removeClass('is-invalid');
                                        $('#email').removeClass('is-valid').removeClass('is-invalid');
                                        $('#number').removeClass('is-valid').removeClass('is-invalid');
                                        
                                        Swal.fire({
                                          toast: true,
                                          position: 'top-end',
                                          showConfirmButton: false,
                                          timer: 3000,
                                          timerProgressBar: true,
                                          icon: 'success',
                                          title: 'Appointment form submitted'
                                        });
                                    }
                                    if(response.status === false)
                                    {
                                        $('#bookappointmentForm')[0].reset();
                                        $('#exampleModal1').modal('hide');
                                        $('#appointmentBookingSubmit').attr('disabled', false);
                                        $('#appointmentBookingSubmit').removeClass('btn-success').addClass('btn-primary');
                                        $("#appointmentBookingSubmit").html("Book Your Appointment");
                                        $('#name').removeClass('is-valid').removeClass('is-invalid');
                                        $('#email').removeClass('is-valid').removeClass('is-invalid');
                                        $('#number').removeClass('is-valid').removeClass('is-invalid');
                                        Swal.fire({
                                          toast: true,
                                          position: 'top-end',
                                          showConfirmButton: false,
                                          timer: 3000,
                                          timerProgressBar: true,
                                          icon: 'error',
                                          title: 'Something went wrong! <br>Please try after sometime.'
                                        });
                                    }
                                }
                            });
                        }
                        else{
                            $('#number').addClass('is-invalid').removeClass('is-valid');
                            $('#number_error').html('Please Enter Valid Contact Number');
                        }
                        
                    }
                    else
                    {
                        $('#number').addClass('is-invalid').removeClass('is-valid');
                        $('#number_error').html('Please Enter Contact Number');
                    }
                }
                else
                {
                    $('#email').addClass('is-invalid').removeClass('is-valid');
                    $('#email_error').html('Please Enter Valid Email Address');   
                } 
            }
            else
            {
                $('#email').addClass('is-invalid').removeClass('is-valid');
                $('#email_error').html('Please Enter Email Address');
            }
        }
        else
        {
            $('#name').addClass('is-invalid').removeClass('is-valid');
            $('#name_error').html('Please Enter Name');
        }
        
    });
    
    $('#contactSubmit').on('click',function(){
       
        var name = $('#contact_name').val();
        var email = $('#contact_email').val();
        var contact = $('#contact_number').val();
        
        $('#contact_name_error').html('');
        $('#contact_email_error').html('');
        $('#contact_number_error').html('');
        
        if(name !== '')
        {
            $('#contact_name').addClass('is-valid').removeClass('is-invalid');
            if(email !== '')
            {
                if(isValidEmailAddress(email))
                {
                    $('#contact_email').addClass('is-valid').removeClass('is-invalid');
                    if(contact !== '')
                    {
                        if(contact.length === 10)
                        {
                            $('#contact_number').addClass('is-valid').removeClass('is-invalid');
                            
                            /* All Details are entered submit the form */
                            $.ajax({
                                url : "submitContactForm.php",
                                type : "POST",
                                data : $('#contactForm').serialize(),
                                dataType : 'json',
                                beforeSend: function () {
                                    $('#contactSubmit').attr('disabled', true);
                                    $('#contactSubmit').removeClass('btn-primary').addClass('btn-success');
                                    $("#contactSubmit").html("Submitting Form ...");
                                },
                                success : function(response)
                                {
                                    console.log(response);
                                    if(response.status === true)
                                    {
                                        $('#contactForm')[0].reset();
                                        $('#contactSubmit').attr('disabled', false);
                                        $('#contactSubmit').removeClass('btn-success').addClass('btn-primary');
                                        $("#contactSubmit").html("Submit");
                                        $('#contact_name').removeClass('is-valid').removeClass('is-invalid');
                                        $('#contact_email').removeClass('is-valid').removeClass('is-invalid');
                                        $('#contact_number').removeClass('is-valid').removeClass('is-invalid');
                                        
                                        Swal.fire({
                                          toast: true,
                                          position: 'top-end',
                                          showConfirmButton: false,
                                          timer: 3000,
                                          timerProgressBar: true,
                                          icon: 'success',
                                          title: 'Form Submitted'
                                        });
                                    }
                                    if(response.status === false)
                                    {
                                        $('#contactForm')[0].reset();
                                        $('#exampleModal1').modal('hide');
                                        $('#contactSubmit').attr('disabled', false);
                                        $('#contactSubmit').removeClass('btn-success').addClass('btn-primary');
                                        $("#contactSubmit").html("Submit");
                                        $('#contact_name').removeClass('is-valid').removeClass('is-invalid');
                                        $('#contact_email').removeClass('is-valid').removeClass('is-invalid');
                                        $('#contact_number').removeClass('is-valid').removeClass('is-invalid');
                                        Swal.fire({
                                          toast: true,
                                          position: 'top-end',
                                          showConfirmButton: false,
                                          timer: 3000,
                                          timerProgressBar: true,
                                          icon: 'error',
                                          title: 'Something went wrong! <br>Please try after sometime.'
                                        });
                                    }
                                }
                            });
                        }
                        else{
                            $('#contact_number').addClass('is-invalid').removeClass('is-valid');
                            $('#contact_number_error').html('Please Enter Valid Contact Number');
                        }
                        
                    }
                    else
                    {
                        $('#contact_number').addClass('is-invalid').removeClass('is-valid');
                        $('#contact_number_error').html('Please Enter Contact Number');
                    }
                }
                else
                {
                    $('#contact_email').addClass('is-invalid').removeClass('is-valid');
                    $('#contact_email_error').html('Please Enter Valid Email Address');   
                } 
            }
            else
            {
                $('#contact_email').addClass('is-invalid').removeClass('is-valid');
                $('#contact_email_error').html('Please Enter Email Address');
            }
        }
        else
        {
            $('#contact_name').addClass('is-invalid').removeClass('is-valid');
            $('#contact_name_error').html('Please Enter Name');
        }
        
    });
    
    $('#enquirySubmit').on('click',function(){
       
        var name = $('#enquiry_name').val();
        var email = $('#enquiry_email').val();
        var contact = $('#enquiry_number').val();
        var treatment = $('#enquiry_treatment').val();
        var comment = $('#enquiry_comment').val();
        
        $('#enquiry_name_error').html('');
        $('#enquiry_email_error').html('');
        $('#enquiry_number_error').html('');
        $('#enquiry_treatment_error').html('');
        
        if(name !== '')
        {
            $('#enquiry_name').addClass('is-valid').removeClass('is-invalid');
            if(email !== '')
            {
                if(isValidEmailAddress(email))
                {
                    $('#enquiry_email').addClass('is-valid').removeClass('is-invalid');
                    if(contact !== '')
                    {
                        if(contact.length === 10)
                        {
                            $('#enquiry_number').addClass('is-valid').removeClass('is-invalid');
                            
                            if(treatment !== '0')
                            {   
                                $('#enquiry_treatment').removeClass('is-invalid').addClass('is-valid');
                                /* All Details are entered submit the form */
                                $.ajax({
                                    url : "submitHealthForm.php",
                                    type : "POST",
                                    data : $('#enquiryForm').serialize(),
                                    dataType : 'json',
                                    beforeSend: function () {
                                        $('#enquirySubmit').attr('disabled', true);
                                        $('#enquirySubmit').removeClass('btn-primary').addClass('btn-success');
                                        $("#enquirySubmit").html("Submitting Form ...");
                                    },
                                    success : function(response)
                                    {
                                        console.log(response);
                                        if(response.status === true)
                                        {
                                            $('#enquiryForm')[0].reset();
                                            $('#exampleModal').modal('hide');
                                            $('#enquirySubmit').attr('disabled', false);
                                            $('#enquirySubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#enquirySubmit").html("Submit");
                                            $('#enquiry_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'success',
                                              title: 'Form Submitted'
                                            });
                                        }
                                        if(response.status === false)
                                        {
                                            $('#enquiryForm')[0].reset();
                                            $('#exampleModal').modal('hide');
                                            $('#enquirySubmit').attr('disabled', false);
                                            $('#enquirySubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#enquirySubmit").html("Submit");
                                            $('#enquiry_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#enquiry_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'error',
                                              title: 'Something went wrong! <br>Please try after sometime.'
                                            });
                                        }
                                    }
                                });
                            }
                            
                            else
                            {
                                $('#enquiry_treatment').addClass('is-invalid').removeClass('is-valid');
                                $('#enquiry_treatment_error').html('Please select any one option');
                            }
                            
                           
                        }
                        else{
                            $('#enquiry_number').addClass('is-invalid').removeClass('is-valid');
                            $('#enquiry_number_error').html('Please Enter Valid Contact Number');
                        }
                        
                    }
                    else
                    {
                        $('#enquiry_number').addClass('is-invalid').removeClass('is-valid');
                        $('#enquiry_number_error').html('Please Enter Contact Number');
                    }
                }
                else
                {
                    $('#enquiry_email').addClass('is-invalid').removeClass('is-valid');
                    $('#enquiry_email_error').html('Please Enter Valid Email Address');   
                } 
            }
            else
            {
                $('#enquiry_email').addClass('is-invalid').removeClass('is-valid');
                $('#enquiry_email_error').html('Please Enter Email Address');
            }
        }
        else
        {
            $('#enquiry_name').addClass('is-invalid').removeClass('is-valid');
            $('#enquiry_name_error').html('Please Enter Name');
        }
        
    });
    
    $('#wellnessSubmit').on('click',function(){
       
        var name = $('#wellness_name').val();
        var email = $('#wellness_email').val();
        var contact = $('#wellness_number').val();
        var treatment = $('#wellness_treatment').val();
        var comment = $('#wellness_comment').val();
        
        $('#wellness_name_error').html('');
        $('#wellness_email_error').html('');
        $('#wellness_number_error').html('');
        $('#wellness_treatment_error').html('');
        
        if(name !== '')
        {
            $('#wellness_name').addClass('is-valid').removeClass('is-invalid');
            if(email !== '')
            {
                if(isValidEmailAddress(email))
                {
                    $('#wellness_email').addClass('is-valid').removeClass('is-invalid');
                    if(contact !== '')
                    {
                        if(contact.length === 10)
                        {
                            $('#wellness_number').addClass('is-valid').removeClass('is-invalid');
                            
                            if(treatment !== '0')
                            {   
                                $('#wellness_treatment').removeClass('is-invalid').addClass('is-valid');
                                /* All Details are entered submit the form */
                                $.ajax({
                                    url : "submitWellnessForm.php",
                                    type : "POST",
                                    data : $('#wellnessForm').serialize(),
                                    dataType : 'json',
                                    beforeSend: function () {
                                        $('#wellnessSubmit').attr('disabled', true);
                                        $('#wellnessSubmit').removeClass('btn-primary').addClass('btn-success');
                                        $("#wellnessSubmit").html("Submitting Form ...");
                                    },
                                    success : function(response)
                                    {
                                        console.log(response);
                                        if(response.status === true)
                                        {
                                            $('#wellnessForm')[0].reset();
                                            $('#exampleModal4').modal('hide');
                                            $('#wellnessSubmit').attr('disabled', false);
                                            $('#wellnessSubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#wellnessSubmit").html("Submit");
                                            $('#wellness_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'success',
                                              title: 'Form Submitted'
                                            });
                                        }
                                        if(response.status === false)
                                        {
                                            $('#wellnessForm')[0].reset();
                                            $('#exampleModal4').modal('hide');
                                            $('#wellnessSubmit').attr('disabled', false);
                                            $('#wellnessSubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#wellnessSubmit").html("Submit");
                                            $('#wellness_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#wellness_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'error',
                                              title: 'Something went wrong! <br>Please try after sometime.'
                                            });
                                        }
                                    }
                                });
                            }
                            
                            else
                            {
                                $('#wellness_treatment').addClass('is-invalid').removeClass('is-valid');
                                $('#wellness_treatment_error').html('Please select any one option');
                            }
                            
                           
                        }
                        else{
                            $('#wellness_number').addClass('is-invalid').removeClass('is-valid');
                            $('#wellness_number_error').html('Please Enter Valid Contact Number');
                        }
                        
                    }
                    else
                    {
                        $('#wellness_number').addClass('is-invalid').removeClass('is-valid');
                        $('#wellness_number_error').html('Please Enter Contact Number');
                    }
                }
                else
                {
                    $('#wellness_email').addClass('is-invalid').removeClass('is-valid');
                    $('#wellness_email_error').html('Please Enter Valid Email Address');   
                } 
            }
            else
            {
                $('#wellness_email').addClass('is-invalid').removeClass('is-valid');
                $('#wellness_email_error').html('Please Enter Email Address');
            }
        }
        else
        {
            $('#wellness_name').addClass('is-invalid').removeClass('is-valid');
            $('#wellness_name_error').html('Please Enter Name');
        }
        
    });
    
    $('#hairSubmit').on('click',function(){
       
        var name = $('#hair_name').val();
        var email = $('#hair_email').val();
        var contact = $('#hair_number').val();
        var treatment = $('#hair_treatment').val();
        var comment = $('#hair_comment').val();
        
        $('#hair_name_error').html('');
        $('#hair_email_error').html('');
        $('#hair_number_error').html('');
        $('#hair_treatment_error').html('');
        
        if(name !== '')
        {
            $('#hair_name').addClass('is-valid').removeClass('is-invalid');
            if(email !== '')
            {
                if(isValidEmailAddress(email))
                {
                    $('#hair_email').addClass('is-valid').removeClass('is-invalid');
                    if(contact !== '')
                    {
                        if(contact.length === 10)
                        {
                            $('#hair_number').addClass('is-valid').removeClass('is-invalid');
                            
                            if(treatment !== '0')
                            {   
                                $('#hair_treatment').removeClass('is-invalid').addClass('is-valid');
                                /* All Details are entered submit the form */
                                $.ajax({
                                    url : "submitHairForm.php",
                                    type : "POST",
                                    data : $('#hairForm').serialize(),
                                    dataType : 'json',
                                    beforeSend: function () {
                                        $('#hairSubmit').attr('disabled', true);
                                        $('#hairSubmit').removeClass('btn-primary').addClass('btn-success');
                                        $("#hairSubmit").html("Submitting Form ...");
                                    },
                                    success : function(response)
                                    {
                                        console.log(response);
                                        if(response.status === true)
                                        {
                                            $('#hairForm')[0].reset();
                                            $('#hairModal').modal('hide');
                                            $('#hairSubmit').attr('disabled', false);
                                            $('#hairSubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#hairSubmit").html("Submit");
                                            $('#hair_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'success',
                                              title: 'Form Submitted'
                                            });
                                        }
                                        if(response.status === false)
                                        {
                                            $('#hairForm')[0].reset();
                                            $('#hairModal').modal('hide');
                                            $('#hairSubmit').attr('disabled', false);
                                            $('#hairSubmit').removeClass('btn-success').addClass('btn-primary');
                                            $("#hairSubmit").html("Submit");
                                            $('#hair_name').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_email').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_number').removeClass('is-valid').removeClass('is-invalid');
                                            $('#hair_treatment').removeClass('is-valid').removeClass('is-invalid');
                                            Swal.fire({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 3000,
                                              timerProgressBar: true,
                                              icon: 'error',
                                              title: 'Something went wrong! <br>Please try after sometime.'
                                            });
                                        }
                                    }
                                });
                            }
                            
                            else
                            {
                                $('#hair_treatment').addClass('is-invalid').removeClass('is-valid');
                                $('#hair_treatment_error').html('Please select any one option');
                            }
                            
                           
                        }
                        else{
                            $('#hair_number').addClass('is-invalid').removeClass('is-valid');
                            $('#hair_number_error').html('Please Enter Valid Contact Number');
                        }
                        
                    }
                    else
                    {
                        $('#hair_number').addClass('is-invalid').removeClass('is-valid');
                        $('#hair_number_error').html('Please Enter Contact Number');
                    }
                }
                else
                {
                    $('#hair_email').addClass('is-invalid').removeClass('is-valid');
                    $('#hair_email_error').html('Please Enter Valid Email Address');   
                } 
            }
            else
            {
                $('#hair_email').addClass('is-invalid').removeClass('is-valid');
                $('#hair_email_error').html('Please Enter Email Address');
            }
        }
        else
        {
            $('#hair_name').addClass('is-invalid').removeClass('is-valid');
            $('#hair_name_error').html('Please Enter Name');
        }
        
    });
    
});

//Valid Email Using Regular Expression
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}