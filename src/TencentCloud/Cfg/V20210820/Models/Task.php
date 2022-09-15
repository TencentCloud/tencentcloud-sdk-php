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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskTitle() 获取任务标题
 * @method void setTaskTitle(string $TaskTitle) 设置任务标题
 * @method string getTaskDescription() 获取任务描述
 * @method void setTaskDescription(string $TaskDescription) 设置任务描述
 * @method string getTaskTag() 获取自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTag(string $TaskTag) 设置自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatus() 获取任务状态，1001--未开始  1002--进行中（执行）1003--进行中（暂停）1004--执行结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态，1001--未开始  1002--进行中（执行）1003--进行中（暂停）1004--执行结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatusType() 获取任务结束状态，表明任务以何种状态结束: 0 -- 尚未结束，1 -- 成功，2-- 失败，3--终止
 * @method void setTaskStatusType(integer $TaskStatusType) 设置任务结束状态，表明任务以何种状态结束: 0 -- 尚未结束，1 -- 成功，2-- 失败，3--终止
 * @method string getTaskProtectStrategy() 获取保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskProtectStrategy(string $TaskProtectStrategy) 设置保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskCreateTime() 获取任务创建时间
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置任务创建时间
 * @method string getTaskUpdateTime() 获取任务更新时间
 * @method void setTaskUpdateTime(string $TaskUpdateTime) 设置任务更新时间
 * @method array getTaskGroups() 获取任务动作组
 * @method void setTaskGroups(array $TaskGroups) 设置任务动作组
 * @method string getTaskStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStartTime(string $TaskStartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskEndTime(string $TaskEndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskExpect() 获取是否符合预期。1：符合预期，2：不符合预期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExpect(integer $TaskExpect) 设置是否符合预期。1：符合预期，2：不符合预期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskSummary() 获取演习记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSummary(string $TaskSummary) 设置演习记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskMode() 获取任务模式。1:手工执行，2:自动执行
 * @method void setTaskMode(integer $TaskMode) 设置任务模式。1:手工执行，2:自动执行
 * @method integer getTaskPauseDuration() 获取自动暂停时长。单位分钟
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) 设置自动暂停时长。单位分钟
 * @method string getTaskOwnerUin() 获取演练创建者Uin
 * @method void setTaskOwnerUin(string $TaskOwnerUin) 设置演练创建者Uin
 * @method integer getTaskRegionId() 获取地域ID
 * @method void setTaskRegionId(integer $TaskRegionId) 设置地域ID
 * @method array getTaskMonitors() 获取监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMonitors(array $TaskMonitors) 设置监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicy getTaskPolicy() 获取保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskPolicy(DescribePolicy $TaskPolicy) 设置保护策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Task extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务标题
     */
    public $TaskTitle;

    /**
     * @var string 任务描述
     */
    public $TaskDescription;

    /**
     * @var string 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTag;

    /**
     * @var integer 任务状态，1001--未开始  1002--进行中（执行）1003--进行中（暂停）1004--执行结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var integer 任务结束状态，表明任务以何种状态结束: 0 -- 尚未结束，1 -- 成功，2-- 失败，3--终止
     */
    public $TaskStatusType;

    /**
     * @var string 保护策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskProtectStrategy;

    /**
     * @var string 任务创建时间
     */
    public $TaskCreateTime;

    /**
     * @var string 任务更新时间
     */
    public $TaskUpdateTime;

    /**
     * @var array 任务动作组
     */
    public $TaskGroups;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskEndTime;

    /**
     * @var integer 是否符合预期。1：符合预期，2：不符合预期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExpect;

    /**
     * @var string 演习记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSummary;

    /**
     * @var integer 任务模式。1:手工执行，2:自动执行
     */
    public $TaskMode;

    /**
     * @var integer 自动暂停时长。单位分钟
     */
    public $TaskPauseDuration;

    /**
     * @var string 演练创建者Uin
     */
    public $TaskOwnerUin;

    /**
     * @var integer 地域ID
     */
    public $TaskRegionId;

    /**
     * @var array 监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMonitors;

    /**
     * @var DescribePolicy 保护策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskPolicy;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param integer $TaskId 任务ID
     * @param string $TaskTitle 任务标题
     * @param string $TaskDescription 任务描述
     * @param string $TaskTag 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatus 任务状态，1001--未开始  1002--进行中（执行）1003--进行中（暂停）1004--执行结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatusType 任务结束状态，表明任务以何种状态结束: 0 -- 尚未结束，1 -- 成功，2-- 失败，3--终止
     * @param string $TaskProtectStrategy 保护策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskCreateTime 任务创建时间
     * @param string $TaskUpdateTime 任务更新时间
     * @param array $TaskGroups 任务动作组
     * @param string $TaskStartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskEndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskExpect 是否符合预期。1：符合预期，2：不符合预期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskSummary 演习记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskMode 任务模式。1:手工执行，2:自动执行
     * @param integer $TaskPauseDuration 自动暂停时长。单位分钟
     * @param string $TaskOwnerUin 演练创建者Uin
     * @param integer $TaskRegionId 地域ID
     * @param array $TaskMonitors 监控指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicy $TaskPolicy 保护策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
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

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskStatusType",$param) and $param["TaskStatusType"] !== null) {
            $this->TaskStatusType = $param["TaskStatusType"];
        }

        if (array_key_exists("TaskProtectStrategy",$param) and $param["TaskProtectStrategy"] !== null) {
            $this->TaskProtectStrategy = $param["TaskProtectStrategy"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("TaskGroups",$param) and $param["TaskGroups"] !== null) {
            $this->TaskGroups = [];
            foreach ($param["TaskGroups"] as $key => $value){
                $obj = new TaskGroup();
                $obj->deserialize($value);
                array_push($this->TaskGroups, $obj);
            }
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskExpect",$param) and $param["TaskExpect"] !== null) {
            $this->TaskExpect = $param["TaskExpect"];
        }

        if (array_key_exists("TaskSummary",$param) and $param["TaskSummary"] !== null) {
            $this->TaskSummary = $param["TaskSummary"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("TaskOwnerUin",$param) and $param["TaskOwnerUin"] !== null) {
            $this->TaskOwnerUin = $param["TaskOwnerUin"];
        }

        if (array_key_exists("TaskRegionId",$param) and $param["TaskRegionId"] !== null) {
            $this->TaskRegionId = $param["TaskRegionId"];
        }

        if (array_key_exists("TaskMonitors",$param) and $param["TaskMonitors"] !== null) {
            $this->TaskMonitors = [];
            foreach ($param["TaskMonitors"] as $key => $value){
                $obj = new TaskMonitor();
                $obj->deserialize($value);
                array_push($this->TaskMonitors, $obj);
            }
        }

        if (array_key_exists("TaskPolicy",$param) and $param["TaskPolicy"] !== null) {
            $this->TaskPolicy = new DescribePolicy();
            $this->TaskPolicy->deserialize($param["TaskPolicy"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
