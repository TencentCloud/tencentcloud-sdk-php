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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method integer getID() 获取任务id
 * @method void setID(integer $ID) 设置任务id
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getDelayTime() 获取延迟执行时间
 * @method void setDelayTime(string $DelayTime) 设置延迟执行时间
 * @method string getErrMsg() 获取任务失败信息
 * @method void setErrMsg(string $ErrMsg) 设置任务失败信息
 * @method integer getFlowId() 获取异步任务流id
 * @method void setFlowId(integer $FlowId) 设置异步任务流id
 * @method string getInput() 获取任务输入信息
 * @method void setInput(string $Input) 设置任务输入信息
 * @method string getInstanceGrpId() 获取实例组id
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置实例组id
 * @method string getInstanceGroupId() 获取实例组id
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置实例组id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getObjectId() 获取任务操作对象id
 * @method void setObjectId(string $ObjectId) 设置任务操作对象id
 * @method string getObjectType() 获取任务操作对象类型
 * @method void setObjectType(string $ObjectType) 设置任务操作对象类型
 * @method string getOperator() 获取操作者uin
 * @method void setOperator(string $Operator) 设置操作者uin
 * @method string getOutput() 获取任务输出信息
 * @method void setOutput(string $Output) 设置任务输出信息
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method integer getTriggerTaskId() 获取触发本任务的父任务ID
 * @method void setTriggerTaskId(integer $TriggerTaskId) 设置触发本任务的父任务ID
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getProcess() 获取任务进度
 * @method void setProcess(integer $Process) 设置任务进度
 * @method array getModifyParamsData() 获取修改参数任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyParamsData(array $ModifyParamsData) 设置修改参数任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateClustersData getCreateClustersData() 获取创建集群任务信息
 * @method void setCreateClustersData(CreateClustersData $CreateClustersData) 设置创建集群任务信息
 * @method RollbackData getRollbackData() 获取集群回档任务信息
 * @method void setRollbackData(RollbackData $RollbackData) 设置集群回档任务信息
 * @method ModifyInstanceData getModifyInstanceData() 获取实例变配任务信息
 * @method void setModifyInstanceData(ModifyInstanceData $ModifyInstanceData) 设置实例变配任务信息
 * @method ManualBackupData getManualBackupData() 获取手动备份任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackupData(ManualBackupData $ManualBackupData) 设置手动备份任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyDbVersionData getModifyDbVersionData() 获取修改内核版本任务信息
 * @method void setModifyDbVersionData(ModifyDbVersionData $ModifyDbVersionData) 设置修改内核版本任务信息
 * @method ClusterSlaveData getClusterSlaveData() 获取集群可用区信息
 * @method void setClusterSlaveData(ClusterSlaveData $ClusterSlaveData) 设置集群可用区信息
 * @method SwitchClusterLogBin getSwitchClusterLogBin() 获取转换集群日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchClusterLogBin(SwitchClusterLogBin $SwitchClusterLogBin) 设置转换集群日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method BizTaskModifyParamsData getModifyInstanceParamsData() 获取修改实例参数数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyInstanceParamsData(BizTaskModifyParamsData $ModifyInstanceParamsData) 设置修改实例参数数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskMaintainInfo getTaskMaintainInfo() 获取维护时间
 * @method void setTaskMaintainInfo(TaskMaintainInfo $TaskMaintainInfo) 设置维护时间
 * @method array getInstanceCLSDeliveryInfos() 获取实例日志投递信息

 * @method void setInstanceCLSDeliveryInfos(array $InstanceCLSDeliveryInfos) 设置实例日志投递信息

 * @method TaskProgressInfo getTaskProgressInfo() 获取任务进度信息
 * @method void setTaskProgressInfo(TaskProgressInfo $TaskProgressInfo) 设置任务进度信息
 * @method GdnTaskInfo getGdnTaskInfo() 获取全球数据库网络任务
 * @method void setGdnTaskInfo(GdnTaskInfo $GdnTaskInfo) 设置全球数据库网络任务
 */
class BizTaskInfo extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $ID;

    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 延迟执行时间
     */
    public $DelayTime;

    /**
     * @var string 任务失败信息
     */
    public $ErrMsg;

    /**
     * @var integer 异步任务流id
     */
    public $FlowId;

    /**
     * @var string 任务输入信息
     */
    public $Input;

    /**
     * @var string 实例组id
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string 实例组id
     */
    public $InstanceGroupId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 任务操作对象id
     */
    public $ObjectId;

    /**
     * @var string 任务操作对象类型
     */
    public $ObjectType;

    /**
     * @var string 操作者uin
     */
    public $Operator;

    /**
     * @var string 任务输出信息
     */
    public $Output;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var integer 触发本任务的父任务ID
     */
    public $TriggerTaskId;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 任务进度
     */
    public $Process;

    /**
     * @var array 修改参数任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ModifyParamsData;

    /**
     * @var CreateClustersData 创建集群任务信息
     */
    public $CreateClustersData;

    /**
     * @var RollbackData 集群回档任务信息
     */
    public $RollbackData;

    /**
     * @var ModifyInstanceData 实例变配任务信息
     */
    public $ModifyInstanceData;

    /**
     * @var ManualBackupData 手动备份任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackupData;

    /**
     * @var ModifyDbVersionData 修改内核版本任务信息
     */
    public $ModifyDbVersionData;

    /**
     * @var ClusterSlaveData 集群可用区信息
     */
    public $ClusterSlaveData;

    /**
     * @var SwitchClusterLogBin 转换集群日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchClusterLogBin;

    /**
     * @var BizTaskModifyParamsData 修改实例参数数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyInstanceParamsData;

    /**
     * @var TaskMaintainInfo 维护时间
     */
    public $TaskMaintainInfo;

    /**
     * @var array 实例日志投递信息

     */
    public $InstanceCLSDeliveryInfos;

    /**
     * @var TaskProgressInfo 任务进度信息
     */
    public $TaskProgressInfo;

    /**
     * @var GdnTaskInfo 全球数据库网络任务
     */
    public $GdnTaskInfo;

    /**
     * @param integer $ID 任务id
     * @param integer $AppId 用户appid
     * @param string $ClusterId 集群id
     * @param string $Region 地域
     * @param string $CreateTime 任务创建时间
     * @param string $DelayTime 延迟执行时间
     * @param string $ErrMsg 任务失败信息
     * @param integer $FlowId 异步任务流id
     * @param string $Input 任务输入信息
     * @param string $InstanceGrpId 实例组id
     * @param string $InstanceGroupId 实例组id
     * @param string $InstanceId 实例id
     * @param string $ObjectId 任务操作对象id
     * @param string $ObjectType 任务操作对象类型
     * @param string $Operator 操作者uin
     * @param string $Output 任务输出信息
     * @param string $Status 任务状态
     * @param string $TaskType 任务类型
     * @param integer $TriggerTaskId 触发本任务的父任务ID
     * @param string $UpdateTime 更新时间
     * @param string $StartTime 任务开始时间
     * @param string $EndTime 任务结束时间
     * @param string $ClusterName 集群名称
     * @param string $InstanceName 实例名称
     * @param integer $Process 任务进度
     * @param array $ModifyParamsData 修改参数任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateClustersData $CreateClustersData 创建集群任务信息
     * @param RollbackData $RollbackData 集群回档任务信息
     * @param ModifyInstanceData $ModifyInstanceData 实例变配任务信息
     * @param ManualBackupData $ManualBackupData 手动备份任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyDbVersionData $ModifyDbVersionData 修改内核版本任务信息
     * @param ClusterSlaveData $ClusterSlaveData 集群可用区信息
     * @param SwitchClusterLogBin $SwitchClusterLogBin 转换集群日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param BizTaskModifyParamsData $ModifyInstanceParamsData 修改实例参数数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskMaintainInfo $TaskMaintainInfo 维护时间
     * @param array $InstanceCLSDeliveryInfos 实例日志投递信息

     * @param TaskProgressInfo $TaskProgressInfo 任务进度信息
     * @param GdnTaskInfo $GdnTaskInfo 全球数据库网络任务
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TriggerTaskId",$param) and $param["TriggerTaskId"] !== null) {
            $this->TriggerTaskId = $param["TriggerTaskId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("ModifyParamsData",$param) and $param["ModifyParamsData"] !== null) {
            $this->ModifyParamsData = [];
            foreach ($param["ModifyParamsData"] as $key => $value){
                $obj = new ModifyParamsData();
                $obj->deserialize($value);
                array_push($this->ModifyParamsData, $obj);
            }
        }

        if (array_key_exists("CreateClustersData",$param) and $param["CreateClustersData"] !== null) {
            $this->CreateClustersData = new CreateClustersData();
            $this->CreateClustersData->deserialize($param["CreateClustersData"]);
        }

        if (array_key_exists("RollbackData",$param) and $param["RollbackData"] !== null) {
            $this->RollbackData = new RollbackData();
            $this->RollbackData->deserialize($param["RollbackData"]);
        }

        if (array_key_exists("ModifyInstanceData",$param) and $param["ModifyInstanceData"] !== null) {
            $this->ModifyInstanceData = new ModifyInstanceData();
            $this->ModifyInstanceData->deserialize($param["ModifyInstanceData"]);
        }

        if (array_key_exists("ManualBackupData",$param) and $param["ManualBackupData"] !== null) {
            $this->ManualBackupData = new ManualBackupData();
            $this->ManualBackupData->deserialize($param["ManualBackupData"]);
        }

        if (array_key_exists("ModifyDbVersionData",$param) and $param["ModifyDbVersionData"] !== null) {
            $this->ModifyDbVersionData = new ModifyDbVersionData();
            $this->ModifyDbVersionData->deserialize($param["ModifyDbVersionData"]);
        }

        if (array_key_exists("ClusterSlaveData",$param) and $param["ClusterSlaveData"] !== null) {
            $this->ClusterSlaveData = new ClusterSlaveData();
            $this->ClusterSlaveData->deserialize($param["ClusterSlaveData"]);
        }

        if (array_key_exists("SwitchClusterLogBin",$param) and $param["SwitchClusterLogBin"] !== null) {
            $this->SwitchClusterLogBin = new SwitchClusterLogBin();
            $this->SwitchClusterLogBin->deserialize($param["SwitchClusterLogBin"]);
        }

        if (array_key_exists("ModifyInstanceParamsData",$param) and $param["ModifyInstanceParamsData"] !== null) {
            $this->ModifyInstanceParamsData = new BizTaskModifyParamsData();
            $this->ModifyInstanceParamsData->deserialize($param["ModifyInstanceParamsData"]);
        }

        if (array_key_exists("TaskMaintainInfo",$param) and $param["TaskMaintainInfo"] !== null) {
            $this->TaskMaintainInfo = new TaskMaintainInfo();
            $this->TaskMaintainInfo->deserialize($param["TaskMaintainInfo"]);
        }

        if (array_key_exists("InstanceCLSDeliveryInfos",$param) and $param["InstanceCLSDeliveryInfos"] !== null) {
            $this->InstanceCLSDeliveryInfos = [];
            foreach ($param["InstanceCLSDeliveryInfos"] as $key => $value){
                $obj = new InstanceCLSDeliveryInfo();
                $obj->deserialize($value);
                array_push($this->InstanceCLSDeliveryInfos, $obj);
            }
        }

        if (array_key_exists("TaskProgressInfo",$param) and $param["TaskProgressInfo"] !== null) {
            $this->TaskProgressInfo = new TaskProgressInfo();
            $this->TaskProgressInfo->deserialize($param["TaskProgressInfo"]);
        }

        if (array_key_exists("GdnTaskInfo",$param) and $param["GdnTaskInfo"] !== null) {
            $this->GdnTaskInfo = new GdnTaskInfo();
            $this->GdnTaskInfo->deserialize($param["GdnTaskInfo"]);
        }
    }
}
