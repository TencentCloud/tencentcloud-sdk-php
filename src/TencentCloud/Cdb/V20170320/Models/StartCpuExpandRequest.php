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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartCpuExpand请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getType() 获取扩容类型，支持自动扩容和自定义扩容。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。
 * @method void setType(string $Type) 设置扩容类型，支持自动扩容和自定义扩容。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。
 * @method integer getExpandCpu() 获取自定义扩容时，扩容的 CPU 核心数。
说明：1. Type 为 manual、timeInterval、period 时必传。2. 扩容的 CPU 核心数上限为当前实例 CPU 核心数，比如8核16G最大可手动扩容的 CPU 核心数为8，即范围为1 - 8。
 * @method void setExpandCpu(integer $ExpandCpu) 设置自定义扩容时，扩容的 CPU 核心数。
说明：1. Type 为 manual、timeInterval、period 时必传。2. 扩容的 CPU 核心数上限为当前实例 CPU 核心数，比如8核16G最大可手动扩容的 CPU 核心数为8，即范围为1 - 8。
 * @method AutoStrategy getAutoStrategy() 获取自动扩容策略。Type 为 auto 时必传。
 * @method void setAutoStrategy(AutoStrategy $AutoStrategy) 设置自动扩容策略。Type 为 auto 时必传。
 * @method TimeIntervalStrategy getTimeIntervalStrategy() 获取按时间段扩容策略。
说明：当 Type 为 timeInterval 时，TimeIntervalStrategy 必填。
 * @method void setTimeIntervalStrategy(TimeIntervalStrategy $TimeIntervalStrategy) 设置按时间段扩容策略。
说明：当 Type 为 timeInterval 时，TimeIntervalStrategy 必填。
 * @method PeriodStrategy getPeriodStrategy() 获取按周期扩容策略。
说明：当 Type 为 period 时，PeriodStrategy 必填。
 * @method void setPeriodStrategy(PeriodStrategy $PeriodStrategy) 设置按周期扩容策略。
说明：当 Type 为 period 时，PeriodStrategy 必填。
 */
class StartCpuExpandRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 扩容类型，支持自动扩容和自定义扩容。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。
     */
    public $Type;

    /**
     * @var integer 自定义扩容时，扩容的 CPU 核心数。
说明：1. Type 为 manual、timeInterval、period 时必传。2. 扩容的 CPU 核心数上限为当前实例 CPU 核心数，比如8核16G最大可手动扩容的 CPU 核心数为8，即范围为1 - 8。
     */
    public $ExpandCpu;

    /**
     * @var AutoStrategy 自动扩容策略。Type 为 auto 时必传。
     */
    public $AutoStrategy;

    /**
     * @var TimeIntervalStrategy 按时间段扩容策略。
说明：当 Type 为 timeInterval 时，TimeIntervalStrategy 必填。
     */
    public $TimeIntervalStrategy;

    /**
     * @var PeriodStrategy 按周期扩容策略。
说明：当 Type 为 period 时，PeriodStrategy 必填。
     */
    public $PeriodStrategy;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $Type 扩容类型，支持自动扩容和自定义扩容。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。
     * @param integer $ExpandCpu 自定义扩容时，扩容的 CPU 核心数。
说明：1. Type 为 manual、timeInterval、period 时必传。2. 扩容的 CPU 核心数上限为当前实例 CPU 核心数，比如8核16G最大可手动扩容的 CPU 核心数为8，即范围为1 - 8。
     * @param AutoStrategy $AutoStrategy 自动扩容策略。Type 为 auto 时必传。
     * @param TimeIntervalStrategy $TimeIntervalStrategy 按时间段扩容策略。
说明：当 Type 为 timeInterval 时，TimeIntervalStrategy 必填。
     * @param PeriodStrategy $PeriodStrategy 按周期扩容策略。
说明：当 Type 为 period 时，PeriodStrategy 必填。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("AutoStrategy",$param) and $param["AutoStrategy"] !== null) {
            $this->AutoStrategy = new AutoStrategy();
            $this->AutoStrategy->deserialize($param["AutoStrategy"]);
        }

        if (array_key_exists("TimeIntervalStrategy",$param) and $param["TimeIntervalStrategy"] !== null) {
            $this->TimeIntervalStrategy = new TimeIntervalStrategy();
            $this->TimeIntervalStrategy->deserialize($param["TimeIntervalStrategy"]);
        }

        if (array_key_exists("PeriodStrategy",$param) and $param["PeriodStrategy"] !== null) {
            $this->PeriodStrategy = new PeriodStrategy();
            $this->PeriodStrategy->deserialize($param["PeriodStrategy"]);
        }
    }
}
