<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBuy extends Model {

	protected $table = 'product_buys';

	protected $fillable = ['product_id', 'quantity', 'buy_day'];

	public $timestamps = false;
}
