<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable=['cat_name','cat_ename','parent_id','img'];
    public $timestamps=false;
    public function getChild()
    {
        return $this->hasMany(Cat::class, 'parent_id','id');
    }
    public static function get_cat_list()//is static to call without object
    {
        $cat_list=array();
        $cat=Cat::where('parent_id',0)->get();//begin from root
        foreach($cat as $key=>$value)
        {
            $cat_list[$value->id]=$value->cat_name;//id column is array key
            foreach($value->getChild as $key2=>$value2)
            {
                $cat_list[$value2->id]=' - '.$value2->cat_name;
                foreach($value2->getChild as $key3=>$value3)
                {
                    $cat_list[$value3->id]=' -- '.$value3->cat_name;
                }
            }
        }
        return $cat_list;
    }
}