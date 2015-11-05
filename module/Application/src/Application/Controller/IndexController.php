<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter as DbAdapter;
use Application\Model\Table\ProductoTable as ProductoTable;

class IndexController extends AbstractActionController {
    
    protected $productTable;

    public function indexAction() {
        return new ViewModel();
    }

    public function productAction() {

        
        var_dump($this->getProductTable());
        exit();

        $product = array(
            array('name' => 'Nombre 1'),
            array('name' => 'Nombre 2'),
            array('name' => 'Nombre 3'),
            array('name' => 'Nombre 4'),
        );
        return new ViewModel(array('product' => $product));
    }
    
     public function getProductTable()
     {
         if (!$this->productTable) {
             $sm = $this->getServiceLocator();
             $this->productTable = $sm->get('Application\Model\ProductTable');
         }
         return $this->productTable;
     }

}
