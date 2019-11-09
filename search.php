<?php 
 require("connect.php");
 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบค้นคืนสารสนเทศ</title>
<style>
table {
	border-collapse: collapse;
	width: 60%;
}
</style>
<style>
.button {
	width: 100%;
	background-color: #0174DF;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
.button span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}
.button span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}
.button:hover span {
	padding-right: 25px;
}
.button:hover span:after {
	opacity: 1;
	right: 0;
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
</style>
<style type="text/css">
body, td, th {
	font-family: "TH Sarabun New";
	font-size: 24px;
}
body {
}
</style>
</head>

<body>
<?php
//-------------------ตัดค่าว่างที่ส่งมา --------------
	
	@$txt1 = trim( $_SESSION['txt1']);
	@$txt2 = trim($_SESSION['txt2']);
	
	@$txt1 = strtolower($txt1);
	@$txt2 = strtolower($txt2);
	//------------- เช็คค่า and or not------------------
	
	@$b1=$_SESSION['b1'];
	
	
	
//---------------------------------------------

// code ในส่วนนี้ ค้นหา ค่าที่ป้อน เทียบกับข้อมูล ในตาราง  แล้วเอา keyword id มาใส่ในตัวแปร เพื่อค้นหา 
//-------------------------------  data 1
	if(!empty($txt1)){
	@$query=sprintf("SELECT * FROM `table 1` WHERE `term` = '%s' ",$txt1);
	//echo $query."<br>";
	$result=mysql_query($query,$link);
		if(@mysql_num_rows($result)==0){
			$index="0";
		}else {while($row=mysql_fetch_array($result)){			
				$index=$row[1];
				}
			//echo "  ".$index."<br>";
		}
	}
//-------------------------------------------------------

//-------------------------------  data 2
	if(!empty($txt2)){
	@$query2=sprintf("SELECT * FROM `table 1` WHERE `term` = '%s'  ",$txt2);
	//echo $query2."<br>";
	$result2=mysql_query($query2,$link);
	while($row2=mysql_fetch_array($result2)){			
			$index2=$row2[1];
			}	
			//echo "  ".$index2."<br>";
	}
//-------------------------------------------------------
// ค้นหา keyword id กับ ตาราง ว่า เช่น 1=accress อยู่ใน doc ไหน กี่คำ 

	//สำหรับค้นหา ช่องที่1 ตัวเดียว
	if(!empty($txt1)and empty($txt2)){
		@$query01=sprintf("SELECT * FROM `table 2` WHERE `id_term`= '%s' Order by F DESC ",$index);
		//echo $query01;
	}
		
	//สำหรัยค้นหาช่องที่ 1 และ2 และช่อง. ไม่ได้ป้อน			
	if(!empty($txt1) and !empty($txt2)){
		if($b1=="OR" ){
			@$query01=sprintf("SELECT * FROM `table 2` WHERE `id_term` ='%s' %s `id_term` = %s Order by F DESC",$index,$b1,$index2);
			//echo $query01;
		}elseif($b1=="AND"){
		
		$query01=sprintf("SELECT * FROM `table 2` WHERE `id_term` = '%s' Order by F DESC ",$index);
		$result01=mysql_query($query01,$link);
		//echo $query01;
		if(@mysql_num_rows($result01)==0){
			echo "<center>คำค้นหาไม่ตรงกับเอกสาร<center>";
			
		}else {
			while($row01=mysql_fetch_assoc($result01)){
				$term1[] = $row01["doc#"];
							
				}
			
			}
		$query01=sprintf("SELECT * FROM `table 2` WHERE `id_term` = '%s' Order by F DESC ",$index2);
		$result01=mysql_query($query01,$link);
		$i=0;
		if(@mysql_num_rows($result01)==0){
			echo "<center>คำค้นหาไม่ตรงกับเอกสาร<center>";
			
		}else {
			while($row01=mysql_fetch_assoc($result01)){
				$term2[] = $row01["doc#"];		
				}	
			}
			for($i=0;$i<sizeof($term1);$i++){
				for($j=0;$j<sizeof($term2);$j++){
					if($term1[$i]==$term2[$j]){ $term3[]=$term1[$i];}
					}
				}
				@$query01=sprintf("SELECT * FROM `table 2` WHERE( `id_term` = '%s' or `id_term`='%s') and (`doc#`='%s' or `doc#`='%s') Order by F DESC ",$index,$index2,$term3[0],$term3[1]);
			}else if($b1=="NOT" ){ 
			@$query01=sprintf("SELECT * FROM `table 2` WHERE `id_term` ='%s' and `id_term` != %s ",$index,$index2);
			//echo $query01;
			
			}
		}		
?>
<div>
  <table width="200" border="0" align="center">
    <tr>
    <thead>
    
      <th align="center"><img src="photo/123.png" width="888" height="218" /></th>
    <thead>
        </tr>
      
      <tr>
        <td><?php
		//echo $query01;
		@$result01=mysql_query($query01,$link);
		if(@mysql_num_rows($result01)==0){
			echo "<center>คำค้นหาไม่ตรงกับเอกสาร<center>";
			
		}else {
			?></td>
      </tr>
      <tr>
        <td><table width="200" border="1" align="center">
            <tr>
              <th bgcolor=" #ff6666" scope="col"><center>
                Term</th>
              <th bgcolor="  #ff6666" scope="col"><center>
                Doc</th>
              <th bgcolor=" #ff6666" scope="col"><center>
                Frequency</th>
              <th bgcolor=" #ff6666" scope="col" width="20%">&nbsp;</th>
            </tr>
            <?php
          while($row01=mysql_fetch_assoc($result01)){
			?>
            <tr>
              <td bgcolor="#F2F2F2"><?php
			  	 $doctotal[]= $row01["id_term"];
			 	 @$query=sprintf("SELECT * FROM `table 1` WHERE `id_term` = '%s' ",$row01["id_term"]);
				// echo ($query);
				 @$result=mysql_query($query,$link);
				 while($row=mysql_fetch_assoc($result)){ printf("<center>%s",$row["term"]); }
									?></td>
              <td bgcolor="#F2F2F2"><?php printf("<center>%s",$row01["doc#"]); ?></td>
              <td bgcolor="#F2F2F2"><?php printf("<center>%s",$row01["F"]);	 ?></td>
              <td width="10%" bgcolor="#F2F2F2"><center>
                  <a href='open1.php?id_term=<?php echo $row01["id_term"] ?> & doc=<?php echo $row01["doc#"] ?>' >
                  <button class="button" style="vertical-align:middle"  ><span> OPEN </span> </button>
                  </a>
                </center></td>
            </tr>
            <?php } ?>
          </table></td>
      </tr>
  </table>
  <?php }
 ?>
  </TABLE>
  <center>
  <a href="index.php" >
  <button class="buttonback" style="vertical-align:middle"  ><span> กลับสู่หน้าหลัก </span> </button>
  </a> </div>
  <?php // print_r($doctotal);?>
</body>
</html>