<?php
namespace TopClient\domain;

/**
 * 会员信息对象
 * @author auto create
 */
class CrmMember
{
	
	/** 
	 * 平均客单价.
	 **/
	public $avg_price;
	
	/** 
	 * 最后一次交易的订单号.注:该字段从2014.4.23之后不再返回.
	 **/
	public $biz_order_id;
	
	/** 
	 * 会员买家id
	 **/
	public $buyer_id;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 城市.请注意:从2014.4.23之后,省市将采用地区标准码,请通过物流API taobao.areas.get接口获取,参考:http://api.taobao.com/apidoc/api.htm?spm=0.0.0.0.nOOF9g&amp;path=cid:7-apiId:59.API对于老的省市代码兼容会逐步下线.
	 **/
	public $city;
	
	/** 
	 * 交易关闭的金额
	 **/
	public $close_trade_amount;
	
	/** 
	 * 交易关闭的的笔数
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
	 * 会员拥有的所有分组
	 **/
	public $group_ids;
	
	/** 
	 * 交易关闭的宝贝件数
	 **/
	public $item_close_count;
	
	/** 
	 * 购买的宝贝件数
	 **/
	public $item_num;
	
	/** 
	 * 最后交易时间
	 **/
	public $last_trade_time;
	
	/** 
	 * 北京=1,天津=2,河北省=3,山西省=4,内蒙古自治区=5,辽宁省=6,吉林省=7,黑龙江省=8,上海=9,江苏省=10,浙江省=11,安徽省=12,福建省=13,江西省=14,山东省=15,河南省=16,湖北省=17,湖南省=18, 广东省=19,广西壮族自治区=20,海南省=21,重庆=22,四川省=23,贵州省=24,云南省=25,西藏自治区26,陕西省=27,甘肃省=28,青海省=29,宁夏回族自治区=30,新疆维吾尔自治区=31,台湾省=32,香港特别行政区=33,澳门特别行政区=34,海外=35.注:请注意:从2014.4.23之后,省市将采用地区标准码,请通过物流API taobao.areas.get接口获取,参考:http://api.taobao.com/apidoc/api.htm?spm=0.0.0.0.nOOF9g&amp;path=cid:7-apiId:59.API对于老的省市代码兼容会逐步下线.
	 **/
	public $province;
	
	/** 
	 * 关系来源，1交易成功，2未成交，3卖家主动吸纳
	 **/
	public $relation_source;
	
	/** 
	 * 显示会员的状态，normal正常，blacklist黑名单
	 **/
	public $status;
	
	/** 
	 * 交易成功的金额
	 **/
	public $trade_amount;
	
	/** 
	 * 交易成功笔数
	 **/
	public $trade_count;	
}
?>