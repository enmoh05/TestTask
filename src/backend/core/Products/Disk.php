<?php

class Disk extends product
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
    public function getAllAttributes(int $rows)
    {
        $rows = $this->inputs['size'] && floatval($this->inputs['size'] >= 0);
        $output = $this->attribute = $this->inputs['size'].' MB';

        return $output;
    }
};