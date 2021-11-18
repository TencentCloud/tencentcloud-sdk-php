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
 * GetAntiFraud请求参数结构体
 *
 * @method AntiFraudFilter getBusinessSecurityData() 获取默认不传，约定用原始业务
入参(二选一BusinessSecurityData 或
BusinessCryptoData)。
 * @method void setBusinessSecurityData(AntiFraudFilter $BusinessSecurityData) 设置默认不传，约定用原始业务
入参(二选一BusinessSecurityData 或
BusinessCryptoData)。
 * @method AntiFraudCryptoFilter getBusinessCryptoData() 获取默认不传，约定用密文业务
入参(二选一
BusinessSecurityData 或
BusinessCryptoData)。
 * @method void setBusinessCryptoData(AntiFraudCryptoFilter $BusinessCryptoData) 设置默认不传，约定用密文业务
入参(二选一
BusinessSecurityData 或
BusinessCryptoData)。
 */
class GetAntiFraudRequest extends AbstractModel
{
    /**
     * @var AntiFraudFilter 默认不传，约定用原始业务
入参(二选一BusinessSecurityData 或
BusinessCryptoData)。
     */
    public $BusinessSecurityData;

    /**
     * @var AntiFraudCryptoFilter 默认不传，约定用密文业务
入参(二选一
BusinessSecurityData 或
BusinessCryptoData)。
     */
    public $BusinessCryptoData;

    /**
     * @param AntiFraudFilter $BusinessSecurityData 默认不传，约定用原始业务
入参(二选一BusinessSecurityData 或
BusinessCryptoData)。
     * @param AntiFraudCryptoFilter $BusinessCryptoData 默认不传，约定用密文业务
入参(二选一
BusinessSecurityData 或
BusinessCryptoData)。
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
            $this->BusinessSecurityData = new AntiFraudFilter();
            $this->BusinessSecurityData->deserialize($param["BusinessSecurityData"]);
        }

        if (array_key_exists("BusinessCryptoData",$param) and $param["BusinessCryptoData"] !== null) {
            $this->BusinessCryptoData = new AntiFraudCryptoFilter();
            $this->BusinessCryptoData->deserialize($param["BusinessCryptoData"]);
        }
    }
}
