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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDMSPartitions请求参数结构体
 *
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method array getValues() 获取单个分区名称，精准匹配
 * @method void setValues(array $Values) 设置单个分区名称，精准匹配
 * @method array getPartitionNames() 获取多个分区名称，精准匹配
 * @method void setPartitionNames(array $PartitionNames) 设置多个分区名称，精准匹配
 * @method array getPartValues() 获取多个分区字段的匹配，模糊匹配
 * @method void setPartValues(array $PartValues) 设置多个分区字段的匹配，模糊匹配
 * @method string getFilter() 获取过滤SQL
 * @method void setFilter(string $Filter) 设置过滤SQL
 * @method integer getMaxParts() 获取最大分区数量
 * @method void setMaxParts(integer $MaxParts) 设置最大分区数量
 * @method integer getOffset() 获取翻页跳过数量
 * @method void setOffset(integer $Offset) 设置翻页跳过数量
 * @method integer getLimit() 获取页面数量
 * @method void setLimit(integer $Limit) 设置页面数量
 * @method string getExpression() 获取表达式
 * @method void setExpression(string $Expression) 设置表达式
 */
class DescribeDMSPartitionsRequest extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var array 单个分区名称，精准匹配
     */
    public $Values;

    /**
     * @var array 多个分区名称，精准匹配
     */
    public $PartitionNames;

    /**
     * @var array 多个分区字段的匹配，模糊匹配
     */
    public $PartValues;

    /**
     * @var string 过滤SQL
     */
    public $Filter;

    /**
     * @var integer 最大分区数量
     */
    public $MaxParts;

    /**
     * @var integer 翻页跳过数量
     */
    public $Offset;

    /**
     * @var integer 页面数量
     */
    public $Limit;

    /**
     * @var string 表达式
     */
    public $Expression;

    /**
     * @param string $DatabaseName 数据库名
     * @param string $TableName 表名称
     * @param string $SchemaName schema名称
     * @param string $Name 名称
     * @param array $Values 单个分区名称，精准匹配
     * @param array $PartitionNames 多个分区名称，精准匹配
     * @param array $PartValues 多个分区字段的匹配，模糊匹配
     * @param string $Filter 过滤SQL
     * @param integer $MaxParts 最大分区数量
     * @param integer $Offset 翻页跳过数量
     * @param integer $Limit 页面数量
     * @param string $Expression 表达式
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("PartitionNames",$param) and $param["PartitionNames"] !== null) {
            $this->PartitionNames = $param["PartitionNames"];
        }

        if (array_key_exists("PartValues",$param) and $param["PartValues"] !== null) {
            $this->PartValues = $param["PartValues"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("MaxParts",$param) and $param["MaxParts"] !== null) {
            $this->MaxParts = $param["MaxParts"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }
    }
}
