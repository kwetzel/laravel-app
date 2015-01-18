<?php

class Post extends \Eloquent {

	protected $guarded = [];

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'body' => 'required'
	];

	// Don't forget to fill this array
	#protected $fillable = [];

}