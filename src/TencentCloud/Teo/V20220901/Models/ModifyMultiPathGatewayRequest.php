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
 * ModifyMultiPathGateway请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getGatewayId() 获取网关 ID。
 * @method void setGatewayId(string $GatewayId) 设置网关 ID。
 * @method string getGatewayName() 获取网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
 * @method void setGatewayName(string $GatewayName) 设置网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
 * @method string getGatewayIP() 获取网关地址，GatewayType 取值为 private（自有网关）可填入进行修改，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
 * @method void setGatewayIP(string $GatewayIP) 设置网关地址，GatewayType 取值为 private（自有网关）可填入进行修改，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
 * @method integer getGatewayPort() 获取网关端口，范围 1～65535（除去 8888 ），只支持修改 GatewayType 取值为 private 的自有网关。
 * @method void setGatewayPort(integer $GatewayPort) 设置网关端口，范围 1～65535（除去 8888 ），只支持修改 GatewayType 取值为 private 的自有网关。
 */
class ModifyMultiPathGatewayRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 网关 ID。
     */
    public $GatewayId;

    /**
     * @var string 网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
     */
    public $GatewayName;

    /**
     * @var string 网关地址，GatewayType 取值为 private（自有网关）可填入进行修改，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
     */
    public $GatewayIP;

    /**
     * @var integer 网关端口，范围 1～65535（除去 8888 ），只支持修改 GatewayType 取值为 private 的自有网关。
     */
    public $GatewayPort;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $GatewayId 网关 ID。
     * @param string $GatewayName 网关名称，16 个字符以内，可用字符（a-z,A-Z,0-9,-,_）。
     * @param string $GatewayIP 网关地址，GatewayType 取值为 private（自有网关）可填入进行修改，使用该地址时，请确保该地址已录入腾讯云多通道安全加速网关系统。如未录入，需要在本接口调用前通过工单或者联系架构师把网关 IP 地址提前录入腾讯云多通道安全加速网关系统。
     * @param integer $GatewayPort 网关端口，范围 1～65535（除去 8888 ），只支持修改 GatewayType 取值为 private 的自有网关。
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

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }
    }
}
