<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TasksController
{

	public function allTasks()
	{
		echo '<pre>AllTasks: ';
		var_dump(get_defined_vars());
		echo '</pre>';
	}
}
