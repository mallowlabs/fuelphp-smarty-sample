{form attrs=["class"=>"form-horizontal"]}

	<fieldset>
		<div class="form-group">
			{form_label text='Name' id='name' attrs=['class'=>'control-label']}

				{form_input field='name' value={input_post index='name' default=$inquiry->name} attrs=['class' => 'col-md-4 form-control', 'placeholder'=>'Name']}

		</div>
		<div class="form-group">
			{form_label text='Email' id='email' attrs=['class'=>'control-label']}

				{form_input field='email' value={input_post index='email' default=$inquiry->email} attrs=['class' => 'col-md-4 form-control', 'placeholder'=>'Email']}

		</div>
		<div class="form-group">
			{form_label text='Body' id='body' attrs=['class'=>'control-label']}

				{form_textarea field='body' value={input_post index='body' default=$inquiry->body} attrs=['class' => 'col-md-8 form-control', 'rows' => 8,'placeholder'=>'Body']}

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			{form_submit field='submit' value='Save' attrs=['class' => 'btn btn-primary']}
		</div>
	</fieldset>
{/form}
