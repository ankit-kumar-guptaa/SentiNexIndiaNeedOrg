<?php
@extract($_POST);

if(isset($submit_form)){
    

    require("email_server/email.php");

    $mail->setFrom("no-reply@algoweb.in", "Enquiry from Website");
    $mail->addAddress("ninjazzsite59@gmail.com");



    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission";
    $mail->Body = '<html>
    <head>
    <title>New Contact Form Submission</title>
    </head>
    <body>
    <h1>New Contact Form Submission</h1>
    <table>
    <tr>
    <td>Name</td>
    <td>' . $name . '</td>
    </tr>
    <tr>
    <td>Contact No.</td>
    <td>' . $contact . '</td>
    </tr>
    <tr>
    <td>Services</td>
    <td>' . $services . '</td>
    </tr>
    </table>
    <p>Thank you for contacting us. We will get back to you soon.</p>
    </body>
    
    </html>';
    

    if($mail->Send()){
        echo "Email sent successfully";
    }else{
        echo "Email sending failed : " . $mail->ErrorInfo;
    }

    echo "<script>window.location.href='thankyou.php';</script>";
}

else{
    
    echo "invalid request Method";
}
