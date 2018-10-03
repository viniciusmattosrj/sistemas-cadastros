<?php

include_once 'conexao.php';

$nome     = filter_input(INPUT_POST, 'nome',     FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email',    FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

$querySelect  = $link->query("SELECT email FROM tb_clientes");
$array_emails = [];

