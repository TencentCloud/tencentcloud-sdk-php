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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingSpecs请求参数结构体
 *
 * @method string getTaskType() 获取枚举值：TRAIN、NOTEBOOK、INFERENCE
 * @method void setTaskType(string $TaskType) 设置枚举值：TRAIN、NOTEBOOK、INFERENCE
 * @method string getChargeType() 获取付费模式：POSTPAID_BY_HOUR后付费、PREPAID预付费
 * @method void setChargeType(string $ChargeType) 设置付费模式：POSTPAID_BY_HOUR后付费、PREPAID预付费
 * @method string getResourceType() 获取资源类型：CALC 计算资源、CPU CPU资源、GPU GPU资源、CBS云硬盘
 * @method void setResourceType(string $ResourceType) 设置资源类型：CALC 计算资源、CPU CPU资源、GPU GPU资源、CBS云硬盘
 */
class DescribeBillingSpecsRequest extends AbstractModel
{
    /**
     * @var string 枚举值：TRAIN、NOTEBOOK、INFERENCE
     */
    public $TaskType;

    /**
     * @var string 付费模式：POSTPAID_BY_HOUR后付费、PREPAID预付费
     */
    public $ChargeType;

    /**
     * @var string 资源类型：CALC 计算资源、CPU CPU资源、GPU GPU资源、CBS云硬盘
     */
    public $ResourceType;

    /**
     * @param string $TaskType 枚举值：TRAIN、NOTEBOOK、INFERENCE
     * @param string $ChargeType 付费模式：POSTPAID_BY_HOUR后付费、PREPAID预付费
     * @param string $ResourceType 资源类型：CALC 计算资源、CPU CPU资源、GPU GPU资源、CBS云硬盘
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
