<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;


/**
 * 自定义请求
 */
class CustomRequest
{
	/** 
	 **/
	private $fields;
	private $apiMethodName;

	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

    public function getFields()
    {
        return $this->fields;
    }

	public function getApiMethodName()
	{
		return $this->apiMethodName;
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->apiMethodName,"apiMethodName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    /**
     * @param mixed $apiMethodName
     */
    public function setApiMethodName($apiMethodName)
    {
        $this->apiMethodName = $apiMethodName;
    }
}
