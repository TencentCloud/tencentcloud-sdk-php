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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站组里的源站健康状态。
 *
 * @method string getOrigin() 获取源站。
 * @method void setOrigin(string $Origin) 设置源站。
 * @method string getHealthy() 获取源站健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li>Undetected：未探测到数据。</li>

 * @method void setHealthy(string $Healthy) 设置源站健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li>Undetected：未探测到数据。</li>
 */
class OriginHealthStatus extends AbstractModel
{
    /**
     * @var string 源站。
     */
    public $Origin;

    /**
     * @var string 源站健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li>Undetected：未探测到数据。</li>

     */
    public $Healthy;

    /**
     * @param string $Origin 源站。
     * @param string $Healthy 源站健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li>Undetected：未探测到数据。</li>
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
        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }
    }
}
