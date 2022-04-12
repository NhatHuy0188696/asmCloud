
<?php
require_once './database/dbhelper.php';
require_once './database/utiliti.php';


  $_name = '';
  $_email = '';
  $_number ='';
 
  if(!empty($_POST))
  {
  
     
         $_name = $_POST['name'];
         $_email = $_POST['email'];
         $_number = $_POST['number'];
         $_TenDuAn = $_POST['TenDuAn'];
         $_ViTri = $_POST['ViTri'];
         $sql = "INSERT INTO `custome`(name,email,number,tenduan,vitri) values('$_name','$_email','$_number', '$_TenDuAn', '$_ViTri' )";
         execute($sql);
         header('Location:index.php');
         die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/font-awesome-6-pro-main/css/all.css">
    <link rel="stylesheet" href="./assets/fontawesome-pro-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
      
       <?php
       include './layout/container.php';
       ?>
         <?php
       include './layout/content.php';
       ?>
        <?php
       include './layout/footer.php';
         ?>
    
        
       
    </div>
    <?php
       include './layout/modal.php';
         ?>
    
</body>
</html>


<script src="./assets/app.js"></script>
<script>
 validator({ 

form: '#form-1',

errorSelect:'.message',
formGroupSelector:'.quote-form--control',
rules:[
  validator.isRequired('.quote-name','vui lòng nhập tên đầy đủ của bạn'),
  validator.isRequired('.quote-email'),
  validator.isRequired('.quote-phone'),
  validator.isRequired('.TenDuAn'),
  validator.isRequired('.ViTri'),
],

});
</script>
<script>
 validator({ 

form: '#form-2',

errorSelect:'.message',
formGroupSelector:'.quote-form--control',
rules:[
  validator.isRequired('.quote-name','vui lòng nhập tên đầy đủ của bạn'),
  validator.isRequired('.quote-email'),
  validator.isRequired('.quote-phone'),
  validator.isRequired('.TenDuAn'),
  validator.isRequired('.ViTri'),
],


});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>