<?php

include'include/connect.php';
function UserLogin($username,$password)
{

	global $conn;
	$query  = "SELECT * FROM tbl_users WHERE email = '$username' AND password = '$password'";
	$sql = sqlsrv_query($conn,$query);
  	$count = sqlsrv_has_rows($sql);
  	$user = sqlsrv_fetch_array($sql);
  	if($count==1)
  	{
	    if($user['userlvl_id'] == 3)
	    {
	    	if($user['is_Active'] == 1)
	    	{
	    		return 1;
	    	}
	    	else{
	    		return 2;
	    	}
	    }
	    else{
	    	return 3;
	    }
    
  	}
  	else
  	{
  		return 4;
 	}
		
}


function currentUserLogin($username)
{
	global $conn;
	$query = "SELECT * FROM tbl_users WHERE email = '$username'";
    $result = sqlsrv_query($conn,$query);
    $user = sqlsrv_fetch_array($result);
    return $user;
}
?>