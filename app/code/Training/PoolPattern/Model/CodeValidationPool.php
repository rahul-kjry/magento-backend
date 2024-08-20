<?php 

declare (strict_types=1) ;

namespace Training\PoolPattern\Model;

class CodeValidationPool 
{
    protected array $validations ;
    public function __construct(array $validations)
    {
        $this->validations= $validations; 
    }

    public function validate(string $code) : void 
    {
        foreach($this->validations as $validation){
            $validation->validate($code) ;
        }
    }
}