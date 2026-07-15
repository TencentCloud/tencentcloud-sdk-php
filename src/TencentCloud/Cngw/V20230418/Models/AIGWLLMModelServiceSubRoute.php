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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型服务二级路由配置
 *
 * @method array getSelectedTypes() 获取<p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
 * @method void setSelectedTypes(array $SelectedTypes) 设置<p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
 * @method array getWeightedConfig() 获取<p>权重路由配置，最多10个</p>
 * @method void setWeightedConfig(array $WeightedConfig) 设置<p>权重路由配置，最多10个</p>
 * @method AIGWLatencyPriorityConfig getLatencyPriorityConfig() 获取<p>延迟路由</p>
 * @method void setLatencyPriorityConfig(AIGWLatencyPriorityConfig $LatencyPriorityConfig) 设置<p>延迟路由</p>
 * @method AIGWRouteModelServiceConfig getModelServiceConfig() 获取<p>指定模型路由（暂时只用在Token长度路由时的子路由选择）</p>
 * @method void setModelServiceConfig(AIGWRouteModelServiceConfig $ModelServiceConfig) 设置<p>指定模型路由（暂时只用在Token长度路由时的子路由选择）</p>
 */
class AIGWLLMModelServiceSubRoute extends AbstractModel
{
    /**
     * @var array <p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
     */
    public $SelectedTypes;

    /**
     * @var array <p>权重路由配置，最多10个</p>
     */
    public $WeightedConfig;

    /**
     * @var AIGWLatencyPriorityConfig <p>延迟路由</p>
     */
    public $LatencyPriorityConfig;

    /**
     * @var AIGWRouteModelServiceConfig <p>指定模型路由（暂时只用在Token长度路由时的子路由选择）</p>
     */
    public $ModelServiceConfig;

    /**
     * @param array $SelectedTypes <p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
     * @param array $WeightedConfig <p>权重路由配置，最多10个</p>
     * @param AIGWLatencyPriorityConfig $LatencyPriorityConfig <p>延迟路由</p>
     * @param AIGWRouteModelServiceConfig $ModelServiceConfig <p>指定模型路由（暂时只用在Token长度路由时的子路由选择）</p>
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
        if (array_key_exists("SelectedTypes",$param) and $param["SelectedTypes"] !== null) {
            $this->SelectedTypes = $param["SelectedTypes"];
        }

        if (array_key_exists("WeightedConfig",$param) and $param["WeightedConfig"] !== null) {
            $this->WeightedConfig = [];
            foreach ($param["WeightedConfig"] as $key => $value){
                $obj = new CloudNativeAPIGatewayLLMModelServiceRouteWeightedStrategy();
                $obj->deserialize($value);
                array_push($this->WeightedConfig, $obj);
            }
        }

        if (array_key_exists("LatencyPriorityConfig",$param) and $param["LatencyPriorityConfig"] !== null) {
            $this->LatencyPriorityConfig = new AIGWLatencyPriorityConfig();
            $this->LatencyPriorityConfig->deserialize($param["LatencyPriorityConfig"]);
        }

        if (array_key_exists("ModelServiceConfig",$param) and $param["ModelServiceConfig"] !== null) {
            $this->ModelServiceConfig = new AIGWRouteModelServiceConfig();
            $this->ModelServiceConfig->deserialize($param["ModelServiceConfig"]);
        }
    }
}
