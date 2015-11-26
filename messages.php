<?php include('libs/messages.php'); ?>
<?php include('includes/top.php'); ?>
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>creator</th>
			<th>date</th>
			<th>message</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$messages = include('data/messages.php');
		echo build_html_messages($messages['list']);
		?>
	</tbody>
</table>

<?php if ( $page > 1 ) { ?>
<a href="messages.php?id=<?=$_GET['id']?>&page=<?=$page - 1?>">precedent</a>
<?php } ?>
--

<?php if ( $page * $pageSize < $messages['total'] ) { ?>
<a href="messages.php?id=<?=$_GET['id']?>&page=<?=$page + 1?>">suivant</a>
<?php } ?>


<?php include('includes/bottom.php'); ?>