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
 * ModifyAgentVersion返回参数结构体
 *
 * @method string getVersionId() 获取版本 ID
 * @method void setVersionId(string $VersionId) 设置版本 ID
 * @method string getAgentId() 获取Agent 业务 ID
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getVersionType() 获取版本类型：DEFAULT / TEST / PROD
 * @method void setVersionType(string $VersionType) 设置版本类型：DEFAULT / TEST / PROD
 * @method string getDescription() 获取版本变更说明
 * @method void setDescription(string $Description) 设置版本变更说明
 * @method string getModel() 获取模型标识
 * @method void setModel(string $Model) 设置模型标识
 * @method string getManifest() 获取Manifest v2.0 精简 manifest 原文（JSON 字符串）
 * @method void setManifest(string $Manifest) 设置Manifest v2.0 精简 manifest 原文（JSON 字符串）
 * @method string getStatus() 获取版本状态：DRAFT / ENABLED / DISABLED
 * @method void setStatus(string $Status) 设置版本状态：DRAFT / ENABLED / DISABLED
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getModifiedTime() 获取更新时间
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间
 * @method string getSandboxTemplateId() 获取绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAgentVersionResponse extends AbstractModel
{
    /**
     * @var string 版本 ID
     */
    public $VersionId;

    /**
     * @var string Agent 业务 ID
     */
    public $AgentId;

    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 版本类型：DEFAULT / TEST / PROD
     */
    public $VersionType;

    /**
     * @var string 版本变更说明
     */
    public $Description;

    /**
     * @var string 模型标识
     */
    public $Model;

    /**
     * @var string Manifest v2.0 精简 manifest 原文（JSON 字符串）
     */
    public $Manifest;

    /**
     * @var string 版本状态：DRAFT / ENABLED / DISABLED
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $ModifiedTime;

    /**
     * @var string 绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。
     */
    public $SandboxTemplateId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VersionId 版本 ID
     * @param string $AgentId Agent 业务 ID
     * @param string $VersionName 版本名称
     * @param string $VersionType 版本类型：DEFAULT / TEST / PROD
     * @param string $Description 版本变更说明
     * @param string $Model 模型标识
     * @param string $Manifest Manifest v2.0 精简 manifest 原文（JSON 字符串）
     * @param string $Status 版本状态：DRAFT / ENABLED / DISABLED
     * @param string $CreatedTime 创建时间
     * @param string $ModifiedTime 更新时间
     * @param string $SandboxTemplateId 绑定的沙箱模板 ID；未绑定时为空，创建会话沙箱使用系统默认模板。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
