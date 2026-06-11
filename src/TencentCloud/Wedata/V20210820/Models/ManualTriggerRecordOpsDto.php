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
 * 手动工作流触发运行记录实体
 *
 * @method string getTriggerId() 获取<p>运行触发记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置<p>运行触发记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerName() 获取<p>用户提交运行时配置的运行名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerName(string $TriggerName) 设置<p>用户提交运行时配置的运行名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>用户提交运行的备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>用户提交运行的备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatetimeList() 获取<p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatetimeList(array $DatetimeList) 设置<p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCnt() 获取<p>任务数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCnt(integer $TaskCnt) 设置<p>任务数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCnt() 获取<p>实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCnt(integer $InstanceCnt) 设置<p>实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishedInstanceCnt() 获取<p>已完成的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedInstanceCnt(integer $FinishedInstanceCnt) 设置<p>已完成的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessInstanceCnt() 获取<p>成功的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessInstanceCnt(integer $SuccessInstanceCnt) 设置<p>成功的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>记录运行状态<br> INIT, RUNNING, FINISHED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>记录运行状态<br> INIT, RUNNING, FINISHED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerParams() 获取<p>用户提交运行时的入参，主要用于前端反显和记录原始提交信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerParams(string $TriggerParams) 设置<p>用户提交运行时的入参，主要用于前端反显和记录原始提交信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取<p>用户主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>用户主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>用户展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取<p>租户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置<p>租户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>数据实例时间的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>数据实例时间的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeType() 获取<p>时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理</p>
 * @method void setTimeType(string $TimeType) 设置<p>时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理</p>
 * @method string getTriggerSource() 获取<p>触发类型</p><p>枚举值：</p><ul><li>SUB_PROCESS_TRIGGER： 由嵌套工作流 SP 任务触发</li><li>SUB_PROCESS_MAKEUP： 由嵌套工作流 SP 任务补录触发</li><li>MANUAL_RUN_BY_USER： 手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerSource(string $TriggerSource) 设置<p>触发类型</p><p>枚举值：</p><ul><li>SUB_PROCESS_TRIGGER： 由嵌套工作流 SP 任务触发</li><li>SUB_PROCESS_MAKEUP： 由嵌套工作流 SP 任务补录触发</li><li>MANUAL_RUN_BY_USER： 手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerSourceId() 获取<p>触发实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerSourceId(string $TriggerSourceId) 设置<p>触发实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSpTaskId() 获取<p>父嵌套工作流任务 ID。仅 <code>triggerSource</code> 以 <code>SUB_PROCESS_</code> 开头时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSpTaskId(string $ParentSpTaskId) 设置<p>父嵌套工作流任务 ID。仅 <code>triggerSource</code> 以 <code>SUB_PROCESS_</code> 开头时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSpInstanceName() 获取<p>父嵌套工作流任务实例名称（即任务名称）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSpInstanceName(string $ParentSpInstanceName) 设置<p>父嵌套工作流任务实例名称（即任务名称）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSpInstanceDataTime() 获取<p>父嵌套工作流任务实例数据时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSpInstanceDataTime(string $ParentSpInstanceDataTime) 设置<p>父嵌套工作流任务实例数据时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScheduleTimeList() 获取<p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeList(array $ScheduleTimeList) 设置<p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManualTriggerRecordOpsDto extends AbstractModel
{
    /**
     * @var string <p>运行触发记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string <p>用户提交运行时配置的运行名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerName;

    /**
     * @var string <p>用户提交运行的备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array <p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatetimeList;

    /**
     * @var integer <p>任务数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCnt;

    /**
     * @var integer <p>实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCnt;

    /**
     * @var integer <p>已完成的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedInstanceCnt;

    /**
     * @var integer <p>成功的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessInstanceCnt;

    /**
     * @var string <p>记录运行状态<br> INIT, RUNNING, FINISHED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>用户提交运行时的入参，主要用于前端反显和记录原始提交信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerParams;

    /**
     * @var string <p>用户主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string <p>用户展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>租户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>数据实例时间的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理</p>
     */
    public $TimeType;

    /**
     * @var string <p>触发类型</p><p>枚举值：</p><ul><li>SUB_PROCESS_TRIGGER： 由嵌套工作流 SP 任务触发</li><li>SUB_PROCESS_MAKEUP： 由嵌套工作流 SP 任务补录触发</li><li>MANUAL_RUN_BY_USER： 手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerSource;

    /**
     * @var string <p>触发实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerSourceId;

    /**
     * @var string <p>父嵌套工作流任务 ID。仅 <code>triggerSource</code> 以 <code>SUB_PROCESS_</code> 开头时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSpTaskId;

    /**
     * @var string <p>父嵌套工作流任务实例名称（即任务名称）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSpInstanceName;

    /**
     * @var string <p>父嵌套工作流任务实例数据时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSpInstanceDataTime;

    /**
     * @var array <p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeList;

    /**
     * @param string $TriggerId <p>运行触发记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerName <p>用户提交运行时配置的运行名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>用户提交运行的备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatetimeList <p>数据时间列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCnt <p>任务数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCnt <p>实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishedInstanceCnt <p>已完成的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessInstanceCnt <p>成功的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>记录运行状态<br> INIT, RUNNING, FINISHED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerParams <p>用户提交运行时的入参，主要用于前端反显和记录原始提交信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin <p>用户主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>用户展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId <p>租户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>数据实例时间的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeType <p>时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理</p>
     * @param string $TriggerSource <p>触发类型</p><p>枚举值：</p><ul><li>SUB_PROCESS_TRIGGER： 由嵌套工作流 SP 任务触发</li><li>SUB_PROCESS_MAKEUP： 由嵌套工作流 SP 任务补录触发</li><li>MANUAL_RUN_BY_USER： 手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerSourceId <p>触发实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSpTaskId <p>父嵌套工作流任务 ID。仅 <code>triggerSource</code> 以 <code>SUB_PROCESS_</code> 开头时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSpInstanceName <p>父嵌套工作流任务实例名称（即任务名称）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSpInstanceDataTime <p>父嵌套工作流任务实例数据时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScheduleTimeList <p>数据时间列表</p>
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
        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DatetimeList",$param) and $param["DatetimeList"] !== null) {
            $this->DatetimeList = $param["DatetimeList"];
        }

        if (array_key_exists("TaskCnt",$param) and $param["TaskCnt"] !== null) {
            $this->TaskCnt = $param["TaskCnt"];
        }

        if (array_key_exists("InstanceCnt",$param) and $param["InstanceCnt"] !== null) {
            $this->InstanceCnt = $param["InstanceCnt"];
        }

        if (array_key_exists("FinishedInstanceCnt",$param) and $param["FinishedInstanceCnt"] !== null) {
            $this->FinishedInstanceCnt = $param["FinishedInstanceCnt"];
        }

        if (array_key_exists("SuccessInstanceCnt",$param) and $param["SuccessInstanceCnt"] !== null) {
            $this->SuccessInstanceCnt = $param["SuccessInstanceCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TriggerParams",$param) and $param["TriggerParams"] !== null) {
            $this->TriggerParams = $param["TriggerParams"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("TriggerSource",$param) and $param["TriggerSource"] !== null) {
            $this->TriggerSource = $param["TriggerSource"];
        }

        if (array_key_exists("TriggerSourceId",$param) and $param["TriggerSourceId"] !== null) {
            $this->TriggerSourceId = $param["TriggerSourceId"];
        }

        if (array_key_exists("ParentSpTaskId",$param) and $param["ParentSpTaskId"] !== null) {
            $this->ParentSpTaskId = $param["ParentSpTaskId"];
        }

        if (array_key_exists("ParentSpInstanceName",$param) and $param["ParentSpInstanceName"] !== null) {
            $this->ParentSpInstanceName = $param["ParentSpInstanceName"];
        }

        if (array_key_exists("ParentSpInstanceDataTime",$param) and $param["ParentSpInstanceDataTime"] !== null) {
            $this->ParentSpInstanceDataTime = $param["ParentSpInstanceDataTime"];
        }

        if (array_key_exists("ScheduleTimeList",$param) and $param["ScheduleTimeList"] !== null) {
            $this->ScheduleTimeList = $param["ScheduleTimeList"];
        }
    }
}
