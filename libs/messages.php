<?php

function build_html_messages ( $messages ) {
	$messages_html = "";
// parcours des element du tableau
	foreach ( $messages as $message ) {
		$messages_html .= sprintf('<tr>
			<td>%4$s</td>
			<td>%1$s</td>
			<td>%2$s</td>
			<td>%3$s</td>
		</tr>', $message['creator_id'], $message['created'], $message['message'], $message['id']);
	}
	return $messages_html;
}