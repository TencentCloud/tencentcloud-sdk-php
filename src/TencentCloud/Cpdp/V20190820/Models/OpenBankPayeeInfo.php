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
 * 云企付-收款人信息
 *
 * @method string getPayeeId() 获取收款方唯一标识。当渠道为TENPAY，付款方式为EBANK_PAYMENT，必填，上送收款方入驻云企付商户ID；付款方式为OPENBANK_PAYMENT时，非必填，输入外部收款方的标识ID
 * @method void setPayeeId(string $PayeeId) 设置收款方唯一标识。当渠道为TENPAY，付款方式为EBANK_PAYMENT，必填，上送收款方入驻云企付商户ID；付款方式为OPENBANK_PAYMENT时，非必填，输入外部收款方的标识ID
 * @method string getPayeeName() 获取收款方名称。当渠道为TENPAY，付款方式为EBANK_PAYMENT时，上送收款方入驻云企付的商户名称；
渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选，上送收款方账户名称
 * @method void setPayeeName(string $PayeeName) 设置收款方名称。当渠道为TENPAY，付款方式为EBANK_PAYMENT时，上送收款方入驻云企付的商户名称；
渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选，上送收款方账户名称
 * @method string getBankAccountNumber() 获取银行账号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置银行账号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
 * @method string getBankBranchName() 获取支行名称。
 * @method void setBankBranchName(string $BankBranchName) 设置支行名称。
 * @method string getBankBranchId() 获取联行号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
 * @method void setBankBranchId(string $BankBranchId) 设置联行号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
 * @method string getBindSerialNo() 获取收款方绑卡序列号。
当渠道为TENPAY，付款方式为EBANK_PAYMENT时，必填，上送收款方入驻云企付平台时，下发的绑卡序列号。
 * @method void setBindSerialNo(string $BindSerialNo) 设置收款方绑卡序列号。
当渠道为TENPAY，付款方式为EBANK_PAYMENT时，必填，上送收款方入驻云企付平台时，下发的绑卡序列号。
 */
class OpenBankPayeeInfo extends AbstractModel
{
    /**
     * @var string 收款方唯一标识。当渠道为TENPAY，付款方式为EBANK_PAYMENT，必填，上送收款方入驻云企付商户ID；付款方式为OPENBANK_PAYMENT时，非必填，输入外部收款方的标识ID
     */
    public $PayeeId;

    /**
     * @var string 收款方名称。当渠道为TENPAY，付款方式为EBANK_PAYMENT时，上送收款方入驻云企付的商户名称；
渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选，上送收款方账户名称
     */
    public $PayeeName;

    /**
     * @var string 银行账号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
     */
    public $BankAccountNumber;

    /**
     * @var string 支行名称。
     */
    public $BankBranchName;

    /**
     * @var string 联行号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
     */
    public $BankBranchId;

    /**
     * @var string 收款方绑卡序列号。
当渠道为TENPAY，付款方式为EBANK_PAYMENT时，必填，上送收款方入驻云企付平台时，下发的绑卡序列号。
     */
    public $BindSerialNo;

    /**
     * @param string $PayeeId 收款方唯一标识。当渠道为TENPAY，付款方式为EBANK_PAYMENT，必填，上送收款方入驻云企付商户ID；付款方式为OPENBANK_PAYMENT时，非必填，输入外部收款方的标识ID
     * @param string $PayeeName 收款方名称。当渠道为TENPAY，付款方式为EBANK_PAYMENT时，上送收款方入驻云企付的商户名称；
渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选，上送收款方账户名称
     * @param string $BankAccountNumber 银行账号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
     * @param string $BankBranchName 支行名称。
     * @param string $BankBranchId 联行号。渠道为TENPAY，付款方式为OPENBANK_PAYMENT时必选
     * @param string $BindSerialNo 收款方绑卡序列号。
当渠道为TENPAY，付款方式为EBANK_PAYMENT时，必填，上送收款方入驻云企付平台时，下发的绑卡序列号。
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("BankBranchName",$param) and $param["BankBranchName"] !== null) {
            $this->BankBranchName = $param["BankBranchName"];
        }

        if (array_key_exists("BankBranchId",$param) and $param["BankBranchId"] !== null) {
            $this->BankBranchId = $param["BankBranchId"];
        }

        if (array_key_exists("BindSerialNo",$param) and $param["BindSerialNo"] !== null) {
            $this->BindSerialNo = $param["BindSerialNo"];
        }
    }
}
