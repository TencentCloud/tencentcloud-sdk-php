<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 平台账户余额信息
 *
 * @method string getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncomeType(string $IncomeType) 设置收入类型
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
 * @method string getInPayBalance() 获取提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayBalance(string $InPayBalance) 设置提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlatformAccountBalanceResult extends AbstractModel
{
    /**
     * @var string 收入类型
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
     * @var string 提现中余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayBalance;

    /**
     * @param string $IncomeType 收入类型
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
     * @param string $InPayBalance 提现中余额
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

        if (array_key_exists("InPayBalance",$param) and $param["InPayBalance"] !== null) {
            $this->InPayBalance = $param["InPayBalance"];
        }
    }
}
