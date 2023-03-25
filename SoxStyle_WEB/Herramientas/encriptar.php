<?php

#FUNCION PARA ENCRIPTAR
function encriptar($pass){
    $hash = password_hash($pass, PASSWORD_BCRYPT,['cost'=>10]);
    return $hash;
}

#FUNCION PARA VERIFICAR CONTRASEÑAS
function verificarPass($pass,$bdpass){
    if(password_verify($pass,$bdpass)){
        return true;
    }else{
        return false;
    }
}
?>