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
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method integer getPageSize() 获取<p>返回数量，默认10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>返回数量，默认10</p>
 * @method integer getPageNumber() 获取<p>页码，默认1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，默认1</p>
 * @method string getName() 获取<p>数据源名称</p>
 * @method void setName(string $Name) 设置<p>数据源名称</p>
 * @method string getDisplayName() 获取<p>数据源展示名</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>数据源展示名</p>
 * @method array getType() 获取<p>数据源类型:枚举值</p><ul><li>MYSQL</li><li>TENCENT_MYSQL</li><li>POSTGRE</li><li>ORACLE</li><li>SQLSERVER</li><li>FTP</li><li>HIVE</li><li>HUDI</li><li>HDFS</li><li>ICEBERG</li><li>KAFKA</li><li>HBASE</li><li>SPARK</li><li>VIRTUAL</li><li>TBASE</li><li>DB2</li><li>DM</li><li>GAUSSDB</li><li>GBASE</li><li>IMPALA</li><li>ES</li><li>TENCENT_ES</li><li>GREENPLUM</li><li>PHOENIX</li><li>SAP_HANA</li><li>SFTP</li><li>OCEANBASE</li><li>CLICKHOUSE</li><li>KUDU</li><li>VERTICA</li><li>REDIS</li><li>COS</li><li>DLC</li><li>DORIS</li><li>CKAFKA</li><li>S3</li><li>TDSQL</li><li>TDSQL_MYSQL</li><li>MONGODB</li><li>TENCENT_MONGODB</li><li>REST_API</li><li>SuperSQL</li><li>PRESTO</li><li>TiDB</li><li>StarRocks</li><li>Trino</li><li>Kyuubi</li><li>TCHOUSE_X</li><li>TCHOUSE_P</li><li>TCHOUSE_C</li><li>TCHOUSE_D</li><li>INFLUXDB</li><li>BIG_QUERY</li><li>SSH</li><li>BLOB</li></ul>
 * @method void setType(array $Type) 设置<p>数据源类型:枚举值</p><ul><li>MYSQL</li><li>TENCENT_MYSQL</li><li>POSTGRE</li><li>ORACLE</li><li>SQLSERVER</li><li>FTP</li><li>HIVE</li><li>HUDI</li><li>HDFS</li><li>ICEBERG</li><li>KAFKA</li><li>HBASE</li><li>SPARK</li><li>VIRTUAL</li><li>TBASE</li><li>DB2</li><li>DM</li><li>GAUSSDB</li><li>GBASE</li><li>IMPALA</li><li>ES</li><li>TENCENT_ES</li><li>GREENPLUM</li><li>PHOENIX</li><li>SAP_HANA</li><li>SFTP</li><li>OCEANBASE</li><li>CLICKHOUSE</li><li>KUDU</li><li>VERTICA</li><li>REDIS</li><li>COS</li><li>DLC</li><li>DORIS</li><li>CKAFKA</li><li>S3</li><li>TDSQL</li><li>TDSQL_MYSQL</li><li>MONGODB</li><li>TENCENT_MONGODB</li><li>REST_API</li><li>SuperSQL</li><li>PRESTO</li><li>TiDB</li><li>StarRocks</li><li>Trino</li><li>Kyuubi</li><li>TCHOUSE_X</li><li>TCHOUSE_P</li><li>TCHOUSE_C</li><li>TCHOUSE_D</li><li>INFLUXDB</li><li>BIG_QUERY</li><li>SSH</li><li>BLOB</li></ul>
 * @method string getCreator() 获取<p>创建人</p>
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
 */
class ListDataSourcesRequest extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>返回数量，默认10</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页码，默认1</p>
     */
    public $PageNumber;

    /**
     * @var string <p>数据源名称</p>
     */
    public $Name;

    /**
     * @var string <p>数据源展示名</p>
     */
    public $DisplayName;

    /**
     * @var array <p>数据源类型:枚举值</p><ul><li>MYSQL</li><li>TENCENT_MYSQL</li><li>POSTGRE</li><li>ORACLE</li><li>SQLSERVER</li><li>FTP</li><li>HIVE</li><li>HUDI</li><li>HDFS</li><li>ICEBERG</li><li>KAFKA</li><li>HBASE</li><li>SPARK</li><li>VIRTUAL</li><li>TBASE</li><li>DB2</li><li>DM</li><li>GAUSSDB</li><li>GBASE</li><li>IMPALA</li><li>ES</li><li>TENCENT_ES</li><li>GREENPLUM</li><li>PHOENIX</li><li>SAP_HANA</li><li>SFTP</li><li>OCEANBASE</li><li>CLICKHOUSE</li><li>KUDU</li><li>VERTICA</li><li>REDIS</li><li>COS</li><li>DLC</li><li>DORIS</li><li>CKAFKA</li><li>S3</li><li>TDSQL</li><li>TDSQL_MYSQL</li><li>MONGODB</li><li>TENCENT_MONGODB</li><li>REST_API</li><li>SuperSQL</li><li>PRESTO</li><li>TiDB</li><li>StarRocks</li><li>Trino</li><li>Kyuubi</li><li>TCHOUSE_X</li><li>TCHOUSE_P</li><li>TCHOUSE_C</li><li>TCHOUSE_D</li><li>INFLUXDB</li><li>BIG_QUERY</li><li>SSH</li><li>BLOB</li></ul>
     */
    public $Type;

    /**
     * @var string <p>创建人</p>
     */
    public $Creator;

    /**
     * @param string $ProjectId <p>项目id</p>
     * @param integer $PageSize <p>返回数量，默认10</p>
     * @param integer $PageNumber <p>页码，默认1</p>
     * @param string $Name <p>数据源名称</p>
     * @param string $DisplayName <p>数据源展示名</p>
     * @param array $Type <p>数据源类型:枚举值</p><ul><li>MYSQL</li><li>TENCENT_MYSQL</li><li>POSTGRE</li><li>ORACLE</li><li>SQLSERVER</li><li>FTP</li><li>HIVE</li><li>HUDI</li><li>HDFS</li><li>ICEBERG</li><li>KAFKA</li><li>HBASE</li><li>SPARK</li><li>VIRTUAL</li><li>TBASE</li><li>DB2</li><li>DM</li><li>GAUSSDB</li><li>GBASE</li><li>IMPALA</li><li>ES</li><li>TENCENT_ES</li><li>GREENPLUM</li><li>PHOENIX</li><li>SAP_HANA</li><li>SFTP</li><li>OCEANBASE</li><li>CLICKHOUSE</li><li>KUDU</li><li>VERTICA</li><li>REDIS</li><li>COS</li><li>DLC</li><li>DORIS</li><li>CKAFKA</li><li>S3</li><li>TDSQL</li><li>TDSQL_MYSQL</li><li>MONGODB</li><li>TENCENT_MONGODB</li><li>REST_API</li><li>SuperSQL</li><li>PRESTO</li><li>TiDB</li><li>StarRocks</li><li>Trino</li><li>Kyuubi</li><li>TCHOUSE_X</li><li>TCHOUSE_P</li><li>TCHOUSE_C</li><li>TCHOUSE_D</li><li>INFLUXDB</li><li>BIG_QUERY</li><li>SSH</li><li>BLOB</li></ul>
     * @param string $Creator <p>创建人</p>
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
