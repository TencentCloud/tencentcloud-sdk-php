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
 * 任务表粒度指标信息
 *
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRecordNum() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRecordNum(integer $TotalRecordNum) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRecordByteNum() 获取总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRecordByteNum(integer $TotalRecordByteNum) 设置总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalDirtyRecordNum() 获取总脏记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalDirtyRecordNum(integer $TotalDirtyRecordNum) 设置总脏记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取topic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置topic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollection() 获取Collection名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollection(string $Collection) 设置Collection名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method string getNodeId() 获取节点id
 * @method void setNodeId(string $NodeId) 设置节点id
 * @method string getLogicDatabase() 获取逻辑库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicDatabase(string $LogicDatabase) 设置逻辑库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogicTable() 获取逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicTable(string $LogicTable) 设置逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogicSchema() 获取逻辑schema名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicSchema(string $LogicSchema) 设置逻辑schema名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskTableMetricInfos() 获取物理表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTableMetricInfos(array $TaskTableMetricInfos) 设置物理表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyncStatus() 获取同步状态，0-未知，1-正常， 2-异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncStatus(integer $SyncStatus) 设置同步状态，0-未知，1-正常， 2-异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDatabaseName() 获取Target数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDatabaseName(string $TargetDatabaseName) 设置Target数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableName() 获取Target表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableName(string $TargetTableName) 设置Target表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWriteTotalRecordNum() 获取Write总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteTotalRecordNum(integer $WriteTotalRecordNum) 设置Write总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWriteTotalRecordByteNum() 获取Write总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteTotalRecordByteNum(string $WriteTotalRecordByteNum) 设置Write总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSchemaName() 获取TargetSchema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSchemaName(string $TargetSchemaName) 设置TargetSchema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTopic() 获取Targettopic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTopic(string $TargetTopic) 设置Targettopic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCollection() 获取TargetCollection名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCollection(string $TargetCollection) 设置TargetCollection名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDataSourceName(string $TargetDataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetNodeId() 获取节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetNodeId(string $TargetNodeId) 设置节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalRecordSpeed() 获取读取条数的速度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRecordSpeed(float $TotalRecordSpeed) 设置读取条数的速度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWriteTotalRecordSpeed() 获取写入条数的速度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteTotalRecordSpeed(float $WriteTotalRecordSpeed) 设置写入条数的速度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExceptionReason() 获取异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionReason(string $ExceptionReason) 设置异常原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTableMetricInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRecordNum;

    /**
     * @var integer 总字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRecordByteNum;

    /**
     * @var integer 总脏记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalDirtyRecordNum;

    /**
     * @var string Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string topic名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string Collection名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Collection;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var string 节点id
     */
    public $NodeId;

    /**
     * @var string 逻辑库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicDatabase;

    /**
     * @var string 逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicTable;

    /**
     * @var string 逻辑schema名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicSchema;

    /**
     * @var array 物理表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTableMetricInfos;

    /**
     * @var integer 同步状态，0-未知，1-正常， 2-异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncStatus;

    /**
     * @var string Target数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDatabaseName;

    /**
     * @var string Target表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableName;

    /**
     * @var integer Write总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteTotalRecordNum;

    /**
     * @var string Write总字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteTotalRecordByteNum;

    /**
     * @var string TargetSchema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSchemaName;

    /**
     * @var string Targettopic名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTopic;

    /**
     * @var string TargetCollection名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCollection;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDataSourceName;

    /**
     * @var string 节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetNodeId;

    /**
     * @var float 读取条数的速度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRecordSpeed;

    /**
     * @var float 写入条数的速度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteTotalRecordSpeed;

    /**
     * @var string 异常原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionReason;

    /**
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRecordNum 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRecordByteNum 总字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalDirtyRecordNum 总脏记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic topic名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Collection Collection名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源名称
     * @param string $NodeId 节点id
     * @param string $LogicDatabase 逻辑库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogicTable 逻辑表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogicSchema 逻辑schema名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskTableMetricInfos 物理表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyncStatus 同步状态，0-未知，1-正常， 2-异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDatabaseName Target数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableName Target表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WriteTotalRecordNum Write总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WriteTotalRecordByteNum Write总字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSchemaName TargetSchema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTopic Targettopic名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCollection TargetCollection名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetNodeId 节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalRecordSpeed 读取条数的速度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $WriteTotalRecordSpeed 写入条数的速度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExceptionReason 异常原因
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TotalRecordNum",$param) and $param["TotalRecordNum"] !== null) {
            $this->TotalRecordNum = $param["TotalRecordNum"];
        }

        if (array_key_exists("TotalRecordByteNum",$param) and $param["TotalRecordByteNum"] !== null) {
            $this->TotalRecordByteNum = $param["TotalRecordByteNum"];
        }

        if (array_key_exists("TotalDirtyRecordNum",$param) and $param["TotalDirtyRecordNum"] !== null) {
            $this->TotalDirtyRecordNum = $param["TotalDirtyRecordNum"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("LogicDatabase",$param) and $param["LogicDatabase"] !== null) {
            $this->LogicDatabase = $param["LogicDatabase"];
        }

        if (array_key_exists("LogicTable",$param) and $param["LogicTable"] !== null) {
            $this->LogicTable = $param["LogicTable"];
        }

        if (array_key_exists("LogicSchema",$param) and $param["LogicSchema"] !== null) {
            $this->LogicSchema = $param["LogicSchema"];
        }

        if (array_key_exists("TaskTableMetricInfos",$param) and $param["TaskTableMetricInfos"] !== null) {
            $this->TaskTableMetricInfos = [];
            foreach ($param["TaskTableMetricInfos"] as $key => $value){
                $obj = new TaskTableMetricInfo();
                $obj->deserialize($value);
                array_push($this->TaskTableMetricInfos, $obj);
            }
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("TargetTableName",$param) and $param["TargetTableName"] !== null) {
            $this->TargetTableName = $param["TargetTableName"];
        }

        if (array_key_exists("WriteTotalRecordNum",$param) and $param["WriteTotalRecordNum"] !== null) {
            $this->WriteTotalRecordNum = $param["WriteTotalRecordNum"];
        }

        if (array_key_exists("WriteTotalRecordByteNum",$param) and $param["WriteTotalRecordByteNum"] !== null) {
            $this->WriteTotalRecordByteNum = $param["WriteTotalRecordByteNum"];
        }

        if (array_key_exists("TargetSchemaName",$param) and $param["TargetSchemaName"] !== null) {
            $this->TargetSchemaName = $param["TargetSchemaName"];
        }

        if (array_key_exists("TargetTopic",$param) and $param["TargetTopic"] !== null) {
            $this->TargetTopic = $param["TargetTopic"];
        }

        if (array_key_exists("TargetCollection",$param) and $param["TargetCollection"] !== null) {
            $this->TargetCollection = $param["TargetCollection"];
        }

        if (array_key_exists("TargetDataSourceName",$param) and $param["TargetDataSourceName"] !== null) {
            $this->TargetDataSourceName = $param["TargetDataSourceName"];
        }

        if (array_key_exists("TargetNodeId",$param) and $param["TargetNodeId"] !== null) {
            $this->TargetNodeId = $param["TargetNodeId"];
        }

        if (array_key_exists("TotalRecordSpeed",$param) and $param["TotalRecordSpeed"] !== null) {
            $this->TotalRecordSpeed = $param["TotalRecordSpeed"];
        }

        if (array_key_exists("WriteTotalRecordSpeed",$param) and $param["WriteTotalRecordSpeed"] !== null) {
            $this->WriteTotalRecordSpeed = $param["WriteTotalRecordSpeed"];
        }

        if (array_key_exists("ExceptionReason",$param) and $param["ExceptionReason"] !== null) {
            $this->ExceptionReason = $param["ExceptionReason"];
        }
    }
}
