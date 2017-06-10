<?php
// This file is part of Oauth2 authentication plugin for Moodle.
//
// Oauth2 authentication plugin for Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Oauth2 authentication plugin for Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Oauth2 authentication plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_google', language 'en'
 *
 * @package   auth_google
 * @author Jerome Mouneyrac
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Oauth2';
$string['auth_medusasettings'] = 'Settings';

$string['auth_medusaclientid'] = 'Contact the Project MEDUSA team via bolthole@trmn.org to request a client ID and secret';
$string['auth_medusaclientid_key'] = 'Medusa Client ID';
$string['auth_medusaclientsecret'] = '';
$string['auth_medusaclientsecret_key'] = 'Medusa Client secret';
$string['auth_medusaipinfodbkey'] = 'IPinfoDB is a service that let you find out what is the country and city of the visitor.
This setting is optional. You can subscribe to <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> to get a free key.<br/>
Website: {$a->website}';
$string['auth_medusaipinfodbkey_key'] = 'IPinfoDB Key';
$string['auth_medusauserprefix'] = 'The created user\'s username will start with this prefix. On a basic Moodle site you don\'t need to change it.';
$string['auth_medusauserprefix_key'] = 'Username prefix';

$string['auth_medusaoauth2description'] = 'Allow a user to connect to the site using MEDUSA.
The first time the user connect with an authentication provider, a new account is created.
Prevent account creation (authpreventaccountcreation admin setting) when authenticating <b>must</b> be unset.';
$string['couldnotauthenticate'] = 'The authentication failed - Please try to sign-in again.';
$string['couldnotgetgoogleaccesstoken'] = 'The authentication provider sent us a communication error. Please try to sign-in again.';
$string['couldnotauthenticateuserlogin'] = 'Authentication method error.<br/>
Please try to login again with your username and password.<br/>
<br/>
<a href="{$a->loginpage}">Try again</a>.<br/>
<a href="{$a->forgotpass}">Forgot your password</a>?';
$string['oauth2displaybuttons'] = 'Display MEDUSA button on login page';
$string['oauth2displaybuttonshelp'] = 'Display the MEDUSA logo button on the top of the login page.
If you want to position the buttons yourself in your login page, you can keep this option disabled and add the following code: {$a}';
$string['emailaddressmustbeverified'] = 'Your email address is not verified by the authentication method you selected. You likely have forgotten to click on a "verify email address"
link that Google or Facebook should have sent you during your subscribtion to their service.';
$string['auth_sign-in_with'] = 'Sign-in with {$a->providername}';
$string['faileduserdetails'] = 'The site succeed to connect to MEDUSA but failed to retrieve your user details.';
$string['moreproviderlink'] = 'Sign-in with another service.';
$string['signinwithanaccount'] = 'Log in with {$a}';
$string['noaccountyet'] = 'You do not have permission to use the site yet. Please contact your administrator and ask them to activate your account.';
$string['othermoodle'] = 'Other Moodle auth';
$string['stattitle'] = 'Login statistics for the last {$a->periodindays} days (starting from the plugin installation/upgrade time)';
$string['supportmaintenance'] = '';
$string['unknownfirstname'] = 'Unknown Firstname';
$string['unknownlastname'] = 'Unknown Lastname';

