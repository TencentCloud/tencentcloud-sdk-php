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
 * 手动工作流触发运行记录实体
 *
 * @method string getTriggerId() 获取运行触发记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置运行触发记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerName() 获取用户提交运行时配置的运行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerName(string $TriggerName) 设置用户提交运行时配置的运行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取用户提交运行的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置用户提交运行的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatetimeList() 获取数据时间列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatetimeList(array $DatetimeList) 设置数据时间列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCnt() 获取任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCnt(integer $TaskCnt) 设置任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCnt() 获取实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCnt(integer $InstanceCnt) 设置实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishedInstanceCnt() 获取已完成的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedInstanceCnt(integer $FinishedInstanceCnt) 设置已完成的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessInstanceCnt() 获取成功的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessInstanceCnt(integer $SuccessInstanceCnt) 设置成功的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取记录运行状态
 INIT, RUNNING, FINISHED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置记录运行状态
 INIT, RUNNING, FINISHED
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerParams() 获取用户提交运行时的入参，主要用于前端反显和记录原始提交信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerParams(string $TriggerParams) 设置用户提交运行时的入参，主要用于前端反显和记录原始提交信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户展示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取数据实例时间的时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置数据实例时间的时区
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManualTriggerRecordOpsDto extends AbstractModel
{
    /**
     * @var string 运行触发记录ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string 用户提交运行时配置的运行名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerName;

    /**
     * @var string 用户提交运行的备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array 数据时间列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatetimeList;

    /**
     * @var integer 任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCnt;

    /**
     * @var integer 实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCnt;

    /**
     * @var integer 已完成的实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedInstanceCnt;

    /**
     * @var integer 成功的实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessInstanceCnt;

    /**
     * @var string 记录运行状态
 INIT, RUNNING, FINISHED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 用户提交运行时的入参，主要用于前端反显和记录原始提交信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerParams;

    /**
     * @var string 用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 用户展示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 数据实例时间的时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @param string $TriggerId 运行触发记录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerName 用户提交运行时配置的运行名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 用户提交运行的备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatetimeList 数据时间列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCnt 任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCnt 实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishedInstanceCnt 已完成的实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessInstanceCnt 成功的实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 记录运行状态
 INIT, RUNNING, FINISHED
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerParams 用户提交运行时的入参，主要用于前端反显和记录原始提交信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 用户主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户展示名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone 数据实例时间的时区
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
    }
}
