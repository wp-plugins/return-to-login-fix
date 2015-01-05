=== Return to login fix ===
Contributors: dicm.dk
Tags: performance,login,memory
Tested up to: 4.1
Stable tag: trunk
Requires at least: 3.0

Fixing login errors (Cannot allocate memory Error) caused by creating child processes in Wordpress after version 3.2. 

== Description ==
This plugin is for all who got problems logging in from time to time, and in log files can see this error (Cannot allocate memory Error). THe error comes from Wordpress creating a child process in the login and because of changes in WP 3.2 some sites got problems with this, the result is that you cannot login without trying again and again. 
This plugin checks if the return_to POST is set when loggin in, if it is set, the plugin will overwrite the normal procedure for redirecting and redirect before Wordpress uses the normal redirect.
This way as admin or user, does not get problems when logging in because of return_to and memory errors.
It is not a permanent fix, but works 9 out of 10 times. 

== Changelog ==

= 1.0.0 =
* First version of the plugin.


== How to uninstall Return to logig fix ==

Use wordpress backend -> plugins -> deactivate -> delete

To manually uninstall:

1. Deactivate the plugin in "plugins".
2. Open up a FTP connection and go to this directory: /wp-content/plugins/
3. Find and delete: return-to-login-fix dorectpry


== Frequently Asked Questions ==