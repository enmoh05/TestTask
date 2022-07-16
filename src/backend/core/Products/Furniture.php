<?php

class Furniture extends product
{
    protected $inputs;

    function __construct(array $inputs)
    {
        parent::__construct();
        $this->inputs = $inputs;

        $this->sku = $inputs['sku'];
        $this->name = $inputs['name'];
        $this->price = $inputs['price'];
        $this->type = $inputs['type'];

    }

    public function getAllAttributes(int $furniture)
    {
        $furniture = $this->inputs['height'] && is_numeric($this->inputs['width']) && is_numeric($this->inputs['length']) && floatval($this->inputs['height'] >= 0) && floatval($this->inputs['width'] >= 0) && floatval($this->inputs['length']) >= 0;   
        $output = $this->inputs['height'].'x'.$this->inputs['width'].'x'.$this->inputs['length'];
        
        return $output;
    }

        
    
};