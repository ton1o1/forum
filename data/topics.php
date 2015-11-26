<?php

$pdo = include('conf/pdo.php');
return $pdo
		->query('SELECT * FROM topics;')
		->fetchAll(PDO::FETCH_ASSOC);
