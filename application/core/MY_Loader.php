<?php

class MY_Loader extends CI_Loader {
	public function view($template_name, $vars = array(), $return = FALSE) {
		
		if ($return) {
			$content  = parent::view('templates/header', $vars, $return);
			$content .= parent::view($template_name, $vars, $return);
			$content .= parent::view('templates/footer', $vars, $return);
			
			return $content;
		} else {
			parent::view('templates/header', $vars);
			parent::view($template_name, $vars);
			parent::view('templates/footer', $vars);			
		}
	}
}