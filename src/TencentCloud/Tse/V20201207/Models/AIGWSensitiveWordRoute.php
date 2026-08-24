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
 * AI GW Sensitive Word Route
 *
 * @method boolean getEnabled() 获取<p>是否开启敏感词路由</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启敏感词路由</p>
 * @method array getModelServiceRefs() 获取<p>目标模型服务列表</p>
 * @method void setModelServiceRefs(array $ModelServiceRefs) 设置<p>目标模型服务列表</p>
 * @method array getModelServiceNames() 获取<p>目标模型服务名，查询的时候会填充</p>
 * @method void setModelServiceNames(array $ModelServiceNames) 设置<p>目标模型服务名，查询的时候会填充</p>
 * @method array getSelectedTypes() 获取<p>路由方法</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
 * @method void setSelectedTypes(array $SelectedTypes) 设置<p>路由方法</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
 * @method array getWeightedConfig() 获取<p>权重路由配置</p>
 * @method void setWeightedConfig(array $WeightedConfig) 设置<p>权重路由配置</p>
 * @method array getModelNameConfig() 获取<p>模型名称路由权重</p>
 * @method void setModelNameConfig(array $ModelNameConfig) 设置<p>模型名称路由权重</p>
 */
class AIGWSensitiveWordRoute extends AbstractModel
{
    /**
     * @var boolean <p>是否开启敏感词路由</p>
     */
    public $Enabled;

    /**
     * @var array <p>目标模型服务列表</p>
     */
    public $ModelServiceRefs;

    /**
     * @var array <p>目标模型服务名，查询的时候会填充</p>
     */
    public $ModelServiceNames;

    /**
     * @var array <p>路由方法</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
     */
    public $SelectedTypes;

    /**
     * @var array <p>权重路由配置</p>
     */
    public $WeightedConfig;

    /**
     * @var array <p>模型名称路由权重</p>
     */
    public $ModelNameConfig;

    /**
     * @param boolean $Enabled <p>是否开启敏感词路由</p>
     * @param array $ModelServiceRefs <p>目标模型服务列表</p>
     * @param array $ModelServiceNames <p>目标模型服务名，查询的时候会填充</p>
     * @param array $SelectedTypes <p>路由方法</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
     * @param array $WeightedConfig <p>权重路由配置</p>
     * @param array $ModelNameConfig <p>模型名称路由权重</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ModelServiceRefs",$param) and $param["ModelServiceRefs"] !== null) {
            $this->ModelServiceRefs = $param["ModelServiceRefs"];
        }

        if (array_key_exists("ModelServiceNames",$param) and $param["ModelServiceNames"] !== null) {
            $this->ModelServiceNames = $param["ModelServiceNames"];
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
