<?php  
  header("Content-type: text/x-vcard; charset=utf-8");
  header("Content-Disposition: attachment; filename=\"ShawnHoffman.vcf\";");
  echo file_get_contents("ShawnHoffman.vcf");
 ?>