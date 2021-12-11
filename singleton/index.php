<?php

$instancia = LogsSingleton::obterInstancia();

$novaInstancia = LogsSingleton::obterInstancia();

if($instancia === $novaInstancia){
    echo 'As instancias são exatamente iguais';
}