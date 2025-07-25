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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * hpa的描述
 *
 * @method integer getMinReplicas() 获取最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinReplicas(integer $MinReplicas) 设置最小实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicas() 获取最大实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHpaMetrics() 获取支持：
"gpu-util": GPU利用率。范围{10, 100}      "cpu-util": CPU利用率。范围{10, 100}	      "memory-util": 内存利用率。范围{10, 100}      "service-qps": 单个实例QPS值。范围{1, 5000}
"concurrency-util":单个实例请求数量值。范围{1,100000}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHpaMetrics(array $HpaMetrics) 设置支持：
"gpu-util": GPU利用率。范围{10, 100}      "cpu-util": CPU利用率。范围{10, 100}	      "memory-util": 内存利用率。范围{10, 100}      "service-qps": 单个实例QPS值。范围{1, 5000}
"concurrency-util":单个实例请求数量值。范围{1,100000}
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleUpStabilizationWindowSeconds() 获取扩容观察期，单位秒
 * @method void setScaleUpStabilizationWindowSeconds(integer $ScaleUpStabilizationWindowSeconds) 设置扩容观察期，单位秒
 * @method integer getScaleDownStabilizationWindowSeconds() 获取缩容观察期，单位秒
 * @method void setScaleDownStabilizationWindowSeconds(integer $ScaleDownStabilizationWindowSeconds) 设置缩容观察期，单位秒
 */
class HorizontalPodAutoscaler extends AbstractModel
{
    /**
     * @var integer 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinReplicas;

    /**
     * @var integer 最大实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReplicas;

    /**
     * @var array 支持：
"gpu-util": GPU利用率。范围{10, 100}      "cpu-util": CPU利用率。范围{10, 100}	      "memory-util": 内存利用率。范围{10, 100}      "service-qps": 单个实例QPS值。范围{1, 5000}
"concurrency-util":单个实例请求数量值。范围{1,100000}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HpaMetrics;

    /**
     * @var integer 扩容观察期，单位秒
     */
    public $ScaleUpStabilizationWindowSeconds;

    /**
     * @var integer 缩容观察期，单位秒
     */
    public $ScaleDownStabilizationWindowSeconds;

    /**
     * @param integer $MinReplicas 最小实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicas 最大实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HpaMetrics 支持：
"gpu-util": GPU利用率。范围{10, 100}      "cpu-util": CPU利用率。范围{10, 100}	      "memory-util": 内存利用率。范围{10, 100}      "service-qps": 单个实例QPS值。范围{1, 5000}
"concurrency-util":单个实例请求数量值。范围{1,100000}
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleUpStabilizationWindowSeconds 扩容观察期，单位秒
     * @param integer $ScaleDownStabilizationWindowSeconds 缩容观察期，单位秒
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("HpaMetrics",$param) and $param["HpaMetrics"] !== null) {
            $this->HpaMetrics = [];
            foreach ($param["HpaMetrics"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->HpaMetrics, $obj);
            }
        }

        if (array_key_exists("ScaleUpStabilizationWindowSeconds",$param) and $param["ScaleUpStabilizationWindowSeconds"] !== null) {
            $this->ScaleUpStabilizationWindowSeconds = $param["ScaleUpStabilizationWindowSeconds"];
        }

        if (array_key_exists("ScaleDownStabilizationWindowSeconds",$param) and $param["ScaleDownStabilizationWindowSeconds"] !== null) {
            $this->ScaleDownStabilizationWindowSeconds = $param["ScaleDownStabilizationWindowSeconds"];
        }
    }
}
