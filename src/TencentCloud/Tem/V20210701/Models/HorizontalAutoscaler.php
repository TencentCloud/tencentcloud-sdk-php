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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩策略
 *
 * @method integer getMinReplicas() 获取最小实例数
 * @method void setMinReplicas(integer $MinReplicas) 设置最小实例数
 * @method integer getMaxReplicas() 获取最大实例数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大实例数
 * @method string getMetrics() 获取指标度量（CPU or MEMORY）
 * @method void setMetrics(string $Metrics) 设置指标度量（CPU or MEMORY）
 * @method integer getThreshold() 获取阈值（百分比）
 * @method void setThreshold(integer $Threshold) 设置阈值（百分比）
 */
class HorizontalAutoscaler extends AbstractModel
{
    /**
     * @var integer 最小实例数
     */
    public $MinReplicas;

    /**
     * @var integer 最大实例数
     */
    public $MaxReplicas;

    /**
     * @var string 指标度量（CPU or MEMORY）
     */
    public $Metrics;

    /**
     * @var integer 阈值（百分比）
     */
    public $Threshold;

    /**
     * @param integer $MinReplicas 最小实例数
     * @param integer $MaxReplicas 最大实例数
     * @param string $Metrics 指标度量（CPU or MEMORY）
     * @param integer $Threshold 阈值（百分比）
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
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
