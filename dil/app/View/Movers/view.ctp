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
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($mover['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Shipper Id'); ?></th>
		<th><?php echo __('Packager Id'); ?></th>
		<th><?php echo __('Mover Id'); ?></th>
		<th><?php echo __('Send Date'); ?></th>
		<th><?php echo __('Arrival Date'); ?></th>
		<th><?php echo __('Cargo Type'); ?></th>
		<th><?php echo __('Cargo Qty'); ?></th>
		<th><?php echo __('Cargo Details'); ?></th>
		<th><?php echo __('Container Quantity'); ?></th>
		<th><?php echo __('Origin Street'); ?></th>
		<th><?php echo __('Origin City'); ?></th>
		<th><?php echo __('Origin State'); ?></th>
		<th><?php echo __('Origin Zip'); ?></th>
		<th><?php echo __('Origin Country Id'); ?></th>
		<th><?php echo __('Origin Port'); ?></th>
		<th><?php echo __('Destination Street'); ?></th>
		<th><?php echo __('Destination City'); ?></th>
		<th><?php echo __('Destination State'); ?></th>
		<th><?php echo __('Destination Zip'); ?></th>
		<th><?php echo __('Destination Country Id'); ?></th>
		<th><?php echo __('Destination Port'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Insured'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mover['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['user_id']; ?></td>
			<td><?php echo $booking['shipper_id']; ?></td>
			<td><?php echo $booking['packager_id']; ?></td>
			<td><?php echo $booking['mover_id']; ?></td>
			<td><?php echo $booking['send_date']; ?></td>
			<td><?php echo $booking['arrival_date']; ?></td>
			<td><?php echo $booking['cargo_type']; ?></td>
			<td><?php echo $booking['cargo_qty']; ?></td>
			<td><?php echo $booking['cargo_details']; ?></td>
			<td><?php echo $booking['container_quantity']; ?></td>
			<td><?php echo $booking['origin_street']; ?></td>
			<td><?php echo $booking['origin_city']; ?></td>
			<td><?php echo $booking['origin_state']; ?></td>
			<td><?php echo $booking['origin_zip']; ?></td>
			<td><?php echo $booking['origin_country_id']; ?></td>
			<td><?php echo $booking['origin_port']; ?></td>
			<td><?php echo $booking['destination_street']; ?></td>
			<td><?php echo $booking['destination_city']; ?></td>
			<td><?php echo $booking['destination_state']; ?></td>
			<td><?php echo $booking['destination_zip']; ?></td>
			<td><?php echo $booking['destination_country_id']; ?></td>
			<td><?php echo $booking['destination_port']; ?></td>
			<td><?php echo $booking['payment_method']; ?></td>
			<td><?php echo $booking['insured']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), null, __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
