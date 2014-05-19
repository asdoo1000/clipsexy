<?php
	include("connectDB/connect105.php");
	
	$sql=sprintf("SELECT * FROM mobile_service.clip_detail WHERE status_upload = 1");					
	$result = mysqli_query($link,$sql)or die("Error: ".mysqli_error($link));
	
	$xml = new XMLWriter();

	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
		
	$xml->startElement('row');
	$i=0;
	$j=0;
	while($row = mysqli_fetch_array($result)) {
		
		$xml->startElement("clip_sexy");
		$xml->writeAttribute('id', $i);
			
			$xml->startElement("id_sexy");
  			$xml->writeRaw($row['id_sexy']);
  			$xml->endElement();
			
			$xml->startElement("name_sexy");
  			$xml->writeRaw($row['actor_code']);
  			$xml->endElement();
			
			$sql1=sprintf("SELECT img_name FROM mobile_service.clip_detail WHERE actor_code = '".$row['actor_code']."'");					
			$result1 = mysqli_query($link,$sql1)or die("Error: ".mysqli_error($link));
			if($row1 = mysqli_fetch_array($result1)){
				$xml->startElement("img_name");
  				$xml->writeRaw($row1['img_name']);
  				$xml->endElement();
			}
		
			
			$xml->startElement("sum_download");
  			$xml->writeRaw($row['sum_download']);
  			$xml->endElement();
			
		$xml->endElement();
		$i++;
	}
	
	$xml->endElement();
	
	header('Content-type: text/xml');
	$xml->flush();
	mysqli_close($link);
?>