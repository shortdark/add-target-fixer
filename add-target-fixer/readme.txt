
=== Add Target Fixer ===
Contributors: shortdark
Donate link: http://www.shortdark.net/
Tags: posts, security
Requires at least: 3.5
Tested up to: 5.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fixes the target="_blank" vulnerability by adding rel="noopener noreferrer" to the 'a' tag.

== Description ==

This plugin looks at the phishing issue with target="_blank" vulnerability when the opened page can control the referring page. 
The plugin fixes it by adding a rel="noopener noreferrer" in the "A" tags where a target="_blank" is found. It does not
change the content, it only modifies the "A" tags while the plugin is active. Tested on PHP 5 to PHP 8.

Please let me know if you like this plugin by leaving a review or [contacting me](http://www.shortdark.net/contact-me/).

Go to the [Shortdark Wordpress plugin page](http://www.shortdark.net/wordpress-plugin/) for more information.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the plugin through the WordPress 
plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Your <a> tags are now fixed!

== Changelog ==

= 0.0.04 =

* Checked WordPress version and also works on PHP 8.

= 0.0.03 =

* Changed tagline.

= 0.0.02 =

* Only works inside "a" tags.

= 0.0.01 =

* New plugin.




