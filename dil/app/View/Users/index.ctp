<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('question1'); ?></th>
			<th><?php echo $this->Paginator->sort('answer1'); ?></th>
			<th><?php echo $this->Paginator->sort('question2'); ?></th>
			<th><?php echo $this->Paginator->sort('answer2'); ?></th>
			<th><?php echo $this->Paginator->sort('question3'); ?></th>
			<th><?php echo $this->Paginator->sort('answer3'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['question1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['answer1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['question2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['answer2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['question3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['answer3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['street']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['country']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movers'), array('controller' => 'movers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mover'), array('controller' => 'movers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packagers'), array('controller' => 'packagers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packager'), array('controller' => 'packagers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippers'), array('controller' => 'shippers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipper'), array('controller' => 'shippers', 'action' => 'add')); ?> </li>
	</ul>
</div>
