<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Pin extends \Eloquent {
    use GetStream\StreamLaravel\Eloquent\ActivityTrait;
    use SoftDeletingTrait;

    protected $table = 'pins';

    public function author()
    {
        return $this->belongsTo('User');
    }

    public function activityActorMethodName()
    {
        return 'author';
    }
}