<?php

    include("conexao.php");

    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    $cep = filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_GET, 'tel', FILTER_SANITIZE_NUMBER_INT);
    $cel = filter_input(INPUT_GET, 'cel', FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_STRING);
    $g_h = filter_input(INPUT_GET, 'g_h', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $bairro = filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_STRING);
    $comp = filter_input(INPUT_GET, 'comp', FILTER_SANITIZE_STRING);

    $cadas_client = "INSERT INTO gestao_hotel (nome, cpf, email, cep, cidade, telefone, celular, endereco, g_de_hosp, numero, bairro, estado,complemento)
    VALUES ('$nome', $cpf, '$email', $cep, '$cidade', $tel, $cel, '$endereco', $g_h, $numero, '$bairro', '$estado', 'comp')";

    $dados_user = mysqli_query($mysqli, $cadas_client);

    $nome_f = filter_input(INPUT_GET, 'nome_func', FILTER_SANITIZE_STRING);
    $cpf_f = filter_input(INPUT_GET, 'cpf_func', FILTER_SANITIZE_NUMBER_INT);
    $email_f = filter_input(INPUT_GET, 'email_func', FILTER_SANITIZE_EMAIL);
    $cep_f = filter_input(INPUT_GET, 'cep_func', FILTER_SANITIZE_NUMBER_INT);
    $cidade_f = filter_input(INPUT_GET, 'cidade_func', FILTER_SANITIZE_STRING);
    $tel_f = filter_input(INPUT_GET, 'tel_func', FILTER_SANITIZE_NUMBER_INT);
    $cel_f = filter_input(INPUT_GET, 'cel_func', FILTER_SANITIZE_NUMBER_INT);
    $endereco_f = filter_input(INPUT_GET, 'endereco_func', FILTER_SANITIZE_STRING);
    $g_h_f = filter_input(INPUT_GET, 'g_func', FILTER_SANITIZE_STRING);
    $numero_f = filter_input(INPUT_GET, 'numero_func', FILTER_SANITIZE_NUMBER_INT);
    $bairro_f = filter_input(INPUT_GET, 'bairro_func', FILTER_SANITIZE_STRING);
    $estado_f = filter_input(INPUT_GET, 'estado_func', FILTER_SANITIZE_STRING); 
    $comp_f = filter_input(INPUT_GET, 'comp_func', FILTER_SANITIZE_STRING);
    $pis = filter_input(INPUT_GET, 'pis', FILTER_SANITIZE_NUMBER_INT);
    $salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_NUMBER_FLOAT);

    $cadas_func = "INSERT INTO gestao_hotel (nome, cpf, email, cep, cidade, telefone, celular, endereco, grupo_func, numero, bairro, estado, complemento, pis, salario)
    VALUES ('$nome_f', $cpf_f, '$email_f', $cep_f, '$cidade_f', $tel_f, $cel_f, '$endereco_f', $g_h_f, $numero_f, '$bairro_f', '$estado_f', '$comp_f', $pis, $salario )";

    $dados_func = mysqli_query($mysqli, $cadas_func);
?>