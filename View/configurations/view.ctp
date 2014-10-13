<div class="configurations view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Configuration'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Configuration'), array('action' => 'edit', $configuration['Configuration']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Configuration'), array('action' => 'delete', $configuration['Configuration']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $configuration['Configuration']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Configurations'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Configuration'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($configuration['Configuration']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($configuration['Configuration']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Value'); ?></th>
		<td>
			<?php echo h($configuration['Configuration']['value']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

