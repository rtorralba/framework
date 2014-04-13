<?php

class Url {

	public static function redirect($url = null){
		header('location: '.DIR.$url);
		exit;
	}

	public static function get_template_path(){
	    return DIR.'app/templates/'.Session::get('template').'/';
	} 
}