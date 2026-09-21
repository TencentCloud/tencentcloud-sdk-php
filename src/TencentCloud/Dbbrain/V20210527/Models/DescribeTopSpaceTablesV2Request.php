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
 * DescribeTopSpaceTablesV2请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。</p>
 * @method string getDate() 获取<p>查询日期，格式：yyyy-MM-dd。默认当天。</p>
 * @method void setDate(string $Date) 设置<p>查询日期，格式：yyyy-MM-dd。默认当天。</p>
 * @method string getSortBy() 获取<p>排序字段。MySQL/PG/TDSQL 系列支持：PhysicalFileSize/DataLength/IndexLength/TotalLength/DataFree/FragRatio/TableRows，默认 PhysicalFileSize。MongoDB 支持：Collection.CollectionSize/Collection.StorageSize/Collection.Size/Collection.AvgObjSize/Collection.Count/Collection.TotalIndexSize，默认 Collection.CollectionSize。</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段。MySQL/PG/TDSQL 系列支持：PhysicalFileSize/DataLength/IndexLength/TotalLength/DataFree/FragRatio/TableRows，默认 PhysicalFileSize。MongoDB 支持：Collection.CollectionSize/Collection.StorageSize/Collection.Size/Collection.AvgObjSize/Collection.Count/Collection.TotalIndexSize，默认 Collection.CollectionSize。</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大100。</p>
 */
class DescribeTopSpaceTablesV2Request extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，支持值包括：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。</p>
     */
    public $Product;

    /**
     * @var string <p>查询日期，格式：yyyy-MM-dd。默认当天。</p>
     */
    public $Date;

    /**
     * @var string <p>排序字段。MySQL/PG/TDSQL 系列支持：PhysicalFileSize/DataLength/IndexLength/TotalLength/DataFree/FragRatio/TableRows，默认 PhysicalFileSize。MongoDB 支持：Collection.CollectionSize/Collection.StorageSize/Collection.Size/Collection.AvgObjSize/Collection.Count/Collection.TotalIndexSize，默认 Collection.CollectionSize。</p>
     */
    public $SortBy;

    /**
     * @var integer <p>返回数量，默认20，最大100。</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>服务产品类型，支持值包括：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。</p>
     * @param string $Date <p>查询日期，格式：yyyy-MM-dd。默认当天。</p>
     * @param string $SortBy <p>排序字段。MySQL/PG/TDSQL 系列支持：PhysicalFileSize/DataLength/IndexLength/TotalLength/DataFree/FragRatio/TableRows，默认 PhysicalFileSize。MongoDB 支持：Collection.CollectionSize/Collection.StorageSize/Collection.Size/Collection.AvgObjSize/Collection.Count/Collection.TotalIndexSize，默认 Collection.CollectionSize。</p>
     * @param integer $Limit <p>返回数量，默认20，最大100。</p>
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
