<?php
$people[]="Arthur";
$people[]="David";
$people[]="Batik";
$people[]="Kostya";
$people[]="George";
$people[]="Alexandr";
$people[]="Timur";
$people[]="Oleg";
$people[]="John";
$people[]="Andrey";
$people[]="Amina";
$people[]="Lisa";
$people[]="Isabella";
$people[]="Vlada";
$people[]="Penilopa";

$q = $_REQUEST['q'];
$suggestion = "";

if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if (stristr($q, substr($person, 0, $len))) {
			if($suggestion === "") {
				$suggestion = $person;
			}  else {
				$suggestion = $suggestion . ", " . $person;
			}
		}
	}
	echo $suggestion === "" ? "No suggestion" : $suggestion;
}