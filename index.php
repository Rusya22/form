<?php 
//include_once ("bd.php");

//if(isset($_GET['submit'])){
//include ("bd.php");
//echo 
//$user_name=$_GET['user_name'];
//$name=$_GET['name'];
//$email=$_GET['email'];
//$other_info=$_GET['other_info'];
//$file=$_GET['file'];
//$date=$_GET['date'];
//$id = id();

 //подключаемся к базе
            
            // проверка на существование заказа
       //     $result = mysql_query ("SELECT * FROM user WHERE    id='$id'",$db);
           // $myrow = mysql_fetch_array($result);
          //  if (!empty($myrow['user_name'])) {
		//		echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");	
         //   }           
			
			///    если такого нет, то сохраняем данные
        //  $result2 = mysql_query ("INSERT INTO user (id,user_name,name,email,other_info,file,date)   
		//  VALUES ('$id','$user_name','$name','$email','$other_info','$file','$date'",$db);
        // include ("bd.php");
		// $result3 = mysql_query ("INSERT INTO user (id) VALUES ('$id','$id')",$db);
		  //    Проверяем, есть ли ошибки

//}else{


//echo
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">	
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<!--<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
					locale: 'ru',
					format: 'DD/MM/YYYY'
				});
				 console.log('#foo\bar')  ;
				  $('#ras').on('click', function () { 
    $(this).button('nonono') // button text will be "finished!"
  })
            });
        </script>
		<script>
		function onFileSelect(e) {
  var 
    f = e.target.files[0], // Первый выбранный файл
    reader = new FileReader,
    place = document.getElementById("img") // Сюда покажем картинку
  ;
  reader.readAsDataURL(f);
  reader.onload = function(e) { // Как только картинка загрузится
    place.src = e.target.result;
  }
}
 
if(window.File && window.FileReader && window.FileList && window.Blob) {
  document.querySelector("input[type=file]").addEventListener("change", onFileSelect, false);
} else {
  console.warn( "Ваш браузер не поддерживает FileAPI")
}
</script>-->

  </head>
  <body>
    
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="glyphicon glyphicon-user"></i> Форма</div>
					<div class="panel-body">
						<form method="post" action="save.php">
						<div class="row">
							<div class="col-md-4">
                                <div class="thumbnail">
                                    <img id="previewImg" />
                                    <input type="file" onchange="preview(this.value)" />

                                    <P>
                                </div>
								  <div class="form-group">
									<label for="user_name">Никнейм</label>
									<input type="text" name="user_name" class="form-control" id="user_name" placeholder="">
								  </div>
								  <div class="form-group">
									<label for="name">Имя</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="">
								  </div>
								  <div class="form-group">
									<label for="date">Дата</label>
										<div class='input-group date' id='datetimepicker1'>
											<input type='date' name="date" class="form-control" />
										</div>
								  </div>
									<div class="clearfix"></div>
									<br/>
							</div>
							<div class="col-md-5">

                                <div class="form-group hidden-xs">
                                    <label for="other_info">Текст</label>
                                    <textarea class="form-control" rows="3"  id="other_info"name="other_info"></textarea>
                                </div>
								<div class="clearfix"></div>
								<div style="height: 15px;"></div>
								<div class="col-xs-6" id="no_padding">
										<label for="email">E-mail</label>
										<input type="email" name="e-mail" class="form-control" id="email" placeholder="">
									</div>
								<div class="form-group">
								</div>

								<div class="btn-group" data-toggle="buttons">

</div>


							</div>

					<hr/>
					<div class="row">
							<div class="col-md-12" id="form_bottom"> 
								<div class="text-center">
								    <button  type="submit" class="select btn btn-primary">Отправить </button> 
								  <INPUT TYPE=RESET class="btn btn-primary">
								</div>
							</div>
					</div>
					</form>
				</div>	
			</div>
		</div>	
	</div>
	
  </body>
</html>