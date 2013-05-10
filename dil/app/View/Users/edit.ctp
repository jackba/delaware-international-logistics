<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
// 		echo $this->Form->input('password');
		echo $this->Form->input('question1');
		echo $this->Form->input('answer1');
		echo $this->Form->input('question2');
		echo $this->Form->input('answer2');
		echo $this->Form->input('question3');
		echo $this->Form->input('answer3');
		echo $this->Form->input('name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('country_id');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movers'), array('controller' => 'movers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packagers'), array('controller' => 'packagers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippers'), array('controller' => 'shippers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>
