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
 * CreateRegistryRecord请求参数结构体
 *
 * @method string getRegistryId() 获取<p>所属 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>所属 Registry ID。</p>
 * @method string getName() 获取<p>Record 名称，长度 1..255，同一租户、Registry 内按规范化 Name 唯一（大小写不敏感）；软删除后允许复用。</p>
 * @method void setName(string $Name) 设置<p>Record 名称，长度 1..255，同一租户、Registry 内按规范化 Name 唯一（大小写不敏感）；软删除后允许复用。</p>
 * @method string getDescriptorType() 获取<p>协议描述符类型。MCP / A2A / AGUI / CUSTOM / AGENT_SKILLS。Record 创建后不可修改。</p>
 * @method void setDescriptorType(string $DescriptorType) 设置<p>协议描述符类型。MCP / A2A / AGUI / CUSTOM / AGENT_SKILLS。Record 创建后不可修改。</p>
 * @method string getDescription() 获取<p>Record 描述，最大 4096 字符，可选，默认空。</p>
 * @method void setDescription(string $Description) 设置<p>Record 描述，最大 4096 字符，可选，默认空。</p>
 * @method string getVersionName() 获取<p>Revision 1 的展示名称，可选。</p>
 * @method void setVersionName(string $VersionName) 设置<p>Revision 1 的展示名称，可选。</p>
 * @method CloudMCPSourceInput getMCPSource() 获取<p>DescriptorType=MCP 时必填，其他类型禁止。</p>
 * @method void setMCPSource(CloudMCPSourceInput $MCPSource) 设置<p>DescriptorType=MCP 时必填，其他类型禁止。</p>
 * @method CloudAgentSourceInput getAgentSource() 获取<p>DescriptorType=A2A 或 AGUI 时必填，其他类型禁止。</p>
 * @method void setAgentSource(CloudAgentSourceInput $AgentSource) 设置<p>DescriptorType=A2A 或 AGUI 时必填，其他类型禁止。</p>
 * @method CloudSkillSourceInput getSkillSource() 获取<p>DescriptorType=AGENT_SKILLS 时必填，其他类型禁止。</p>
 * @method void setSkillSource(CloudSkillSourceInput $SkillSource) 设置<p>DescriptorType=AGENT_SKILLS 时必填，其他类型禁止。</p>
 * @method string getCustomDescriptors() 获取<p>DescriptorType=CUSTOM 时必填，其他类型禁止。内容必须是 JSON object 字符串；服务端解析后写入 CloudRecordVersion.Descriptors，Version 的 SourceType 固定为 MANUAL、SourceConfig 固定为空对象。</p>
 * @method void setCustomDescriptors(string $CustomDescriptors) 设置<p>DescriptorType=CUSTOM 时必填，其他类型禁止。内容必须是 JSON object 字符串；服务端解析后写入 CloudRecordVersion.Descriptors，Version 的 SourceType 固定为 MANUAL、SourceConfig 固定为空对象。</p>
 */
class CreateRegistryRecordRequest extends AbstractModel
{
    /**
     * @var string <p>所属 Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record 名称，长度 1..255，同一租户、Registry 内按规范化 Name 唯一（大小写不敏感）；软删除后允许复用。</p>
     */
    public $Name;

    /**
     * @var string <p>协议描述符类型。MCP / A2A / AGUI / CUSTOM / AGENT_SKILLS。Record 创建后不可修改。</p>
     */
    public $DescriptorType;

    /**
     * @var string <p>Record 描述，最大 4096 字符，可选，默认空。</p>
     */
    public $Description;

    /**
     * @var string <p>Revision 1 的展示名称，可选。</p>
     */
    public $VersionName;

    /**
     * @var CloudMCPSourceInput <p>DescriptorType=MCP 时必填，其他类型禁止。</p>
     */
    public $MCPSource;

    /**
     * @var CloudAgentSourceInput <p>DescriptorType=A2A 或 AGUI 时必填，其他类型禁止。</p>
     */
    public $AgentSource;

    /**
     * @var CloudSkillSourceInput <p>DescriptorType=AGENT_SKILLS 时必填，其他类型禁止。</p>
     */
    public $SkillSource;

    /**
     * @var string <p>DescriptorType=CUSTOM 时必填，其他类型禁止。内容必须是 JSON object 字符串；服务端解析后写入 CloudRecordVersion.Descriptors，Version 的 SourceType 固定为 MANUAL、SourceConfig 固定为空对象。</p>
     */
    public $CustomDescriptors;

    /**
     * @param string $RegistryId <p>所属 Registry ID。</p>
     * @param string $Name <p>Record 名称，长度 1..255，同一租户、Registry 内按规范化 Name 唯一（大小写不敏感）；软删除后允许复用。</p>
     * @param string $DescriptorType <p>协议描述符类型。MCP / A2A / AGUI / CUSTOM / AGENT_SKILLS。Record 创建后不可修改。</p>
     * @param string $Description <p>Record 描述，最大 4096 字符，可选，默认空。</p>
     * @param string $VersionName <p>Revision 1 的展示名称，可选。</p>
     * @param CloudMCPSourceInput $MCPSource <p>DescriptorType=MCP 时必填，其他类型禁止。</p>
     * @param CloudAgentSourceInput $AgentSource <p>DescriptorType=A2A 或 AGUI 时必填，其他类型禁止。</p>
     * @param CloudSkillSourceInput $SkillSource <p>DescriptorType=AGENT_SKILLS 时必填，其他类型禁止。</p>
     * @param string $CustomDescriptors <p>DescriptorType=CUSTOM 时必填，其他类型禁止。内容必须是 JSON object 字符串；服务端解析后写入 CloudRecordVersion.Descriptors，Version 的 SourceType 固定为 MANUAL、SourceConfig 固定为空对象。</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DescriptorType",$param) and $param["DescriptorType"] !== null) {
            $this->DescriptorType = $param["DescriptorType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
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
    }
}
