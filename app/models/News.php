<?php

class News extends Eloquent {
  protected $table = 'news';
	protected $guarded = array('id');
	public static $rules = array();
}
