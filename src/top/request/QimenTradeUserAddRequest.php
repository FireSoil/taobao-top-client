<?php
namespace TopClient\request;

/**
 * TOP API: taobao.qimen.trade.user.add request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class QimenTradeUserAddRequest
{
	/** 
	 * 商家备注
	 **/
	private $memo;
	
	private $apiParas = array();
	
	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.trade.user.add";
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
