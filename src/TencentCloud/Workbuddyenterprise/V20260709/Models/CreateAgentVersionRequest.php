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
 * CreateAgentVersion请求参数结构体
 *
 * @method string getAgentId() 获取<p>Agent 业务 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent 业务 ID</p>
 * @method string getManifest() 获取<p>Manifest v2.0 精简 manifest 原文（JSON 对象序列化后的字符串）</p>
 * @method void setManifest(string $Manifest) 设置<p>Manifest v2.0 精简 manifest 原文（JSON 对象序列化后的字符串）</p>
 * @method string getModel() 获取<p>模型标识</p>
 * @method void setModel(string $Model) 设置<p>模型标识</p>
 * @method string getDescription() 获取<p>版本变更说明</p>
 * @method void setDescription(string $Description) 设置<p>版本变更说明</p>
 * @method string getSandboxTemplateId() 获取<p>沙箱模板 ID。可选；传入时模板须属于当前企业且可用（未删除、状态正常），绑定到新建的 test/prod 版本。</p>
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置<p>沙箱模板 ID。可选；传入时模板须属于当前企业且可用（未删除、状态正常），绑定到新建的 test/prod 版本。</p>
 */
class CreateAgentVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Agent 业务 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Manifest v2.0 精简 manifest 原文（JSON 对象序列化后的字符串）</p>
     */
    public $Manifest;

    /**
     * @var string <p>模型标识</p>
     */
    public $Model;

    /**
     * @var string <p>版本变更说明</p>
     */
    public $Description;

    /**
     * @var string <p>沙箱模板 ID。可选；传入时模板须属于当前企业且可用（未删除、状态正常），绑定到新建的 test/prod 版本。</p>
     */
    public $SandboxTemplateId;

    /**
     * @param string $AgentId <p>Agent 业务 ID</p>
     * @param string $Manifest <p>Manifest v2.0 精简 manifest 原文（JSON 对象序列化后的字符串）</p>
     * @param string $Model <p>模型标识</p>
     * @param string $Description <p>版本变更说明</p>
     * @param string $SandboxTemplateId <p>沙箱模板 ID。可选；传入时模板须属于当前企业且可用（未删除、状态正常），绑定到新建的 test/prod 版本。</p>
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
    }
}
