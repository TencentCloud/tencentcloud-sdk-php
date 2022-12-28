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
 * AddFlexFundingAccount请求参数结构体
 *
 * @method string getFundingAccountType() 获取资金账户类型
PINGAN_BANK:平安银行
 * @method void setFundingAccountType(string $FundingAccountType) 设置资金账户类型
PINGAN_BANK:平安银行
 * @method string getFundingAccountName() 获取收款资金账户姓名
 * @method void setFundingAccountName(string $FundingAccountName) 设置收款资金账户姓名
 * @method string getFundingAccountNo() 获取收款资金账户号
 * @method void setFundingAccountNo(string $FundingAccountNo) 设置收款资金账户号
 * @method string getPhoneNo() 获取收款资金账户手机号
 * @method void setPhoneNo(string $PhoneNo) 设置收款资金账户手机号
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method string getBankBranchName() 获取开户支行名
 * @method void setBankBranchName(string $BankBranchName) 设置开户支行名
 */
class AddFlexFundingAccountRequest extends AbstractModel
{
    /**
     * @var string 资金账户类型
PINGAN_BANK:平安银行
     */
    public $FundingAccountType;

    /**
     * @var string 收款资金账户姓名
     */
    public $FundingAccountName;

    /**
     * @var string 收款资金账户号
     */
    public $FundingAccountNo;

    /**
     * @var string 收款资金账户手机号
     */
    public $PhoneNo;

    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @var string 开户支行名
     */
    public $BankBranchName;

    /**
     * @param string $FundingAccountType 资金账户类型
PINGAN_BANK:平安银行
     * @param string $FundingAccountName 收款资金账户姓名
     * @param string $FundingAccountNo 收款资金账户号
     * @param string $PhoneNo 收款资金账户手机号
     * @param string $PayeeId 收款用户ID
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     * @param string $BankBranchName 开户支行名
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
        if (array_key_exists("FundingAccountType",$param) and $param["FundingAccountType"] !== null) {
            $this->FundingAccountType = $param["FundingAccountType"];
        }

        if (array_key_exists("FundingAccountName",$param) and $param["FundingAccountName"] !== null) {
            $this->FundingAccountName = $param["FundingAccountName"];
        }

        if (array_key_exists("FundingAccountNo",$param) and $param["FundingAccountNo"] !== null) {
            $this->FundingAccountNo = $param["FundingAccountNo"];
        }

        if (array_key_exists("PhoneNo",$param) and $param["PhoneNo"] !== null) {
            $this->PhoneNo = $param["PhoneNo"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("BankBranchName",$param) and $param["BankBranchName"] !== null) {
            $this->BankBranchName = $param["BankBranchName"];
        }
    }
}
