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
 * SQLServer类型入参
 *
 * @method string getDatabase() 获取SQLServer的数据库名称
 * @method void setDatabase(string $Database) 设置SQLServer的数据库名称
 * @method string getTable() 获取SQLServer的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
 * @method void setTable(string $Table) 设置SQLServer的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
 * @method string getResource() 获取该SQLServer在连接管理内的Id
 * @method void setResource(string $Resource) 设置该SQLServer在连接管理内的Id
 * @method string getSnapshotMode() 获取复制存量信息(schema_only增量, initial全量)，默认为initial
 * @method void setSnapshotMode(string $SnapshotMode) 设置复制存量信息(schema_only增量, initial全量)，默认为initial
 */
class SQLServerParam extends AbstractModel
{
    /**
     * @var string SQLServer的数据库名称
     */
    public $Database;

    /**
     * @var string SQLServer的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
     */
    public $Table;

    /**
     * @var string 该SQLServer在连接管理内的Id
     */
    public $Resource;

    /**
     * @var string 复制存量信息(schema_only增量, initial全量)，默认为initial
     */
    public $SnapshotMode;

    /**
     * @param string $Database SQLServer的数据库名称
     * @param string $Table SQLServer的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
     * @param string $Resource 该SQLServer在连接管理内的Id
     * @param string $SnapshotMode 复制存量信息(schema_only增量, initial全量)，默认为initial
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
    }
}
