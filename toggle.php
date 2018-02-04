<?php
   //***********************************************************************************************************************
   // V1.0 : Script qui permet la bascule d'un périphérique
   //*************************************** API eedomus ******************************************************************
   
   // recuperation des infos depuis la requete
  
  $periphId=getArg("periph");


   
if ($periphId != '' and $periphId != 'plugin.parameters.device_id') {
    $periphvalue = getValue($periphId);  
	if  ($periphvalue['value'] == 0) {
		setValue($periphId, 100, $verify_value_list = false, $update_only = false);
   	} else { 
		setValue($periphId, 0, $verify_value_list = false, $update_only = false);
    }
} 

die();
?>