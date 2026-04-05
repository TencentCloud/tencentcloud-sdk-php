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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点配置
 *
 * @method string getEndpointType() 获取域名类型。可选值'Domain', 'PublicIp'。
 * @method void setEndpointType(string $EndpointType) 设置域名类型。可选值'Domain', 'PublicIp'。
 * @method string getEndpointService() 获取域名。
 * @method void setEndpointService(string $EndpointService) 设置域名。
 * @method integer getWeight() 获取权重。
 * @method void setWeight(integer $Weight) 设置权重。
 * @method string getHealthCheckStatus() 获取健康检查状态；HEALTH：健康；UNHEALTH：不健康。
 * @method void setHealthCheckStatus(string $HealthCheckStatus) 设置健康检查状态；HEALTH：健康；UNHEALTH：不健康。
 */
class EndpointConfigurations extends AbstractModel
{
    /**
     * @var string 域名类型。可选值'Domain', 'PublicIp'。
     */
    public $EndpointType;

    /**
     * @var string 域名。
     */
    public $EndpointService;

    /**
     * @var integer 权重。
     */
    public $Weight;

    /**
     * @var string 健康检查状态；HEALTH：健康；UNHEALTH：不健康。
     */
    public $HealthCheckStatus;

    /**
     * @param string $EndpointType 域名类型。可选值'Domain', 'PublicIp'。
     * @param string $EndpointService 域名。
     * @param integer $Weight 权重。
     * @param string $HealthCheckStatus 健康检查状态；HEALTH：健康；UNHEALTH：不健康。
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
        if (array_key_exists("EndpointType",$param) and $param["EndpointType"] !== null) {
            $this->EndpointType = $param["EndpointType"];
        }

        if (array_key_exists("EndpointService",$param) and $param["EndpointService"] !== null) {
            $this->EndpointService = $param["EndpointService"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("HealthCheckStatus",$param) and $param["HealthCheckStatus"] !== null) {
            $this->HealthCheckStatus = $param["HealthCheckStatus"];
        }
    }
}
