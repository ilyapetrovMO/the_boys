
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Долги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>

<script>
function validateForm(){
    var x = document.forms["dolgForm"]["dolgName"].value;
    var regex = RegExp('[\d*,\s*]');
   if (regex.test(x)){ 
    alert("В названии не должно быть цифр");
    return false;}
}
</script>
         
<div class="dolgi">
    <a href="ilyapetrov.html">На главную</a>
    <form name="dolgForm" action="dolgipost.php" method="post" style="color:#818181" onsubmit="return validateForm()">
        Долг: <input type="text" name="dolgName" required><br>
        <input type="radio" name="delorpost" value="post" checked> добавить<br>
        <input type="radio" name="delorpost" value="delete"> удалить<br>
    <input type="submit">
    </form>
</div>

  <div class="container">
      <div class="nDolg">
        <!--тут номер долгов-->
    </div>
    <div class="lDolg">
        <!-- тут долги-->
    </div>
        
  </div>
</body>
</html>
