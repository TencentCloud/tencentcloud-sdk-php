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
 * 指标矩阵，可包含多条指标序列
 *
 * @method string getMetric() 获取指标名字
 * @method void setMetric(string $Metric) 设置指标名字
 * @method string getAggregation() 获取聚合函数
 * @method void setAggregation(string $Aggregation) 设置聚合函数
 * @method string getUnit() 获取指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStreams() 获取指标序列数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreams(array $Streams) 设置指标序列数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomSampleMatrix extends AbstractModel
{
    /**
     * @var string 指标名字
     */
    public $Metric;

    /**
     * @var string 聚合函数
     */
    public $Aggregation;

    /**
     * @var string 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var array 指标序列数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Streams;

    /**
     * @param string $Metric 指标名字
     * @param string $Aggregation 聚合函数
     * @param string $Unit 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Streams 指标序列数组
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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Streams",$param) and $param["Streams"] !== null) {
            $this->Streams = [];
            foreach ($param["Streams"] as $key => $value){
                $obj = new SampleStream();
                $obj->deserialize($value);
                array_push($this->Streams, $obj);
            }
        }
    }
}
