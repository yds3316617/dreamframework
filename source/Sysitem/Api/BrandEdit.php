<?php
namespace Sysitem\Api;
use Core\FactoryManager;
use Core\IApi;
require(ROOT_DIR."Core/Interface/IApi.php");

class BrandEdit implements IApi{
    var $code;
    
//$params['id'] = $_POST['id'];
//$params['brandname'] = $_POST['brandname'];
//$params['brief'] = $_POST['brief'];
    function api($params){
        $data['brandname'] = $params['brandname'];
        $data['brief'] = $params['brief'];
		
		
        $mdl_brand = FactoryManager::singleCreateProduct('Model_Brand@Sysitem');
        if($params['id']){
            $result = $mdl_brand->update(array('id'=>$params['id']),$data);
        }else{
            $result = $mdl_brand->add($data);
        }
		
   
        if($result){
            $this->code = '00';
        }else{
            $this->code = 'update error';
        }
        return $result;
    }

    public  function getCode(){
        return $this->code;
    }

    public  function getParams(){
        
    }
}