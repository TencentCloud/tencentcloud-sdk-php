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
 * 会话列表项
 *
 * @method string getSessionId() 获取会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionName() 获取会话名称（AI 生成标题或用户改名；缺失时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionName(string $SessionName) 设置会话名称（AI 生成标题或用户改名；缺失时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取Agent 业务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID；原 AgentVersion）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID；原 AgentVersion）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取会话使用的 Agent 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置会话使用的 Agent 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取会话状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置会话状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建者 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建者 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取会话来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置会话来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取更新时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string 会话名称（AI 生成标题或用户改名；缺失时为空）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionName;

    /**
     * @var string Agent 业务 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @var string 会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID；原 AgentVersion）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var string 会话使用的 Agent 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 会话状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建者 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 会话来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 创建时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @param string $SessionId 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionName 会话名称（AI 生成标题或用户改名；缺失时为空）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId Agent 业务 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName 会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID；原 AgentVersion）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId 会话使用的 Agent 版本 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 会话状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建者 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 会话来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间（RFC3339）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 更新时间（RFC3339）
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

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
