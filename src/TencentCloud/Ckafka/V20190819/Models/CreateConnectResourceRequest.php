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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConnectResource请求参数结构体
 *
 * @method string getResourceName() 获取连接源名称
 * @method void setResourceName(string $ResourceName) 设置连接源名称
 * @method string getType() 获取连接源类型
 * @method void setType(string $Type) 设置连接源类型
 * @method string getDescription() 获取连接源描述
 * @method void setDescription(string $Description) 设置连接源描述
 * @method DtsConnectParam getDtsConnectParam() 获取Dts配置，Type为DTS时必填
 * @method void setDtsConnectParam(DtsConnectParam $DtsConnectParam) 设置Dts配置，Type为DTS时必填
 * @method MongoDBConnectParam getMongoDBConnectParam() 获取MongoDB配置，Type为MONGODB时必填
 * @method void setMongoDBConnectParam(MongoDBConnectParam $MongoDBConnectParam) 设置MongoDB配置，Type为MONGODB时必填
 * @method EsConnectParam getEsConnectParam() 获取Es配置，Type为ES时必填
 * @method void setEsConnectParam(EsConnectParam $EsConnectParam) 设置Es配置，Type为ES时必填
 * @method ClickHouseConnectParam getClickHouseConnectParam() 获取ClickHouse配置，Type为CLICKHOUSE时必填
 * @method void setClickHouseConnectParam(ClickHouseConnectParam $ClickHouseConnectParam) 设置ClickHouse配置，Type为CLICKHOUSE时必填
 * @method MySQLConnectParam getMySQLConnectParam() 获取MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
 * @method void setMySQLConnectParam(MySQLConnectParam $MySQLConnectParam) 设置MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
 * @method PostgreSQLConnectParam getPostgreSQLConnectParam() 获取PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
 * @method void setPostgreSQLConnectParam(PostgreSQLConnectParam $PostgreSQLConnectParam) 设置PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
 * @method MariaDBConnectParam getMariaDBConnectParam() 获取MariaDB配置，Type为MARIADB时必填
 * @method void setMariaDBConnectParam(MariaDBConnectParam $MariaDBConnectParam) 设置MariaDB配置，Type为MARIADB时必填
 * @method SQLServerConnectParam getSQLServerConnectParam() 获取SQLServer配置，Type为SQLSERVER时必填
 * @method void setSQLServerConnectParam(SQLServerConnectParam $SQLServerConnectParam) 设置SQLServer配置，Type为SQLSERVER时必填
 * @method DorisConnectParam getDorisConnectParam() 获取Doris 配置，Type为 DORIS 时必填
 * @method void setDorisConnectParam(DorisConnectParam $DorisConnectParam) 设置Doris 配置，Type为 DORIS 时必填
 */
class CreateConnectResourceRequest extends AbstractModel
{
    /**
     * @var string 连接源名称
     */
    public $ResourceName;

    /**
     * @var string 连接源类型
     */
    public $Type;

    /**
     * @var string 连接源描述
     */
    public $Description;

    /**
     * @var DtsConnectParam Dts配置，Type为DTS时必填
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBConnectParam MongoDB配置，Type为MONGODB时必填
     */
    public $MongoDBConnectParam;

    /**
     * @var EsConnectParam Es配置，Type为ES时必填
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseConnectParam ClickHouse配置，Type为CLICKHOUSE时必填
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBConnectParam MariaDB配置，Type为MARIADB时必填
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerConnectParam SQLServer配置，Type为SQLSERVER时必填
     */
    public $SQLServerConnectParam;

    /**
     * @var DorisConnectParam Doris 配置，Type为 DORIS 时必填
     */
    public $DorisConnectParam;

    /**
     * @param string $ResourceName 连接源名称
     * @param string $Type 连接源类型
     * @param string $Description 连接源描述
     * @param DtsConnectParam $DtsConnectParam Dts配置，Type为DTS时必填
     * @param MongoDBConnectParam $MongoDBConnectParam MongoDB配置，Type为MONGODB时必填
     * @param EsConnectParam $EsConnectParam Es配置，Type为ES时必填
     * @param ClickHouseConnectParam $ClickHouseConnectParam ClickHouse配置，Type为CLICKHOUSE时必填
     * @param MySQLConnectParam $MySQLConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
     * @param PostgreSQLConnectParam $PostgreSQLConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
     * @param MariaDBConnectParam $MariaDBConnectParam MariaDB配置，Type为MARIADB时必填
     * @param SQLServerConnectParam $SQLServerConnectParam SQLServer配置，Type为SQLSERVER时必填
     * @param DorisConnectParam $DorisConnectParam Doris 配置，Type为 DORIS 时必填
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DtsConnectParam",$param) and $param["DtsConnectParam"] !== null) {
            $this->DtsConnectParam = new DtsConnectParam();
            $this->DtsConnectParam->deserialize($param["DtsConnectParam"]);
        }

        if (array_key_exists("MongoDBConnectParam",$param) and $param["MongoDBConnectParam"] !== null) {
            $this->MongoDBConnectParam = new MongoDBConnectParam();
            $this->MongoDBConnectParam->deserialize($param["MongoDBConnectParam"]);
        }

        if (array_key_exists("EsConnectParam",$param) and $param["EsConnectParam"] !== null) {
            $this->EsConnectParam = new EsConnectParam();
            $this->EsConnectParam->deserialize($param["EsConnectParam"]);
        }

        if (array_key_exists("ClickHouseConnectParam",$param) and $param["ClickHouseConnectParam"] !== null) {
            $this->ClickHouseConnectParam = new ClickHouseConnectParam();
            $this->ClickHouseConnectParam->deserialize($param["ClickHouseConnectParam"]);
        }

        if (array_key_exists("MySQLConnectParam",$param) and $param["MySQLConnectParam"] !== null) {
            $this->MySQLConnectParam = new MySQLConnectParam();
            $this->MySQLConnectParam->deserialize($param["MySQLConnectParam"]);
        }

        if (array_key_exists("PostgreSQLConnectParam",$param) and $param["PostgreSQLConnectParam"] !== null) {
            $this->PostgreSQLConnectParam = new PostgreSQLConnectParam();
            $this->PostgreSQLConnectParam->deserialize($param["PostgreSQLConnectParam"]);
        }

        if (array_key_exists("MariaDBConnectParam",$param) and $param["MariaDBConnectParam"] !== null) {
            $this->MariaDBConnectParam = new MariaDBConnectParam();
            $this->MariaDBConnectParam->deserialize($param["MariaDBConnectParam"]);
        }

        if (array_key_exists("SQLServerConnectParam",$param) and $param["SQLServerConnectParam"] !== null) {
            $this->SQLServerConnectParam = new SQLServerConnectParam();
            $this->SQLServerConnectParam->deserialize($param["SQLServerConnectParam"]);
        }

        if (array_key_exists("DorisConnectParam",$param) and $param["DorisConnectParam"] !== null) {
            $this->DorisConnectParam = new DorisConnectParam();
            $this->DorisConnectParam->deserialize($param["DorisConnectParam"]);
        }
    }
}
