<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_themes/khatru/forum_viewforum_template.php $
|     $Revision: 11678 $
|     $Id: forum_viewforum_template.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$icon = (file_exists(THEME."forum/e.png") ? THEME_ABS."forum/e.png" : e_PLUGIN_ABS."forum/images/lite/e.png");

$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "{FORUM_TITLE}";


 $FORUM_VIEWFORUM_TEMPLATE['header'] = 
BOXOPEN." {BREADCRUMB} ".BOXMAIN."

<table style='width:100%'>
{SUBFORUMS}
<tr>
<td style='width:80%'><div class='newheadline'><img src='".$icon."' style='vertical-align:middle' /> <b>{FORUMTITLE} Forum</b></div>{THREADPAGES}</td>
<td style='width:20%; text-align:right; vertical-align:bottom;'>
{NEWTHREADBUTTON}
</td>
</tr>
</table>

<table style='width:100%' class='nforumholder' cellpadding='0' cellspacing='0'>
<tr>
<td style='width:3%' class='nforumcaption2'>&nbsp;</td>
<td style='width:47%' class='nforumcaption2'>{THREADTITLE}</td>
<td style='width:20%; text-align:center' class='nforumcaption2'>{STARTERTITLE}</td>
<td style='width:5%; text-align:center' class='nforumcaption2'>{REPLYTITLE}</td>
<td style='width:5%; text-align:center' class='nforumcaption2'>{VIEWTITLE}</td>
<td style='width:20%; text-align:center' class='nforumcaption2'>{LASTPOSTITLE}</td>
</tr>


";



$FORUM_VIEWFORUM_TEMPLATE['item'] = "
<tr>
<td style='vertical-align:middle; text-align:center; width:3%' class='nforumview1'>{ICON}</td>
<td style='vertical-align:middle; text-align:left; width:47%'  class='nforumview1'>

<table style='width:100%'>
<tr>
<td style='width:90%'><span class='mediumtext'><b>{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
</tr>
</table>
</td>

<td style='vertical-align:top; text-align:center; width:20%' class='nforumview2'><span class='smalltext'><b>{POSTER}</b><br />{THREADDATE}</span></td>
<td style='vertical-align:middle; text-align:center; width:5%' class='nforumview2'><span class='smalltext'>{REPLIES}</span></td>
<td style='vertical-align:middle; text-align:center; width:5%' class='nforumview2'><span class='smalltext'>{VIEWS}</span></td>
<td style='vertical-align:top; text-align:center; width:20%' class='nforumview2'><span class='smalltext'>{LASTPOST}</span></td>
</tr>";

 $FORUM_VIEWFORUM_TEMPLATE['footer'] = "
</table>
<table style='width:100%'>
<tr>
<td style='width:80%'><span class='mediumtext'>{THREADPAGES}</span>
{FORUMJUMP}
</td>
<td style='width:20%; text-align:right'>
{NEWTHREADBUTTON}
</td>
</tr>
</table>
".
BOXCLOSE.BOXOPEN2."

<table style='width:100%' cellpadding=0 cellspacing=0>
<tr>
<td style='vertical-align:middle; width:50%'><span class='smalltext'>{MODERATORS}</span></td>
<td style='text-align:right; vertical-align:middle; width:50%'><span class='smalltext'>{BROWSERS}</span></td>
</tr>
<tr>
<td style='vertical-align:middle; width:50%'>{ICONKEY}</td>
<td style='vertical-align:middle; text-align:center; width:50%'>{PERMS}<br /><br />{SEARCH}
</td>
</tr>
</table>


<div style='text-align:center;'>
<a href='".e_PLUGIN_ABS."rss_menu/rss.php?11.1.".e_QUERY."'><img src='".e_PLUGIN_ABS."rss_menu/images/rss1.png' alt='".LAN_431."' style='vertical-align: middle; border: 0;' /></a> 
<a href='".e_PLUGIN_ABS."rss_menu/rss.php?11.2.".e_QUERY."'><img src='".e_PLUGIN_ABS."rss_menu/images/rss2.png' alt='".LAN_432."' style='vertical-align: middle; border: 0;' /></a> 
<a href='".e_PLUGIN_ABS."rss_menu/rss.php?11.3.".e_QUERY."'><img src='".e_PLUGIN_ABS."rss_menu/images/rss3.png' alt='".LAN_433."' style='vertical-align: middle; border: 0;' /></a>
</div>
<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b>".BOXCLOSE2."</div>";


$FORUM_VIEWFORUM_TEMPLATE['sub-header'] = "
<tr>
<td colspan='2'>
<table style='width:100%'  cellpadding='0' cellspacing='0'>
<tr>
<td class='nforumcaption2' style='width: 50%'>".FORLAN_20."</td>
<td class='nforumcaption2' style='width: 10%; text-align: center;'>".FORLAN_21."</td>
<td class='nforumcaption2' style='width: 10%; text-align: center;'>".LAN_55."</td>
<td class='nforumcaption2' style='width: 30%; text-align: center;'>".FORLAN_22."</td>
</tr>
";

$FORUM_VIEWFORUM_TEMPLATE['sub-item'] = "
<tr>
<td class='nforumview2' style='text-align:left'><b>{SUB_FORUMTITLE}</b><br />{SUB_DESCRIPTION}</td>
<td class='nforumview2' style='text-align:center'>{SUB_THREADS}</td>
<td class='nforumview2' style='text-align:center'>{SUB_REPLIES}</td>
<td class='nforumview2' style='text-align:center'>{SUB_LASTPOST}</td>
</tr>
";

$FORUM_VIEWFORUM_TEMPLATE['sub-footer'] = "
</table>
</td>
</tr>
";

 ?>