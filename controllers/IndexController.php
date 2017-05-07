<?php
class IndexController{

    /**
     * @return bool
     */
    public function actionIndex(){
			require_once (ROOT.'/models/index.php');
			$a = array();
			$a = Index::zapros();
			// print_r($a);
                Index::userAdd();
			

			require_once (ROOT.'/views/index.php');

return true;
	}
}