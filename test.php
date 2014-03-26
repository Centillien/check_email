<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sample</title>
    </head>
<body>
        <?php
        require_once 'class.check_email.php';

        $anon_email = 'not_existing_email123@gmail.com';

        $vmail = new verifyEmail();

        if ($vmail->check_email($anon_email) == false) {
                echo "That email address does not seem to exist";
        }else{
                echo "That email does indeed exists";
        }

        ?>
    </body>
</html>
