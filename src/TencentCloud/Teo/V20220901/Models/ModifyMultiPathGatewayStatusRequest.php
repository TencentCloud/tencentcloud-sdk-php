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
 * ModifyMultiPathGatewayStatus请求参数结构体
 *
 * @method string getGatewayId() 获取网关 ID。
 * @method void setGatewayId(string $GatewayId) 设置网关 ID。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getGatewayStatus() 获取修改网关的启用停用状态，取值有：<li> offline：停用；</li><li> online：启用。</li>
 * @method void setGatewayStatus(string $GatewayStatus) 设置修改网关的启用停用状态，取值有：<li> offline：停用；</li><li> online：启用。</li>
 */
class ModifyMultiPathGatewayStatusRequest extends AbstractModel
{
    /**
     * @var string 网关 ID。
     */
    public $GatewayId;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 修改网关的启用停用状态，取值有：<li> offline：停用；</li><li> online：启用。</li>
     */
    public $GatewayStatus;

    /**
     * @param string $GatewayId 网关 ID。
     * @param string $ZoneId 站点 ID。
     * @param string $GatewayStatus 修改网关的启用停用状态，取值有：<li> offline：停用；</li><li> online：启用。</li>
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GatewayStatus",$param) and $param["GatewayStatus"] !== null) {
            $this->GatewayStatus = $param["GatewayStatus"];
        }
    }
}
