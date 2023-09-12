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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务网关插件绑定对象
 *
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method string getScopeType() 获取插件绑定到的对象类型:group/api/all
 * @method void setScopeType(string $ScopeType) 设置插件绑定到的对象类型:group/api/all
 * @method string getScopeValue() 获取插件绑定到的对象主键值，例如分组的ID/API的ID
 * @method void setScopeValue(string $ScopeValue) 设置插件绑定到的对象主键值，例如分组的ID/API的ID
 * @method string getMicroserviceId() 获取创建关联的服务id，关联envoy网关时使用
 * @method void setMicroserviceId(string $MicroserviceId) 设置创建关联的服务id，关联envoy网关时使用
 * @method string getGatewayInstanceId() 获取网关id
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关id
 */
class GatewayPluginBoundParam extends AbstractModel
{
    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var string 插件绑定到的对象类型:group/api/all
     */
    public $ScopeType;

    /**
     * @var string 插件绑定到的对象主键值，例如分组的ID/API的ID
     */
    public $ScopeValue;

    /**
     * @var string 创建关联的服务id，关联envoy网关时使用
     */
    public $MicroserviceId;

    /**
     * @var string 网关id
     */
    public $GatewayInstanceId;

    /**
     * @param string $PluginId 插件id
     * @param string $ScopeType 插件绑定到的对象类型:group/api/all
     * @param string $ScopeValue 插件绑定到的对象主键值，例如分组的ID/API的ID
     * @param string $MicroserviceId 创建关联的服务id，关联envoy网关时使用
     * @param string $GatewayInstanceId 网关id
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ScopeValue",$param) and $param["ScopeValue"] !== null) {
            $this->ScopeValue = $param["ScopeValue"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
