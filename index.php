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
    </head>
    <body>
        <?php
        echo "Hello Ha Ha Ha";
        echo "<hr>";
        
        $arr=["PHP","HTML","JAVA","JAVASCRIPT"];
        
        print_r($arr);
        foreach ($arr as $key => $value) {
         echo $key." = ".$value."<hr>";    
        }
        ?>
    </body>
</html>
