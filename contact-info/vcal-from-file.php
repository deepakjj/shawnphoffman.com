<?php 
  header("Content-type: text/x-vcalendar; charset=utf-8");
  header("Content-Disposition: attachment; filename=\"ShawnHoffman.ics\";");
  echo file_get_contents("ShawnHoffman.ics");
 ?>