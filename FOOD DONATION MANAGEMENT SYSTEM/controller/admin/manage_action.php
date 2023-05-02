<?php 

require_once ('../../model/food.php');
require_once ('../../model/donor.php');


function fetchAllfoods(){
	return showAllfoods();

}
function fetchfood($id){
	return showfood($id);

}
