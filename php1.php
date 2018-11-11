<html>
<form action=" " method='post'>
number:<input type="text" name="n">
<input type="submit" name="sub">
</form>
<body>



<?php
if(isset($_POST['sub']))
{
	$num=$_POST['n'];
	echo "$num ";

	for($i=2;$i<=$num;$i++)
	{
		$count=2;
		for($j=2;$j<$i;$j++)
		{
			if(($i%$j)==0)
			{
				$count++;		
			}
			
		}
	
	if($count==2)
	{
		echo "$i ";
	}
}	
}	


?>
</body>
</html>	

