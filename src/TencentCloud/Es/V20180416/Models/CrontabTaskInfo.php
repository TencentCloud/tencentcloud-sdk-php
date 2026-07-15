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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * forcemerge任务信息
 *
 * @method integer getTaskId() 获取forcemerge任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置forcemerge任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取集群地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置集群地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(integer $InstanceId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取forcemerge任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置forcemerge任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTime() 获取任务执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTime(string $TaskTime) 设置任务执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTarget() 获取执行forcemerge的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(string $Target) 设置执行forcemerge的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastExecTime() 获取上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastExecTime(string $LastExecTime) 设置上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建任务时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建任务时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskDetail() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDetail(string $TaskDetail) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOnlyExpungeDeletes() 获取是否只合并有deleted标记的索引，对应ES _forcemerge API中的only_expunge_deletes参数,默认值false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlyExpungeDeletes(boolean $OnlyExpungeDeletes) 设置是否只合并有deleted标记的索引，对应ES _forcemerge API中的only_expunge_deletes参数,默认值false
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMumSegments() 获取最大合并Segment数量，对应ES _forcemerge API中的max_num_segments参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMumSegments(integer $MaxMumSegments) 设置最大合并Segment数量，对应ES _forcemerge API中的max_num_segments参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CrontabTaskInfo extends AbstractModel
{
    /**
     * @var integer forcemerge任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 集群地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string forcemerge任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 任务执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTime;

    /**
     * @var string 执行forcemerge的索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @var string 上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastExecTime;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 创建任务时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDetail;

    /**
     * @var boolean 是否只合并有deleted标记的索引，对应ES _forcemerge API中的only_expunge_deletes参数,默认值false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlyExpungeDeletes;

    /**
     * @var integer 最大合并Segment数量，对应ES _forcemerge API中的max_num_segments参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMumSegments;

    /**
     * @param integer $TaskId forcemerge任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 集群地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName forcemerge任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTime 任务执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Target 执行forcemerge的索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastExecTime 上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatus 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建任务时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskDetail 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OnlyExpungeDeletes 是否只合并有deleted标记的索引，对应ES _forcemerge API中的only_expunge_deletes参数,默认值false
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMumSegments 最大合并Segment数量，对应ES _forcemerge API中的max_num_segments参数
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("LastExecTime",$param) and $param["LastExecTime"] !== null) {
            $this->LastExecTime = $param["LastExecTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = $param["TaskDetail"];
        }

        if (array_key_exists("OnlyExpungeDeletes",$param) and $param["OnlyExpungeDeletes"] !== null) {
            $this->OnlyExpungeDeletes = $param["OnlyExpungeDeletes"];
        }

        if (array_key_exists("MaxMumSegments",$param) and $param["MaxMumSegments"] !== null) {
            $this->MaxMumSegments = $param["MaxMumSegments"];
        }
    }
}
