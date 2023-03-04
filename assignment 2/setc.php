<?php
$doc=new DOMDocument("1.0","UTF-8");
$xmlfile="movie1.xml";
$root=$doc->createElement("Movies_CD_Store");

	

	$classical=$doc->createElement("Classical");

	$mn=$doc->createElement("Movie_Name","North_by_Northwest");

	$classical->appendChild($mn);

	

	$re=$doc->createElement("Release_Year",1959);

	$classical->appendChild($re);

	

	$action=$doc->createElement("Action");

	$mn=$doc->createElement("Movie_Name","Miss_Bala");

	$action->appendChild($mn);

	

	$re=$doc->createElement("Release_Year",2019);

	$action->appendChild($re);

	

	$horror=$doc->createElement("Horror");

	$mn=$doc->createElement("Movie_Name","Thriller");

	$horror->appendChild($mn);

	

	$re=$doc->createElement("Release_Year",2019);

	$horror->appendChild($re);

	

	$root->appendChild($classical);	

	$root->appendChild($action);

	$root->appendChild($horror);

	$doc->appendChild($root);

	$doc->save("movie1.xml");

	echo '<a href="movie1.xml">Click Here </a>';

?>