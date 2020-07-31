<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
    ////  //// 指定表明
    protected $table="p_category";
    // 指定主键id
    protected $primaryKey="cat_id";
    // 关闭时间chuo1
    public $timestamps = false;
}
