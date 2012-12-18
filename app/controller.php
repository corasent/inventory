<?php 



class Controller
{
	public $load;
	public $model;

	/**
	 * Instantiates the Model and Load classes
	 */
	function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();

		$this->home();
	}

	/**
	 * Function that displays the view
	 * 
	 */
	function home()
	{
		$data = $this->model->user_info();
		$this->load->view('mainView.php', $data);
	}

	function about()
	{
		$data = $this->model->user_info();
		$this->load->view('about.php', $data);
	}

	/**
	 * function for connecting to the database
	 * 
	 */
	function db_connect()
	{
		// Requiring the configuration file that holds the config data for connection
		require 'config.php';
		try 
		{
			$conn = new PDO("mysql:host=localhost;dbname=packsave", $config['DB_USER'], $config['DB_PASS']);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
		}

		catch(PDOException $e)
		{
			echo 'ERROR: '. $e->getMessage();
		}
		
	}
}