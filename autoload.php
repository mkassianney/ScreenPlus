<?php

spl_autoload_register(function (string $className){
    $caminho = str_replace('ScreenMatch', '\src', $className) . '.php';
    $caminhoCompleto = __DIR__ . $caminho;

    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    } else {
        echo "Arquivo não pode ser lido ou não existe.\n";
    }
   
});
