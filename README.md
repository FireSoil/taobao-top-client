# 淘宝开放平台 for laravel/lumen

原「淘宝客初级包」合并到了「淘宝客基础API」。  
目前当前sdk已包含：
- 淘宝客基础API
- 公共场景
  - (新)订单履行链路监控
  - 获取单笔交易信息
  - 物流基础信息查询
  - (新)用户信息管理包
  - 退款管理包
  - Schema商品发布
  - 聚石塔数据推送
  - 消息服务_待回收
  - 卖家基础开放
  - 会员平台-分层管理
- 平台基础服务	
  - 系统工具	
- 消息服务
  - 消息服务
- 发货管理	
  - 物流发货	
- 订单管理
  - 订单信息查询
  - 订单编辑
- 评价管理	
  - 评价信息查询	
- 御城河
- 奇门

## laravel
### 安装
`composer require orzcc/taobao-top-client`
### 配置
* 在config/app.php中的providers数组中添加`Orzcc\TopClient\TopClientServiceProvider::class,`
* 在config/app.php中的aliases数组中添加`'TopClient' => Orzcc\TopClient\Facades\TopClient::class,`
* 执行 `php artisan vendor:publish --provider="Orzcc\TopClient\TopClientServiceProvider"` 生成配置文件
* 编辑.env文件，设置appid,appsecret
### 示例代码
```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo('1'); // 实验后发现必需用字符串的数字才能正确分页
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```

## lumen
### 安装
`composer require orzcc/taobao-top-client`

### 配置
* 手动复制vendor/orzcc/taobao-top-client/config/taobaotop.php到config目录下
* 在bootstrap/app.php下添加
```php
if (!class_exists('TopClient')) {
    class_alias('Orzcc\TopClient\Facades\TopClient', 'TopClient');
}
//$app->register(Orzcc\TopClient\TopClientServiceProvider::class);
```
* 编辑.env文件，设置appid,appsecret

### 示例代码
```php
use TopClient;
use TopClient\request\TbkItemGetRequest;

$topclient = TopClient::connection();
$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ('手机');
$req->setSort("tk_total_sales");
$req->setPageNo('1'); // 实验后发现必需用字符串的数字才能正确分页
$req->setPageSize('40');
$resp = $topclient->execute($req);
dd($resp);
```

## Sponsor

[Find This Best](https://www.findthisbest.com)
