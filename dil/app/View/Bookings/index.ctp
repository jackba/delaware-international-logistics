<div class="bookings index">
	<h2><?php echo __('Bookings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shipper_id'); ?></th>
			<th><?php echo $this->Paginator->sort('packager_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mover_id'); ?></th>
			<th><?php echo $this->Paginator->sort('send_date'); ?></th>
			<th><?php echo $this->Paginator->sort('arrival_date'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_type'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_details'); ?></th>
			<th><?php echo $this->Paginator->sort('container_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('origin_state'); ?></th>
			<th><?php echo $this->Paginator->sort('origin_port'); ?></th>
			<th><?php echo $this->Paginator->sort('destination_state'); ?></th>
			<th><?php echo $this->Paginator->sort('destination_port'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('insured'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookings as $booking): ?>
	<tr>
		<td><?php echo h($booking['Booking']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($booking['User']['username'], array('controller' => 'users', 'action' => 'view', $booking['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($booking['Shipper']['name'], array('controller' => 'shippers', 'action' => 'view', $booking['Shipper']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($booking['Packager']['name'], array('controller' => 'packagers', 'action' => 'view', $booking['Packager']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($booking['Mover']['name'], array('controller' => 'movers', 'action' => 'view', $booking['Mover']['id'])); ?>
		</td>
		<td><?php echo h($booking['Booking']['send_date']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['arrival_date']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['cargo_type']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['cargo_qty']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['cargo_details']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['container_quantity']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['origin_state']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['origin_port']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['destination_state']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['destination_port']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['insured']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $booking['Booking']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $booking['Booking']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
