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
 * 基线关联任务
 *
 * @method integer getId() 获取变更记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置变更记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBaselineId() 获取基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineId(integer $BaselineId) 设置基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedCostTime() 获取任务运行平均时间/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedCostTime(integer $EstimatedCostTime) 设置任务运行平均时间/单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method StringListNode getUpstreamTaskIds() 获取上游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamTaskIds(StringListNode $UpstreamTaskIds) 设置上游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
 * @method StringListNode getDownstreamTaskIds() 获取下游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamTaskIds(StringListNode $DownstreamTaskIds) 设置下游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPromiseTask() 获取否是保障任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPromiseTask(boolean $IsPromiseTask) 设置否是保障任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskCycle() 获取任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCycle(string $TaskCycle) 设置任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskInChargeUin() 获取任务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInChargeUin(string $TaskInChargeUin) 设置任务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskInChargeName() 获取任务负责人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInChargeName(string $TaskInChargeName) 设置任务负责人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessBenchmark() 获取任务准入基准
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessBenchmark(string $AccessBenchmark) 设置任务准入基准
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessBenchmarkDesc() 获取任务准入基准诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessBenchmarkDesc(string $AccessBenchmarkDesc) 设置任务准入基准诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineTaskDto extends AbstractModel
{
    /**
     * @var integer 变更记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 基线id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 任务运行平均时间/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedCostTime;

    /**
     * @var StringListNode 上游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamTaskIds;

    /**
     * @var StringListNode 下游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamTaskIds;

    /**
     * @var boolean 否是保障任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPromiseTask;

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
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCycle;

    /**
     * @var string 任务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInChargeUin;

    /**
     * @var string 任务负责人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInChargeName;

    /**
     * @var string 任务准入基准
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessBenchmark;

    /**
     * @var string 任务准入基准诊断信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessBenchmarkDesc;

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
     * @param integer $Id 变更记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BaselineId 基线id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedCostTime 任务运行平均时间/单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param StringListNode $UpstreamTaskIds 上游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
     * @param StringListNode $DownstreamTaskIds 下游实例id,多个实例用,分开
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPromiseTask 否是保障任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskCycle 任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskInChargeUin 任务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskInChargeName 任务负责人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessBenchmark 任务准入基准
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessBenchmarkDesc 任务准入基准诊断信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("EstimatedCostTime",$param) and $param["EstimatedCostTime"] !== null) {
            $this->EstimatedCostTime = $param["EstimatedCostTime"];
        }

        if (array_key_exists("UpstreamTaskIds",$param) and $param["UpstreamTaskIds"] !== null) {
            $this->UpstreamTaskIds = new StringListNode();
            $this->UpstreamTaskIds->deserialize($param["UpstreamTaskIds"]);
        }

        if (array_key_exists("DownstreamTaskIds",$param) and $param["DownstreamTaskIds"] !== null) {
            $this->DownstreamTaskIds = new StringListNode();
            $this->DownstreamTaskIds->deserialize($param["DownstreamTaskIds"]);
        }

        if (array_key_exists("IsPromiseTask",$param) and $param["IsPromiseTask"] !== null) {
            $this->IsPromiseTask = $param["IsPromiseTask"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskCycle",$param) and $param["TaskCycle"] !== null) {
            $this->TaskCycle = $param["TaskCycle"];
        }

        if (array_key_exists("TaskInChargeUin",$param) and $param["TaskInChargeUin"] !== null) {
            $this->TaskInChargeUin = $param["TaskInChargeUin"];
        }

        if (array_key_exists("TaskInChargeName",$param) and $param["TaskInChargeName"] !== null) {
            $this->TaskInChargeName = $param["TaskInChargeName"];
        }

        if (array_key_exists("AccessBenchmark",$param) and $param["AccessBenchmark"] !== null) {
            $this->AccessBenchmark = $param["AccessBenchmark"];
        }

        if (array_key_exists("AccessBenchmarkDesc",$param) and $param["AccessBenchmarkDesc"] !== null) {
            $this->AccessBenchmarkDesc = $param["AccessBenchmarkDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
