<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.qimen.event.produce request
 * 
 * @author auto create
 * @since 1.0, 2019.11.06
 */
class QimenEventProduceRequest
{
	/** 
	 * 订单创建时间,数字
	 **/
	private $create;
	
	/** 
	 * JSON格式扩展字段
	 **/
	private $ext;
	
	/** 
	 * 外部商家名称。必须同时填写platform
	 **/
	private $nick;
	
	/** 
	 * 商家平台编码.MAIN:官方渠道,JD:京东,DD:当当,PP:拍拍,YX:易讯,EBAY:ebay,AMAZON:亚马逊,SN:苏宁,GM:国美,WPH:唯品会,JM:聚美,MGJ:蘑菇街,YT:银泰,YHD:1号店,1688:1688,POS:POS门店,OTHER:其他
	 **/
	private $platform;
	
	/** 
	 * 事件状态，如QIMEN_ERP_TRANSFER，QIMEN_ERP_CHECK
	 **/
	private $status;
	
	/** 
	 * 淘宝订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCreate($create)
	{
		$this->create = $create;
		$this->apiParas["create"] = $create;
	}

	public function getCreate()
	{
		return $this->create;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.event.produce";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
