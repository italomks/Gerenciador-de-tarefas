<?php

include "config.php"; // Esta é a nova linha
include "banco.php";
remover_tarefa($conexao, $_GET['id']);
header('Location: tarefas.php');