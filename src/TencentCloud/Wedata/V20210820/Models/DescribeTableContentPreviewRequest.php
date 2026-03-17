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
 * @method string getTableId() 获取表ID
 * @method void setTableId(string $TableId) 设置表ID
 * @method string getTechnologyType() 获取组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA
 * @method void setTechnologyType(string $TechnologyType) 设置组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getResourceType() 获取资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE
 * @method void setResourceType(string $ResourceType) 设置资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getRowNum() 获取预览的行数，默认10行
 * @method void setRowNum(integer $RowNum) 设置预览的行数，默认10行
 * @method string getDatabaseName() 获取数据库名，kafka或其他无数据库概念的不填
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名，kafka或其他无数据库概念的不填
 * @method string getTaskId() 获取异步查询预览结果时填写
 * @method void setTaskId(string $TaskId) 设置异步查询预览结果时填写
 * @method string getPartitionName() 获取分区信息
 * @method void setPartitionName(string $PartitionName) 设置分区信息
 */
class DescribeTableContentPreviewRequest extends AbstractModel
{
    /**
     * @var string 表ID
     */
    public $TableId;

    /**
     * @var string 组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA
     */
    public $TechnologyType;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE
     */
    public $ResourceType;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 预览的行数，默认10行
     */
    public $RowNum;

    /**
     * @var string 数据库名，kafka或其他无数据库概念的不填
     */
    public $DatabaseName;

    /**
     * @var string 异步查询预览结果时填写
     */
    public $TaskId;

    /**
     * @var string 分区信息
     */
    public $PartitionName;

    /**
     * @param string $TableId 表ID
     * @param string $TechnologyType 组件类型枚举值，支持的值有 HDFS/HBASE/HIVE/KAFKA
     * @param string $ClusterId 集群id
     * @param string $ResourceType 资源类型枚举值，支持的值有TOPIC/PATH/TABLE/DATABASE
     * @param string $TableName 表名
     * @param string $ProjectId 项目id
     * @param integer $RowNum 预览的行数，默认10行
     * @param string $DatabaseName 数据库名，kafka或其他无数据库概念的不填
     * @param string $TaskId 异步查询预览结果时填写
     * @param string $PartitionName 分区信息
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
    }
}
