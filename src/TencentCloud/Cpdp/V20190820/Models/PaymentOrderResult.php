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
 * 付款订单结果
 *
 * @method string getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method void setIncomeType(string $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method string getAmountBeforeTax() 获取税前金额
 * @method void setAmountBeforeTax(string $AmountBeforeTax) 设置税前金额
 * @method string getAmountAfterTax() 获取税后金额
 * @method void setAmountAfterTax(string $AmountAfterTax) 设置税后金额
 * @method string getTax() 获取税金
 * @method void setTax(string $Tax) 设置税金
 * @method string getOutOrderId() 获取外部订单ID
 * @method void setOutOrderId(string $OutOrderId) 设置外部订单ID
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getInitiateTime() 获取发起时间
 * @method void setInitiateTime(string $InitiateTime) 设置发起时间
 * @method string getFinishTime() 获取完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
ACCEPTED:已受理
ACCOUNTED:已记账
PAYING:付款中
PAYED:完成付款渠道调用
SUCCEED:已成功
FAILED:已失败
 * @method void setStatus(string $Status) 设置状态
ACCEPTED:已受理
ACCOUNTED:已记账
PAYING:付款中
PAYED:完成付款渠道调用
SUCCEED:已成功
FAILED:已失败
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getRemark() 获取提现备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置提现备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getOutUserId() 获取外部用户ID
 * @method void setOutUserId(string $OutUserId) 设置外部用户ID
 * @method string getChannelOrderId() 获取渠道支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置渠道支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVat() 获取增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVat(string $Vat) 设置增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndividualIncomeTax() 获取个人所得税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndividualIncomeTax(string $IndividualIncomeTax) 设置个人所得税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdditionalTaxSum() 获取附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalTaxSum(string $AdditionalTaxSum) 设置附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdditionalTaxItem() 获取附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdditionalTaxItem(string $AdditionalTaxItem) 设置附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取失败原因。当Status为FAILED时，改字段为失败的原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因。当Status为FAILED时，改字段为失败的原因。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PaymentOrderResult extends AbstractModel
{
    /**
     * @var string 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     */
    public $IncomeType;

    /**
     * @var string 税前金额
     */
    public $AmountBeforeTax;

    /**
     * @var string 税后金额
     */
    public $AmountAfterTax;

    /**
     * @var string 税金
     */
    public $Tax;

    /**
     * @var string 外部订单ID
     */
    public $OutOrderId;

    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 发起时间
     */
    public $InitiateTime;

    /**
     * @var string 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var string 状态
ACCEPTED:已受理
ACCOUNTED:已记账
PAYING:付款中
PAYED:完成付款渠道调用
SUCCEED:已成功
FAILED:已失败
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 提现备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 外部用户ID
     */
    public $OutUserId;

    /**
     * @var string 渠道支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOrderId;

    /**
     * @var string 增值税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vat;

    /**
     * @var string 个人所得税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndividualIncomeTax;

    /**
     * @var string 附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalTaxSum;

    /**
     * @var string 附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdditionalTaxItem;

    /**
     * @var string 失败原因。当Status为FAILED时，改字段为失败的原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @param string $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     * @param string $AmountBeforeTax 税前金额
     * @param string $AmountAfterTax 税后金额
     * @param string $Tax 税金
     * @param string $OutOrderId 外部订单ID
     * @param string $OrderId 订单ID
     * @param string $InitiateTime 发起时间
     * @param string $FinishTime 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
ACCEPTED:已受理
ACCOUNTED:已记账
PAYING:付款中
PAYED:完成付款渠道调用
SUCCEED:已成功
FAILED:已失败
     * @param string $StatusDesc 状态描述
     * @param string $Remark 提现备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayeeId 收款用户ID
     * @param string $OutUserId 外部用户ID
     * @param string $ChannelOrderId 渠道支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vat 增值税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndividualIncomeTax 个人所得税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdditionalTaxSum 附加税总税额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdditionalTaxItem 附加税税项。格式为JSON格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason 失败原因。当Status为FAILED时，改字段为失败的原因。
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
        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("AmountAfterTax",$param) and $param["AmountAfterTax"] !== null) {
            $this->AmountAfterTax = $param["AmountAfterTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("InitiateTime",$param) and $param["InitiateTime"] !== null) {
            $this->InitiateTime = $param["InitiateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("Vat",$param) and $param["Vat"] !== null) {
            $this->Vat = $param["Vat"];
        }

        if (array_key_exists("IndividualIncomeTax",$param) and $param["IndividualIncomeTax"] !== null) {
            $this->IndividualIncomeTax = $param["IndividualIncomeTax"];
        }

        if (array_key_exists("AdditionalTaxSum",$param) and $param["AdditionalTaxSum"] !== null) {
            $this->AdditionalTaxSum = $param["AdditionalTaxSum"];
        }

        if (array_key_exists("AdditionalTaxItem",$param) and $param["AdditionalTaxItem"] !== null) {
            $this->AdditionalTaxItem = $param["AdditionalTaxItem"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
