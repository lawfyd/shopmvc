<?php

include_once dirname(__FILE__) . "/../models/model_categories.php";

class Controller_Main extends Controller
{

	function action_index()
	{	
		$cateroryList = ModelCategory::getAllMainCatsWithChildren();
		print_r(dirname(__FILE__));
		die;
		$this->view->generate('main_view.php', 'template_view.php');
	}
}