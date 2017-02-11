<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model {

	protected $table = 'modal';

	protected $fillable = ['id', 'title', 'intro', 'content', 'image', 'active'];

	public $timestamps = false;

}
