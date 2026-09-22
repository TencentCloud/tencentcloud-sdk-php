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
 * ModifyAgentA2AConfig请求参数结构体
 *
 * @method string getAgentId() 获取<p>Agent 业务 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent 业务 ID</p>
 * @method boolean getA2AEnabled() 获取<p>Agent 级唯一 A2A 开关</p>
 * @method void setA2AEnabled(boolean $A2AEnabled) 设置<p>Agent 级唯一 A2A 开关</p>
 * @method array getA2ASkillSet() 获取<p>A2A 技能集合（原 A2ASkills）</p>
 * @method void setA2ASkillSet(array $A2ASkillSet) 设置<p>A2A 技能集合（原 A2ASkills）</p>
 */
class ModifyAgentA2AConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Agent 业务 ID</p>
     */
    public $AgentId;

    /**
     * @var boolean <p>Agent 级唯一 A2A 开关</p>
     */
    public $A2AEnabled;

    /**
     * @var array <p>A2A 技能集合（原 A2ASkills）</p>
     */
    public $A2ASkillSet;

    /**
     * @param string $AgentId <p>Agent 业务 ID</p>
     * @param boolean $A2AEnabled <p>Agent 级唯一 A2A 开关</p>
     * @param array $A2ASkillSet <p>A2A 技能集合（原 A2ASkills）</p>
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

        if (array_key_exists("A2AEnabled",$param) and $param["A2AEnabled"] !== null) {
            $this->A2AEnabled = $param["A2AEnabled"];
        }

        if (array_key_exists("A2ASkillSet",$param) and $param["A2ASkillSet"] !== null) {
            $this->A2ASkillSet = [];
            foreach ($param["A2ASkillSet"] as $key => $value){
                $obj = new A2ASkillInput();
                $obj->deserialize($value);
                array_push($this->A2ASkillSet, $obj);
            }
        }
    }
}
