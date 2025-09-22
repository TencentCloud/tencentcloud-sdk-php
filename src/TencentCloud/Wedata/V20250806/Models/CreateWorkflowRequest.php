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
 * CreateWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getParentFolderPath() 获取所属文件夹路径
 * @method void setParentFolderPath(string $ParentFolderPath) 设置所属文件夹路径
 * @method string getWorkflowType() 获取工作流类型,取值示例：cycle 周期工作流；manual 手动工作流，默认传入cycle
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型,取值示例：cycle 周期工作流；manual 手动工作流，默认传入cycle
 * @method string getWorkflowDesc() 获取工作流描述
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
 * @method string getOwnerUin() 获取工作流负责人ID
 * @method void setOwnerUin(string $OwnerUin) 设置工作流负责人ID
 * @method array getWorkflowParams() 获取工作流参数
 * @method void setWorkflowParams(array $WorkflowParams) 设置工作流参数
 * @method WorkflowSchedulerConfigurationInfo getWorkflowSchedulerConfiguration() 获取统一调度信息
 * @method void setWorkflowSchedulerConfiguration(WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration) 设置统一调度信息
 * @method string getBundleId() 获取BundleId项
 * @method void setBundleId(string $BundleId) 设置BundleId项
 * @method string getBundleInfo() 获取Bundle信息
 * @method void setBundleInfo(string $BundleInfo) 设置Bundle信息
 */
class CreateWorkflowRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 所属文件夹路径
     */
    public $ParentFolderPath;

    /**
     * @var string 工作流类型,取值示例：cycle 周期工作流；manual 手动工作流，默认传入cycle
     */
    public $WorkflowType;

    /**
     * @var string 工作流描述
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流负责人ID
     */
    public $OwnerUin;

    /**
     * @var array 工作流参数
     */
    public $WorkflowParams;

    /**
     * @var WorkflowSchedulerConfigurationInfo 统一调度信息
     */
    public $WorkflowSchedulerConfiguration;

    /**
     * @var string BundleId项
     */
    public $BundleId;

    /**
     * @var string Bundle信息
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowName 工作流名称
     * @param string $ParentFolderPath 所属文件夹路径
     * @param string $WorkflowType 工作流类型,取值示例：cycle 周期工作流；manual 手动工作流，默认传入cycle
     * @param string $WorkflowDesc 工作流描述
     * @param string $OwnerUin 工作流负责人ID
     * @param array $WorkflowParams 工作流参数
     * @param WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration 统一调度信息
     * @param string $BundleId BundleId项
     * @param string $BundleInfo Bundle信息
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("WorkflowSchedulerConfiguration",$param) and $param["WorkflowSchedulerConfiguration"] !== null) {
            $this->WorkflowSchedulerConfiguration = new WorkflowSchedulerConfigurationInfo();
            $this->WorkflowSchedulerConfiguration->deserialize($param["WorkflowSchedulerConfiguration"]);
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
