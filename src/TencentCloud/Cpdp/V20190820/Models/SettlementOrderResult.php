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
 * 结算订单结果
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountAfterTax(string $AmountAfterTax) 设置税后金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTax() 获取税金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTax(string $Tax) 设置税金
注意：此字段可能返回 null，表示取不到有效值。
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
SUCCEED:已成功
FAILED:已失败
 * @method void setStatus(string $Status) 设置状态
ACCEPTED:已受理
ACCOUNTED:已记账
SUCCEED:已成功
FAILED:已失败
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getOutUserId() 获取外部用户ID
 * @method void setOutUserId(string $OutUserId) 设置外部用户ID
 * @method string getOperationType() 获取操作类型
 * @method void setOperationType(string $OperationType) 设置操作类型
 */
class SettlementOrderResult extends AbstractModel
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountAfterTax;

    /**
     * @var string 税金
注意：此字段可能返回 null，表示取不到有效值。
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
SUCCEED:已成功
FAILED:已失败
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 备注
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
     * @var string 操作类型
     */
    public $OperationType;

    /**
     * @param string $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     * @param string $AmountBeforeTax 税前金额
     * @param string $AmountAfterTax 税后金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tax 税金
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutOrderId 外部订单ID
     * @param string $OrderId 订单ID
     * @param string $InitiateTime 发起时间
     * @param string $FinishTime 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
ACCEPTED:已受理
ACCOUNTED:已记账
SUCCEED:已成功
FAILED:已失败
     * @param string $StatusDesc 状态描述
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayeeId 收款用户ID
     * @param string $OutUserId 外部用户ID
     * @param string $OperationType 操作类型
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

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
