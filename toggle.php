<?php
   //***********************************************************************************************************************
   // V1.0 : Script qui permet la bascule d'un p�riph�rique : influman
   // V1.1 : rajout possible des valeurs ON et Off dans VAR2 et VAR3 : Merguez07
   // V1.2 : optim jbourdin
   //*************************************** API eedomus ******************************************************************

// recuperation des infos depuis la requete
$periphId = getArg("periph", true);
$val1     = getArg("val1", false, 0);
$val2     = getArg("val2", false, 100);

// No exec if not for plugin.parameters.device_id
if ($periphId == 'plugin.parameters.device_id') {
    die;
}
$periphinfo  = getValue($periphId);
$periphvalue = $periphinfo['value'];

// set to val2 if already on val1
if ($periphvalue == $val1) {
    setValue($periphId, $val2);
    die;
}

// set to val1 if not on val1
setValue($periphId, $val1);
die;
