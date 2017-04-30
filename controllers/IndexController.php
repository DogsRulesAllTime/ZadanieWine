<?php
class IndexController{

	public function actionIndex(){
			require_once (ROOT.'/models/index.php');
			$a = array();
			$a = Index::zapros();
			// print_r($a);

			

			require_once (ROOT.'/views/index.php');

return true;
	}
}