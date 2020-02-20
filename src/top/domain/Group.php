<?php
namespace TopClient\domain;

/**
 * 描述分组的数据结构
 * @author auto create
 */
class Group
{
	
	/** 
	 * 分组的创建时间
	 **/
	public $group_create;
	
	/** 
	 * 分组的id
	 **/
	public $group_id;
	
	/** 
	 * 分组的修改时间
	 **/
	public $group_modify;
	
	/** 
	 * 分组的名称
	 **/
	public $group_name;
	
	/** 
	 * 分组所拥有的会员数量,如果返回值为-1，表示当前服务忙或数据在初始化。
	 **/
	public $member_count;
	
	/** 
	 * 分组的状态，1表示正常
	 **/
	public $status;	
}
?>