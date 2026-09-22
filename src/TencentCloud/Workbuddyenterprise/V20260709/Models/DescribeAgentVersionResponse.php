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
 * DescribeAgentVersion返回参数结构体
 *
 * @method string getVersionId() 获取<p>版本 ID</p>
 * @method void setVersionId(string $VersionId) 设置<p>版本 ID</p>
 * @method string getAgentId() 获取<p>Agent 业务 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent 业务 ID</p>
 * @method string getVersionName() 获取<p>版本名称</p>
 * @method void setVersionName(string $VersionName) 设置<p>版本名称</p>
 * @method string getVersionType() 获取<p>版本类型：DEFAULT / TEST / PROD</p>
 * @method void setVersionType(string $VersionType) 设置<p>版本类型：DEFAULT / TEST / PROD</p>
 * @method string getDescription() 获取<p>版本变更说明</p>
 * @method void setDescription(string $Description) 设置<p>版本变更说明</p>
 * @method string getModel() 获取<p>模型标识</p>
 * @method void setModel(string $Model) 设置<p>模型标识</p>
 * @method string getManifest() 获取<p>Manifest v2.0 精简 manifest 原文（JSON 字符串）</p>
 * @method void setManifest(string $Manifest) 设置<p>Manifest v2.0 精简 manifest 原文（JSON 字符串）</p>
 * @method string getStatus() 获取<p>版本状态：DRAFT / ENABLED / DISABLED</p>
 * @method void setStatus(string $Status) 设置<p>版本状态：DRAFT / ENABLED / DISABLED</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getModifiedTime() 获取<p>更新时间</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>更新时间</p>
 * @method string getSandboxTemplateId() 获取<p>绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。</p>
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置<p>绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。</p>
 * @method integer getSessionCount() 获取<p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
 * @method void setSessionCount(integer $SessionCount) 设置<p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentVersionResponse extends AbstractModel
{
    /**
     * @var string <p>版本 ID</p>
     */
    public $VersionId;

    /**
     * @var string <p>Agent 业务 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>版本名称</p>
     */
    public $VersionName;

    /**
     * @var string <p>版本类型：DEFAULT / TEST / PROD</p>
     */
    public $VersionType;

    /**
     * @var string <p>版本变更说明</p>
     */
    public $Description;

    /**
     * @var string <p>模型标识</p>
     */
    public $Model;

    /**
     * @var string <p>Manifest v2.0 精简 manifest 原文（JSON 字符串）</p>
     */
    public $Manifest;

    /**
     * @var string <p>版本状态：DRAFT / ENABLED / DISABLED</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $ModifiedTime;

    /**
     * @var string <p>绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。</p>
     */
    public $SandboxTemplateId;

    /**
     * @var integer <p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
     */
    public $SessionCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VersionId <p>版本 ID</p>
     * @param string $AgentId <p>Agent 业务 ID</p>
     * @param string $VersionName <p>版本名称</p>
     * @param string $VersionType <p>版本类型：DEFAULT / TEST / PROD</p>
     * @param string $Description <p>版本变更说明</p>
     * @param string $Model <p>模型标识</p>
     * @param string $Manifest <p>Manifest v2.0 精简 manifest 原文（JSON 字符串）</p>
     * @param string $Status <p>版本状态：DRAFT / ENABLED / DISABLED</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $ModifiedTime <p>更新时间</p>
     * @param string $SandboxTemplateId <p>绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。</p>
     * @param integer $SessionCount <p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("VersionType",$param) and $param["VersionType"] !== null) {
            $this->VersionType = $param["VersionType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("SandboxTemplateId",$param) and $param["SandboxTemplateId"] !== null) {
            $this->SandboxTemplateId = $param["SandboxTemplateId"];
        }

        if (array_key_exists("SessionCount",$param) and $param["SessionCount"] !== null) {
            $this->SessionCount = $param["SessionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
