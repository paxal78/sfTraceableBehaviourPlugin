<?php
class Traceable extends Doctrine_Template{
	protected $_options = array(
        'name'=>'ip_address',
        'type'=>'string',	     
        'options'=> array(
            'notnull' => true
        )
	);

	public function setTableDefinition()
	{
		$this->hasColumn($this->_options['name'],$this->_options['type'], 30, $this->_options['options']);
		$this->hasColumn('user_last_updated','datetime', null, array());
	}
	
	public function trace($save = false){
		$invoker = $this->getInvoker();		
		$infoPath = sfContext::getInstance()->getRequest()->getPathInfoArray();		
		$name = $this->_options['name'];			
		$invoker->$name = $infoPath['REMOTE_ADDR'];	
		$invoker->user_last_updated = date('Y-m-d H:i:s');	
		if($save){
			$invoker->save();
		}		
		return $invoker; 
	}
}