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
 * PostgreSQL类型入参
 *
 * @method string getDatabase() 获取PostgreSQL的数据库名称
 * @method void setDatabase(string $Database) 设置PostgreSQL的数据库名称
 * @method string getTable() 获取PostgreSQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"Schema名.数据表名"的格式进行填写，需要填入正则表达式时，格式为"Schema名\\.数据表名"
 * @method void setTable(string $Table) 设置PostgreSQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"Schema名.数据表名"的格式进行填写，需要填入正则表达式时，格式为"Schema名\\.数据表名"
 * @method string getResource() 获取该PostgreSQL在连接管理内的Id
 * @method void setResource(string $Resource) 设置该PostgreSQL在连接管理内的Id
 * @method string getPluginName() 获取插件名(decoderbufs/pgoutput)，默认为decoderbufs
 * @method void setPluginName(string $PluginName) 设置插件名(decoderbufs/pgoutput)，默认为decoderbufs
 * @method string getSnapshotMode() 获取复制存量信息(never增量, initial全量)，默认为initial
 * @method void setSnapshotMode(string $SnapshotMode) 设置复制存量信息(never增量, initial全量)，默认为initial
 * @method string getDataFormat() 获取上游数据格式(JSON/Debezium), 当数据库同步模式为默认字段匹配时,必填
 * @method void setDataFormat(string $DataFormat) 设置上游数据格式(JSON/Debezium), 当数据库同步模式为默认字段匹配时,必填
 * @method string getDataTargetInsertMode() 获取"INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
 * @method void setDataTargetInsertMode(string $DataTargetInsertMode) 设置"INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
 * @method string getDataTargetPrimaryKeyField() 获取当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
 * @method void setDataTargetPrimaryKeyField(string $DataTargetPrimaryKeyField) 设置当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
 * @method array getDataTargetRecordMapping() 获取表与消息间的映射关系
 * @method void setDataTargetRecordMapping(array $DataTargetRecordMapping) 设置表与消息间的映射关系
 * @method boolean getDropInvalidMessage() 获取是否抛弃解析失败的消息，默认为true
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置是否抛弃解析失败的消息，默认为true
 * @method boolean getIsTableRegular() 获取输入的table是否为正则表达式
 * @method void setIsTableRegular(boolean $IsTableRegular) 设置输入的table是否为正则表达式
 * @method string getKeyColumns() 获取格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
 * @method void setKeyColumns(string $KeyColumns) 设置格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
 * @method boolean getRecordWithSchema() 获取如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
 * @method void setRecordWithSchema(boolean $RecordWithSchema) 设置如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
 */
class PostgreSQLParam extends AbstractModel
{
    /**
     * @var string PostgreSQL的数据库名称
     */
    public $Database;

    /**
     * @var string PostgreSQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"Schema名.数据表名"的格式进行填写，需要填入正则表达式时，格式为"Schema名\\.数据表名"
     */
    public $Table;

    /**
     * @var string 该PostgreSQL在连接管理内的Id
     */
    public $Resource;

    /**
     * @var string 插件名(decoderbufs/pgoutput)，默认为decoderbufs
     */
    public $PluginName;

    /**
     * @var string 复制存量信息(never增量, initial全量)，默认为initial
     */
    public $SnapshotMode;

    /**
     * @var string 上游数据格式(JSON/Debezium), 当数据库同步模式为默认字段匹配时,必填
     */
    public $DataFormat;

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
     * @var boolean 是否抛弃解析失败的消息，默认为true
     */
    public $DropInvalidMessage;

    /**
     * @var boolean 输入的table是否为正则表达式
     */
    public $IsTableRegular;

    /**
     * @var string 格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
     */
    public $KeyColumns;

    /**
     * @var boolean 如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
     */
    public $RecordWithSchema;

    /**
     * @param string $Database PostgreSQL的数据库名称
     * @param string $Table PostgreSQL的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"Schema名.数据表名"的格式进行填写，需要填入正则表达式时，格式为"Schema名\\.数据表名"
     * @param string $Resource 该PostgreSQL在连接管理内的Id
     * @param string $PluginName 插件名(decoderbufs/pgoutput)，默认为decoderbufs
     * @param string $SnapshotMode 复制存量信息(never增量, initial全量)，默认为initial
     * @param string $DataFormat 上游数据格式(JSON/Debezium), 当数据库同步模式为默认字段匹配时,必填
     * @param string $DataTargetInsertMode "INSERT" 表示使用 Insert 模式插入，"UPSERT" 表示使用 Upsert 模式插入
     * @param string $DataTargetPrimaryKeyField 当 "DataInsertMode"="UPSERT" 时，传入当前 upsert 时依赖的主键
     * @param array $DataTargetRecordMapping 表与消息间的映射关系
     * @param boolean $DropInvalidMessage 是否抛弃解析失败的消息，默认为true
     * @param boolean $IsTableRegular 输入的table是否为正则表达式
     * @param string $KeyColumns 格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
     * @param boolean $RecordWithSchema 如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
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

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("SnapshotMode",$param) and $param["SnapshotMode"] !== null) {
            $this->SnapshotMode = $param["SnapshotMode"];
        }

        if (array_key_exists("DataFormat",$param) and $param["DataFormat"] !== null) {
            $this->DataFormat = $param["DataFormat"];
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

        if (array_key_exists("DropInvalidMessage",$param) and $param["DropInvalidMessage"] !== null) {
            $this->DropInvalidMessage = $param["DropInvalidMessage"];
        }

        if (array_key_exists("IsTableRegular",$param) and $param["IsTableRegular"] !== null) {
            $this->IsTableRegular = $param["IsTableRegular"];
        }

        if (array_key_exists("KeyColumns",$param) and $param["KeyColumns"] !== null) {
            $this->KeyColumns = $param["KeyColumns"];
        }

        if (array_key_exists("RecordWithSchema",$param) and $param["RecordWithSchema"] !== null) {
            $this->RecordWithSchema = $param["RecordWithSchema"];
        }
    }
}
