<?php
namespace TopClient\domain;

/**
 * 表示会员关系的基本信息字段，用于会员列表的基本查询
 * @author auto create
 */
class BasicMember
{
	
	/** 
	 * 最后一次交易的订单号.注:该字段从2014.4.23之后不再返回.
	 **/
	public $biz_order_id;
	
	/** 
	 * 买家会员ID
	 **/
	public $buyer_id;
	
	/** 
	 * 会员昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 交易关闭金额
	 **/
	public $close_trade_amount;
	
	/** 
	 * 交易关闭的笔数
	 **/
	public $close_trade_count;
	
	/** 
	 * 会员等级，0未非会员，其余对应等级名称取grade_name
	 **/
	public $grade;
	
	/** 
	 * 等级名称
	 **/
	public $grade_name;
	
	/** 
	 * 分组的id集合字符串
	 **/
	public $group_ids;
	
	/** 
	 * 购买的宝贝件数
	 **/
	public $item_num;
	
	/** 
	 * 最后交易的日期
	 **/
	public $last_trade_time;
	
	/** 
	 * 关系来源，1交易成功，2未交易成功 ,3 卖家主动吸纳
	 **/
	public $relation_source;
	
	/** 
	 * 显示会员的状态，normal正常，blacklist黑名单
	 **/
	public $status;
	
	/** 
	 * 交易的金额
	 **/
	public $trade_amount;
	
	/** 
	 * 交易成功的次数
	 **/
	public $trade_count;	
}
?>