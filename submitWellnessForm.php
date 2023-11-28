<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    include('db_connect.php');
    
    $name = mysqli_real_escape_string($conn, $_POST['wellness_name']);
    $email = mysqli_real_escape_string($conn, $_POST['wellness_email']);
    $contact = mysqli_real_escape_string($conn, $_POST['wellness_number']);
    $enquiry_treatment = mysqli_real_escape_string($conn, $_POST['wellness_treatment']);
    $enquiry_comment = mysqli_real_escape_string($conn, $_POST['wellness_comment']);
    
    date_default_timezone_set('Asia/Kolkata');
    
    $database_added_on = date('Y-m-d h:i:s');
    $added_on = date('d M, Y h:i:s');
    $pagename = 'wellness';
    
    if(mysqli_query($conn,"INSERT INTO enquiry(name, email, contact, treatment, comments, pagename, booked_date) VALUES ('$name','$email','$contact','$enquiry_treatment','$enquiry_comment','$pagename','$database_added_on')"))
    {
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'hairhealthwellnesscenter@gmail.com';      //SMTP username
            $mail->Password   = 'nmjzurwovkfiydqf';                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('hairhealthwellnesscentre@gmail.com', 'Hair Health and Wellness');     //Add a recipient
            $mail->addAddress('hairhealthwellnesscenter@gmail.com', 'Hair Health and Wellness');     //Add a recipient
            
            $subject = 'Hair Health and Wellness - Wellnesss Page Form';
    
            $message ="
            <html>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                <link href='https://fonts.googleapis.com/css?family=Merriweather&display=swap' rel='stylesheet'>
            </head>
            <body>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-12'>
                
                    <div>
                    <div class='col-md-12'>
                    <div class='row'>
                    <p style='text-align:left;color:black;'>Name :&nbsp;&nbsp;$name<p>
                    
                    </div>
                    <div class='row'>
                        <p style='text-align:left;color:black;'>Email :&nbsp;&nbsp;<a href='mailto:$email'>$email</a> <p>
                    <div>
                    
                    <div class='row'>
                        <p style='text-align:left;color:black;'>Phone no :&nbsp;&nbsp;<a href='tel:+91 $contact'>$contact</a> <p>
                    <div>
                    
                    <div class='row'>
                        <p style='text-align:left;color:black;'>Process :&nbsp;&nbsp;$enquiry_treatment<p>
                    </div>
                    
                    <div class='row'>
                        <p style='text-align:left;color:black;'>Comments :&nbsp;&nbsp;$enquiry_comment<p>
                    </div>
                    
                    <div class='row'>
                        <p style='text-align:left;color:black;'>Date :&nbsp;&nbsp;$added_on<p>
                    <div>
                </div>
                </div>
            </div>
            </table>
            </body>
            </html>";
                
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->send();
            
            $response = array(
                'status'  => true,
                'message' => 'Email sent successfully'
            );
        }
        
        catch (Exception $e) {
            $response = array(
                'status'  => false,
                'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
            );
        }
    }
    else
    {
        $response = array(
            'status'  => false,
            'message' => 'SQl Error',
        );
    }
    
    //Return Response
    echo json_encode($response);
   

?>