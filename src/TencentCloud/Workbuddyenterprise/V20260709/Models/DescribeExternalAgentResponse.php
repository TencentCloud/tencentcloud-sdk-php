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
 * DescribeExternalAgent返回参数结构体
 *
 * @method string getA2AAgentId() 获取<p>外部 A2A agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AAgentId(string $A2AAgentId) 设置<p>外部 A2A agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>外部 Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>外部 Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取<p>外部 A2A Server URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置<p>外部 A2A Server URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindingId() 获取<p>绑定记录 ID（已绑定时返回）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindingId(string $BindingId) 设置<p>绑定记录 ID（已绑定时返回）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBound() 获取<p>是否已绑定到当前 Agent</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBound(boolean $Bound) 设置<p>是否已绑定到当前 Agent</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取<p>头像地址（取自 provider card 的 iconUrl；为空时前端回落首字母头像）</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>头像地址（取自 provider card 的 iconUrl；为空时前端回落首字母头像）</p>
 * @method string getA2AVersion() 获取<p>外部 agent card 声明的版本号</p>
 * @method void setA2AVersion(string $A2AVersion) 设置<p>外部 agent card 声明的版本号</p>
 * @method array getA2ASkillSet() 获取<p>A2A card skills 集合</p>
 * @method void setA2ASkillSet(array $A2ASkillSet) 设置<p>A2A card skills 集合</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExternalAgentResponse extends AbstractModel
{
    /**
     * @var string <p>外部 A2A agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AAgentId;

    /**
     * @var string <p>外部 Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>外部 A2A Server URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @var string <p>绑定记录 ID（已绑定时返回）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindingId;

    /**
     * @var boolean <p>是否已绑定到当前 Agent</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bound;

    /**
     * @var string <p>头像地址（取自 provider card 的 iconUrl；为空时前端回落首字母头像）</p>
     */
    public $IconUrl;

    /**
     * @var string <p>外部 agent card 声明的版本号</p>
     */
    public $A2AVersion;

    /**
     * @var array <p>A2A card skills 集合</p>
     */
    public $A2ASkillSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $A2AAgentId <p>外部 A2A agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>外部 Agent 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint <p>外部 A2A Server URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindingId <p>绑定记录 ID（已绑定时返回）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Bound <p>是否已绑定到当前 Agent</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl <p>头像地址（取自 provider card 的 iconUrl；为空时前端回落首字母头像）</p>
     * @param string $A2AVersion <p>外部 agent card 声明的版本号</p>
     * @param array $A2ASkillSet <p>A2A card skills 集合</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
