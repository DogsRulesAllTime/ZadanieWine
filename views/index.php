<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="template/css/bootstrap.css">
    <link rel="stylesheet" href="template/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
 <style>
    #preview img {
    width: 100px;
      height: 100px;
    }
  </style>

    
</head>
<body>
<div class="row">
    <div class=" col-md-6">
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
<label for="usa"> Введите курс $</label>
<input type="text" name="usa"><br>
<label for="premMoney"> Введите премию для сотрудников(1 = 1000р)</label>
<input type="text" name="premMoney"><br>
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
    			<p class="text-muted mar-btm"><?php echo 'ЗП в рублях '.$key['money'] ;?>.000</p>
    			<p class="text-muted mar-btm " style="display:<?php echo $view; ?> "> 
          <?php 
          echo 'ЗП в долларах '.intval($key['usa']);
          // $usa =  (($key['money'])/57)*1000 ;
          // echo 'ЗП в долларах '.intval($usa);
          ?>

          </p>
    			
    		</div>
    	</div>
    </div>
    <?php endforeach; ?>
    </div>

   <!--  <form method="post" action="">
<div class="form-group">
<label for="premMoney"> Введите премию для сотрудников</label>
<input type="text" name="premMoney"><br>
<input type="submit" name="premAdd" value="применить">
</div>

</form> -->

    </div>






    <div class=" col-md-6">
        <form enctype="multipart/form-data" action=""   method="post" >

            <div class="form-group">
                <input type="text"name="name" placeholder="Name"><br>
                <input type="text" name="surname" placeholder="Surname"><br>
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000" /> -->
                <input id="upload"  multiple="" name="myfile" type="file" ><br>
                <div id="preview"></div>


            </div>
            <div class="form-group">
                <label for="selectprof">Выбор проффессии:</label>
                <select class="selectprof" name="selectprof">
                    <option value="" ></option>
                    <option value="1" >бухгалтер</option>
                    <option value="2" >курьер</option>
                    <option value="3" >менеджер</option>
                </select>
            </div>
            <input type="submit" name="addBtn" value="применить">
        </form>
        
    </div>
    </div>
   <!-- IMG PREVieW -->
 
  <script>
    (function() {

      var inpElem = document.getElementById('upload'),

          divElem = document.getElementById('preview');
           inpElem.addEventListener("change", function(e) {

          preview(this.files[0]);

      });      
      function preview(file) {
        if ( file.type.match(/image.*/) ) {
          var reader = new FileReader(), img;

           

          reader.addEventListener("load", function(event) {

            img = document.createElement('img');

            img.src = event.target.result;

            divElem.appendChild(img);

          });
         reader.readAsDataURL(file);
        }     }
    })();
  </script>

</body>
</html>