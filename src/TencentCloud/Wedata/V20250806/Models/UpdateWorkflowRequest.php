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
 * UpdateWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getOwnerUin() 获取责任人ID
 * @method void setOwnerUin(string $OwnerUin) 设置责任人ID
 * @method string getWorkflowDesc() 获取备注
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置备注
 * @method array getWorkflowParams() 获取工作流参数列表
 * @method void setWorkflowParams(array $WorkflowParams) 设置工作流参数列表
 * @method WorkflowSchedulerConfigurationInfo getWorkflowSchedulerConfiguration() 获取统一调度参数
 * @method void setWorkflowSchedulerConfiguration(WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration) 设置统一调度参数
 * @method string getBundleId() 获取BundleId项
 * @method void setBundleId(string $BundleId) 设置BundleId项
 * @method string getBundleInfo() 获取Bundle信息
 * @method void setBundleInfo(string $BundleInfo) 设置Bundle信息
 */
class UpdateWorkflowRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 责任人ID
     */
    public $OwnerUin;

    /**
     * @var string 备注
     */
    public $WorkflowDesc;

    /**
     * @var array 工作流参数列表
     */
    public $WorkflowParams;

    /**
     * @var WorkflowSchedulerConfigurationInfo 统一调度参数
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
     * @param string $WorkflowId 工作流ID
     * @param string $WorkflowName 工作流名称
     * @param string $OwnerUin 责任人ID
     * @param string $WorkflowDesc 备注
     * @param array $WorkflowParams 工作流参数列表
     * @param WorkflowSchedulerConfigurationInfo $WorkflowSchedulerConfiguration 统一调度参数
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
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
