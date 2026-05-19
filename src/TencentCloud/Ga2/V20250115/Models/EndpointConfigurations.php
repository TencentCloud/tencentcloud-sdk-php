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
 * @method string getEndpointType() 获取<p>域名类型。可选值&#39;Domain&#39;, &#39;PublicIp&#39;。</p>
 * @method void setEndpointType(string $EndpointType) 设置<p>域名类型。可选值&#39;Domain&#39;, &#39;PublicIp&#39;。</p>
 * @method string getEndpointService() 获取<p>域名。</p>
 * @method void setEndpointService(string $EndpointService) 设置<p>域名。</p>
 * @method integer getWeight() 获取<p>权重。</p>
 * @method void setWeight(integer $Weight) 设置<p>权重。</p>
 * @method string getHealthCheckStatus() 获取<p>健康检查状态；HEALTH：健康；UNHEALTH：不健康。</p>
 * @method void setHealthCheckStatus(string $HealthCheckStatus) 设置<p>健康检查状态；HEALTH：健康；UNHEALTH：不健康。</p>
 */
class EndpointConfigurations extends AbstractModel
{
    /**
     * @var string <p>域名类型。可选值&#39;Domain&#39;, &#39;PublicIp&#39;。</p>
     */
    public $EndpointType;

    /**
     * @var string <p>域名。</p>
     */
    public $EndpointService;

    /**
     * @var integer <p>权重。</p>
     */
    public $Weight;

    /**
     * @var string <p>健康检查状态；HEALTH：健康；UNHEALTH：不健康。</p>
     */
    public $HealthCheckStatus;

    /**
     * @param string $EndpointType <p>域名类型。可选值&#39;Domain&#39;, &#39;PublicIp&#39;。</p>
     * @param string $EndpointService <p>域名。</p>
     * @param integer $Weight <p>权重。</p>
     * @param string $HealthCheckStatus <p>健康检查状态；HEALTH：健康；UNHEALTH：不健康。</p>
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
