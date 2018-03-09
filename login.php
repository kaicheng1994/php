<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$redis=new Redis;
$redis->connect('192.168.65.128',6379);
$count=$redis->get($username);
if($count===false||$count<4){
	$truePassword=123456;
	if($password==$truePassword){
	echo '登录成功';
	}else{
	echo '登录失败';
	$redis->incr($username);
	$redis->setTimeout($username,8);
}
}else{
// 	echo '登录失败';
// 	$redis->incr($username);
// 	$redis->setTimeout($username,8);}
// 	else{
// 	echo '您已经被限制登录，请**时间之后再试';
// }
}
 ?>