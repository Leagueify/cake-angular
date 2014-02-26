<div class="leaguesTags view">
<h2><?php echo __('Leagues Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leaguesTag['LeaguesTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('League'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leaguesTag['League']['name'], array('controller' => 'leagues', 'action' => 'view', $leaguesTag['League']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leaguesTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $leaguesTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($leaguesTag['LeaguesTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($leaguesTag['LeaguesTag']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leagues Tag'), array('action' => 'edit', $leaguesTag['LeaguesTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leagues Tag'), array('action' => 'delete', $leaguesTag['LeaguesTag']['id']), null, __('Are you sure you want to delete # %s?', $leaguesTag['LeaguesTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
