<?php
/**
 * Plugin Name: YTR0
 * Description: Hides YouTube Related Videos!  It is basically like adding the "?rel=0" to the end of youtube embedded links.  This very lightweight wordpress plugin turns off the annoying videos that pop up when a user pauses or finishes a embedded YouTube video.  You just activate YTR0 and all of your embedded YouTube videos will look awesome.
 * Version: 1.4
 * Author: JerC
 * Contributors: jerc
 * Plugin URI: https://wordpress.org/plugins/ytr0/
 * Tags: YouTube, video
 * Author URI: https://profiles.wordpress.org/jerc/
 * Tested up to: 5.2.2

YTR0 is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
YTR0 is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
if ( !function_exists( 'YT_rel_0' ) ) {
    function YT_rel_0($the_Post) {
    	$YT_rel_0_rendered = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/embed\/([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://youtube.com/embed/$1?rel=0",$the_Post);
    	return $YT_rel_0_rendered;
    }
    add_filter("the_content", "YT_rel_0");
}
?>