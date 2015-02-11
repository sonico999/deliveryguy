<?php
namespace domain\delivery\NotiCompany;

class NotiCompany extends \Eloquent
{
    protected $fillable = [];
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $hidden = array('created_at', 'updated_at', 'deleted_at');
}