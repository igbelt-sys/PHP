<?php
session_start();

// Recupera o tema salvo no cookie.
$tema = $_COOKIE['tema_s10'] ?? 'claro';
if ($tema !== 'azul') {
    $tema = 'claro';
}

// Prepara os dados usados pelas duas páginas.
$nomeSalvo = $_SESSION['nome'] ?? '';
$classeTema = $tema === 'azul' ? 'tema-azul' : 'tema-claro';
$temaTexto = $tema === 'azul' ? 'Azul' : 'Claro';
