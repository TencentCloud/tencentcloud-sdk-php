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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个监控指标
 *
 * @method string getMetricType() 获取监控指标类型,有三种类型：1. RUN_DURATION（运行时长）2. WAIT_DURATION（等待时长）3. COMPLETION_TIME（完成时间）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricType(string $MetricType) 设置监控指标类型,有三种类型：1. RUN_DURATION（运行时长）2. WAIT_DURATION（等待时长）3. COMPLETION_TIME（完成时间）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarningThreshold() 获取警告阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarningThreshold(string $WarningThreshold) 设置警告阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeoutThreshold() 获取超时阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutThreshold(string $TimeoutThreshold) 设置超时阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorMetricItem extends AbstractModel
{
    /**
     * @var string 监控指标类型,有三种类型：1. RUN_DURATION（运行时长）2. WAIT_DURATION（等待时长）3. COMPLETION_TIME（完成时间）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricType;

    /**
     * @var string 警告阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarningThreshold;

    /**
     * @var string 超时阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutThreshold;

    /**
     * @param string $MetricType 监控指标类型,有三种类型：1. RUN_DURATION（运行时长）2. WAIT_DURATION（等待时长）3. COMPLETION_TIME（完成时间）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarningThreshold 警告阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeoutThreshold 超时阈值，单位为毫秒级别，对于COMPLETION_TIME:从当日时间点00:00起算
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("WarningThreshold",$param) and $param["WarningThreshold"] !== null) {
            $this->WarningThreshold = $param["WarningThreshold"];
        }

        if (array_key_exists("TimeoutThreshold",$param) and $param["TimeoutThreshold"] !== null) {
            $this->TimeoutThreshold = $param["TimeoutThreshold"];
        }
    }
}
