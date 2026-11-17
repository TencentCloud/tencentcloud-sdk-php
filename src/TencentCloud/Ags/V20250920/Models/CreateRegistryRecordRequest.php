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
 * @method string getDescriptorType() 获取<p>资产类型。取值包括 MCP、A2A、AGUI、CUSTOM、AGENT_SKILLS 和 PLUGIN。Record 创建后不可修改。PLUGIN 按通用文件资产保存，由运行端解析和加载。</p>
 * @method void setDescriptorType(string $DescriptorType) 设置<p>资产类型。取值包括 MCP、A2A、AGUI、CUSTOM、AGENT_SKILLS 和 PLUGIN。Record 创建后不可修改。PLUGIN 按通用文件资产保存，由运行端解析和加载。</p>
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
 * @method CloudFileSourceInput getFileSource() 获取<p>Plugin 通用文件来源。DescriptorType=PLUGIN 时必填，其他类型禁止。</p><p>入参限制：Create 仅支持 Type=FILE；声明 SizeBytes 为 1..54525952 字节，可选 SHA256 为 64 位小写十六进制摘要。</p><p>Registry 保存原始文件，不校验插件内容格式或语义；由运行端解析和加载。Skill 继续使用原 SkillSource。</p>
 * @method void setFileSource(CloudFileSourceInput $FileSource) 设置<p>Plugin 通用文件来源。DescriptorType=PLUGIN 时必填，其他类型禁止。</p><p>入参限制：Create 仅支持 Type=FILE；声明 SizeBytes 为 1..54525952 字节，可选 SHA256 为 64 位小写十六进制摘要。</p><p>Registry 保存原始文件，不校验插件内容格式或语义；由运行端解析和加载。Skill 继续使用原 SkillSource。</p>
 * @method array getSupportedHarnessVersions() 获取<p>本版本支持的 HarnessVersionReference 对象列表；每项包含 HarnessEngine 和 HarnessEngineVersion，原样使用 DescribeHarnessEngineList 返回的选项。</p><p>入参限制：两个字段均必填，各为 1 至 128 字符的精确值，区分大小写，不含空白、通配符或版本范围；最多 128 项，按引擎与版本二元组去重。不接受旧字符串数组、null、缺少字段或额外字段。</p><p>省略或空数组表示未声明，不继承前一版本，不代表支持所有 Harness。兼容性按同一对象的引擎与版本共同判断。修改兼容声明需创建新 Version，文件资产可通过 FileSource.Type=VERSION 复用制品。</p>
 * @method void setSupportedHarnessVersions(array $SupportedHarnessVersions) 设置<p>本版本支持的 HarnessVersionReference 对象列表；每项包含 HarnessEngine 和 HarnessEngineVersion，原样使用 DescribeHarnessEngineList 返回的选项。</p><p>入参限制：两个字段均必填，各为 1 至 128 字符的精确值，区分大小写，不含空白、通配符或版本范围；最多 128 项，按引擎与版本二元组去重。不接受旧字符串数组、null、缺少字段或额外字段。</p><p>省略或空数组表示未声明，不继承前一版本，不代表支持所有 Harness。兼容性按同一对象的引擎与版本共同判断。修改兼容声明需创建新 Version，文件资产可通过 FileSource.Type=VERSION 复用制品。</p>
 * @method array getMetadata() 获取<p>版本元数据的 Name/Value 对象数组。</p><p>参数格式：每项仅包含必填的 Name、Value 两个字符串字段。Name 非空、小写且数组内唯一，不自动转换；重复 Name 即使 Value 相同也返回 InvalidParameter。Value 允许空字符串，保留大小写；不接受嵌套对象、数组或非字符串值。</p><p>默认值：空数组 []。创建新版本时省略或 [] 均为空，不继承；null、JSON 字符串和原生对象非法。响应按 Name 升序返回，旧 SQL NULL 归一为 []。服务内部使用 map[string]string，数据库 JSON 列保存对象。publisher 表示发布者展示名称；metadata.&lt;key&gt; 按完整小写名称精确筛选，规则不变。</p>
 * @method void setMetadata(array $Metadata) 设置<p>版本元数据的 Name/Value 对象数组。</p><p>参数格式：每项仅包含必填的 Name、Value 两个字符串字段。Name 非空、小写且数组内唯一，不自动转换；重复 Name 即使 Value 相同也返回 InvalidParameter。Value 允许空字符串，保留大小写；不接受嵌套对象、数组或非字符串值。</p><p>默认值：空数组 []。创建新版本时省略或 [] 均为空，不继承；null、JSON 字符串和原生对象非法。响应按 Name 升序返回，旧 SQL NULL 归一为 []。服务内部使用 map[string]string，数据库 JSON 列保存对象。publisher 表示发布者展示名称；metadata.&lt;key&gt; 按完整小写名称精确筛选，规则不变。</p>
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
     * @var string <p>资产类型。取值包括 MCP、A2A、AGUI、CUSTOM、AGENT_SKILLS 和 PLUGIN。Record 创建后不可修改。PLUGIN 按通用文件资产保存，由运行端解析和加载。</p>
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
     * @var CloudFileSourceInput <p>Plugin 通用文件来源。DescriptorType=PLUGIN 时必填，其他类型禁止。</p><p>入参限制：Create 仅支持 Type=FILE；声明 SizeBytes 为 1..54525952 字节，可选 SHA256 为 64 位小写十六进制摘要。</p><p>Registry 保存原始文件，不校验插件内容格式或语义；由运行端解析和加载。Skill 继续使用原 SkillSource。</p>
     */
    public $FileSource;

    /**
     * @var array <p>本版本支持的 HarnessVersionReference 对象列表；每项包含 HarnessEngine 和 HarnessEngineVersion，原样使用 DescribeHarnessEngineList 返回的选项。</p><p>入参限制：两个字段均必填，各为 1 至 128 字符的精确值，区分大小写，不含空白、通配符或版本范围；最多 128 项，按引擎与版本二元组去重。不接受旧字符串数组、null、缺少字段或额外字段。</p><p>省略或空数组表示未声明，不继承前一版本，不代表支持所有 Harness。兼容性按同一对象的引擎与版本共同判断。修改兼容声明需创建新 Version，文件资产可通过 FileSource.Type=VERSION 复用制品。</p>
     */
    public $SupportedHarnessVersions;

    /**
     * @var array <p>版本元数据的 Name/Value 对象数组。</p><p>参数格式：每项仅包含必填的 Name、Value 两个字符串字段。Name 非空、小写且数组内唯一，不自动转换；重复 Name 即使 Value 相同也返回 InvalidParameter。Value 允许空字符串，保留大小写；不接受嵌套对象、数组或非字符串值。</p><p>默认值：空数组 []。创建新版本时省略或 [] 均为空，不继承；null、JSON 字符串和原生对象非法。响应按 Name 升序返回，旧 SQL NULL 归一为 []。服务内部使用 map[string]string，数据库 JSON 列保存对象。publisher 表示发布者展示名称；metadata.&lt;key&gt; 按完整小写名称精确筛选，规则不变。</p>
     */
    public $Metadata;

    /**
     * @param string $RegistryId <p>所属 Registry ID。</p>
     * @param string $Name <p>Record 名称，长度 1..255，同一租户、Registry 内按规范化 Name 唯一（大小写不敏感）；软删除后允许复用。</p>
     * @param string $DescriptorType <p>资产类型。取值包括 MCP、A2A、AGUI、CUSTOM、AGENT_SKILLS 和 PLUGIN。Record 创建后不可修改。PLUGIN 按通用文件资产保存，由运行端解析和加载。</p>
     * @param string $Description <p>Record 描述，最大 4096 字符，可选，默认空。</p>
     * @param string $VersionName <p>Revision 1 的展示名称，可选。</p>
     * @param CloudMCPSourceInput $MCPSource <p>DescriptorType=MCP 时必填，其他类型禁止。</p>
     * @param CloudAgentSourceInput $AgentSource <p>DescriptorType=A2A 或 AGUI 时必填，其他类型禁止。</p>
     * @param CloudSkillSourceInput $SkillSource <p>DescriptorType=AGENT_SKILLS 时必填，其他类型禁止。</p>
     * @param string $CustomDescriptors <p>DescriptorType=CUSTOM 时必填，其他类型禁止。内容必须是 JSON object 字符串；服务端解析后写入 CloudRecordVersion.Descriptors，Version 的 SourceType 固定为 MANUAL、SourceConfig 固定为空对象。</p>
     * @param CloudFileSourceInput $FileSource <p>Plugin 通用文件来源。DescriptorType=PLUGIN 时必填，其他类型禁止。</p><p>入参限制：Create 仅支持 Type=FILE；声明 SizeBytes 为 1..54525952 字节，可选 SHA256 为 64 位小写十六进制摘要。</p><p>Registry 保存原始文件，不校验插件内容格式或语义；由运行端解析和加载。Skill 继续使用原 SkillSource。</p>
     * @param array $SupportedHarnessVersions <p>本版本支持的 HarnessVersionReference 对象列表；每项包含 HarnessEngine 和 HarnessEngineVersion，原样使用 DescribeHarnessEngineList 返回的选项。</p><p>入参限制：两个字段均必填，各为 1 至 128 字符的精确值，区分大小写，不含空白、通配符或版本范围；最多 128 项，按引擎与版本二元组去重。不接受旧字符串数组、null、缺少字段或额外字段。</p><p>省略或空数组表示未声明，不继承前一版本，不代表支持所有 Harness。兼容性按同一对象的引擎与版本共同判断。修改兼容声明需创建新 Version，文件资产可通过 FileSource.Type=VERSION 复用制品。</p>
     * @param array $Metadata <p>版本元数据的 Name/Value 对象数组。</p><p>参数格式：每项仅包含必填的 Name、Value 两个字符串字段。Name 非空、小写且数组内唯一，不自动转换；重复 Name 即使 Value 相同也返回 InvalidParameter。Value 允许空字符串，保留大小写；不接受嵌套对象、数组或非字符串值。</p><p>默认值：空数组 []。创建新版本时省略或 [] 均为空，不继承；null、JSON 字符串和原生对象非法。响应按 Name 升序返回，旧 SQL NULL 归一为 []。服务内部使用 map[string]string，数据库 JSON 列保存对象。publisher 表示发布者展示名称；metadata.&lt;key&gt; 按完整小写名称精确筛选，规则不变。</p>
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

        if (array_key_exists("FileSource",$param) and $param["FileSource"] !== null) {
            $this->FileSource = new CloudFileSourceInput();
            $this->FileSource->deserialize($param["FileSource"]);
        }

        if (array_key_exists("SupportedHarnessVersions",$param) and $param["SupportedHarnessVersions"] !== null) {
            $this->SupportedHarnessVersions = [];
            foreach ($param["SupportedHarnessVersions"] as $key => $value){
                $obj = new HarnessVersionReference();
                $obj->deserialize($value);
                array_push($this->SupportedHarnessVersions, $obj);
            }
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new MetadataEntry();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
