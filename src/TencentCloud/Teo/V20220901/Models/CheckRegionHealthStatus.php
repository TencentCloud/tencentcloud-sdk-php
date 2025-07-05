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
 * 各个健康检查区域下源站的健康状态。
 *
 * @method string getRegion() 获取健康检查区域，ISO-3166-1 两位字母代码。
 * @method void setRegion(string $Region) 设置健康检查区域，ISO-3166-1 两位字母代码。
 * @method string getHealthy() 获取单健康检查区域下探测源站的健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li> Undetected：未探测到数据。</li>说明：单健康检查区域下所有源站为健康，则状态为健康，否则为不健康。
 * @method void setHealthy(string $Healthy) 设置单健康检查区域下探测源站的健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li> Undetected：未探测到数据。</li>说明：单健康检查区域下所有源站为健康，则状态为健康，否则为不健康。
 * @method array getOriginHealthStatus() 获取源站健康状态。
 * @method void setOriginHealthStatus(array $OriginHealthStatus) 设置源站健康状态。
 */
class CheckRegionHealthStatus extends AbstractModel
{
    /**
     * @var string 健康检查区域，ISO-3166-1 两位字母代码。
     */
    public $Region;

    /**
     * @var string 单健康检查区域下探测源站的健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li> Undetected：未探测到数据。</li>说明：单健康检查区域下所有源站为健康，则状态为健康，否则为不健康。
     */
    public $Healthy;

    /**
     * @var array 源站健康状态。
     */
    public $OriginHealthStatus;

    /**
     * @param string $Region 健康检查区域，ISO-3166-1 两位字母代码。
     * @param string $Healthy 单健康检查区域下探测源站的健康状态，取值有：
<li>Healthy：健康；</li>
<li>Unhealthy：不健康；</li>
<li> Undetected：未探测到数据。</li>说明：单健康检查区域下所有源站为健康，则状态为健康，否则为不健康。
     * @param array $OriginHealthStatus 源站健康状态。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }
    }
}
