<?php

class ArticleLang extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['title', 'content'];
}
