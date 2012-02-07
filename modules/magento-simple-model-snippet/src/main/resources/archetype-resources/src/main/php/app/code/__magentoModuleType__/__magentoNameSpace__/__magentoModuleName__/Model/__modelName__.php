<?php 
class ${magentoNameSpace}_${magentoModuleName}_Model_${modelName} extends Mage_Core_Model_Abstract
{
	
    protected function _construct()
    {
        $this->_init('${magentoModuleNameLowerCase}/${modelNameLowerCamel}');
    }
	
    public function MyTestMethod() {	
    	return $this->getResource()->myResourceMethod();
    }
    
}