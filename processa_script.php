<?php
    if(
        isset ($_POST["nome"]) &&
        isset ($_POST["dataNasc"]) &&
        isset ($_POST["peso"]) &&
        isset ($_POST["altura"]) &&
        isset ($_POST["sexo"]) &&
        !empty ($_POST["nome"]) &&
        !empty ($_POST["dataNasc"]) &&
        !empty ($_POST["peso"]) &&
        !empty ($_POST["altura"]) &&
        !empty ($_POST["sexo"]) &&
    ){
        //processamento dos dados
        $peso = (float) $_POST["peso"];
        $altura = (float) $_POST["altura"];

        $imc = $peso / pow ($altura, 2);

        
        

    }