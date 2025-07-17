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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProject请求参数结构体
 *
 * @method string getProjectId() 获取目标修改的项目ID
 * @method void setProjectId(string $ProjectId) 设置目标修改的项目ID
 * @method boolean getTaskSubmitApproval() 获取true/false则修改，不带该参数不修改。
 * @method void setTaskSubmitApproval(boolean $TaskSubmitApproval) 设置true/false则修改，不带该参数不修改。
 * @method ResourcePoolInfo getResourcePoolInfo() 获取资源池信息
 * @method void setResourcePoolInfo(ResourcePoolInfo $ResourcePoolInfo) 设置资源池信息
 * @method array getProjectManagers() 获取项目管理员
 * @method void setProjectManagers(array $ProjectManagers) 设置项目管理员
 * @method boolean getTaskStrictMode() 获取调度任务严格模式
 * @method void setTaskStrictMode(boolean $TaskStrictMode) 设置调度任务严格模式
 * @method string getExtraOptions() 获取以后新增选项可以直接通过前端的json格式写入去实现
 * @method void setExtraOptions(string $ExtraOptions) 设置以后新增选项可以直接通过前端的json格式写入去实现
 * @method string getModel() 获取项目类型，SIMPLE：简单模式 STANDARD：标准模式
 * @method void setModel(string $Model) 设置项目类型，SIMPLE：简单模式 STANDARD：标准模式
 * @method array getProjectOwner() 获取项目负责人
 * @method void setProjectOwner(array $ProjectOwner) 设置项目负责人
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string 目标修改的项目ID
     */
    public $ProjectId;

    /**
     * @var boolean true/false则修改，不带该参数不修改。
     */
    public $TaskSubmitApproval;

    /**
     * @var ResourcePoolInfo 资源池信息
     */
    public $ResourcePoolInfo;

    /**
     * @var array 项目管理员
     */
    public $ProjectManagers;

    /**
     * @var boolean 调度任务严格模式
     */
    public $TaskStrictMode;

    /**
     * @var string 以后新增选项可以直接通过前端的json格式写入去实现
     */
    public $ExtraOptions;

    /**
     * @var string 项目类型，SIMPLE：简单模式 STANDARD：标准模式
     */
    public $Model;

    /**
     * @var array 项目负责人
     */
    public $ProjectOwner;

    /**
     * @param string $ProjectId 目标修改的项目ID
     * @param boolean $TaskSubmitApproval true/false则修改，不带该参数不修改。
     * @param ResourcePoolInfo $ResourcePoolInfo 资源池信息
     * @param array $ProjectManagers 项目管理员
     * @param boolean $TaskStrictMode 调度任务严格模式
     * @param string $ExtraOptions 以后新增选项可以直接通过前端的json格式写入去实现
     * @param string $Model 项目类型，SIMPLE：简单模式 STANDARD：标准模式
     * @param array $ProjectOwner 项目负责人
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskSubmitApproval",$param) and $param["TaskSubmitApproval"] !== null) {
            $this->TaskSubmitApproval = $param["TaskSubmitApproval"];
        }

        if (array_key_exists("ResourcePoolInfo",$param) and $param["ResourcePoolInfo"] !== null) {
            $this->ResourcePoolInfo = new ResourcePoolInfo();
            $this->ResourcePoolInfo->deserialize($param["ResourcePoolInfo"]);
        }

        if (array_key_exists("ProjectManagers",$param) and $param["ProjectManagers"] !== null) {
            $this->ProjectManagers = $param["ProjectManagers"];
        }

        if (array_key_exists("TaskStrictMode",$param) and $param["TaskStrictMode"] !== null) {
            $this->TaskStrictMode = $param["TaskStrictMode"];
        }

        if (array_key_exists("ExtraOptions",$param) and $param["ExtraOptions"] !== null) {
            $this->ExtraOptions = $param["ExtraOptions"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ProjectOwner",$param) and $param["ProjectOwner"] !== null) {
            $this->ProjectOwner = $param["ProjectOwner"];
        }
    }
}
