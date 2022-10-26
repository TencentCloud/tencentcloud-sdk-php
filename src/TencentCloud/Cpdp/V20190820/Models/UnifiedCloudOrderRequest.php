<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnifiedCloudOrder请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId
 * @method string getUserId() 获取用户ID
长度不小于5位，仅支持字母和数字的组合，长度限制以具体接入渠道为准
 * @method void setUserId(string $UserId) 设置用户ID
长度不小于5位，仅支持字母和数字的组合，长度限制以具体接入渠道为准
 * @method string getOutTradeNo() 获取开发者主订单号
支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合，长度供参考，部分渠道存在长度更短的情况接入时请联系开发咨询
 * @method void setOutTradeNo(string $OutTradeNo) 设置开发者主订单号
支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合，长度供参考，部分渠道存在长度更短的情况接入时请联系开发咨询
 * @method string getCurrencyType() 获取货币类型
ISO货币代码，CNY
 * @method void setCurrencyType(string $CurrencyType) 设置货币类型
ISO货币代码，CNY
 * @method string getProductId() 获取商品ID
业务自定义的商品id，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合。
 * @method void setProductId(string $ProductId) 设置商品ID
业务自定义的商品id，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合。
 * @method string getProductName() 获取商品名称
业务自定义的商品名称，无需URL编码，长度限制以具体所接入渠道为准。
 * @method void setProductName(string $ProductName) 设置商品名称
业务自定义的商品名称，无需URL编码，长度限制以具体所接入渠道为准。
 * @method string getProductDetail() 获取商品详情
业务自定义的商品详情，无需URL编码，长度限制以具体所接入渠道为准。
 * @method void setProductDetail(string $ProductDetail) 设置商品详情
业务自定义的商品详情，无需URL编码，长度限制以具体所接入渠道为准。
 * @method integer getOriginalAmt() 获取原始金额
单位：分，需要注意的是，OriginalAmt>=TotalAmt
 * @method void setOriginalAmt(integer $OriginalAmt) 设置原始金额
单位：分，需要注意的是，OriginalAmt>=TotalAmt
 * @method integer getTotalAmt() 获取支付金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome。
 * @method void setTotalAmt(integer $TotalAmt) 设置支付金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome。
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method string getSubAppId() 获取支付SubAppId
米大师计费SubAppId，代表子商户。指定使用该商户的商户号下单时必传。
 * @method void setSubAppId(string $SubAppId) 设置支付SubAppId
米大师计费SubAppId，代表子商户。指定使用该商户的商户号下单时必传。
 * @method string getRealChannel() 获取顶层支付渠道
银行收单:
openbank_ccb: 建设银行
openbank_icbc: 工商银行
openbank_cmb: 招商银行
openbank_ping: 平安银行
openbank_icbc_jft：工商银行聚付通
非银行收单，可以为空
 * @method void setRealChannel(string $RealChannel) 设置顶层支付渠道
银行收单:
openbank_ccb: 建设银行
openbank_icbc: 工商银行
openbank_cmb: 招商银行
openbank_ping: 平安银行
openbank_icbc_jft：工商银行聚付通
非银行收单，可以为空
 * @method string getChannel() 获取支付渠道
wechat：微信支付
wechat_ecommerce: 微信电商收付通
open_alipay: 支付宝
open_quickpass: 银联云闪付
icbc_epay: 工银e支付
foreign_cardpay: 外卡支付
icbc_jft_wechat: 工行聚付通-微信
icbc_jft_alipay: 工行聚付通-支付宝
icbc_jft_epay: 工行聚付通-e支付
指定渠道下单时必传
 * @method void setChannel(string $Channel) 设置支付渠道
wechat：微信支付
wechat_ecommerce: 微信电商收付通
open_alipay: 支付宝
open_quickpass: 银联云闪付
icbc_epay: 工银e支付
foreign_cardpay: 外卡支付
icbc_jft_wechat: 工行聚付通-微信
icbc_jft_alipay: 工行聚付通-支付宝
icbc_jft_epay: 工行聚付通-e支付
指定渠道下单时必传
 * @method string getMetadata() 获取透传字段
支付成功回调透传给应用，用于开发者透传自定义内容。
 * @method void setMetadata(string $Metadata) 设置透传字段
支付成功回调透传给应用，用于开发者透传自定义内容。
 * @method integer getQuantity() 获取数量
购买数量,不传默认为1。
 * @method void setQuantity(integer $Quantity) 设置数量
购买数量,不传默认为1。
 * @method string getCallbackUrl() 获取Web端回调地址
Web端网页回调地址，仅当Web端SDK使用页面跳转方式时有效。
 * @method void setCallbackUrl(string $CallbackUrl) 设置Web端回调地址
Web端网页回调地址，仅当Web端SDK使用页面跳转方式时有效。
 * @method string getCancelUrl() 获取支付取消地址
 * @method void setCancelUrl(string $CancelUrl) 设置支付取消地址
 * @method string getWxAppId() 获取微信AppId
wechat渠道或wchat_ecommerce渠道可以指定下单时的wxappid。
 * @method void setWxAppId(string $WxAppId) 设置微信AppId
wechat渠道或wchat_ecommerce渠道可以指定下单时的wxappid。
 * @method string getWxSubAppId() 获取微信SubAppId
wechat渠道可以指定下单时的sub_appid。
 * @method void setWxSubAppId(string $WxSubAppId) 设置微信SubAppId
wechat渠道可以指定下单时的sub_appid。
 * @method string getWxOpenId() 获取微信公众号/小程序OpenId
微信公众号/小程序支付时为必选，需要传微信下的openid。
 * @method void setWxOpenId(string $WxOpenId) 设置微信公众号/小程序OpenId
微信公众号/小程序支付时为必选，需要传微信下的openid。
 * @method string getWxSubOpenId() 获取微信公众号/小程序SubOpenId
在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一。
 * @method void setWxSubOpenId(string $WxSubOpenId) 设置微信公众号/小程序SubOpenId
在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一。
 * @method integer getTotalPlatformIncome() 获取平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
 * @method void setTotalPlatformIncome(integer $TotalPlatformIncome) 设置平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
 * @method integer getTotalMchIncome() 获取结算应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
 * @method void setTotalMchIncome(integer $TotalMchIncome) 设置结算应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
 * @method array getSubOrderList() 获取子订单列表
格式：子订单号、子应用Id、金额。压缩后最长不可超过32K字节(去除空格，换行，制表符等无意义字符)。
 * @method void setSubOrderList(array $SubOrderList) 设置子订单列表
格式：子订单号、子应用Id、金额。压缩后最长不可超过32K字节(去除空格，换行，制表符等无意义字符)。
 * @method CloudSettleInfo getSettleInfo() 获取结算信息
例如是否需要分账、是否需要支付确认等，
注意：如果子单列表中传入了SettleInfo，在主单中不可再传入SettleInfo字段。
 * @method void setSettleInfo(CloudSettleInfo $SettleInfo) 设置结算信息
例如是否需要分账、是否需要支付确认等，
注意：如果子单列表中传入了SettleInfo，在主单中不可再传入SettleInfo字段。
 * @method array getAttachmentInfoList() 获取附加项信息列表
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能
注意：当传SubOrderList时，请在子单信息中传附加项信息，不要在主单中传该字段。
 * @method void setAttachmentInfoList(array $AttachmentInfoList) 设置附加项信息列表
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能
注意：当传SubOrderList时，请在子单信息中传附加项信息，不要在主单中传该字段。
 * @method string getPaymentNotifyUrl() 获取支付通知地址
调用方可通过该字段传入自定义支付通知地址。
 * @method void setPaymentNotifyUrl(string $PaymentNotifyUrl) 设置支付通知地址
调用方可通过该字段传入自定义支付通知地址。
 * @method string getPayScene() 获取支付场景
需要结合 RealChannel和Channel字段使用可选值:
wechat-app 微信APP支付方式
wechat-mini 微信小程序支付，示例：当 RealChannel=wechat Channel=wechat PayScene=wechat-mini时，内部会直接以小程序方式调用微信统一下单接口。
 * @method void setPayScene(string $PayScene) 设置支付场景
需要结合 RealChannel和Channel字段使用可选值:
wechat-app 微信APP支付方式
wechat-mini 微信小程序支付，示例：当 RealChannel=wechat Channel=wechat PayScene=wechat-mini时，内部会直接以小程序方式调用微信统一下单接口。
 * @method string getLocaleCode() 获取语言代码
取值请参考[ISO 639-1代码表](https://zh.wikipedia.org/zh-cn/ISO_639-1%E4%BB%A3%E7%A0%81%E8%A1%A8)
 * @method void setLocaleCode(string $LocaleCode) 设置语言代码
取值请参考[ISO 639-1代码表](https://zh.wikipedia.org/zh-cn/ISO_639-1%E4%BB%A3%E7%A0%81%E8%A1%A8)
 * @method string getRegionCode() 获取地区代码
取值请参考[ISO 3166-1二位字母代码表](https://zh.wikipedia.org/zh-cn/ISO_3166-1%E4%BA%8C%E4%BD%8D%E5%AD%97%E6%AF%8D%E4%BB%A3%E7%A0%81#%E6%AD%A3%E5%BC%8F%E5%88%86%E9%85%8D%E4%BB%A3%E7%A0%81)
 * @method void setRegionCode(string $RegionCode) 设置地区代码
取值请参考[ISO 3166-1二位字母代码表](https://zh.wikipedia.org/zh-cn/ISO_3166-1%E4%BA%8C%E4%BD%8D%E5%AD%97%E6%AF%8D%E4%BB%A3%E7%A0%81#%E6%AD%A3%E5%BC%8F%E5%88%86%E9%85%8D%E4%BB%A3%E7%A0%81)
 * @method string getUserClientIp() 获取用户IP
请求用户的IP地址，特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填。
 * @method void setUserClientIp(string $UserClientIp) 设置用户IP
请求用户的IP地址，特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填。
 * @method string getChannelOrderIdMode() 获取渠道订单号生成模式
枚举值。决定请求渠道方时的订单号的生成模式，详情请联系米大师沟通。不指定时默认为由米大师自行生成。
 * @method void setChannelOrderIdMode(string $ChannelOrderIdMode) 设置渠道订单号生成模式
枚举值。决定请求渠道方时的订单号的生成模式，详情请联系米大师沟通。不指定时默认为由米大师自行生成。
 * @method CloudGlobalPayTimeInfo getGlobalPayTimeInfo() 获取全局支付时间信息
 * @method void setGlobalPayTimeInfo(CloudGlobalPayTimeInfo $GlobalPayTimeInfo) 设置全局支付时间信息
 * @method string getChannelAppIdPolicy() 获取渠道应用ID取用方式
USE_APPID 使用渠道应用Id;
USE_SUB_APPID 使用子渠道应用Id;
USE_APPID_AND_SUB_APPID 既使用渠道应用Id也使用子渠道应用ID。
 * @method void setChannelAppIdPolicy(string $ChannelAppIdPolicy) 设置渠道应用ID取用方式
USE_APPID 使用渠道应用Id;
USE_SUB_APPID 使用子渠道应用Id;
USE_APPID_AND_SUB_APPID 既使用渠道应用Id也使用子渠道应用ID。
 * @method CloudStoreInfo getStoreInfo() 获取门店信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
 * @method void setStoreInfo(CloudStoreInfo $StoreInfo) 设置门店信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
 * @method CloudClientInfo getClientInfo() 获取客户端信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
 * @method void setClientInfo(CloudClientInfo $ClientInfo) 设置客户端信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
 * @method array getExternalPromptGroupList() 获取渠道扩展促销列表
可将各个渠道的促销信息放于该列表。
 * @method void setExternalPromptGroupList(array $ExternalPromptGroupList) 设置渠道扩展促销列表
可将各个渠道的促销信息放于该列表。
 * @method string getOrderReceiveMode() 获取收单模式
ORDER_RECEIVE_MODE_COMMON - 普通支付
ORDER_RECEIVE_MODE_COMBINE - 合单支付
ORDER_RECEIVE_MODE_V_COMBINE - 虚拟合单支付
若不传入该字段，则会根据是否传入子单来判断是 普通支付 还是 合单支付
 * @method void setOrderReceiveMode(string $OrderReceiveMode) 设置收单模式
ORDER_RECEIVE_MODE_COMMON - 普通支付
ORDER_RECEIVE_MODE_COMBINE - 合单支付
ORDER_RECEIVE_MODE_V_COMBINE - 虚拟合单支付
若不传入该字段，则会根据是否传入子单来判断是 普通支付 还是 合单支付
 * @method array getExternalUserInfoList() 获取渠道方用户信息列表
 * @method void setExternalUserInfoList(array $ExternalUserInfoList) 设置渠道方用户信息列表
 * @method array getExternalAttachmentDataList() 获取渠道透传数据列表
 * @method void setExternalAttachmentDataList(array $ExternalAttachmentDataList) 设置渠道透传数据列表
 */
class UnifiedCloudOrderRequest extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 用户ID
长度不小于5位，仅支持字母和数字的组合，长度限制以具体接入渠道为准
     */
    public $UserId;

    /**
     * @var string 开发者主订单号
支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合，长度供参考，部分渠道存在长度更短的情况接入时请联系开发咨询
     */
    public $OutTradeNo;

    /**
     * @var string 货币类型
ISO货币代码，CNY
     */
    public $CurrencyType;

    /**
     * @var string 商品ID
业务自定义的商品id，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合。
     */
    public $ProductId;

    /**
     * @var string 商品名称
业务自定义的商品名称，无需URL编码，长度限制以具体所接入渠道为准。
     */
    public $ProductName;

    /**
     * @var string 商品详情
业务自定义的商品详情，无需URL编码，长度限制以具体所接入渠道为准。
     */
    public $ProductDetail;

    /**
     * @var integer 原始金额
单位：分，需要注意的是，OriginalAmt>=TotalAmt
     */
    public $OriginalAmt;

    /**
     * @var integer 支付金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome。
     */
    public $TotalAmt;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @var string 支付SubAppId
米大师计费SubAppId，代表子商户。指定使用该商户的商户号下单时必传。
     */
    public $SubAppId;

    /**
     * @var string 顶层支付渠道
银行收单:
openbank_ccb: 建设银行
openbank_icbc: 工商银行
openbank_cmb: 招商银行
openbank_ping: 平安银行
openbank_icbc_jft：工商银行聚付通
非银行收单，可以为空
     */
    public $RealChannel;

    /**
     * @var string 支付渠道
wechat：微信支付
wechat_ecommerce: 微信电商收付通
open_alipay: 支付宝
open_quickpass: 银联云闪付
icbc_epay: 工银e支付
foreign_cardpay: 外卡支付
icbc_jft_wechat: 工行聚付通-微信
icbc_jft_alipay: 工行聚付通-支付宝
icbc_jft_epay: 工行聚付通-e支付
指定渠道下单时必传
     */
    public $Channel;

    /**
     * @var string 透传字段
支付成功回调透传给应用，用于开发者透传自定义内容。
     */
    public $Metadata;

    /**
     * @var integer 数量
购买数量,不传默认为1。
     */
    public $Quantity;

    /**
     * @var string Web端回调地址
Web端网页回调地址，仅当Web端SDK使用页面跳转方式时有效。
     */
    public $CallbackUrl;

    /**
     * @var string 支付取消地址
     */
    public $CancelUrl;

    /**
     * @var string 微信AppId
wechat渠道或wchat_ecommerce渠道可以指定下单时的wxappid。
     */
    public $WxAppId;

    /**
     * @var string 微信SubAppId
wechat渠道可以指定下单时的sub_appid。
     */
    public $WxSubAppId;

    /**
     * @var string 微信公众号/小程序OpenId
微信公众号/小程序支付时为必选，需要传微信下的openid。
     */
    public $WxOpenId;

    /**
     * @var string 微信公众号/小程序SubOpenId
在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一。
     */
    public $WxSubOpenId;

    /**
     * @var integer 平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
     */
    public $TotalPlatformIncome;

    /**
     * @var integer 结算应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
     */
    public $TotalMchIncome;

    /**
     * @var array 子订单列表
格式：子订单号、子应用Id、金额。压缩后最长不可超过32K字节(去除空格，换行，制表符等无意义字符)。
     */
    public $SubOrderList;

    /**
     * @var CloudSettleInfo 结算信息
例如是否需要分账、是否需要支付确认等，
注意：如果子单列表中传入了SettleInfo，在主单中不可再传入SettleInfo字段。
     */
    public $SettleInfo;

    /**
     * @var array 附加项信息列表
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能
注意：当传SubOrderList时，请在子单信息中传附加项信息，不要在主单中传该字段。
     */
    public $AttachmentInfoList;

    /**
     * @var string 支付通知地址
调用方可通过该字段传入自定义支付通知地址。
     */
    public $PaymentNotifyUrl;

    /**
     * @var string 支付场景
需要结合 RealChannel和Channel字段使用可选值:
wechat-app 微信APP支付方式
wechat-mini 微信小程序支付，示例：当 RealChannel=wechat Channel=wechat PayScene=wechat-mini时，内部会直接以小程序方式调用微信统一下单接口。
     */
    public $PayScene;

    /**
     * @var string 语言代码
取值请参考[ISO 639-1代码表](https://zh.wikipedia.org/zh-cn/ISO_639-1%E4%BB%A3%E7%A0%81%E8%A1%A8)
     */
    public $LocaleCode;

    /**
     * @var string 地区代码
取值请参考[ISO 3166-1二位字母代码表](https://zh.wikipedia.org/zh-cn/ISO_3166-1%E4%BA%8C%E4%BD%8D%E5%AD%97%E6%AF%8D%E4%BB%A3%E7%A0%81#%E6%AD%A3%E5%BC%8F%E5%88%86%E9%85%8D%E4%BB%A3%E7%A0%81)
     */
    public $RegionCode;

    /**
     * @var string 用户IP
请求用户的IP地址，特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填。
     */
    public $UserClientIp;

    /**
     * @var string 渠道订单号生成模式
枚举值。决定请求渠道方时的订单号的生成模式，详情请联系米大师沟通。不指定时默认为由米大师自行生成。
     */
    public $ChannelOrderIdMode;

    /**
     * @var CloudGlobalPayTimeInfo 全局支付时间信息
     */
    public $GlobalPayTimeInfo;

    /**
     * @var string 渠道应用ID取用方式
USE_APPID 使用渠道应用Id;
USE_SUB_APPID 使用子渠道应用Id;
USE_APPID_AND_SUB_APPID 既使用渠道应用Id也使用子渠道应用ID。
     */
    public $ChannelAppIdPolicy;

    /**
     * @var CloudStoreInfo 门店信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
     */
    public $StoreInfo;

    /**
     * @var CloudClientInfo 客户端信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
     */
    public $ClientInfo;

    /**
     * @var array 渠道扩展促销列表
可将各个渠道的促销信息放于该列表。
     */
    public $ExternalPromptGroupList;

    /**
     * @var string 收单模式
ORDER_RECEIVE_MODE_COMMON - 普通支付
ORDER_RECEIVE_MODE_COMBINE - 合单支付
ORDER_RECEIVE_MODE_V_COMBINE - 虚拟合单支付
若不传入该字段，则会根据是否传入子单来判断是 普通支付 还是 合单支付
     */
    public $OrderReceiveMode;

    /**
     * @var array 渠道方用户信息列表
     */
    public $ExternalUserInfoList;

    /**
     * @var array 渠道透传数据列表
     */
    public $ExternalAttachmentDataList;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId
     * @param string $UserId 用户ID
长度不小于5位，仅支持字母和数字的组合，长度限制以具体接入渠道为准
     * @param string $OutTradeNo 开发者主订单号
支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合，长度供参考，部分渠道存在长度更短的情况接入时请联系开发咨询
     * @param string $CurrencyType 货币类型
ISO货币代码，CNY
     * @param string $ProductId 商品ID
业务自定义的商品id，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合。
     * @param string $ProductName 商品名称
业务自定义的商品名称，无需URL编码，长度限制以具体所接入渠道为准。
     * @param string $ProductDetail 商品详情
业务自定义的商品详情，无需URL编码，长度限制以具体所接入渠道为准。
     * @param integer $OriginalAmt 原始金额
单位：分，需要注意的是，OriginalAmt>=TotalAmt
     * @param integer $TotalAmt 支付金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome。
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param string $SubAppId 支付SubAppId
米大师计费SubAppId，代表子商户。指定使用该商户的商户号下单时必传。
     * @param string $RealChannel 顶层支付渠道
银行收单:
openbank_ccb: 建设银行
openbank_icbc: 工商银行
openbank_cmb: 招商银行
openbank_ping: 平安银行
openbank_icbc_jft：工商银行聚付通
非银行收单，可以为空
     * @param string $Channel 支付渠道
wechat：微信支付
wechat_ecommerce: 微信电商收付通
open_alipay: 支付宝
open_quickpass: 银联云闪付
icbc_epay: 工银e支付
foreign_cardpay: 外卡支付
icbc_jft_wechat: 工行聚付通-微信
icbc_jft_alipay: 工行聚付通-支付宝
icbc_jft_epay: 工行聚付通-e支付
指定渠道下单时必传
     * @param string $Metadata 透传字段
支付成功回调透传给应用，用于开发者透传自定义内容。
     * @param integer $Quantity 数量
购买数量,不传默认为1。
     * @param string $CallbackUrl Web端回调地址
Web端网页回调地址，仅当Web端SDK使用页面跳转方式时有效。
     * @param string $CancelUrl 支付取消地址
     * @param string $WxAppId 微信AppId
wechat渠道或wchat_ecommerce渠道可以指定下单时的wxappid。
     * @param string $WxSubAppId 微信SubAppId
wechat渠道可以指定下单时的sub_appid。
     * @param string $WxOpenId 微信公众号/小程序OpenId
微信公众号/小程序支付时为必选，需要传微信下的openid。
     * @param string $WxSubOpenId 微信公众号/小程序SubOpenId
在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一。
     * @param integer $TotalPlatformIncome 平台应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
     * @param integer $TotalMchIncome 结算应收金额
单位：分，需要注意的是，TotalAmt=TotalPlatformIncome+TotalMchIncome
     * @param array $SubOrderList 子订单列表
格式：子订单号、子应用Id、金额。压缩后最长不可超过32K字节(去除空格，换行，制表符等无意义字符)。
     * @param CloudSettleInfo $SettleInfo 结算信息
例如是否需要分账、是否需要支付确认等，
注意：如果子单列表中传入了SettleInfo，在主单中不可再传入SettleInfo字段。
     * @param array $AttachmentInfoList 附加项信息列表
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能
注意：当传SubOrderList时，请在子单信息中传附加项信息，不要在主单中传该字段。
     * @param string $PaymentNotifyUrl 支付通知地址
调用方可通过该字段传入自定义支付通知地址。
     * @param string $PayScene 支付场景
需要结合 RealChannel和Channel字段使用可选值:
wechat-app 微信APP支付方式
wechat-mini 微信小程序支付，示例：当 RealChannel=wechat Channel=wechat PayScene=wechat-mini时，内部会直接以小程序方式调用微信统一下单接口。
     * @param string $LocaleCode 语言代码
取值请参考[ISO 639-1代码表](https://zh.wikipedia.org/zh-cn/ISO_639-1%E4%BB%A3%E7%A0%81%E8%A1%A8)
     * @param string $RegionCode 地区代码
取值请参考[ISO 3166-1二位字母代码表](https://zh.wikipedia.org/zh-cn/ISO_3166-1%E4%BA%8C%E4%BD%8D%E5%AD%97%E6%AF%8D%E4%BB%A3%E7%A0%81#%E6%AD%A3%E5%BC%8F%E5%88%86%E9%85%8D%E4%BB%A3%E7%A0%81)
     * @param string $UserClientIp 用户IP
请求用户的IP地址，特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填。
     * @param string $ChannelOrderIdMode 渠道订单号生成模式
枚举值。决定请求渠道方时的订单号的生成模式，详情请联系米大师沟通。不指定时默认为由米大师自行生成。
     * @param CloudGlobalPayTimeInfo $GlobalPayTimeInfo 全局支付时间信息
     * @param string $ChannelAppIdPolicy 渠道应用ID取用方式
USE_APPID 使用渠道应用Id;
USE_SUB_APPID 使用子渠道应用Id;
USE_APPID_AND_SUB_APPID 既使用渠道应用Id也使用子渠道应用ID。
     * @param CloudStoreInfo $StoreInfo 门店信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
     * @param CloudClientInfo $ClientInfo 客户端信息
特定的渠道或特定的支付方式，此字段为必填
wechat_ecommerce渠道 - h5支付方式，此字段必填
     * @param array $ExternalPromptGroupList 渠道扩展促销列表
可将各个渠道的促销信息放于该列表。
     * @param string $OrderReceiveMode 收单模式
ORDER_RECEIVE_MODE_COMMON - 普通支付
ORDER_RECEIVE_MODE_COMBINE - 合单支付
ORDER_RECEIVE_MODE_V_COMBINE - 虚拟合单支付
若不传入该字段，则会根据是否传入子单来判断是 普通支付 还是 合单支付
     * @param array $ExternalUserInfoList 渠道方用户信息列表
     * @param array $ExternalAttachmentDataList 渠道透传数据列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductDetail",$param) and $param["ProductDetail"] !== null) {
            $this->ProductDetail = $param["ProductDetail"];
        }

        if (array_key_exists("OriginalAmt",$param) and $param["OriginalAmt"] !== null) {
            $this->OriginalAmt = $param["OriginalAmt"];
        }

        if (array_key_exists("TotalAmt",$param) and $param["TotalAmt"] !== null) {
            $this->TotalAmt = $param["TotalAmt"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RealChannel",$param) and $param["RealChannel"] !== null) {
            $this->RealChannel = $param["RealChannel"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CancelUrl",$param) and $param["CancelUrl"] !== null) {
            $this->CancelUrl = $param["CancelUrl"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("WxSubAppId",$param) and $param["WxSubAppId"] !== null) {
            $this->WxSubAppId = $param["WxSubAppId"];
        }

        if (array_key_exists("WxOpenId",$param) and $param["WxOpenId"] !== null) {
            $this->WxOpenId = $param["WxOpenId"];
        }

        if (array_key_exists("WxSubOpenId",$param) and $param["WxSubOpenId"] !== null) {
            $this->WxSubOpenId = $param["WxSubOpenId"];
        }

        if (array_key_exists("TotalPlatformIncome",$param) and $param["TotalPlatformIncome"] !== null) {
            $this->TotalPlatformIncome = $param["TotalPlatformIncome"];
        }

        if (array_key_exists("TotalMchIncome",$param) and $param["TotalMchIncome"] !== null) {
            $this->TotalMchIncome = $param["TotalMchIncome"];
        }

        if (array_key_exists("SubOrderList",$param) and $param["SubOrderList"] !== null) {
            $this->SubOrderList = [];
            foreach ($param["SubOrderList"] as $key => $value){
                $obj = new CloudSubOrder();
                $obj->deserialize($value);
                array_push($this->SubOrderList, $obj);
            }
        }

        if (array_key_exists("SettleInfo",$param) and $param["SettleInfo"] !== null) {
            $this->SettleInfo = new CloudSettleInfo();
            $this->SettleInfo->deserialize($param["SettleInfo"]);
        }

        if (array_key_exists("AttachmentInfoList",$param) and $param["AttachmentInfoList"] !== null) {
            $this->AttachmentInfoList = [];
            foreach ($param["AttachmentInfoList"] as $key => $value){
                $obj = new CloudAttachmentInfo();
                $obj->deserialize($value);
                array_push($this->AttachmentInfoList, $obj);
            }
        }

        if (array_key_exists("PaymentNotifyUrl",$param) and $param["PaymentNotifyUrl"] !== null) {
            $this->PaymentNotifyUrl = $param["PaymentNotifyUrl"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("LocaleCode",$param) and $param["LocaleCode"] !== null) {
            $this->LocaleCode = $param["LocaleCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("UserClientIp",$param) and $param["UserClientIp"] !== null) {
            $this->UserClientIp = $param["UserClientIp"];
        }

        if (array_key_exists("ChannelOrderIdMode",$param) and $param["ChannelOrderIdMode"] !== null) {
            $this->ChannelOrderIdMode = $param["ChannelOrderIdMode"];
        }

        if (array_key_exists("GlobalPayTimeInfo",$param) and $param["GlobalPayTimeInfo"] !== null) {
            $this->GlobalPayTimeInfo = new CloudGlobalPayTimeInfo();
            $this->GlobalPayTimeInfo->deserialize($param["GlobalPayTimeInfo"]);
        }

        if (array_key_exists("ChannelAppIdPolicy",$param) and $param["ChannelAppIdPolicy"] !== null) {
            $this->ChannelAppIdPolicy = $param["ChannelAppIdPolicy"];
        }

        if (array_key_exists("StoreInfo",$param) and $param["StoreInfo"] !== null) {
            $this->StoreInfo = new CloudStoreInfo();
            $this->StoreInfo->deserialize($param["StoreInfo"]);
        }

        if (array_key_exists("ClientInfo",$param) and $param["ClientInfo"] !== null) {
            $this->ClientInfo = new CloudClientInfo();
            $this->ClientInfo->deserialize($param["ClientInfo"]);
        }

        if (array_key_exists("ExternalPromptGroupList",$param) and $param["ExternalPromptGroupList"] !== null) {
            $this->ExternalPromptGroupList = [];
            foreach ($param["ExternalPromptGroupList"] as $key => $value){
                $obj = new CloudExternalPromptGroup();
                $obj->deserialize($value);
                array_push($this->ExternalPromptGroupList, $obj);
            }
        }

        if (array_key_exists("OrderReceiveMode",$param) and $param["OrderReceiveMode"] !== null) {
            $this->OrderReceiveMode = $param["OrderReceiveMode"];
        }

        if (array_key_exists("ExternalUserInfoList",$param) and $param["ExternalUserInfoList"] !== null) {
            $this->ExternalUserInfoList = [];
            foreach ($param["ExternalUserInfoList"] as $key => $value){
                $obj = new CloudExternalUserInfo();
                $obj->deserialize($value);
                array_push($this->ExternalUserInfoList, $obj);
            }
        }

        if (array_key_exists("ExternalAttachmentDataList",$param) and $param["ExternalAttachmentDataList"] !== null) {
            $this->ExternalAttachmentDataList = [];
            foreach ($param["ExternalAttachmentDataList"] as $key => $value){
                $obj = new CloudExternalAttachmentData();
                $obj->deserialize($value);
                array_push($this->ExternalAttachmentDataList, $obj);
            }
        }
    }
}
