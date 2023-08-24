<?php
    session_start();
    session_unset();
    session_destroy();
    unset($_SESSION['adminName']);
    unset($_SESSION['email']);
    echo '<script>
    window.location.href =
        "login.php";

</script>';
?>