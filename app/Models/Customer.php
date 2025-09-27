<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //to disable timestamps
    public $timestamps = false;

    // table name
    protected $table = 'customer_table';


    // primary key
    protected $primarykey = 'cust_id';

    // fillables are basically the columns that you can change edit or you can add into
    protected $fillable = [
        'cust_name',
        'cust_address'
    ]; 

}
