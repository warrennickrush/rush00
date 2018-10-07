<?php

function auth($login, $passwd)
{
	if($login && $passwd)
	{
    	$account = unserialize(file_get_contents("../private/passwd"));
    	foreach($account as $key => $value)
		{
			if($value["login"] === $login && hash("whirlpool", $passwd) === $value["passwd"])
				return TRUE;
		}
		return FALSE;
	}
	else
		return FALSE;
}

?>
