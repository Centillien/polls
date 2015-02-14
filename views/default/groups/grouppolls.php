<?php
/**
 * Group poll view
 *
 * @package Elggpoll_extended
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author John Mellberg <big_lizard_clyde@hotmail.com>
 * @copyright John Mellberg - 2009
 *
 */
if (polls_activated_for_group($vars['entity'])) {
?>

<div id="group_pages_widget">
<h2><?php echo elgg_echo('polls:group_polls'); ?></h2>
<?php
$limit = 4;
elgg_set_context("search");
if($polls = elgg_get_entities(array('container_guid' => elgg_get_page_owner_guid(), 'type' => 'object', 'subtypes'=> poll))) {
	foreach($polls as $pollpost){
		echo elgg_view("polls/widget", array('entity' => $pollpost));
	}	
} else{
  echo elgg_view('page_elements/contentwrapper',array('body'=>elgg_echo("group:polls:empty")));
}

?></div>
<?php } ?>
