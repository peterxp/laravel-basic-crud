<?php
Use LaravelBook\Ardent\Ardent;

/**
 * @property string password_confirmation
 */
class User extends Ardent implements UserInterface, RemindableInterface {
	protected $guarded = array();
    /*
     * Ardent validation rules
     */
	public static $rules = array(
        'name' => 'required|between:4,15',
        'email'=> 'required|email',
        'password'=> 'required|alpha_num|min:8|confirmed',
        'password'=> 'required|alpha_num|min:8'
    );

    /*
     * Factory
     */
}
