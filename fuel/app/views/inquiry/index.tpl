<h2>Listing <span class='muted'>Inquiries</span></h2>
<br>
{if $inquiries }
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
{foreach from=$inquiries item=item}
		<tr>
			<td>{$item->name}</td>
			<td>{$item->email}</td>
			<td>{$item->body}</td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
                        <a href='{url uri='inquiry/view'}/{$item->id}' class='btn btn-small'><i class="icon-eye-open"></i> View</a>
                        <a href='{url uri='inquiry/edit'}/{$item->id}' class='btn btn-small'><i class="icon-wrench"></i> Edit</a>
                        <a href='{url uri='inquiry/delete'}/{$item->id}' class='btn btn-small btn-danger' onclick="return confirm('Are you sure?')"><i class="icon-trash"></i> Delete</a>
					</div>
				</div>

			</td>
		</tr>
{/foreach}
	</tbody>
</table>

{else}
<p>No Inquiries.</p>

{/if}<p>
	<a href='{url uri='inquiry/create'}' class='btn btn-success'>Add new Inquiry</a>

</p>
