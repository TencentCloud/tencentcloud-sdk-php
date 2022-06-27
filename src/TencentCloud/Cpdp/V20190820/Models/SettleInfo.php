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
 * 商户结算信息
 *
 * @method string getSettleAccountType() 获取结算账户类型 
PRIVATE：对私 
BUSINESS：对公
HELIPAY渠道必传
 * @method void setSettleAccountType(string $SettleAccountType) 设置结算账户类型 
PRIVATE：对私 
BUSINESS：对公
HELIPAY渠道必传
 * @method string getSettleAccountNumber() 获取结算账号
HELIPAY渠道必传
 * @method void setSettleAccountNumber(string $SettleAccountNumber) 设置结算账号
HELIPAY渠道必传
 * @method string getSettleAccountName() 获取结算账户名称
HELIPAY渠道必传
 * @method void setSettleAccountName(string $SettleAccountName) 设置结算账户名称
HELIPAY渠道必传
 * @method string getBankBranchId() 获取支行号
HELIPAY渠道必传
 * @method void setBankBranchId(string $BankBranchId) 设置支行号
HELIPAY渠道必传
 * @method string getBankBranchName() 获取支行名称
 * @method void setBankBranchName(string $BankBranchName) 设置支行名称
 * @method string getSettleMode() 获取结算方式 
AUTO：自动结算 
SELF：自主结算
HELIPAY渠道必传
 * @method void setSettleMode(string $SettleMode) 设置结算方式 
AUTO：自动结算 
SELF：自主结算
HELIPAY渠道必传
 * @method string getSettlePeriod() 获取结算周期 
T1：工作日隔天结算 
D1：自然日隔天结算 
D0：当日结算
HELIPAY渠道必传
 * @method void setSettlePeriod(string $SettlePeriod) 设置结算周期 
T1：工作日隔天结算 
D1：自然日隔天结算 
D0：当日结算
HELIPAY渠道必传
 */
class SettleInfo extends AbstractModel
{
    /**
     * @var string 结算账户类型 
PRIVATE：对私 
BUSINESS：对公
HELIPAY渠道必传
     */
    public $SettleAccountType;

    /**
     * @var string 结算账号
HELIPAY渠道必传
     */
    public $SettleAccountNumber;

    /**
     * @var string 结算账户名称
HELIPAY渠道必传
     */
    public $SettleAccountName;

    /**
     * @var string 支行号
HELIPAY渠道必传
     */
    public $BankBranchId;

    /**
     * @var string 支行名称
     */
    public $BankBranchName;

    /**
     * @var string 结算方式 
AUTO：自动结算 
SELF：自主结算
HELIPAY渠道必传
     */
    public $SettleMode;

    /**
     * @var string 结算周期 
T1：工作日隔天结算 
D1：自然日隔天结算 
D0：当日结算
HELIPAY渠道必传
     */
    public $SettlePeriod;

    /**
     * @param string $SettleAccountType 结算账户类型 
PRIVATE：对私 
BUSINESS：对公
HELIPAY渠道必传
     * @param string $SettleAccountNumber 结算账号
HELIPAY渠道必传
     * @param string $SettleAccountName 结算账户名称
HELIPAY渠道必传
     * @param string $BankBranchId 支行号
HELIPAY渠道必传
     * @param string $BankBranchName 支行名称
     * @param string $SettleMode 结算方式 
AUTO：自动结算 
SELF：自主结算
HELIPAY渠道必传
     * @param string $SettlePeriod 结算周期 
T1：工作日隔天结算 
D1：自然日隔天结算 
D0：当日结算
HELIPAY渠道必传
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
        if (array_key_exists("SettleAccountType",$param) and $param["SettleAccountType"] !== null) {
            $this->SettleAccountType = $param["SettleAccountType"];
        }

        if (array_key_exists("SettleAccountNumber",$param) and $param["SettleAccountNumber"] !== null) {
            $this->SettleAccountNumber = $param["SettleAccountNumber"];
        }

        if (array_key_exists("SettleAccountName",$param) and $param["SettleAccountName"] !== null) {
            $this->SettleAccountName = $param["SettleAccountName"];
        }

        if (array_key_exists("BankBranchId",$param) and $param["BankBranchId"] !== null) {
            $this->BankBranchId = $param["BankBranchId"];
        }

        if (array_key_exists("BankBranchName",$param) and $param["BankBranchName"] !== null) {
            $this->BankBranchName = $param["BankBranchName"];
        }

        if (array_key_exists("SettleMode",$param) and $param["SettleMode"] !== null) {
            $this->SettleMode = $param["SettleMode"];
        }

        if (array_key_exists("SettlePeriod",$param) and $param["SettlePeriod"] !== null) {
            $this->SettlePeriod = $param["SettlePeriod"];
        }
    }
}
