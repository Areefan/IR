<?php 

require("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body, td, th {
	font-family: "TH Sarabun New";
	font-size: 24px;
}
body {
	background-image: url(photo/aa1.jpg);
	background-repeat: repeat-y;
}
.buttonback {
	width: 20%;
	background-color: red;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
.button {
	width: 20%;
	background-color: #0174DF;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
</style>
</head>

<body>
<table width="200" border="0" align="center">
  <tr> </tr>
  <thead>
  </thead>
  <tr>
    <th align="center" bgcolor="#FFFFFF"><img src="photo/123.png" width="700" height="200" /></th>
  </tr>
  <thead>
    <tr>
      <td></td>
    </tr>
    <tr  bgcolor="#FFFFFF">
      <td><?php
	  			
	  
	  			@$query2=sprintf("SELECT * FROM `table 1` WHERE `id_term` = '%s' ",$_GET['id_term']);
					$result2=mysql_query($query2,$link);
					while($row2=mysql_fetch_array($result2)){			
						$index2=$row2[0];
					}	
					
					//$doc="";
					//--- code สำหรับดูเอกสาร ชุดแรก
	  			if($_GET['doc']=='1'){$doc="../ir/doc1.txt";}
					elseif($_GET['doc']=='2'){$doc="../ir/doc2.txt";}
					elseif($_GET['doc']=='3'){$doc="../ir/doc3.txt";}
					elseif($_GET['doc']=='4'){$doc="../ir/doc4.txt";}
					elseif($_GET['doc']=='5'){$doc="../ir/doc5.txt";}
					elseif($_GET['doc']=='6'){$doc="../ir/doc6.txt";}
					elseif($_GET['doc']=='7'){$doc="../ir/doc7.txt";}
					elseif($_GET['doc']=='8'){$doc="../ir/doc8.txt";}
					elseif($_GET['doc']=='9'){$doc="../ir/doc9.txt";}
					elseif($_GET['doc']=='10'){$doc="../ir/doc10.txt";}
					//$doc="../ir/doc1.txt";
					//echo $doc;
				//---ส่วนของคำสั่งเปิดไฟล์ .txt
					
					echo "<center><h1>Document NO. ".$_GET['doc']."</h1>";
					echo "<br>";
					echo "<br>";
					$myfile = fopen($doc, "r") or die("Unable to open file!");
					$a = fread($myfile,filesize($doc));
					
					
					//------ ในส่วนของ การไฮไลค์คำ 
				
					$cc=sprintf("%s",$index2);
					$c2=sprintf("<span style='background:yellow'>%s</span>",$index2);
					$vv=str_replace($index2,$c2,$a);
					echo $vv;
					echo "<br>";echo "<br>";
				?></td>
    </tr>
  </thead>
</table>
<?php
echo "<br>";
fclose($myfile);

?>
<center>

<a href="serach.php" >
<button class="buttonback" style="vertical-align:middle"  ><span> ย้อนกลับ </span> </button>
</a>

<a href="index.php" >
<button class="button" style="vertical-align:middle"  ><span> กลับสู่หน้าหลัก </span> </button>
</a>
</body>
</html>
