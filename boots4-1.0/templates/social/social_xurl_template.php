<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	/**
	 * {XURL_ICONS} template
	 */

/*
<ul class="list-inline">
			  <li class="list-inline-item mx-2">
				<a class="text-700" href="#"><span class="fab fa-facebook-f"></span></a>
			  </li>
			  <li class="list-inline-item mx-2">
				<a class="text-700" href="#"> <span class="fab fa-twitter"></span></a>
			  </li>
			  <li class="list-inline-item mx-2">
				<a class="text-700" href="#"> <span class="fab fa-linkedin-in"></span></a>
			  </li>
			  <li class="list-inline-item mx-2">
				<a class="text-700" href="#"> <span class="fab fa-youtube"></span></a>
			  </li>
			  <li class="list-inline-item mx-2">
				<a class="text-700" href="#"><span class="fab fa-google-plus-g"></span></a>
			  </li>
			</ul>
*/
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';


	 $SOCIAL_XURL_TEMPLATE['contact']['start'] = '<ul class="list-inline">';
	 $SOCIAL_XURL_TEMPLATE['contact']['item'] = '<li class="list-inline-item mx-2">
        <a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="text-700 e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
        aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>
        </li>';
	 $SOCIAL_XURL_TEMPLATE['contact']['end'] = '</ul>';