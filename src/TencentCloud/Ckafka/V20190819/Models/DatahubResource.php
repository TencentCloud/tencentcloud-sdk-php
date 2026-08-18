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
 * Datahub资源配置
 *
 * @method string getType() 获取<p>资源类型  type类型如下:<br>KAFKA,<br>EB_ES,<br>EB_COS,<br>EB_CLS,<br>EB_,<br>MONGODB,<br>HTTP,<br>TDW,<br>ES,<br>CLICKHOUSE,<br>DTS,<br>CLS,<br>COS,<br>TOPIC,<br>MYSQL,<br>MQTT,<br>MYSQL_DATA,<br>DORIS,<br>POSTGRESQL,<br>TDSQL_C_POSTGRESQL,<br>TDSQL_POSTGRESQL,<br>WAREHOUSE_POSTGRESQL,<br>TDSQL_C_MYSQL,<br>MARIADB,<br>SQLSERVER,<br>CTSDB,<br>SCF</p>
 * @method void setType(string $Type) 设置<p>资源类型  type类型如下:<br>KAFKA,<br>EB_ES,<br>EB_COS,<br>EB_CLS,<br>EB_,<br>MONGODB,<br>HTTP,<br>TDW,<br>ES,<br>CLICKHOUSE,<br>DTS,<br>CLS,<br>COS,<br>TOPIC,<br>MYSQL,<br>MQTT,<br>MYSQL_DATA,<br>DORIS,<br>POSTGRESQL,<br>TDSQL_C_POSTGRESQL,<br>TDSQL_POSTGRESQL,<br>WAREHOUSE_POSTGRESQL,<br>TDSQL_C_MYSQL,<br>MARIADB,<br>SQLSERVER,<br>CTSDB,<br>SCF</p>
 * @method KafkaParam getKafkaParam() 获取<p>ckafka配置，Type为KAFKA时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaParam(KafkaParam $KafkaParam) 设置<p>ckafka配置，Type为KAFKA时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EventBusParam getEventBusParam() 获取<p>EB配置，Type为EB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventBusParam(EventBusParam $EventBusParam) 设置<p>EB配置，Type为EB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoDBParam getMongoDBParam() 获取<p>MongoDB配置，Type为MONGODB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongoDBParam(MongoDBParam $MongoDBParam) 设置<p>MongoDB配置，Type为MONGODB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsParam getEsParam() 获取<p>Es配置，Type为ES时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsParam(EsParam $EsParam) 设置<p>Es配置，Type为ES时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TdwParam getTdwParam() 获取<p>Tdw配置，Type为TDW时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTdwParam(TdwParam $TdwParam) 设置<p>Tdw配置，Type为TDW时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DtsParam getDtsParam() 获取<p>Dts配置，Type为DTS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDtsParam(DtsParam $DtsParam) 设置<p>Dts配置，Type为DTS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClickHouseParam getClickHouseParam() 获取<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouseParam(ClickHouseParam $ClickHouseParam) 设置<p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClsParam getClsParam() 获取<p>Cls配置，Type为CLS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsParam(ClsParam $ClsParam) 设置<p>Cls配置，Type为CLS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosParam getCosParam() 获取<p>Cos配置，Type为COS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosParam(CosParam $CosParam) 设置<p>Cos配置，Type为COS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MySQLParam getMySQLParam() 获取<p>MySQL配置，Type为MYSQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMySQLParam(MySQLParam $MySQLParam) 设置<p>MySQL配置，Type为MYSQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostgreSQLParam getPostgreSQLParam() 获取<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSQLParam(PostgreSQLParam $PostgreSQLParam) 设置<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TopicParam getTopicParam() 获取<p>Topic配置，Type为Topic时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicParam(TopicParam $TopicParam) 设置<p>Topic配置，Type为Topic时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MariaDBParam getMariaDBParam() 获取<p>MariaDB配置，Type为MARIADB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMariaDBParam(MariaDBParam $MariaDBParam) 设置<p>MariaDB配置，Type为MARIADB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SQLServerParam getSQLServerParam() 获取<p>SQLServer配置，Type为SQLSERVER时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLServerParam(SQLServerParam $SQLServerParam) 设置<p>SQLServer配置，Type为SQLSERVER时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CtsdbParam getCtsdbParam() 获取<p>Ctsdb配置，Type为CTSDB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCtsdbParam(CtsdbParam $CtsdbParam) 设置<p>Ctsdb配置，Type为CTSDB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScfParam getScfParam() 获取<p>Scf配置，Type为SCF时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScfParam(ScfParam $ScfParam) 设置<p>Scf配置，Type为SCF时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MqttParam getMqttParam() 获取<p>MQTT配置，Type为 MQTT 时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMqttParam(MqttParam $MqttParam) 设置<p>MQTT配置，Type为 MQTT 时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IcebergParam getIcebergParam() 获取<p>IceBerg配置</p>
 * @method void setIcebergParam(IcebergParam $IcebergParam) 设置<p>IceBerg配置</p>
 */
class DatahubResource extends AbstractModel
{
    /**
     * @var string <p>资源类型  type类型如下:<br>KAFKA,<br>EB_ES,<br>EB_COS,<br>EB_CLS,<br>EB_,<br>MONGODB,<br>HTTP,<br>TDW,<br>ES,<br>CLICKHOUSE,<br>DTS,<br>CLS,<br>COS,<br>TOPIC,<br>MYSQL,<br>MQTT,<br>MYSQL_DATA,<br>DORIS,<br>POSTGRESQL,<br>TDSQL_C_POSTGRESQL,<br>TDSQL_POSTGRESQL,<br>WAREHOUSE_POSTGRESQL,<br>TDSQL_C_MYSQL,<br>MARIADB,<br>SQLSERVER,<br>CTSDB,<br>SCF</p>
     */
    public $Type;

    /**
     * @var KafkaParam <p>ckafka配置，Type为KAFKA时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaParam;

    /**
     * @var EventBusParam <p>EB配置，Type为EB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventBusParam;

    /**
     * @var MongoDBParam <p>MongoDB配置，Type为MONGODB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongoDBParam;

    /**
     * @var EsParam <p>Es配置，Type为ES时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsParam;

    /**
     * @var TdwParam <p>Tdw配置，Type为TDW时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TdwParam;

    /**
     * @var DtsParam <p>Dts配置，Type为DTS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DtsParam;

    /**
     * @var ClickHouseParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouseParam;

    /**
     * @var ClsParam <p>Cls配置，Type为CLS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsParam;

    /**
     * @var CosParam <p>Cos配置，Type为COS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosParam;

    /**
     * @var MySQLParam <p>MySQL配置，Type为MYSQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MySQLParam;

    /**
     * @var PostgreSQLParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSQLParam;

    /**
     * @var TopicParam <p>Topic配置，Type为Topic时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicParam;

    /**
     * @var MariaDBParam <p>MariaDB配置，Type为MARIADB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MariaDBParam;

    /**
     * @var SQLServerParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLServerParam;

    /**
     * @var CtsdbParam <p>Ctsdb配置，Type为CTSDB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CtsdbParam;

    /**
     * @var ScfParam <p>Scf配置，Type为SCF时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScfParam;

    /**
     * @var MqttParam <p>MQTT配置，Type为 MQTT 时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MqttParam;

    /**
     * @var IcebergParam <p>IceBerg配置</p>
     */
    public $IcebergParam;

    /**
     * @param string $Type <p>资源类型  type类型如下:<br>KAFKA,<br>EB_ES,<br>EB_COS,<br>EB_CLS,<br>EB_,<br>MONGODB,<br>HTTP,<br>TDW,<br>ES,<br>CLICKHOUSE,<br>DTS,<br>CLS,<br>COS,<br>TOPIC,<br>MYSQL,<br>MQTT,<br>MYSQL_DATA,<br>DORIS,<br>POSTGRESQL,<br>TDSQL_C_POSTGRESQL,<br>TDSQL_POSTGRESQL,<br>WAREHOUSE_POSTGRESQL,<br>TDSQL_C_MYSQL,<br>MARIADB,<br>SQLSERVER,<br>CTSDB,<br>SCF</p>
     * @param KafkaParam $KafkaParam <p>ckafka配置，Type为KAFKA时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EventBusParam $EventBusParam <p>EB配置，Type为EB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoDBParam $MongoDBParam <p>MongoDB配置，Type为MONGODB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsParam $EsParam <p>Es配置，Type为ES时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TdwParam $TdwParam <p>Tdw配置，Type为TDW时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DtsParam $DtsParam <p>Dts配置，Type为DTS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClickHouseParam $ClickHouseParam <p>ClickHouse配置，Type为CLICKHOUSE时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClsParam $ClsParam <p>Cls配置，Type为CLS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosParam $CosParam <p>Cos配置，Type为COS时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MySQLParam $MySQLParam <p>MySQL配置，Type为MYSQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostgreSQLParam $PostgreSQLParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TopicParam $TopicParam <p>Topic配置，Type为Topic时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MariaDBParam $MariaDBParam <p>MariaDB配置，Type为MARIADB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SQLServerParam $SQLServerParam <p>SQLServer配置，Type为SQLSERVER时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CtsdbParam $CtsdbParam <p>Ctsdb配置，Type为CTSDB时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScfParam $ScfParam <p>Scf配置，Type为SCF时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MqttParam $MqttParam <p>MQTT配置，Type为 MQTT 时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IcebergParam $IcebergParam <p>IceBerg配置</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("KafkaParam",$param) and $param["KafkaParam"] !== null) {
            $this->KafkaParam = new KafkaParam();
            $this->KafkaParam->deserialize($param["KafkaParam"]);
        }

        if (array_key_exists("EventBusParam",$param) and $param["EventBusParam"] !== null) {
            $this->EventBusParam = new EventBusParam();
            $this->EventBusParam->deserialize($param["EventBusParam"]);
        }

        if (array_key_exists("MongoDBParam",$param) and $param["MongoDBParam"] !== null) {
            $this->MongoDBParam = new MongoDBParam();
            $this->MongoDBParam->deserialize($param["MongoDBParam"]);
        }

        if (array_key_exists("EsParam",$param) and $param["EsParam"] !== null) {
            $this->EsParam = new EsParam();
            $this->EsParam->deserialize($param["EsParam"]);
        }

        if (array_key_exists("TdwParam",$param) and $param["TdwParam"] !== null) {
            $this->TdwParam = new TdwParam();
            $this->TdwParam->deserialize($param["TdwParam"]);
        }

        if (array_key_exists("DtsParam",$param) and $param["DtsParam"] !== null) {
            $this->DtsParam = new DtsParam();
            $this->DtsParam->deserialize($param["DtsParam"]);
        }

        if (array_key_exists("ClickHouseParam",$param) and $param["ClickHouseParam"] !== null) {
            $this->ClickHouseParam = new ClickHouseParam();
            $this->ClickHouseParam->deserialize($param["ClickHouseParam"]);
        }

        if (array_key_exists("ClsParam",$param) and $param["ClsParam"] !== null) {
            $this->ClsParam = new ClsParam();
            $this->ClsParam->deserialize($param["ClsParam"]);
        }

        if (array_key_exists("CosParam",$param) and $param["CosParam"] !== null) {
            $this->CosParam = new CosParam();
            $this->CosParam->deserialize($param["CosParam"]);
        }

        if (array_key_exists("MySQLParam",$param) and $param["MySQLParam"] !== null) {
            $this->MySQLParam = new MySQLParam();
            $this->MySQLParam->deserialize($param["MySQLParam"]);
        }

        if (array_key_exists("PostgreSQLParam",$param) and $param["PostgreSQLParam"] !== null) {
            $this->PostgreSQLParam = new PostgreSQLParam();
            $this->PostgreSQLParam->deserialize($param["PostgreSQLParam"]);
        }

        if (array_key_exists("TopicParam",$param) and $param["TopicParam"] !== null) {
            $this->TopicParam = new TopicParam();
            $this->TopicParam->deserialize($param["TopicParam"]);
        }

        if (array_key_exists("MariaDBParam",$param) and $param["MariaDBParam"] !== null) {
            $this->MariaDBParam = new MariaDBParam();
            $this->MariaDBParam->deserialize($param["MariaDBParam"]);
        }

        if (array_key_exists("SQLServerParam",$param) and $param["SQLServerParam"] !== null) {
            $this->SQLServerParam = new SQLServerParam();
            $this->SQLServerParam->deserialize($param["SQLServerParam"]);
        }

        if (array_key_exists("CtsdbParam",$param) and $param["CtsdbParam"] !== null) {
            $this->CtsdbParam = new CtsdbParam();
            $this->CtsdbParam->deserialize($param["CtsdbParam"]);
        }

        if (array_key_exists("ScfParam",$param) and $param["ScfParam"] !== null) {
            $this->ScfParam = new ScfParam();
            $this->ScfParam->deserialize($param["ScfParam"]);
        }

        if (array_key_exists("MqttParam",$param) and $param["MqttParam"] !== null) {
            $this->MqttParam = new MqttParam();
            $this->MqttParam->deserialize($param["MqttParam"]);
        }

        if (array_key_exists("IcebergParam",$param) and $param["IcebergParam"] !== null) {
            $this->IcebergParam = new IcebergParam();
            $this->IcebergParam->deserialize($param["IcebergParam"]);
        }
    }
}
