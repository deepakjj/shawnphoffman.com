<?php    
	header("Content-type: text/x-vcalendar; charset=utf-8"); 
	header("Content-Disposition: attachment; filename=\"ShawnHoffman.ics\";");

	echo "BEGIN:VCALENDAR\n";
	echo "VERSION:2.0\n";
	echo "CALSCALE:GREGORIAN\n";
	echo "BEGIN:VEVENT\n";
	echo "CREATED:20121223T025725Z\n";
	echo "UID:E6A23593-7115-4B32-A249-817D5293B70E\n";
	echo "DTEND;VALUE=DATE:20130102\n";
	echo "TRANSP:TRANSPARENT\n";
	echo "SUMMARY:Click attachment to download my contact information.\n";
	echo "DTSTART;VALUE=DATE:20130101\n";
	echo "DTSTAMP:20121223T025849Z\n";
	echo "SEQUENCE:3\n";
	echo "ATTACH;VALUE=BINARY;ENCODING=BASE64;FMTTYPE=text/directory;\n";
	echo " X-APPLE-FILENAME=ShawnHoffman.vcf:\n";
	$vcard = file_get_contents("ShawnHoffman.vcf");
	$b64vcard = base64_encode($vcard);
	$b64mline = chunk_split($b64vcard,74,"\n");
	$b64final = preg_replace('/(.+)/', ' $1', $b64mline);
	echo $b64final;
	echo "END:VEVENT\n";
	echo "END:VCALENDAR\n";
 ?>