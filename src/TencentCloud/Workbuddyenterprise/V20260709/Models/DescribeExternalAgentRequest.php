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
 * DescribeExternalAgent请求参数结构体
 *
 * @method string getAgentId() 获取<p>TMA managed agent 业务 ID（CloudAgentID）</p>
 * @method void setAgentId(string $AgentId) 设置<p>TMA managed agent 业务 ID（CloudAgentID）</p>
 * @method string getA2AAgentId() 获取<p>已绑定的外部 A2A agent ID</p>
 * @method void setA2AAgentId(string $A2AAgentId) 设置<p>已绑定的外部 A2A agent ID</p>
 */
class DescribeExternalAgentRequest extends AbstractModel
{
    /**
     * @var string <p>TMA managed agent 业务 ID（CloudAgentID）</p>
     */
    public $AgentId;

    /**
     * @var string <p>已绑定的外部 A2A agent ID</p>
     */
    public $A2AAgentId;

    /**
     * @param string $AgentId <p>TMA managed agent 业务 ID（CloudAgentID）</p>
     * @param string $A2AAgentId <p>已绑定的外部 A2A agent ID</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("A2AAgentId",$param) and $param["A2AAgentId"] !== null) {
            $this->A2AAgentId = $param["A2AAgentId"];
        }
    }
}
