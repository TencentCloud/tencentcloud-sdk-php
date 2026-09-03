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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportExternalCluster返回参数结构体
 *
 * @method integer getResourcePoolId() 获取<p>已落库的 resource_pool 主行 ID。</p>
 * @method void setResourcePoolId(integer $ResourcePoolId) 设置<p>已落库的 resource_pool 主行 ID。</p>
 * @method string getResourcePoolCode() 获取<p>资源池唯一编码。</p>
 * @method void setResourcePoolCode(string $ResourcePoolCode) 设置<p>资源池唯一编码。</p>
 * @method integer getWorkflowId() 获取<p>注册工作流 ID，可用于查询进度。</p>
 * @method void setWorkflowId(integer $WorkflowId) 设置<p>注册工作流 ID，可用于查询进度。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ImportExternalClusterResponse extends AbstractModel
{
    /**
     * @var integer <p>已落库的 resource_pool 主行 ID。</p>
     */
    public $ResourcePoolId;

    /**
     * @var string <p>资源池唯一编码。</p>
     */
    public $ResourcePoolCode;

    /**
     * @var integer <p>注册工作流 ID，可用于查询进度。</p>
     */
    public $WorkflowId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ResourcePoolId <p>已落库的 resource_pool 主行 ID。</p>
     * @param string $ResourcePoolCode <p>资源池唯一编码。</p>
     * @param integer $WorkflowId <p>注册工作流 ID，可用于查询进度。</p>
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
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            $this->ResourcePoolId = $param["ResourcePoolId"];
        }

        if (array_key_exists("ResourcePoolCode",$param) and $param["ResourcePoolCode"] !== null) {
            $this->ResourcePoolCode = $param["ResourcePoolCode"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
