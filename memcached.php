<?php 
$mem=new Memcache();
$mem->addServer('127.0.0.1',12000);
$ip=$mem->get('$ip');
$page=$mem->get('$page');
$referrer=$mem->get('$referrer');
$info=$mem->get('$info');
if($mem_ip!=$ip){
	$mem_ip=$ip;
	$mem_page=$page;
	$mem_referrer=$referrer;
	$mem_info=$info;

}else{
	echo '访问者ip在memcache中';
}

 ?>