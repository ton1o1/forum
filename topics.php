<?php include('libs/topics.php'); ?>
<?php include('includes/top.php'); ?>
<form method="POST" action="topics.add.php">
		ajouter un topic :<br />
		<input type="text" name="title" />
		<br />
		<input type="submit" />
</form>
<br />
<br />
<br />
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
		</tr>
	</thead>
	<tbody>
	<?= build_html_topics(include('data/topics.php')); ?>
	</tbody>
</table>
<?php include('includes/bottom.php'); ?>