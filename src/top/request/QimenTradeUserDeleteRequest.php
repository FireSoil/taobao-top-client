<?php
namespace TopClient\request;

/**
 * TOP API: taobao.qimen.trade.user.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class QimenTradeUserDeleteRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.qimen.trade.user.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
