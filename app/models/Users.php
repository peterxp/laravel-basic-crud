<?php

class User extends Eloquent {
  protected $table = 'users';
	protected $guarded = array('id');
	public static $rules = array();
}
