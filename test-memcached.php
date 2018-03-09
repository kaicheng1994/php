<?php 
$men=new Memcache();
$men->connect('192.168.209.128',11211);
$rs=$men->set('name','php64',0,0);
var_dump($rs);

$data=$men->get('name');
var_dump($data);


$rs=$men->set('name','php64',0,2);
$rs=$men->set('age','5555',0,time()+3);
var_dump($rs);

$data=$men->get('age');
var_dump($data);




 ?>