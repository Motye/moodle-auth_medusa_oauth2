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

require( '../../config.php' );
require_once( $CFG->dirroot . '/auth/medusaoauth2/lib.php' );
medusaoauth2_provider_redirect('medusa');

/*

Can not execute event observer 'auth_medusaoauth2_observer::userloggedin'
line 164 of /lib/classes/event/manager.php: call to debugging()
line 75 of /lib/classes/event/manager.php: call to core\event\manager::process_buffers()
line 804 of /lib/classes/event/base.php: call to core\event\manager::dispatch()
line 4321 of /lib/moodlelib.php: call to core\event\base->trigger()
line 195 of /login/index.php: call to complete_user_login()
line 75 of /lib/classes/event/manager.php: call to core\event\manager::process_buffers()
line 804 of /lib/classes/event/base.php: call to core\event\manager::dispatch()
line 4321 of /lib/moodlelib.php: call to core\event\base->trigger()
line 195 of /login/index.php: call to complete_user_login()
Skip to main content
This page should automatically redirect. If nothing is happening please use the continue link below.

 */