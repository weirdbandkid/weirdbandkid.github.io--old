<?php
	/////////////////////////////////////////////////////////////////////////
	//                                                                     //
	//                       Created by Jake Hamblin                       //
    //                           jakehamblin.com                           //
	//                                                                     //
	//  FOR ALL THE VALUES, MAKE SURE TO KEEP THE QUOTATIONS AROUND THEM!  //
	//                                                                     //
	/////////////////////////////////////////////////////////////////////////

	/* GENERAL SITE INFORMATION  */
	// Name of your server/community
	$name = "Community Name";

	// Logo of your server/community
	$logo = $domain."images/logo.png";

	// Description of your server/community
	$description = "Description";

	// Main Color
	$colorhex = "#0f7cff";
	/* END GENERAL SITE INFORMATION */

	/* START STATUS PAGE */
	// 0 = automatic, 1 = operational, 2 = issues, 3 = offline
	$servers = [
		"Test Server 1" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "1",
		],
		"Test Server 2" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "2",
		],
		"Test Server 3" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "3",
		],
		"Test Server 4" => [
			"IP" => "jakehamblin.com",
			"port" => "30120",
			"status" => "0",
		],
	];

	// If empty, the announcement won't appear
	$announcement = "Servers one and two are having some issues";
	/* END STATUS PAGE */


	/* RANDOM PHP FUNCTIONS AND JOBS */
	// Convert HEX provided to RGB
	list($r, $g, $b) = sscanf($colorhex, "#%02x%02x%02x");
	$colorrgb = $r.", ".$g.", ".$b;

	// Make color darked
	$darkerpercent = ".5";
	$colordarker = $r*$darkerpercent.", ".$g*$darkerpercent.", ".$b*$darkerpercent;
?>