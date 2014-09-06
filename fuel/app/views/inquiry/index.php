<h2>Listing <span class='muted'>Inquiries</span></h2>
<br>
<?php if ($inquiries): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Body</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($inquiries as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->body; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('inquiry/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('inquiry/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('inquiry/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Inquiries.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('inquiry/create', 'Add new Inquiry', array('class' => 'btn btn-success')); ?>

</p>
