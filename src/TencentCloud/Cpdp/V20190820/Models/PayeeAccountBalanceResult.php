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
 * 账户余额信息
 *
 * @method string getAccountId() 获取账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(string $AccountId) 设置账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncomeType(integer $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBalance() 获取总余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalance(string $Balance) 设置总余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSystemFreezeBalance() 获取系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemFreezeBalance(string $SystemFreezeBalance) 设置系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManualFreezeBalance() 获取人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualFreezeBalance(string $ManualFreezeBalance) 设置人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayableBalance() 获取可提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayableBalance(string $PayableBalance) 设置可提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaidBalance() 获取已提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaidBalance(string $PaidBalance) 设置已提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInPayBalance() 获取提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayBalance(string $InPayBalance) 设置提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSumSettlementAmount() 获取累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSumSettlementAmount(string $SumSettlementAmount) 设置累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayeeAccountBalanceResult extends AbstractModel
{
    /**
     * @var string 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @var integer 收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncomeType;

    /**
     * @var string 总余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Balance;

    /**
     * @var string 系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemFreezeBalance;

    /**
     * @var string 人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualFreezeBalance;

    /**
     * @var string 可提现余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayableBalance;

    /**
     * @var string 已提现余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaidBalance;

    /**
     * @var string 提现中余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayBalance;

    /**
     * @var string 累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SumSettlementAmount;

    /**
     * @param string $AccountId 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Balance 总余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SystemFreezeBalance 系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManualFreezeBalance 人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayableBalance 可提现余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaidBalance 已提现余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InPayBalance 提现中余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SumSettlementAmount 累计结算金额
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("SystemFreezeBalance",$param) and $param["SystemFreezeBalance"] !== null) {
            $this->SystemFreezeBalance = $param["SystemFreezeBalance"];
        }

        if (array_key_exists("ManualFreezeBalance",$param) and $param["ManualFreezeBalance"] !== null) {
            $this->ManualFreezeBalance = $param["ManualFreezeBalance"];
        }

        if (array_key_exists("PayableBalance",$param) and $param["PayableBalance"] !== null) {
            $this->PayableBalance = $param["PayableBalance"];
        }

        if (array_key_exists("PaidBalance",$param) and $param["PaidBalance"] !== null) {
            $this->PaidBalance = $param["PaidBalance"];
        }

        if (array_key_exists("InPayBalance",$param) and $param["InPayBalance"] !== null) {
            $this->InPayBalance = $param["InPayBalance"];
        }

        if (array_key_exists("SumSettlementAmount",$param) and $param["SumSettlementAmount"] !== null) {
            $this->SumSettlementAmount = $param["SumSettlementAmount"];
        }
    }
}
