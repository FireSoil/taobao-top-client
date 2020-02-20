<?php
namespace TopClient\domain;

/**
 * result
 * @author auto create
 */
class SellerCleanStatusDto
{
	
	/** 
	 * sellerNick
	 **/
	public $seller_nick;
	
	/** 
	 * 1-数据备份中   2-启动清理   3-清理中   4-清理完成
	 **/
	public $status;	
}
?>