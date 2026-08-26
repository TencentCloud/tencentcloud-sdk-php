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
 * CreateAIWorkbenchAgent请求参数结构体
 *
 * @method string getName() 获取<p>Agent 名称</p>
 * @method void setName(string $Name) 设置<p>Agent 名称</p>
 * @method string getDescription() 获取<p>Agent 描述</p>
 * @method void setDescription(string $Description) 设置<p>Agent 描述</p>
 * @method string getCategory() 获取<p>Agent 分类</p>
 * @method void setCategory(string $Category) 设置<p>Agent 分类</p>
 * @method array getTags() 获取<p>Agent 标签</p>
 * @method void setTags(array $Tags) 设置<p>Agent 标签</p>
 * @method InstructionConfig getInstruction() 获取<p>Agent 提示词</p>
 * @method void setInstruction(InstructionConfig $Instruction) 设置<p>Agent 提示词</p>
 * @method array getSkillIds() 获取<p>关联技能 ID 列表</p>
 * @method void setSkillIds(array $SkillIds) 设置<p>关联技能 ID 列表</p>
 * @method string getSource() 获取<p>来源: builtin / custom</p>
 * @method void setSource(string $Source) 设置<p>来源: builtin / custom</p>
 * @method string getResourceMapId() 获取<p>关联的资源地图 ID</p>
 * @method void setResourceMapId(string $ResourceMapId) 设置<p>关联的资源地图 ID</p>
 * @method array getMCPIds() 获取<p>关联的mcp工具</p>
 * @method void setMCPIds(array $MCPIds) 设置<p>关联的mcp工具</p>
 * @method array getCamTags() 获取<p>资源标签</p>
 * @method void setCamTags(array $CamTags) 设置<p>资源标签</p>
 * @method array getEnvVars() 获取<p>agent运行时环境变量</p>
 * @method void setEnvVars(array $EnvVars) 设置<p>agent运行时环境变量</p>
 */
class CreateAIWorkbenchAgentRequest extends AbstractModel
{
    /**
     * @var string <p>Agent 名称</p>
     */
    public $Name;

    /**
     * @var string <p>Agent 描述</p>
     */
    public $Description;

    /**
     * @var string <p>Agent 分类</p>
     */
    public $Category;

    /**
     * @var array <p>Agent 标签</p>
     */
    public $Tags;

    /**
     * @var InstructionConfig <p>Agent 提示词</p>
     */
    public $Instruction;

    /**
     * @var array <p>关联技能 ID 列表</p>
     */
    public $SkillIds;

    /**
     * @var string <p>来源: builtin / custom</p>
     */
    public $Source;

    /**
     * @var string <p>关联的资源地图 ID</p>
     */
    public $ResourceMapId;

    /**
     * @var array <p>关联的mcp工具</p>
     */
    public $MCPIds;

    /**
     * @var array <p>资源标签</p>
     */
    public $CamTags;

    /**
     * @var array <p>agent运行时环境变量</p>
     */
    public $EnvVars;

    /**
     * @param string $Name <p>Agent 名称</p>
     * @param string $Description <p>Agent 描述</p>
     * @param string $Category <p>Agent 分类</p>
     * @param array $Tags <p>Agent 标签</p>
     * @param InstructionConfig $Instruction <p>Agent 提示词</p>
     * @param array $SkillIds <p>关联技能 ID 列表</p>
     * @param string $Source <p>来源: builtin / custom</p>
     * @param string $ResourceMapId <p>关联的资源地图 ID</p>
     * @param array $MCPIds <p>关联的mcp工具</p>
     * @param array $CamTags <p>资源标签</p>
     * @param array $EnvVars <p>agent运行时环境变量</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Instruction",$param) and $param["Instruction"] !== null) {
            $this->Instruction = new InstructionConfig();
            $this->Instruction->deserialize($param["Instruction"]);
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("MCPIds",$param) and $param["MCPIds"] !== null) {
            $this->MCPIds = $param["MCPIds"];
        }

        if (array_key_exists("CamTags",$param) and $param["CamTags"] !== null) {
            $this->CamTags = [];
            foreach ($param["CamTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CamTags, $obj);
            }
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }
    }
}
