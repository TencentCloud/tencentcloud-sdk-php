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
 * sample附带原始查询语句中的metric, aggregation
 *
 * @method string getMetric() 获取指标名
 * @method void setMetric(string $Metric) 设置指标名
 * @method string getAggregation() 获取聚合条件
 * @method void setAggregation(string $Aggregation) 设置聚合条件
 * @method array getLabels() 获取过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取查询值
 * @method void setValue(float $Value) 设置查询值
 * @method integer getTimestamp() 获取Time is the number of milliseconds since the epoch
// (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method void setTimestamp(integer $Timestamp) 设置Time is the number of milliseconds since the epoch
// (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method string getUnit() 获取指标对应的单位，当前单位有：s,bytes,bytes/s,reqs,reqs/s,checks,checks/s,iters,iters/s,VUs, %
 * @method void setUnit(string $Unit) 设置指标对应的单位，当前单位有：s,bytes,bytes/s,reqs,reqs/s,checks,checks/s,iters,iters/s,VUs, %
 * @method string getName() 获取指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomSample extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $Metric;

    /**
     * @var string 聚合条件
     */
    public $Aggregation;

    /**
     * @var array 过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var float 查询值
     */
    public $Value;

    /**
     * @var integer Time is the number of milliseconds since the epoch
// (1970-01-01 00:00 UTC) excluding leap seconds.
     */
    public $Timestamp;

    /**
     * @var string 指标对应的单位，当前单位有：s,bytes,bytes/s,reqs,reqs/s,checks,checks/s,iters,iters/s,VUs, %
     */
    public $Unit;

    /**
     * @var string 指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Metric 指标名
     * @param string $Aggregation 聚合条件
     * @param array $Labels 过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value 查询值
     * @param integer $Timestamp Time is the number of milliseconds since the epoch
// (1970-01-01 00:00 UTC) excluding leap seconds.
     * @param string $Unit 指标对应的单位，当前单位有：s,bytes,bytes/s,reqs,reqs/s,checks,checks/s,iters,iters/s,VUs, %
     * @param string $Name 指标序列名字
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
