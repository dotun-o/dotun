<?php
    require_once("includes/functions.php");
    require_once("includes/process-contact.php");
    require_once("includes/header.php");
?>
    <form id="contact-form" name="contact-form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <p class="align-center">All fields required.</p>
        <p class="align-center warning"><?php echo_if_exists($_GET["submit_status"]); ?></p>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" required="required" placeholder="Your Name" />

        <label for="name">Email</label>
        <input id="email" name="email" type="email" required="required" placeholder="Your Email" />

        <label for="name">Message</label>
        <textarea id="message" name="message" required="required" placeholder="Your Message"></textarea>

        <button id="submit" name="submit" type="submit">Submit</button>

        <button id="reset" name="reset" type="reset">Reset</button>
    </form>
<?php require_once("includes/footer.php") ?>