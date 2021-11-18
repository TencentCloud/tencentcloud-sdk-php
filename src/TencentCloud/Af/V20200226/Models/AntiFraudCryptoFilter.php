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
 * AntiFraudCryptoFilter – 业务入参
 *
 * @method string getCryptoType() 获取约定用入参，默认不涉及默认BusinessSecurityData 与BusinessCrptoData 不传
 * @method void setCryptoType(string $CryptoType) 设置约定用入参，默认不涉及默认BusinessSecurityData 与BusinessCrptoData 不传
 * @method string getCryptoContent() 获取约定用入参，默认不涉及
 * @method void setCryptoContent(string $CryptoContent) 设置约定用入参，默认不涉及
 */
class AntiFraudCryptoFilter extends AbstractModel
{
    /**
     * @var string 约定用入参，默认不涉及默认BusinessSecurityData 与BusinessCrptoData 不传
     */
    public $CryptoType;

    /**
     * @var string 约定用入参，默认不涉及
     */
    public $CryptoContent;

    /**
     * @param string $CryptoType 约定用入参，默认不涉及默认BusinessSecurityData 与BusinessCrptoData 不传
     * @param string $CryptoContent 约定用入参，默认不涉及
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
        if (array_key_exists("CryptoType",$param) and $param["CryptoType"] !== null) {
            $this->CryptoType = $param["CryptoType"];
        }

        if (array_key_exists("CryptoContent",$param) and $param["CryptoContent"] !== null) {
            $this->CryptoContent = $param["CryptoContent"];
        }
    }
}
