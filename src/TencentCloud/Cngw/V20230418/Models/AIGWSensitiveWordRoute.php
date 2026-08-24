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
 * AI GW Sensitive Word Route
 *
 * @method boolean getEnabled() 获取<p>是否开启</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启</p>
 * @method array getModelServiceRefs() 获取<p>模型API ID列表</p>
 * @method void setModelServiceRefs(array $ModelServiceRefs) 设置<p>模型API ID列表</p>
 * @method array getModelServiceNames() 获取<p>查询接口会返回模型API的Name列表</p>
 * @method void setModelServiceNames(array $ModelServiceNames) 设置<p>查询接口会返回模型API的Name列表</p>
 * @method array getSelectedTypes() 获取<p>路由方式</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
 * @method void setSelectedTypes(array $SelectedTypes) 设置<p>路由方式</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
 * @method array getWeightedConfig() 获取<p>权重路由配置</p>
 * @method void setWeightedConfig(array $WeightedConfig) 设置<p>权重路由配置</p>
 * @method array getModelNameConfig() 获取<p>路由名称路由配置</p>
 * @method void setModelNameConfig(array $ModelNameConfig) 设置<p>路由名称路由配置</p>
 */
class AIGWSensitiveWordRoute extends AbstractModel
{
    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enabled;

    /**
     * @var array <p>模型API ID列表</p>
     */
    public $ModelServiceRefs;

    /**
     * @var array <p>查询接口会返回模型API的Name列表</p>
     */
    public $ModelServiceNames;

    /**
     * @var array <p>路由方式</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
     */
    public $SelectedTypes;

    /**
     * @var array <p>权重路由配置</p>
     */
    public $WeightedConfig;

    /**
     * @var array <p>路由名称路由配置</p>
     */
    public $ModelNameConfig;

    /**
     * @param boolean $Enabled <p>是否开启</p>
     * @param array $ModelServiceRefs <p>模型API ID列表</p>
     * @param array $ModelServiceNames <p>查询接口会返回模型API的Name列表</p>
     * @param array $SelectedTypes <p>路由方式</p><p>枚举值：</p><ul><li>Weighted： 权重路由</li><li>ModelName： 按模型名称路由</li></ul>
     * @param array $WeightedConfig <p>权重路由配置</p>
     * @param array $ModelNameConfig <p>路由名称路由配置</p>
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
