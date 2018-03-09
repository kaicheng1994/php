<?php
class MySessionHandler extends SessionHandInterface{
	function open(){
	
	$handler=new MysessionHandler();
	session_set_save_handler($handler,true);
	$mysql = mysql_connect('192.168.38.99','sess','sess');
	$mysql->query('use session');
	session_start();
}
function close(){session.close;}
function read(){
	// $M=M('Session');
	$sess_id=session.id;
	$sess_data=session.data;
	$sess_time=session.time;
}
function write(){
	$mysql->query('insert into sess values($sess_id,$sess_data,$sess_time)');
	} 
}
function destroy(){session.destroy();}
function gc(){
	return ture;
}
 ?>