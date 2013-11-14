<div class="taskLists form">
<?php echo $this->Form->create('TaskList'); ?>
	<fieldset>
		<legend><?php echo __('Edit Task List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TaskList.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TaskList.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Task Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
