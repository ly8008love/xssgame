<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script>
window.alert = function()  
{     
confirm("哎哟 不错哦！");
 window.location.href="level14.php"; 
}
</script>
<title>第13关</title>
</head>
<body>
<h1 align=center>第13关 做题好爽啊</h1>
<?php 
setcookie("user", "call me maybe?", time()+3600);
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str00 = $_GET["t_sort"];
$str11=$_COOKIE["user"];
$str22=str_replace(">","",$str11);
$str33=str_replace("<","",$str22);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form id=search>
<input name="t_link"  value="'.'" type="hidden">
<input name="t_history"  value="'.'" type="hidden">
<input name="t_sort"  value="'.htmlspecialchars($str00).'" type="hidden">
<input name="t_cook"  value="'.$str33.'" type="hidden">
</form>
</center>';
?>
<center><img src="https://dn-coding-net-tweet.codehub.cn/photo/2019/c048c2e3-7937-478b-9781-0ee4d7214648.jpg"></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>";
?>
</body>
</html>

