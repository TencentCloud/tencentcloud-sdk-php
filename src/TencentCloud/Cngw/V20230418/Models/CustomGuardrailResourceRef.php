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
 * 自定义安全护栏业务资源引用
 *
 * @method string getResourceType() 获取<p>被审核的业务资源类型：model_api 模型 API；mcp_server MCP Server（当前支持 Streamable HTTP）；agent_api Agent API（当前支持 A2A）。</p>
 * @method void setResourceType(string $ResourceType) 设置<p>被审核的业务资源类型：model_api 模型 API；mcp_server MCP Server（当前支持 Streamable HTTP）；agent_api Agent API（当前支持 A2A）。</p>
 * @method string getResourceId() 获取<p>上述类型的管控业务资源 ID，可从 DescribeAIGWCustomGuardrailBindableResources 获取；不是审核引擎 ServiceId，也不是 Kong RouteId。请原样使用接口返回 ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>上述类型的管控业务资源 ID，可从 DescribeAIGWCustomGuardrailBindableResources 获取；不是审核引擎 ServiceId，也不是 Kong RouteId。请原样使用接口返回 ID。</p>
 */
class CustomGuardrailResourceRef extends AbstractModel
{
    /**
     * @var string <p>被审核的业务资源类型：model_api 模型 API；mcp_server MCP Server（当前支持 Streamable HTTP）；agent_api Agent API（当前支持 A2A）。</p>
     */
    public $ResourceType;

    /**
     * @var string <p>上述类型的管控业务资源 ID，可从 DescribeAIGWCustomGuardrailBindableResources 获取；不是审核引擎 ServiceId，也不是 Kong RouteId。请原样使用接口返回 ID。</p>
     */
    public $ResourceId;

    /**
     * @param string $ResourceType <p>被审核的业务资源类型：model_api 模型 API；mcp_server MCP Server（当前支持 Streamable HTTP）；agent_api Agent API（当前支持 A2A）。</p>
     * @param string $ResourceId <p>上述类型的管控业务资源 ID，可从 DescribeAIGWCustomGuardrailBindableResources 获取；不是审核引擎 ServiceId，也不是 Kong RouteId。请原样使用接口返回 ID。</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
