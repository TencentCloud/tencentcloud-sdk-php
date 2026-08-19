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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentRunPolicy返回参数结构体
 *
 * @method AgentRunModePolicy getBasicPolicy() 获取<p>基础运行策略</p>
 * @method void setBasicPolicy(AgentRunModePolicy $BasicPolicy) 设置<p>基础运行策略</p>
 * @method AgentRunModePolicy getAdvancePolicy() 获取<p>高级运行策略</p>
 * @method void setAdvancePolicy(AgentRunModePolicy $AdvancePolicy) 设置<p>高级运行策略</p>
 * @method AgentRunModePolicy getCustomPolicy() 获取<p>自定义运行策略</p>
 * @method void setCustomPolicy(AgentRunModePolicy $CustomPolicy) 设置<p>自定义运行策略</p>
 * @method array getCustomModeInstanceIDs() 获取<p>自定义模式关联的机器instance_id列表</p>
 * @method void setCustomModeInstanceIDs(array $CustomModeInstanceIDs) 设置<p>自定义模式关联的机器instance_id列表</p>
 * @method array getAdvanceModeInstanceIDs() 获取<p>高级模式关联的机器instance_id列表</p>
 * @method void setAdvanceModeInstanceIDs(array $AdvanceModeInstanceIDs) 设置<p>高级模式关联的机器instance_id列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentRunPolicyResponse extends AbstractModel
{
    /**
     * @var AgentRunModePolicy <p>基础运行策略</p>
     */
    public $BasicPolicy;

    /**
     * @var AgentRunModePolicy <p>高级运行策略</p>
     */
    public $AdvancePolicy;

    /**
     * @var AgentRunModePolicy <p>自定义运行策略</p>
     */
    public $CustomPolicy;

    /**
     * @var array <p>自定义模式关联的机器instance_id列表</p>
     */
    public $CustomModeInstanceIDs;

    /**
     * @var array <p>高级模式关联的机器instance_id列表</p>
     */
    public $AdvanceModeInstanceIDs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AgentRunModePolicy $BasicPolicy <p>基础运行策略</p>
     * @param AgentRunModePolicy $AdvancePolicy <p>高级运行策略</p>
     * @param AgentRunModePolicy $CustomPolicy <p>自定义运行策略</p>
     * @param array $CustomModeInstanceIDs <p>自定义模式关联的机器instance_id列表</p>
     * @param array $AdvanceModeInstanceIDs <p>高级模式关联的机器instance_id列表</p>
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
        if (array_key_exists("BasicPolicy",$param) and $param["BasicPolicy"] !== null) {
            $this->BasicPolicy = new AgentRunModePolicy();
            $this->BasicPolicy->deserialize($param["BasicPolicy"]);
        }

        if (array_key_exists("AdvancePolicy",$param) and $param["AdvancePolicy"] !== null) {
            $this->AdvancePolicy = new AgentRunModePolicy();
            $this->AdvancePolicy->deserialize($param["AdvancePolicy"]);
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = new AgentRunModePolicy();
            $this->CustomPolicy->deserialize($param["CustomPolicy"]);
        }

        if (array_key_exists("CustomModeInstanceIDs",$param) and $param["CustomModeInstanceIDs"] !== null) {
            $this->CustomModeInstanceIDs = $param["CustomModeInstanceIDs"];
        }

        if (array_key_exists("AdvanceModeInstanceIDs",$param) and $param["AdvanceModeInstanceIDs"] !== null) {
            $this->AdvanceModeInstanceIDs = $param["AdvanceModeInstanceIDs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
