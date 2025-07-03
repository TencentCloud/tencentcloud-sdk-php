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
 * DescribeCPUExpandStrategyInfo返回参数结构体
 *
 * @method string getType() 获取策略类型。输出值：auto、manual、timeInterval、period。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。5. 如果返回为 NULL 说明尚未开通弹性扩容策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置策略类型。输出值：auto、manual、timeInterval、period。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。5. 如果返回为 NULL 说明尚未开通弹性扩容策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpandCpu() 获取自定义扩容，且扩容时间为立即生效时的 CPU。Type 为 manual 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpandCpu(integer $ExpandCpu) 设置自定义扩容，且扩容时间为立即生效时的 CPU。Type 为 manual 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AutoStrategy getAutoStrategy() 获取自动扩容策略。Type 为 auto 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoStrategy(AutoStrategy $AutoStrategy) 设置自动扩容策略。Type 为 auto 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PeriodStrategy getPeriodStrategy() 获取按周期扩容策略。当 Type 为 period 时有效。
 * @method void setPeriodStrategy(PeriodStrategy $PeriodStrategy) 设置按周期扩容策略。当 Type 为 period 时有效。
 * @method TimeIntervalStrategy getTimeIntervalStrategy() 获取按时间段扩容策略。当 Type 为 timeInterval 时有效。
 * @method void setTimeIntervalStrategy(TimeIntervalStrategy $TimeIntervalStrategy) 设置按时间段扩容策略。当 Type 为 timeInterval 时有效。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCPUExpandStrategyInfoResponse extends AbstractModel
{
    /**
     * @var string 策略类型。输出值：auto、manual、timeInterval、period。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。5. 如果返回为 NULL 说明尚未开通弹性扩容策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 自定义扩容，且扩容时间为立即生效时的 CPU。Type 为 manual 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpandCpu;

    /**
     * @var AutoStrategy 自动扩容策略。Type 为 auto 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoStrategy;

    /**
     * @var PeriodStrategy 按周期扩容策略。当 Type 为 period 时有效。
     */
    public $PeriodStrategy;

    /**
     * @var TimeIntervalStrategy 按时间段扩容策略。当 Type 为 timeInterval 时有效。
     */
    public $TimeIntervalStrategy;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 策略类型。输出值：auto、manual、timeInterval、period。
说明：1. auto 表示自动扩容。2. manual 表示自定义扩容，扩容时间为立即生效。3. timeInterval 表示自定义扩容，扩容时间为按时间段。4. period 表示自定义扩容，扩容时间为按周期。5. 如果返回为 NULL 说明尚未开通弹性扩容策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpandCpu 自定义扩容，且扩容时间为立即生效时的 CPU。Type 为 manual 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AutoStrategy $AutoStrategy 自动扩容策略。Type 为 auto 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PeriodStrategy $PeriodStrategy 按周期扩容策略。当 Type 为 period 时有效。
     * @param TimeIntervalStrategy $TimeIntervalStrategy 按时间段扩容策略。当 Type 为 timeInterval 时有效。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("PeriodStrategy",$param) and $param["PeriodStrategy"] !== null) {
            $this->PeriodStrategy = new PeriodStrategy();
            $this->PeriodStrategy->deserialize($param["PeriodStrategy"]);
        }

        if (array_key_exists("TimeIntervalStrategy",$param) and $param["TimeIntervalStrategy"] !== null) {
            $this->TimeIntervalStrategy = new TimeIntervalStrategy();
            $this->TimeIntervalStrategy->deserialize($param["TimeIntervalStrategy"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
