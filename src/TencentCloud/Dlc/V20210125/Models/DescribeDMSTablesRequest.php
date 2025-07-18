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
 * DescribeDMSTables请求参数结构体
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getSchemaName() 获取数据库schema名称
 * @method void setSchemaName(string $SchemaName) 设置数据库schema名称
 * @method string getName() 获取表名称
 * @method void setName(string $Name) 设置表名称
 * @method string getCatalog() 获取catalog类型
 * @method void setCatalog(string $Catalog) 设置catalog类型
 * @method string getKeyword() 获取查询关键词
 * @method void setKeyword(string $Keyword) 设置查询关键词
 * @method string getPattern() 获取查询模式，只支持填*
 * @method void setPattern(string $Pattern) 设置查询模式，只支持填*
 * @method string getType() 获取表类型
 * @method void setType(string $Type) 设置表类型
 * @method string getStartTime() 获取筛选参数：更新开始时间
 * @method void setStartTime(string $StartTime) 设置筛选参数：更新开始时间
 * @method string getEndTime() 获取筛选参数：更新结束时间
 * @method void setEndTime(string $EndTime) 设置筛选参数：更新结束时间
 * @method integer getLimit() 获取分页参数
 * @method void setLimit(integer $Limit) 设置分页参数
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method string getSort() 获取排序字段：create_time：创建时间
 * @method void setSort(string $Sort) 设置排序字段：create_time：创建时间
 * @method boolean getAsc() 获取排序字段：true：升序（默认），false：降序
 * @method void setAsc(boolean $Asc) 设置排序字段：true：升序（默认），false：降序
 * @method string getDatasourceConnectionName() 获取数据源连接名
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源连接名
 */
class DescribeDMSTablesRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 数据库schema名称
     */
    public $SchemaName;

    /**
     * @var string 表名称
     */
    public $Name;

    /**
     * @var string catalog类型
     */
    public $Catalog;

    /**
     * @var string 查询关键词
     */
    public $Keyword;

    /**
     * @var string 查询模式，只支持填*
     */
    public $Pattern;

    /**
     * @var string 表类型
     */
    public $Type;

    /**
     * @var string 筛选参数：更新开始时间
     */
    public $StartTime;

    /**
     * @var string 筛选参数：更新结束时间
     */
    public $EndTime;

    /**
     * @var integer 分页参数
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var string 排序字段：create_time：创建时间
     */
    public $Sort;

    /**
     * @var boolean 排序字段：true：升序（默认），false：降序
     */
    public $Asc;

    /**
     * @var string 数据源连接名
     */
    public $DatasourceConnectionName;

    /**
     * @param string $DbName 数据库名称
     * @param string $SchemaName 数据库schema名称
     * @param string $Name 表名称
     * @param string $Catalog catalog类型
     * @param string $Keyword 查询关键词
     * @param string $Pattern 查询模式，只支持填*
     * @param string $Type 表类型
     * @param string $StartTime 筛选参数：更新开始时间
     * @param string $EndTime 筛选参数：更新结束时间
     * @param integer $Limit 分页参数
     * @param integer $Offset 分页参数
     * @param string $Sort 排序字段：create_time：创建时间
     * @param boolean $Asc 排序字段：true：升序（默认），false：降序
     * @param string $DatasourceConnectionName 数据源连接名
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
