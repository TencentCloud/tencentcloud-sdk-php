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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartCompute请求参数结构体
 *
 * @method string getWorkspaceId() 获取工作空间 ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间 ID
 * @method string getComputeResourceId() 获取计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）。替代已废弃的 ResourceId；过渡期 ComputeResourceId 与 ResourceId 至少传一个，同时传时必须一致
 * @method void setComputeResourceId(string $ComputeResourceId) 设置计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）。替代已废弃的 ResourceId；过渡期 ComputeResourceId 与 ResourceId 至少传一个，同时传时必须一致
 * @method string getResourceId() 获取[已废弃，请使用 ComputeResourceId] 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）
 * @method void setResourceId(string $ResourceId) 设置[已废弃，请使用 ComputeResourceId] 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）
 */
class StartComputeRequest extends AbstractModel
{
    /**
     * @var string 工作空间 ID
     */
    public $WorkspaceId;

    /**
     * @var string 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）。替代已废弃的 ResourceId；过渡期 ComputeResourceId 与 ResourceId 至少传一个，同时传时必须一致
     */
    public $ComputeResourceId;

    /**
     * @var string [已废弃，请使用 ComputeResourceId] 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）
     */
    public $ResourceId;

    /**
     * @param string $WorkspaceId 工作空间 ID
     * @param string $ComputeResourceId 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）。替代已废弃的 ResourceId；过渡期 ComputeResourceId 与 ResourceId 至少传一个，同时传时必须一致
     * @param string $ResourceId [已废弃，请使用 ComputeResourceId] 计算资源 ID，可通过 ListComputes 接口获取（返回字段 Items[].BasicInfo.ResourceId）
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
