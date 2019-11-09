<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$str ="มีสรรพคุณช่วยขับลมในกระเพาะอาหาร แก้ท้องอืด ท้องเฟ้อ จุกเสียด แน่น และแก้อาการปวดมวนในท้อง
เช่นเดียวกับโหระพา สารอาหารที่พบมากในราก และเหง้าของกระชาย คือ แคลเซียม และวิตามินเอ อาจใช้ราก
และเหง้ากระชายมาต้มกับน้ำ ดื่มเพื่อขับลมได้โดยใช้ประมาณครึ่งกำมือ (น้ำหนักสด 5-10 กรัม, น้ำหนักแห้ง 3-5 กรัม)";

echo str_replace("น้ำ","<span style='background:yellow'>น้ำ</span>",$str);

?>
</body>
</html>