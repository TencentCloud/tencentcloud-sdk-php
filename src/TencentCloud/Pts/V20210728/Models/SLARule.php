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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SLA 规则
 *
 * @method string getMetric() 获取压测指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetric(string $Metric) 设置压测指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAggregation() 获取压测指标聚合方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggregation(string $Aggregation) 设置压测指标聚合方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCondition() 获取压测指标条件判断符号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(string $Condition) 设置压测指标条件判断符号
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelFilter() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelFilter(array $LabelFilter) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAbortFlag() 获取是否停止压测任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbortFlag(boolean $AbortFlag) 设置是否停止压测任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFor() 获取持续时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFor(string $For) 设置持续时长
注意：此字段可能返回 null，表示取不到有效值。
 */
class SLARule extends AbstractModel
{
    /**
     * @var string 压测指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metric;

    /**
     * @var string 压测指标聚合方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Aggregation;

    /**
     * @var string 压测指标条件判断符号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var float 阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelFilter;

    /**
     * @var boolean 是否停止压测任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbortFlag;

    /**
     * @var string 持续时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $For;

    /**
     * @param string $Metric 压测指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Aggregation 压测指标聚合方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Condition 压测指标条件判断符号
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value 阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelFilter 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AbortFlag 是否停止压测任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $For 持续时长
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LabelFilter",$param) and $param["LabelFilter"] !== null) {
            $this->LabelFilter = [];
            foreach ($param["LabelFilter"] as $key => $value){
                $obj = new SLALabel();
                $obj->deserialize($value);
                array_push($this->LabelFilter, $obj);
            }
        }

        if (array_key_exists("AbortFlag",$param) and $param["AbortFlag"] !== null) {
            $this->AbortFlag = $param["AbortFlag"];
        }

        if (array_key_exists("For",$param) and $param["For"] !== null) {
            $this->For = $param["For"];
        }
    }
}
