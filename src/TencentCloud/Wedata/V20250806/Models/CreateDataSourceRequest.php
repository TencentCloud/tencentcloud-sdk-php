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
 * CreateDataSource请求参数结构体
 *
 * @method string getProjectId() 获取数据源项目ID
 * @method void setProjectId(string $ProjectId) 设置数据源项目ID
 * @method string getName() 获取数据源名称
 * @method void setName(string $Name) 设置数据源名称
 * @method string getType() 获取数据源类型:枚举值

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
- DTS_KAFKA
- HBASE
- SPARK
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
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
- S3_DATAINSIGHT
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
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
- TDSQL_POSTGRE
- GDB
- TDENGINE
- TDSQLC
- FileSystem

 * @method void setType(string $Type) 设置数据源类型:枚举值

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
- DTS_KAFKA
- HBASE
- SPARK
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
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
- S3_DATAINSIGHT
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
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
- TDSQL_POSTGRE
- GDB
- TDENGINE
- TDSQLC
- FileSystem

 * @method string getProdConProperties() 获取数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同

> deployType: 
CONNSTR_PUBLICDB(公网实例) 
CONNSTR_CVMDB(自建实例)
INSTANCE(云实例)

```
mysql: 自建实例
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/database",
    "username": "root",
    "password": "root",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: 云实例
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "mysql",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;DatabaseName=database",
    "username": "user_1",
    "password": "pass_2",
    "type": "SQLSERVER"
}
redis:
    redisType:
    -NO_ACCOUT(免账号)
    -SELF_ACCOUNT(自定义账号)
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "pass",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:prod",
    "username": "oracle",
    "password": "pass",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
    advanceParams(自定义参数，会拼接至url后)
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "pass",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/database",
    "username": "user",
    "password": "pass",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "sssssss",
    "bucket": "aaa",
    "type": "COS"
}

```
 * @method void setProdConProperties(string $ProdConProperties) 设置数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同

> deployType: 
CONNSTR_PUBLICDB(公网实例) 
CONNSTR_CVMDB(自建实例)
INSTANCE(云实例)

```
mysql: 自建实例
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/database",
    "username": "root",
    "password": "root",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: 云实例
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "mysql",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;DatabaseName=database",
    "username": "user_1",
    "password": "pass_2",
    "type": "SQLSERVER"
}
redis:
    redisType:
    -NO_ACCOUT(免账号)
    -SELF_ACCOUNT(自定义账号)
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "pass",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:prod",
    "username": "oracle",
    "password": "pass",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
    advanceParams(自定义参数，会拼接至url后)
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "pass",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/database",
    "username": "user",
    "password": "pass",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "sssssss",
    "bucket": "aaa",
    "type": "COS"
}

```
 * @method string getDevConProperties() 获取开发环境数据源配置信息，若项目为标准模式，则此字段必填
 * @method void setDevConProperties(string $DevConProperties) 设置开发环境数据源配置信息，若项目为标准模式，则此字段必填
 * @method DataSourceFileUpload getProdFileUpload() 获取生产环境数据源文件上传
 * @method void setProdFileUpload(DataSourceFileUpload $ProdFileUpload) 设置生产环境数据源文件上传
 * @method DataSourceFileUpload getDevFileUpload() 获取开发环境数据源文件上传
 * @method void setDevFileUpload(DataSourceFileUpload $DevFileUpload) 设置开发环境数据源文件上传
 * @method string getDisplayName() 获取数据源展示名，为了可视化查看
 * @method void setDisplayName(string $DisplayName) 设置数据源展示名，为了可视化查看
 * @method string getDescription() 获取数据源描述信息
 * @method void setDescription(string $Description) 设置数据源描述信息
 */
class CreateDataSourceRequest extends AbstractModel
{
    /**
     * @var string 数据源项目ID
     */
    public $ProjectId;

    /**
     * @var string 数据源名称
     */
    public $Name;

    /**
     * @var string 数据源类型:枚举值

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
- DTS_KAFKA
- HBASE
- SPARK
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
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
- S3_DATAINSIGHT
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
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
- TDSQL_POSTGRE
- GDB
- TDENGINE
- TDSQLC
- FileSystem

     */
    public $Type;

    /**
     * @var string 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同

> deployType: 
CONNSTR_PUBLICDB(公网实例) 
CONNSTR_CVMDB(自建实例)
INSTANCE(云实例)

```
mysql: 自建实例
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/database",
    "username": "root",
    "password": "root",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: 云实例
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "mysql",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;DatabaseName=database",
    "username": "user_1",
    "password": "pass_2",
    "type": "SQLSERVER"
}
redis:
    redisType:
    -NO_ACCOUT(免账号)
    -SELF_ACCOUNT(自定义账号)
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "pass",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:prod",
    "username": "oracle",
    "password": "pass",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
    advanceParams(自定义参数，会拼接至url后)
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "pass",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/database",
    "username": "user",
    "password": "pass",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "sssssss",
    "bucket": "aaa",
    "type": "COS"
}

```
     */
    public $ProdConProperties;

    /**
     * @var string 开发环境数据源配置信息，若项目为标准模式，则此字段必填
     */
    public $DevConProperties;

    /**
     * @var DataSourceFileUpload 生产环境数据源文件上传
     */
    public $ProdFileUpload;

    /**
     * @var DataSourceFileUpload 开发环境数据源文件上传
     */
    public $DevFileUpload;

    /**
     * @var string 数据源展示名，为了可视化查看
     */
    public $DisplayName;

    /**
     * @var string 数据源描述信息
     */
    public $Description;

    /**
     * @param string $ProjectId 数据源项目ID
     * @param string $Name 数据源名称
     * @param string $Type 数据源类型:枚举值

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
- DTS_KAFKA
- HBASE
- SPARK
- TBASE
- DB2
- DM
- GAUSSDB
- GBASE
- IMPALA
- ES
- TENCENT_ES
- GREENPLUM
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
- S3_DATAINSIGHT
- TDSQL
- TDSQL_MYSQL
- MONGODB
- TENCENT_MONGODB
- REST_API
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
- TDSQL_POSTGRE
- GDB
- TDENGINE
- TDSQLC
- FileSystem

     * @param string $ProdConProperties 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同

> deployType: 
CONNSTR_PUBLICDB(公网实例) 
CONNSTR_CVMDB(自建实例)
INSTANCE(云实例)

```
mysql: 自建实例
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/database",
    "username": "root",
    "password": "root",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: 云实例
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "mysql",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;DatabaseName=database",
    "username": "user_1",
    "password": "pass_2",
    "type": "SQLSERVER"
}
redis:
    redisType:
    -NO_ACCOUT(免账号)
    -SELF_ACCOUNT(自定义账号)
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "pass",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:prod",
    "username": "oracle",
    "password": "pass",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
    advanceParams(自定义参数，会拼接至url后)
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "pass",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/database",
    "username": "user",
    "password": "pass",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "sssssss",
    "bucket": "aaa",
    "type": "COS"
}

```
     * @param string $DevConProperties 开发环境数据源配置信息，若项目为标准模式，则此字段必填
     * @param DataSourceFileUpload $ProdFileUpload 生产环境数据源文件上传
     * @param DataSourceFileUpload $DevFileUpload 开发环境数据源文件上传
     * @param string $DisplayName 数据源展示名，为了可视化查看
     * @param string $Description 数据源描述信息
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProdConProperties",$param) and $param["ProdConProperties"] !== null) {
            $this->ProdConProperties = $param["ProdConProperties"];
        }

        if (array_key_exists("DevConProperties",$param) and $param["DevConProperties"] !== null) {
            $this->DevConProperties = $param["DevConProperties"];
        }

        if (array_key_exists("ProdFileUpload",$param) and $param["ProdFileUpload"] !== null) {
            $this->ProdFileUpload = new DataSourceFileUpload();
            $this->ProdFileUpload->deserialize($param["ProdFileUpload"]);
        }

        if (array_key_exists("DevFileUpload",$param) and $param["DevFileUpload"] !== null) {
            $this->DevFileUpload = new DataSourceFileUpload();
            $this->DevFileUpload->deserialize($param["DevFileUpload"]);
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
