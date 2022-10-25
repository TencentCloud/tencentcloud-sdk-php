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
 * QueryRefund返回参数结构体
 *
 * @method string getState() 获取退款状态码，退款提交成功后返回  1：退款中；  2：退款成功；  3：退款失败。
 * @method void setState(string $State) 设置退款状态码，退款提交成功后返回  1：退款中；  2：退款成功；  3：退款失败。
 * @method string getChannelExternalOrderId() 获取支付机构订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置支付机构订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExternalRefundId() 获取支付机构退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalRefundId(string $ChannelExternalRefundId) 设置支付机构退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelOrderId() 获取渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRefundAmt() 获取退款总金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRefundAmt(integer $TotalRefundAmt) 设置退款总金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrencyType() 获取货币类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrencyType(string $CurrencyType) 设置货币类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutTradeNo() 获取外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutTradeNo(string $OutTradeNo) 设置外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundId() 获取退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundId(string $RefundId) 设置退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getUsedRefundId() 获取指定退款订单号。与RefundId的区别是，UsedRefundId不会再做修饰，而RefundId则可能在查询退款处理时做了如添加前缀等的修饰
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedRefundId(string $UsedRefundId) 设置指定退款订单号。与RefundId的区别是，UsedRefundId不会再做修饰，而RefundId则可能在查询退款处理时做了如添加前缀等的修饰
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubRefundList() 获取子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRefundList(array $SubRefundList) 设置子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryRefundResponse extends AbstractModel
{
    /**
     * @var string 退款状态码，退款提交成功后返回  1：退款中；  2：退款成功；  3：退款失败。
     */
    public $State;

    /**
     * @var string 支付机构订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalOrderId;

    /**
     * @var string 支付机构退款单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalRefundId;

    /**
     * @var string 渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOrderId;

    /**
     * @var integer 退款总金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRefundAmt;

    /**
     * @var string 货币类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrencyType;

    /**
     * @var string 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutTradeNo;

    /**
     * @var string 退款订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundId;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 指定退款订单号。与RefundId的区别是，UsedRefundId不会再做修饰，而RefundId则可能在查询退款处理时做了如添加前缀等的修饰
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedRefundId;

    /**
     * @var array 子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRefundList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $State 退款状态码，退款提交成功后返回  1：退款中；  2：退款成功；  3：退款失败。
     * @param string $ChannelExternalOrderId 支付机构订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExternalRefundId 支付机构退款单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelOrderId 渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRefundAmt 退款总金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrencyType 货币类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutTradeNo 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundId 退款订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $UsedRefundId 指定退款订单号。与RefundId的区别是，UsedRefundId不会再做修饰，而RefundId则可能在查询退款处理时做了如添加前缀等的修饰
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubRefundList 子单退款信息列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
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

        if (array_key_exists("TotalRefundAmt",$param) and $param["TotalRefundAmt"] !== null) {
            $this->TotalRefundAmt = $param["TotalRefundAmt"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("RefundId",$param) and $param["RefundId"] !== null) {
            $this->RefundId = $param["RefundId"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UsedRefundId",$param) and $param["UsedRefundId"] !== null) {
            $this->UsedRefundId = $param["UsedRefundId"];
        }

        if (array_key_exists("SubRefundList",$param) and $param["SubRefundList"] !== null) {
            $this->SubRefundList = [];
            foreach ($param["SubRefundList"] as $key => $value){
                $obj = new OldSubRefund();
                $obj->deserialize($value);
                array_push($this->SubRefundList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
