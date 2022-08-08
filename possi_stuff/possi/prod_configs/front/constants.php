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

define('BASEURL', DOMAIN_URL . '/');

define('gmapkey', '');

define('MAINTITLE', 'Possi');

define('COMPANY_EMAIL', 'admin@possi.com');
define('ADMIN_EMAIL', 'admin@possi.com');

/* Site Path and Urls */

/* Admin Site Path and Urls */

define('ADMIN_URL', SITE_URL . '/');

define('ADMIN_PATH', SITE_PATH . "/");

define('PROFILE_IMAGE_URL_MEDIUM', DOMAIN_URL . '/images/profilepictures/medium/');
define('PROFILE_IMAGE_URL_ORIGINAL', DOMAIN_URL . '/images/profilepictures/original/');
define('PROFILE_IMAGE_URL_THUMB', DOMAIN_URL . '/images/profilepictures/thumb/');

/* Admin Site Path and Urls */

/* URL AND PATH FOR IMAGES  */

define('CUTYCAPT_PATH', "/var/www/possi.com.au/public_html/cutycapt/CutyCapt");
define('CUTYCAPT_IMAGE', "/var/www/possi.com.au/public_html/images/screenshot/");

define('IMAGE_PATH', BASEURL . "images/");



define('IMAGE_URL', DOMAIN_URL . "/images/");
define('IMAGE_ROOT', DOC_ROOT . "/images/");

define('COVER_ROOT',DOC_ROOT.'/uploads/cover/');
define('RESUME_ROOT',DOC_ROOT.'/uploads/resume/');

define('IMAGE_DIR', DOC_ROOT . "/images/");

define('UPLOAD_DIR',DOC_ROOT."/images/venue_gallery/");

define('CSS_IMAGE_PATH', ADMIN_PATH . "css/");
define('CSS_PAGES', DOMAIN_URL . "/css/pages/");

define('CSS_IMAGE_URL', BASEURL . "css/");

/* URL AND PATH FOR IMAGES  */

define('ADSPACE_ROOT', DOC_ROOT . '/adspace/');
define('ADSPACE_URL', DOMAIN_URL . '/adspace/');

/* URL FOR CSS AND JS */

define('CSS_URL', DOMAIN_URL.'/css/');

define('ADMIN_CSS', DOMAIN_URL.'/admin/css/');

define('PLUGIN_URL', BASEURL . "plugins/");

define('JS_URL', DOMAIN_URL.'/js/');

define('DESIGN_PLUGIN_URL', BASEURL . "plugins/");
define('TEMPLATES_URL', DOMAIN_URL . '/images/templates/');

/* URLS FOR FILE UPLOADED */

define('UPLOADS', DOC_ROOT . "uploads/");
define('IMAGES_ROOT', DOC_ROOT . "/images/");
define('IMAGES_URL', DOMAIN_URL . "/images/");

define('UPLOADS_URL', DOMAIN_URL . "/uploads/");

define('SERVICE_IMAGE_PATH', UPLOADS_URL . "Service_pic/thumb");

define('TECHNICIAN_IMAGE_PATH', UPLOADS_URL . "Technician_pic/");

define('SHOP_IMAGE_PATH', UPLOADS_URL . "Shop_pic/");
define('COVER_PIC', 'https://s3-us-west-2.amazonaws.com/pictures-event/');

define('SLIDER_ROOT', DOC_ROOT . '/images/slider/');
define('SLIDER_URL', DOMAIN_URL . '/images/slider/');
// -------------- New app ----------------------

//define('FB_APP_ID',"772088442834631");  // facebook APP-ID
//define('FB_SECRET_ID',"e428a393a6f88cae86bfb883cf3a1466");  // facebook SECRET-ID
define('FB_APP_ID',"1637588126497054");
define('FB_SECRET_ID',"a92fe4ae84c8d9752d88918f8ceff531");

/*
  |--------------------------------------------------------------------------

  | CONSTANT MEASSAGES

  |--------------------------------------------------------------------------
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

define('SOMETHING_WENT_WRONG', 'Something went wrong');


define('MAIL_SENT', 'Welcome mail is sent to your email address');
define('MAIL_NOT_SENT', 'Opps!, Welcome mail could not be sent to your email address');

define('ACCOUNT_DELETED', 'Your account is deleted successfully');

define('ACCOUNT_ALREADY_DELETED', 'Your account is already deleted');


define('ADVERTISE_PUBLISHED', 'Your advertise published successfully');
define('ADVERTISE_NOT_PUBLISHED', 'Transaction failed');
define('ADVERTISE_BUMPED', 'Your advertise bumped successfully');


/* * **************************************************

 * *                INFO MEASSAGE

 * ************************************************** */

define('EMAIL_INFO', 'Email Sent Successfully. Please check your indbox.');
define('PROFILE_PIC_ROOT',DOC_ROOT.'profile_pic/');
define('PROFILE_PIC_URL',DOMAIN_URL.'/profile_pic/');

/* * **************************************************

 * *                ADVERTISE MEASSAGE

 * ************************************************** */

define('ADVERTISE_ADDED', 'Advertise added');
define('ADVERTISE_NOT_ADDED', 'Something went wrong while adding advertise');
define('ADVERTISE_EDITED', 'Advertise edited');
define('ADVERTISE_NOT_EDITED', 'Something went wrong while editing advertise');
define('ADVERTISE_DELETED', 'Advertise deleted');
define('ADVERTISE_NOT_DELETED', 'Something went wrong while deleting advertise');
define('ADVERTISE_UNPUBLISH', 'Advertise unpublished');
define('ADVERTISE_NOT_UNPUBLISH', 'Something went wrong while unpublishing advertise');


/* * **************************************************

 * *                EMPLOYER MEASSAGE

 * ************************************************** */

define('EMPLOYER_EDITED', 'Account detail updated successfully');
define('EMPLOYER_NOT_EDITED', 'Something went wrong, please refresh');
define('EMAIL_EXISTS', 'Email already exist');


/* End of file constants.php */

/* Location: ./system/application/front/config/constants.php */
