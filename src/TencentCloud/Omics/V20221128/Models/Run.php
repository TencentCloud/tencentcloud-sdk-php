<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getRunUuid() 获取任务UUID。
 * @method void setRunUuid(string $RunUuid) 设置任务UUID。
 * @method string getProjectId() 获取项目ID。
 * @method void setProjectId(string $ProjectId) 设置项目ID。
 * @method string getApplicationId() 获取应用ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。
 * @method string getRunGroupId() 获取任务批次ID。
 * @method void setRunGroupId(string $RunGroupId) 设置任务批次ID。
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getUserDefinedId() 获取用户定义ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefinedId(string $UserDefinedId) 设置用户定义ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableRowUuid() 获取表格行UUID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableRowUuid(string $TableRowUuid) 设置表格行UUID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态。
 * @method void setStatus(string $Status) 设置任务状态。
 * @method string getInput() 获取任务输入。
 * @method void setInput(string $Input) 设置任务输入。
 * @method RunOption getOption() 获取运行选项。
 * @method void setOption(RunOption $Option) 设置运行选项。
 * @method ExecutionTime getExecutionTime() 获取执行时间。
 * @method void setExecutionTime(ExecutionTime $ExecutionTime) 设置执行时间。
 * @method string getErrorMessage() 获取错误信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class Run extends AbstractModel
{
    /**
     * @var string 任务UUID。
     */
    public $RunUuid;

    /**
     * @var string 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 应用ID。
     */
    public $ApplicationId;

    /**
     * @var string 任务批次ID。
     */
    public $RunGroupId;

    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 用户定义ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefinedId;

    /**
     * @var string 表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表格行UUID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableRowUuid;

    /**
     * @var string 任务状态。
     */
    public $Status;

    /**
     * @var string 任务输入。
     */
    public $Input;

    /**
     * @var RunOption 运行选项。
     */
    public $Option;

    /**
     * @var ExecutionTime 执行时间。
     */
    public $ExecutionTime;

    /**
     * @var string 错误信息。
     */
    public $ErrorMessage;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $RunUuid 任务UUID。
     * @param string $ProjectId 项目ID。
     * @param string $ApplicationId 应用ID。
     * @param string $RunGroupId 任务批次ID。
     * @param string $EnvironmentId 环境ID。
     * @param string $UserDefinedId 用户定义ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableRowUuid 表格行UUID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态。
     * @param string $Input 任务输入。
     * @param RunOption $Option 运行选项。
     * @param ExecutionTime $ExecutionTime 执行时间。
     * @param string $ErrorMessage 错误信息。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("UserDefinedId",$param) and $param["UserDefinedId"] !== null) {
            $this->UserDefinedId = $param["UserDefinedId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableRowUuid",$param) and $param["TableRowUuid"] !== null) {
            $this->TableRowUuid = $param["TableRowUuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = new ExecutionTime();
            $this->ExecutionTime->deserialize($param["ExecutionTime"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
