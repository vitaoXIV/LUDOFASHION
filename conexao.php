<?php

require_once 'config.php';

class Conexao{
    public static function conectar(){
        $conexao = new PDO(DRIVE . ":host=" . BANCO_LOCAL . "dbname=" . BANCO_NOME . ";charset=". CHARSET, USUARIO, SENHA);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /*opcional*/
        return $conexao;
    }
}