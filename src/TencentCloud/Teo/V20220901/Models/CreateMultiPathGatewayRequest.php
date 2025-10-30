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
 * CreateMultiPathGateway请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getGatewayType() 获取网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关；</li>
<li> private：自有网关，用户部署的私有网关。</li>
 * @method void setGatewayType(string $GatewayType) 设置网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关；</li>
<li> private：自有网关，用户部署的私有网关。</li>
 * @method string getGatewayName() 获取网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
 * @method void setGatewayName(string $GatewayName) 设置网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
 * @method integer getGatewayPort() 获取网关端口，范围 1～65535（除去 8888 ）。
 * @method void setGatewayPort(integer $GatewayPort) 设置网关端口，范围 1～65535（除去 8888 ）。
 * @method string getRegionId() 获取网关地域，GatewayType 取值为 cloud（云上网关）必填。可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
 * @method void setRegionId(string $RegionId) 设置网关地域，GatewayType 取值为 cloud（云上网关）必填。可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
 * @method string getGatewayIP() 获取网关地址，GatewayType 取值为 private（自有网关）必填，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
 * @method void setGatewayIP(string $GatewayIP) 设置网关地址，GatewayType 取值为 private（自有网关）必填，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
 */
class CreateMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关；</li>
<li> private：自有网关，用户部署的私有网关。</li>
     */
    public $GatewayType;

    /**
     * @var string 网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
     */
    public $GatewayName;

    /**
     * @var integer 网关端口，范围 1～65535（除去 8888 ）。
     */
    public $GatewayPort;

    /**
     * @var string 网关地域，GatewayType 取值为 cloud（云上网关）必填。可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
     */
    public $RegionId;

    /**
     * @var string 网关地址，GatewayType 取值为 private（自有网关）必填，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
     */
    public $GatewayIP;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $GatewayType 网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关；</li>
<li> private：自有网关，用户部署的私有网关。</li>
     * @param string $GatewayName 网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
     * @param integer $GatewayPort 网关端口，范围 1～65535（除去 8888 ）。
     * @param string $RegionId 网关地域，GatewayType 取值为 cloud（云上网关）必填。可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
     * @param string $GatewayIP 网关地址，GatewayType 取值为 private（自有网关）必填，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }
    }
}
