<?php

require_once 'project.php';

$project = new kendaraan ('Motor','Rizal','Honda','Putih');

echo"Nama Kendaraannya ....".$project->nk."<br>";
echo"Nama Pemiliknya ....".$project->np."<br>";
echo"Mereknya ....".$project->mrk."<br>";
echo"Warnanya ....".$project->wrn."<br>";

?>