<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Add Booking'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('shipper_id');
		echo $this->Form->input('packager_id');
		echo $this->Form->input('mover_id');
		echo $this->Form->input('send_date');
		echo $this->Form->input('arrival_date');
		echo $this->Form->input('cargo_type');
		echo $this->Form->input('cargo_qty');
		echo $this->Form->input('cargo_details');
		echo $this->Form->input('container_quantity');
		echo $this->Form->input('origin_street');
		echo $this->Form->input('origin_city');
		echo $this->Form->input('origin_state');
		echo $this->Form->input('origin_zip');
		echo $this->Form->input('origin_country_id', array('options' => $origin_countries));
		echo $this->Form->input('origin_port');
		echo $this->Form->input('destination_street');
		echo $this->Form->input('destination_city');
		echo $this->Form->input('destination_state');
		echo $this->Form->input('destination_zip');
		echo $this->Form->input('destination_country_id', array('options' => $destination_countries));
		echo $this->Form->input('destination_port');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('insured');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
