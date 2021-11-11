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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPA 配置
 *
 * @method integer getMinReplicas() 获取最小副本数
 * @method void setMinReplicas(integer $MinReplicas) 设置最小副本数
 * @method integer getMaxReplicas() 获取最大副本数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大副本数
 * @method array getMetrics() 获取用于计算副本数的指标
 * @method void setMetrics(array $Metrics) 设置用于计算副本数的指标
 */
class HorizontalPodAutoscalerSpec extends AbstractModel
{
    /**
     * @var integer 最小副本数
     */
    public $MinReplicas;

    /**
     * @var integer 最大副本数
     */
    public $MaxReplicas;

    /**
     * @var array 用于计算副本数的指标
     */
    public $Metrics;

    /**
     * @param integer $MinReplicas 最小副本数
     * @param integer $MaxReplicas 最大副本数
     * @param array $Metrics 用于计算副本数的指标
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

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricSpec();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
