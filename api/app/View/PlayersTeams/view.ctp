<div class="playersTeams view">
<h2><?php echo __('Players Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playersTeam['PlayersTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playersTeam['Player']['name'], array('controller' => 'players', 'action' => 'view', $playersTeam['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playersTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $playersTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($playersTeam['PlayersTeam']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($playersTeam['PlayersTeam']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Players Team'), array('action' => 'edit', $playersTeam['PlayersTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Players Team'), array('action' => 'delete', $playersTeam['PlayersTeam']['id']), null, __('Are you sure you want to delete # %s?', $playersTeam['PlayersTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Players Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
