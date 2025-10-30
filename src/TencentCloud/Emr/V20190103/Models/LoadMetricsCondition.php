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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载指标条件
 *
 * @method integer getStatisticPeriod() 获取规则统计周期，提供1min,3min,5min。
 * @method void setStatisticPeriod(integer $StatisticPeriod) 设置规则统计周期，提供1min,3min,5min。
 * @method integer getTriggerThreshold() 获取触发次数，当连续触发超过TriggerThreshold次后才开始扩缩容。
 * @method void setTriggerThreshold(integer $TriggerThreshold) 设置触发次数，当连续触发超过TriggerThreshold次后才开始扩缩容。
 * @method string getLoadMetrics() 获取扩缩容负载指标。
 * @method void setLoadMetrics(string $LoadMetrics) 设置扩缩容负载指标。
 * @method integer getMetricId() 获取规则元数据记录ID。
 * @method void setMetricId(integer $MetricId) 设置规则元数据记录ID。
 * @method array getConditions() 获取触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置触发条件
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadMetricsCondition extends AbstractModel
{
    /**
     * @var integer 规则统计周期，提供1min,3min,5min。
     */
    public $StatisticPeriod;

    /**
     * @var integer 触发次数，当连续触发超过TriggerThreshold次后才开始扩缩容。
     */
    public $TriggerThreshold;

    /**
     * @var string 扩缩容负载指标。
     */
    public $LoadMetrics;

    /**
     * @var integer 规则元数据记录ID。
     */
    public $MetricId;

    /**
     * @var array 触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @param integer $StatisticPeriod 规则统计周期，提供1min,3min,5min。
     * @param integer $TriggerThreshold 触发次数，当连续触发超过TriggerThreshold次后才开始扩缩容。
     * @param string $LoadMetrics 扩缩容负载指标。
     * @param integer $MetricId 规则元数据记录ID。
     * @param array $Conditions 触发条件
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
        if (array_key_exists("StatisticPeriod",$param) and $param["StatisticPeriod"] !== null) {
            $this->StatisticPeriod = $param["StatisticPeriod"];
        }

        if (array_key_exists("TriggerThreshold",$param) and $param["TriggerThreshold"] !== null) {
            $this->TriggerThreshold = $param["TriggerThreshold"];
        }

        if (array_key_exists("LoadMetrics",$param) and $param["LoadMetrics"] !== null) {
            $this->LoadMetrics = $param["LoadMetrics"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new TriggerCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
