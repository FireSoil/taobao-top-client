<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.opencrm.member.seller.fetchstatus request
 * 
 * @author auto create
 * @since 1.0, 2018.07.24
 */
class OpencrmMemberSellerFetchstatusRequest
{
	/** 
	 * 商家nick列表
	 **/
	private $sellerNicks;
	
	private $apiParas = array();
	
	public function setSellerNicks($sellerNicks)
	{
		$this->sellerNicks = $sellerNicks;
		$this->apiParas["seller_nicks"] = $sellerNicks;
	}

	public function getSellerNicks()
	{
		return $this->sellerNicks;
	}

	public function getApiMethodName()
	{
		return "taobao.opencrm.member.seller.fetchstatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->sellerNicks,50,"sellerNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
