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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型服务路由配置
 *
 * @method array getSelectedTypes() 获取生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)
 * @method void setSelectedTypes(array $SelectedTypes) 设置生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)
 * @method array getWeightedConfig() 获取权重路由配置，最多10个
 * @method void setWeightedConfig(array $WeightedConfig) 设置权重路由配置，最多10个
 * @method array getModelNameConfig() 获取模型名称路由配置，最多10个
 * @method void setModelNameConfig(array $ModelNameConfig) 设置模型名称路由配置，最多10个
 */
class CloudNativeAPIGatewayLLMModelServiceRoute extends AbstractModel
{
    /**
     * @var array 生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)
     */
    public $SelectedTypes;

    /**
     * @var array 权重路由配置，最多10个
     */
    public $WeightedConfig;

    /**
     * @var array 模型名称路由配置，最多10个
     */
    public $ModelNameConfig;

    /**
     * @param array $SelectedTypes 生效的路由算法类型：权重路由，模型名称路由、参数路由等Weighted/ModelName/Query (预留多个，暂时只能填写一个)
     * @param array $WeightedConfig 权重路由配置，最多10个
     * @param array $ModelNameConfig 模型名称路由配置，最多10个
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
    }
}
