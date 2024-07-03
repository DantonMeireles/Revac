<?php
$sql = $conn->prepare('INSERT INTO ArtigosSubmetidos(nm_artigo,ds_artigo, nm_autores, nm_orientadores,nm_colaboradores, ds_caminho, dt_submissão, nome_subarea, id_usuario) VALUES(?,?,?,?,?,?,?,?,?)');
$sql->execute(array(?, ?, ?, ?, ?, ?, ?, ?, ?));