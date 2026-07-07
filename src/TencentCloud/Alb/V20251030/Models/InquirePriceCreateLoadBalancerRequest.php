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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateLoadBalancer请求参数结构体
 *
 * @method string getChargeType() 获取实例的计费类型。默认POSTPAID_BY_HOUR，仅取值 POSTPAID_BY_HOUR：表示按量计费。
 * @method void setChargeType(string $ChargeType) 设置实例的计费类型。默认POSTPAID_BY_HOUR，仅取值 POSTPAID_BY_HOUR：表示按量计费。
 */
class InquirePriceCreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 实例的计费类型。默认POSTPAID_BY_HOUR，仅取值 POSTPAID_BY_HOUR：表示按量计费。
     */
    public $ChargeType;

    /**
     * @param string $ChargeType 实例的计费类型。默认POSTPAID_BY_HOUR，仅取值 POSTPAID_BY_HOUR：表示按量计费。
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
