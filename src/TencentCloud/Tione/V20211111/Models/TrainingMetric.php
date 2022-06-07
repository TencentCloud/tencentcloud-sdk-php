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
 * 训练指标
 *
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method array getValues() 获取数据值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置数据值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEpochs() 获取上报的Epoch. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEpochs(array $Epochs) 设置上报的Epoch. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSteps() 获取上报的Step. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSteps(array $Steps) 设置上报的Step. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTotalSteps() 获取上报的TotalSteps. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSteps(array $TotalSteps) 设置上报的TotalSteps. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingMetric extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var array 数据值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var array 上报的Epoch. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Epochs;

    /**
     * @var array 上报的Step. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Steps;

    /**
     * @var array 上报的TotalSteps. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSteps;

    /**
     * @param string $MetricName 指标名
     * @param array $Values 数据值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Epochs 上报的Epoch. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Steps 上报的Step. 可能为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TotalSteps 上报的TotalSteps. 可能为空
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new TrainingDataPoint();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }

        if (array_key_exists("Epochs",$param) and $param["Epochs"] !== null) {
            $this->Epochs = [];
            foreach ($param["Epochs"] as $key => $value){
                $obj = new TrainingDataPoint();
                $obj->deserialize($value);
                array_push($this->Epochs, $obj);
            }
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new TrainingDataPoint();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("TotalSteps",$param) and $param["TotalSteps"] !== null) {
            $this->TotalSteps = [];
            foreach ($param["TotalSteps"] as $key => $value){
                $obj = new TrainingDataPoint();
                $obj->deserialize($value);
                array_push($this->TotalSteps, $obj);
            }
        }
    }
}
