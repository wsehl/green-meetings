<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    $logged = false;
} else {
    $logged = true;
}
require_once('config.php');
require_once("langs/$default_lang");
require_once('components/header.php');
?>

<div class="container">
    <section class="hero is-large">
        <div class="hero-body">
            <div class="columns">
                <div class="column"></div>
                <div class="column">
                    <h1 class="title"><?php echo $lang['welcome']; ?> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
                    <progress class="progress is-small is-light" max="100">15%</progress>
                </div>
                <div class="column"></div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>

</html>