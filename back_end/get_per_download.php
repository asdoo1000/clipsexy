<?php
	include("connectDB/connect105.php");
	$id_sexy = "";
	$id_sexy = $_REQUEST["id_sexy"];
	
	$sql=sprintf("SELECT * FROM clip_detail WHERE id_sexy = ".$id_sexy."");
	$result = mysqli_query($link,$sql)or die("Error: ".mysqli_error($link));
	
	$sql1=sprintf("SELECT * FROM clip_detail WHERE price != 0 limit 1,3");
	$result1 = mysqli_query($link,$sql1)or die("Error: ".mysqli_error($link));
	
	$xml = new XMLWriter();

	$xml->openURI("php://output");
	$xml->startDocument();
	$xml->setIndent(true);
		
	$xml->startElement('row');
	$i=0;
	if($row = mysqli_fetch_array($result)) {
		$xml->startElement("clip_per");
			$xml->writeAttribute('id', $i);
			
			$xml->startElement("id_sexy");
  			$xml->writeRaw($row['id_sexy']);
  			$xml->endElement();
			
			$xml->startElement("name_sexy");
  			$xml->writeRaw($row['actor_code']);
  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw($row['img_name']);
  			$xml->endElement();
			
			$xml->startElement("price");
  			$xml->writeRaw($row['price']);
  			$xml->endElement();
			
		$xml->endElement();
		$i++;
	}
	
//	while($row1 = mysqli_fetch_array($result1)) {
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 1);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("001.jpg");
  			$xml->endElement();
			
		$xml->endElement();
		
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 2);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("002.jpg");
  			$xml->endElement();
			
		$xml->endElement();
		
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 3);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("003.jpg");
  			$xml->endElement();
			
		$xml->endElement();
		
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 3);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("003.jpg");
  			$xml->endElement();
			
		$xml->endElement();
		
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 4);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("004.jpg");
  			$xml->endElement();
			
		$xml->endElement();
		
		$xml->startElement("clip_other");
			$xml->writeAttribute('id', 5);
			
//			$xml->startElement("id_sexy");
//  			$xml->writeRaw($row1['id_sexy']);
//  			$xml->endElement();
			
			$xml->startElement("img_name");
  			$xml->writeRaw("005.jpg");
  			$xml->endElement();
			
		$xml->endElement();
//		$i++;
//	}
	
	$xml->endElement();
	
	header('Content-type: text/xml');
	$xml->flush();
	mysqli_close($link);
?>