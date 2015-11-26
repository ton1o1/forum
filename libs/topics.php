<?php

function build_html_topics ( $topics ) {

	$topics_html = '';
	foreach ( $topics as $topic )
		$topics_html .= sprintf(
			'<tr><td>%1$s</td><td><a href="messages.php?id=%1$s">%2$s</a></td></tr>',
			$topic['id'],
			htmlentities($topic['title'])
		);
	return $topics_html;
}