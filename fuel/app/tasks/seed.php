<?php

namespace Fuel\Tasks;

class Seed
{

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r seed
	 *
	 * @return string
	 */
	public function run($model_name = null)
	{
		echo "\n===========================================";
		echo "\nRunning DEFAULT task [Seed:Run]";
		echo "\n-------------------------------------------\n\n";

		if ($model_name) {
			echo "Importing $model_name...\n";
			include(APPPATH.'seeds'.DS.$model_name.'.php');
			echo "$model_name imported.\n";
		}
		else {
			echo "Please specify a model name.\n";
		}
	}



	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r seed:all "arguments"
	 *
	 * @return string
	 */
	public function all()
	{
		echo "\n===========================================";
		echo "\nRunning task [Seed:All]";
		echo "\n-------------------------------------------\n\n";

		echo "Importing all seeds...\n";
		foreach (\File::read_dir(APPPATH.'seeds') as $file) {
			include(APPPATH.'seeds'.DS.$file);
		}
		echo "All seed imported.\n";
	}

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 * php oil r seed:reset "arguments"
	 *
	 * @return string
	 */
	public function reset($model_name = null)
	{
		echo "\n===========================================";
		echo "\nRunning task [Seed:Reset]";
		echo "\n-------------------------------------------\n\n";

		if ($model_name)
		{
			\DBUtil::truncate_table(\Inflector::pluralize($model_name));

			echo "All records on model $model_name successfully reset.\n";
		}
		else {
			echo "Please specify a model name.\n";
		}
	}

}
/* End of file tasks/seed.php */
