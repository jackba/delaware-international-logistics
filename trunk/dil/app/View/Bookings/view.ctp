<div class="bookings view">
<h2><?php  echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['User']['username'], array('controller' => 'users', 'action' => 'view', $booking['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipper'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Shipper']['name'], array('controller' => 'shippers', 'action' => 'view', $booking['Shipper']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packager'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Packager']['name'], array('controller' => 'packagers', 'action' => 'view', $booking['Packager']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mover'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Mover']['name'], array('controller' => 'movers', 'action' => 'view', $booking['Mover']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Send Date'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['send_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival Date'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['arrival_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo Type'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['cargo_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo Qty'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['cargo_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo Details'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['cargo_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Container Quantity'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['container_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin Street'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin City'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin State'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin Zip'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin Country Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origin Port'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['origin_port']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination Street'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['destination_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination City'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['destination_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination State'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['destination_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination Zip'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['destination_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Country']['name'], array('controller' => 'countries', 'action' => 'view', $booking['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination Port'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['destination_port']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['insured']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
