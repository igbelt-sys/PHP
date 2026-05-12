<?php
function classificacaoEmpresa($funcionarios) {
    if ($funcionarios < 50) {
        return "Empresa de pequeno porte";
    } else {
        return "Empresa de medio ou grande porte";
    }
}

echo classificacaoEmpresa(30) . "<br>";
echo classificacaoEmpresa(200);
?>
