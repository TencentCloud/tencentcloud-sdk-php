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
 * 基线实例
 *
 * @method integer getId() 获取任务实例变更记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置任务实例变更记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBaselineInstanceId() 获取基线实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineInstanceId(integer $BaselineInstanceId) 设置基线实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineType() 获取基线周期, D: 天 / H: 小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineType(string $BaselineType) 设置基线周期, D: 天 / H: 小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineDataTime() 获取数据时间/基线实例应该应该生成的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineDataTime(string $BaselineDataTime) 设置数据时间/基线实例应该应该生成的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamInstanceIds() 获取上游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamInstanceIds(string $UpstreamInstanceIds) 设置上游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownstreamInstanceIds() 获取下游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamInstanceIds(string $DownstreamInstanceIds) 设置下游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPromiseTask() 获取是否是保障任务的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPromiseTask(boolean $IsPromiseTask) 设置是否是保障任务的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取任务实例的数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置任务实例的数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInCriticalPath() 获取是否在关键路径上，1表示在，0表示不在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCriticalPath(integer $InCriticalPath) 设置是否在关键路径上，1表示在，0表示不在
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInFirstLevel() 获取是否在DAG首层
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInFirstLevel(boolean $InFirstLevel) 设置是否在DAG首层
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedCostTime() 获取实例预计耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedCostTime(integer $EstimatedCostTime) 设置实例预计耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActualCostTime() 获取实例实际耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActualCostTime(integer $ActualCostTime) 设置实例实际耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestStartTime() 获取预计最晚开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestStartTime(string $LatestStartTime) 设置预计最晚开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActualStartTime() 获取实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActualStartTime(string $ActualStartTime) 设置实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEstimatedEndTime() 获取预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedEndTime(string $EstimatedEndTime) 设置预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestEndTime() 获取最晚完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestEndTime(string $LatestEndTime) 设置最晚完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActualEndTime() 获取实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActualEndTime(string $ActualEndTime) 设置实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskInstanceStatus() 获取实例运行状态
WAITINT_TO_RUN:等待运行 / RUNNING: 正在运行 / COMPLETED: 执行成功 / FAILED: 执行失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInstanceStatus(string $TaskInstanceStatus) 设置实例运行状态
WAITINT_TO_RUN:等待运行 / RUNNING: 正在运行 / COMPLETED: 执行成功 / FAILED: 执行失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardKey() 获取该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardKey(string $ShardKey) 设置该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCriticalDependency() 获取关键路径依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCriticalDependency(string $CriticalDependency) 设置关键路径依赖
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineTaskInstanceDto extends AbstractModel
{
    /**
     * @var integer 任务实例变更记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 基线实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineInstanceId;

    /**
     * @var string 基线周期, D: 天 / H: 小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineType;

    /**
     * @var string 数据时间/基线实例应该应该生成的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineDataTime;

    /**
     * @var string 上游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamInstanceIds;

    /**
     * @var string 下游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamInstanceIds;

    /**
     * @var boolean 是否是保障任务的实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPromiseTask;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务实例的数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 是否在关键路径上，1表示在，0表示不在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCriticalPath;

    /**
     * @var boolean 是否在DAG首层
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InFirstLevel;

    /**
     * @var integer 实例预计耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedCostTime;

    /**
     * @var integer 实例实际耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActualCostTime;

    /**
     * @var string 预计最晚开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestStartTime;

    /**
     * @var string 实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActualStartTime;

    /**
     * @var string 预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedEndTime;

    /**
     * @var string 最晚完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestEndTime;

    /**
     * @var string 实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActualEndTime;

    /**
     * @var string 实例运行状态
WAITINT_TO_RUN:等待运行 / RUNNING: 正在运行 / COMPLETED: 执行成功 / FAILED: 执行失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInstanceStatus;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardKey;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 关键路径依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CriticalDependency;

    /**
     * @param integer $Id 任务实例变更记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BaselineInstanceId 基线实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineType 基线周期, D: 天 / H: 小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineDataTime 数据时间/基线实例应该应该生成的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamInstanceIds 上游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownstreamInstanceIds 下游实例id,多个实例用,分开.格式为taskId_curRunDate
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPromiseTask 是否是保障任务的实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 任务实例的数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InCriticalPath 是否在关键路径上，1表示在，0表示不在
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InFirstLevel 是否在DAG首层
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedCostTime 实例预计耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActualCostTime 实例实际耗时/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestStartTime 预计最晚开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActualStartTime 实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EstimatedEndTime 预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestEndTime 最晚完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActualEndTime 实际完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskInstanceStatus 实例运行状态
WAITINT_TO_RUN:等待运行 / RUNNING: 正在运行 / COMPLETED: 执行成功 / FAILED: 执行失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardKey 该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CriticalDependency 关键路径依赖
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BaselineInstanceId",$param) and $param["BaselineInstanceId"] !== null) {
            $this->BaselineInstanceId = $param["BaselineInstanceId"];
        }

        if (array_key_exists("BaselineType",$param) and $param["BaselineType"] !== null) {
            $this->BaselineType = $param["BaselineType"];
        }

        if (array_key_exists("BaselineDataTime",$param) and $param["BaselineDataTime"] !== null) {
            $this->BaselineDataTime = $param["BaselineDataTime"];
        }

        if (array_key_exists("UpstreamInstanceIds",$param) and $param["UpstreamInstanceIds"] !== null) {
            $this->UpstreamInstanceIds = $param["UpstreamInstanceIds"];
        }

        if (array_key_exists("DownstreamInstanceIds",$param) and $param["DownstreamInstanceIds"] !== null) {
            $this->DownstreamInstanceIds = $param["DownstreamInstanceIds"];
        }

        if (array_key_exists("IsPromiseTask",$param) and $param["IsPromiseTask"] !== null) {
            $this->IsPromiseTask = $param["IsPromiseTask"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("InCriticalPath",$param) and $param["InCriticalPath"] !== null) {
            $this->InCriticalPath = $param["InCriticalPath"];
        }

        if (array_key_exists("InFirstLevel",$param) and $param["InFirstLevel"] !== null) {
            $this->InFirstLevel = $param["InFirstLevel"];
        }

        if (array_key_exists("EstimatedCostTime",$param) and $param["EstimatedCostTime"] !== null) {
            $this->EstimatedCostTime = $param["EstimatedCostTime"];
        }

        if (array_key_exists("ActualCostTime",$param) and $param["ActualCostTime"] !== null) {
            $this->ActualCostTime = $param["ActualCostTime"];
        }

        if (array_key_exists("LatestStartTime",$param) and $param["LatestStartTime"] !== null) {
            $this->LatestStartTime = $param["LatestStartTime"];
        }

        if (array_key_exists("ActualStartTime",$param) and $param["ActualStartTime"] !== null) {
            $this->ActualStartTime = $param["ActualStartTime"];
        }

        if (array_key_exists("EstimatedEndTime",$param) and $param["EstimatedEndTime"] !== null) {
            $this->EstimatedEndTime = $param["EstimatedEndTime"];
        }

        if (array_key_exists("LatestEndTime",$param) and $param["LatestEndTime"] !== null) {
            $this->LatestEndTime = $param["LatestEndTime"];
        }

        if (array_key_exists("ActualEndTime",$param) and $param["ActualEndTime"] !== null) {
            $this->ActualEndTime = $param["ActualEndTime"];
        }

        if (array_key_exists("TaskInstanceStatus",$param) and $param["TaskInstanceStatus"] !== null) {
            $this->TaskInstanceStatus = $param["TaskInstanceStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ShardKey",$param) and $param["ShardKey"] !== null) {
            $this->ShardKey = $param["ShardKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CriticalDependency",$param) and $param["CriticalDependency"] !== null) {
            $this->CriticalDependency = $param["CriticalDependency"];
        }
    }
}
