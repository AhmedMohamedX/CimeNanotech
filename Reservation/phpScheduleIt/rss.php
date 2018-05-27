<?php
/**
* This page will display all upcoming reservation activity for a user as an RSS feed
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 10-08-05
* @package phpScheduleIt
*
*
* Modified by Dan Felsenfeld Sept 17,2009 to add a check for resourceid, causing results to be returned for ta single resource, rather than a single user.
* This was as per advice given by Nick Korbel to another user on the forum.
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/

include_once('lib/DBEngine.class.php');

if (!(bool)$conf['app']['allowRss'] )  {   //check for RSS permission
		header('Content-Type: text/xml');
		echo "<?xml version=\"1.0\" encoding=\"$charset\"?" . ">\n<rss version=\"2.0\">\n";
		echo "<channel>\n<title>{$conf['app']['title']} Reservations</title>\n";
		echo "<item>\n";
		echo "<title> No RSS on this server. </title>\n";
		echo "</item>\n";
		echo "</channel>\n</rss>";
	die();	
}
if (  !( isset($_GET['id']) || isset($_GET['resource'])  ) )   {  // check to see if the passed code is valid
		header('Content-Type: text/xml');
		echo "<?xml version=\"1.0\" encoding=\"$charset\"?" . ">\n<rss version=\"2.0\">\n";
		echo "<channel>\n<title>{$conf['app']['title']} Reservations</title>\n";
		echo "<item>\n";
		echo "<title> Not a valid rss identifier code. </title>\n";
		echo "<description> Must use either /rss.php?id=your.email@xxxx.edu, or /rss.php?resource=system name. </description>\n";
		echo "</item>\n";
		echo "</channel>\n</rss>";
 	die();	
}

$db = new DBEngine();
// the old version:
// $res = $db->get_user_reservations($_GET['id'], 'res.start_date', 'DESC', true);


if (isset($_GET['resource']))
{
$res = $db->get_resource_reservations($_GET['resource'], 'res.start_date', 'DESC');   // returns information about reservations for a particular resource
}
else
{
$res = $db->get_user_reservations_mod($_GET['id'], 'res.start_date', 'DESC', true);   // a modified version of get-user-information that expects username rather than userID
}

global $charset;

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"$charset\"?" . ">\n<rss version=\"2.0\">\n";
echo "<channel>\n<title>{$conf['app']['title']} Reservations</title>\n";

if (!$res) {
	echo "<item>\n";
	echo '<title>' . $db->err_msg . "</title>\n";
	echo '<link>' . CmnFns::getScriptURL(). "</link>\n";
	echo '<description>' . $db->err_msg . "</description>\n";
	echo "</item>\n";	
}
else{
	if (isset($_GET['resource'])) {						// prints out a listing of scheduled reservations for a resource, listed by time, including the user name (first + last)
		for ($i = 0; $i < count($res) && $res != false; $i++) {
			$cur = $res[$i];
			echo "<item>\n";
			echo '<title>' . $cur['fname'] . ' ' . $cur['lname'] . ' on '. $cur['name'] . "</title>\n";
			echo '<link>' . CmnFns::getScriptURL() . "/reserve.php?type=m&amp;resid={$cur['resid']}&amp;scheduleid={$cur['scheduleid']}" . "</link>\n";
			echo '<description>' . '[' . Time::formatDate($cur['start_date']) . ' from ' . Time::formatTime($cur['starttime']) . ' to ' . Time::formatTime($cur['endtime']) .  '] ' .  $cur['summary'] . "</description>\n";
			
			echo "</item>\n";
		}
	} 	else {     //if it is not a resource, it assumes it is by user
			for ($i = 0; $i < count($res) && $res != false; $i++) {
				$cur = $res[$i];
				echo "<item>\n";
				echo '<title>' . $cur['name'] . "</title>\n";
				echo '<link>' . CmnFns::getScriptURL() . "/reserve.php?type=m&amp;resid={$cur['resid']}&amp;scheduleid={$cur['scheduleid']}" . "</link>\n";
				echo '<description>' . '[' . Time::formatDate($cur['start_date']) . ' from ' . Time::formatTime($cur['starttime']) . ' to ' . Time::formatTime($cur['endtime']) .  " ]</description>\n";
				echo "</item>\n";
			}
		}
}
echo "</channel>\n</rss>";
?>
