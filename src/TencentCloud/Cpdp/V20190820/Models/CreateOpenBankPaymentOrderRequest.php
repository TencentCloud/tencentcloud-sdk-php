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
 * CreateOpenBankPaymentOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
__HUIFU__: 汇付斗拱
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
__HUIFU__: 汇付斗拱
 * @method string getPaymentMethod() 获取付款方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__:B2B EBank付款
__OPENBANK_PAYMENT__:B2C  openbank付款
__SAFT_ISV__:支付宝安心发
__TRANS_TO_CHANGE__: 微信支付转账到零钱v2
__TRANS_TO_CHANGE_V3__: 微信支付转账到零钱v3
__ONLINEBANK__: 汇付网银
 * @method void setPaymentMethod(string $PaymentMethod) 设置付款方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__:B2B EBank付款
__OPENBANK_PAYMENT__:B2C  openbank付款
__SAFT_ISV__:支付宝安心发
__TRANS_TO_CHANGE__: 微信支付转账到零钱v2
__TRANS_TO_CHANGE_V3__: 微信支付转账到零钱v3
__ONLINEBANK__: 汇付网银
 * @method string getPaymentMode() 获取付款模式。默认直接支付，如
__DIRECT__:直接支付
__FREEZE__:担保支付
 * @method void setPaymentMode(string $PaymentMode) 设置付款模式。默认直接支付，如
__DIRECT__:直接支付
__FREEZE__:担保支付
 * @method string getOutOrderId() 获取外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
 * @method void setOutOrderId(string $OutOrderId) 设置外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
 * @method integer getTotalAmount() 获取付款金额，单位分。
 * @method void setTotalAmount(integer $TotalAmount) 设置付款金额，单位分。
 * @method string getCurrency() 获取固定值CNY。
 * @method void setCurrency(string $Currency) 设置固定值CNY。
 * @method OpenBankPayerInfo getPayerInfo() 获取付款方信息。
 * @method void setPayerInfo(OpenBankPayerInfo $PayerInfo) 设置付款方信息。
 * @method OpenBankPayeeInfo getPayeeInfo() 获取收款方信息。
 * @method void setPayeeInfo(OpenBankPayeeInfo $PayeeInfo) 设置收款方信息。
 * @method string getNotifyUrl() 获取通知地址，如www.test.com。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址，如www.test.com。
 * @method string getExpireTime() 获取订单过期时间，yyyy-MM-dd HH:mm:ss格式。
 * @method void setExpireTime(string $ExpireTime) 设置订单过期时间，yyyy-MM-dd HH:mm:ss格式。
 * @method string getFrontUrl() 获取前端成功回调URL。条件可选。
 * @method void setFrontUrl(string $FrontUrl) 设置前端成功回调URL。条件可选。
 * @method string getRefreshUrl() 获取前端刷新 URL。条件可选。
 * @method void setRefreshUrl(string $RefreshUrl) 设置前端刷新 URL。条件可选。
 * @method OpenBankSceneInfo getSceneInfo() 获取设备信息，条件可选。
 * @method void setSceneInfo(OpenBankSceneInfo $SceneInfo) 设置设备信息，条件可选。
 * @method OpenBankGoodsInfo getGoodsInfo() 获取商品信息，条件可选。
 * @method void setGoodsInfo(OpenBankGoodsInfo $GoodsInfo) 设置商品信息，条件可选。
 * @method string getAttachment() 获取附加信息，查询时原样返回。
 * @method void setAttachment(string $Attachment) 设置附加信息，查询时原样返回。
 * @method string getProfitShareFlag() 获取若不上传，即使用默认值无需分润
__NO_NEED_SHARE__：无需分润；
__SHARE_BY_INFO__：分润时指定金额，此时如果分润信息 ProfitShareInfo为空，只冻结，不分账给其他商户；需要调用解冻接口。
__SHARE_BY_API__：后续调用分润接口决定分润金额
 * @method void setProfitShareFlag(string $ProfitShareFlag) 设置若不上传，即使用默认值无需分润
__NO_NEED_SHARE__：无需分润；
__SHARE_BY_INFO__：分润时指定金额，此时如果分润信息 ProfitShareInfo为空，只冻结，不分账给其他商户；需要调用解冻接口。
__SHARE_BY_API__：后续调用分润接口决定分润金额
 * @method array getProfitShareInfoList() 获取分润信息，配合ProfitShareFlag使用。
 * @method void setProfitShareInfoList(array $ProfitShareInfoList) 设置分润信息，配合ProfitShareFlag使用。
 * @method OpenBankSettlementRulesInfo getSettlementRulesInfo() 获取商企付-担保支付（PaymentMode为 FREEZE ）时需设置该参数
 * @method void setSettlementRulesInfo(OpenBankSettlementRulesInfo $SettlementRulesInfo) 设置商企付-担保支付（PaymentMode为 FREEZE ）时需设置该参数
 * @method string getExternalPaymentData() 获取底层支付渠道特殊字段，若无特殊说明时，可以为空
 * @method void setExternalPaymentData(string $ExternalPaymentData) 设置底层支付渠道特殊字段，若无特殊说明时，可以为空
 * @method string getRemark() 获取备注信息。
 * @method void setRemark(string $Remark) 设置备注信息。
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
 */
class CreateOpenBankPaymentOrderRequest extends AbstractModel
{
    /**
     * @var string 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
__HUIFU__: 汇付斗拱
     */
    public $ChannelName;

    /**
     * @var string 付款方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__:B2B EBank付款
__OPENBANK_PAYMENT__:B2C  openbank付款
__SAFT_ISV__:支付宝安心发
__TRANS_TO_CHANGE__: 微信支付转账到零钱v2
__TRANS_TO_CHANGE_V3__: 微信支付转账到零钱v3
__ONLINEBANK__: 汇付网银
     */
    public $PaymentMethod;

    /**
     * @var string 付款模式。默认直接支付，如
__DIRECT__:直接支付
__FREEZE__:担保支付
     */
    public $PaymentMode;

    /**
     * @var string 外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
     */
    public $OutOrderId;

    /**
     * @var integer 付款金额，单位分。
     */
    public $TotalAmount;

    /**
     * @var string 固定值CNY。
     */
    public $Currency;

    /**
     * @var OpenBankPayerInfo 付款方信息。
     */
    public $PayerInfo;

    /**
     * @var OpenBankPayeeInfo 收款方信息。
     */
    public $PayeeInfo;

    /**
     * @var string 通知地址，如www.test.com。
     */
    public $NotifyUrl;

    /**
     * @var string 订单过期时间，yyyy-MM-dd HH:mm:ss格式。
     */
    public $ExpireTime;

    /**
     * @var string 前端成功回调URL。条件可选。
     */
    public $FrontUrl;

    /**
     * @var string 前端刷新 URL。条件可选。
     */
    public $RefreshUrl;

    /**
     * @var OpenBankSceneInfo 设备信息，条件可选。
     */
    public $SceneInfo;

    /**
     * @var OpenBankGoodsInfo 商品信息，条件可选。
     */
    public $GoodsInfo;

    /**
     * @var string 附加信息，查询时原样返回。
     */
    public $Attachment;

    /**
     * @var string 若不上传，即使用默认值无需分润
__NO_NEED_SHARE__：无需分润；
__SHARE_BY_INFO__：分润时指定金额，此时如果分润信息 ProfitShareInfo为空，只冻结，不分账给其他商户；需要调用解冻接口。
__SHARE_BY_API__：后续调用分润接口决定分润金额
     */
    public $ProfitShareFlag;

    /**
     * @var array 分润信息，配合ProfitShareFlag使用。
     */
    public $ProfitShareInfoList;

    /**
     * @var OpenBankSettlementRulesInfo 商企付-担保支付（PaymentMode为 FREEZE ）时需设置该参数
     */
    public $SettlementRulesInfo;

    /**
     * @var string 底层支付渠道特殊字段，若无特殊说明时，可以为空
     */
    public $ExternalPaymentData;

    /**
     * @var string 备注信息。
     */
    public $Remark;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
__HUIFU__: 汇付斗拱
     * @param string $PaymentMethod 付款方式。详见附录-云企付枚举类说明-PaymentMethod。
__EBANK_PAYMENT__:B2B EBank付款
__OPENBANK_PAYMENT__:B2C  openbank付款
__SAFT_ISV__:支付宝安心发
__TRANS_TO_CHANGE__: 微信支付转账到零钱v2
__TRANS_TO_CHANGE_V3__: 微信支付转账到零钱v3
__ONLINEBANK__: 汇付网银
     * @param string $PaymentMode 付款模式。默认直接支付，如
__DIRECT__:直接支付
__FREEZE__:担保支付
     * @param string $OutOrderId 外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
     * @param integer $TotalAmount 付款金额，单位分。
     * @param string $Currency 固定值CNY。
     * @param OpenBankPayerInfo $PayerInfo 付款方信息。
     * @param OpenBankPayeeInfo $PayeeInfo 收款方信息。
     * @param string $NotifyUrl 通知地址，如www.test.com。
     * @param string $ExpireTime 订单过期时间，yyyy-MM-dd HH:mm:ss格式。
     * @param string $FrontUrl 前端成功回调URL。条件可选。
     * @param string $RefreshUrl 前端刷新 URL。条件可选。
     * @param OpenBankSceneInfo $SceneInfo 设备信息，条件可选。
     * @param OpenBankGoodsInfo $GoodsInfo 商品信息，条件可选。
     * @param string $Attachment 附加信息，查询时原样返回。
     * @param string $ProfitShareFlag 若不上传，即使用默认值无需分润
__NO_NEED_SHARE__：无需分润；
__SHARE_BY_INFO__：分润时指定金额，此时如果分润信息 ProfitShareInfo为空，只冻结，不分账给其他商户；需要调用解冻接口。
__SHARE_BY_API__：后续调用分润接口决定分润金额
     * @param array $ProfitShareInfoList 分润信息，配合ProfitShareFlag使用。
     * @param OpenBankSettlementRulesInfo $SettlementRulesInfo 商企付-担保支付（PaymentMode为 FREEZE ）时需设置该参数
     * @param string $ExternalPaymentData 底层支付渠道特殊字段，若无特殊说明时，可以为空
     * @param string $Remark 备注信息。
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
缺省默认为生产环境
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
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("PaymentMode",$param) and $param["PaymentMode"] !== null) {
            $this->PaymentMode = $param["PaymentMode"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("PayerInfo",$param) and $param["PayerInfo"] !== null) {
            $this->PayerInfo = new OpenBankPayerInfo();
            $this->PayerInfo->deserialize($param["PayerInfo"]);
        }

        if (array_key_exists("PayeeInfo",$param) and $param["PayeeInfo"] !== null) {
            $this->PayeeInfo = new OpenBankPayeeInfo();
            $this->PayeeInfo->deserialize($param["PayeeInfo"]);
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FrontUrl",$param) and $param["FrontUrl"] !== null) {
            $this->FrontUrl = $param["FrontUrl"];
        }

        if (array_key_exists("RefreshUrl",$param) and $param["RefreshUrl"] !== null) {
            $this->RefreshUrl = $param["RefreshUrl"];
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new OpenBankSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("GoodsInfo",$param) and $param["GoodsInfo"] !== null) {
            $this->GoodsInfo = new OpenBankGoodsInfo();
            $this->GoodsInfo->deserialize($param["GoodsInfo"]);
        }

        if (array_key_exists("Attachment",$param) and $param["Attachment"] !== null) {
            $this->Attachment = $param["Attachment"];
        }

        if (array_key_exists("ProfitShareFlag",$param) and $param["ProfitShareFlag"] !== null) {
            $this->ProfitShareFlag = $param["ProfitShareFlag"];
        }

        if (array_key_exists("ProfitShareInfoList",$param) and $param["ProfitShareInfoList"] !== null) {
            $this->ProfitShareInfoList = [];
            foreach ($param["ProfitShareInfoList"] as $key => $value){
                $obj = new OpenBankProfitShareInfo();
                $obj->deserialize($value);
                array_push($this->ProfitShareInfoList, $obj);
            }
        }

        if (array_key_exists("SettlementRulesInfo",$param) and $param["SettlementRulesInfo"] !== null) {
            $this->SettlementRulesInfo = new OpenBankSettlementRulesInfo();
            $this->SettlementRulesInfo->deserialize($param["SettlementRulesInfo"]);
        }

        if (array_key_exists("ExternalPaymentData",$param) and $param["ExternalPaymentData"] !== null) {
            $this->ExternalPaymentData = $param["ExternalPaymentData"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
