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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGatewayMCPServerStatus请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method string getServerId() 获取<p>mcp server id</p>
 * @method void setServerId(string $ServerId) 设置<p>mcp server id</p>
 * @method string getStatus() 获取<p>mcp server状态</p><p>枚举值：</p><ul><li>Online： 上线</li><li>Offline： 下线</li></ul>
 * @method void setStatus(string $Status) 设置<p>mcp server状态</p><p>枚举值：</p><ul><li>Online： 上线</li><li>Offline： 下线</li></ul>
 */
class ModifyCloudNativeAPIGatewayMCPServerStatusRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>mcp server id</p>
     */
    public $ServerId;

    /**
     * @var string <p>mcp server状态</p><p>枚举值：</p><ul><li>Online： 上线</li><li>Offline： 下线</li></ul>
     */
    public $Status;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param string $ServerId <p>mcp server id</p>
     * @param string $Status <p>mcp server状态</p><p>枚举值：</p><ul><li>Online： 上线</li><li>Offline： 下线</li></ul>
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

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
