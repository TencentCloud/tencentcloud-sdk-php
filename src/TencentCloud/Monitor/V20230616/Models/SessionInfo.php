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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话实体
 *
 * @method string getSessionId() 获取<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取<p>会话标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置<p>会话标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态: active / archived / deleted</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态: active / archived / deleted</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>如果该会话由任务触发，则携带触发其会话的任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>如果该会话由任务触发，则携带触发其会话的任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SessionInfo extends AbstractModel
{
    /**
     * @var string <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>会话标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string <p>状态: active / archived / deleted</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>如果该会话由任务触发，则携带触发其会话的任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @param string $SessionId <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title <p>会话标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态: active / archived / deleted</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>如果该会话由任务触发，则携带触发其会话的任务ID</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
