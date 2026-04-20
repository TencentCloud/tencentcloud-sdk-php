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
 * CreateConnectResource请求参数结构体
 *
 * @method string getResourceName() 获取<p>连接源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>连接源名称</p>
 * @method string getType() 获取<p>连接源类型</p>
 * @method void setType(string $Type) 设置<p>连接源类型</p>
 * @method string getDescription() 获取<p>连接源描述</p>
 * @method void setDescription(string $Description) 设置<p>连接源描述</p>
 * @method DtsConnectParam getDtsConnectParam() 获取<p>Dts配置，Type为DTS时必填</p>
 * @method void setDtsConnectParam(DtsConnectParam $DtsConnectParam) 设置<p>Dts配置，Type为DTS时必填</p>
 * @method MongoDBConnectParam getMongoDBConnectParam() 获取<p>MongoDB配置，Type为MONGODB时必填</p>
 * @method void setMongoDBConnectParam(MongoDBConnectParam $MongoDBConnectParam) 设置<p>MongoDB配置，Type为MONGODB时必填</p>
 * @method EsConnectParam getEsConnectParam() 获取<p>Es配置，Type为ES时必填</p>
 * @method void setEsConnectParam(EsConnectParam $EsConnectParam) 设置<p>Es配置，Type为ES时必填</p>
 * @method ClickHouseConnectParam getClickHouseConnectParam() 获取<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
 * @method void setClickHouseConnectParam(ClickHouseConnectParam $ClickHouseConnectParam) 设置<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
 * @method MySQLConnectParam getMySQLConnectParam() 获取<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
 * @method void setMySQLConnectParam(MySQLConnectParam $MySQLConnectParam) 设置<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
 * @method PostgreSQLConnectParam getPostgreSQLConnectParam() 获取<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
 * @method void setPostgreSQLConnectParam(PostgreSQLConnectParam $PostgreSQLConnectParam) 设置<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
 * @method MariaDBConnectParam getMariaDBConnectParam() 获取<p>MariaDB配置，Type为MARIADB时必填</p>
 * @method void setMariaDBConnectParam(MariaDBConnectParam $MariaDBConnectParam) 设置<p>MariaDB配置，Type为MARIADB时必填</p>
 * @method SQLServerConnectParam getSQLServerConnectParam() 获取<p>SQLServer配置，Type为SQLSERVER时必填</p>
 * @method void setSQLServerConnectParam(SQLServerConnectParam $SQLServerConnectParam) 设置<p>SQLServer配置，Type为SQLSERVER时必填</p>
 * @method DorisConnectParam getDorisConnectParam() 获取<p>Doris 配置，Type为 DORIS 时必填</p>
 * @method void setDorisConnectParam(DorisConnectParam $DorisConnectParam) 设置<p>Doris 配置，Type为 DORIS 时必填</p>
 * @method KafkaConnectParam getKafkaConnectParam() 获取<p>Kafka配置，Type为 KAFKA 时必填</p>
 * @method void setKafkaConnectParam(KafkaConnectParam $KafkaConnectParam) 设置<p>Kafka配置，Type为 KAFKA 时必填</p>
 * @method MqttConnectParam getMqttConnectParam() 获取<p>MQTT配置，Type为 MQTT 时必填</p>
 * @method void setMqttConnectParam(MqttConnectParam $MqttConnectParam) 设置<p>MQTT配置，Type为 MQTT 时必填</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class CreateConnectResourceRequest extends AbstractModel
{
    /**
     * @var string <p>连接源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>连接源类型</p>
     */
    public $Type;

    /**
     * @var string <p>连接源描述</p>
     */
    public $Description;

    /**
     * @var DtsConnectParam <p>Dts配置，Type为DTS时必填</p>
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBConnectParam <p>MongoDB配置，Type为MONGODB时必填</p>
     */
    public $MongoDBConnectParam;

    /**
     * @var EsConnectParam <p>Es配置，Type为ES时必填</p>
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBConnectParam <p>MariaDB配置，Type为MARIADB时必填</p>
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerConnectParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
     */
    public $SQLServerConnectParam;

    /**
     * @var DorisConnectParam <p>Doris 配置，Type为 DORIS 时必填</p>
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
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $ResourceName <p>连接源名称</p>
     * @param string $Type <p>连接源类型</p>
     * @param string $Description <p>连接源描述</p>
     * @param DtsConnectParam $DtsConnectParam <p>Dts配置，Type为DTS时必填</p>
     * @param MongoDBConnectParam $MongoDBConnectParam <p>MongoDB配置，Type为MONGODB时必填</p>
     * @param EsConnectParam $EsConnectParam <p>Es配置，Type为ES时必填</p>
     * @param ClickHouseConnectParam $ClickHouseConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
     * @param MySQLConnectParam $MySQLConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时必填</p>
     * @param PostgreSQLConnectParam $PostgreSQLConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
     * @param MariaDBConnectParam $MariaDBConnectParam <p>MariaDB配置，Type为MARIADB时必填</p>
     * @param SQLServerConnectParam $SQLServerConnectParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
     * @param DorisConnectParam $DorisConnectParam <p>Doris 配置，Type为 DORIS 时必填</p>
     * @param KafkaConnectParam $KafkaConnectParam <p>Kafka配置，Type为 KAFKA 时必填</p>
     * @param MqttConnectParam $MqttConnectParam <p>MQTT配置，Type为 MQTT 时必填</p>
     * @param array $Tags <p>标签列表</p>
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

        if (array_key_exists("KafkaConnectParam",$param) and $param["KafkaConnectParam"] !== null) {
            $this->KafkaConnectParam = new KafkaConnectParam();
            $this->KafkaConnectParam->deserialize($param["KafkaConnectParam"]);
        }

        if (array_key_exists("MqttConnectParam",$param) and $param["MqttConnectParam"] !== null) {
            $this->MqttConnectParam = new MqttConnectParam();
            $this->MqttConnectParam->deserialize($param["MqttConnectParam"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
