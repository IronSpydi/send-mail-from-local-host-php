sent mail using php through localhost

step 1 : Go to C:\xampp\php and open the php.ini file.<br /> 
step 2 : find "mail function"<br /> 
step 3 : change these things {<br /> 
SMTP=smtp.gmail.com<br /> 
smtp_port=25<br /> 
sendmail_from = your gmail id<br /> 
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"<br /> 
}<br /> 

step 4 : go to C:\xampp\sendmail and open the sendmail.ini file.<br /> 
step 5 : find "smtp_server"<br /> 
step 6 : change these things {<br /> 
smtp_server=smtp.gmail.com<br /> 
smtp_port=25 //use any of them<br /> 
error_logfile=error.log<br /> 
debug_logfile=debug.log<br /> 
auth_username=your gmail id<br /> 
auth_password=gmail id password<br /> 
force_sender=your gmail id(optional)<br /> 
hostname = localhost(optional)<br /> 
}<br /> 

step 6 : goto your gmail account and then "Manage your Google Account"<br /> 
step 7 : serch for "Less secure app access" turn it on<br /> 
step 8 : restart your XAMPP <br /> 
step 9 : run index.php<br /> 
