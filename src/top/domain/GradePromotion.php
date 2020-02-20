<?php
namespace TopClient\domain;

/**
 * 卖家设置的等级优惠信息
 * @author auto create
 */
class GradePromotion
{
	
	/** 
	 * 买家会员级别  0:店铺客户  1：普通会员 2：高级会员 3：VIP会员 4：至尊VIP
	 **/
	public $cur_grade;
	
	/** 
	 * 店铺客户、普通会员 、高级会员、VIP会员、至尊VIP
	 **/
	public $cur_grade_name;
	
	/** 
	 * 会员级别折扣率没有小数，990代表9.9折
	 **/
	public $discount;
	
	/** 
	 * 普通会员、高级会员、VIP会员、至尊VIP。空的时候代表后续等级未启用或没有下一等级
	 **/
	public $next_grade;
	
	/** 
	 * 该等级对应的下一等级1:普通会员  2：高级会员 3：VIP会员 4：至尊VIP 0：后续等级都未启用或没有下一等级
	 **/
	public $next_grade_name;
	
	/** 
	 * 升级到下一个级别的需要的交易额，单位：分
	 **/
	public $next_upgrade_amount;
	
	/** 
	 * 升级到下一个级别的需要的交易量
	 **/
	public $next_upgrade_count;	
}
?>