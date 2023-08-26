<?php
$cidades = "Bento Gonçalves,Garibaldi,caixias do Sul,Ferroupilha,Barão";
$lista = explode("," $cidades);
foreach($lista as $l){
    echo $l."<br>";

}
$outras[] = "Salvador do Sul";
$outras[] = "Cotiporã";
$junta = array_merge($lista, $outras);
foreach($junta as $j){
    echo $j,"<br>";
}
echo count($junta)."<br>";
sort($junta);
$chave = array_search("Ferroupilha",$junta);
echo 4chave."<br>";
$tem = in_array("Cotiporã", $junta);
echo $tem."<br>";
?>