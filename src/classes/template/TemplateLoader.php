<?php

namespace CustomTemplate\Template;

class TemplateLoader {

	public static function loadCustomTemplate($name, $requireOnce = true) {
		$ext = substr($name, count($name) - 5, 4);
		if ($ext !== '.php') {
			$name .= '.php';
		}
		load_template(get_template_directory().'/templates/'.$name, $requireOnce);
	}

}
