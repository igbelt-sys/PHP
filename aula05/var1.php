<?php 
$funcionarios = 50;

echo "quanidade de funcionarios: " . $funcionarios . "<br>";

if($funcionarios < 50){
    echo "Empresa de pequeno porte";

}

elseif($funcionarios < 100 ){
    echo "Empresa de Medio porte";
}
else{
    echo "Empresa de Grande porte";
}
?>

