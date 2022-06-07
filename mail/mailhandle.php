<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(DR_ROOT.DS.'mail'.DS.'Exception.php');
require_once(DR_ROOT.DS.'mail'.DS.'PHPMailer.php');
require_once(DR_ROOT.DS.'mail'.DS.'SMTP.php');

function welcome_mail($address,$name)
{
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = '';                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'marketswave.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@marketswave.com';                 // SMTP username
    $mail->Password = 'onyenkpo1.';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('noreply@marketswave.com', 'Marketswave');
    $mail->addAddress("$address");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                              // Set email format to HTML

    $mail->Subject = 'Welcome to Marketswave investment';
    $mail->Body    = "<!DOCTYPE html>
    <html lang='en' xmlns='https://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
        xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <meta http-equiv='content-type' content='text/html;charset=UTF-8' /><!-- /Added by HTTrack -->
    
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='x-apple-disable-message-reformatting'>
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Lato:300,400,700' rel='stylesheet'>
    
        <style>
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }
    
            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
    
            /* What it does: Centers email on Android 4.4 */
            div[style*='margin: 16px 0'] {
                margin: 0 !important;
            }
    
            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }
    
            /* What it does: Fixes webkit padding issue. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
    
            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode: bicubic;
            }
    
            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
            a {
                text-decoration: none;
            }
    
            /* What it does: A work-around for email clients meddling in triggered links. */
            *[x-apple-data-detectors],
            /* iOS */
            .unstyle-auto-detected-links *,
            .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
    
            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }
    
            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
            .im {
                color: inherit !important;
            }
    
            /* If the above doesn't work, add a .g-img class to any image in question. */
            img.g-img+div {
                display: none !important;
            }
    
            /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
            /* Create one of these media queries for each additional viewport size you'd like to fix */
    
            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u~div .email-container {
                    min-width: 320px !important;
                }
            }
    
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u~div .email-container {
                    min-width: 375px !important;
                }
            }
    
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u~div .email-container {
                    min-width: 414px !important;
                }
            }
        </style>
    
    
        <style>
            /* What it does: Hover styles for buttons */
            .primary {
                background: #5A469D;
            }
    
            .bg_white {
                background: #ffffff;
            }
    
            .bg_light {
                background: #fafafa;
            }
    
            .bg_black {
                background: #000000;
            }
    
            .bg_dark {
                background: rgba(0, 0, 0, .8);
            }
    
            .email-section {
                padding: 2.5em;
            }
    
            /*BUTTON*/
            .btn {
                padding: 5px 15px;
                display: inline-block;
            }
    
            .btn.btn-primary {
                border-radius: 30px;
                background: #5A469D;
                color: #ffffff;
            }
    
            .btn.btn-white {
                border-radius: 30px;
                background: #ffffff;
                color: #000000;
            }
    
            .btn.btn-white-outline {
                border-radius: 30px;
                background: transparent;
                border: 1px solid #fff;
                color: #fff;
            }
    
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Josefin Sans', sans-serif;
                color: #000000;
                margin-top: 0;
                font-weight: 400;
            }
    
            body {
                font-family: 'Josefin Sans', sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0, 0, 0, .4);
            }
    
            a {
                color: #5A469D;
            }
    
            /*LOGO*/
    
            .logo {
                margin: 0;
                display: inline-block;
                position: absolute;
                top: 10px;
                left: 0;
                right: 0;
                margin-bottom: 0;
            }
    
            .logo a {
                color: #fff;
                font-size: 24px;
                font-weight: 700;
                text-transform: uppercase;
                font-family: 'Josefin Sans', sans-serif;
                display: inline-block;
                border: 2px solid #fff;
                line-height: 1.3;
                padding: 10px 15px 4px 15px;
                margin: 0;
            }
    
            .logo h1 a span {
                line-height: 1;
            }
    
            .navigation {
                padding: 0;
            }
    
            .navigation li {
                list-style: none;
                display: inline-block;
                ;
                margin-left: 5px;
                font-size: 13px;
                font-weight: 500;
            }
    
            .navigation li a {
                color: rgba(0, 0, 0, .4);
            }
    
            /*HERO*/
            .hero {
                position: relative;
                z-index: 0;
            }
    
            .hero .overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                width: 100%;
                background: #000000;
                z-index: -1;
                opacity: .3;
            }
    
            .hero .text {
                color: rgba(255, 255, 255, .9);
            }
    
            .hero .text h2 {
                color: #fff;
                font-size: 40px;
                margin-bottom: 0;
                font-weight: 600;
                line-height: 1;
                text-transform: uppercase;
            }
    
            .hero .text h2 span {
                font-weight: 600;
                color: #5A469D;
            }
    
    
            /*HEADING SECTION*/
    
            .heading-section h2 {
                color: #000000;
                font-size: 28px;
                margin-top: 0;
                line-height: 1.4;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
    
            .heading-section .subheading {
                margin-bottom: 20px !important;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(0, 0, 0, .4);
                position: relative;
            }
    
            .heading-section .subheading::after {
                position: absolute;
                left: 0;
                right: 0;
                bottom: -10px;
                content: '';
                width: 100%;
                height: 2px;
                background: #5A469D;
                margin: 0 auto;
            }
    
            .heading-section-white {
                color: rgba(255, 255, 255, .8);
            }
    
            .heading-section-white h2 {
                line-height: 1;
                padding-bottom: 0;
            }
    
            .heading-section-white h2 {
                color: #ffffff;
            }
    
            .heading-section-white .subheading {
                margin-bottom: 0;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(255, 255, 255, .4);
            }
    
    
            /*BLOG*/
            .blog-entry {
                border: 1px solid red;
                padding-bottom: 30px !important;
            }
    
            .text-blog .meta {
                text-transform: uppercase;
                font-size: 13px;
                margin-bottom: 0;
            }
    
            /*FOOTER*/
    
            .footer {
                color: rgba(255, 255, 255, .5);
    
            }
    
            .footer .heading {
                color: #ffffff;
                font-size: 20px;
            }
    
            .footer ul {
                margin: 0;
                padding: 0;
            }
    
            .footer ul li {
                list-style: none;
                margin-bottom: 10px;
            }
    
            .footer ul li a {
                color: rgba(255, 255, 255, 1);
            }
    
    
            @media screen and (max-width: 500px) {}
        </style>
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;'>
        <center style='width: 100%; background-color: #f1f1f1;'>
            <div
                style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
                &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
            </div>
            <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
    
                <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
                    style='margin: auto;'>
                    <tr>
                        <td valign='middle' class='hero bg_white'
                            style='background-image: url(https://marketswave.com/images/gallery/news-3.png); background-size: cover; height: 400px;'>
                            <div class='overlay'></div>
                            <table>
                                <tr>
                                    <td>
                                        <div class='text'
                                            style='padding: 1rem 4em; text-align: center;color: #000000;'>
                                            <a href='https://marketswave.com'><img
                                                    src='https://marketswave.com/images/logo.png' alt='Marketswave'></a>
                                            <h2 style='font-size: 18px; line-height: 24px; margin-top: 1rem;color: #000000;'>Simple, smart
                                                investing.</h2>
                                            <p>You're only a few steps away from joining the 120,000+ active investors
                                                who've already diversified with Marketswave.
                                            </p>
                                            
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class='bg_white email-section'>
                            <div class='heading-section' style='text-align: center; padding: 0 30px;'>
                                <h2>Hi $name</h2>
                                <h3 style='font-size: 24px;'>Welcome to Marketswave</h3>
                            </div>
    
                        </td>
                    </tr>
                    <tr>
                        <td class='bg_white'>
                            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                <tr>
    
                                    <center>
                                        <img src='https://marketswave.com/images/resource/mail.png' alt='' width='200rem'>
                                        <h3 style='font-size: 24px;'>Verify your email address</h3>
                                        <p style='color:#000000;'>Help us secure your Marketswave account by clicking the
                                            button below to confirm your email address.</p>
                                            <p><a href='https://marketswave.com/actions/verification.php?email=$address' class='btn btn-primary'>Comfirm my
                                                email</a></p>
                                              
                                    </center>
                        </td>
                    </tr>
                </table>
                </td>
                </tr>
    
                </table>
                <table style='width: 100%; background: #f1f1f1; color: #000000;'>
                    <tr>
                        <td>
                            <p>This message was sent to $address</p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>Replies to this email address will not be received. Have questions? Submit a request to our <a href='mailto:support@marketswave.com'> Client Support team</a>.</p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>This message is intended only for the use of the individual to whom it is addressed and may contain information that is confidential. The information contained in this email is informational only and shall not constitute or be construed as an endorsement by Marketswave Ltd. or its affiliates of any investment or as legal or tax advice.
                            </p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>© ".date('Y')." Marketswave Ltd.</p>
                        </td>
                    </tr>
    
    
    
                </table>
            </div>
        </center>
    
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-23581568-13'
            type='2f034752d2d5b965205259e9-text/javascript'></script>
        <script type='2f034752d2d5b965205259e9-text/javascript'>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-23581568-13');
        </script>
        <script src='../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js'
            data-cf-settings='2f034752d2d5b965205259e9-|49' defer=''></script>
    </body>
    
    <!-- Mirrored from colorlib.com/etc/email-template/7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 20:37:24 GMT -->
    
    </html>";
    $mail->AltBody = '';
    $mail->send();
    // if (!$mail->send()) {
    //     echo 'Message could not be sent.';
    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'Message has been sent';
    // }
}

function request_mail($msg)
{
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'marketswave.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@marketswave.com';                 // SMTP username
    $mail->Password = 'onyenkpo1.';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('noreply@marketswave.com', 'Request');
    $mail->addAddress('support@marketswave.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                              // Set email format to HTML

    $mail->Subject = 'Request';
    $mail->Body    = $msg;
    $mail->AltBody = '';

    if (!$mail->send()) {
       return false;
    } else {
        return true;
    }
}

function reset_mail($address)
{
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'marketswave.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@marketswave.com';                 // SMTP username
    $mail->Password = 'onyenkpo1.';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('noreply@marketswave.com', 'Marketswave');
    $mail->addAddress("$address");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                              // Set email format to HTML

    $mail->Subject = 'Password Reset';
    $mail->Body    = "<!DOCTYPE html>
    <html lang='en' xmlns='https://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <meta http-equiv='content-type' content='text/html;charset=UTF-8' />
    
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='x-apple-disable-message-reformatting'>
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Lato:300,400,700' rel='stylesheet'>
    
        <style>
            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }
    
            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
    
            /* What it does: Centers email on Android 4.4 */
            div[style*='margin: 16px 0'] {
                margin: 0 !important;
            }
    
            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }
    
            /* What it does: Fixes webkit padding issue. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
    
            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode: bicubic;
            }
    
            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
            a {
                text-decoration: none;
            }
    
            /* What it does: A work-around for email clients meddling in triggered links. */
            *[x-apple-data-detectors],
            /* iOS */
            .unstyle-auto-detected-links *,
            .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
    
            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }
    
            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
            .im {
                color: inherit !important;
            }
    
            /* If the above doesn't work, add a .g-img class to any image in question. */
            img.g-img+div {
                display: none !important;
            }
    
            /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
            /* Create one of these media queries for each additional viewport size you'd like to fix */
    
            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u~div .email-container {
                    min-width: 320px !important;
                }
            }
    
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u~div .email-container {
                    min-width: 375px !important;
                }
            }
    
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u~div .email-container {
                    min-width: 414px !important;
                }
            }
        </style>
    
        <style>
            /* What it does: Hover styles for buttons */
            .primary {
                background: #5A469D;
            }
    
            .bg_white {
                background: #ffffff;
            }
    
            .bg_light {
                background: #fafafa;
            }
    
            .bg_black {
                background: #000000;
            }
    
            .bg_dark {
                background: rgba(0, 0, 0, .8);
            }
    
            .email-section {
                padding: 2.5em;
            }
    
            /*BUTTON*/
            .btn {
                padding: 5px 15px;
                display: inline-block;
            }
    
            .btn.btn-primary {
                border-radius: 30px;
                background: #5A469D;
                color: #ffffff;
            }
    
            .btn.btn-white {
                border-radius: 30px;
                background: #ffffff;
                color: #000000;
            }
    
            .btn.btn-white-outline {
                border-radius: 30px;
                background: transparent;
                border: 1px solid #fff;
                color: #fff;
            }
    
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Josefin Sans', sans-serif;
                color: #000000;
                margin-top: 0;
                font-weight: 400;
            }
    
            body {
                font-family: 'Josefin Sans', sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0, 0, 0, .4);
            }
    
            a {
                color: #5A469D;
            }
    
            /*LOGO*/
    
            .logo {
                margin: 0;
                display: inline-block;
                position: absolute;
                top: 10px;
                left: 0;
                right: 0;
                margin-bottom: 0;
            }
    
            .logo a {
                color: #fff;
                font-size: 24px;
                font-weight: 700;
                text-transform: uppercase;
                font-family: 'Josefin Sans', sans-serif;
                display: inline-block;
                border: 2px solid #fff;
                line-height: 1.3;
                padding: 10px 15px 4px 15px;
                margin: 0;
            }
    
            .logo h1 a span {
                line-height: 1;
            }
    
            .navigation {
                padding: 0;
            }
    
            .navigation li {
                list-style: none;
                display: inline-block;
                ;
                margin-left: 5px;
                font-size: 13px;
                font-weight: 500;
            }
    
            .navigation li a {
                color: rgba(0, 0, 0, .4);
            }
    
            /*HERO*/
            .hero {
                position: relative;
                z-index: 0;
            }
    
            .hero .overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                width: 100%;
                background: #000000;
                z-index: -1;
                opacity: .3;
            }
    
            .hero .text {
                color: rgba(255, 255, 255, .9);
            }
    
            .hero .text h2 {
                color: #fff;
                font-size: 40px;
                margin-bottom: 0;
                font-weight: 600;
                line-height: 1;
                text-transform: uppercase;
            }
    
            .hero .text h2 span {
                font-weight: 600;
                color: #5A469D;
            }
    
    
            /*HEADING SECTION*/
    
            .heading-section h2 {
                color: #000000;
                font-size: 28px;
                margin-top: 0;
                line-height: 1.4;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
    
            .heading-section .subheading {
                margin-bottom: 20px !important;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(0, 0, 0, .4);
                position: relative;
            }
    
            .heading-section .subheading::after {
                position: absolute;
                left: 0;
                right: 0;
                bottom: -10px;
                content: '';
                width: 100%;
                height: 2px;
                background: #5A469D;
                margin: 0 auto;
            }
    
            .heading-section-white {
                color: rgba(255, 255, 255, .8);
            }
    
            .heading-section-white h2 {
                line-height: 1;
                padding-bottom: 0;
            }
    
            .heading-section-white h2 {
                color: #ffffff;
            }
    
            .heading-section-white .subheading {
                margin-bottom: 0;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(255, 255, 255, .4);
            }
    
    
            /*BLOG*/
            .blog-entry {
                border: 1px solid red;
                padding-bottom: 30px !important;
            }
    
            .text-blog .meta {
                text-transform: uppercase;
                font-size: 13px;
                margin-bottom: 0;
            }
    
            /*FOOTER*/
    
            .footer {
                color: rgba(255, 255, 255, .5);
    
            }
    
            .footer .heading {
                color: #ffffff;
                font-size: 20px;
            }
    
            .footer ul {
                margin: 0;
                padding: 0;
            }
    
            .footer ul li {
                list-style: none;
                margin-bottom: 10px;
            }
    
            .footer ul li a {
                color: rgba(255, 255, 255, 1);
            }
    
    
            @media screen and (max-width: 500px) {}
        </style>
    </head>
    
    <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly;'>
        <center style='width: 100%;'>
            <div
                style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
            </div>
            <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
    
                <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
                    style='margin: auto; background:#d3d1d0'>
                    <tr>
                        <td valign='middle' class='hero background-size: cover; height: 400px;'>
                            <div class='overlay'></div>
                            <table>
                                <tr>
                                    <td>
                                        <div class='text'
                                            style='padding: 1rem 4em; text-align: center; color:#000000'>
                                            <a href='https://marketswave.com'
                                                style='display: block; padding: 1rem;'><img
                                                    src='https://marketswave.com/images/logo.png' alt='Marketswave' style=''></a>
                                            <h2 style='font-size: 18px; line-height: 24px; margin-top: 1rem; color: #000000;'>Reset your password</h2>
                                            <p>We have received a request to reset your Marketswave password. Please click the button below to complete the reset:
                                            </p>
                                            <p><a href='https://marketswave.com/reset.php?email=$address' class='btn btn-primary'>Reset my
                                                password</a></p>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 0 4rem;'>
                                        <hr>
                                    </td>
                                </tr>
                                
                                <tr style='color: #000000;'>
                                    <td style='color: #000000 ; text-align: center; font-size: 20px; padding: 0 3rem;'>
                                        <p>Marketswave will never make any changes to you account without you approval</p>
                                        <p>
                                            If you need additional assistance, or did not request this change, please contact <br> <a href='mailto:support@marketswave.com'>support@marketswave.com.</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                   
                </table>
                </td>
                </tr>
    
                </table>
                <table style='width: 100%; background: #f1f1f1; color: #000000;'>
                    <tr>
                        <td>
                            <p>This message was sent to $address</p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>Replies to this email address will not be received. Have questions? Submit a request to our <a href='mailto:support@marketswave.com'>Client Support team.</a></p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>This message is intended only for the use of the individual to whom it is addressed and may contain information that is confidential. The information contained in this email is informational only and shall not constitute or be construed as an endorsement by Marketswave Ltd. or its affiliates of any investment or as legal or tax advice.
                            </p>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            <p>© ".date('Y')." Marketswave Ltd.</p>
                        </td>
                    </tr>
    
    
    
                </table>
            </div>
        </center>
    
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-23581568-13'
            type='2f034752d2d5b965205259e9-text/javascript'></script>
        <script type='2f034752d2d5b965205259e9-text/javascript'>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-23581568-13');
        </script>
        <script src='../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js'
            data-cf-settings='2f034752d2d5b965205259e9-|49' defer=''></script>
    </body>
    
    </html>";
    $mail->AltBody = '';
    if ($mail->send()) {
       return true;
    } else {
        return false;
    }
}

