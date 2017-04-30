<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="template/css/bootstrap.css">
    <link rel="stylesheet" href="template/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<!-- ZOOM ON IMG CLICK -->
    <script type="text/javascript">
        $(document).ready(function() { // Ждём загрузки страницы
    
    $(".img-circle").click(function(){   // Событие клика на маленькое изображение
        var img = $(this);  // Получаем изображение, на которое кликнули
        var src = img.attr('src'); // Достаем из этого изображения путь до картинки
        $("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
                         "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
                         "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
                         "</div>"); 
        $(".popup").fadeIn(800); // Медленно выводим изображение
        $(".popup_bg").click(function(){    // Событие клика на затемненный фон    
            $(".popup").fadeOut(800);   // Медленно убираем всплывающее окно
            setTimeout(function() { // Выставляем таймер
              $(".popup").remove(); // Удаляем разметку всплывающего окна
            }, 800);
        });
    });
    
});
    </script>
</head>
<body>
<form  method="post" action="">
    <div class="form-group">
  <label for="selectpicker">Select list:</label>
  <select class="selectpicker" name="selectpicker">
  <option value="" >Текущий месяц</option>
  <option value="1" >январь</option>
  <option value="2" >февраль</option>
  <option value="3" >март</option>
  <option value="4" >апрель</option>
  <option value="5" >май</option>
  <option value="6" >июнь</option>
  <option value="7" >июдь</option>
  <option value="8" >август</option>
  <option value="9" >сентябрь</option>
  <option value="10" >октябрь</option>
  
</select>

  
</div>
<div class="form-group">
<input type="submit" name="btn" value="применить">
</div>

</form>



<!-- users profiles -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<div class="row bootstrap snippets">
<?php foreach ($a as $key ):?> 

    <div class="col-md-3">
    	<div class="panel widget">
    		<div class="widget-header bg-success"></div>
    		<div class="widget-body text-center">
    			<img alt="Profile Picture" class="widget-img img-circle img-border-light image" src="template<?php echo $key['photo'] ;?>">
    			<h4 class="mar-no"><?php echo $key['name'].' '.$key['surname'] ;?></h4>
    			<p class="text-muted mar-btm"><?php echo $key['profession'] ;?></p>
    			<p class="text-muted mar-btm"><?php echo $key['money'] ;?>.000</p>
    			
    			
    		</div>
    	</div>
    </div>
    <?php endforeach; ?>

    <!-- <div class="col-md-3">
        <div class="panel widget">
    		<div class="widget-header bg-success"></div>
    		<div class="widget-body text-center">
    			<img alt="Profile Picture" class="widget-img img-circle img-border" src="http://bootdey.com/img/Content/avatar/avatar2.png">
    			<h4 class="mar-no"><?php echo $key['name'].' '.$key['surname'] ;?></h4>
                <p class="text-muted mar-btm"><?php echo $key['prof'] ;?></p>
                <p class="text-muted mar-btm"><?php echo $key['id_user'] ;?></p>
    
    			
    		</div>
    	</div>
    </div> -->
 
    </div>
   
</body>
</html>