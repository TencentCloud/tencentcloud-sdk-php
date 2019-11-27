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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getTransId() 获取任务所关联的TcaplusDB内部事务ID
 * @method void setTransId(string $TransId) 设置任务所关联的TcaplusDB内部事务ID
 * @method string getApplicationId() 获取任务所属应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置任务所属应用实例ID
 * @method string getAppName() 获取任务所属应用名称
 * @method void setAppName(string $AppName) 设置任务所属应用名称
 * @method integer getProgress() 获取任务进度
 * @method void setProgress(integer $Progress) 设置任务进度
 * @method string getStartTime() 获取任务创建时间
 * @method void setStartTime(string $StartTime) 设置任务创建时间
 * @method string getUpdateTime() 获取任务最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置任务最后更新时间
 * @method string getOperator() 获取操作者
 * @method void setOperator(string $Operator) 设置操作者
 * @method string getContent() 获取任务详情
 * @method void setContent(string $Content) 设置任务详情
 */

/**
 *任务信息详情
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 任务所关联的TcaplusDB内部事务ID
     */
    public $TransId;

    /**
     * @var string 任务所属应用实例ID
     */
    public $ApplicationId;

    /**
     * @var string 任务所属应用名称
     */
    public $AppName;

    /**
     * @var integer 任务进度
     */
    public $Progress;

    /**
     * @var string 任务创建时间
     */
    public $StartTime;

    /**
     * @var string 任务最后更新时间
     */
    public $UpdateTime;

    /**
     * @var string 操作者
     */
    public $Operator;

    /**
     * @var string 任务详情
     */
    public $Content;
    /**
     * @param string $TaskId 任务ID
     * @param string $TaskType 任务类型
     * @param string $TransId 任务所关联的TcaplusDB内部事务ID
     * @param string $ApplicationId 任务所属应用实例ID
     * @param string $AppName 任务所属应用名称
     * @param integer $Progress 任务进度
     * @param string $StartTime 任务创建时间
     * @param string $UpdateTime 任务最后更新时间
     * @param string $Operator 操作者
     * @param string $Content 任务详情
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TransId",$param) and $param["TransId"] !== null) {
            $this->TransId = $param["TransId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
