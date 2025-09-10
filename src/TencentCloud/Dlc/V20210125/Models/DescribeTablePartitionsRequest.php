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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTablePartitions请求参数结构体
 *
 * @method string getCatalog() 获取数据目录名称
 * @method void setCatalog(string $Catalog) 设置数据目录名称
 * @method string getDatabase() 获取数据库名称
 * @method void setDatabase(string $Database) 设置数据库名称
 * @method string getTable() 获取数据表名称
 * @method void setTable(string $Table) 设置数据表名称
 * @method integer getOffset() 获取查询偏移位置
 * @method void setOffset(integer $Offset) 设置查询偏移位置
 * @method integer getLimit() 获取当次查询的数量限制
 * @method void setLimit(integer $Limit) 设置当次查询的数量限制
 * @method string getFuzzyPartition() 获取模糊查询的分区名称
 * @method void setFuzzyPartition(string $FuzzyPartition) 设置模糊查询的分区名称
 * @method array getSorts() 获取排序信息
 * @method void setSorts(array $Sorts) 设置排序信息
 * @method string getCursor() 获取分页查询的游标信息
 * @method void setCursor(string $Cursor) 设置分页查询的游标信息
 */
class DescribeTablePartitionsRequest extends AbstractModel
{
    /**
     * @var string 数据目录名称
     */
    public $Catalog;

    /**
     * @var string 数据库名称
     */
    public $Database;

    /**
     * @var string 数据表名称
     */
    public $Table;

    /**
     * @var integer 查询偏移位置
     */
    public $Offset;

    /**
     * @var integer 当次查询的数量限制
     */
    public $Limit;

    /**
     * @var string 模糊查询的分区名称
     */
    public $FuzzyPartition;

    /**
     * @var array 排序信息
     */
    public $Sorts;

    /**
     * @var string 分页查询的游标信息
     */
    public $Cursor;

    /**
     * @param string $Catalog 数据目录名称
     * @param string $Database 数据库名称
     * @param string $Table 数据表名称
     * @param integer $Offset 查询偏移位置
     * @param integer $Limit 当次查询的数量限制
     * @param string $FuzzyPartition 模糊查询的分区名称
     * @param array $Sorts 排序信息
     * @param string $Cursor 分页查询的游标信息
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FuzzyPartition",$param) and $param["FuzzyPartition"] !== null) {
            $this->FuzzyPartition = $param["FuzzyPartition"];
        }

        if (array_key_exists("Sorts",$param) and $param["Sorts"] !== null) {
            $this->Sorts = [];
            foreach ($param["Sorts"] as $key => $value){
                $obj = new Sort();
                $obj->deserialize($value);
                array_push($this->Sorts, $obj);
            }
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }
    }
}
