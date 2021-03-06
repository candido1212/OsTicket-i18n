<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();
$LANG['LANGUAGE'] = 'ru';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'Russian';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Russian';

$LANG['CODEPAGE'] = 'UTF-8';

$LANG['ERROR_NAME_REQUIRED'] = 'Name required';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Message required';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Invalid FROM address';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Email parse failed';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Services not available!';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Access Denied. Possibly invalid ticket ID';
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Security violation. Repeated violations will result in your account being locked.';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Invalid File Type';
$LANG['ERROR_FILE_REJECTED'] = 'File {0} rejected!';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'Unable to post the message. Try again';
$LANG['ERROR_OCCURED'] = 'Error(s) occured. Please try again';
$LANG['ERROR_UNKNOW_ACTION'] = 'Uknown action';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN']='You\'ve reached maximum failed login attempts allowed. Try again after 5 minutes or <a href="open.php">open a new ticket</a>'; 
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Security violation. Repeated violations will result in your account being locked';
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Access Denied. Possibly invalid ticket ID';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Message required';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'Unable to post the message. Try again';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Error(s) occured. Please try again';
$LANG['ERROR_UKNOW_ACTION'] = 'Unknown action';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'You must change your password to continue.';

$LANG['TITLE'] = 'Tickets FullService'; 
$LANG['TITLE_BOX_NEW_TICKET'] = 'New Ticket';
$LANG['TITLE_BAR_OFFLINE'] = 'Support Ticket System';
$LANG['TITLE_OFFLINE'] = 'Support Ticket System Offline';

// relative path of imagens in "translate/".$LANG['LANGUAGE']."/"
$LANG['IMAGE_STAFF_VIEW_OPEN'] = 'staff/view_open.gif';
$LANG['IMAGE_STAFF_VIEW_CLOSED'] = 'staff/view_closed.gif';
$LANG['IMAGE_STAFF_REFRESH'] = 'staff/refresh.gif';

$LANG['LABEL_EMAIL'] = 'E-Mail';
$LANG['LABEL_TICKET_NUMBER'] = 'Ticket#';
$LANG['LABEL_FULL_NAME'] = 'Full Name';
$LANG['LABEL_NAME'] = 'Name';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Email Address'; 
$LANG['LABEL_TELEPHONE'] = 'Telephone';
$LANG['LABEL_PHONE'] = 'Phone';
$LANG['LABEL_HELP_TOPIC'] = 'Help Topic';
$LANG['LABEL_SUBJECT'] = 'Subject';
$LANG['LABEL_MESSAGE'] = 'Message';
$LANG['LABEL_PRIORITY'] = 'Priority';
$LANG['LABEL_ATTACHMENT'] = 'Attachment';
$LANG['LABEL_TICKET_STATUS'] = 'Ticket Status';
$LANG['LABEL_VIEW_STATUS'] = 'View Status'; 
$LANG['LABEL_DEPARTMENT'] = 'Department';
$LANG['LABEL_CREATE_DATE'] = 'Create Date';
$LANG['LABEL_USERNAME'] = 'Username';
$LANG['LABEL_PASSWORD'] = 'Password';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Password (again)';
$LANG['LABEL_POST_REPLY']='Post Reply';
$LANG['LABEL_RESET'] = 'Reset';
$LANG['LABEL_CANCEL'] = 'Cancel';
$LANG['LABEL_SUBMIT'] = 'Submit';
$LANG['LABEL_TRANSFER'] = 'Transfer';
$LANG['LABEL_ASSIGN'] = 'Assign';
$LANG['LABEL_OPEN_TICKET'] = 'Open Ticket';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Open New Ticket';
$LANG['LABEL_SUBMIT_TICKET'] = 'Submit Ticket';
$LANG['TEXT_SELECT_ONE_TOPIC'] = 'Select One';
$LANG['LABEL_CHECK_STATUS'] = 'Check Status';
$LANG['LABEL_MY_PROFILE'] = 'My Profile';
$LANG['LABEL_PREFERENCES'] = 'Preferences';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Change Password';
$LANG['LABEL_MY_PREFERENCES'] = 'My Preferences';
$LANG['LABEL_ADMIN_PANEL'] = 'Admin Panel';
$LANG['LABEL_STAFF_PANEL'] = 'Staff Panel';
$LANG['TEXT_GENERAL_INQUIRY'] = 'General Inquiry';
$LANG['LABEL_QUERY'] = 'Query';
$LANG['LABEL_SEARCH'] = 'Search';
$LANG['LABEL_ADVANCED'] = 'Advances';
$LANG['LABEL_STATUS_IS'] = 'Status is';
$LANG['LABEL_DEPT'] = 'Dept.';
$LANG['LABEL_DATE_SPAN'] = 'Date Span';
$LANG['LABEL_FROM'] = 'From.';
$LANG['LABEL_TO'] = 'To.';
$LANG['LABEL_SORT_BY'] = 'Sort by';
$LANG['LABEL_ASCENDING'] = 'Ascending';
$LANG['LABEL_DESCENDING'] = 'Descending';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Results Per Page';

$LANG['TEXT_ACCESS_DENIED']='Access Denied';
$LANG['TEXT_CREATE_FAILED'] = 'Create Failed ';
$LANG['TEXT_WELCOME_BACK'] = 'Welcome back';
$LANG['TEXT_LOG_OUT'] = 'Log Out';
$LANG['TEXT_MY_ACCOUNT'] = 'My ACCOUNT';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>SUPPORT TICKET</span> SYSTEM';
$LANG['TEXT_MY_TICKETS'] = 'My Tickets';
$LANG['TEXT_TICKETS_STATUS'] = 'Tickets Status';
$LANG['TEXT_NEW_TICKET'] = 'New Ticket';
$LANG['TEXT_HOME'] = 'Home';
$LANG['TEXT_SUPPORT_CENTER'] = 'Support Center';
$LANG['TEXT_WELCOME_TITLE'] = 'Welcome to the support center.';
$LANG['TEXT_WELCOME_MSG'] = 'In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference we provide complete archives and history of all your support requests.';
$LANG['TEXT_BOX_NEW_TICKET'] = 'Submit a new support request. Please provide as much detail as possible so we can best assist you. To update a previously submitted ticket, please use the form to the right. A valid email address is required.';
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Open new Ticket';
$LANG['TEXT_OPEN_PREVIUS_TICKET'] = 'Check status of previously opened ticket. we provide archives and history of all your support requests complete with responses.';
$LANG['TEXT_TICKET_CREATED'] = 'Support ticket request created';
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'Unable to create a ticket. Please correct errors below and try again!';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Please fill in the form below to open a new ticket.';
$LANG['TEXT_NOT_THIS_USER'] = 'I am not this user';
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Thank you for contacting us.<br>A support ticket request has been created and a representative will be getting back to you shortly if necessary.';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'An email with the ticket number has been sent to <b>{0}</b>.You\'ll need the ticket number along with your email to view status and progress online.<br><br>If you wish to send additional comments or information regarding same issue, please follow the instructions on the email.';
$LANG['TEXT_SUPPORT_TEAM'] = 'Support Tean';
$LANG['TEXT_MESSAGE_POSTED_SUCCESSFULLY'] = 'Message Posted Successfully';
$LANG['TEXT_TICKET_NUMBER'] = 'Ticket #';
$LANG['TEXT_TICKET_THREAD'] = 'Ticket Thread';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Ticket will be reopened on message post';
$LANG['TEXT_ENTER_MESSAGE']='Enter Message';
$LANG['TEXT_ATTACH_FILE']='Attach File';
$LANG['TEXT_POST_REPLY']='Post Reply';
$LANG['TEXT_VIEW_OPEN']='View Open';
$LANG['TEXT_VIEW_CLOSED']='View Closed';
$LANG['TEXT_REFRESH']='Refresh';
$LANG['TEXT_SORT_BY_TICKET_ID']='Sort By Ticket ID';
$LANG['TEXT_SORT_BY_DATE']='Sort By Date';
$LANG['TEXT_SORT_BY_DEPARTMENT']='Sort By Department';
$LANG['TEXT_NO_TICKETS_FOUND']='NO tickets found.';
$LANG['TEXT_AUTHENTICATION_REQUIRED']='Authentication Required';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION']='Authentication Required?';
$LANG['TEXT_INVALID_LOGIN']='Invalid login';
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='Forgot your login info? Please <a href="open.php">open a new ticket</a>.';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS']='Excessive login attempts';
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='You\'ve reached maximum failed login attempts allowed.';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excessive login attempts (client)';
$LANG['TEXT_HEADER_TITLE']='osTicket :: Support Ticket System';
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='To view the status of a ticket, provide us with your login details below.<br/>'.
        'If this is your first time contacting us or you\'ve lost the ticket ID, please <a href="open.php">click here</a> to open a new ticket.';	
$LANG['TEXT_OFFLINE']='Thank you for your interest in contacting us.<br>'.
         'Our helpdesk is offline at the moment, please check back at a later time.';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Session timed out due to inactivity';
$LANG['TEXT_FILE_REJECTED'] = 'File [ {0} ] rejected';
$LANG['TEXT_INVALID_FILE_TYPE'] = 'Invalid file type [ {0} ]';
$LANG['TEXT_FILE_IS_TOO_BIG'] = 'File is too big. Max {0} bytes allowed';
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Welcome back! You are listed as \'on vacation\' Please let admin or your manager know that you are back.';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Welcome back, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Welcome back, <strong>{0}</strong>';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Showing {0} - {1} of {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Showing 0 (zero)';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Overdue Tickets';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Answered Tickets';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Assigned Tickets';
$LANG['TEXT_SEARCH_RESULTS'] = 'Search Results';
$LANG['TEXT_OPEN_TICKETS'] = 'Open Tickets';
$LANG['TEXT_CLOSED_TICKETS'] = 'Closed Tickets';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Overdue Tickets';
$LANG['TEXT_ANY_STATUS'] = 'Any status';
$LANG['TEXT_OPEN'] = 'Open';
$LANG['TEXT_CLOSED'] = 'Closed';
$LANG['TEXT_OVERDUE'] = 'Overdue';

$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excessive login attempts by a client'."\n".
                'Email: {0}'."\n".
				'Ticket#: {1}'."\n".
                'IP: {2}'."\n".
				'Time: {3}'."\n\n".
                'Attempts #{4}';
?>
