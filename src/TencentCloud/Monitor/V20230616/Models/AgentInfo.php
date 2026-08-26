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
 * Agent 信息
 *
 * @method string getAgentId() 获取<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>Agent 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>Agent 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取<p>Agent 分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置<p>Agent 分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态: draft/configured/running/standby/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态: draft/configured/running/standby/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSkillIds() 获取<p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillIds(array $SkillIds) 设置<p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceMapId() 获取<p>关联的资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceMapId(string $ResourceMapId) 设置<p>关联的资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMCPIds() 获取<p>关联的mcp id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCPIds(array $MCPIds) 设置<p>关联的mcp id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCamTags() 获取<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCamTags(array $CamTags) 设置<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvVars() 获取<p>agent运行时所需环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvVars(array $EnvVars) 设置<p>agent运行时所需环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentInfo extends AbstractModel
{
    /**
     * @var string <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>Agent 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>Agent 分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string <p>状态: draft/configured/running/standby/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array <p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillIds;

    /**
     * @var string <p>关联的资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceMapId;

    /**
     * @var array <p>关联的mcp id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCPIds;

    /**
     * @var array <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CamTags;

    /**
     * @var array <p>agent运行时所需环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvVars;

    /**
     * @param string $AgentId <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>Agent 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category <p>Agent 分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态: draft/configured/running/standby/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SkillIds <p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceMapId <p>关联的资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MCPIds <p>关联的mcp id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CamTags <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnvVars <p>agent运行时所需环境变量</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
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
