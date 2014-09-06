<?php
class Controller_Inquiry extends Controller_Template
{

	public function action_index()
	{
		$data['inquiries'] = Model_Inquiry::find('all');
		$this->template->title = "Inquiries";
		$this->template->content = View::forge('inquiry/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('inquiry');

		if ( ! $data['inquiry'] = Model_Inquiry::find($id))
		{
			Session::set_flash('error', 'Could not find inquiry #'.$id);
			Response::redirect('inquiry');
		}

		$this->template->title = "Inquiry";
		$this->template->content = View::forge('inquiry/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Inquiry::validate('create');

			if ($val->run())
			{
				$inquiry = Model_Inquiry::forge(array(
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'body' => Input::post('body'),
				));

				if ($inquiry and $inquiry->save())
				{
					Session::set_flash('success', 'Added inquiry #'.$inquiry->id.'.');

					Response::redirect('inquiry');
				}

				else
				{
					Session::set_flash('error', 'Could not save inquiry.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Inquiries";
		$this->template->content = View::forge('inquiry/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('inquiry');

		if ( ! $inquiry = Model_Inquiry::find($id))
		{
			Session::set_flash('error', 'Could not find inquiry #'.$id);
			Response::redirect('inquiry');
		}

		$val = Model_Inquiry::validate('edit');

		if ($val->run())
		{
			$inquiry->name = Input::post('name');
			$inquiry->email = Input::post('email');
			$inquiry->body = Input::post('body');

			if ($inquiry->save())
			{
				Session::set_flash('success', 'Updated inquiry #' . $id);

				Response::redirect('inquiry');
			}

			else
			{
				Session::set_flash('error', 'Could not update inquiry #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$inquiry->name = $val->validated('name');
				$inquiry->email = $val->validated('email');
				$inquiry->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('inquiry', $inquiry, false);
		}

		$this->template->title = "Inquiries";
		$this->template->content = View::forge('inquiry/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('inquiry');

		if ($inquiry = Model_Inquiry::find($id))
		{
			$inquiry->delete();

			Session::set_flash('success', 'Deleted inquiry #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete inquiry #'.$id);
		}

		Response::redirect('inquiry');

	}

}
