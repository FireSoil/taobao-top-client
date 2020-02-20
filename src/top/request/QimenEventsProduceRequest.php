<?php
namespace TopClient\request;

/**
 * TOP API: taobao.qimen.events.produce request
 * 
 * @author auto create
 * @since 1.0, 2018.10.23
 */
class QimenEventsProduceRequest
{
	/** 
	 * 奇门事件列表, 最多50条
	 **/
	private $messages;
	
	private $apiParas = array();
	
	public function setMessages($messages)
	{
		$this->messages = $messages;
		$this->apiParas["messages"] = $messages;
	}

	public function getMessages()
	{
		return $this->messages;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.events.produce";
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
