<?php
/* 
Plugin Name: Burnman's Subjot Button
Plugin URI: http://theburnman.com/
Description: This plugin adds a Subjot button to posts.
Author: Burnman
Version: 0.1 
Author URI: http://theburnman.com/
License: GPL2
*/

/*  Copyright 2011  Burnman  (email : contact@theburnman.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function subjot_button_display($content)
{
	// this is where we will display the subjot_button

	$options["page"] = get_option("button_on_page");
	$options["post"] = get_option("button_on_post");

	if ( (is_single() && $options["post"]) || (is_page() && $options["page"]) )
	{
		$button_box =
		"<div id=\"subjot-button-box\" style=\"float:left; margin-right: 10px;\">
			<a href=\"javascript:void((function(){var%20e=document.createElement('script');e.setAttribute('id','subjot_script');e.setAttribute('type','text/javascript');e.setAttribute('src','http://subjot.com/javascripts/bookmarklet.js?'+Math.floor(Math.random()*10001));document.body.appendChild(e)})())\"><div id=\"header_writejot\" title=\"Jot this down at Subjot!\"><img src=\"/wp-content/plugins/burnmans-subjot-button/images/jot-this-down-button.png\"></div></a>
		</div>";
		return $content . $button_box;
		
	} else {
		$button_box =
		"<div id=\"subjot-button-box\" style=\"float:left; margin-right: 10px;\">
			<a href=\"javascript:void((function(){var%20e=document.createElement('script');e.setAttribute('id','subjot_script');e.setAttribute('type','text/javascript');e.setAttribute('src','http://subjot.com/javascripts/bookmarklet.js?'+Math.floor(Math.random()*10001));document.body.appendChild(e)})())\"><div id=\"header_writejot\" title=\"Jot this down at Subjot!\"><img src=\"/wp-content/plugins/burnmans-subjot-button/images/jot-this-down-button.png\"></div></a>
		</div>";
		return $content . $button_box;
	}
}

add_action("the_content", "subjot_button_display");

?>