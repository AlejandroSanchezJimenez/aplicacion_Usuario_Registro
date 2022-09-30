<?php

function validaContraseña ($contraseña) {
    $validador=True;
    if (empty($usuario)) {
        if (strlen($contraseña)>4) {
            if (empty($usuario)) {
                $validador=False;
            }
        }
    }
}

function validadUsuario ($usuario) {
    $validador=True;
    if (strlen($usuario)>10) {
        if (empty($usuario)) {
            $validador=False;
        }
    }
}

?>
