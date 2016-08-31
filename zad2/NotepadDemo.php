<?php
use Page\Page;
use SimpleNotepad\SimpleNotepad;
use SecuredNotepad\SecuredNotepad;
use ElectronicSecuredNotepad\ElectronicSecuredNotepad;

require_once 'autoload.php';

$stranica1 = new Page ( "Purva Stranica", "Baba i dqdo vadqt rqpa. " );
$stranica2 = new Page ( "Vtora Stranica", "Az obicham mach i boza i Baba. " );
 


$arr = [ ];
$arr [] = $stranica1;
$arr [] = $stranica2;


// SecureNotepad - strong pass
// PASSWORD abvG1

$Sdnevnik = new SecuredNotepad($arr, "abvG"); //.1
echo $Sdnevnik->review();





//ElectronicSecureNotepad must be start + pass
//PASSWORD 1234

$Enotepad = new ElectronicSecuredNotepad($arr, "1234");
//$Enotepad->start();
echo $Enotepad -> addTextOver("YAHUU.", $stranica1);  