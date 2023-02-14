<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estiloemail.css">
    </head>
    <body>
       <?php
        include 'correo.php';
        ?>
        <form method="post">
            <input type="text" placeholder="nombre" name="name" required>
            <input type="email" placeholder="email" name="email" required>
            <input type="text" placeholder="asunto" name="asunto" required>
            <textarea placeholder="mensaje" name="msg"></textarea>
            <input type="submit">
        </form>
    </body>
</html>
