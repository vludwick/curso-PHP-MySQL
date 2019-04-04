<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "curso_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "select * from cursos";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "select * from alunos";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "select alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
         from alunos, cursos, alunos_cursos
         where alunos_cursos.id_aluno = alunos.id_aluno
         and alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);