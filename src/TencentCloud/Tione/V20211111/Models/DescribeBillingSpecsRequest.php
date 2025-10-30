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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingSpecs请求参数结构体
 *
 * @method string getChargeType() 获取付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月
 * @method void setChargeType(string $ChargeType) 设置付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月
 * @method string getTaskType() 获取枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS
 * @method void setTaskType(string $TaskType) 设置枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS
 * @method string getResourceType() 获取资源类型：["", "CALC", "CPU", "GPU", "GPU-SW"]
 * @method void setResourceType(string $ResourceType) 设置资源类型：["", "CALC", "CPU", "GPU", "GPU-SW"]
 */
class DescribeBillingSpecsRequest extends AbstractModel
{
    /**
     * @var string 付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月
     */
    public $ChargeType;

    /**
     * @var string 枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS
     */
    public $TaskType;

    /**
     * @var string 资源类型：["", "CALC", "CPU", "GPU", "GPU-SW"]
     */
    public $ResourceType;

    /**
     * @param string $ChargeType 付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月
     * @param string $TaskType 枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS
     * @param string $ResourceType 资源类型：["", "CALC", "CPU", "GPU", "GPU-SW"]
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
