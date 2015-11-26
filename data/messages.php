<?php

$pdo = include('conf/pdo.php');

if ( !empty($_GET['page']) )
	$page = $_GET['page'];
else $page = 1;

$pageSize = 4;
$offset = ( $page - 1 ) * $pageSize;

// preparation de la requete qui sert à récupérer les messages du topic courant
$statementList = $pdo->prepare(sprintf(
	// regarder la doc de sprintf pour la signification des %1$s
	'SELECT * FROM messages WHERE topic_id = ? ORDER BY created DESC LIMIT %1$u, %2$u;',
	$offset,
	$pageSize
));
// execution de la requete avec le paramètre id.
$statementList->execute([$_GET['id']]);

// recuperer le nombre total de message du topic courant
$statementCount = $pdo->prepare('SELECT COUNT(*) as count FROM messages WHERE topic_id = ?;');

$statementCount->execute([$_GET['id']]);


//print_r($statementList->fetchAll(PDO::FETCH_ASSOC));
//print_r($statementCount->fetchAll(PDO::FETCH_ASSOC));

// récuperation des données
return [
	"list" => $statementList->fetchAll(PDO::FETCH_ASSOC),
	"total" => $statementCount->fetchAll(PDO::FETCH_ASSOC)[0]['count'],
];	
