<?php
use Polyglot\Polyglot;

class ArticleLang extends Polyglot
{
    public $timestamps = false;
    protected $fillable = ['title', 'content'];
}
