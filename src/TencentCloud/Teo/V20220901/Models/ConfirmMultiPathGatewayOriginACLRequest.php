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
 * ConfirmMultiPathGatewayOriginACL请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getGatewayId() 获取网关 ID。
 * @method void setGatewayId(string $GatewayId) 设置网关 ID。
 * @method integer getOriginACLVersion() 获取回源 IP 版本号。
 * @method void setOriginACLVersion(integer $OriginACLVersion) 设置回源 IP 版本号。
 */
class ConfirmMultiPathGatewayOriginACLRequest extends AbstractModel
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
     * @var integer 回源 IP 版本号。
     */
    public $OriginACLVersion;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $GatewayId 网关 ID。
     * @param integer $OriginACLVersion 回源 IP 版本号。
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

        if (array_key_exists("OriginACLVersion",$param) and $param["OriginACLVersion"] !== null) {
            $this->OriginACLVersion = $param["OriginACLVersion"];
        }
    }
}
