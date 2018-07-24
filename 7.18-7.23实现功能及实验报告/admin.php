<?php
session_start();
if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
 echo "你是管理员，你现在拥有后台管理权限";
}
else{
	var_dump("nueownfe");
}

?>