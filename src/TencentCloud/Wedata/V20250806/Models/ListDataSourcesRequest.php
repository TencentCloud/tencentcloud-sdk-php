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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDataSources请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageSize() 获取返回数量，默认10
 * @method void setPageSize(integer $PageSize) 设置返回数量，默认10
 * @method integer getPageNumber() 获取页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认1
 * @method string getName() 获取数据源名称
 * @method void setName(string $Name) 设置数据源名称
 * @method string getDisplayName() 获取数据源展示名
 * @method void setDisplayName(string $DisplayName) 设置数据源展示名
 * @method array getType() 获取数据源类型:枚举值

- MYSQL
- TENCENT_MYSQL
- POSTGRE
- ORACLE
- SQLSERVER
- FTP
- HIVE
- HUDI
- HDFS
- ICEBERG
- KAFKA
- HBASE
- SPARK
- VIRTUAL
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
- PHOENIX
- SAP_HANA
- SFTP
- OCEANBASE
- CLICKHOUSE
- KUDU
- VERTICA
- REDIS
- COS
- DLC
- DORIS
- CKAFKA
- S3
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
- SuperSQL
- PRESTO
- TiDB
- StarRocks
- Trino
- Kyuubi
- TCHOUSE_X
- TCHOUSE_P
- TCHOUSE_C
- TCHOUSE_D
- INFLUXDB
- BIG_QUERY
- SSH
- BLOB
 * @method void setType(array $Type) 设置数据源类型:枚举值

- MYSQL
- TENCENT_MYSQL
- POSTGRE
- ORACLE
- SQLSERVER
- FTP
- HIVE
- HUDI
- HDFS
- ICEBERG
- KAFKA
- HBASE
- SPARK
- VIRTUAL
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
- PHOENIX
- SAP_HANA
- SFTP
- OCEANBASE
- CLICKHOUSE
- KUDU
- VERTICA
- REDIS
- COS
- DLC
- DORIS
- CKAFKA
- S3
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
- SuperSQL
- PRESTO
- TiDB
- StarRocks
- Trino
- Kyuubi
- TCHOUSE_X
- TCHOUSE_P
- TCHOUSE_C
- TCHOUSE_D
- INFLUXDB
- BIG_QUERY
- SSH
- BLOB
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 */
class ListDataSourcesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 返回数量，默认10
     */
    public $PageSize;

    /**
     * @var integer 页码，默认1
     */
    public $PageNumber;

    /**
     * @var string 数据源名称
     */
    public $Name;

    /**
     * @var string 数据源展示名
     */
    public $DisplayName;

    /**
     * @var array 数据源类型:枚举值

- MYSQL
- TENCENT_MYSQL
- POSTGRE
- ORACLE
- SQLSERVER
- FTP
- HIVE
- HUDI
- HDFS
- ICEBERG
- KAFKA
- HBASE
- SPARK
- VIRTUAL
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
- PHOENIX
- SAP_HANA
- SFTP
- OCEANBASE
- CLICKHOUSE
- KUDU
- VERTICA
- REDIS
- COS
- DLC
- DORIS
- CKAFKA
- S3
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
- SuperSQL
- PRESTO
- TiDB
- StarRocks
- Trino
- Kyuubi
- TCHOUSE_X
- TCHOUSE_P
- TCHOUSE_C
- TCHOUSE_D
- INFLUXDB
- BIG_QUERY
- SSH
- BLOB
     */
    public $Type;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @param string $ProjectId 项目id
     * @param integer $PageSize 返回数量，默认10
     * @param integer $PageNumber 页码，默认1
     * @param string $Name 数据源名称
     * @param string $DisplayName 数据源展示名
     * @param array $Type 数据源类型:枚举值

- MYSQL
- TENCENT_MYSQL
- POSTGRE
- ORACLE
- SQLSERVER
- FTP
- HIVE
- HUDI
- HDFS
- ICEBERG
- KAFKA
- HBASE
- SPARK
- VIRTUAL
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
- PHOENIX
- SAP_HANA
- SFTP
- OCEANBASE
- CLICKHOUSE
- KUDU
- VERTICA
- REDIS
- COS
- DLC
- DORIS
- CKAFKA
- S3
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
- SuperSQL
- PRESTO
- TiDB
- StarRocks
- Trino
- Kyuubi
- TCHOUSE_X
- TCHOUSE_P
- TCHOUSE_C
- TCHOUSE_D
- INFLUXDB
- BIG_QUERY
- SSH
- BLOB
     * @param string $Creator 创建人
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
