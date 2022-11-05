<?php
session_start();
session_destroy();
echo"<script>
                   
        window.location.href='logins.php?user_logged_out';
    </script>";




?>