<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.crm.members.groups.batchdelete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CrmMembersGroupsBatchdeleteRequest
{
	/** 
	 * 买家昵称列表
	 **/
	private $buyerNicks;
	
	/** 
	 * 会员需要删除的分组
	 **/
	private $groupIds;
	
	private $apiParas = array();
	
	public function setBuyerNicks($buyerNicks)
	{
		$this->buyerNicks = $buyerNicks;
		$this->apiParas["buyer_nicks"] = $buyerNicks;
	}

	public function getBuyerNicks()
	{
		return $this->buyerNicks;
	}

	public function setGroupIds($groupIds)
	{
		$this->groupIds = $groupIds;
		$this->apiParas["group_ids"] = $groupIds;
	}

	public function getGroupIds()
	{
		return $this->groupIds;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.members.groups.batchdelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNicks,"buyerNicks");
		RequestCheckUtil::checkMaxListSize($this->buyerNicks,20,"buyerNicks");
		RequestCheckUtil::checkNotNull($this->groupIds,"groupIds");
		RequestCheckUtil::checkMaxListSize($this->groupIds,10,"groupIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
