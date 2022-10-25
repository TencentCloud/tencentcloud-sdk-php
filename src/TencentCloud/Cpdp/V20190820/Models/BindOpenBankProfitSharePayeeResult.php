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
 * 绑定分账收款方响应
 *
 * @method string getAccountId() 获取账户ID。受益人ID
 * @method void setAccountId(string $AccountId) 设置账户ID。受益人ID
 * @method string getAccountNo() 获取账户号，通联渠道指客户银行账号
 * @method void setAccountNo(string $AccountNo) 设置账户号，通联渠道指客户银行账号
 * @method string getCurrency() 获取账户货币。参考附录“币种类型”。
 * @method void setCurrency(string $Currency) 设置账户货币。参考附录“币种类型”。
 */
class BindOpenBankProfitSharePayeeResult extends AbstractModel
{
    /**
     * @var string 账户ID。受益人ID
     */
    public $AccountId;

    /**
     * @var string 账户号，通联渠道指客户银行账号
     */
    public $AccountNo;

    /**
     * @var string 账户货币。参考附录“币种类型”。
     */
    public $Currency;

    /**
     * @param string $AccountId 账户ID。受益人ID
     * @param string $AccountNo 账户号，通联渠道指客户银行账号
     * @param string $Currency 账户货币。参考附录“币种类型”。
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
    }
}
