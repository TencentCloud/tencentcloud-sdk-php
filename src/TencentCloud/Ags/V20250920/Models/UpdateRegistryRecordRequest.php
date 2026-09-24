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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRegistryRecord请求参数结构体
 *
 * @method string getRegistryId() 获取<p>Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method string getDescription() 获取<p>Record 描述，可选。Record 更新模式下允许，允许空字符串清空；Version 创建模式禁止。</p>
 * @method void setDescription(string $Description) 设置<p>Record 描述，可选。Record 更新模式下允许，允许空字符串清空；Version 创建模式禁止。</p>
 * @method string getVersionName() 获取<p>新 Version 的展示名，可选。仅 Version 创建模式允许。</p>
 * @method void setVersionName(string $VersionName) 设置<p>新 Version 的展示名，可选。仅 Version 创建模式允许。</p>
 * @method string getChangeLog() 获取<p>新 Version 的变更原因，最大 4096 字符，可选。仅 Version 创建模式允许。</p>
 * @method void setChangeLog(string $ChangeLog) 设置<p>新 Version 的变更原因，最大 4096 字符，可选。仅 Version 创建模式允许。</p>
 * @method CloudMCPSourceInput getMCPSource() 获取<p>Version 创建模式：现有 Record 的 DescriptorType=MCP 时可提交。</p>
 * @method void setMCPSource(CloudMCPSourceInput $MCPSource) 设置<p>Version 创建模式：现有 Record 的 DescriptorType=MCP 时可提交。</p>
 * @method CloudAgentSourceInput getAgentSource() 获取<p>Version 创建模式：现有 Record 的 DescriptorType=A2A 或 AGUI 时可提交。</p>
 * @method void setAgentSource(CloudAgentSourceInput $AgentSource) 设置<p>Version 创建模式：现有 Record 的 DescriptorType=A2A 或 AGUI 时可提交。</p>
 * @method CloudSkillSourceInput getSkillSource() 获取<p>Version 创建模式：现有 Record 的 DescriptorType=AGENT_SKILLS 时可提交。</p>
 * @method void setSkillSource(CloudSkillSourceInput $SkillSource) 设置<p>Version 创建模式：现有 Record 的 DescriptorType=AGENT_SKILLS 时可提交。</p>
 * @method string getCustomDescriptors() 获取<p>Version 创建模式：现有 Record 的 DescriptorType=CUSTOM 时可提交，必须是 JSON object 字符串。</p>
 * @method void setCustomDescriptors(string $CustomDescriptors) 设置<p>Version 创建模式：现有 Record 的 DescriptorType=CUSTOM 时可提交，必须是 JSON object 字符串。</p>
 * @method array getLabelMutations() 获取<p>Record 更新模式：Label 变更列表，最多 32 条，同一次请求中 Label Name 不可重复。</p>
 * @method void setLabelMutations(array $LabelMutations) 设置<p>Record 更新模式：Label 变更列表，最多 32 条，同一次请求中 Label Name 不可重复。</p>
 */
class UpdateRegistryRecordRequest extends AbstractModel
{
    /**
     * @var string <p>Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。</p>
     */
    public $RecordId;

    /**
     * @var string <p>Record 描述，可选。Record 更新模式下允许，允许空字符串清空；Version 创建模式禁止。</p>
     */
    public $Description;

    /**
     * @var string <p>新 Version 的展示名，可选。仅 Version 创建模式允许。</p>
     */
    public $VersionName;

    /**
     * @var string <p>新 Version 的变更原因，最大 4096 字符，可选。仅 Version 创建模式允许。</p>
     */
    public $ChangeLog;

    /**
     * @var CloudMCPSourceInput <p>Version 创建模式：现有 Record 的 DescriptorType=MCP 时可提交。</p>
     */
    public $MCPSource;

    /**
     * @var CloudAgentSourceInput <p>Version 创建模式：现有 Record 的 DescriptorType=A2A 或 AGUI 时可提交。</p>
     */
    public $AgentSource;

    /**
     * @var CloudSkillSourceInput <p>Version 创建模式：现有 Record 的 DescriptorType=AGENT_SKILLS 时可提交。</p>
     */
    public $SkillSource;

    /**
     * @var string <p>Version 创建模式：现有 Record 的 DescriptorType=CUSTOM 时可提交，必须是 JSON object 字符串。</p>
     */
    public $CustomDescriptors;

    /**
     * @var array <p>Record 更新模式：Label 变更列表，最多 32 条，同一次请求中 Label Name 不可重复。</p>
     */
    public $LabelMutations;

    /**
     * @param string $RegistryId <p>Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param string $Description <p>Record 描述，可选。Record 更新模式下允许，允许空字符串清空；Version 创建模式禁止。</p>
     * @param string $VersionName <p>新 Version 的展示名，可选。仅 Version 创建模式允许。</p>
     * @param string $ChangeLog <p>新 Version 的变更原因，最大 4096 字符，可选。仅 Version 创建模式允许。</p>
     * @param CloudMCPSourceInput $MCPSource <p>Version 创建模式：现有 Record 的 DescriptorType=MCP 时可提交。</p>
     * @param CloudAgentSourceInput $AgentSource <p>Version 创建模式：现有 Record 的 DescriptorType=A2A 或 AGUI 时可提交。</p>
     * @param CloudSkillSourceInput $SkillSource <p>Version 创建模式：现有 Record 的 DescriptorType=AGENT_SKILLS 时可提交。</p>
     * @param string $CustomDescriptors <p>Version 创建模式：现有 Record 的 DescriptorType=CUSTOM 时可提交，必须是 JSON object 字符串。</p>
     * @param array $LabelMutations <p>Record 更新模式：Label 变更列表，最多 32 条，同一次请求中 Label Name 不可重复。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ChangeLog",$param) and $param["ChangeLog"] !== null) {
            $this->ChangeLog = $param["ChangeLog"];
        }

        if (array_key_exists("MCPSource",$param) and $param["MCPSource"] !== null) {
            $this->MCPSource = new CloudMCPSourceInput();
            $this->MCPSource->deserialize($param["MCPSource"]);
        }

        if (array_key_exists("AgentSource",$param) and $param["AgentSource"] !== null) {
            $this->AgentSource = new CloudAgentSourceInput();
            $this->AgentSource->deserialize($param["AgentSource"]);
        }

        if (array_key_exists("SkillSource",$param) and $param["SkillSource"] !== null) {
            $this->SkillSource = new CloudSkillSourceInput();
            $this->SkillSource->deserialize($param["SkillSource"]);
        }

        if (array_key_exists("CustomDescriptors",$param) and $param["CustomDescriptors"] !== null) {
            $this->CustomDescriptors = $param["CustomDescriptors"];
        }

        if (array_key_exists("LabelMutations",$param) and $param["LabelMutations"] !== null) {
            $this->LabelMutations = [];
            foreach ($param["LabelMutations"] as $key => $value){
                $obj = new CloudRecordLabelMutation();
                $obj->deserialize($value);
                array_push($this->LabelMutations, $obj);
            }
        }
    }
}
