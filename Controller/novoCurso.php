<?php
include_once '../../../DAO/Curso.php';

$curso = new Curso();

if(isset($_POST['tipoCurso'])) {
    try {
        $curso->create();
    } catch (PDOException $e) {
        echo $e;
    }
}