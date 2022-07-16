<?php

class Book extends product
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

    public function getAllAttributes(int $book)
    {
        $book = $this->inputs['weight'] && floatval($this->inputs['weight'] >= 0);
        $output = $this->attribute = $this->inputs['weight']. ' KG';

        return $output;
    }
}