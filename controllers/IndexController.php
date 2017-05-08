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
             // Проверка на ввод валюты и ее отображение
             if (!empty($_POST['usa']) && isset($_POST['usa'])):
             	$view = 'block';
             else:$view = 'none';
             endif;
			// Index::userMonthPrem();

			require_once (ROOT.'/views/index.php');

return true;
	}
}