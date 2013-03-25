<?php

	#####
	## HTML textfield Class
	##
	## Author: Bill Hunt (bill@krues8dr.com)
	## 
	## Purpose: Displays an HTML textfield. 
	##
	## Important: 
	## Input type subclass names are in lowercase!
	## This is to make types easily selected.
	##
	## Change Log:
	## 07.03.05 - Created file, copied body from HTML object.
	#####

	require_once(HTMLBUILDER_MODULE_DIR.'base_input_type.inc.php');
	
	class textfield extends BaseInputType {
	
		function textfield($args = array()) {
			$this->BaseInputType($args);
		}
		
		function show($args) {
			$this->args = $args;
			
			$args['type'] = 'text';
			return parent::show($args);
		}
		
		function cleanData($args) {
			$object =& $args['object'];
			$value = $args['value'];
			
			$return_val = $object->db_quote($value);
			
			return $return_val;
		}
		
	}
	
?>