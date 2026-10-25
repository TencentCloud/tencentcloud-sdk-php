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
 * DescribeTableSpaceDataV2请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>服务产品类型（用于云 API 平台路由到对应产品后端）。取值：mysql / cynosdb / mariadb / postgres / mongodb / sqlserver 等。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型（用于云 API 平台路由到对应产品后端）。取值：mysql / cynosdb / mariadb / postgres / mongodb / sqlserver 等。</p>
 * @method string getTableSchema() 获取<p>数据库名（PG 系产品的 schema 名；MongoDB 为 database 名；MySQL / CynosDB / SqlServer 为库名）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层使用 optString(&quot;&quot;), 不传时按空库名查询）。</p>
 * @method void setTableSchema(string $TableSchema) 设置<p>数据库名（PG 系产品的 schema 名；MongoDB 为 database 名；MySQL / CynosDB / SqlServer 为库名）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层使用 optString(&quot;&quot;), 不传时按空库名查询）。</p>
 * @method string getTableName() 获取<p>表名（MongoDB 场景下为 collection 名，如 oplog.rs）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层对该字段为空时直接返回空列表而非报错）。</p>
 * @method void setTableName(string $TableName) 设置<p>表名（MongoDB 场景下为 collection 名，如 oplog.rs）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层对该字段为空时直接返回空列表而非报错）。</p>
 * @method string getTableCatalog() 获取<p>表所在的 Catalog（数据库目录）名。PostgreSQL / TBase 等 PG 系产品必传（例如 postgres），用于唯一定位 (catalog, schema, name) 三元组；MySQL / CynosDB / MongoDB / SqlServer 等非 PG 系产品可不传。</p>
 * @method void setTableCatalog(string $TableCatalog) 设置<p>表所在的 Catalog（数据库目录）名。PostgreSQL / TBase 等 PG 系产品必传（例如 postgres），用于唯一定位 (catalog, schema, name) 三元组；MySQL / CynosDB / MongoDB / SqlServer 等非 PG 系产品可不传。</p>
 * @method string getDate() 获取<p>查询日期，格式：yyyy-MM-dd。MySQL / CynosDB / PostgreSQL / SqlServer 可选（默认当天）；MongoDB 本接口不读取该字段（底层通过 dbbrain.collInfo 直接查询实时集合空间，不区分日期）。</p>
 * @method void setDate(string $Date) 设置<p>查询日期，格式：yyyy-MM-dd。MySQL / CynosDB / PostgreSQL / SqlServer 可选（默认当天）；MongoDB 本接口不读取该字段（底层通过 dbbrain.collInfo 直接查询实时集合空间，不区分日期）。</p>
 * @method string getSortBy() 获取<p>排序字段。本接口（单表/单集合明细查询）均为可选：MySQL / CynosDB 可选，默认按 total_length 排序；PostgreSQL 可选，默认按 relation_size 排序；SqlServer 本接口不消费该字段的值；MongoDB 本接口完全不读取该字段。如需在 Top 表/库场景使用排序，请改用 DescribeTopSpaceTablesV2 / DescribeTopSpaceSchemasV2 接口。</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段。本接口（单表/单集合明细查询）均为可选：MySQL / CynosDB 可选，默认按 total_length 排序；PostgreSQL 可选，默认按 relation_size 排序；SqlServer 本接口不消费该字段的值；MongoDB 本接口完全不读取该字段。如需在 Top 表/库场景使用排序，请改用 DescribeTopSpaceTablesV2 / DescribeTopSpaceSchemasV2 接口。</p>
 * @method integer getLimit() 获取<p>返回条数上限，默认 20，最大 100。MySQL / CynosDB / PostgreSQL 本接口会读取该参数控制明细条数；MongoDB 本接口不读取该字段（底层按入参 TableName 精确匹配返回集合明细，不受 Limit 控制）；SqlServer 本接口会校验但不消费其值。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数上限，默认 20，最大 100。MySQL / CynosDB / PostgreSQL 本接口会读取该参数控制明细条数；MongoDB 本接口不读取该字段（底层按入参 TableName 精确匹配返回集合明细，不受 Limit 控制）；SqlServer 本接口会校验但不消费其值。</p>
 * @method boolean getRegex() 获取<p>MongoDB 专用——表名/集合名是否按正则模糊匹配。默认 true。其他产品忽略该字段。</p>
 * @method void setRegex(boolean $Regex) 设置<p>MongoDB 专用——表名/集合名是否按正则模糊匹配。默认 true。其他产品忽略该字段。</p>
 */
class DescribeTableSpaceDataV2Request extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型（用于云 API 平台路由到对应产品后端）。取值：mysql / cynosdb / mariadb / postgres / mongodb / sqlserver 等。</p>
     */
    public $Product;

    /**
     * @var string <p>数据库名（PG 系产品的 schema 名；MongoDB 为 database 名；MySQL / CynosDB / SqlServer 为库名）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层使用 optString(&quot;&quot;), 不传时按空库名查询）。</p>
     */
    public $TableSchema;

    /**
     * @var string <p>表名（MongoDB 场景下为 collection 名，如 oplog.rs）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层对该字段为空时直接返回空列表而非报错）。</p>
     */
    public $TableName;

    /**
     * @var string <p>表所在的 Catalog（数据库目录）名。PostgreSQL / TBase 等 PG 系产品必传（例如 postgres），用于唯一定位 (catalog, schema, name) 三元组；MySQL / CynosDB / MongoDB / SqlServer 等非 PG 系产品可不传。</p>
     */
    public $TableCatalog;

    /**
     * @var string <p>查询日期，格式：yyyy-MM-dd。MySQL / CynosDB / PostgreSQL / SqlServer 可选（默认当天）；MongoDB 本接口不读取该字段（底层通过 dbbrain.collInfo 直接查询实时集合空间，不区分日期）。</p>
     */
    public $Date;

    /**
     * @var string <p>排序字段。本接口（单表/单集合明细查询）均为可选：MySQL / CynosDB 可选，默认按 total_length 排序；PostgreSQL 可选，默认按 relation_size 排序；SqlServer 本接口不消费该字段的值；MongoDB 本接口完全不读取该字段。如需在 Top 表/库场景使用排序，请改用 DescribeTopSpaceTablesV2 / DescribeTopSpaceSchemasV2 接口。</p>
     */
    public $SortBy;

    /**
     * @var integer <p>返回条数上限，默认 20，最大 100。MySQL / CynosDB / PostgreSQL 本接口会读取该参数控制明细条数；MongoDB 本接口不读取该字段（底层按入参 TableName 精确匹配返回集合明细，不受 Limit 控制）；SqlServer 本接口会校验但不消费其值。</p>
     */
    public $Limit;

    /**
     * @var boolean <p>MongoDB 专用——表名/集合名是否按正则模糊匹配。默认 true。其他产品忽略该字段。</p>
     */
    public $Regex;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>服务产品类型（用于云 API 平台路由到对应产品后端）。取值：mysql / cynosdb / mariadb / postgres / mongodb / sqlserver 等。</p>
     * @param string $TableSchema <p>数据库名（PG 系产品的 schema 名；MongoDB 为 database 名；MySQL / CynosDB / SqlServer 为库名）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层使用 optString(&quot;&quot;), 不传时按空库名查询）。</p>
     * @param string $TableName <p>表名（MongoDB 场景下为 collection 名，如 oplog.rs）。PostgreSQL / MySQL / CynosDB / SqlServer 必传；MongoDB 可不传（底层对该字段为空时直接返回空列表而非报错）。</p>
     * @param string $TableCatalog <p>表所在的 Catalog（数据库目录）名。PostgreSQL / TBase 等 PG 系产品必传（例如 postgres），用于唯一定位 (catalog, schema, name) 三元组；MySQL / CynosDB / MongoDB / SqlServer 等非 PG 系产品可不传。</p>
     * @param string $Date <p>查询日期，格式：yyyy-MM-dd。MySQL / CynosDB / PostgreSQL / SqlServer 可选（默认当天）；MongoDB 本接口不读取该字段（底层通过 dbbrain.collInfo 直接查询实时集合空间，不区分日期）。</p>
     * @param string $SortBy <p>排序字段。本接口（单表/单集合明细查询）均为可选：MySQL / CynosDB 可选，默认按 total_length 排序；PostgreSQL 可选，默认按 relation_size 排序；SqlServer 本接口不消费该字段的值；MongoDB 本接口完全不读取该字段。如需在 Top 表/库场景使用排序，请改用 DescribeTopSpaceTablesV2 / DescribeTopSpaceSchemasV2 接口。</p>
     * @param integer $Limit <p>返回条数上限，默认 20，最大 100。MySQL / CynosDB / PostgreSQL 本接口会读取该参数控制明细条数；MongoDB 本接口不读取该字段（底层按入参 TableName 精确匹配返回集合明细，不受 Limit 控制）；SqlServer 本接口会校验但不消费其值。</p>
     * @param boolean $Regex <p>MongoDB 专用——表名/集合名是否按正则模糊匹配。默认 true。其他产品忽略该字段。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableCatalog",$param) and $param["TableCatalog"] !== null) {
            $this->TableCatalog = $param["TableCatalog"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}
