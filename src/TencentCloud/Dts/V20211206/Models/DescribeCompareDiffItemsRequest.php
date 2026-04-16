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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareDiffItems请求参数结构体
 *
 * @method string getJobId() 获取迁移任务 Id
 * @method void setJobId(string $JobId) 设置迁移任务 Id
 * @method string getCompareTaskId() 获取校验任务 Id
 * @method void setCompareTaskId(string $CompareTaskId) 设置校验任务 Id
 * @method string getDBName() 获取数据库名
 * @method void setDBName(string $DBName) 设置数据库名
 * @method string getSchemaName() 获取schema名
 * @method void setSchemaName(string $SchemaName) 设置schema名
 * @method string getTableName() 获取数据表名
 * @method void setTableName(string $TableName) 设置数据表名
 * @method integer getChunkId() 获取数据分块号
 * @method void setChunkId(integer $ChunkId) 设置数据分块号
 * @method integer getLimit() 获取分页条件，查询结果返回条数
 * @method void setLimit(integer $Limit) 设置分页条件，查询结果返回条数
 * @method integer getOffset() 获取分页条件，查询的起始位置
 * @method void setOffset(integer $Offset) 设置分页条件，查询的起始位置
 */
class DescribeCompareDiffItemsRequest extends AbstractModel
{
    /**
     * @var string 迁移任务 Id
     */
    public $JobId;

    /**
     * @var string 校验任务 Id
     */
    public $CompareTaskId;

    /**
     * @var string 数据库名
     */
    public $DBName;

    /**
     * @var string schema名
     */
    public $SchemaName;

    /**
     * @var string 数据表名
     */
    public $TableName;

    /**
     * @var integer 数据分块号
     */
    public $ChunkId;

    /**
     * @var integer 分页条件，查询结果返回条数
     */
    public $Limit;

    /**
     * @var integer 分页条件，查询的起始位置
     */
    public $Offset;

    /**
     * @param string $JobId 迁移任务 Id
     * @param string $CompareTaskId 校验任务 Id
     * @param string $DBName 数据库名
     * @param string $SchemaName schema名
     * @param string $TableName 数据表名
     * @param integer $ChunkId 数据分块号
     * @param integer $Limit 分页条件，查询结果返回条数
     * @param integer $Offset 分页条件，查询的起始位置
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ChunkId",$param) and $param["ChunkId"] !== null) {
            $this->ChunkId = $param["ChunkId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
