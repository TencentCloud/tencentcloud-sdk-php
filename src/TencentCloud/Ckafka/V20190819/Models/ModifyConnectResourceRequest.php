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
 * ModifyConnectResource请求参数结构体
 *
 * @method string getResourceId() 获取连接源的Id
 * @method void setResourceId(string $ResourceId) 设置连接源的Id
 * @method string getResourceName() 获取连接源名称，为空时不修改
 * @method void setResourceName(string $ResourceName) 设置连接源名称，为空时不修改
 * @method string getDescription() 获取连接源描述，为空时不修改
 * @method void setDescription(string $Description) 设置连接源描述，为空时不修改
 * @method string getType() 获取连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效
 * @method void setType(string $Type) 设置连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效
 * @method DtsModifyConnectParam getDtsConnectParam() 获取Dts配置，Type为DTS时必填
 * @method void setDtsConnectParam(DtsModifyConnectParam $DtsConnectParam) 设置Dts配置，Type为DTS时必填
 * @method MongoDBModifyConnectParam getMongoDBConnectParam() 获取MongoDB配置，Type为MONGODB时必填
 * @method void setMongoDBConnectParam(MongoDBModifyConnectParam $MongoDBConnectParam) 设置MongoDB配置，Type为MONGODB时必填
 * @method EsModifyConnectParam getEsConnectParam() 获取Es配置，Type为ES时必填
 * @method void setEsConnectParam(EsModifyConnectParam $EsConnectParam) 设置Es配置，Type为ES时必填
 * @method ClickHouseModifyConnectParam getClickHouseConnectParam() 获取ClickHouse配置，Type为CLICKHOUSE时必填
 * @method void setClickHouseConnectParam(ClickHouseModifyConnectParam $ClickHouseConnectParam) 设置ClickHouse配置，Type为CLICKHOUSE时必填
 * @method MySQLModifyConnectParam getMySQLConnectParam() 获取MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
 * @method void setMySQLConnectParam(MySQLModifyConnectParam $MySQLConnectParam) 设置MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
 * @method PostgreSQLModifyConnectParam getPostgreSQLConnectParam() 获取PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
 * @method void setPostgreSQLConnectParam(PostgreSQLModifyConnectParam $PostgreSQLConnectParam) 设置PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
 * @method MariaDBModifyConnectParam getMariaDBConnectParam() 获取MariaDB配置，Type为MARIADB时必填
 * @method void setMariaDBConnectParam(MariaDBModifyConnectParam $MariaDBConnectParam) 设置MariaDB配置，Type为MARIADB时必填
 * @method SQLServerModifyConnectParam getSQLServerConnectParam() 获取SQLServer配置，Type为SQLSERVER时必填
 * @method void setSQLServerConnectParam(SQLServerModifyConnectParam $SQLServerConnectParam) 设置SQLServer配置，Type为SQLSERVER时必填
 * @method CtsdbModifyConnectParam getCtsdbConnectParam() 获取Ctsdb配置，Type为CTSDB
 * @method void setCtsdbConnectParam(CtsdbModifyConnectParam $CtsdbConnectParam) 设置Ctsdb配置，Type为CTSDB
 * @method DorisModifyConnectParam getDorisConnectParam() 获取Doris配置，Type为DORIS
 * @method void setDorisConnectParam(DorisModifyConnectParam $DorisConnectParam) 设置Doris配置，Type为DORIS
 * @method KafkaConnectParam getKafkaConnectParam() 获取Kafka配置，Type为 KAFKA 时必填
 * @method void setKafkaConnectParam(KafkaConnectParam $KafkaConnectParam) 设置Kafka配置，Type为 KAFKA 时必填
 */
class ModifyConnectResourceRequest extends AbstractModel
{
    /**
     * @var string 连接源的Id
     */
    public $ResourceId;

    /**
     * @var string 连接源名称，为空时不修改
     */
    public $ResourceName;

    /**
     * @var string 连接源描述，为空时不修改
     */
    public $Description;

    /**
     * @var string 连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效
     */
    public $Type;

    /**
     * @var DtsModifyConnectParam Dts配置，Type为DTS时必填
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBModifyConnectParam MongoDB配置，Type为MONGODB时必填
     */
    public $MongoDBConnectParam;

    /**
     * @var EsModifyConnectParam Es配置，Type为ES时必填
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseModifyConnectParam ClickHouse配置，Type为CLICKHOUSE时必填
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLModifyConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLModifyConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBModifyConnectParam MariaDB配置，Type为MARIADB时必填
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerModifyConnectParam SQLServer配置，Type为SQLSERVER时必填
     */
    public $SQLServerConnectParam;

    /**
     * @var CtsdbModifyConnectParam Ctsdb配置，Type为CTSDB
     */
    public $CtsdbConnectParam;

    /**
     * @var DorisModifyConnectParam Doris配置，Type为DORIS
     */
    public $DorisConnectParam;

    /**
     * @var KafkaConnectParam Kafka配置，Type为 KAFKA 时必填
     */
    public $KafkaConnectParam;

    /**
     * @param string $ResourceId 连接源的Id
     * @param string $ResourceName 连接源名称，为空时不修改
     * @param string $Description 连接源描述，为空时不修改
     * @param string $Type 连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效
     * @param DtsModifyConnectParam $DtsConnectParam Dts配置，Type为DTS时必填
     * @param MongoDBModifyConnectParam $MongoDBConnectParam MongoDB配置，Type为MONGODB时必填
     * @param EsModifyConnectParam $EsConnectParam Es配置，Type为ES时必填
     * @param ClickHouseModifyConnectParam $ClickHouseConnectParam ClickHouse配置，Type为CLICKHOUSE时必填
     * @param MySQLModifyConnectParam $MySQLConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填
     * @param PostgreSQLModifyConnectParam $PostgreSQLConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
     * @param MariaDBModifyConnectParam $MariaDBConnectParam MariaDB配置，Type为MARIADB时必填
     * @param SQLServerModifyConnectParam $SQLServerConnectParam SQLServer配置，Type为SQLSERVER时必填
     * @param CtsdbModifyConnectParam $CtsdbConnectParam Ctsdb配置，Type为CTSDB
     * @param DorisModifyConnectParam $DorisConnectParam Doris配置，Type为DORIS
     * @param KafkaConnectParam $KafkaConnectParam Kafka配置，Type为 KAFKA 时必填
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DtsConnectParam",$param) and $param["DtsConnectParam"] !== null) {
            $this->DtsConnectParam = new DtsModifyConnectParam();
            $this->DtsConnectParam->deserialize($param["DtsConnectParam"]);
        }

        if (array_key_exists("MongoDBConnectParam",$param) and $param["MongoDBConnectParam"] !== null) {
            $this->MongoDBConnectParam = new MongoDBModifyConnectParam();
            $this->MongoDBConnectParam->deserialize($param["MongoDBConnectParam"]);
        }

        if (array_key_exists("EsConnectParam",$param) and $param["EsConnectParam"] !== null) {
            $this->EsConnectParam = new EsModifyConnectParam();
            $this->EsConnectParam->deserialize($param["EsConnectParam"]);
        }

        if (array_key_exists("ClickHouseConnectParam",$param) and $param["ClickHouseConnectParam"] !== null) {
            $this->ClickHouseConnectParam = new ClickHouseModifyConnectParam();
            $this->ClickHouseConnectParam->deserialize($param["ClickHouseConnectParam"]);
        }

        if (array_key_exists("MySQLConnectParam",$param) and $param["MySQLConnectParam"] !== null) {
            $this->MySQLConnectParam = new MySQLModifyConnectParam();
            $this->MySQLConnectParam->deserialize($param["MySQLConnectParam"]);
        }

        if (array_key_exists("PostgreSQLConnectParam",$param) and $param["PostgreSQLConnectParam"] !== null) {
            $this->PostgreSQLConnectParam = new PostgreSQLModifyConnectParam();
            $this->PostgreSQLConnectParam->deserialize($param["PostgreSQLConnectParam"]);
        }

        if (array_key_exists("MariaDBConnectParam",$param) and $param["MariaDBConnectParam"] !== null) {
            $this->MariaDBConnectParam = new MariaDBModifyConnectParam();
            $this->MariaDBConnectParam->deserialize($param["MariaDBConnectParam"]);
        }

        if (array_key_exists("SQLServerConnectParam",$param) and $param["SQLServerConnectParam"] !== null) {
            $this->SQLServerConnectParam = new SQLServerModifyConnectParam();
            $this->SQLServerConnectParam->deserialize($param["SQLServerConnectParam"]);
        }

        if (array_key_exists("CtsdbConnectParam",$param) and $param["CtsdbConnectParam"] !== null) {
            $this->CtsdbConnectParam = new CtsdbModifyConnectParam();
            $this->CtsdbConnectParam->deserialize($param["CtsdbConnectParam"]);
        }

        if (array_key_exists("DorisConnectParam",$param) and $param["DorisConnectParam"] !== null) {
            $this->DorisConnectParam = new DorisModifyConnectParam();
            $this->DorisConnectParam->deserialize($param["DorisConnectParam"]);
        }

        if (array_key_exists("KafkaConnectParam",$param) and $param["KafkaConnectParam"] !== null) {
            $this->KafkaConnectParam = new KafkaConnectParam();
            $this->KafkaConnectParam->deserialize($param["KafkaConnectParam"]);
        }
    }
}
