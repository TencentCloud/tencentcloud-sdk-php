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
 * @method string getJobId() 获取<p>迁移任务 Id</p>
 * @method void setJobId(string $JobId) 设置<p>迁移任务 Id</p>
 * @method string getCompareTaskId() 获取<p>校验任务 Id</p>
 * @method void setCompareTaskId(string $CompareTaskId) 设置<p>校验任务 Id</p>
 * @method string getDBName() 获取<p>数据库名</p>
 * @method void setDBName(string $DBName) 设置<p>数据库名</p>
 * @method string getSchemaName() 获取<p>schema名</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名</p>
 * @method string getTableName() 获取<p>数据表名</p>
 * @method void setTableName(string $TableName) 设置<p>数据表名</p>
 * @method integer getChunkId() 获取<p>数据分块号</p>
 * @method void setChunkId(integer $ChunkId) 设置<p>数据分块号</p>
 * @method integer getLimit() 获取<p>分页条件，查询结果返回条数</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条件，查询结果返回条数</p>
 * @method integer getOffset() 获取<p>分页条件，查询的起始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>分页条件，查询的起始位置</p>
 */
class DescribeCompareDiffItemsRequest extends AbstractModel
{
    /**
     * @var string <p>迁移任务 Id</p>
     */
    public $JobId;

    /**
     * @var string <p>校验任务 Id</p>
     */
    public $CompareTaskId;

    /**
     * @var string <p>数据库名</p>
     */
    public $DBName;

    /**
     * @var string <p>schema名</p>
     */
    public $SchemaName;

    /**
     * @var string <p>数据表名</p>
     */
    public $TableName;

    /**
     * @var integer <p>数据分块号</p>
     */
    public $ChunkId;

    /**
     * @var integer <p>分页条件，查询结果返回条数</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页条件，查询的起始位置</p>
     */
    public $Offset;

    /**
     * @param string $JobId <p>迁移任务 Id</p>
     * @param string $CompareTaskId <p>校验任务 Id</p>
     * @param string $DBName <p>数据库名</p>
     * @param string $SchemaName <p>schema名</p>
     * @param string $TableName <p>数据表名</p>
     * @param integer $ChunkId <p>数据分块号</p>
     * @param integer $Limit <p>分页条件，查询结果返回条数</p>
     * @param integer $Offset <p>分页条件，查询的起始位置</p>
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
