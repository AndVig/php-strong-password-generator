<?php
function generatePassword($lungezza){
    $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $pw='';
    for ($i=0; $i<$lungezza; $i++ ){
        $pw.=$chars[rand(0,strlen($chars)-1)];
    }
    return $pw;
}
?>