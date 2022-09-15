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
 * QueryCloudRefundOrder返回参数结构体
 *
 * @method string getOutTradeNo() 获取该笔退款订单对应的UnifiedOrder下单时传入的OutTradeNo
 * @method void setOutTradeNo(string $OutTradeNo) 设置该笔退款订单对应的UnifiedOrder下单时传入的OutTradeNo
 * @method string getChannelExternalOrderId() 获取该笔退款订单对应的支付成功后支付机构返回的支付订单号
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置该笔退款订单对应的支付成功后支付机构返回的支付订单号
 * @method string getChannelExternalRefundId() 获取该笔退款订单退款后支付机构返回的退款单号
 * @method void setChannelExternalRefundId(string $ChannelExternalRefundId) 设置该笔退款订单退款后支付机构返回的退款单号
 * @method string getChannelOrderId() 获取内部请求微信支付、银行等支付机构的订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置内部请求微信支付、银行等支付机构的订单号
 * @method string getRefundId() 获取请求退款时传的退款ID后查询退款时传的RefundId
 * @method void setRefundId(string $RefundId) 设置请求退款时传的退款ID后查询退款时传的RefundId
 * @method string getUsedRefundId() 获取被使用的RefundId，业务可忽略该字段
 * @method void setUsedRefundId(string $UsedRefundId) 设置被使用的RefundId，业务可忽略该字段
 * @method integer getTotalRefundAmt() 获取退款总金额
 * @method void setTotalRefundAmt(integer $TotalRefundAmt) 设置退款总金额
 * @method string getCurrencyType() 获取ISO货币代码
 * @method void setCurrencyType(string $CurrencyType) 设置ISO货币代码
 * @method string getState() 获取退款状态码，退款提交成功后返回
1:退款中
2:退款成功
3:退款失败
 * @method void setState(string $State) 设置退款状态码，退款提交成功后返回
1:退款中
2:退款成功
3:退款失败
 * @method array getSubRefundList() 获取子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRefundList(array $SubRefundList) 设置子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetadata() 获取透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
 * @method void setMetadata(string $Metadata) 设置透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
 * @method string getAppId() 获取米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRefundId() 获取该笔退款订单退款后内部返回的退款单号
 * @method void setChannelRefundId(string $ChannelRefundId) 设置该笔退款订单退款后内部返回的退款单号
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryCloudRefundOrderResponse extends AbstractModel
{
    /**
     * @var string 该笔退款订单对应的UnifiedOrder下单时传入的OutTradeNo
     */
    public $OutTradeNo;

    /**
     * @var string 该笔退款订单对应的支付成功后支付机构返回的支付订单号
     */
    public $ChannelExternalOrderId;

    /**
     * @var string 该笔退款订单退款后支付机构返回的退款单号
     */
    public $ChannelExternalRefundId;

    /**
     * @var string 内部请求微信支付、银行等支付机构的订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 请求退款时传的退款ID后查询退款时传的RefundId
     */
    public $RefundId;

    /**
     * @var string 被使用的RefundId，业务可忽略该字段
     */
    public $UsedRefundId;

    /**
     * @var integer 退款总金额
     */
    public $TotalRefundAmt;

    /**
     * @var string ISO货币代码
     */
    public $CurrencyType;

    /**
     * @var string 退款状态码，退款提交成功后返回
1:退款中
2:退款成功
3:退款失败
     */
    public $State;

    /**
     * @var array 子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRefundList;

    /**
     * @var string 透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
     */
    public $Metadata;

    /**
     * @var string 米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 该笔退款订单退款后内部返回的退款单号
     */
    public $ChannelRefundId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OutTradeNo 该笔退款订单对应的UnifiedOrder下单时传入的OutTradeNo
     * @param string $ChannelExternalOrderId 该笔退款订单对应的支付成功后支付机构返回的支付订单号
     * @param string $ChannelExternalRefundId 该笔退款订单退款后支付机构返回的退款单号
     * @param string $ChannelOrderId 内部请求微信支付、银行等支付机构的订单号
     * @param string $RefundId 请求退款时传的退款ID后查询退款时传的RefundId
     * @param string $UsedRefundId 被使用的RefundId，业务可忽略该字段
     * @param integer $TotalRefundAmt 退款总金额
     * @param string $CurrencyType ISO货币代码
     * @param string $State 退款状态码，退款提交成功后返回
1:退款中
2:退款成功
3:退款失败
     * @param array $SubRefundList 子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metadata 透传字段，退款成功回调透传给应用，用于开发者透传自定义内容
     * @param string $AppId 米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRefundId 该笔退款订单退款后内部返回的退款单号
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("ChannelExternalOrderId",$param) and $param["ChannelExternalOrderId"] !== null) {
            $this->ChannelExternalOrderId = $param["ChannelExternalOrderId"];
        }

        if (array_key_exists("ChannelExternalRefundId",$param) and $param["ChannelExternalRefundId"] !== null) {
            $this->ChannelExternalRefundId = $param["ChannelExternalRefundId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("RefundId",$param) and $param["RefundId"] !== null) {
            $this->RefundId = $param["RefundId"];
        }

        if (array_key_exists("UsedRefundId",$param) and $param["UsedRefundId"] !== null) {
            $this->UsedRefundId = $param["UsedRefundId"];
        }

        if (array_key_exists("TotalRefundAmt",$param) and $param["TotalRefundAmt"] !== null) {
            $this->TotalRefundAmt = $param["TotalRefundAmt"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SubRefundList",$param) and $param["SubRefundList"] !== null) {
            $this->SubRefundList = [];
            foreach ($param["SubRefundList"] as $key => $value){
                $obj = new CloudSubRefundItem();
                $obj->deserialize($value);
                array_push($this->SubRefundList, $obj);
            }
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ChannelRefundId",$param) and $param["ChannelRefundId"] !== null) {
            $this->ChannelRefundId = $param["ChannelRefundId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
