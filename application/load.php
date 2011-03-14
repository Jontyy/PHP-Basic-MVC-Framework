<?php
	class Load{
		
		public function model($name){
			$model = $name.'Model';
			$modelPath = SITE_PATH.'models/'.$model.'.php';

			if(is_readable($modelPath)){
				require_once($modelPath);

				if(class_exists($model)){
					$registry = Registry::getInstance();
					$registry->$name = new $model;
				}else{
					return false;
				}
			}else{
				return false;
			}	
		}	
	}
?>
