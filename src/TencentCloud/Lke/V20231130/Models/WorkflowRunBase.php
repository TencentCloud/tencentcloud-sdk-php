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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行实例的基本信息
 *
 * @method integer getRunEnv() 获取运行环境。0: 测试环境； 1: 正式环境
 * @method void setRunEnv(integer $RunEnv) 设置运行环境。0: 测试环境； 1: 正式环境
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method string getWorkflowRunId() 获取工作流运行实例的ID
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行实例的ID
 * @method string getWorkflowId() 获取所属工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置所属工作流ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getState() 获取运行状态。0: 排队中；1: 运行中；2: 运行成功；3: 运行失败； 4: 已取消
 * @method void setState(integer $State) 设置运行状态。0: 排队中；1: 运行中；2: 运行成功；3: 运行失败； 4: 已取消
 * @method string getFailMessage() 获取错误信息
 * @method void setFailMessage(string $FailMessage) 设置错误信息
 * @method integer getTotalTokens() 获取消耗的token总数
 * @method void setTotalTokens(integer $TotalTokens) 设置消耗的token总数
 * @method string getCreateTime() 获取创建时间（毫秒时间戳）
 * @method void setCreateTime(string $CreateTime) 设置创建时间（毫秒时间戳）
 * @method string getStartTime() 获取开始时间（毫秒时间戳）
 * @method void setStartTime(string $StartTime) 设置开始时间（毫秒时间戳）
 * @method string getEndTime() 获取结束时间（毫秒时间戳）
 * @method void setEndTime(string $EndTime) 设置结束时间（毫秒时间戳）
 */
class WorkflowRunBase extends AbstractModel
{
    /**
     * @var integer 运行环境。0: 测试环境； 1: 正式环境
     */
    public $RunEnv;

    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var string 工作流运行实例的ID
     */
    public $WorkflowRunId;

    /**
     * @var string 所属工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 运行状态。0: 排队中；1: 运行中；2: 运行成功；3: 运行失败； 4: 已取消
     */
    public $State;

    /**
     * @var string 错误信息
     */
    public $FailMessage;

    /**
     * @var integer 消耗的token总数
     */
    public $TotalTokens;

    /**
     * @var string 创建时间（毫秒时间戳）
     */
    public $CreateTime;

    /**
     * @var string 开始时间（毫秒时间戳）
     */
    public $StartTime;

    /**
     * @var string 结束时间（毫秒时间戳）
     */
    public $EndTime;

    /**
     * @param integer $RunEnv 运行环境。0: 测试环境； 1: 正式环境
     * @param string $AppBizId 应用ID
     * @param string $WorkflowRunId 工作流运行实例的ID
     * @param string $WorkflowId 所属工作流ID
     * @param string $Name 名称
     * @param integer $State 运行状态。0: 排队中；1: 运行中；2: 运行成功；3: 运行失败； 4: 已取消
     * @param string $FailMessage 错误信息
     * @param integer $TotalTokens 消耗的token总数
     * @param string $CreateTime 创建时间（毫秒时间戳）
     * @param string $StartTime 开始时间（毫秒时间戳）
     * @param string $EndTime 结束时间（毫秒时间戳）
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
        if (array_key_exists("RunEnv",$param) and $param["RunEnv"] !== null) {
            $this->RunEnv = $param["RunEnv"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
