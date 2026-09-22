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
 * BindExternalAgent请求参数结构体
 *
 * @method string getAgentId() 获取TMA managed agent 业务 ID（CloudAgentID）
 * @method void setAgentId(string $AgentId) 设置TMA managed agent 业务 ID（CloudAgentID）
 * @method string getA2AAgentId() 获取已注册的外部 A2A agent ID
 * @method void setA2AAgentId(string $A2AAgentId) 设置已注册的外部 A2A agent ID
 * @method string getVersionId() 获取版本 ID
 * @method void setVersionId(string $VersionId) 设置版本 ID
 */
class BindExternalAgentRequest extends AbstractModel
{
    /**
     * @var string TMA managed agent 业务 ID（CloudAgentID）
     */
    public $AgentId;

    /**
     * @var string 已注册的外部 A2A agent ID
     */
    public $A2AAgentId;

    /**
     * @var string 版本 ID
     */
    public $VersionId;

    /**
     * @param string $AgentId TMA managed agent 业务 ID（CloudAgentID）
     * @param string $A2AAgentId 已注册的外部 A2A agent ID
     * @param string $VersionId 版本 ID
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

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
