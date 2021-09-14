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
namespace TencentCloud\Af\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAntiFraud请求参数结构体
 *
 * @method FinanceAntiFraudFilter getBusinessSecurityData() 获取原始业务入参(二选一）
 * @method void setBusinessSecurityData(FinanceAntiFraudFilter $BusinessSecurityData) 设置原始业务入参(二选一）
 * @method FinanceAntiFraudCryptoFilter getBusinessCryptoData() 获取密文业务入参(二选一）
 * @method void setBusinessCryptoData(FinanceAntiFraudCryptoFilter $BusinessCryptoData) 设置密文业务入参(二选一）
 */
class DescribeAntiFraudRequest extends AbstractModel
{
    /**
     * @var FinanceAntiFraudFilter 原始业务入参(二选一）
     */
    public $BusinessSecurityData;

    /**
     * @var FinanceAntiFraudCryptoFilter 密文业务入参(二选一）
     */
    public $BusinessCryptoData;

    /**
     * @param FinanceAntiFraudFilter $BusinessSecurityData 原始业务入参(二选一）
     * @param FinanceAntiFraudCryptoFilter $BusinessCryptoData 密文业务入参(二选一）
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
        if (array_key_exists("BusinessSecurityData",$param) and $param["BusinessSecurityData"] !== null) {
            $this->BusinessSecurityData = new FinanceAntiFraudFilter();
            $this->BusinessSecurityData->deserialize($param["BusinessSecurityData"]);
        }

        if (array_key_exists("BusinessCryptoData",$param) and $param["BusinessCryptoData"] !== null) {
            $this->BusinessCryptoData = new FinanceAntiFraudCryptoFilter();
            $this->BusinessCryptoData->deserialize($param["BusinessCryptoData"]);
        }
    }
}
