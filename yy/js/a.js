<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" language="javascript">
function gethighest()
{
	var a=parseInt(document.getElementById("num1").value);
	var b=parseInt(document.getElementById("num2").value);
	var c=parseInt(document.getElementById("num3").value);
	if(a+b>c)
	{
	 if(b+c>a)
	 {
	 if(c+a>b){
	 alert("could be sides of triangle");}
	 }
}
else
{
	alert("could not be sides of triangle");
}
}
</script>
</head>
<body>
side1:<input type="text" name="number1" id="num1"/><br/>
side2:<input type="text" name="number2" id="num2"/><br/>
side3:<input type="text" name="number3" id="num3"/><br/>
submit:<input type="submit" name="submit" value="submit" onclick="javascript:getHighest();return false,"/>
</body>
</html>
