<?php

//Retorna la url del proyecto

function base_url()
{
    return BASE_URL;
}

//Returno a los assets
function media()
{
    return BASE_URL."Assets/";
}


//Muestra los objetos o array de forma formateada
function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('<pre>');
    return $format;
}

//Eliminar exceso de espacios entre palabras, evita scripts e inyecciones SQL
function strClean($strCadena)
{
    $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena); //Elimina los espacios entre palabras
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); //Elimina las \ invertidas
    $string = str_ireplace("<script>", "", $string); //Evita scripts de js dejandolo vacío
    $string = str_ireplace("</script>", "", $string);//Evita scripts de js
    $string = str_ireplace("<script src>", "", $string);
    $string = str_ireplace("<script type=>", "", $string);
    $string = str_ireplace("SELECT * FROM", "", $string);
    $string = str_ireplace("DELETE FROM", "", $string);
    $string = str_ireplace("INSERT INTO", "", $string);
    $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
    $string = str_ireplace("DROP TABLE", "", $string);
    $string = str_ireplace("OR '1'='1", "", $string);
    $string = str_ireplace('OR "1"="1"', "", $string);
    $string = str_ireplace('OR ´1´=´1´', "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("LIKE '", "", $string);
    $string = str_ireplace('LIKE "', "", $string);
    $string = str_ireplace("LIKE ´", "", $string);
    $string = str_ireplace("OR 'a'='a", "", $string);
    $string = str_ireplace('OR "a"="a', "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("--", "", $string);
    $string = str_ireplace("^", "", $string);
    $string = str_ireplace("[", "", $string);
    $string = str_ireplace("]", "", $string);
    $string = str_ireplace("==", "", $string);
    return $string;
}

 //Genera una contraseña de 10 caracteres que será enviado a su correo, por con los caracteres de la variable cadena
 function passGenerator($length = 10)
 {
     $pass = "";
     $longitudPass=$length;
     $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
     $longitudCadena=strlen($cadena);

     for($i=1; $i<=$longitudPass; $i++)
     {
         $pos = rand(0,$longitudCadena-1);
         $pass.= substr($cadena,$pos,1); //El punto almacena
     }
     return $pass;  
 }
 //Genera un token
 function token()
 {
     $r1 = bin2hex(random_bytes(10));
     $r2 = bin2hex(random_bytes(10));
     $r3 = bin2hex(random_bytes(10));
     $r4 = bin2hex(random_bytes(10));
     $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
     return $token;
 }
 //Formato para valores monetarios
 function formatMoney($cantidad){
     $cantidad = number_format($cantidad,2,SPD,SPM);
     return $cantidad;
 }
