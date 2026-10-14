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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjectV2返回参数结构体
 *
 * @method array getIndexDDLs() 获取<p>索引 DDL 列表，每项为一条 CREATE INDEX 语句，无索引时为空数组。</p>
 * @method void setIndexDDLs(array $IndexDDLs) 设置<p>索引 DDL 列表，每项为一条 CREATE INDEX 语句，无索引时为空数组。</p>
 * @method string getTableDDL() 获取<p>建表 DDL 语句，对象不存在时为空串。</p>
 * @method void setTableDDL(string $TableDDL) 设置<p>建表 DDL 语句，对象不存在时为空串。</p>
 * @method string getTableName() 获取<p>表名。</p>
 * @method void setTableName(string $TableName) 设置<p>表名。</p>
 * @method string getTableSchema() 获取<p>库名。</p>
 * @method void setTableSchema(string $TableSchema) 设置<p>库名。</p>
 * @method TableStatistics getTableStatistics() 获取<p>表空间统计。</p>
 * @method void setTableStatistics(TableStatistics $TableStatistics) 设置<p>表空间统计。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatabaseObjectV2Response extends AbstractModel
{
    /**
     * @var array <p>索引 DDL 列表，每项为一条 CREATE INDEX 语句，无索引时为空数组。</p>
     */
    public $IndexDDLs;

    /**
     * @var string <p>建表 DDL 语句，对象不存在时为空串。</p>
     */
    public $TableDDL;

    /**
     * @var string <p>表名。</p>
     */
    public $TableName;

    /**
     * @var string <p>库名。</p>
     */
    public $TableSchema;

    /**
     * @var TableStatistics <p>表空间统计。</p>
     */
    public $TableStatistics;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IndexDDLs <p>索引 DDL 列表，每项为一条 CREATE INDEX 语句，无索引时为空数组。</p>
     * @param string $TableDDL <p>建表 DDL 语句，对象不存在时为空串。</p>
     * @param string $TableName <p>表名。</p>
     * @param string $TableSchema <p>库名。</p>
     * @param TableStatistics $TableStatistics <p>表空间统计。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IndexDDLs",$param) and $param["IndexDDLs"] !== null) {
            $this->IndexDDLs = [];
            foreach ($param["IndexDDLs"] as $key => $value){
                $obj = new IndexDDLInfo();
                $obj->deserialize($value);
                array_push($this->IndexDDLs, $obj);
            }
        }

        if (array_key_exists("TableDDL",$param) and $param["TableDDL"] !== null) {
            $this->TableDDL = $param["TableDDL"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableStatistics",$param) and $param["TableStatistics"] !== null) {
            $this->TableStatistics = new TableStatistics();
            $this->TableStatistics->deserialize($param["TableStatistics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
