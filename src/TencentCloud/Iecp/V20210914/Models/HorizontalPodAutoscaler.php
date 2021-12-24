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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * pod水平伸缩配置
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method integer getMinReplicas() 获取最小实例数
 * @method void setMinReplicas(integer $MinReplicas) 设置最小实例数
 * @method integer getMaxReplicas() 获取最大实例数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大实例数
 * @method array getResourceMetricTarget() 获取资源目标指标
 * @method void setResourceMetricTarget(array $ResourceMetricTarget) 设置资源目标指标
 */
class HorizontalPodAutoscaler extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var integer 最小实例数
     */
    public $MinReplicas;

    /**
     * @var integer 最大实例数
     */
    public $MaxReplicas;

    /**
     * @var array 资源目标指标
     */
    public $ResourceMetricTarget;

    /**
     * @param string $Name 名称
     * @param string $Namespace 命名空间
     * @param integer $MinReplicas 最小实例数
     * @param integer $MaxReplicas 最大实例数
     * @param array $ResourceMetricTarget 资源目标指标
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("ResourceMetricTarget",$param) and $param["ResourceMetricTarget"] !== null) {
            $this->ResourceMetricTarget = [];
            foreach ($param["ResourceMetricTarget"] as $key => $value){
                $obj = new ResourceMetricTarget();
                $obj->deserialize($value);
                array_push($this->ResourceMetricTarget, $obj);
            }
        }
    }
}
