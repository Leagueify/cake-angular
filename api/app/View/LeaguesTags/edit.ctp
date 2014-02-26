<div class="leaguesTags form">
<?php echo $this->Form->create('LeaguesTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Leagues Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('league_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LeaguesTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LeaguesTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
