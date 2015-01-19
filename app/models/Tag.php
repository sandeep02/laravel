<?php

class Tag extends \Eloquent {
	protected $fillable = [];

    public function lessons()
    {
        return $this->belongsToMany('tag');
    }
}