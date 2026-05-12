<?php 
    function calcularTempoEmpresa($anofundacao, $anoAtual){
        $tempo = $anoAtual - $anofundacao;
        echo "Tempo empresa: " . $tempo . " anos";
    }
    calcularTempoEmpresa(2010, 2026);
?>