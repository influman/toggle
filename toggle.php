<?php
   //***********************************************************************************************************************
   // V1.0 : Script qui permet la bascule d'un p�riph�rique : influman
   // V1.1 : rajout possible des valeurs ON et Off dans VAR2 et VAR3 : Merguez07
   //*************************************** API eedomus ******************************************************************

   // recuperation des infos depuis la requete

    $periphId=getArg("periph");
    $val1 = getArg("val1");
    $val2 = getArg("val2");
    if ($val1 == '') {
        $val1 = 0;
    }

    if ($val2 == '') {
        $val2 = 100;
    }

    if ($periphId != '' and $periphId != 'plugin.parameters.device_id') {
        $periphvalue = getValue($periphId);
      if  ($periphvalue['value'] == $val1) {
        setValue($periphId, $val2, $verify_value_list = false, $update_only = false);
        } else {
        setValue($periphId, $val1, $verify_value_list = false, $update_only = false);
        }
    }

die();
?>