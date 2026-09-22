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
 * ModifyAgentVersion请求参数结构体
 *
 * @method string getAgentId() 获取Agent 业务 ID
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
 * @method string getVersionId() 获取版本 ID（仅 default 或 test 版本可原地更新，prod 拒绝）
 * @method void setVersionId(string $VersionId) 设置版本 ID（仅 default 或 test 版本可原地更新，prod 拒绝）
 * @method string getManifest() 获取Manifest v2.0 原文（可选；Manifest / Model / Description / SandboxTemplateId / ConnectorSet 五个可选字段至少提供一个）
 * @method void setManifest(string $Manifest) 设置Manifest v2.0 原文（可选；Manifest / Model / Description / SandboxTemplateId / ConnectorSet 五个可选字段至少提供一个）
 * @method string getModel() 获取模型标识（可选）
 * @method void setModel(string $Model) 设置模型标识（可选）
 * @method string getDescription() 获取版本变更说明（可选）
 * @method void setDescription(string $Description) 设置版本变更说明（可选）
 * @method string getSandboxTemplateId() 获取沙箱模板 ID。可选，patch 语义：null 不修改；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置沙箱模板 ID。可选，patch 语义：null 不修改；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。
 * @method array getConnectorSet() 获取该版本最终绑定的连接器集合（全量覆盖语义）：缺省 = 本次不改动连接器绑定；空数组 = 解绑全部连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目，manifest 中不在本集合内的连接器条目会被移除（解绑在服务端闭环，无需调用方改写 Manifest）
 * @method void setConnectorSet(array $ConnectorSet) 设置该版本最终绑定的连接器集合（全量覆盖语义）：缺省 = 本次不改动连接器绑定；空数组 = 解绑全部连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目，manifest 中不在本集合内的连接器条目会被移除（解绑在服务端闭环，无需调用方改写 Manifest）
 */
class ModifyAgentVersionRequest extends AbstractModel
{
    /**
     * @var string Agent 业务 ID
     */
    public $AgentId;

    /**
     * @var string 版本 ID（仅 default 或 test 版本可原地更新，prod 拒绝）
     */
    public $VersionId;

    /**
     * @var string Manifest v2.0 原文（可选；Manifest / Model / Description / SandboxTemplateId / ConnectorSet 五个可选字段至少提供一个）
     */
    public $Manifest;

    /**
     * @var string 模型标识（可选）
     */
    public $Model;

    /**
     * @var string 版本变更说明（可选）
     */
    public $Description;

    /**
     * @var string 沙箱模板 ID。可选，patch 语义：null 不修改；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。
     */
    public $SandboxTemplateId;

    /**
     * @var array 该版本最终绑定的连接器集合（全量覆盖语义）：缺省 = 本次不改动连接器绑定；空数组 = 解绑全部连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目，manifest 中不在本集合内的连接器条目会被移除（解绑在服务端闭环，无需调用方改写 Manifest）
     */
    public $ConnectorSet;

    /**
     * @param string $AgentId Agent 业务 ID
     * @param string $VersionId 版本 ID（仅 default 或 test 版本可原地更新，prod 拒绝）
     * @param string $Manifest Manifest v2.0 原文（可选；Manifest / Model / Description / SandboxTemplateId / ConnectorSet 五个可选字段至少提供一个）
     * @param string $Model 模型标识（可选）
     * @param string $Description 版本变更说明（可选）
     * @param string $SandboxTemplateId 沙箱模板 ID。可选，patch 语义：null 不修改；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。
     * @param array $ConnectorSet 该版本最终绑定的连接器集合（全量覆盖语义）：缺省 = 本次不改动连接器绑定；空数组 = 解绑全部连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目，manifest 中不在本集合内的连接器条目会被移除（解绑在服务端闭环，无需调用方改写 Manifest）
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

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SandboxTemplateId",$param) and $param["SandboxTemplateId"] !== null) {
            $this->SandboxTemplateId = $param["SandboxTemplateId"];
        }

        if (array_key_exists("ConnectorSet",$param) and $param["ConnectorSet"] !== null) {
            $this->ConnectorSet = [];
            foreach ($param["ConnectorSet"] as $key => $value){
                $obj = new ConnectorRefInput();
                $obj->deserialize($value);
                array_push($this->ConnectorSet, $obj);
            }
        }
    }
}
