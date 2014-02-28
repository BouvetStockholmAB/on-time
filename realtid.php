<?php
 $ch = curl_init("https://api.trafiklab.se/sl/realtid/GetDpsDepartures.json?siteId=1605&key=DbxOv8uZwgADBoXldioCcUoaw9OYwSZx");
 curl_setopt($ch, CURLOPT_HEADER, 0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $output = curl_exec($ch);
 curl_close($ch);
 echo $output;
?>
