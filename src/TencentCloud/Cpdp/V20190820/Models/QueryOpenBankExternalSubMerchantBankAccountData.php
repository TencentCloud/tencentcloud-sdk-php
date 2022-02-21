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
 * 第三方子商户银行卡列表查询返回数据
 *
 * @method string getAccountBank() 获取开户银行。
 * @method void setAccountBank(string $AccountBank) 设置开户银行。
 * @method string getBindSerialNo() 获取绑卡序列号。
 * @method void setBindSerialNo(string $BindSerialNo) 设置绑卡序列号。
 * @method string getAccountType() 获取账号类型。
__COLLECT_MONEY__: 收款卡
__PAYMENT__: 付款卡
 * @method void setAccountType(string $AccountType) 设置账号类型。
__COLLECT_MONEY__: 收款卡
__PAYMENT__: 付款卡
 * @method string getBankBranchId() 获取支行号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankBranchId(string $BankBranchId) 设置支行号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountNumberLastFour() 获取银行卡卡后四位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountNumberLastFour(string $AccountNumberLastFour) 设置银行卡卡后四位。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankExternalSubMerchantBankAccountData extends AbstractModel
{
    /**
     * @var string 开户银行。
     */
    public $AccountBank;

    /**
     * @var string 绑卡序列号。
     */
    public $BindSerialNo;

    /**
     * @var string 账号类型。
__COLLECT_MONEY__: 收款卡
__PAYMENT__: 付款卡
     */
    public $AccountType;

    /**
     * @var string 支行号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankBranchId;

    /**
     * @var string 银行卡卡后四位。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountNumberLastFour;

    /**
     * @param string $AccountBank 开户银行。
     * @param string $BindSerialNo 绑卡序列号。
     * @param string $AccountType 账号类型。
__COLLECT_MONEY__: 收款卡
__PAYMENT__: 付款卡
     * @param string $BankBranchId 支行号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountNumberLastFour 银行卡卡后四位。
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
        if (array_key_exists("AccountBank",$param) and $param["AccountBank"] !== null) {
            $this->AccountBank = $param["AccountBank"];
        }

        if (array_key_exists("BindSerialNo",$param) and $param["BindSerialNo"] !== null) {
            $this->BindSerialNo = $param["BindSerialNo"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("BankBranchId",$param) and $param["BankBranchId"] !== null) {
            $this->BankBranchId = $param["BankBranchId"];
        }

        if (array_key_exists("AccountNumberLastFour",$param) and $param["AccountNumberLastFour"] !== null) {
            $this->AccountNumberLastFour = $param["AccountNumberLastFour"];
        }
    }
}
