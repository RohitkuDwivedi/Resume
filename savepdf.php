<?php
require_once('mpdf/mpdf.php');
$mpdf=new mPDF();
session_start();

$html=file_get_contents("http://localhost/Resume/cv_viewlogin.php?user_name=$_SESSION[user_name]"); //Note that your HTML should be UTF8 encoded.
$mpdf->WriteHTML($html,0); /*The WriteHTML() method takes second parameter i.e. mode.
mode:
0 - Use this (default) if the text you pass is a complete HTML page including head and body and style definitions.
1 - Use this when you want to set a CSS stylesheet - see example below
2 - Write HTML code without the <head> information. Does not need to be contained in <body>*/


$filename="h";
$dest = "I";
$mpdf->Output($filename,$dest ); //*Output() method takes 2 parameters as filename and destination. See http://mpdf1.com/manual/index.php?tid=125 for more details.*/
exit;
?>
