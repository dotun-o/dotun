<?php
$name = null;
$email = null;
$message = null;
$mail = null;
$to = null;
$subject = null;
$headers = null;
$output = null;
$submit_status_messages = array(
    "invalid" => "One or more fields were not properly completed. Please try again.",
    "success" => "Feedback submitted. Thank you.",
    "failure" => "There was a problem submitting your feedback.<br />Please try again or <a href='mailto: email@dotun.me?subject=Code by Dotun: Feedback Submission Problem'>contact the Admin</a>."

);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // function process_field is from functions.php
    $name = process_field($_POST["name"]);
    $email = process_field($_POST["email"]);
    $message = process_field($_POST["message"]);

    if(empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message))
    {
        header("Location: {$_SERVER['PHP_SELF']}?submit_status={$submit_status_messages['invalid']}");
    }
    else
    {
        $to = "email@dotun.me";
        $subject = "Feedback from Code by Dotun.";
        $message = "The following was submitted: \r\n" . $message;
        $headers = "Reply-To: {$email}";
        $mail = mail($to, $subject, $message, $headers);

        if($mail)
        {
            header("Location: {$_SERVER['PHP_SELF']}?submit_status={$submit_status_messages['success']}");
        }
        else
        {
            header("Location: {$_SERVER['PHP_SELF']}?submit_status={$submit_status_messages['failure']}");
        }
    }
}
?>