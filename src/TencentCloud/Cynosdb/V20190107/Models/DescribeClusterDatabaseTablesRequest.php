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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterDatabaseTables请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getDb() 获取数据库名
 * @method void setDb(string $Db) 设置数据库名
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取个数
 * @method void setLimit(integer $Limit) 设置个数
 * @method string getTableType() 获取数据表类型。
"view"表示只返回 view，"base_table" 表示只返回基本表，"all" 表示返回 view 和表。默认为 all。
 * @method void setTableType(string $TableType) 设置数据表类型。
"view"表示只返回 view，"base_table" 表示只返回基本表，"all" 表示返回 view 和表。默认为 all。
 */
class DescribeClusterDatabaseTablesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 数据库名
     */
    public $Db;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 个数
     */
    public $Limit;

    /**
     * @var string 数据表类型。
"view"表示只返回 view，"base_table" 表示只返回基本表，"all" 表示返回 view 和表。默认为 all。
     */
    public $TableType;

    /**
     * @param string $ClusterId 集群id
     * @param string $Db 数据库名
     * @param integer $Offset 偏移
     * @param integer $Limit 个数
     * @param string $TableType 数据表类型。
"view"表示只返回 view，"base_table" 表示只返回基本表，"all" 表示返回 view 和表。默认为 all。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
