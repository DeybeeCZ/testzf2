<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;

class Product {

    public $id;
    public $storeId;
    public $name;
    public $description;
    public $status;
    public $dateAdd;
    public $dateUpdate;

    public function exchangeArray($data) {
        $this->id = (!empty($data['id']))?$data['id']:null;
        $this->storeId = (!empty($data['storeId']))?$data['storeId']:null;
        $this->name = (!empty($data['name']))?$data['name']:null;
        $this->description = (!empty($data['description']))?$data['description']:null;
        $this->status = (!empty($data['status']))?$data['status']:null;
        $this->dateAdd = (!empty($data['dateAdd']))?$data['dateAdd']:null;
        $this->dateUpdate = (!empty($data['dateUpdate']))?$data['dateUpdate']:null;
    }

}
