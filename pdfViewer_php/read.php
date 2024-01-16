<?php

$file1 = "DSA_NOTES.pdf";
header("Content-type:application/pdf");
header('Content-Description:inline;filename=" '.$file1.' " ');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file1);

?>