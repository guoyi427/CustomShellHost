<?php

/**
* 
*/
class stlModel
{
	public $name = NULL;
	public $imageURL;
	public $stlURL;
	public $id;
}

$name_list = array(
	"DOOM HAMMER FROM", 
	"BLACK HAND", 
	"Grommash Hellscream Bust", 
	"Garrosh Hellscream",
	"chengbao",
	"eyu", 
	"dotacike",
	"sanjiaokonglong");
$image_url_list = array("DOOMHAMMERFROM.gif",
                      	"BLACKHAND.gif",
                      	"GrommashHellscreamBust.gif",
						"GarroshHellscream.gif",
                      	"chengbao.jpg",
                      	"eyu.jpg",
                      	"dotacike.jpg",
                      	"sanjiaokonglong.jpg");
$stl_url_list = array(
	[
	"DOOMHAMMERFROM1.stl",
	"DOOMHAMMERFROM2.stl",
	"DOOMHAMMERFROM3.stl",
	"DOOMHAMMERFROM4.stl",
	"DOOMHAMMERFROM5.stl",
	"DOOMHAMMERFROM6.stl",
	"DOOMHAMMERFROM7.stl"
	],
	[
	"BLACKHAND1.stl",
	"BLACKHAND2.stl",
	"BLACKHAND3.stl",
	"BLACKHAND4.stl",
	"BLACKHAND5.stl",
	"BLACKHAND6.stl",
	"BLACKHAND7.stl",
	"BLACKHAND8.stl"
	],
	["GrommashHellscreamBust.stl"],
	["GarroshHellscream1.stl"],
	["chengbao.stl"],
	["eyu.stl"],
	[
	"dotacike1.stl",
	"dotacike2.stl",
	"dotacike3.stl",
	"dotacike4.stl"
	],
	["sanjiaokonglong.stl"]
	);
$model_list = array();

for ($i=0; $i < count($name_list); $i++) { 
	$model = new stlModel;
	$model->imageURL = $image_url_list[$i];
	$model->name = $name_list[$i];
	$model->stlURL = $stl_url_list[$i];
	$model->id = $i+10000;
	$model_list[] = $model;
}

$result = array(
	'code' => 200,
	'message' => $model_list,
	'data' => 'data'
 );
	echo json_encode($result);
?>