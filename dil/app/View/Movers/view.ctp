<div class="movers view">
<h2><?php  echo __('Mover'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mover['Mover']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mover['User']['name'], array('controller' => 'users', 'action' => 'view', $mover['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mover['Mover']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mover'), array('action' => 'edit', $mover['Mover']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mover'), array('action' => 'delete', $mover['Mover']['id']), null, __('Are you sure you want to delete # %s?', $mover['Mover']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mover'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>

