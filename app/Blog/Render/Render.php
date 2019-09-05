<?php 
namespace App\Blog\Render;

use App\Blog\AbstractModel\AbstractConsumeModel;

class Render {
    
    protected $consume;

    /**
     * Pass AbstractComsumeModel instance
     *
     * @param AbstractComsumeModel $parameter
     */
    public function __construct(AbstractConsumeModel $consume) {
        $this->consume = $consume;
    }
    
    /**
     * Access methods and properties of the parameters
     *
     * @return AbstractParameterModel
     */
    public function renderResource():AbstractConsumeModel {
        return $this->consume;
    }
}