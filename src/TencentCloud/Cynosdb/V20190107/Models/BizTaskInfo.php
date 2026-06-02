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
 * @method integer getID() 获取<p>任务id</p>
 * @method void setID(integer $ID) 设置<p>任务id</p>
 * @method integer getAppId() 获取<p>用户appid</p>
 * @method void setAppId(integer $AppId) 设置<p>用户appid</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getDelayTime() 获取<p>延迟执行时间</p>
 * @method void setDelayTime(string $DelayTime) 设置<p>延迟执行时间</p>
 * @method string getErrMsg() 获取<p>任务失败信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>任务失败信息</p>
 * @method integer getFlowId() 获取<p>异步任务流id</p>
 * @method void setFlowId(integer $FlowId) 设置<p>异步任务流id</p>
 * @method string getInput() 获取<p>任务输入信息</p>
 * @method void setInput(string $Input) 设置<p>任务输入信息</p>
 * @method string getInstanceGrpId() 获取<p>实例组id</p>
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置<p>实例组id</p>
 * @method string getInstanceGroupId() 获取<p>实例组id</p>
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置<p>实例组id</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getObjectId() 获取<p>任务操作对象id</p>
 * @method void setObjectId(string $ObjectId) 设置<p>任务操作对象id</p>
 * @method string getObjectType() 获取<p>任务操作对象类型</p>
 * @method void setObjectType(string $ObjectType) 设置<p>任务操作对象类型</p>
 * @method string getOperator() 获取<p>操作者uin</p>
 * @method void setOperator(string $Operator) 设置<p>操作者uin</p>
 * @method string getOutput() 获取<p>任务输出信息</p>
 * @method void setOutput(string $Output) 设置<p>任务输出信息</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method string getTaskType() 获取<p>任务类型</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p>
 * @method integer getTriggerTaskId() 获取<p>触发本任务的父任务ID</p>
 * @method void setTriggerTaskId(integer $TriggerTaskId) 设置<p>触发本任务的父任务ID</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getStartTime() 获取<p>任务开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间</p>
 * @method string getEndTime() 获取<p>任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getProcess() 获取<p>任务进度</p>
 * @method void setProcess(integer $Process) 设置<p>任务进度</p>
 * @method array getModifyParamsData() 获取<p>修改参数任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyParamsData(array $ModifyParamsData) 设置<p>修改参数任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateClustersData getCreateClustersData() 获取<p>创建集群任务信息</p>
 * @method void setCreateClustersData(CreateClustersData $CreateClustersData) 设置<p>创建集群任务信息</p>
 * @method RollbackData getRollbackData() 获取<p>集群回档任务信息</p>
 * @method void setRollbackData(RollbackData $RollbackData) 设置<p>集群回档任务信息</p>
 * @method ModifyInstanceData getModifyInstanceData() 获取<p>实例变配任务信息</p>
 * @method void setModifyInstanceData(ModifyInstanceData $ModifyInstanceData) 设置<p>实例变配任务信息</p>
 * @method ManualBackupData getManualBackupData() 获取<p>手动备份任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackupData(ManualBackupData $ManualBackupData) 设置<p>手动备份任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyDbVersionData getModifyDbVersionData() 获取<p>修改内核版本任务信息</p>
 * @method void setModifyDbVersionData(ModifyDbVersionData $ModifyDbVersionData) 设置<p>修改内核版本任务信息</p>
 * @method ClusterSlaveData getClusterSlaveData() 获取<p>集群可用区信息</p>
 * @method void setClusterSlaveData(ClusterSlaveData $ClusterSlaveData) 设置<p>集群可用区信息</p>
 * @method SwitchClusterLogBin getSwitchClusterLogBin() 获取<p>转换集群日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchClusterLogBin(SwitchClusterLogBin $SwitchClusterLogBin) 设置<p>转换集群日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BizTaskModifyParamsData getModifyInstanceParamsData() 获取<p>修改实例参数数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyInstanceParamsData(BizTaskModifyParamsData $ModifyInstanceParamsData) 设置<p>修改实例参数数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskMaintainInfo getTaskMaintainInfo() 获取<p>维护时间</p>
 * @method void setTaskMaintainInfo(TaskMaintainInfo $TaskMaintainInfo) 设置<p>维护时间</p>
 * @method array getInstanceCLSDeliveryInfos() 获取<p>实例日志投递信息</p>
 * @method void setInstanceCLSDeliveryInfos(array $InstanceCLSDeliveryInfos) 设置<p>实例日志投递信息</p>
 * @method TaskProgressInfo getTaskProgressInfo() 获取<p>任务进度信息</p>
 * @method void setTaskProgressInfo(TaskProgressInfo $TaskProgressInfo) 设置<p>任务进度信息</p>
 * @method GdnTaskInfo getGdnTaskInfo() 获取<p>全球数据库网络任务</p>
 * @method void setGdnTaskInfo(GdnTaskInfo $GdnTaskInfo) 设置<p>全球数据库网络任务</p>
 * @method string getVaultId() 获取<p>保险箱id</p>
 * @method void setVaultId(string $VaultId) 设置<p>保险箱id</p>
 * @method string getVaultName() 获取<p>保险箱名称</p>
 * @method void setVaultName(string $VaultName) 设置<p>保险箱名称</p>
 * @method AIOptimizerTaskData getAIOptimizerTaskData() 获取<p>AI优化器任务信息</p>
 * @method void setAIOptimizerTaskData(AIOptimizerTaskData $AIOptimizerTaskData) 设置<p>AI优化器任务信息</p>
 */
class BizTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>任务id</p>
     */
    public $ID;

    /**
     * @var integer <p>用户appid</p>
     */
    public $AppId;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>延迟执行时间</p>
     */
    public $DelayTime;

    /**
     * @var string <p>任务失败信息</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>异步任务流id</p>
     */
    public $FlowId;

    /**
     * @var string <p>任务输入信息</p>
     */
    public $Input;

    /**
     * @var string <p>实例组id</p>
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string <p>实例组id</p>
     */
    public $InstanceGroupId;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>任务操作对象id</p>
     */
    public $ObjectId;

    /**
     * @var string <p>任务操作对象类型</p>
     */
    public $ObjectType;

    /**
     * @var string <p>操作者uin</p>
     */
    public $Operator;

    /**
     * @var string <p>任务输出信息</p>
     */
    public $Output;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var string <p>任务类型</p>
     */
    public $TaskType;

    /**
     * @var integer <p>触发本任务的父任务ID</p>
     */
    public $TriggerTaskId;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>任务开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>任务进度</p>
     */
    public $Process;

    /**
     * @var array <p>修改参数任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ModifyParamsData;

    /**
     * @var CreateClustersData <p>创建集群任务信息</p>
     */
    public $CreateClustersData;

    /**
     * @var RollbackData <p>集群回档任务信息</p>
     */
    public $RollbackData;

    /**
     * @var ModifyInstanceData <p>实例变配任务信息</p>
     */
    public $ModifyInstanceData;

    /**
     * @var ManualBackupData <p>手动备份任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackupData;

    /**
     * @var ModifyDbVersionData <p>修改内核版本任务信息</p>
     */
    public $ModifyDbVersionData;

    /**
     * @var ClusterSlaveData <p>集群可用区信息</p>
     */
    public $ClusterSlaveData;

    /**
     * @var SwitchClusterLogBin <p>转换集群日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchClusterLogBin;

    /**
     * @var BizTaskModifyParamsData <p>修改实例参数数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyInstanceParamsData;

    /**
     * @var TaskMaintainInfo <p>维护时间</p>
     */
    public $TaskMaintainInfo;

    /**
     * @var array <p>实例日志投递信息</p>
     */
    public $InstanceCLSDeliveryInfos;

    /**
     * @var TaskProgressInfo <p>任务进度信息</p>
     */
    public $TaskProgressInfo;

    /**
     * @var GdnTaskInfo <p>全球数据库网络任务</p>
     */
    public $GdnTaskInfo;

    /**
     * @var string <p>保险箱id</p>
     */
    public $VaultId;

    /**
     * @var string <p>保险箱名称</p>
     */
    public $VaultName;

    /**
     * @var AIOptimizerTaskData <p>AI优化器任务信息</p>
     */
    public $AIOptimizerTaskData;

    /**
     * @param integer $ID <p>任务id</p>
     * @param integer $AppId <p>用户appid</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $Region <p>地域</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $DelayTime <p>延迟执行时间</p>
     * @param string $ErrMsg <p>任务失败信息</p>
     * @param integer $FlowId <p>异步任务流id</p>
     * @param string $Input <p>任务输入信息</p>
     * @param string $InstanceGrpId <p>实例组id</p>
     * @param string $InstanceGroupId <p>实例组id</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $ObjectId <p>任务操作对象id</p>
     * @param string $ObjectType <p>任务操作对象类型</p>
     * @param string $Operator <p>操作者uin</p>
     * @param string $Output <p>任务输出信息</p>
     * @param string $Status <p>任务状态</p>
     * @param string $TaskType <p>任务类型</p>
     * @param integer $TriggerTaskId <p>触发本任务的父任务ID</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $StartTime <p>任务开始时间</p>
     * @param string $EndTime <p>任务结束时间</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $Process <p>任务进度</p>
     * @param array $ModifyParamsData <p>修改参数任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateClustersData $CreateClustersData <p>创建集群任务信息</p>
     * @param RollbackData $RollbackData <p>集群回档任务信息</p>
     * @param ModifyInstanceData $ModifyInstanceData <p>实例变配任务信息</p>
     * @param ManualBackupData $ManualBackupData <p>手动备份任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyDbVersionData $ModifyDbVersionData <p>修改内核版本任务信息</p>
     * @param ClusterSlaveData $ClusterSlaveData <p>集群可用区信息</p>
     * @param SwitchClusterLogBin $SwitchClusterLogBin <p>转换集群日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BizTaskModifyParamsData $ModifyInstanceParamsData <p>修改实例参数数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskMaintainInfo $TaskMaintainInfo <p>维护时间</p>
     * @param array $InstanceCLSDeliveryInfos <p>实例日志投递信息</p>
     * @param TaskProgressInfo $TaskProgressInfo <p>任务进度信息</p>
     * @param GdnTaskInfo $GdnTaskInfo <p>全球数据库网络任务</p>
     * @param string $VaultId <p>保险箱id</p>
     * @param string $VaultName <p>保险箱名称</p>
     * @param AIOptimizerTaskData $AIOptimizerTaskData <p>AI优化器任务信息</p>
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

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("AIOptimizerTaskData",$param) and $param["AIOptimizerTaskData"] !== null) {
            $this->AIOptimizerTaskData = new AIOptimizerTaskData();
            $this->AIOptimizerTaskData->deserialize($param["AIOptimizerTaskData"]);
        }
    }
}
