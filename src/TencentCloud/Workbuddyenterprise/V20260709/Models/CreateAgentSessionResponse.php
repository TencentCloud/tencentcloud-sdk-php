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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAgentSession返回参数结构体
 *
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method array getEndpointSet() 获取<p>可用的聊天接入点列表（当前仅含一个 PUBLIC 公网接入点；空数组 = 无可用接入点）</p>
 * @method void setEndpointSet(array $EndpointSet) 设置<p>可用的聊天接入点列表（当前仅含一个 PUBLIC 公网接入点；空数组 = 无可用接入点）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAgentSessionResponse extends AbstractModel
{
    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var array <p>可用的聊天接入点列表（当前仅含一个 PUBLIC 公网接入点；空数组 = 无可用接入点）</p>
     */
    public $EndpointSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SessionId <p>会话 ID</p>
     * @param array $EndpointSet <p>可用的聊天接入点列表（当前仅含一个 PUBLIC 公网接入点；空数组 = 无可用接入点）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("EndpointSet",$param) and $param["EndpointSet"] !== null) {
            $this->EndpointSet = [];
            foreach ($param["EndpointSet"] as $key => $value){
                $obj = new ChatEndpoint();
                $obj->deserialize($value);
                array_push($this->EndpointSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
