<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{$title}</title>
	{asset_css refs='bootstrap.css'}
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h1>{$title}</h1>
			<hr>
{if Session::get_flash('success') }
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				{implode('</p><p>', e((array) Session::get_flash('success')))}
				</p>
			</div>
{/if}
{if Session::get_flash('error') }
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				{implode('</p><p>', e((array) Session::get_flash('error')))}
				</p>
			</div>
{/if}
		</div>
		<div class="col-md-12">
{$content}
		</div>
		<footer>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: {fuel_version}</small>
			</p>
		</footer>
	</div>
</body>
</html>
