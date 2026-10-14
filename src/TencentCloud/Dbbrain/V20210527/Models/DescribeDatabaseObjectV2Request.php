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
 * DescribeDatabaseObjectV2请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
 * @method string getObjectType() 获取<p>查询对象类型。</p><p>枚举值：</p><ul><li>TableDDL： 建表+索引DDL</li><li>TableStatistics： 表空间统计</li></ul>
 * @method void setObjectType(string $ObjectType) 设置<p>查询对象类型。</p><p>枚举值：</p><ul><li>TableDDL： 建表+索引DDL</li><li>TableStatistics： 表空间统计</li></ul>
 * @method string getInstanceId() 获取<p>实例 ID。SQLServer: mssql-xxxx。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。SQLServer: mssql-xxxx。</p>
 * @method string getTableSchema() 获取<p>库名（catalog）。TableStatistics 时必填；TableDDL 时可选。</p>
 * @method void setTableSchema(string $TableSchema) 设置<p>库名（catalog）。TableStatistics 时必填；TableDDL 时可选。</p>
 * @method string getTableName() 获取<p>当产品为sqlserver时，表名/视图名，支持 schema.table 格式，未带 schema 默认 dbo</p>
 * @method void setTableName(string $TableName) 设置<p>当产品为sqlserver时，表名/视图名，支持 schema.table 格式，未带 schema 默认 dbo</p>
 */
class DescribeDatabaseObjectV2Request extends AbstractModel
{
    /**
     * @var string <p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
     */
    public $Product;

    /**
     * @var string <p>查询对象类型。</p><p>枚举值：</p><ul><li>TableDDL： 建表+索引DDL</li><li>TableStatistics： 表空间统计</li></ul>
     */
    public $ObjectType;

    /**
     * @var string <p>实例 ID。SQLServer: mssql-xxxx。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>库名（catalog）。TableStatistics 时必填；TableDDL 时可选。</p>
     */
    public $TableSchema;

    /**
     * @var string <p>当产品为sqlserver时，表名/视图名，支持 schema.table 格式，未带 schema 默认 dbo</p>
     */
    public $TableName;

    /**
     * @param string $Product <p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
     * @param string $ObjectType <p>查询对象类型。</p><p>枚举值：</p><ul><li>TableDDL： 建表+索引DDL</li><li>TableStatistics： 表空间统计</li></ul>
     * @param string $InstanceId <p>实例 ID。SQLServer: mssql-xxxx。</p>
     * @param string $TableSchema <p>库名（catalog）。TableStatistics 时必填；TableDDL 时可选。</p>
     * @param string $TableName <p>当产品为sqlserver时，表名/视图名，支持 schema.table 格式，未带 schema 默认 dbo</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
