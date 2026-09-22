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
 * MigrateAgentSession请求参数结构体
 *
 * @method string getSessionId() 获取<p>待迁移的会话 ID（必填）</p>
 * @method void setSessionId(string $SessionId) 设置<p>待迁移的会话 ID（必填）</p>
 * @method string getAgentId() 获取<p>目标 Agent 业务 ID（必填），必须与 Session 原 Agent 相同</p>
 * @method void setAgentId(string $AgentId) 设置<p>目标 Agent 业务 ID（必填），必须与 Session 原 Agent 相同</p>
 * @method string getTargetVersionId() 获取<p>目标版本 ID（必填，字符串形式）。需归属同一 Agent 且未被废弃</p>
 * @method void setTargetVersionId(string $TargetVersionId) 设置<p>目标版本 ID（必填，字符串形式）。需归属同一 Agent 且未被废弃</p>
 */
class MigrateAgentSessionRequest extends AbstractModel
{
    /**
     * @var string <p>待迁移的会话 ID（必填）</p>
     */
    public $SessionId;

    /**
     * @var string <p>目标 Agent 业务 ID（必填），必须与 Session 原 Agent 相同</p>
     */
    public $AgentId;

    /**
     * @var string <p>目标版本 ID（必填，字符串形式）。需归属同一 Agent 且未被废弃</p>
     */
    public $TargetVersionId;

    /**
     * @param string $SessionId <p>待迁移的会话 ID（必填）</p>
     * @param string $AgentId <p>目标 Agent 业务 ID（必填），必须与 Session 原 Agent 相同</p>
     * @param string $TargetVersionId <p>目标版本 ID（必填，字符串形式）。需归属同一 Agent 且未被废弃</p>
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("TargetVersionId",$param) and $param["TargetVersionId"] !== null) {
            $this->TargetVersionId = $param["TargetVersionId"];
        }
    }
}
