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
 * 监控指标配置
 *
 * @method string getMonitorMetricId() 获取监控指标 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorMetricId(string $MonitorMetricId) 设置监控指标 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmMonitorType() 获取告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmMonitorType(string $AlarmMonitorType) 设置告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetrics() 获取监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetrics(array $Metrics) 设置监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorMetricBrief extends AbstractModel
{
    /**
     * @var string 监控指标 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorMetricId;

    /**
     * @var string 告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmMonitorType;

    /**
     * @var array 监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metrics;

    /**
     * @param string $MonitorMetricId 监控指标 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmMonitorType 告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Metrics 监控指标列表
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
        if (array_key_exists("MonitorMetricId",$param) and $param["MonitorMetricId"] !== null) {
            $this->MonitorMetricId = $param["MonitorMetricId"];
        }

        if (array_key_exists("AlarmMonitorType",$param) and $param["AlarmMonitorType"] !== null) {
            $this->AlarmMonitorType = $param["AlarmMonitorType"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MonitorMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
