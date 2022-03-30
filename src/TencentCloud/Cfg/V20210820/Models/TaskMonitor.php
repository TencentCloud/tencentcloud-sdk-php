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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控指标
 *
 * @method integer getTaskMonitorId() 获取监控指标ID
 * @method void setTaskMonitorId(integer $TaskMonitorId) 设置监控指标ID
 * @method integer getTaskMonitorObjectTypeId() 获取监控指标对象类型ID
 * @method void setTaskMonitorObjectTypeId(integer $TaskMonitorObjectTypeId) 设置监控指标对象类型ID
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getInstancesIds() 获取实例ID列表
 * @method void setInstancesIds(array $InstancesIds) 设置实例ID列表
 * @method string getMetricChineseName() 获取中文指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricChineseName(string $MetricChineseName) 设置中文指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskMonitor extends AbstractModel
{
    /**
     * @var integer 监控指标ID
     */
    public $TaskMonitorId;

    /**
     * @var integer 监控指标对象类型ID
     */
    public $TaskMonitorObjectTypeId;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 实例ID列表
     */
    public $InstancesIds;

    /**
     * @var string 中文指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricChineseName;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @param integer $TaskMonitorId 监控指标ID
     * @param integer $TaskMonitorObjectTypeId 监控指标对象类型ID
     * @param string $MetricName 指标名称
     * @param array $InstancesIds 实例ID列表
     * @param string $MetricChineseName 中文指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
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
        if (array_key_exists("TaskMonitorId",$param) and $param["TaskMonitorId"] !== null) {
            $this->TaskMonitorId = $param["TaskMonitorId"];
        }

        if (array_key_exists("TaskMonitorObjectTypeId",$param) and $param["TaskMonitorObjectTypeId"] !== null) {
            $this->TaskMonitorObjectTypeId = $param["TaskMonitorObjectTypeId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InstancesIds",$param) and $param["InstancesIds"] !== null) {
            $this->InstancesIds = $param["InstancesIds"];
        }

        if (array_key_exists("MetricChineseName",$param) and $param["MetricChineseName"] !== null) {
            $this->MetricChineseName = $param["MetricChineseName"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
