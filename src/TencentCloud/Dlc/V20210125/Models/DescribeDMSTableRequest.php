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
 * DescribeDMSTable请求参数结构体
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getSchemaName() 获取数据库schema名称
 * @method void setSchemaName(string $SchemaName) 设置数据库schema名称
 * @method string getName() 获取表名称
 * @method void setName(string $Name) 设置表名称
 * @method string getCatalog() 获取数据目录
 * @method void setCatalog(string $Catalog) 设置数据目录
 * @method string getKeyword() 获取查询关键词
 * @method void setKeyword(string $Keyword) 设置查询关键词
 * @method string getPattern() 获取查询模式
 * @method void setPattern(string $Pattern) 设置查询模式
 * @method string getType() 获取表类型
 * @method void setType(string $Type) 设置表类型
 */
class DescribeDMSTableRequest extends AbstractModel
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
     * @var string 数据目录
     */
    public $Catalog;

    /**
     * @var string 查询关键词
     */
    public $Keyword;

    /**
     * @var string 查询模式
     */
    public $Pattern;

    /**
     * @var string 表类型
     */
    public $Type;

    /**
     * @param string $DbName 数据库名称
     * @param string $SchemaName 数据库schema名称
     * @param string $Name 表名称
     * @param string $Catalog 数据目录
     * @param string $Keyword 查询关键词
     * @param string $Pattern 查询模式
     * @param string $Type 表类型
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
    }
}
