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
 * UpdateUpstreamHealthCheckConfig请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getName() 获取网关服务名称
 * @method void setName(string $Name) 设置网关服务名称
 * @method UpstreamHealthCheckConfig getHealthCheckConfig() 获取健康检查配置
 * @method void setHealthCheckConfig(UpstreamHealthCheckConfig $HealthCheckConfig) 设置健康检查配置
 */
class UpdateUpstreamHealthCheckConfigRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 网关服务名称
     */
    public $Name;

    /**
     * @var UpstreamHealthCheckConfig 健康检查配置
     */
    public $HealthCheckConfig;

    /**
     * @param string $GatewayId 网关ID
     * @param string $Name 网关服务名称
     * @param UpstreamHealthCheckConfig $HealthCheckConfig 健康检查配置
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new UpstreamHealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }
    }
}
