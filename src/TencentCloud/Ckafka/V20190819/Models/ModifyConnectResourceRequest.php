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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConnectResource请求参数结构体
 *
 * @method string getResourceId() 获取<p>连接源的Id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>连接源的Id</p>
 * @method string getResourceName() 获取<p>连接源名称，为空时不修改</p>
 * @method void setResourceName(string $ResourceName) 设置<p>连接源名称，为空时不修改</p>
 * @method string getDescription() 获取<p>连接源描述，为空时不修改</p>
 * @method void setDescription(string $Description) 设置<p>连接源描述，为空时不修改</p>
 * @method string getType() 获取<p>连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效</p>
 * @method void setType(string $Type) 设置<p>连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效</p>
 * @method DtsModifyConnectParam getDtsConnectParam() 获取<p>Dts配置，Type为DTS时必填</p>
 * @method void setDtsConnectParam(DtsModifyConnectParam $DtsConnectParam) 设置<p>Dts配置，Type为DTS时必填</p>
 * @method MongoDBModifyConnectParam getMongoDBConnectParam() 获取<p>MongoDB配置，Type为MONGODB时必填</p>
 * @method void setMongoDBConnectParam(MongoDBModifyConnectParam $MongoDBConnectParam) 设置<p>MongoDB配置，Type为MONGODB时必填</p>
 * @method EsModifyConnectParam getEsConnectParam() 获取<p>Es配置，Type为ES时必填</p>
 * @method void setEsConnectParam(EsModifyConnectParam $EsConnectParam) 设置<p>Es配置，Type为ES时必填</p>
 * @method ClickHouseModifyConnectParam getClickHouseConnectParam() 获取<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
 * @method void setClickHouseConnectParam(ClickHouseModifyConnectParam $ClickHouseConnectParam) 设置<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
 * @method MySQLModifyConnectParam getMySQLConnectParam() 获取<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
 * @method void setMySQLConnectParam(MySQLModifyConnectParam $MySQLConnectParam) 设置<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
 * @method PostgreSQLModifyConnectParam getPostgreSQLConnectParam() 获取<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
 * @method void setPostgreSQLConnectParam(PostgreSQLModifyConnectParam $PostgreSQLConnectParam) 设置<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
 * @method MariaDBModifyConnectParam getMariaDBConnectParam() 获取<p>MariaDB配置，Type为MARIADB时必填</p>
 * @method void setMariaDBConnectParam(MariaDBModifyConnectParam $MariaDBConnectParam) 设置<p>MariaDB配置，Type为MARIADB时必填</p>
 * @method SQLServerModifyConnectParam getSQLServerConnectParam() 获取<p>SQLServer配置，Type为SQLSERVER时必填</p>
 * @method void setSQLServerConnectParam(SQLServerModifyConnectParam $SQLServerConnectParam) 设置<p>SQLServer配置，Type为SQLSERVER时必填</p>
 * @method CtsdbModifyConnectParam getCtsdbConnectParam() 获取<p>Ctsdb配置，Type为CTSDB</p>
 * @method void setCtsdbConnectParam(CtsdbModifyConnectParam $CtsdbConnectParam) 设置<p>Ctsdb配置，Type为CTSDB</p>
 * @method DorisModifyConnectParam getDorisConnectParam() 获取<p>Doris配置，Type为DORIS</p>
 * @method void setDorisConnectParam(DorisModifyConnectParam $DorisConnectParam) 设置<p>Doris配置，Type为DORIS</p>
 * @method KafkaConnectParam getKafkaConnectParam() 获取<p>Kafka配置，Type为 KAFKA 时必填</p>
 * @method void setKafkaConnectParam(KafkaConnectParam $KafkaConnectParam) 设置<p>Kafka配置，Type为 KAFKA 时必填</p>
 * @method MqttConnectParam getMqttConnectParam() 获取<p>MQTT配置，Type为 MQTT 时必填</p>
 * @method void setMqttConnectParam(MqttConnectParam $MqttConnectParam) 设置<p>MQTT配置，Type为 MQTT 时必填</p>
 */
class ModifyConnectResourceRequest extends AbstractModel
{
    /**
     * @var string <p>连接源的Id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>连接源名称，为空时不修改</p>
     */
    public $ResourceName;

    /**
     * @var string <p>连接源描述，为空时不修改</p>
     */
    public $Description;

    /**
     * @var string <p>连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效</p>
     */
    public $Type;

    /**
     * @var DtsModifyConnectParam <p>Dts配置，Type为DTS时必填</p>
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBModifyConnectParam <p>MongoDB配置，Type为MONGODB时必填</p>
     */
    public $MongoDBConnectParam;

    /**
     * @var EsModifyConnectParam <p>Es配置，Type为ES时必填</p>
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseModifyConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLModifyConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLModifyConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBModifyConnectParam <p>MariaDB配置，Type为MARIADB时必填</p>
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerModifyConnectParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
     */
    public $SQLServerConnectParam;

    /**
     * @var CtsdbModifyConnectParam <p>Ctsdb配置，Type为CTSDB</p>
     */
    public $CtsdbConnectParam;

    /**
     * @var DorisModifyConnectParam <p>Doris配置，Type为DORIS</p>
     */
    public $DorisConnectParam;

    /**
     * @var KafkaConnectParam <p>Kafka配置，Type为 KAFKA 时必填</p>
     */
    public $KafkaConnectParam;

    /**
     * @var MqttConnectParam <p>MQTT配置，Type为 MQTT 时必填</p>
     */
    public $MqttConnectParam;

    /**
     * @param string $ResourceId <p>连接源的Id</p>
     * @param string $ResourceName <p>连接源名称，为空时不修改</p>
     * @param string $Description <p>连接源描述，为空时不修改</p>
     * @param string $Type <p>连接源类型，修改数据源参数时，需要与原Type相同，否则编辑数据源无效</p>
     * @param DtsModifyConnectParam $DtsConnectParam <p>Dts配置，Type为DTS时必填</p>
     * @param MongoDBModifyConnectParam $MongoDBConnectParam <p>MongoDB配置，Type为MONGODB时必填</p>
     * @param EsModifyConnectParam $EsConnectParam <p>Es配置，Type为ES时必填</p>
     * @param ClickHouseModifyConnectParam $ClickHouseConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
     * @param MySQLModifyConnectParam $MySQLConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
     * @param PostgreSQLModifyConnectParam $PostgreSQLConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
     * @param MariaDBModifyConnectParam $MariaDBConnectParam <p>MariaDB配置，Type为MARIADB时必填</p>
     * @param SQLServerModifyConnectParam $SQLServerConnectParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
     * @param CtsdbModifyConnectParam $CtsdbConnectParam <p>Ctsdb配置，Type为CTSDB</p>
     * @param DorisModifyConnectParam $DorisConnectParam <p>Doris配置，Type为DORIS</p>
     * @param KafkaConnectParam $KafkaConnectParam <p>Kafka配置，Type为 KAFKA 时必填</p>
     * @param MqttConnectParam $MqttConnectParam <p>MQTT配置，Type为 MQTT 时必填</p>
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

        if (array_key_exists("MqttConnectParam",$param) and $param["MqttConnectParam"] !== null) {
            $this->MqttConnectParam = new MqttConnectParam();
            $this->MqttConnectParam->deserialize($param["MqttConnectParam"]);
        }
    }
}
