<?php

function display_error($field, $errors)
{ //campo a analisar
    if (empty($errors)) { //se não existir erros, se estiver vazio o 'erros', não avançará mais nada na função
        return;
    }

    if (array_key_exists($field, $errors)) { //se existe uma chave de array que se chama 'field' dentro do array dos 'errors' / se existe um campo com o nome do campo
        return '<div class="text-danger fw-bold"><small><i class="fa-regular fa-circle-xmark me-1"></i>' . $errors[$field] . '</small></div>';
    }
}
