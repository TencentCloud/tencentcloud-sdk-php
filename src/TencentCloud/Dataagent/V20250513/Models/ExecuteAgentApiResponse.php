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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteAgentApi返回参数结构体
 *
 * @method string getRequestPath() 获取<p>请求路径</p>
 * @method void setRequestPath(string $RequestPath) 设置<p>请求路径</p>
 * @method string getAgentData() 获取<p>返回的具体指</p>
 * @method void setAgentData(string $AgentData) 设置<p>返回的具体指</p>
 * @method string getErrorMsg() 获取<p>错误码信息</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误码信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ExecuteAgentApiResponse extends AbstractModel
{
    /**
     * @var string <p>请求路径</p>
     */
    public $RequestPath;

    /**
     * @var string <p>返回的具体指</p>
     */
    public $AgentData;

    /**
     * @var string <p>错误码信息</p>
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RequestPath <p>请求路径</p>
     * @param string $AgentData <p>返回的具体指</p>
     * @param string $ErrorMsg <p>错误码信息</p>
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
        if (array_key_exists("RequestPath",$param) and $param["RequestPath"] !== null) {
            $this->RequestPath = $param["RequestPath"];
        }

        if (array_key_exists("AgentData",$param) and $param["AgentData"] !== null) {
            $this->AgentData = $param["AgentData"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
