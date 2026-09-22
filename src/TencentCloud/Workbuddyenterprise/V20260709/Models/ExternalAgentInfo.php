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
 * 外部 Agent 列表/详情项
 *
 * @method string getA2AAgentId() 获取外部 A2A agent ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AAgentId(string $A2AAgentId) 设置外部 A2A agent ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取外部 Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置外部 Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取外部 A2A Server URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置外部 A2A Server URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindingId() 获取绑定记录 ID（已绑定时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindingId(string $BindingId) 设置绑定记录 ID（已绑定时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBound() 获取是否已绑定到当前 Agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBound(boolean $Bound) 设置是否已绑定到当前 Agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取头像地址（取自 provider card 的 iconUrl）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置头像地址（取自 provider card 的 iconUrl）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2AVersion() 获取外部 agent card 声明的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AVersion(string $A2AVersion) 设置外部 agent card 声明的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getA2ASkillSet() 获取A2A card skills 集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2ASkillSet(array $A2ASkillSet) 设置A2A card skills 集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalAgentInfo extends AbstractModel
{
    /**
     * @var string 外部 A2A agent ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AAgentId;

    /**
     * @var string 外部 Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 外部 A2A Server URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @var string 绑定记录 ID（已绑定时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindingId;

    /**
     * @var boolean 是否已绑定到当前 Agent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bound;

    /**
     * @var string 头像地址（取自 provider card 的 iconUrl）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @var string 外部 agent card 声明的版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AVersion;

    /**
     * @var array A2A card skills 集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2ASkillSet;

    /**
     * @param string $A2AAgentId 外部 A2A agent ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 外部 Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint 外部 A2A Server URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindingId 绑定记录 ID（已绑定时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Bound 是否已绑定到当前 Agent
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 头像地址（取自 provider card 的 iconUrl）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2AVersion 外部 agent card 声明的版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $A2ASkillSet A2A card skills 集合
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
        if (array_key_exists("A2AAgentId",$param) and $param["A2AAgentId"] !== null) {
            $this->A2AAgentId = $param["A2AAgentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("BindingId",$param) and $param["BindingId"] !== null) {
            $this->BindingId = $param["BindingId"];
        }

        if (array_key_exists("Bound",$param) and $param["Bound"] !== null) {
            $this->Bound = $param["Bound"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("A2AVersion",$param) and $param["A2AVersion"] !== null) {
            $this->A2AVersion = $param["A2AVersion"];
        }

        if (array_key_exists("A2ASkillSet",$param) and $param["A2ASkillSet"] !== null) {
            $this->A2ASkillSet = [];
            foreach ($param["A2ASkillSet"] as $key => $value){
                $obj = new A2ASkillItem();
                $obj->deserialize($value);
                array_push($this->A2ASkillSet, $obj);
            }
        }
    }
}
