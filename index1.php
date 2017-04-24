<!DOCTYPE html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
var startnode;var endnode;

function setnode(x){
	
	if(!startnode)
	{
		startnode=x;
		x.style.backgroundColor="Green";
		
	}	
	else
		if((!endnode)&&(x!=startnode))
	{
		endnode=x;
		x.style.backgroundColor="Red";
		
	}
	
}
function hideform()
{
	document.getElementById("getdimension").style.display="none";
}
</script>
</head>

<?php
if(isset($_GET['submit'])) 
	{ 	
		$dimension = $_GET['table-dimension'];
		echo "<table id='path-table'>";
		for($i=0;$i<$dimension;$i++)
			{
				echo "<tr>";
				for($j=0;$j<$dimension;$j++)
				{ $id="$i,$j";
					echo"<td class='nodes' onclick='setnode(this);' id=$id title=$id><a  href='javascript:void(0);'>$id</a></td>";
				}
				echo "</tr>";
			}
	echo"</table>";
	}
	
?>
<style>
{margin:0px;padding:0px;}
.nodes{
		height:<?php echo(100/$dimension)+"%" ?>;
		width:<?php echo(100/$dimension)+"%" ?>;
		background-color:LightGrey;
		border:1px solid Grey;
		text-align:center;
		}
.nodes:hover{
		background-color:Grey;
		border:1px inset Grey;
		}
#path-table{height:80%;
			border-collapse:collapse;
			width:80%;
			position:absolute;
			top:5%;left:10%;
			}
.nodes a{display:block;text-decoration:none;height:100%;width:100%;}
</style>
<div id="getdimension">
<form  method="get" action="index1.php" onsubmit="hideform();" >
	Enter the number of rows/columns you want to use(max:30) : <input type="number" name="table-dimension" min="3" max="30">
	<input type="submit" name="submit" >
</form></div>
