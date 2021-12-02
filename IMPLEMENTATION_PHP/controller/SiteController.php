<?php

class SiteController extends Controller {
	public function index() {
		print_r(Module::findAll());
		$this->render("index");
	}
}


