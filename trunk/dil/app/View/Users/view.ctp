<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question1'); ?></dt>
		<dd>
			<?php echo h($user['User']['question1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer1'); ?></dt>
		<dd>
			<?php echo h($user['User']['answer1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question2'); ?></dt>
		<dd>
			<?php echo h($user['User']['question2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer2'); ?></dt>
		<dd>
			<?php echo h($user['User']['answer2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question3'); ?></dt>
		<dd>
			<?php echo h($user['User']['question3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer3'); ?></dt>
		<dd>
			<?php echo h($user['User']['answer3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($user['User']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($user['User']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($user['User']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movers'), array('controller' => 'movers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packagers'), array('controller' => 'packagers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippers'), array('controller' => 'shippers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($user['Booking'])): ?>
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
		foreach ($user['Booking'] as $booking): ?>
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
<div class="related">
	<h3><?php echo __('Related Movers'); ?></h3>
	<?php if (!empty($user['Mover'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Mover'] as $mover): ?>
		<tr>
			<td><?php echo $mover['id']; ?></td>
			<td><?php echo $mover['user_id']; ?></td>
			<td><?php echo $mover['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movers', 'action' => 'view', $mover['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movers', 'action' => 'edit', $mover['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movers', 'action' => 'delete', $mover['id']), null, __('Are you sure you want to delete # %s?', $mover['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mover'), array('controller' => 'movers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Packagers'); ?></h3>
	<?php if (!empty($user['Packager'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Packager'] as $packager): ?>
		<tr>
			<td><?php echo $packager['id']; ?></td>
			<td><?php echo $packager['user_id']; ?></td>
			<td><?php echo $packager['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'packagers', 'action' => 'view', $packager['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'packagers', 'action' => 'edit', $packager['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'packagers', 'action' => 'delete', $packager['id']), null, __('Are you sure you want to delete # %s?', $packager['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Packager'), array('controller' => 'packagers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shippers'); ?></h3>
	<?php if (!empty($user['Shipper'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Shipper'] as $shipper): ?>
		<tr>
			<td><?php echo $shipper['id']; ?></td>
			<td><?php echo $shipper['user_id']; ?></td>
			<td><?php echo $shipper['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shippers', 'action' => 'view', $shipper['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shippers', 'action' => 'edit', $shipper['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shippers', 'action' => 'delete', $shipper['id']), null, __('Are you sure you want to delete # %s?', $shipper['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shipper'), array('controller' => 'shippers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
