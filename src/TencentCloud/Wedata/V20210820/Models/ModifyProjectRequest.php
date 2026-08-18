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
 * @method string getProjectId() 获取<p>目标修改的项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>目标修改的项目ID</p>
 * @method string getDisplayName() 获取<p>项目显示名称，可以为中文名,需要租户范围内唯一</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>项目显示名称，可以为中文名,需要租户范围内唯一</p>
 * @method string getDescription() 获取<p>备注</p>
 * @method void setDescription(string $Description) 设置<p>备注</p>
 * @method boolean getTaskSubmitApproval() 获取<p>true/false则修改，不带该参数不修改。</p>
 * @method void setTaskSubmitApproval(boolean $TaskSubmitApproval) 设置<p>true/false则修改，不带该参数不修改。</p>
 * @method ResourcePoolInfo getResourcePoolInfo() 获取<p>资源池信息</p>
 * @method void setResourcePoolInfo(ResourcePoolInfo $ResourcePoolInfo) 设置<p>资源池信息</p>
 * @method array getProjectManagers() 获取<p>项目管理员</p>
 * @method void setProjectManagers(array $ProjectManagers) 设置<p>项目管理员</p>
 * @method boolean getTaskStrictMode() 获取<p>调度任务严格模式</p>
 * @method void setTaskStrictMode(boolean $TaskStrictMode) 设置<p>调度任务严格模式</p>
 * @method string getExtraOptions() 获取<p>以后新增选项可以直接通过前端的json格式写入去实现</p>
 * @method void setExtraOptions(string $ExtraOptions) 设置<p>以后新增选项可以直接通过前端的json格式写入去实现</p>
 * @method string getModel() 获取<p>项目类型，SIMPLE：简单模式 STANDARD：标准模式</p>
 * @method void setModel(string $Model) 设置<p>项目类型，SIMPLE：简单模式 STANDARD：标准模式</p>
 * @method array getProjectOwner() 获取<p>项目负责人</p>
 * @method void setProjectOwner(array $ProjectOwner) 设置<p>项目负责人</p>
 * @method string getModifyType() 获取<p>更新类型</p>
 * @method void setModifyType(string $ModifyType) 设置<p>更新类型</p>
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string <p>目标修改的项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目显示名称，可以为中文名,需要租户范围内唯一</p>
     */
    public $DisplayName;

    /**
     * @var string <p>备注</p>
     */
    public $Description;

    /**
     * @var boolean <p>true/false则修改，不带该参数不修改。</p>
     */
    public $TaskSubmitApproval;

    /**
     * @var ResourcePoolInfo <p>资源池信息</p>
     */
    public $ResourcePoolInfo;

    /**
     * @var array <p>项目管理员</p>
     */
    public $ProjectManagers;

    /**
     * @var boolean <p>调度任务严格模式</p>
     */
    public $TaskStrictMode;

    /**
     * @var string <p>以后新增选项可以直接通过前端的json格式写入去实现</p>
     */
    public $ExtraOptions;

    /**
     * @var string <p>项目类型，SIMPLE：简单模式 STANDARD：标准模式</p>
     */
    public $Model;

    /**
     * @var array <p>项目负责人</p>
     */
    public $ProjectOwner;

    /**
     * @var string <p>更新类型</p>
     */
    public $ModifyType;

    /**
     * @param string $ProjectId <p>目标修改的项目ID</p>
     * @param string $DisplayName <p>项目显示名称，可以为中文名,需要租户范围内唯一</p>
     * @param string $Description <p>备注</p>
     * @param boolean $TaskSubmitApproval <p>true/false则修改，不带该参数不修改。</p>
     * @param ResourcePoolInfo $ResourcePoolInfo <p>资源池信息</p>
     * @param array $ProjectManagers <p>项目管理员</p>
     * @param boolean $TaskStrictMode <p>调度任务严格模式</p>
     * @param string $ExtraOptions <p>以后新增选项可以直接通过前端的json格式写入去实现</p>
     * @param string $Model <p>项目类型，SIMPLE：简单模式 STANDARD：标准模式</p>
     * @param array $ProjectOwner <p>项目负责人</p>
     * @param string $ModifyType <p>更新类型</p>
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }
    }
}
