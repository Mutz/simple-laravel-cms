<?php namespace Casadepedra\Services\Validators;

class WebsiteContactFormValidator extends Validator {

	public static $rules = array(
		'nome'=>'required',
		'email'=>'required|email',
		'mensagem'=>'required'
		);
	
}