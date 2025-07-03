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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableMetas请求参数结构体
 *
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method array getFilters() 获取过滤字段:
dbName-数据库名称
bizCatalogIds-资产目录ID
DataLayerUuid-数仓分层ID
ownerAccount-负责人ID
assetStatus-资产状态：1-已上架 0-未上架
assetLevel-资产等级：40-核心30-重要 20-一般 10-临时 
msTypes-数据源类型：例如TENCENT_MYSQL-腾讯云MySQL，数据源类型ID可参考
[
  {
    "DisplayName": "TCHouse-P",
    "Id": "TCHOUSE_P"
  },
  {
    "DisplayName": "Iceberg",
    "Id": "ICEBERG"
  },
  {
    "DisplayName": "Hive",
    "Id": "HIVE"
  },
  {
    "DisplayName": "HBase",
    "Id": "HBASE"
  },
  {
    "DisplayName": "DLC",
    "Id": "DLC"
  },
  {
    "DisplayName": "腾讯云MySQL",
    "Id": "TENCENT_MYSQL"
  },
  {
    "DisplayName": "TCHouse-D",
    "Id": "TCHOUSE_D"
  },
  {
    "DisplayName": "TCHouse-C",
    "Id": "TCHOUSE_C"
  },
  {
    "DisplayName": "EMR StarRocks",
    "Id": "EMR_STARROCKS"
  },
  {
    "DisplayName": "Doris",
    "Id": "DORIS"
  },
  {
    "DisplayName": "MySQL",
    "Id": "MYSQL"
  },
  {
    "DisplayName": "Oracle",
    "Id": "ORACLE"
  },
  {
    "DisplayName": "PostgreSQL",
    "Id": "POSTGRE"
  },
  {
    "DisplayName": "SQL Server",
    "Id": "SQLSERVER"
  },
  {
    "DisplayName": "TDSQL PostgreSQL",
    "Id": "TDSQL_POSTGRE"
  },
  {
    "DisplayName": "Greenplum",
    "Id": "GREENPLUM"
  },
  {
    "DisplayName": "StarRocks",
    "Id": "STARROCKS"
  },
  {
    "DisplayName": "ClickHouse",
    "Id": "CLICKHOUSE"
  },
  {
    "DisplayName": "INFLUXDB",
    "Id": "INFLUXDB"
  },
  {
    "DisplayName": "达梦DM",
    "Id": "DM"
  },
  {
    "DisplayName": "OceanBase",
    "Id": "OCEANBASE"
  },
  {
    "DisplayName": "TDSQL MySQL",
    "Id": "TDSQL_MYSQL"
  },
  {
    "DisplayName": "GaussDB",
    "Id": "GAUSSDB"
  }
]
projectIds-归属项目ID
keyword-关键字，支持表名/表中文名/数据库名
 * @method void setFilters(array $Filters) 设置过滤字段:
dbName-数据库名称
bizCatalogIds-资产目录ID
DataLayerUuid-数仓分层ID
ownerAccount-负责人ID
assetStatus-资产状态：1-已上架 0-未上架
assetLevel-资产等级：40-核心30-重要 20-一般 10-临时 
msTypes-数据源类型：例如TENCENT_MYSQL-腾讯云MySQL，数据源类型ID可参考
[
  {
    "DisplayName": "TCHouse-P",
    "Id": "TCHOUSE_P"
  },
  {
    "DisplayName": "Iceberg",
    "Id": "ICEBERG"
  },
  {
    "DisplayName": "Hive",
    "Id": "HIVE"
  },
  {
    "DisplayName": "HBase",
    "Id": "HBASE"
  },
  {
    "DisplayName": "DLC",
    "Id": "DLC"
  },
  {
    "DisplayName": "腾讯云MySQL",
    "Id": "TENCENT_MYSQL"
  },
  {
    "DisplayName": "TCHouse-D",
    "Id": "TCHOUSE_D"
  },
  {
    "DisplayName": "TCHouse-C",
    "Id": "TCHOUSE_C"
  },
  {
    "DisplayName": "EMR StarRocks",
    "Id": "EMR_STARROCKS"
  },
  {
    "DisplayName": "Doris",
    "Id": "DORIS"
  },
  {
    "DisplayName": "MySQL",
    "Id": "MYSQL"
  },
  {
    "DisplayName": "Oracle",
    "Id": "ORACLE"
  },
  {
    "DisplayName": "PostgreSQL",
    "Id": "POSTGRE"
  },
  {
    "DisplayName": "SQL Server",
    "Id": "SQLSERVER"
  },
  {
    "DisplayName": "TDSQL PostgreSQL",
    "Id": "TDSQL_POSTGRE"
  },
  {
    "DisplayName": "Greenplum",
    "Id": "GREENPLUM"
  },
  {
    "DisplayName": "StarRocks",
    "Id": "STARROCKS"
  },
  {
    "DisplayName": "ClickHouse",
    "Id": "CLICKHOUSE"
  },
  {
    "DisplayName": "INFLUXDB",
    "Id": "INFLUXDB"
  },
  {
    "DisplayName": "达梦DM",
    "Id": "DM"
  },
  {
    "DisplayName": "OceanBase",
    "Id": "OCEANBASE"
  },
  {
    "DisplayName": "TDSQL MySQL",
    "Id": "TDSQL_MYSQL"
  },
  {
    "DisplayName": "GaussDB",
    "Id": "GAUSSDB"
  }
]
projectIds-归属项目ID
keyword-关键字，支持表名/表中文名/数据库名
 * @method array getOrderFields() 获取排序字段
 * @method void setOrderFields(array $OrderFields) 设置排序字段
 */
class DescribeTableMetasRequest extends AbstractModel
{
    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var array 过滤字段:
dbName-数据库名称
bizCatalogIds-资产目录ID
DataLayerUuid-数仓分层ID
ownerAccount-负责人ID
assetStatus-资产状态：1-已上架 0-未上架
assetLevel-资产等级：40-核心30-重要 20-一般 10-临时 
msTypes-数据源类型：例如TENCENT_MYSQL-腾讯云MySQL，数据源类型ID可参考
[
  {
    "DisplayName": "TCHouse-P",
    "Id": "TCHOUSE_P"
  },
  {
    "DisplayName": "Iceberg",
    "Id": "ICEBERG"
  },
  {
    "DisplayName": "Hive",
    "Id": "HIVE"
  },
  {
    "DisplayName": "HBase",
    "Id": "HBASE"
  },
  {
    "DisplayName": "DLC",
    "Id": "DLC"
  },
  {
    "DisplayName": "腾讯云MySQL",
    "Id": "TENCENT_MYSQL"
  },
  {
    "DisplayName": "TCHouse-D",
    "Id": "TCHOUSE_D"
  },
  {
    "DisplayName": "TCHouse-C",
    "Id": "TCHOUSE_C"
  },
  {
    "DisplayName": "EMR StarRocks",
    "Id": "EMR_STARROCKS"
  },
  {
    "DisplayName": "Doris",
    "Id": "DORIS"
  },
  {
    "DisplayName": "MySQL",
    "Id": "MYSQL"
  },
  {
    "DisplayName": "Oracle",
    "Id": "ORACLE"
  },
  {
    "DisplayName": "PostgreSQL",
    "Id": "POSTGRE"
  },
  {
    "DisplayName": "SQL Server",
    "Id": "SQLSERVER"
  },
  {
    "DisplayName": "TDSQL PostgreSQL",
    "Id": "TDSQL_POSTGRE"
  },
  {
    "DisplayName": "Greenplum",
    "Id": "GREENPLUM"
  },
  {
    "DisplayName": "StarRocks",
    "Id": "STARROCKS"
  },
  {
    "DisplayName": "ClickHouse",
    "Id": "CLICKHOUSE"
  },
  {
    "DisplayName": "INFLUXDB",
    "Id": "INFLUXDB"
  },
  {
    "DisplayName": "达梦DM",
    "Id": "DM"
  },
  {
    "DisplayName": "OceanBase",
    "Id": "OCEANBASE"
  },
  {
    "DisplayName": "TDSQL MySQL",
    "Id": "TDSQL_MYSQL"
  },
  {
    "DisplayName": "GaussDB",
    "Id": "GAUSSDB"
  }
]
projectIds-归属项目ID
keyword-关键字，支持表名/表中文名/数据库名
     */
    public $Filters;

    /**
     * @var array 排序字段
     */
    public $OrderFields;

    /**
     * @param integer $PageNumber 分页页码
     * @param integer $PageSize 分页大小
     * @param array $Filters 过滤字段:
dbName-数据库名称
bizCatalogIds-资产目录ID
DataLayerUuid-数仓分层ID
ownerAccount-负责人ID
assetStatus-资产状态：1-已上架 0-未上架
assetLevel-资产等级：40-核心30-重要 20-一般 10-临时 
msTypes-数据源类型：例如TENCENT_MYSQL-腾讯云MySQL，数据源类型ID可参考
[
  {
    "DisplayName": "TCHouse-P",
    "Id": "TCHOUSE_P"
  },
  {
    "DisplayName": "Iceberg",
    "Id": "ICEBERG"
  },
  {
    "DisplayName": "Hive",
    "Id": "HIVE"
  },
  {
    "DisplayName": "HBase",
    "Id": "HBASE"
  },
  {
    "DisplayName": "DLC",
    "Id": "DLC"
  },
  {
    "DisplayName": "腾讯云MySQL",
    "Id": "TENCENT_MYSQL"
  },
  {
    "DisplayName": "TCHouse-D",
    "Id": "TCHOUSE_D"
  },
  {
    "DisplayName": "TCHouse-C",
    "Id": "TCHOUSE_C"
  },
  {
    "DisplayName": "EMR StarRocks",
    "Id": "EMR_STARROCKS"
  },
  {
    "DisplayName": "Doris",
    "Id": "DORIS"
  },
  {
    "DisplayName": "MySQL",
    "Id": "MYSQL"
  },
  {
    "DisplayName": "Oracle",
    "Id": "ORACLE"
  },
  {
    "DisplayName": "PostgreSQL",
    "Id": "POSTGRE"
  },
  {
    "DisplayName": "SQL Server",
    "Id": "SQLSERVER"
  },
  {
    "DisplayName": "TDSQL PostgreSQL",
    "Id": "TDSQL_POSTGRE"
  },
  {
    "DisplayName": "Greenplum",
    "Id": "GREENPLUM"
  },
  {
    "DisplayName": "StarRocks",
    "Id": "STARROCKS"
  },
  {
    "DisplayName": "ClickHouse",
    "Id": "CLICKHOUSE"
  },
  {
    "DisplayName": "INFLUXDB",
    "Id": "INFLUXDB"
  },
  {
    "DisplayName": "达梦DM",
    "Id": "DM"
  },
  {
    "DisplayName": "OceanBase",
    "Id": "OCEANBASE"
  },
  {
    "DisplayName": "TDSQL MySQL",
    "Id": "TDSQL_MYSQL"
  },
  {
    "DisplayName": "GaussDB",
    "Id": "GAUSSDB"
  }
]
projectIds-归属项目ID
keyword-关键字，支持表名/表中文名/数据库名
     * @param array $OrderFields 排序字段
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
