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
 * 模型服务路由配置
 *
 * @method array getSelectedTypes() 获取<p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
 * @method void setSelectedTypes(array $SelectedTypes) 设置<p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
 * @method array getWeightedConfig() 获取<p>权重路由配置，最多10个</p>
 * @method void setWeightedConfig(array $WeightedConfig) 设置<p>权重路由配置，最多10个</p>
 * @method array getModelNameConfig() 获取<p>模型名称路由配置，最多10个</p>
 * @method void setModelNameConfig(array $ModelNameConfig) 设置<p>模型名称路由配置，最多10个</p>
 * @method AIGWIntentRoute getIntentRouteConfig() 获取<p>意图识别</p>
 * @method void setIntentRouteConfig(AIGWIntentRoute $IntentRouteConfig) 设置<p>意图识别</p>
 * @method AIGWLatencyPriorityConfig getLatencyPriorityConfig() 获取<p>延迟路由</p>
 * @method void setLatencyPriorityConfig(AIGWLatencyPriorityConfig $LatencyPriorityConfig) 设置<p>延迟路由</p>
 */
class CloudNativeAPIGatewayLLMModelServiceRoute extends AbstractModel
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
     * @var array <p>模型名称路由配置，最多10个</p>
     */
    public $ModelNameConfig;

    /**
     * @var AIGWIntentRoute <p>意图识别</p>
     */
    public $IntentRouteConfig;

    /**
     * @var AIGWLatencyPriorityConfig <p>延迟路由</p>
     */
    public $LatencyPriorityConfig;

    /**
     * @param array $SelectedTypes <p>生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)</p>
     * @param array $WeightedConfig <p>权重路由配置，最多10个</p>
     * @param array $ModelNameConfig <p>模型名称路由配置，最多10个</p>
     * @param AIGWIntentRoute $IntentRouteConfig <p>意图识别</p>
     * @param AIGWLatencyPriorityConfig $LatencyPriorityConfig <p>延迟路由</p>
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

        if (array_key_exists("ModelNameConfig",$param) and $param["ModelNameConfig"] !== null) {
            $this->ModelNameConfig = [];
            foreach ($param["ModelNameConfig"] as $key => $value){
                $obj = new CloudNativeAPIGatewayLLMModelServiceRouteModelNameStrategy();
                $obj->deserialize($value);
                array_push($this->ModelNameConfig, $obj);
            }
        }

        if (array_key_exists("IntentRouteConfig",$param) and $param["IntentRouteConfig"] !== null) {
            $this->IntentRouteConfig = new AIGWIntentRoute();
            $this->IntentRouteConfig->deserialize($param["IntentRouteConfig"]);
        }

        if (array_key_exists("LatencyPriorityConfig",$param) and $param["LatencyPriorityConfig"] !== null) {
            $this->LatencyPriorityConfig = new AIGWLatencyPriorityConfig();
            $this->LatencyPriorityConfig->deserialize($param["LatencyPriorityConfig"]);
        }
    }
}
