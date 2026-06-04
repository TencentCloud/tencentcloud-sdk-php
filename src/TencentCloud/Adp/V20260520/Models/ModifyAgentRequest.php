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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgent请求参数结构体
 *
 * @method string getAppId() 获取<p>应用Id</p>
 * @method void setAppId(string $AppId) 设置<p>应用Id</p>
 * @method string getAgentId() 获取<p>Agent Id</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent Id</p>
 * @method AgentSpec getAgent() 获取<p>修改后的Agent的信息</p>
 * @method void setAgent(AgentSpec $Agent) 设置<p>修改后的Agent的信息</p>
 * @method FieldMask getUpdateMask() 获取<p>需要更新的字段路径，如 [&quot;instructions&quot;, &quot;model&quot;, &quot;tool_list&quot;, &quot;plugin_list&quot;, &quot;skill_list&quot;, &quot;advanced_config&quot;]</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>需要更新的字段路径，如 [&quot;instructions&quot;, &quot;model&quot;, &quot;tool_list&quot;, &quot;plugin_list&quot;, &quot;skill_list&quot;, &quot;advanced_config&quot;]</p>
 */
class ModifyAgentRequest extends AbstractModel
{
    /**
     * @var string <p>应用Id</p>
     */
    public $AppId;

    /**
     * @var string <p>Agent Id</p>
     */
    public $AgentId;

    /**
     * @var AgentSpec <p>修改后的Agent的信息</p>
     */
    public $Agent;

    /**
     * @var FieldMask <p>需要更新的字段路径，如 [&quot;instructions&quot;, &quot;model&quot;, &quot;tool_list&quot;, &quot;plugin_list&quot;, &quot;skill_list&quot;, &quot;advanced_config&quot;]</p>
     */
    public $UpdateMask;

    /**
     * @param string $AppId <p>应用Id</p>
     * @param string $AgentId <p>Agent Id</p>
     * @param AgentSpec $Agent <p>修改后的Agent的信息</p>
     * @param FieldMask $UpdateMask <p>需要更新的字段路径，如 [&quot;instructions&quot;, &quot;model&quot;, &quot;tool_list&quot;, &quot;plugin_list&quot;, &quot;skill_list&quot;, &quot;advanced_config&quot;]</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new AgentSpec();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
