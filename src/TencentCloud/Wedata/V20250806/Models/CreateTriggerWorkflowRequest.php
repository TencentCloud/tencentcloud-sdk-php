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
 * CreateTriggerWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getWorkflowName() 获取<p>工作流名称</p>
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
 * @method string getParentFolderPath() 获取<p>所属文件夹路径</p>
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>所属文件夹路径</p>
 * @method string getWorkflowDesc() 获取<p>工作流描述</p>
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置<p>工作流描述</p>
 * @method string getOwnerUin() 获取<p>工作流负责人ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>工作流负责人ID</p>
 * @method array getWorkflowParams() 获取<p>工作流参数</p>
 * @method void setWorkflowParams(array $WorkflowParams) 设置<p>工作流参数</p>
 * @method array getTriggerWorkflowSchedulerConfigurations() 获取<p>统一调度信息</p>
 * @method void setTriggerWorkflowSchedulerConfigurations(array $TriggerWorkflowSchedulerConfigurations) 设置<p>统一调度信息</p>
 * @method string getBundleId() 获取<p>BundleId项</p>
 * @method void setBundleId(string $BundleId) 设置<p>BundleId项</p>
 * @method string getBundleInfo() 获取<p>Bundle信息</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>Bundle信息</p>
 * @method array getGeneralTaskParams() 获取<p>通用参数配置</p>
 * @method void setGeneralTaskParams(array $GeneralTaskParams) 设置<p>通用参数配置</p>
 * @method WorkflowRunConfig getTriggerWorkflowRunConfiguration() 获取<p>工作流调度运行配置</p>
 * @method void setTriggerWorkflowRunConfiguration(WorkflowRunConfig $TriggerWorkflowRunConfiguration) 设置<p>工作流调度运行配置</p>
 */
class CreateTriggerWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>工作流名称</p>
     */
    public $WorkflowName;

    /**
     * @var string <p>所属文件夹路径</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>工作流描述</p>
     */
    public $WorkflowDesc;

    /**
     * @var string <p>工作流负责人ID</p>
     */
    public $OwnerUin;

    /**
     * @var array <p>工作流参数</p>
     */
    public $WorkflowParams;

    /**
     * @var array <p>统一调度信息</p>
     */
    public $TriggerWorkflowSchedulerConfigurations;

    /**
     * @var string <p>BundleId项</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bundle信息</p>
     */
    public $BundleInfo;

    /**
     * @var array <p>通用参数配置</p>
     */
    public $GeneralTaskParams;

    /**
     * @var WorkflowRunConfig <p>工作流调度运行配置</p>
     */
    public $TriggerWorkflowRunConfiguration;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $WorkflowName <p>工作流名称</p>
     * @param string $ParentFolderPath <p>所属文件夹路径</p>
     * @param string $WorkflowDesc <p>工作流描述</p>
     * @param string $OwnerUin <p>工作流负责人ID</p>
     * @param array $WorkflowParams <p>工作流参数</p>
     * @param array $TriggerWorkflowSchedulerConfigurations <p>统一调度信息</p>
     * @param string $BundleId <p>BundleId项</p>
     * @param string $BundleInfo <p>Bundle信息</p>
     * @param array $GeneralTaskParams <p>通用参数配置</p>
     * @param WorkflowRunConfig $TriggerWorkflowRunConfiguration <p>工作流调度运行配置</p>
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

        if (array_key_exists("TriggerWorkflowSchedulerConfigurations",$param) and $param["TriggerWorkflowSchedulerConfigurations"] !== null) {
            $this->TriggerWorkflowSchedulerConfigurations = [];
            foreach ($param["TriggerWorkflowSchedulerConfigurations"] as $key => $value){
                $obj = new WorkflowTriggerConfig();
                $obj->deserialize($value);
                array_push($this->TriggerWorkflowSchedulerConfigurations, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new WorkflowGeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }

        if (array_key_exists("TriggerWorkflowRunConfiguration",$param) and $param["TriggerWorkflowRunConfiguration"] !== null) {
            $this->TriggerWorkflowRunConfiguration = new WorkflowRunConfig();
            $this->TriggerWorkflowRunConfiguration->deserialize($param["TriggerWorkflowRunConfiguration"]);
        }
    }
}
