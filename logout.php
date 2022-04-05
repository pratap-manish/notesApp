<!-- <h2>Logged out successfully <br> redirecting to login page in 4 seconds</h2> -->
<?php


            setcookie('email','',time() - (86400*30));

            ?> 
            <script> window.alert("logged out successfully");
            // function pageRedirect() {
                window.location.replace("login.php");
            // }      
            // setTimeout("pageRedirect()", 3500);
            </script><?php





?>