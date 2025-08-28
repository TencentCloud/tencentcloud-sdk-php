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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartMcpServers请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method array getMcpServerIds() 获取MCP Server ID列表。可通过DescribeMcpServers接口返回值中的McpServerId获取。最大长度：10
 * @method void setMcpServerIds(array $McpServerIds) 设置MCP Server ID列表。可通过DescribeMcpServers接口返回值中的McpServerId获取。最大长度：10
 */
class StartMcpServersRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceId;

    /**
     * @var array MCP Server ID列表。可通过DescribeMcpServers接口返回值中的McpServerId获取。最大长度：10
     */
    public $McpServerIds;

    /**
     * @param string $InstanceId 实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param array $McpServerIds MCP Server ID列表。可通过DescribeMcpServers接口返回值中的McpServerId获取。最大长度：10
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("McpServerIds",$param) and $param["McpServerIds"] !== null) {
            $this->McpServerIds = $param["McpServerIds"];
        }
    }
}
