<?php namespace App;

use Esensi\Model\Contracts\ValidatingModelInterface;
use Esensi\Model\Traits\ValidatingModelTrait;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission implements ValidatingModelInterface
{
  //METODO PARA ESPECIFICAR LAS VARIABLES QUE USARA ESTE MODELO
  use ValidatingModelTrait;

  protected $throwValidationExceptions = true;

  protected $fillable = [
    'name',
    'display_name',
    'description',
  ];

  protected $rules = [
    'name'      => 'required|unique:permissions',
  ];
}
