Check_email
===========

Class to check the existence of an email address with SMTP

Usage is simple, check the test.php

The function check_email($email) will simulate sending an email using SMTP, but will not actually send one.

It's usage is to validate existence to avoid mistyping and spammers, who are known for using non existing email addresses.

I have setup an API service based on this. 

XML
https://www.centillien.com/services/api/rest/xml/?method=validate_email&email=$email

or JSON
https://www.centillien.com/services/api/rest/json/?method=validate_email&email=$email

$email is the actual email to check.

It returns a boolean true if valid or an error if invalid.

You can use it as a free service and incorporate in your website if you want. Do not misuse it.


Reporting issues and PR's are welcome.
