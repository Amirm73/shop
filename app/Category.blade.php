<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table ='category';
    protected $fillable= ['catname', 'cat_ename', 'parent_id'];
    public $timestamps =flase;
}