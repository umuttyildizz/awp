<?php
function userType($type){
	if($type == '1'){
		return 'Admin';
	}else if($type == '2'){
		return 'Premium';
	}else if($type == '3'){
		return 'Özel';
	}else if($type == '4'){
		return 'Klasik';
	}
}
?>