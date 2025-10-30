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
 * TaskVersionVO
 *
 * @method string getVersionId() 获取版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionNum() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNum(string $VersionNum) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionRemark() 获取版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRemark(string $VersionRemark) 设置版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取版本创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置版本创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取版本更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置版本更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerCommitTime() 获取最新调度计划变更时间 生产态存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置最新调度计划变更时间 生产态存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedVersion() 获取版本是否正在使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedVersion(integer $UsedVersion) 设置版本是否正在使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskDsDTO getTaskInfo() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(TaskDsDTO $TaskInfo) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskParaInfo() 获取任务参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskParaInfo(array $TaskParaInfo) 设置任务参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskInputParam() 获取TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInputParam(array $TaskInputParam) 设置TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskOutputParam() 获取TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskOutputParam(array $TaskOutputParam) 设置TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskLinkInfo() 获取任务上游依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLinkInfo(array $TaskLinkInfo) 设置任务上游依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveStatus() 获取审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(string $ApproveStatus) 设置审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveName() 获取审批人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveName(string $ApproveName) 设置审批人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskEventPublisher() 获取任务事件绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskEventPublisher(array $TaskEventPublisher) 设置任务事件绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskRegisterOutputTable() 获取任务产出登记信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRegisterOutputTable(array $TaskRegisterOutputTable) 设置任务产出登记信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskCycleLinkInfo() 获取循环依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCycleLinkInfo(array $TaskCycleLinkInfo) 设置循环依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskEventListener() 获取事件监听信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskEventListener(array $TaskEventListener) 设置事件监听信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveTime() 获取审批时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTime(string $ApproveTime) 设置审批时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskVersionDsDTO extends AbstractModel
{
    /**
     * @var string 版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNum;

    /**
     * @var string 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionRemark;

    /**
     * @var string 版本创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 版本更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最新调度计划变更时间 生产态存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var integer 版本是否正在使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedVersion;

    /**
     * @var TaskDsDTO 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @var array 任务参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskParaInfo;

    /**
     * @var array TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInputParam;

    /**
     * @var array TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskOutputParam;

    /**
     * @var array 任务上游依赖信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLinkInfo;

    /**
     * @var string 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveStatus;

    /**
     * @var string 审批人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveName;

    /**
     * @var array 任务事件绑定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskEventPublisher;

    /**
     * @var array 任务产出登记信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRegisterOutputTable;

    /**
     * @var array 循环依赖信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCycleLinkInfo;

    /**
     * @var array 事件监听信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskEventListener;

    /**
     * @var string 审批时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveTime;

    /**
     * @param string $VersionId 版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionNum 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionRemark 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 版本创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 版本更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime 最新调度计划变更时间 生产态存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedVersion 版本是否正在使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskDsDTO $TaskInfo 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskParaInfo 任务参数信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskInputParam TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskOutputParam TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskLinkInfo 任务上游依赖信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveStatus 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveName 审批人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskEventPublisher 任务事件绑定
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskRegisterOutputTable 任务产出登记信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskCycleLinkInfo 循环依赖信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskEventListener 事件监听信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveTime 审批时间
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("UsedVersion",$param) and $param["UsedVersion"] !== null) {
            $this->UsedVersion = $param["UsedVersion"];
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new TaskDsDTO();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("TaskParaInfo",$param) and $param["TaskParaInfo"] !== null) {
            $this->TaskParaInfo = [];
            foreach ($param["TaskParaInfo"] as $key => $value){
                $obj = new ParameterTaskDsDto();
                $obj->deserialize($value);
                array_push($this->TaskParaInfo, $obj);
            }
        }

        if (array_key_exists("TaskInputParam",$param) and $param["TaskInputParam"] !== null) {
            $this->TaskInputParam = [];
            foreach ($param["TaskInputParam"] as $key => $value){
                $obj = new ParameterTaskInDsDto();
                $obj->deserialize($value);
                array_push($this->TaskInputParam, $obj);
            }
        }

        if (array_key_exists("TaskOutputParam",$param) and $param["TaskOutputParam"] !== null) {
            $this->TaskOutputParam = [];
            foreach ($param["TaskOutputParam"] as $key => $value){
                $obj = new ParameterTaskOutDsDto();
                $obj->deserialize($value);
                array_push($this->TaskOutputParam, $obj);
            }
        }

        if (array_key_exists("TaskLinkInfo",$param) and $param["TaskLinkInfo"] !== null) {
            $this->TaskLinkInfo = [];
            foreach ($param["TaskLinkInfo"] as $key => $value){
                $obj = new TaskLinkDsDTO();
                $obj->deserialize($value);
                array_push($this->TaskLinkInfo, $obj);
            }
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("ApproveName",$param) and $param["ApproveName"] !== null) {
            $this->ApproveName = $param["ApproveName"];
        }

        if (array_key_exists("TaskEventPublisher",$param) and $param["TaskEventPublisher"] !== null) {
            $this->TaskEventPublisher = [];
            foreach ($param["TaskEventPublisher"] as $key => $value){
                $obj = new EventPublisherDTO();
                $obj->deserialize($value);
                array_push($this->TaskEventPublisher, $obj);
            }
        }

        if (array_key_exists("TaskRegisterOutputTable",$param) and $param["TaskRegisterOutputTable"] !== null) {
            $this->TaskRegisterOutputTable = [];
            foreach ($param["TaskRegisterOutputTable"] as $key => $value){
                $obj = new TaskDataRegistryDTO();
                $obj->deserialize($value);
                array_push($this->TaskRegisterOutputTable, $obj);
            }
        }

        if (array_key_exists("TaskCycleLinkInfo",$param) and $param["TaskCycleLinkInfo"] !== null) {
            $this->TaskCycleLinkInfo = [];
            foreach ($param["TaskCycleLinkInfo"] as $key => $value){
                $obj = new TaskCycleLinkDTO();
                $obj->deserialize($value);
                array_push($this->TaskCycleLinkInfo, $obj);
            }
        }

        if (array_key_exists("TaskEventListener",$param) and $param["TaskEventListener"] !== null) {
            $this->TaskEventListener = [];
            foreach ($param["TaskEventListener"] as $key => $value){
                $obj = new EventListenerDTO();
                $obj->deserialize($value);
                array_push($this->TaskEventListener, $obj);
            }
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }
    }
}
