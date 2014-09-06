<h2>Viewing <span class='muted'>#{$inquiry->id}</span></h2>

<p>
	<strong>Name:</strong>
	{$inquiry->name}</p>
<p>
	<strong>Email:</strong>
	{$inquiry->email}</p>
<p>
	<strong>Body:</strong>
	{$inquiry->body}</p>

<a href='{url uri='inquiry/edit/'}/{$inquiry->id}}'>Edit</a> |
<a href='{url uri='inquiry'}'>Back
