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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务。
 *
 * @method string getRunGroupId() 获取任务批次ID。
 * @method void setRunGroupId(string $RunGroupId) 设置任务批次ID。
 * @method string getProjectId() 获取项目ID。
 * @method void setProjectId(string $ProjectId) 设置项目ID。
 * @method string getProjectName() 获取项目名称。
 * @method void setProjectName(string $ProjectName) 设置项目名称。
 * @method string getApplicationId() 获取应用ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。
 * @method string getApplicationName() 获取应用名称。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称。
 * @method string getApplicationType() 获取应用类型。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型。
 * @method ApplicationVersion getApplicationVersion() 获取应用版本。
 * @method void setApplicationVersion(ApplicationVersion $ApplicationVersion) 设置应用版本。
 * @method string getAccessMode() 获取应用访问类型：
- PRIVATE 私有应用
- PUBLIC 公共应用
 * @method void setAccessMode(string $AccessMode) 设置应用访问类型：
- PRIVATE 私有应用
- PUBLIC 公共应用
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getEnvironmentName() 获取环境名称。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称。
 * @method string getTableId() 获取表格ID，单例运行为空。
 * @method void setTableId(string $TableId) 设置表格ID，单例运行为空。
 * @method string getName() 获取任务名称。
 * @method void setName(string $Name) 设置任务名称。
 * @method string getDescription() 获取任务描述。
 * @method void setDescription(string $Description) 设置任务描述。
 * @method string getStatus() 获取任务状态。
 * @method void setStatus(string $Status) 设置任务状态。
 * @method string getType() 获取任务批次类型 ：
- WDL
- NEXTFLOW
 * @method void setType(string $Type) 设置任务批次类型 ：
- WDL
- NEXTFLOW
 * @method string getWorkDir() 获取工作目录。
 * @method void setWorkDir(string $WorkDir) 设置工作目录。
 * @method string getInput() 获取任务输入。
 * @method void setInput(string $Input) 设置任务输入。
 * @method string getInputType() 获取任务输入类型：
- JSON: 导入JSON
- MANUAL: 手动输入
- COS: COS文件
 * @method void setInputType(string $InputType) 设置任务输入类型：
- JSON: 导入JSON
- MANUAL: 手动输入
- COS: COS文件
 * @method string getInputCosUri() 获取输入COS地址。
 * @method void setInputCosUri(string $InputCosUri) 设置输入COS地址。
 * @method string getInputTemplateId() 获取输入模板ID。
 * @method void setInputTemplateId(string $InputTemplateId) 设置输入模板ID。
 * @method RunOption getOption() 获取WDL运行选项。
 * @method void setOption(RunOption $Option) 设置WDL运行选项。
 * @method NFOption getNFOption() 获取Nextflow运行选项。
 * @method void setNFOption(NFOption $NFOption) 设置Nextflow运行选项。
 * @method array getVolumes() 获取使用的缓存卷。
 * @method void setVolumes(array $Volumes) 设置使用的缓存卷。
 * @method integer getTotalRun() 获取任务总数量。
 * @method void setTotalRun(integer $TotalRun) 设置任务总数量。
 * @method array getRunStatusCounts() 获取各状态任务的数量。
 * @method void setRunStatusCounts(array $RunStatusCounts) 设置各状态任务的数量。
 * @method ExecutionTime getExecutionTime() 获取执行时间。
 * @method void setExecutionTime(ExecutionTime $ExecutionTime) 设置执行时间。
 * @method string getErrorMessage() 获取错误信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。
 * @method RunGroupNotification getNotification() 获取任务批次通知。
 * @method void setNotification(RunGroupNotification $Notification) 设置任务批次通知。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method string getCreator() 获取创建者。
 * @method void setCreator(string $Creator) 设置创建者。
 * @method string getCreatorId() 获取创建者ID。
 * @method void setCreatorId(string $CreatorId) 设置创建者ID。
 * @method string getResultNotify() 获取运行结果通知方式。
 * @method void setResultNotify(string $ResultNotify) 设置运行结果通知方式。
 */
class RunGroup extends AbstractModel
{
    /**
     * @var string 任务批次ID。
     */
    public $RunGroupId;

    /**
     * @var string 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 项目名称。
     */
    public $ProjectName;

    /**
     * @var string 应用ID。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称。
     */
    public $ApplicationName;

    /**
     * @var string 应用类型。
     */
    public $ApplicationType;

    /**
     * @var ApplicationVersion 应用版本。
     */
    public $ApplicationVersion;

    /**
     * @var string 应用访问类型：
- PRIVATE 私有应用
- PUBLIC 公共应用
     */
    public $AccessMode;

    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 环境名称。
     */
    public $EnvironmentName;

    /**
     * @var string 表格ID，单例运行为空。
     */
    public $TableId;

    /**
     * @var string 任务名称。
     */
    public $Name;

    /**
     * @var string 任务描述。
     */
    public $Description;

    /**
     * @var string 任务状态。
     */
    public $Status;

    /**
     * @var string 任务批次类型 ：
- WDL
- NEXTFLOW
     */
    public $Type;

    /**
     * @var string 工作目录。
     */
    public $WorkDir;

    /**
     * @var string 任务输入。
     */
    public $Input;

    /**
     * @var string 任务输入类型：
- JSON: 导入JSON
- MANUAL: 手动输入
- COS: COS文件
     */
    public $InputType;

    /**
     * @var string 输入COS地址。
     */
    public $InputCosUri;

    /**
     * @var string 输入模板ID。
     */
    public $InputTemplateId;

    /**
     * @var RunOption WDL运行选项。
     */
    public $Option;

    /**
     * @var NFOption Nextflow运行选项。
     */
    public $NFOption;

    /**
     * @var array 使用的缓存卷。
     */
    public $Volumes;

    /**
     * @var integer 任务总数量。
     */
    public $TotalRun;

    /**
     * @var array 各状态任务的数量。
     */
    public $RunStatusCounts;

    /**
     * @var ExecutionTime 执行时间。
     */
    public $ExecutionTime;

    /**
     * @var string 错误信息。
     */
    public $ErrorMessage;

    /**
     * @var RunGroupNotification 任务批次通知。
     */
    public $Notification;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 创建者。
     */
    public $Creator;

    /**
     * @var string 创建者ID。
     */
    public $CreatorId;

    /**
     * @var string 运行结果通知方式。
     */
    public $ResultNotify;

    /**
     * @param string $RunGroupId 任务批次ID。
     * @param string $ProjectId 项目ID。
     * @param string $ProjectName 项目名称。
     * @param string $ApplicationId 应用ID。
     * @param string $ApplicationName 应用名称。
     * @param string $ApplicationType 应用类型。
     * @param ApplicationVersion $ApplicationVersion 应用版本。
     * @param string $AccessMode 应用访问类型：
- PRIVATE 私有应用
- PUBLIC 公共应用
     * @param string $EnvironmentId 环境ID。
     * @param string $EnvironmentName 环境名称。
     * @param string $TableId 表格ID，单例运行为空。
     * @param string $Name 任务名称。
     * @param string $Description 任务描述。
     * @param string $Status 任务状态。
     * @param string $Type 任务批次类型 ：
- WDL
- NEXTFLOW
     * @param string $WorkDir 工作目录。
     * @param string $Input 任务输入。
     * @param string $InputType 任务输入类型：
- JSON: 导入JSON
- MANUAL: 手动输入
- COS: COS文件
     * @param string $InputCosUri 输入COS地址。
     * @param string $InputTemplateId 输入模板ID。
     * @param RunOption $Option WDL运行选项。
     * @param NFOption $NFOption Nextflow运行选项。
     * @param array $Volumes 使用的缓存卷。
     * @param integer $TotalRun 任务总数量。
     * @param array $RunStatusCounts 各状态任务的数量。
     * @param ExecutionTime $ExecutionTime 执行时间。
     * @param string $ErrorMessage 错误信息。
     * @param RunGroupNotification $Notification 任务批次通知。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
     * @param string $Creator 创建者。
     * @param string $CreatorId 创建者ID。
     * @param string $ResultNotify 运行结果通知方式。
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
        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ApplicationVersion",$param) and $param["ApplicationVersion"] !== null) {
            $this->ApplicationVersion = new ApplicationVersion();
            $this->ApplicationVersion->deserialize($param["ApplicationVersion"]);
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputCosUri",$param) and $param["InputCosUri"] !== null) {
            $this->InputCosUri = $param["InputCosUri"];
        }

        if (array_key_exists("InputTemplateId",$param) and $param["InputTemplateId"] !== null) {
            $this->InputTemplateId = $param["InputTemplateId"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }

        if (array_key_exists("Volumes",$param) and $param["Volumes"] !== null) {
            $this->Volumes = [];
            foreach ($param["Volumes"] as $key => $value){
                $obj = new VolumeInfo();
                $obj->deserialize($value);
                array_push($this->Volumes, $obj);
            }
        }

        if (array_key_exists("TotalRun",$param) and $param["TotalRun"] !== null) {
            $this->TotalRun = $param["TotalRun"];
        }

        if (array_key_exists("RunStatusCounts",$param) and $param["RunStatusCounts"] !== null) {
            $this->RunStatusCounts = [];
            foreach ($param["RunStatusCounts"] as $key => $value){
                $obj = new RunStatusCount();
                $obj->deserialize($value);
                array_push($this->RunStatusCounts, $obj);
            }
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = new ExecutionTime();
            $this->ExecutionTime->deserialize($param["ExecutionTime"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = new RunGroupNotification();
            $this->Notification->deserialize($param["Notification"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("ResultNotify",$param) and $param["ResultNotify"] !== null) {
            $this->ResultNotify = $param["ResultNotify"];
        }
    }
}
