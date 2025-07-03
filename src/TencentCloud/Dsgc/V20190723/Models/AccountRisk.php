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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户风险
 *
 * @method string getId() 获取id（可不参考）
 * @method void setId(string $Id) 设置id（可不参考）
 * @method string getRiskAccount() 获取风险账户
 * @method void setRiskAccount(string $RiskAccount) 设置风险账户
 */
class AccountRisk extends AbstractModel
{
    /**
     * @var string id（可不参考）
     */
    public $Id;

    /**
     * @var string 风险账户
     */
    public $RiskAccount;

    /**
     * @param string $Id id（可不参考）
     * @param string $RiskAccount 风险账户
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RiskAccount",$param) and $param["RiskAccount"] !== null) {
            $this->RiskAccount = $param["RiskAccount"];
        }
    }
}
