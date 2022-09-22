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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Datahub任务信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskType() 获取任务类型，SOURCE数据接入，SINK数据流出
 * @method void setTaskType(string $TaskType) 设置任务类型，SOURCE数据接入，SINK数据流出
 * @method integer getStatus() 获取状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
 * @method void setStatus(integer $Status) 设置状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
 * @method DatahubResource getSourceResource() 获取数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceResource(DatahubResource $SourceResource) 设置数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method DatahubResource getTargetResource() 获取数据目标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetResource(DatahubResource $TargetResource) 设置数据目标
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConnections() 获取Connection列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnections(array $Connections) 设置Connection列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method TransformParam getTransformParam() 获取消息处理规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransformParam(TransformParam $TransformParam) 设置消息处理规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatahubId() 获取数据接入ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatahubId(string $DatahubId) 设置数据接入ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaId() 获取绑定的SchemaId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaId(string $SchemaId) 设置绑定的SchemaId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取绑定的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置绑定的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method TransformsParam getTransformsParam() 获取数据处理规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransformsParam(TransformsParam $TransformsParam) 设置数据处理规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取任务标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置任务标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDatahubTaskRes extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型，SOURCE数据接入，SINK数据流出
     */
    public $TaskType;

    /**
     * @var integer 状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
     */
    public $Status;

    /**
     * @var DatahubResource 数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceResource;

    /**
     * @var DatahubResource 数据目标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetResource;

    /**
     * @var array Connection列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Connections;

    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var TransformParam 消息处理规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransformParam;

    /**
     * @var string 数据接入ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatahubId;

    /**
     * @var string 绑定的SchemaId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaId;

    /**
     * @var string 绑定的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var TransformsParam 数据处理规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransformsParam;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var array 任务标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param string $TaskType 任务类型，SOURCE数据接入，SINK数据流出
     * @param integer $Status 状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
     * @param DatahubResource $SourceResource 数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param DatahubResource $TargetResource 数据目标
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Connections Connection列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param TransformParam $TransformParam 消息处理规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatahubId 数据接入ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaId 绑定的SchemaId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 绑定的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param TransformsParam $TransformsParam 数据处理规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 任务标签列表
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
    }
}
