<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalPractice extends Model {

    protected $table = 'medical_practices';
    protected $guarded = [];

    public function medicalpractice()
    {
        return $this->hasMany('App\MedicalPractice');
    }

}
