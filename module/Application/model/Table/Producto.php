<?php

namespace Application\Model\Table;

use Zend\Db\Sql\Sql;
use Zend\Db\TableGateway;


class ProductoTable extends TableGateway
{

    const TABLA_PRODUCTO = 'product';

    public function getProduct($offset=0,$limit=1000)
    {
        var_dump($this->getAdapter());
        exit();
        $sql = new Sql($this->getAdapter());

        $select = $sql->select()
            ->from(array('P' => self::TABLA_PRODUCTO), array('name'))
            ->offset($offset)
            ->limit($limit);
        

        $result = $this->fetchRow($select);
        return $result;
    }
    
    protected function getAdapter() {
        return $this->adapter;
    }
    
    private function setAdapter($adapter){
        $this->adapter = $adapter;
    }

}


