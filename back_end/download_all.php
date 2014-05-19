<?php
	header('Content-type: text/xml');
	include("connectDB/connect105.php");
	
	$check_url = "";
	$check_url = $_REQUEST['check_url'];
	$sql = sprintf("SELECT * FROM mobile_service.content_today WHERE rand_code = '".$check_url."' ");
	$result = mysqli_query($link,$sql)or die("Error: ".mysqli_error($link));
	
		$xml = new XMLWriter();
		$xml->openURI("php://output");
		$xml->startDocument();
		$xml->setIndent(true);
		
	$xml->startElement('row');
	
	if($row = mysqli_fetch_array($result)){
		$xml->startElement("clip");
		$xml->writeAttribute('status', 200);
		$xml->endElement();
		
		$sql = sprintf("SELECT id_sexy,actor_code,img_name,video_name,sum_download FROM clip_detail WHERE video_name = '".$row['content_free']."' ");
		$result = mysqli_query($link,$sql)or die("Error: ".mysqli_error($link));

		$sql1 = sprintf("SELECT id_sexy,actor_code,img_name,video_name,sum_download,price FROM clip_detail WHERE video_name = '".$row['content_per_1']."' ");
		$result1 = mysqli_query($link,$sql1)or die("Error: ".mysqli_error($link));
	
		$sql2 = sprintf("SELECT id_sexy,actor_code,img_name,video_name,sum_download,price FROM clip_detail WHERE video_name = '".$row['content_per_2']."'  ");
		$result2 = mysqli_query($link,$sql2)or die("Error: ".mysqli_error($link));
	
		$i=0;
		if($row = mysqli_fetch_array($result)) {
			$xml->startElement("clip_free");
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
				
				$xml->startElement("video_name");
				$xml->writeRaw($row['video_name']);
				$xml->endElement();
				
				$xml->startElement("sum_download");
				$xml->writeRaw($row['sum_download']);
				$xml->endElement();
				
			$xml->endElement();
			$i++;
		}
		
		if($row1 = mysqli_fetch_array($result1)){
			$xml->startElement("clip_pre");
				$xml->writeAttribute('id', $i);
				
				$xml->startElement("id_sexy");
				$xml->writeRaw($row1['id_sexy']);
				$xml->endElement();
				
				$xml->startElement("name_sexy");
				$xml->writeRaw($row1['actor_code']);
				$xml->endElement();
				
				$xml->startElement("img_name");
				$xml->writeRaw($row1['img_name']);
				$xml->endElement();
				
				$xml->startElement("video_name");
				$xml->writeRaw($row1['video_name']);
				$xml->endElement();
				
				$xml->startElement("sum_download");
				$xml->writeRaw($row1['sum_download']);
				$xml->endElement();
				
				$xml->startElement("price");
				$xml->writeRaw($row1['price']);
				$xml->endElement();
				
			$xml->endElement();
			$i++;
		}
		
		if($row2 = mysqli_fetch_array($result2)){
			$xml->startElement("clip_pre");
				$xml->writeAttribute('id', $i);
				
				$xml->startElement("id_sexy");
				$xml->writeRaw($row2['id_sexy']);
				$xml->endElement();
				
				$xml->startElement("name_sexy");
				$xml->writeRaw($row2['actor_code']);
				$xml->endElement();
				
				$xml->startElement("img_name");
				$xml->writeRaw($row2['img_name']);
				$xml->endElement();
				
				$xml->startElement("video_name");
				$xml->writeRaw($row2['video_name']);
				$xml->endElement();
				
				$xml->startElement("sum_download");
				$xml->writeRaw($row2['sum_download']);
				$xml->endElement();
				
				$xml->startElement("price");
				$xml->writeRaw($row2['price']);
				$xml->endElement();
				
			$xml->endElement();
			$i++;
		}
		
	}else{
		$xml->startElement("clip");
		$xml->writeAttribute('status', 500);
		$xml->endElement();
	}
	
	$xml->endElement();
	$xml->flush();
	mysqli_close($link);
?>