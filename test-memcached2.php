<?php 
$men=new Memcache();
$men->connect('192.168.209.128',11211);
var_dump($men->set('string','string',0,0));
echo "<hr/>";
var_dump($men->set('int',100,0,0));
echo "<hr/>";
var_dump($men->set('float',111.1,0,0));
echo "<hr/>";
var_dump($men->set('bool',true,0,0));
echo "<hr/>";
var_dump($men->get('string'));
echo "<hr/>";
var_dump($men->get('int'));
echo "<hr/>";
var_dump($men->get('float'));
echo "<hr/>";
var_dump($men->get('bool'));
echo "<hr/>";
// class parson{
	// $name;
	// $age;
	// $name;
	
	// function __construct(){
	// 	$this->name=name;
	// 	$this->age=age;
	// 	$this->string=string;
	// }

// }
	var_dump($men->set('null',null,0,0));
	echo "<hr/>";
	// var_dump($men->set('resource',curl_init(),0,0));
	// echo '<hr/>';
	var_dump($men->get('null'));
	echo '<hr/>';
	var_dump($men->get('resource'));
	echo "<hr/>";

var_dump($men->set('time',time(),0,0));
echo '<hr/>';
var_dump($men->get('time'));
echo '<hr>';
var_dump($men->delete('time'));
echo '<hr/>';
var_dump($men->get('time'));
echo '<hr>'; 

var_dump($men->flush());
echo '<hr/>';
var_dump($men->get('time'));

$men->add('name2','ccckkk',0,0);
var_dump($men->get('name2'));
$men->replace('name2','kkkccc',0,0);
var_dump($men->get('name2'));
echo '<hr/>';


$men->add('num',2,0,0);
$men->increment('num',2);
var_dump($men->get('num'));
$men->decrement('num',2);
var_dump($men->get('num'));



 ?>
