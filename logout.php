<?php
echo "Logged out successfully <br> redirecting to login page in 4 seconds";

            setcookie('email','',time() - (86400*30));
            ?> <script> function pageRedirect() {
                window.location.replace("login.php");
            }      
            setTimeout("pageRedirect()", 3500);</script><?php





?>