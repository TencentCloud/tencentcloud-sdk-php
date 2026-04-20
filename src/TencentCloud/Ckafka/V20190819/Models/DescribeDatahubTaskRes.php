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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Datahub任务信息
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskType() 获取<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method integer getStatus() 获取<p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
 * @method void setStatus(integer $Status) 设置<p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
 * @method DatahubResource getSourceResource() 获取<p>数据源</p>
 * @method void setSourceResource(DatahubResource $SourceResource) 设置<p>数据源</p>
 * @method DatahubResource getTargetResource() 获取<p>数据目标</p>
 * @method void setTargetResource(DatahubResource $TargetResource) 设置<p>数据目标</p>
 * @method array getConnections() 获取<p>Connection列表</p>
 * @method void setConnections(array $Connections) 设置<p>Connection列表</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method TransformParam getTransformParam() 获取<p>消息处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransformParam(TransformParam $TransformParam) 设置<p>消息处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatahubId() 获取<p>数据接入ID</p>
 * @method void setDatahubId(string $DatahubId) 设置<p>数据接入ID</p>
 * @method string getSchemaId() 获取<p>绑定的SchemaId</p>
 * @method void setSchemaId(string $SchemaId) 设置<p>绑定的SchemaId</p>
 * @method string getSchemaName() 获取<p>绑定的Schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>绑定的Schema名称</p>
 * @method TransformsParam getTransformsParam() 获取<p>数据处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransformsParam(TransformsParam $TransformsParam) 设置<p>数据处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>异常信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>异常信息</p>
 * @method array getTags() 获取<p>任务标签列表</p>
 * @method void setTags(array $Tags) 设置<p>任务标签列表</p>
 * @method string getDescription() 获取<p>任务描述信息</p>
 * @method void setDescription(string $Description) 设置<p>任务描述信息</p>
 * @method integer getIsolateStatus() 获取<p>1:正常 2:隔离中</p>
 * @method void setIsolateStatus(integer $IsolateStatus) 设置<p>1:正常 2:隔离中</p>
 * @method integer getTaskMax() 获取<p>并发数</p><p>默认值：1</p>
 * @method void setTaskMax(integer $TaskMax) 设置<p>并发数</p><p>默认值：1</p>
 * @method integer getSyncThrottleLimit() 获取<p>并发流量预估参考上限，MB/s</p>
 * @method void setSyncThrottleLimit(integer $SyncThrottleLimit) 设置<p>并发流量预估参考上限，MB/s</p>
 * @method boolean getAutoExpandFlag() 获取<p>自动扩容 true:自动扩容 false:手动扩容</p><p>默认值：true</p>
 * @method void setAutoExpandFlag(boolean $AutoExpandFlag) 设置<p>自动扩容 true:自动扩容 false:手动扩容</p><p>默认值：true</p>
 */
class DescribeDatahubTaskRes extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     */
    public $TaskType;

    /**
     * @var integer <p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
     */
    public $Status;

    /**
     * @var DatahubResource <p>数据源</p>
     */
    public $SourceResource;

    /**
     * @var DatahubResource <p>数据目标</p>
     */
    public $TargetResource;

    /**
     * @var array <p>Connection列表</p>
     */
    public $Connections;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var TransformParam <p>消息处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransformParam;

    /**
     * @var string <p>数据接入ID</p>
     */
    public $DatahubId;

    /**
     * @var string <p>绑定的SchemaId</p>
     */
    public $SchemaId;

    /**
     * @var string <p>绑定的Schema名称</p>
     */
    public $SchemaName;

    /**
     * @var TransformsParam <p>数据处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransformsParam;

    /**
     * @var string <p>异常信息</p>
     */
    public $ErrorMessage;

    /**
     * @var array <p>任务标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>任务描述信息</p>
     */
    public $Description;

    /**
     * @var integer <p>1:正常 2:隔离中</p>
     */
    public $IsolateStatus;

    /**
     * @var integer <p>并发数</p><p>默认值：1</p>
     */
    public $TaskMax;

    /**
     * @var integer <p>并发流量预估参考上限，MB/s</p>
     */
    public $SyncThrottleLimit;

    /**
     * @var boolean <p>自动扩容 true:自动扩容 false:手动扩容</p><p>默认值：true</p>
     */
    public $AutoExpandFlag;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskType <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     * @param integer $Status <p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
     * @param DatahubResource $SourceResource <p>数据源</p>
     * @param DatahubResource $TargetResource <p>数据目标</p>
     * @param array $Connections <p>Connection列表</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param TransformParam $TransformParam <p>消息处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatahubId <p>数据接入ID</p>
     * @param string $SchemaId <p>绑定的SchemaId</p>
     * @param string $SchemaName <p>绑定的Schema名称</p>
     * @param TransformsParam $TransformsParam <p>数据处理规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>异常信息</p>
     * @param array $Tags <p>任务标签列表</p>
     * @param string $Description <p>任务描述信息</p>
     * @param integer $IsolateStatus <p>1:正常 2:隔离中</p>
     * @param integer $TaskMax <p>并发数</p><p>默认值：1</p>
     * @param integer $SyncThrottleLimit <p>并发流量预估参考上限，MB/s</p>
     * @param boolean $AutoExpandFlag <p>自动扩容 true:自动扩容 false:手动扩容</p><p>默认值：true</p>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceResource",$param) and $param["SourceResource"] !== null) {
            $this->SourceResource = new DatahubResource();
            $this->SourceResource->deserialize($param["SourceResource"]);
        }

        if (array_key_exists("TargetResource",$param) and $param["TargetResource"] !== null) {
            $this->TargetResource = new DatahubResource();
            $this->TargetResource->deserialize($param["TargetResource"]);
        }

        if (array_key_exists("Connections",$param) and $param["Connections"] !== null) {
            $this->Connections = [];
            foreach ($param["Connections"] as $key => $value){
                $obj = new Connection();
                $obj->deserialize($value);
                array_push($this->Connections, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TransformParam",$param) and $param["TransformParam"] !== null) {
            $this->TransformParam = new TransformParam();
            $this->TransformParam->deserialize($param["TransformParam"]);
        }

        if (array_key_exists("DatahubId",$param) and $param["DatahubId"] !== null) {
            $this->DatahubId = $param["DatahubId"];
        }

        if (array_key_exists("SchemaId",$param) and $param["SchemaId"] !== null) {
            $this->SchemaId = $param["SchemaId"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TransformsParam",$param) and $param["TransformsParam"] !== null) {
            $this->TransformsParam = new TransformsParam();
            $this->TransformsParam->deserialize($param["TransformsParam"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsolateStatus",$param) and $param["IsolateStatus"] !== null) {
            $this->IsolateStatus = $param["IsolateStatus"];
        }

        if (array_key_exists("TaskMax",$param) and $param["TaskMax"] !== null) {
            $this->TaskMax = $param["TaskMax"];
        }

        if (array_key_exists("SyncThrottleLimit",$param) and $param["SyncThrottleLimit"] !== null) {
            $this->SyncThrottleLimit = $param["SyncThrottleLimit"];
        }

        if (array_key_exists("AutoExpandFlag",$param) and $param["AutoExpandFlag"] !== null) {
            $this->AutoExpandFlag = $param["AutoExpandFlag"];
        }
    }
}
