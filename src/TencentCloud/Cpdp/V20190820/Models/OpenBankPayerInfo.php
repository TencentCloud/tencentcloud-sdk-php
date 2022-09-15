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
 * 云企付-付款人信息
 *
 * @method string getPayerId() 获取付款方唯一标识。当TENPAY时，必填上送
付款方入驻云企付商户ID。
 * @method void setPayerId(string $PayerId) 设置付款方唯一标识。当TENPAY时，必填上送
付款方入驻云企付商户ID。
 * @method string getPayerName() 获取付款方名称。当TENPAY上送付款方入驻云企付的商户名称。
 * @method void setPayerName(string $PayerName) 设置付款方名称。当TENPAY上送付款方入驻云企付的商户名称。
 * @method string getBindSerialNo() 获取付款方付款账户标识。
当付款方式为OPENBANK_PAYMENT时，必输表示企业账户ID；当付款方式为SAFT_ISV时，必须上送付款方的渠道电子记账本ID；当付款方式为ONLINEBANK，上送付款方银行编号BankId。
 * @method void setBindSerialNo(string $BindSerialNo) 设置付款方付款账户标识。
当付款方式为OPENBANK_PAYMENT时，必输表示企业账户ID；当付款方式为SAFT_ISV时，必须上送付款方的渠道电子记账本ID；当付款方式为ONLINEBANK，上送付款方银行编号BankId。
 * @method string getAccountType() 获取付款账户标识类型
BANK_ACCOUNT：绑定银行账户
ACCOUNT_BOOK_ID：电子记账本ID。
当付款方式为SAFT_ISV时，必须上送类型为ACCOUNT_BOOK_ID。
 * @method void setAccountType(string $AccountType) 设置付款账户标识类型
BANK_ACCOUNT：绑定银行账户
ACCOUNT_BOOK_ID：电子记账本ID。
当付款方式为SAFT_ISV时，必须上送类型为ACCOUNT_BOOK_ID。
 * @method string getBankCardType() 获取付款卡类型。汇付渠道必填。
DEBIT_CARD：借记卡
CREDIT_CARD：信用卡
 * @method void setBankCardType(string $BankCardType) 设置付款卡类型。汇付渠道必填。
DEBIT_CARD：借记卡
CREDIT_CARD：信用卡
 */
class OpenBankPayerInfo extends AbstractModel
{
    /**
     * @var string 付款方唯一标识。当TENPAY时，必填上送
付款方入驻云企付商户ID。
     */
    public $PayerId;

    /**
     * @var string 付款方名称。当TENPAY上送付款方入驻云企付的商户名称。
     */
    public $PayerName;

    /**
     * @var string 付款方付款账户标识。
当付款方式为OPENBANK_PAYMENT时，必输表示企业账户ID；当付款方式为SAFT_ISV时，必须上送付款方的渠道电子记账本ID；当付款方式为ONLINEBANK，上送付款方银行编号BankId。
     */
    public $BindSerialNo;

    /**
     * @var string 付款账户标识类型
BANK_ACCOUNT：绑定银行账户
ACCOUNT_BOOK_ID：电子记账本ID。
当付款方式为SAFT_ISV时，必须上送类型为ACCOUNT_BOOK_ID。
     */
    public $AccountType;

    /**
     * @var string 付款卡类型。汇付渠道必填。
DEBIT_CARD：借记卡
CREDIT_CARD：信用卡
     */
    public $BankCardType;

    /**
     * @param string $PayerId 付款方唯一标识。当TENPAY时，必填上送
付款方入驻云企付商户ID。
     * @param string $PayerName 付款方名称。当TENPAY上送付款方入驻云企付的商户名称。
     * @param string $BindSerialNo 付款方付款账户标识。
当付款方式为OPENBANK_PAYMENT时，必输表示企业账户ID；当付款方式为SAFT_ISV时，必须上送付款方的渠道电子记账本ID；当付款方式为ONLINEBANK，上送付款方银行编号BankId。
     * @param string $AccountType 付款账户标识类型
BANK_ACCOUNT：绑定银行账户
ACCOUNT_BOOK_ID：电子记账本ID。
当付款方式为SAFT_ISV时，必须上送类型为ACCOUNT_BOOK_ID。
     * @param string $BankCardType 付款卡类型。汇付渠道必填。
DEBIT_CARD：借记卡
CREDIT_CARD：信用卡
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
        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }

        if (array_key_exists("PayerName",$param) and $param["PayerName"] !== null) {
            $this->PayerName = $param["PayerName"];
        }

        if (array_key_exists("BindSerialNo",$param) and $param["BindSerialNo"] !== null) {
            $this->BindSerialNo = $param["BindSerialNo"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("BankCardType",$param) and $param["BankCardType"] !== null) {
            $this->BankCardType = $param["BankCardType"];
        }
    }
}
