<?php 

 session_start();
 	unset ($_SESSION['txt1']);
	unset ($_SESSION['txt2']);
	unset ($_SESSION['b1']);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>ค้นคืนสารสนเทศ</title>
<style>
input[type=text], select {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
input[type=submit] {
	width: 100%;
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
input[type=submit]:hover {
	background-color: #45a049;
}

body,td,th {
	font-family: "TH Sarabun New";
	font-size: 24px;
	
}
	h1 {
	text-align: center;
	margin: 20px 20px;
}
#autocomplete {
	margin: 0 auto;
	}
</style>
 
  <script src="jquery-2.1.1.js"></script>
  <script src="jquery.autocomplete.min.js"></script>
  <link rel = "stylesheet" type="text/css" >
  <style>
body {
	
	font-size: 24px;
	line-height: 1.6em;
	margin: 0;
	padding: 0;
}
.container {
	width: 100%;;
	margin: 0 auto;
}
.autocomplete-suggestions {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 1px solid #999;
	background: #FFF;
	cursor: default;
	overflow: auto;
	-webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
	-moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
	box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);
}
.autocomplete-suggestion {
	padding: 2px 5px;
	white-space: nowrap;
	overflow: hidden;
}
.autocomplete-no-suggestion {
	padding: 2px 5px;
}
.autocomplete-selected {
	background: #F0F0F0;
}
.autocomplete-suggestions strong {
	font-weight: bold;
	color: #000;
}
.autocomplete-group {
	padding: 2px 5px;
}
.autocomplete-group strong {
	font-weight: bold;
	font-size: 16px;
	color: #000;
	display: block;
	border-bottom: 1px solid #000;
}
</style>
<title>ค้นคืนสารสนเทศ</title>
</head>

<body>

<div >
  <form id="form1" name="form1" method="post" action="session.php">
    <table width="563" border="0"  align="center"   >
      <tr>
        <td bgcolor="#FAFAFA"><img src="photo/123.png" width="700" height="200" /></td>
      </tr>
      <tr>
        <td width="350" bgcolor="#FAFAFA"><label for="textfield">คำค้นที่1</label>
          <input type="text" name="txt1" id="textfield" placeholder="ป้อนคำที่ต้องการค้นหา" autofocus="autofocus" required="required"/>
          <script>
 var arr=[
"activity",
"automatically",
"based",
"card",
"collection",
"collects",
"components",
"computational",
"computer",
"application",
"data",
"design",
"designed",
"devices",
"electronic",
"embedded",
"engine",
"experimentation",
"extraction",
"global",
"hardware",
"home",
"indexing",
"information",
"interconnected",
"internet",
"language",
"linked",
"network",
"networks",
"obtaining",
"organization",
"organized",
"parses",
"parts",
"perform",
"physical",
"processing",
"program",
"programs",
"resources",
"retrieval",
"science",
"search",
"searching",
"short",
"simply",
"software",
"storage",
"stores",
"structured",
"study",
"system",
"task",
"theory",
"vehicles",
];
 $('#textfield').autocomplete({
  lookup: arr
 });

 </script>
          </td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FAFAFA"><label>
            <input type="radio" name="b1" value="AND" id="bolean_0"  checked="checked"/>
            AND</label>
          <label>
            <input type="radio" name="b1" value="OR" id="bolean_1" />
            OR</label>
          <label>
            <input type="radio" name="b1" value="NOT" id="bolean_2" />
            NOT</label></td>
      </tr>
      <tr>
        <td bgcolor="#FAFAFA"><label for="textfield2">คำค้นที่2</label>
          <input type="text" name="txt2" id="textfield2" placeholder="ป้อนคำที่ต้องการค้นหา"/>
           <script>
 $('#textfield2').autocomplete({
  lookup: arr
 });
 </script>
        </td>
      </tr>
	  <tr>
	  <td align="center" bgcolor="#FAFAFA"><input type="submit" name="button" id="button" value="ค้นหา" />
	  </tr>
    </table>
  </form>
  
</div>
</body>
</html>