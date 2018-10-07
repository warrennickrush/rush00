<?php
session_start();
if($_SESSION["signup"] === "OK" && $_SESSION["login"] && $_SESSION["passwd"])
{
	if(!file_exists("../private"))
		mkdir("../private");
	if(!file_exists("../private/passwd"))
	{
		file_put_contents("../private/passwd", null);
		$empty_f = 1;
	}
	$account = unserialize(file_get_contents("../private/passwd"));
	if(!$empty_f)
	{
		foreach($account as $key => $value)
		{
			if($value["login"] === $_SESSION["login"])
			{
				echo "ERROR"."\n";
				$dup = 1;
			}
		}
	}
	if(!$dup)
	{
		$temp["login"] = $_SESSION["login"];
		$temp["passwd"] = hash("whirlpool", $_SESSION["passwd"]);
		$account[] = $temp;
		file_put_contents("../private/passwd", serialize($account));
		header('LOCATION: index.php');

	}

}
else
	echo "ERROR"."\n";
?>

