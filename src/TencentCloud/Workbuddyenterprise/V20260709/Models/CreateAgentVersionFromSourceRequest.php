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
 * CreateAgentVersionFromSource请求参数结构体
 *
 * @method string getAgentId() 获取<p>Agent 业务 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent 业务 ID</p>
 * @method string getSourceVersionId() 获取<p>源版本 ID，同 Agent 下未 DISABLED 的任意版本</p>
 * @method void setSourceVersionId(string $SourceVersionId) 设置<p>源版本 ID，同 Agent 下未 DISABLED 的任意版本</p>
 * @method string getModel() 获取<p>可选，覆盖源版本的 Model</p>
 * @method void setModel(string $Model) 设置<p>可选，覆盖源版本的 Model</p>
 * @method string getDescription() 获取<p>可选，覆盖源版本的 Description</p>
 * @method void setDescription(string $Description) 设置<p>可选，覆盖源版本的 Description</p>
 * @method string getManifest() 获取<p>可选，完整 v2.0 manifest JSON 字符串；传入则整体覆盖源版本 manifest</p>
 * @method void setManifest(string $Manifest) 设置<p>可选，完整 v2.0 manifest JSON 字符串；传入则整体覆盖源版本 manifest</p>
 * @method string getSandboxTemplateId() 获取<p>沙箱模板 ID。可选，patch 语义：null 沿用源版本绑定的模板；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。</p>
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置<p>沙箱模板 ID。可选，patch 语义：null 沿用源版本绑定的模板；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。</p>
 */
class CreateAgentVersionFromSourceRequest extends AbstractModel
{
    /**
     * @var string <p>Agent 业务 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>源版本 ID，同 Agent 下未 DISABLED 的任意版本</p>
     */
    public $SourceVersionId;

    /**
     * @var string <p>可选，覆盖源版本的 Model</p>
     */
    public $Model;

    /**
     * @var string <p>可选，覆盖源版本的 Description</p>
     */
    public $Description;

    /**
     * @var string <p>可选，完整 v2.0 manifest JSON 字符串；传入则整体覆盖源版本 manifest</p>
     */
    public $Manifest;

    /**
     * @var string <p>沙箱模板 ID。可选，patch 语义：null 沿用源版本绑定的模板；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。</p>
     */
    public $SandboxTemplateId;

    /**
     * @param string $AgentId <p>Agent 业务 ID</p>
     * @param string $SourceVersionId <p>源版本 ID，同 Agent 下未 DISABLED 的任意版本</p>
     * @param string $Model <p>可选，覆盖源版本的 Model</p>
     * @param string $Description <p>可选，覆盖源版本的 Description</p>
     * @param string $Manifest <p>可选，完整 v2.0 manifest JSON 字符串；传入则整体覆盖源版本 manifest</p>
     * @param string $SandboxTemplateId <p>沙箱模板 ID。可选，patch 语义：null 沿用源版本绑定的模板；空串解绑（恢复系统默认模板）；非空时模板须属于当前企业且可用（未删除、状态正常）。</p>
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

        if (array_key_exists("SourceVersionId",$param) and $param["SourceVersionId"] !== null) {
            $this->SourceVersionId = $param["SourceVersionId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("SandboxTemplateId",$param) and $param["SandboxTemplateId"] !== null) {
            $this->SandboxTemplateId = $param["SandboxTemplateId"];
        }
    }
}
