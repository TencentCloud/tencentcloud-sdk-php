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
 * 集成任务
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyncType() 获取同步类型1.解决方案(整库迁移),2.单表同步
 * @method void setSyncType(integer $SyncType) 设置同步类型1.解决方案(整库迁移),2.单表同步
 * @method integer getTaskType() 获取201.实时,202.离线
 * @method void setTaskType(integer $TaskType) 设置201.实时,202.离线
 * @method string getWorkflowId() 获取任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTaskId() 获取任务调度id(oceanus or us等作业id)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTaskId(string $ScheduleTaskId) 设置任务调度id(oceanus or us等作业id)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupId() 获取任务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupId(string $TaskGroupId) 设置任务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取操作人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置操作人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取owner uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置owner uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态1.初始化,2.操作中,3.运行中,4.暂停,5.任务停止中,6.停止,7.执行失败,8.已删除,9.已锁定,10.配置过期,11.提交中,12.提交成功,13.提交失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态1.初始化,2.操作中,3.运行中,4.暂停,5.任务停止中,6.停止,7.执行失败,8.已删除,9.已锁定,10.配置过期,11.提交中,12.提交成功,13.提交失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodes() 获取节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorId() 获取执行资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorId(string $ExecutorId) 设置执行资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtConfig() 获取任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtConfig(array $ExtConfig) 设置任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecuteContext() 获取任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteContext(array $ExecuteContext) 设置任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMappings() 获取节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappings(array $Mappings) 设置节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskMode() 获取任务模式：1.画布模式，2.flink jar
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMode(string $TaskMode) 设置任务模式：1.画布模式，2.flink jar
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncharge(string $Incharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineTaskAddParam getOfflineTaskAddEntity() 获取离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTaskAddEntity(OfflineTaskAddParam $OfflineTaskAddEntity) 设置离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取group name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置group name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerUrl() 获取url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerUrl(string $InLongManagerUrl) 设置url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongStreamId() 获取stream id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongStreamId(string $InLongStreamId) 设置stream id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerVersion() 获取version
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerVersion(string $InLongManagerVersion) 设置version
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationTaskInfo extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 同步类型1.解决方案(整库迁移),2.单表同步
     */
    public $SyncType;

    /**
     * @var integer 201.实时,202.离线
     */
    public $TaskType;

    /**
     * @var string 任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务调度id(oceanus or us等作业id)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTaskId;

    /**
     * @var string 任务组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 创建人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 操作人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var string owner uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer 任务状态1.初始化,2.操作中,3.运行中,4.暂停,5.任务停止中,6.停止,7.执行失败,8.已删除,9.已锁定,10.配置过期,11.提交中,12.提交成功,13.提交失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var string 执行资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorId;

    /**
     * @var array 任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var array 任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtConfig;

    /**
     * @var array 任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteContext;

    /**
     * @var array 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mappings;

    /**
     * @var string 任务模式：1.画布模式，2.flink jar
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMode;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Incharge;

    /**
     * @var OfflineTaskAddParam 离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTaskAddEntity;

    /**
     * @var string group name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerUrl;

    /**
     * @var string stream id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongStreamId;

    /**
     * @var string version
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerVersion;

    /**
     * @param string $TaskName 任务名称
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyncType 同步类型1.解决方案(整库迁移),2.单表同步
     * @param integer $TaskType 201.实时,202.离线
     * @param string $WorkflowId 任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTaskId 任务调度id(oceanus or us等作业id)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupId 任务组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 操作人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin owner uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态1.初始化,2.操作中,3.运行中,4.暂停,5.任务停止中,6.停止,7.执行失败,8.已删除,9.已锁定,10.配置过期,11.提交中,12.提交成功,13.提交失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Nodes 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorId 执行资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config 任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtConfig 任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecuteContext 任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Mappings 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskMode 任务模式：1.画布模式，2.flink jar
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Incharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineTaskAddParam $OfflineTaskAddEntity 离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName group name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerUrl url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongStreamId stream id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerVersion version
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ScheduleTaskId",$param) and $param["ScheduleTaskId"] !== null) {
            $this->ScheduleTaskId = $param["ScheduleTaskId"];
        }

        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new IntegrationNodeInfo();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("ExecutorId",$param) and $param["ExecutorId"] !== null) {
            $this->ExecutorId = $param["ExecutorId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("ExecuteContext",$param) and $param["ExecuteContext"] !== null) {
            $this->ExecuteContext = [];
            foreach ($param["ExecuteContext"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExecuteContext, $obj);
            }
        }

        if (array_key_exists("Mappings",$param) and $param["Mappings"] !== null) {
            $this->Mappings = [];
            foreach ($param["Mappings"] as $key => $value){
                $obj = new IntegrationNodeMapping();
                $obj->deserialize($value);
                array_push($this->Mappings, $obj);
            }
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("OfflineTaskAddEntity",$param) and $param["OfflineTaskAddEntity"] !== null) {
            $this->OfflineTaskAddEntity = new OfflineTaskAddParam();
            $this->OfflineTaskAddEntity->deserialize($param["OfflineTaskAddEntity"]);
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("InLongManagerUrl",$param) and $param["InLongManagerUrl"] !== null) {
            $this->InLongManagerUrl = $param["InLongManagerUrl"];
        }

        if (array_key_exists("InLongStreamId",$param) and $param["InLongStreamId"] !== null) {
            $this->InLongStreamId = $param["InLongStreamId"];
        }

        if (array_key_exists("InLongManagerVersion",$param) and $param["InLongManagerVersion"] !== null) {
            $this->InLongManagerVersion = $param["InLongManagerVersion"];
        }
    }
}
