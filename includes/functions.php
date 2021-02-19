<?php 
function validate($field, $type, $required=1) {
	if ( $required==0 ) {
		if ( trim($field ) == '' ) {
			return true;
		}
	} else if ( $required==1 ) {
		if ( trim($field ) == '' ) {
			return false;
		}
	}
			switch ($type) {
			case "int":
				if( is_numeric($field) ) {
					return 1;
					break;
				} else {
					return 0;
					break;
				}
				
			case "chars":
				if(preg_match("/[^a-zA-Z0-9\.\-\(\)\!\,\'\#\*\@\&\_\+\;\:\?\<\>\ ]+$/s",$field)) {
					return 0;
					break;
				} else {
					return 1;
					break;
				}	
				break;
			case "password":
				if(strlen($field) < 6) {
					return 0;
					break;
				} else if(preg_match("/[^a-zA-Z0-9\.\_]+$/s",$field)) {
					return 0;
					break;
				} else {
					return 1;
					break;
				}	
				break;	
			case "email":
				if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $field))
 				 {
				  return 0;
				  break;
			   	 }else  {
					return 1;
					break;
				}
			
	}
}
?>