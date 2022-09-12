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
 * 云企付-查询订单支付结果
 *
 * @method string getChannelMerchantId() 获取渠道商户号。外部接入平台入驻云企付平台下发
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。外部接入平台入驻云企付平台下发
 * @method string getOutOrderId() 获取外部商户订单号
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号
 * @method string getChannelOrderId() 获取云企付平台订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付平台订单号
 * @method string getThirdPayOrderId() 获取第三方支付平台订单号
 * @method void setThirdPayOrderId(string $ThirdPayOrderId) 设置第三方支付平台订单号
 * @method string getOrderStatus() 获取订单状态。
INIT：初始化
PAYING：支付中
ACCEPTED：支付受理成功
SUCCESS：支付成功
CLOSED：关单
PAY_FAIL：支付失败
REVOKE：退票
PART_REFUND：部分退款
FULL_REFUND：全部退款
 * @method void setOrderStatus(string $OrderStatus) 设置订单状态。
INIT：初始化
PAYING：支付中
ACCEPTED：支付受理成功
SUCCESS：支付成功
CLOSED：关单
PAY_FAIL：支付失败
REVOKE：退票
PART_REFUND：部分退款
FULL_REFUND：全部退款
 * @method string getChannelName() 获取支付渠道名称，如TENPAY
 * @method void setChannelName(string $ChannelName) 设置支付渠道名称，如TENPAY
 * @method string getPaymentMethod() 获取付款方式。如EBANK_PAYMENT
OPENBANK_PAYMENT
 * @method void setPaymentMethod(string $PaymentMethod) 设置付款方式。如EBANK_PAYMENT
OPENBANK_PAYMENT
 * @method integer getTotalAmount() 获取订单金额。单位分
 * @method void setTotalAmount(integer $TotalAmount) 设置订单金额。单位分
 * @method integer getPayAmount() 获取实际支付金额。单位分，支付成功时返回
 * @method void setPayAmount(integer $PayAmount) 设置实际支付金额。单位分，支付成功时返回
 * @method string getFailReason() 获取失败原因，若失败的返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因，若失败的返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachment() 获取附加信息，查询时原样透传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachment(string $Attachment) 设置附加信息，查询时原样透传
注意：此字段可能返回 null，表示取不到有效值。
 * @method OpenBankRedirectInfo getRedirectInfo() 获取重定向参数，用于客户端跳转，订单未支付时返回该参数
渠道为TENPAY，付款方式为EBANK_PAYMENT时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectInfo(OpenBankRedirectInfo $RedirectInfo) 设置重定向参数，用于客户端跳转，订单未支付时返回该参数
渠道为TENPAY，付款方式为EBANK_PAYMENT时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnData() 获取第三方渠道返回信息，见渠道特殊说明,详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnData(string $ExternalReturnData) 设置第三方渠道返回信息，见渠道特殊说明,详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OpenBankApprovalGuideInfo getBankApprovalGuideInfo() 获取银行复核指引。当TENPAY下OPENBANT_PAYMENT时，下单受理成功是返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankApprovalGuideInfo(OpenBankApprovalGuideInfo $BankApprovalGuideInfo) 设置银行复核指引。当TENPAY下OPENBANT_PAYMENT时，下单受理成功是返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeAmount() 获取手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeAmount(integer $FeeAmount) 设置手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeRate() 获取手续费费率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeRate(integer $FeeRate) 设置手续费费率
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProfitShareRespInfoList() 获取分账信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfitShareRespInfoList(array $ProfitShareRespInfoList) 设置分账信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFinish() 获取支付完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFinish(string $TimeFinish) 设置支付完成时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankPaymentOrderResult extends AbstractModel
{
    /**
     * @var string 渠道商户号。外部接入平台入驻云企付平台下发
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部商户订单号
     */
    public $OutOrderId;

    /**
     * @var string 云企付平台订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 第三方支付平台订单号
     */
    public $ThirdPayOrderId;

    /**
     * @var string 订单状态。
INIT：初始化
PAYING：支付中
ACCEPTED：支付受理成功
SUCCESS：支付成功
CLOSED：关单
PAY_FAIL：支付失败
REVOKE：退票
PART_REFUND：部分退款
FULL_REFUND：全部退款
     */
    public $OrderStatus;

    /**
     * @var string 支付渠道名称，如TENPAY
     */
    public $ChannelName;

    /**
     * @var string 付款方式。如EBANK_PAYMENT
OPENBANK_PAYMENT
     */
    public $PaymentMethod;

    /**
     * @var integer 订单金额。单位分
     */
    public $TotalAmount;

    /**
     * @var integer 实际支付金额。单位分，支付成功时返回
     */
    public $PayAmount;

    /**
     * @var string 失败原因，若失败的返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string 附加信息，查询时原样透传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attachment;

    /**
     * @var OpenBankRedirectInfo 重定向参数，用于客户端跳转，订单未支付时返回该参数
渠道为TENPAY，付款方式为EBANK_PAYMENT时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectInfo;

    /**
     * @var string 第三方渠道返回信息，见渠道特殊说明,详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnData;

    /**
     * @var OpenBankApprovalGuideInfo 银行复核指引。当TENPAY下OPENBANT_PAYMENT时，下单受理成功是返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankApprovalGuideInfo;

    /**
     * @var integer 手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeAmount;

    /**
     * @var integer 手续费费率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeRate;

    /**
     * @var array 分账信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProfitShareRespInfoList;

    /**
     * @var string 支付完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFinish;

    /**
     * @param string $ChannelMerchantId 渠道商户号。外部接入平台入驻云企付平台下发
     * @param string $OutOrderId 外部商户订单号
     * @param string $ChannelOrderId 云企付平台订单号
     * @param string $ThirdPayOrderId 第三方支付平台订单号
     * @param string $OrderStatus 订单状态。
INIT：初始化
PAYING：支付中
ACCEPTED：支付受理成功
SUCCESS：支付成功
CLOSED：关单
PAY_FAIL：支付失败
REVOKE：退票
PART_REFUND：部分退款
FULL_REFUND：全部退款
     * @param string $ChannelName 支付渠道名称，如TENPAY
     * @param string $PaymentMethod 付款方式。如EBANK_PAYMENT
OPENBANK_PAYMENT
     * @param integer $TotalAmount 订单金额。单位分
     * @param integer $PayAmount 实际支付金额。单位分，支付成功时返回
     * @param string $FailReason 失败原因，若失败的返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Attachment 附加信息，查询时原样透传
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpenBankRedirectInfo $RedirectInfo 重定向参数，用于客户端跳转，订单未支付时返回该参数
渠道为TENPAY，付款方式为EBANK_PAYMENT时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnData 第三方渠道返回信息，见渠道特殊说明,详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpenBankApprovalGuideInfo $BankApprovalGuideInfo 银行复核指引。当TENPAY下OPENBANT_PAYMENT时，下单受理成功是返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeAmount 手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeRate 手续费费率
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProfitShareRespInfoList 分账信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFinish 支付完成时间
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("ThirdPayOrderId",$param) and $param["ThirdPayOrderId"] !== null) {
            $this->ThirdPayOrderId = $param["ThirdPayOrderId"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("PayAmount",$param) and $param["PayAmount"] !== null) {
            $this->PayAmount = $param["PayAmount"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Attachment",$param) and $param["Attachment"] !== null) {
            $this->Attachment = $param["Attachment"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new OpenBankRedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("ExternalReturnData",$param) and $param["ExternalReturnData"] !== null) {
            $this->ExternalReturnData = $param["ExternalReturnData"];
        }

        if (array_key_exists("BankApprovalGuideInfo",$param) and $param["BankApprovalGuideInfo"] !== null) {
            $this->BankApprovalGuideInfo = new OpenBankApprovalGuideInfo();
            $this->BankApprovalGuideInfo->deserialize($param["BankApprovalGuideInfo"]);
        }

        if (array_key_exists("FeeAmount",$param) and $param["FeeAmount"] !== null) {
            $this->FeeAmount = $param["FeeAmount"];
        }

        if (array_key_exists("FeeRate",$param) and $param["FeeRate"] !== null) {
            $this->FeeRate = $param["FeeRate"];
        }

        if (array_key_exists("ProfitShareRespInfoList",$param) and $param["ProfitShareRespInfoList"] !== null) {
            $this->ProfitShareRespInfoList = [];
            foreach ($param["ProfitShareRespInfoList"] as $key => $value){
                $obj = new OpenBankProfitShareRespInfo();
                $obj->deserialize($value);
                array_push($this->ProfitShareRespInfoList, $obj);
            }
        }

        if (array_key_exists("TimeFinish",$param) and $param["TimeFinish"] !== null) {
            $this->TimeFinish = $param["TimeFinish"];
        }
    }
}
