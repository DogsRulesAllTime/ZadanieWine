<?php
class Index
{

    /**
     * @return array
     */
    public static function zapros()
    {

        $db = Db::getConnection();
        $List = array();
        $selectpicker = 5;
        $d = date('Y-m');

        if (isset($_POST['selectpicker']) and !empty($_POST['selectpicker'])) {

            $selectpicker = $_POST['selectpicker'];
            $d = "2017-$selectpicker";
            echo "Зарплата за $selectpicker месяц";
        } else {
            echo "Зарплата за $d месяц";
        }

        $result = $db->query("SELECT * FROM workers
INNER JOIN payment on  workers.id_user = payment.user 

INNER JOIN professions on workers.prof = professions.id_prof
WHERE payment.month = '$d-01'");

        $i = 0;
        while ($row = $result->fetch()) {

            $List[$i]['id_user'] = $row['id_user'];
            $List[$i]['profession'] = $row['profession'];
            $List[$i]['name'] = $row['name'];
            $List[$i]['surname'] = $row['surname'];
            $List[$i]['money'] = $row['money'];
            $List[$i]['photo'] = $row['photo'];
            $i++;
        }
        return $List;
    }

    public static function userAdd()
    {

        $db = Db::getConnection();
        if (isset($_POST['addBtn']) ) {
            if (empty($_POST['name'])):
                echo 'enter the name';
            else: if (empty($_POST['surname'])):
                echo 'enter the surname';
            else: if (empty($_FILES['myfile'])):
                echo 'choose file';
            else: if (empty($_POST['selectprof'])):
                echo ' select prof';
            else:
            //     $query = "INSERT INTO `workers` (`id_user`, `name`, `surname`, `prof`, `photo`) VALUES (NULL, '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['selectprof']}', '3')";
            // echo $query; die();
                print_r($_FILES['myfile']);
            print_r ($_FILES['myfile']['error']);
            if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
             echo "Файл ". $_FILES['myfile']['name'] ." успешно загружен.\n";
         }
// die();
              if (isset($_FILES['myfile'])) {
                  // echo "da";
              
                    
                  $uploaddir = 'template/img/';
                $uploadfile = $uploaddir .$_POST['name'].'.'. basename($_FILES['myfile']['type']);
                // echo '<br>';
                // echo $uploadfile;
                // die();
                if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
                    echo "Файл корректен и был успешно загружен.\n";
                } else {
                    echo "Возможная атака с помощью файловой загрузки!\n";
                }
                }
                // die();
                    
                $result = $db->query("INSERT INTO `workers` (`id_user`, `name`, `surname`, `prof`, `photo`) VALUES (NULL, '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['selectprof']}', '{$uploadfile}')");

                echo 'qq';
            endif;
            endif;
            endif;
            endif;
            }
}
}