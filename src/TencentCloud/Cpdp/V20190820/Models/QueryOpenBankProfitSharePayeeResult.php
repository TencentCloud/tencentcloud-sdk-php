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
 * 绑定分账收款方查询响应
 *
 * @method string getAccountId() 获取账户ID（受益ID）
 * @method void setAccountId(string $AccountId) 设置账户ID（受益ID）
 * @method string getAccountNo() 获取账户号。通联国际指客户银行账户号
 * @method void setAccountNo(string $AccountNo) 设置账户号。通联国际指客户银行账户号
 * @method string getCurrency() 获取账户货币。参考附录“币种类型”。
 * @method void setCurrency(string $Currency) 设置账户货币。参考附录“币种类型”。
 * @method string getAccountName() 获取收款人账户名称
 * @method void setAccountName(string $AccountName) 设置收款人账户名称
 * @method string getBankName() 获取银行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankName(string $BankName) 设置银行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNature() 获取账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNature(string $Nature) 设置账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindState() 获取状态
0-待审核；1-审核通过；2-审核不通过 3-关联实体未审核
 * @method void setBindState(string $BindState) 设置状态
0-待审核；1-审核通过；2-审核不通过 3-关联实体未审核
 * @method string getStateExplain() 获取状态描述
 * @method void setStateExplain(string $StateExplain) 设置状态描述
 */
class QueryOpenBankProfitSharePayeeResult extends AbstractModel
{
    /**
     * @var string 账户ID（受益ID）
     */
    public $AccountId;

    /**
     * @var string 账户号。通联国际指客户银行账户号
     */
    public $AccountNo;

    /**
     * @var string 账户货币。参考附录“币种类型”。
     */
    public $Currency;

    /**
     * @var string 收款人账户名称
     */
    public $AccountName;

    /**
     * @var string 银行名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankName;

    /**
     * @var string 账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nature;

    /**
     * @var string 状态
0-待审核；1-审核通过；2-审核不通过 3-关联实体未审核
     */
    public $BindState;

    /**
     * @var string 状态描述
     */
    public $StateExplain;

    /**
     * @param string $AccountId 账户ID（受益ID）
     * @param string $AccountNo 账户号。通联国际指客户银行账户号
     * @param string $Currency 账户货币。参考附录“币种类型”。
     * @param string $AccountName 收款人账户名称
     * @param string $BankName 银行名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nature 账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindState 状态
0-待审核；1-审核通过；2-审核不通过 3-关联实体未审核
     * @param string $StateExplain 状态描述
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

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("Nature",$param) and $param["Nature"] !== null) {
            $this->Nature = $param["Nature"];
        }

        if (array_key_exists("BindState",$param) and $param["BindState"] !== null) {
            $this->BindState = $param["BindState"];
        }

        if (array_key_exists("StateExplain",$param) and $param["StateExplain"] !== null) {
            $this->StateExplain = $param["StateExplain"];
        }
    }
}
