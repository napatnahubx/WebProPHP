<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$mul= $z * $y;
$div=$mul/$z;
$message = "Hello World";

echo "ผลบวก ",$x, " + ",$y," = ",$add; echo "<br />";
echo "ผลลบ ",$z, " - ",$x," = ",$sub; echo "<br />";
echo "ผลคูณ ",$y, " * ",$z," = ",$mul; echo "<br />";
echo "ผลหาร ",$div, " / ",$z," = ",$div; echo "<br />";

?>
</body>
</html>