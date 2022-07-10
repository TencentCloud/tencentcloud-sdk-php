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
 * 灵云V2-银行信息
 *
 * @method string getFundingAccountNo() 获取资金账户号
 * @method void setFundingAccountNo(string $FundingAccountNo) 设置资金账户号
 * @method string getFundingAccountType() 获取资金账户类型
 * @method void setFundingAccountType(string $FundingAccountType) 设置资金账户类型
 * @method string getFundingAccountBindSerialNo() 获取资金账户绑定序列号
 * @method void setFundingAccountBindSerialNo(string $FundingAccountBindSerialNo) 设置资金账户绑定序列号
 * @method string getFundingAccountName() 获取资金账户名称
 * @method void setFundingAccountName(string $FundingAccountName) 设置资金账户名称
 */
class FlexFundingAccountInfo extends AbstractModel
{
    /**
     * @var string 资金账户号
     */
    public $FundingAccountNo;

    /**
     * @var string 资金账户类型
     */
    public $FundingAccountType;

    /**
     * @var string 资金账户绑定序列号
     */
    public $FundingAccountBindSerialNo;

    /**
     * @var string 资金账户名称
     */
    public $FundingAccountName;

    /**
     * @param string $FundingAccountNo 资金账户号
     * @param string $FundingAccountType 资金账户类型
     * @param string $FundingAccountBindSerialNo 资金账户绑定序列号
     * @param string $FundingAccountName 资金账户名称
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
        if (array_key_exists("FundingAccountNo",$param) and $param["FundingAccountNo"] !== null) {
            $this->FundingAccountNo = $param["FundingAccountNo"];
        }

        if (array_key_exists("FundingAccountType",$param) and $param["FundingAccountType"] !== null) {
            $this->FundingAccountType = $param["FundingAccountType"];
        }

        if (array_key_exists("FundingAccountBindSerialNo",$param) and $param["FundingAccountBindSerialNo"] !== null) {
            $this->FundingAccountBindSerialNo = $param["FundingAccountBindSerialNo"];
        }

        if (array_key_exists("FundingAccountName",$param) and $param["FundingAccountName"] !== null) {
            $this->FundingAccountName = $param["FundingAccountName"];
        }
    }
}
