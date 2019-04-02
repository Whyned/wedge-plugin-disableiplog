<?php

function dil_behavior(){
	global $settings;
	// Wir überprüfen, ob das setzen der Ip adresse geklappt, wenn nicht, wird ein fehler gemeldet
	if(format_ip($_SERVER['REMOTE_ADDR']) != $settings['disableip']){
		log_error("ACHTUNG!: Es scheint so, als ob die IP Adresse nicht verschleiert wird.");
	}
	
}
