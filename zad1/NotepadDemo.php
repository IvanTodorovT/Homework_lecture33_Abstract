<?php
use Page\Page;
use SimpleNotepad\SimpleNotepad;
use SecuredNotepad\SecuredNotepad;

require_once 'autoload.php';

$stranica1 = new Page ( "Purva Stranica", "Baba i dqdo vadqt rqpa. " );
$stranica2 = new Page ( "Vtora Stranica", "Az obicham mach i boza. " );
 
//echo $stranica1->review();

$arr = [ ];
$arr [] = $stranica1;
$arr [] = $stranica2;

$dnevnik = new SimpleNotepad ( $arr );

//echo $dnevnik->review ();

//PASS = 1234

$secDenvnik = new SecuredNotepad($arr, "1234");

$secDenvnik->addTextOver('YAHUU', $stranica1);