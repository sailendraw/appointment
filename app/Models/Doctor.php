<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Entities\Doctors as DoctorModel;


/**
 * Class Doctor
 * @package App
 */
class Doctor extends Model
{
    public $doctorModel;

    public function __construct(){
//        DoctorModel $doctorModel;
//        $this->doctorModel = $doctorModel;
         $this->doctorModel = new DoctorModel();

    }

    public function saveDoctor($formDetails)
    {
        try {
            $doctorModel = $this->doctorModel->fill($formDetails);

            if (!$this->doctorModel->save()) {
                throw new ModelNotSavedException(get_class($doctorModel));
            }

            return $doctorModel;

        } catch (Exception $exception) {

        }
    }

        /**
         * {@inheritdoc}
         */
        public function findWithDetail($id)
    {
        return $this->doctorModel->findOrFail($id);
    }
    public function updateDoctor($id, array $doctorModelDetails)
    {

        $doctorModel = $this->doctorModel->findOrFail($id);

        if (!$doctorModel->update($doctorModelDetails)) {
            throw new ModelNotUpdatedException(get_class($doctorModel));
        }

        return $doctorModel;
    }

    public function getAll()
    {
        return $this->doctorModel->all();
    }

}
