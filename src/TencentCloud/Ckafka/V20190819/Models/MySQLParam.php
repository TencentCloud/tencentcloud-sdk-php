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
 * MySQL类型入参
 *
 * @method string getDatabase() 获取MySQL的数据库名称，"*"为全数据库
 * @method void setDatabase(string $Database) 设置MySQL的数据库名称，"*"为全数据库
 * @method string getTable() 获取MySQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
 * @method void setTable(string $Table) 设置MySQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
 * @method string getResource() 获取该MySQL在连接管理内的Id
 * @method void setResource(string $Resource) 设置该MySQL在连接管理内的Id
 * @method string getSnapshotMode() 获取复制存量信息(schema_only不复制, initial全量)，默认位initial
 * @method void setSnapshotMode(string $SnapshotMode) 设置复制存量信息(schema_only不复制, initial全量)，默认位initial
 * @method string getDdlTopic() 获取存放MySQL的Ddl信息的Topic，为空则默认不存放
 * @method void setDdlTopic(string $DdlTopic) 设置存放MySQL的Ddl信息的Topic，为空则默认不存放
 * @method string getDataSourceMonitorMode() 获取"TABLE" 表示读取项为 table，"QUERY" 表示读取项为 query
 * @method void setDataSourceMonitorMode(string $DataSourceMonitorMode) 设置"TABLE" 表示读取项为 table，"QUERY" 表示读取项为 query
 * @method string getDataSourceMonitorResource() 获取当 "DataMonitorMode"="TABLE" 时，传入需要读取的 Table；当 "DataMonitorMode"="QUERY" 时，传入需要读取的查询 sql 语句
 * @method void setDataSourceMonitorResource(string $DataSourceMonitorResource) 设置当 "DataMonitorMode"="TABLE" 时，传入需要读取的 Table；当 "DataMonitorMode"="QUERY" 时，传入需要读取的查询 sql 语句
 * @method string getDataSourceIncrementMode() 获取"TIMESTAMP" 表示增量列为时间戳类型，"INCREMENT" 表示增量列为自增 id 类型
 * @method void setDataSourceIncrementMode(string $DataSourceIncrementMode) 设置"TIMESTAMP" 表示增量列为时间戳类型，"INCREMENT" 表示增量列为自增 id 类型
 * @method string getDataSourceIncrementColumn() 获取传入需要监听的列名称
 * @method void setDataSourceIncrementColumn(string $DataSourceIncrementColumn) 设置传入需要监听的列名称
 * @method string getDataSourceStartFrom() 获取"HEAD" 表示复制存量 + 增量数据，"TAIL" 表示只复制增量数据
 * @method void setDataSourceStartFrom(string $DataSourceStartFrom) 设置"HEAD" 表示复制存量 + 增量数据，"TAIL" 表示只复制增量数据
 * @method string getDataTargetInsertMode() 获取"INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
 * @method void setDataTargetInsertMode(string $DataTargetInsertMode) 设置"INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
 * @method string getDataTargetPrimaryKeyField() 获取当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
 * @method void setDataTargetPrimaryKeyField(string $DataTargetPrimaryKeyField) 设置当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
 * @method array getDataTargetRecordMapping() 获取表与消息间的映射关系
 * @method void setDataTargetRecordMapping(array $DataTargetRecordMapping) 设置表与消息间的映射关系
 */
class MySQLParam extends AbstractModel
{
    /**
     * @var string MySQL的数据库名称，"*"为全数据库
     */
    public $Database;

    /**
     * @var string MySQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
     */
    public $Table;

    /**
     * @var string 该MySQL在连接管理内的Id
     */
    public $Resource;

    /**
     * @var string 复制存量信息(schema_only不复制, initial全量)，默认位initial
     */
    public $SnapshotMode;

    /**
     * @var string 存放MySQL的Ddl信息的Topic，为空则默认不存放
     */
    public $DdlTopic;

    /**
     * @var string "TABLE" 表示读取项为 table，"QUERY" 表示读取项为 query
     */
    public $DataSourceMonitorMode;

    /**
     * @var string 当 "DataMonitorMode"="TABLE" 时，传入需要读取的 Table；当 "DataMonitorMode"="QUERY" 时，传入需要读取的查询 sql 语句
     */
    public $DataSourceMonitorResource;

    /**
     * @var string "TIMESTAMP" 表示增量列为时间戳类型，"INCREMENT" 表示增量列为自增 id 类型
     */
    public $DataSourceIncrementMode;

    /**
     * @var string 传入需要监听的列名称
     */
    public $DataSourceIncrementColumn;

    /**
     * @var string "HEAD" 表示复制存量 + 增量数据，"TAIL" 表示只复制增量数据
     */
    public $DataSourceStartFrom;

    /**
     * @var string "INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
     */
    public $DataTargetInsertMode;

    /**
     * @var string 当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
     */
    public $DataTargetPrimaryKeyField;

    /**
     * @var array 表与消息间的映射关系
     */
    public $DataTargetRecordMapping;

    /**
     * @param string $Database MySQL的数据库名称，"*"为全数据库
     * @param string $Table MySQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
     * @param string $Resource 该MySQL在连接管理内的Id
     * @param string $SnapshotMode 复制存量信息(schema_only不复制, initial全量)，默认位initial
     * @param string $DdlTopic 存放MySQL的Ddl信息的Topic，为空则默认不存放
     * @param string $DataSourceMonitorMode "TABLE" 表示读取项为 table，"QUERY" 表示读取项为 query
     * @param string $DataSourceMonitorResource 当 "DataMonitorMode"="TABLE" 时，传入需要读取的 Table；当 "DataMonitorMode"="QUERY" 时，传入需要读取的查询 sql 语句
     * @param string $DataSourceIncrementMode "TIMESTAMP" 表示增量列为时间戳类型，"INCREMENT" 表示增量列为自增 id 类型
     * @param string $DataSourceIncrementColumn 传入需要监听的列名称
     * @param string $DataSourceStartFrom "HEAD" 表示复制存量 + 增量数据，"TAIL" 表示只复制增量数据
     * @param string $DataTargetInsertMode "INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
     * @param string $DataTargetPrimaryKeyField 当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
     * @param array $DataTargetRecordMapping 表与消息间的映射关系
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SnapshotMode",$param) and $param["SnapshotMode"] !== null) {
            $this->SnapshotMode = $param["SnapshotMode"];
        }

        if (array_key_exists("DdlTopic",$param) and $param["DdlTopic"] !== null) {
            $this->DdlTopic = $param["DdlTopic"];
        }

        if (array_key_exists("DataSourceMonitorMode",$param) and $param["DataSourceMonitorMode"] !== null) {
            $this->DataSourceMonitorMode = $param["DataSourceMonitorMode"];
        }

        if (array_key_exists("DataSourceMonitorResource",$param) and $param["DataSourceMonitorResource"] !== null) {
            $this->DataSourceMonitorResource = $param["DataSourceMonitorResource"];
        }

        if (array_key_exists("DataSourceIncrementMode",$param) and $param["DataSourceIncrementMode"] !== null) {
            $this->DataSourceIncrementMode = $param["DataSourceIncrementMode"];
        }

        if (array_key_exists("DataSourceIncrementColumn",$param) and $param["DataSourceIncrementColumn"] !== null) {
            $this->DataSourceIncrementColumn = $param["DataSourceIncrementColumn"];
        }

        if (array_key_exists("DataSourceStartFrom",$param) and $param["DataSourceStartFrom"] !== null) {
            $this->DataSourceStartFrom = $param["DataSourceStartFrom"];
        }

        if (array_key_exists("DataTargetInsertMode",$param) and $param["DataTargetInsertMode"] !== null) {
            $this->DataTargetInsertMode = $param["DataTargetInsertMode"];
        }

        if (array_key_exists("DataTargetPrimaryKeyField",$param) and $param["DataTargetPrimaryKeyField"] !== null) {
            $this->DataTargetPrimaryKeyField = $param["DataTargetPrimaryKeyField"];
        }

        if (array_key_exists("DataTargetRecordMapping",$param) and $param["DataTargetRecordMapping"] !== null) {
            $this->DataTargetRecordMapping = [];
            foreach ($param["DataTargetRecordMapping"] as $key => $value){
                $obj = new RecordMapping();
                $obj->deserialize($value);
                array_push($this->DataTargetRecordMapping, $obj);
            }
        }
    }
}
