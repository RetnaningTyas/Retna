<?php
    session_start();
    session_destroy();
    echo '<script> window.location="form_admin.php"</script>';
    
?>