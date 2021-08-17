sent mail using php through local host

step 1 : Go to C:\xampp\php and open the php.ini file.
step 2 : find "mail function"
step 3 : change these things {
SMTP=smtp.gmail.com
smtp_port=25
sendmail_from = your gmail id
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
}

step 4 : go to C:\xampp\sendmail and open the sendmail.ini file.
step 5 : find "smtp_server"
step 6 : change these things {
smtp_server=smtp.gmail.com
smtp_port=25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=your gmail id
auth_password=gmail id password
force_sender=your gmail id(optional)
hostname = localhost(optional)
}

step 6 : goto your gmail account and then "Manage your Google Account"
step 7 : serch for "Less secure app access" turn it on
step 8 : restart your XAMPP 
step 9 : run index.php
