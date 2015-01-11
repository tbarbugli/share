<?php

class Room extends \Eloquent {
	protected $guarded = ['id'];
	use GetStream\StreamLaravel\Eloquent\ActivityTrait;

	public function activityActor()
	{
		return 'global';
	}
}
