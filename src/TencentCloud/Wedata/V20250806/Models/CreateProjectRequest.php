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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject请求参数结构体
 *
 * @method ProjectRequest getProject() 获取项目基本信息
 * @method void setProject(ProjectRequest $Project) 设置项目基本信息
 * @method DLCClusterInfo getDLCInfo() 获取DLC绑定集群信息
 * @method void setDLCInfo(DLCClusterInfo $DLCInfo) 设置DLC绑定集群信息
 * @method array getResourceIds() 获取绑定资源组的id列表
 * @method void setResourceIds(array $ResourceIds) 设置绑定资源组的id列表
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var ProjectRequest 项目基本信息
     */
    public $Project;

    /**
     * @var DLCClusterInfo DLC绑定集群信息
     */
    public $DLCInfo;

    /**
     * @var array 绑定资源组的id列表
     */
    public $ResourceIds;

    /**
     * @param ProjectRequest $Project 项目基本信息
     * @param DLCClusterInfo $DLCInfo DLC绑定集群信息
     * @param array $ResourceIds 绑定资源组的id列表
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
        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = new ProjectRequest();
            $this->Project->deserialize($param["Project"]);
        }

        if (array_key_exists("DLCInfo",$param) and $param["DLCInfo"] !== null) {
            $this->DLCInfo = new DLCClusterInfo();
            $this->DLCInfo->deserialize($param["DLCInfo"]);
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
