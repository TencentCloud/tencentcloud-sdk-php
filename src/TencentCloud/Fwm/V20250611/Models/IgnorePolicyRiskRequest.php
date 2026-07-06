<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IgnorePolicyRisk请求参数结构体
 *
 * @method string getRiskId() 获取策略问题ID
 * @method void setRiskId(string $RiskId) 设置策略问题ID
 * @method string getMemberId() 获取成员Id
 * @method void setMemberId(string $MemberId) 设置成员Id
 */
class IgnorePolicyRiskRequest extends AbstractModel
{
    /**
     * @var string 策略问题ID
     */
    public $RiskId;

    /**
     * @var string 成员Id
     */
    public $MemberId;

    /**
     * @param string $RiskId 策略问题ID
     * @param string $MemberId 成员Id
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
