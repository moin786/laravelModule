<?php 
namespace App\Blog\Render;

use App\grubapi\AbstractModel\AbstractComsumeModel;

class Render {
    
    protected $consume;

    /**
     * Pass AbstractComsumeModel instance
     *
     * @param AbstractComsumeModel $parameter
     */
    public function __construct(AbstractComsumeModel $consume) {
        $this->consume = $consume;
    }
    
    /**
     * Access methods and properties of the parameters
     *
     * @return AbstractParameterModel
     */
    public function resourceRender():AbstractComsumeModel {
        return $this->consume;
    }
}