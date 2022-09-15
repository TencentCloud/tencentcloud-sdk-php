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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表结构。
 *
 * @method string getTableSchema() 获取库名。
 * @method void setTableSchema(string $TableSchema) 设置库名。
 * @method string getTableName() 获取表名。
 * @method void setTableName(string $TableName) 设置表名。
 * @method string getEngine() 获取库表的存储引擎。
 * @method void setEngine(string $Engine) 设置库表的存储引擎。
 * @method integer getTableRows() 获取行数。
 * @method void setTableRows(integer $TableRows) 设置行数。
 * @method float getTotalLength() 获取总使用空间（MB）。
 * @method void setTotalLength(float $TotalLength) 设置总使用空间（MB）。
 */
class Table extends AbstractModel
{
    /**
     * @var string 库名。
     */
    public $TableSchema;

    /**
     * @var string 表名。
     */
    public $TableName;

    /**
     * @var string 库表的存储引擎。
     */
    public $Engine;

    /**
     * @var integer 行数。
     */
    public $TableRows;

    /**
     * @var float 总使用空间（MB）。
     */
    public $TotalLength;

    /**
     * @param string $TableSchema 库名。
     * @param string $TableName 表名。
     * @param string $Engine 库表的存储引擎。
     * @param integer $TableRows 行数。
     * @param float $TotalLength 总使用空间（MB）。
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
        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }

        if (array_key_exists("TotalLength",$param) and $param["TotalLength"] !== null) {
            $this->TotalLength = $param["TotalLength"];
        }
    }
}
