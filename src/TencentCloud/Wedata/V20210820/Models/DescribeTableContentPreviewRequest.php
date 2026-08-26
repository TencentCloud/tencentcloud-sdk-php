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
 * DescribeTableContentPreview请求参数结构体
 *
 * @method string getTableId() 获取<p>表ID</p>
 * @method void setTableId(string $TableId) 设置<p>表ID</p>
 * @method string getTechnologyType() 获取<p>组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA</p>
 * @method void setTechnologyType(string $TechnologyType) 设置<p>组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getResourceType() 获取<p>资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE</p>
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method integer getRowNum() 获取<p>预览的行数，默认10行</p>
 * @method void setRowNum(integer $RowNum) 设置<p>预览的行数，默认10行</p>
 * @method string getDatabaseName() 获取<p>数据库名，kafka或其他无数据库概念的不填</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名，kafka或其他无数据库概念的不填</p>
 * @method string getTaskId() 获取<p>异步查询预览结果时填写</p>
 * @method void setTaskId(string $TaskId) 设置<p>异步查询预览结果时填写</p>
 * @method string getPartitionName() 获取<p>分区信息</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>分区信息</p>
 * @method string getResourceGroupId() 获取<p>资源组ID</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组ID</p>
 * @method string getSql() 获取<p>执行SQL</p>
 * @method void setSql(string $Sql) 设置<p>执行SQL</p>
 * @method string getEngineId() 获取<p>引擎名</p>
 * @method void setEngineId(string $EngineId) 设置<p>引擎名</p>
 * @method string getEngineTypeDetail() 获取<p>引擎类型详情</p><ul><li>SparkSQL：SparkSQL</li><li>PrestoSQL：Presto</li><li>SparkBatch：Spark作业</li><li>StandardPresto：Presto</li><li>StandardSpark：Spark</li></ul>
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置<p>引擎类型详情</p><ul><li>SparkSQL：SparkSQL</li><li>PrestoSQL：Presto</li><li>SparkBatch：Spark作业</li><li>StandardPresto：Presto</li><li>StandardSpark：Spark</li></ul>
 * @method integer getDatasourceId() 获取<p>数据源ID</p>
 * @method void setDatasourceId(integer $DatasourceId) 设置<p>数据源ID</p>
 */
class DescribeTableContentPreviewRequest extends AbstractModel
{
    /**
     * @var string <p>表ID</p>
     */
    public $TableId;

    /**
     * @var string <p>组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA</p>
     */
    public $TechnologyType;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE</p>
     */
    public $ResourceType;

    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>预览的行数，默认10行</p>
     */
    public $RowNum;

    /**
     * @var string <p>数据库名，kafka或其他无数据库概念的不填</p>
     */
    public $DatabaseName;

    /**
     * @var string <p>异步查询预览结果时填写</p>
     */
    public $TaskId;

    /**
     * @var string <p>分区信息</p>
     */
    public $PartitionName;

    /**
     * @var string <p>资源组ID</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>执行SQL</p>
     */
    public $Sql;

    /**
     * @var string <p>引擎名</p>
     */
    public $EngineId;

    /**
     * @var string <p>引擎类型详情</p><ul><li>SparkSQL：SparkSQL</li><li>PrestoSQL：Presto</li><li>SparkBatch：Spark作业</li><li>StandardPresto：Presto</li><li>StandardSpark：Spark</li></ul>
     */
    public $EngineTypeDetail;

    /**
     * @var integer <p>数据源ID</p>
     */
    public $DatasourceId;

    /**
     * @param string $TableId <p>表ID</p>
     * @param string $TechnologyType <p>组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $ResourceType <p>资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE</p>
     * @param string $TableName <p>表名</p>
     * @param string $ProjectId <p>项目id</p>
     * @param integer $RowNum <p>预览的行数，默认10行</p>
     * @param string $DatabaseName <p>数据库名，kafka或其他无数据库概念的不填</p>
     * @param string $TaskId <p>异步查询预览结果时填写</p>
     * @param string $PartitionName <p>分区信息</p>
     * @param string $ResourceGroupId <p>资源组ID</p>
     * @param string $Sql <p>执行SQL</p>
     * @param string $EngineId <p>引擎名</p>
     * @param string $EngineTypeDetail <p>引擎类型详情</p><ul><li>SparkSQL：SparkSQL</li><li>PrestoSQL：Presto</li><li>SparkBatch：Spark作业</li><li>StandardPresto：Presto</li><li>StandardSpark：Spark</li></ul>
     * @param integer $DatasourceId <p>数据源ID</p>
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TechnologyType",$param) and $param["TechnologyType"] !== null) {
            $this->TechnologyType = $param["TechnologyType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RowNum",$param) and $param["RowNum"] !== null) {
            $this->RowNum = $param["RowNum"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("EngineId",$param) and $param["EngineId"] !== null) {
            $this->EngineId = $param["EngineId"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }
    }
}
