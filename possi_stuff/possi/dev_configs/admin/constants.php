<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    $_SERVER['protocol'] = isset($_SERVER["HTTPS"]) ? 'https' : 'http';


/*

  |--------------------------------------------------------------------------

  | File and Directory Modes

  |--------------------------------------------------------------------------

  |

  | These prefs are used when checking and setting modes when working

  | with the file system.  The defaults are fine on servers with proper

  | security, but you may wish (or even need) to change the values in

  | certain environments (Apache running a separate process for each

  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should

  | always be used to set the mode correctly.

  |

 */

define('FILE_READ_MODE', 0644);

define('FILE_WRITE_MODE', 0666);

define('DIR_READ_MODE', 0755);

define('DIR_WRITE_MODE', 0777);



/*

  |--------------------------------------------------------------------------

  | File Stream Modes

  |--------------------------------------------------------------------------

  |

  | These modes are used when working with fopen()/popen()

  |

 */



define('FOPEN_READ', 'rb');

define('FOPEN_READ_WRITE', 'r+b');

define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care

define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care

define('FOPEN_WRITE_CREATE', 'ab');

define('FOPEN_READ_WRITE_CREATE', 'a+b');

define('FOPEN_WRITE_CREATE_STRICT', 'xb');

define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');





/* End of file constants.php */

/* Location: ./application/config/constants.php */





/* Site Path and Urls */

define('_PATH', substr(dirname(__FILE__), 0, -25));



define('_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(_PATH))));



define('SITE_PATH', _PATH . "/");

define('SITE_URL', _URL . "/");



define('WEBSITE_URL', SITE_URL . '/');



define('DOMAIN_URL', $_SERVER['protocol'].'://' . $_SERVER['SERVER_NAME'] . '');
//define('DOMAIN_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/possi');

define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] . '');
//define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/possi');



define('BASEURL', DOMAIN_URL . '/admin/');

define('gmapkey', '');

define('MAINTITLE', 'Possi');

/* Site Path and Urls */



/* Admin Site Path and Urls */

define('ADMIN_URL', SITE_URL . '/');


define('ADMIN_PATH', SITE_PATH . "/");

define('ADMIN_IMAGE_URL', DOMAIN_URL . '/admin/images/');
define('PROFILE_IMAGE_URL_MEDIUM', DOMAIN_URL . '/images/profilepictures/medium/');
define('PROFILE_IMAGE_URL_ORIGINAL', DOMAIN_URL . '/images/profilepictures/original/');
define('PROFILE_IMAGE_URL_THUMB', DOMAIN_URL . '/images/profilepictures/thumb/');



define('VENUE_GALLERY_ROOT', DOC_ROOT . '/images/venue_gallery/');
define('VENUE_GALLERY_URL', DOMAIN_URL . '/images/venue_gallery/');

define('VENUE_ROOT', DOC_ROOT . '/images/venue/');


define('ADSPACE_ROOT', DOC_ROOT . '/adspace/');
define('ADSPACE_URL', DOMAIN_URL . '/adspace/');

define('SLIDER_ROOT', DOC_ROOT . '/images/slider/');
define('SLIDER_URL', DOMAIN_URL . '/images/slider/');

define('UPLOADS_CSV_URL', DOC_ROOT . '/csv/');
define('UPLOADS_CSV_ROOT', DOC_ROOT . '/csv/');

define('TEMPLATES_URL', DOMAIN_URL . '/images/templates/');

define('GALLERY_IMAGE_ADDED', 'Gallery images added successfully.');
define('GALLERY_IMAGE_NOT_ADDED', 'Problem adding gallery imaages.');




/* Admin Site Path and Urls */



/* URL AND PATH FOR IMAGES  */

define('IMAGE_PATH', BASEURL . "images/");

define('IMAGE_URL', BASEURL . "images/");
define('IMAGE_ROOT', DOC_ROOT . "/images/");

define('CSS_IMAGE_PATH', ADMIN_PATH . "css/");

define('CSS_IMAGE_URL', BASEURL . "css/");

/* URL AND PATH FOR IMAGES  */



/* URL FOR CSS AND JS */

define('CSS_URL', BASEURL);

define('PLUGIN_URL', BASEURL . "plugins/");



define('JS_URL', BASEURL);

define('DESIGN_PLUGIN_URL', BASEURL . "plugins/");



/* URLS FOR FILE UPLOADED */

define('UPLOADS', DOC_ROOT . "uploads/");
define('IMAGES_ROOT', DOC_ROOT . "/images/");
define('IMAGES_URL', DOMAIN_URL . "/images/");
define('LOADER_IMAGES_URL', BASEURL . "/img/loaders/");
define('HILIGHT_IMAGES_URL', BASEURL . "img/highlight/");

define('UPLOADS_URL', DOMAIN_URL . "/uploads/");

define('SERVICE_IMAGE_PATH', UPLOADS_URL . "Service_pic/thumb");

define('TECHNICIAN_IMAGE_PATH', UPLOADS_URL . "Technician_pic/");

define('SHOP_IMAGE_PATH', UPLOADS_URL . "Shop_pic/");
define('COVER_PIC', 'https://s3-us-west-2.amazonaws.com/pictures-event/');

/*

  |--------------------------------------------------------------------------

  | CONSTANT MEASSAGES

  |--------------------------------------------------------------------------

  |

 */



/* * **************************************************

 * *                ERROR MEASSAGE

 * ************************************************** */

define('LOGIN_ERROR', '<strong>Username</strong> and/or <strong>Password</strong> are wrong');

define('ACTIVATED_ERROR', 'Your account is already activated.');

define('ADMIN_ERROR', 'No user exists with this email.');

define('ACTIVE_ERROR', 'You have not activated your account yet. Please go to your inbox and activate your account first.');

define('ACCESS_ERROR', 'Access not authorized for this account.');

define('SETTING_NOT_FOUND', 'Settings not found.');

define('SETTINGS_NOT_CHANGED', 'Problem changing Settings, Please try again.');

define('OLD_PASSWORD_NOT_OK', 'Old Password you have entered is not correct.');

define('PASSWORD_SENT', 'An email has been sent to your email address <br /> which is the registered address for your account. Please reset your password.');

define('PASSWORD_NOT_CHANGED', 'Problem changing password, Please try again.');

define('ACTIVE_ACCOUNT', 'Your co-brick account activated successfully.');



define('PASSWORD_CONFIRM_NOT_MATCH', 'New Password and Re-type New Password do not match.');

/* * **************************************************

 * *                SUCCESS MEASSAGE

 * ************************************************** */

define('SETTINGS_CHANGED', 'Settings Changed successfully.');

define('PASSWORD_CHANGED', 'Your Password changed successfully.');



/* * **************************************************

 * *                INFO MEASSAGE

 * ************************************************** */

define('EMAIL_INFO', 'Email Sent Successfully. Please check your indbox.');




define('PROFILE_PIC_ROOT',DOC_ROOT.'profile_pic/');
define('PROFILE_PIC_URL',DOMAIN_URL.'/profile_pic/');

/* Admin Settings */
define('ADMIN_ADDED', 'Admin Added successfully.');

define('ADMIN_EDITED', 'Admin Edited successfully.');

define('ADMIN_DELETED', 'Admin Removed successfully.');

define('ADMIN_NOT_ADDED', 'Problem adding Admin, Please try again.');

define('ADMIN_NOT_EDITED', 'Problem editing Admin, Please try again.');

define('ADMIN_NOT_DELETED', 'Problem removing Admin, Please try again.');

define('ADMIN_EXISTS', 'Admin already exists with this email/username.');
/* Admin Settings */





/* User Settings */
define('USER_ADDED', 'Applicant details are successfully added');
define('USER_NOT_ADDED', 'Failed to add applicant details, Please try again!');
define('USER_EXISTS', 'Email ID already exist!');
define('USER_USERNAME_EXISTS', 'Applicantname already exist!');
define('USER_EDITED', 'Applicant details are successfully updated');
define('USER_NOT_EDITED', 'Failed to update applicant details, Please try again!');
define('USER_DELETED', 'Applicant removed successfully');
define('USER_NOT_DELETED', 'Failed to remove applicant, Please try again!');
define('USER_IMPORT', 'Applicants successfully added');
define('USER_NOT_IMPORT', 'Failed to imports applicant details, Please try again!');
define('USER_EXCEL_ERROR', 'Please Select Valid Excel file!');
define('USER_IMAGE_PATH', DOMAIN_URL . "images/applicant/");
define('TEMP_FILE_PATH', ADMIN_PATH . "images/tempfiles/");


/* User Settings */

define('EVENT_ADDED', 'Event Added successfully.');

define('EVENT_EDITED', 'Event Edited successfully.');


define('EVENT_NOT_ADDED', 'Problem adding Event, Please try again.');

define('EVENT_NOT_EDITED', 'Problem editing Event, Please try again.');
define('EVENT_DELETED', 'Event removed successfully');
define('EVENT_NOT_DELETED', 'Failed to remove Event, Please try again!');


define('ADSPACE_ADDED', 'Adspace Added successfully.');
define('ADSPACE_EDITED', 'Adspace Edited successfully.');
define('ADSPACE_DELETED', 'Adspace Removed successfully.');
define('ADSPACE_NOT_ADDED', 'Problem adding Adspace, Please try again.');
define('ADSPACE_NOT_EDITED', 'Problem editing Adspace, Please try again.');
define('ADSPACE_NOT_DELETED', 'Problem removing Adspace, Please try again.');
define('ADSPACE_EXISTS', 'Adspace already exists.');
define('ADSPACE_NAME_EXISTS', 'Adspace already exists with this Adspace name.');

define('COUPON_ADDED', 'Coupon Added successfully.');
define('COUPON_EDITED', 'Coupon Edited successfully.');
define('COUPON_DELETED', 'Coupon Removed successfully.');
define('COUPON_NOT_ADDED', 'Problem adding Coupon, Please try again.');
define('COUPON_NOT_EDITED', 'Problem editing Coupon, Please try again.');
define('COUPON_NOT_DELETED', 'Problem removing Coupon, Please try again.');
define('COUPON_EXISTS', 'Coupon already exists.');
define('COUPON_NAME_EXISTS', 'Coupon already exists with this Coupon name.');


define('VENUE_ADDED', 'Venue Added successfully.');
define('VENUE_EDITED', 'Venue Edited successfully.');
define('VENUE_DELETED', 'Venue Removed successfully.');
define('VENUE_NOT_ADDED', 'Problem adding Venue, Please try again.');
define('VENUE_NOT_EDITED', 'Problem editing Venue, Please try again.');
define('VENUE_NOT_DELETED', 'Problem removing Venue, Please try again.');
define('VENUE_EXISTS', 'Venue already exists.');
define('VENUE_NAME_EXISTS', 'Venue already exists with this Venue name.');

define('TEMPLATE_ADDED', 'Template Added successfully.');
define('TEMPLATE_EDITED', 'Template Edited successfully.');
define('TEMPLATE_DELETED', 'Template Removed successfully.');
define('TEMPLATE_NOT_ADDED', 'Problem adding Template, Please try again.');
define('TEMPLATE_NOT_EDITED', 'Problem editing Template, Please try again.');
define('TEMPLATE_NOT_DELETED', 'Problem removing Template, Please try again.');
define('TEMPLATE_EXISTS', 'Template already exists.');
define('TEMPLATE_NAME_EXISTS', 'Template already exists with this Template name.');


define('JOB_ADDED', 'Job title Added successfully.');
define('JOB_EDITED', 'Job title Edited successfully.');
define('JOB_DELETED', 'Job title Removed successfully.');
define('JOB_NOT_ADDED', 'Problem adding Job title, Please try again.');
define('JOB_NOT_EDITED', 'Problem editing Job title, Please try again.');
define('JOB_NOT_DELETED', 'Problem removing Job title, Please try again.');
define('JOB_EXISTS', 'Job title already exists.');
define('JOB_NAME_EXISTS', 'Job title already exists with this Job title name.');

define('SECTOR_ADDED', 'Sector Added successfully.');
define('SECTOR_EDITED', 'Sector Edited successfully.');
define('SECTOR_DELETED', 'Sector Removed successfully.');
define('SECTOR_NOT_ADDED', 'Problem adding Sector, Please try again.');
define('SECTOR_NOT_EDITED', 'Problem editing Sector, Please try again.');
define('SECTOR_NOT_DELETED', 'Problem removing Sector, Please try again.');
define('SECTOR_EXISTS', 'Sector already exists.');
define('SECTOR_NAME_EXISTS', 'Sector already exists with this Sector name.');

define('SLIDER_ADDED', 'Slider Added successfully.');
define('SLIDER_EDITED', 'Slider Edited successfully.');
define('SLIDER_DELETED', 'Slider Removed successfully.');
define('SLIDER_NOT_ADDED', 'Problem adding Slider, Please try again.');
define('SLIDER_NOT_EDITED', 'Problem editing Slider, Please try again.');
define('SLIDER_NOT_DELETED', 'Problem removing Slider, Please try again.');
define('SLIDER_EXISTS', 'Slider already exists.');
define('SLIDER_NAME_EXISTS', 'Slider already exists with this Slider name.');

define('EMPLOYER_ADDED', 'Employer Added successfully.');
define('EMPLOYER_EDITED', 'Employer Edited successfully.');
define('EMPLOYER_DELETED', 'Employer Removed successfully.');
define('EMPLOYER_NOT_ADDED', 'Problem adding Employer, Please try again.');
define('EMPLOYER_NOT_EDITED', 'Problem editing Employer, Please try again.');
define('EMPLOYER_NOT_DELETED', 'Problem removing Employer, Please try again.');
define('EMPLOYER_EXISTS', 'Employer already exists.');
define('EMPLOYER_NAME_EXISTS', 'Employer already exists with this Employer name.');


define('ADVERTISE_ADDED', 'Advertise Added successfully.');
define('ADVERTISE_EDITED', 'Advertise Edited successfully.');
define('ADVERTISE_DELETED', 'Advertise Removed successfully.');
define('ADVERTISE_NOT_ADDED', 'Problem adding Advertise, Please try again.');
define('ADVERTISE_NOT_EDITED', 'Problem editing Advertise, Please try again.');
define('ADVERTISE_NOT_DELETED', 'Problem removing Advertise, Please try again.');
define('ADVERTISE_EXISTS', 'Advertise already exists.');
define('ADVERTISE_NAME_EXISTS', 'Advertise already exists with this Advertise name.');

/* Sub Category Settings */
define('PAGECONTENT_ADDED', 'Sub Category successfully added');
define('PAGECONTENT_NOT_ADDED', 'Failed to add sub category , Please try again!');
define('PAGECONTENT_EXISTS', 'Sub category already exist!');
define('PAGECONTENT_NAME_EXISTS', 'Sub category name already exist!');
define('PAGECONTENT_EDITED', 'Page details are successfully updated');
define('PAGECONTENT_NOT_EDITED', 'Failed to update sub page details, Please try again!');
define('PAGECONTENT_DELETED', 'Sub Category removed successfully');
define('PAGECONTENT_NOT_DELETED', 'Failed to remove sub category, Please try again!');
define('PAGECONTENT_IMAGE_PATH', DOMAIN_URL . "images/user/");
/* Sub Category Settings */


define('COMMENT_EDITED', "Comment are successfully updated");
define('COMMENT_NOT_EDITED', "Problem adding Comment, Please try again.");
define('COMMENT_DELETED', "Comment removed successfully");
define('COMMENT_NOT_DELETED', "Problem Removing Comment, Please try again.");


define('REPORT_EDITED', "Report are successfully updated");
define('REPORT_NOT_EDITED', "Problem editing Report, Please try again.");
define('REPORT_DELETED', "Report removed successfully");
define('REPORT_NOT_DELETED', "Problem Removing Report, Please try again.");



/* End of file constants.php */

/* Location: ./system/application/config/constants.php */