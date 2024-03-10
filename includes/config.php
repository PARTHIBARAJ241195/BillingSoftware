<?php
// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'invoicemgsys');
define('DATABASE_USER', 'admin');
define('DATABASE_PASS', 'Password@123');

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','SKPU Structurals & Interiors');
define('COMPANY_ADDRESS_1','203/A Second Floor');
define('COMPANY_ADDRESS_2','5th Main Byrasandra');
define('COMPANY_ADDRESS_3','Jayanagar-1st Block');
define('COMPANY_CITY','Banglore,Karnataka - 560011');
define('TERMSANDCONDS','Terms & conditions details');

define('COMPANY_COUNTY','India');
define('COMPANY_POSTCODE','560011');

define('COMPANY_NUMBER','Company No: 9655199985'); // Company registration number
define('COMPANY_VAT', ''); // Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'sales@inms.ccc'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'Invoice Mg System'); // Email from address
define('EMAIL_SUBJECT', 'Invoice default email subject'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice default body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Quote default body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Receipt default body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'MD'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'America/Los_Angeles'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', 'INR'); // Currency symbol
define('ENABLE_VAT', false); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '10'); // This is the percentage value

define('PAYMENT_DETAILS', 'Account Holder: : KRISHNAVIRAJ SUBBURAJ<br>Bank: Federal Bank<br>Account Number: 99980107223542<br>IFSC: FDRL0001359<br>     (OR)<br>GOOGLE PAY : 9655199985'); // Payment information
define('FOOTER_NOTE', 'Automated Invoice generator');
 
// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>