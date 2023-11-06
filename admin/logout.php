<?php
    session_start();
    session_unset();
    session_destroy();
    unset($_SESSION['username']);
    echo '<script>
    window.location.href =
        "login.php";

</script>';
?>