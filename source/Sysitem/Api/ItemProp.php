<?php
namespace Sysitem\Api;
use Core\FactoryManager;
use Core\IApi;
require(ROOT_DIR."Core/interface/IApi.php");

class ItemProp implements IApi{
    var $code;
    
    function api($params){
        $filter = json_decode($params['filter'],1);
		$columns = $params['columns']?$params['columns']:'*';
		$limit = intval($params['limit'])?intval($params['limit']):10;
		$pageno = intval($params['pageno'])?intval($params['pageno']):1;
//		print_r($params);exit;
        $mdl_item = FactoryManager::singleCreateProduct('Model_ItemProp@Sysitem');
//        error_log(var_export($params,1),3,'E:/1.txt');
        $result['list'] = $mdl_item->getList($columns,$filter,$mdl_item->tableName,$limit,$pageno,1);
        
		$result['total'] = $mdl_item->count($filter);
		
   
        if($result){
            $this->code = '0000';
        }else{
            $this->code = 'no data';
        }
        return $result;
    }

    public  function getCode(){
        return $this->code;
    }

    public  function getParams(){
        
    }
}