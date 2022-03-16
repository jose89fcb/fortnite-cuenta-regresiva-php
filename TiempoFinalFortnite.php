<?php
$FechaFinTemporada = strtotime('19-03-2022') - time(); //Añade el fin de temporada
$dia = floor($FechaFinTemporada / 86400);
$hora  = floor(($FechaFinTemporada % 86400) / 3600);
$minuto = floor(($FechaFinTemporada % 3600) / 60);
$segundo = ($FechaFinTemporada % 60);
if($dia) echo "$dia Días ";
if($hora) echo "$hora Horas ";
if($minuto) echo "$minuto Minutos ";
if($segundo) echo "$segundo Segundos ";
echo "";
?>
