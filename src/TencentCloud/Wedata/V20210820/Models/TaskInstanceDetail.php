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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线任务实例详情
 *
 * @method string getTaskRunId() 获取实例id
 * @method void setTaskRunId(string $TaskRunId) 设置实例id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getCurRunDate() 获取实例数据运行时间
 * @method void setCurRunDate(string $CurRunDate) 设置实例数据运行时间
 * @method string getIssueDate() 获取实例实际运行时间
 * @method void setIssueDate(string $IssueDate) 设置实例实际运行时间
 * @method string getInlongTaskId() 获取InLong任务Id
 * @method void setInlongTaskId(string $InlongTaskId) 设置InLong任务Id
 * @method string getExecutorGroupId() 获取执行资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组id
 * @method integer getTaskRunType() 获取任务类型(1 调试运行,2 调度执行)
 * @method void setTaskRunType(integer $TaskRunType) 设置任务类型(1 调试运行,2 调度执行)
 * @method integer getState() 获取任务状态(1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行)
 * @method void setState(integer $State) 设置任务状态(1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行)
 * @method string getStartTime() 获取实例开始运行时间，格式：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置实例开始运行时间，格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取实例结束运行时间，格式：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置实例结束运行时间，格式：yyyy-MM-dd HH:mm:ss
 * @method string getBrokerIp() 获取Broker IP
 * @method void setBrokerIp(string $BrokerIp) 设置Broker IP
 * @method string getPodName() 获取运行实例的EKS Pod名称
 * @method void setPodName(string $PodName) 设置运行实例的EKS Pod名称
 * @method string getNextRunDate() 获取下一个调度周期的数据运行时间
 * @method void setNextRunDate(string $NextRunDate) 设置下一个调度周期的数据运行时间
 * @method integer getCreateUin() 获取创建者的账号Id
 * @method void setCreateUin(integer $CreateUin) 设置创建者的账号Id
 * @method integer getOperatorUin() 获取操作者的账号Id
 * @method void setOperatorUin(integer $OperatorUin) 设置操作者的账号Id
 * @method integer getOwnerUin() 获取拥有者的账号Id
 * @method void setOwnerUin(integer $OwnerUin) 设置拥有者的账号Id
 * @method integer getAppId() 获取App Id
 * @method void setAppId(integer $AppId) 设置App Id
 * @method string getProjectId() 获取WeData项目id
 * @method void setProjectId(string $ProjectId) 设置WeData项目id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 */
class TaskInstanceDetail extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $TaskRunId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 实例数据运行时间
     */
    public $CurRunDate;

    /**
     * @var string 实例实际运行时间
     */
    public $IssueDate;

    /**
     * @var string InLong任务Id
     */
    public $InlongTaskId;

    /**
     * @var string 执行资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var integer 任务类型(1 调试运行,2 调度执行)
     */
    public $TaskRunType;

    /**
     * @var integer 任务状态(1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行)
     */
    public $State;

    /**
     * @var string 实例开始运行时间，格式：yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 实例结束运行时间，格式：yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string Broker IP
     */
    public $BrokerIp;

    /**
     * @var string 运行实例的EKS Pod名称
     */
    public $PodName;

    /**
     * @var string 下一个调度周期的数据运行时间
     */
    public $NextRunDate;

    /**
     * @var integer 创建者的账号Id
     */
    public $CreateUin;

    /**
     * @var integer 操作者的账号Id
     */
    public $OperatorUin;

    /**
     * @var integer 拥有者的账号Id
     */
    public $OwnerUin;

    /**
     * @var integer App Id
     */
    public $AppId;

    /**
     * @var string WeData项目id
     */
    public $ProjectId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @param string $TaskRunId 实例id
     * @param string $TaskId 任务id
     * @param string $CurRunDate 实例数据运行时间
     * @param string $IssueDate 实例实际运行时间
     * @param string $InlongTaskId InLong任务Id
     * @param string $ExecutorGroupId 执行资源组id
     * @param integer $TaskRunType 任务类型(1 调试运行,2 调度执行)
     * @param integer $State 任务状态(1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行)
     * @param string $StartTime 实例开始运行时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 实例结束运行时间，格式：yyyy-MM-dd HH:mm:ss
     * @param string $BrokerIp Broker IP
     * @param string $PodName 运行实例的EKS Pod名称
     * @param string $NextRunDate 下一个调度周期的数据运行时间
     * @param integer $CreateUin 创建者的账号Id
     * @param integer $OperatorUin 操作者的账号Id
     * @param integer $OwnerUin 拥有者的账号Id
     * @param integer $AppId App Id
     * @param string $ProjectId WeData项目id
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $TaskName 任务名称
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
        if (array_key_exists("TaskRunId",$param) and $param["TaskRunId"] !== null) {
            $this->TaskRunId = $param["TaskRunId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("InlongTaskId",$param) and $param["InlongTaskId"] !== null) {
            $this->InlongTaskId = $param["InlongTaskId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("TaskRunType",$param) and $param["TaskRunType"] !== null) {
            $this->TaskRunType = $param["TaskRunType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("NextRunDate",$param) and $param["NextRunDate"] !== null) {
            $this->NextRunDate = $param["NextRunDate"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
