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
 * 任务关联的 Agent 配置
 *
 * @method string getPrompt() 获取<p>执行 Prompt（必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrompt(string $Prompt) 设置<p>执行 Prompt（必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>Agent 唯一标识（引用 CreateAgent 创建的 Managed Agent，必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>Agent 唯一标识（引用 CreateAgent 创建的 Managed Agent，必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentConfig extends AbstractModel
{
    /**
     * @var string <p>执行 Prompt（必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prompt;

    /**
     * @var string <p>Agent 唯一标识（引用 CreateAgent 创建的 Managed Agent，必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @param string $Prompt <p>执行 Prompt（必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>Agent 唯一标识（引用 CreateAgent 创建的 Managed Agent，必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }
    }
}
