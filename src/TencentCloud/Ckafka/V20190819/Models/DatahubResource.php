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
 * Datahub资源配置
 *
 * @method string getType() 获取资源类型
 * @method void setType(string $Type) 设置资源类型
 * @method KafkaParam getKafkaParam() 获取ckafka配置，Type为KAFKA时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaParam(KafkaParam $KafkaParam) 设置ckafka配置，Type为KAFKA时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method EventBusParam getEventBusParam() 获取EB配置，Type为EB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventBusParam(EventBusParam $EventBusParam) 设置EB配置，Type为EB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoDBParam getMongoDBParam() 获取MongoDB配置，Type为MONGODB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongoDBParam(MongoDBParam $MongoDBParam) 设置MongoDB配置，Type为MONGODB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsParam getEsParam() 获取Es配置，Type为ES时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsParam(EsParam $EsParam) 设置Es配置，Type为ES时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method TdwParam getTdwParam() 获取Tdw配置，Type为TDW时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTdwParam(TdwParam $TdwParam) 设置Tdw配置，Type为TDW时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method DtsParam getDtsParam() 获取Dts配置，Type为DTS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDtsParam(DtsParam $DtsParam) 设置Dts配置，Type为DTS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClickHouseParam getClickHouseParam() 获取ClickHouse配置，Type为CLICKHOUSE时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouseParam(ClickHouseParam $ClickHouseParam) 设置ClickHouse配置，Type为CLICKHOUSE时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClsParam getClsParam() 获取Cls配置，Type为CLS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsParam(ClsParam $ClsParam) 设置Cls配置，Type为CLS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosParam getCosParam() 获取Cos配置，Type为COS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosParam(CosParam $CosParam) 设置Cos配置，Type为COS时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method MySQLParam getMySQLParam() 获取MySQL配置，Type为MYSQL时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMySQLParam(MySQLParam $MySQLParam) 设置MySQL配置，Type为MYSQL时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostgreSQLParam getPostgreSQLParam() 获取PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSQLParam(PostgreSQLParam $PostgreSQLParam) 设置PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method TopicParam getTopicParam() 获取Topic配置，Type为Topic时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicParam(TopicParam $TopicParam) 设置Topic配置，Type为Topic时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method MariaDBParam getMariaDBParam() 获取MariaDB配置，Type为MARIADB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMariaDBParam(MariaDBParam $MariaDBParam) 设置MariaDB配置，Type为MARIADB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method SQLServerParam getSQLServerParam() 获取SQLServer配置，Type为SQLSERVER时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLServerParam(SQLServerParam $SQLServerParam) 设置SQLServer配置，Type为SQLSERVER时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method CtsdbParam getCtsdbParam() 获取Ctsdb配置，Type为CTSDB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCtsdbParam(CtsdbParam $CtsdbParam) 设置Ctsdb配置，Type为CTSDB时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScfParam getScfParam() 获取Scf配置，Type为SCF时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScfParam(ScfParam $ScfParam) 设置Scf配置，Type为SCF时必填
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatahubResource extends AbstractModel
{
    /**
     * @var string 资源类型
     */
    public $Type;

    /**
     * @var KafkaParam ckafka配置，Type为KAFKA时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaParam;

    /**
     * @var EventBusParam EB配置，Type为EB时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventBusParam;

    /**
     * @var MongoDBParam MongoDB配置，Type为MONGODB时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongoDBParam;

    /**
     * @var EsParam Es配置，Type为ES时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsParam;

    /**
     * @var TdwParam Tdw配置，Type为TDW时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TdwParam;

    /**
     * @var DtsParam Dts配置，Type为DTS时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DtsParam;

    /**
     * @var ClickHouseParam ClickHouse配置，Type为CLICKHOUSE时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouseParam;

    /**
     * @var ClsParam Cls配置，Type为CLS时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsParam;

    /**
     * @var CosParam Cos配置，Type为COS时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosParam;

    /**
     * @var MySQLParam MySQL配置，Type为MYSQL时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MySQLParam;

    /**
     * @var PostgreSQLParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSQLParam;

    /**
     * @var TopicParam Topic配置，Type为Topic时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicParam;

    /**
     * @var MariaDBParam MariaDB配置，Type为MARIADB时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MariaDBParam;

    /**
     * @var SQLServerParam SQLServer配置，Type为SQLSERVER时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLServerParam;

    /**
     * @var CtsdbParam Ctsdb配置，Type为CTSDB时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CtsdbParam;

    /**
     * @var ScfParam Scf配置，Type为SCF时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScfParam;

    /**
     * @param string $Type 资源类型
     * @param KafkaParam $KafkaParam ckafka配置，Type为KAFKA时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param EventBusParam $EventBusParam EB配置，Type为EB时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoDBParam $MongoDBParam MongoDB配置，Type为MONGODB时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsParam $EsParam Es配置，Type为ES时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param TdwParam $TdwParam Tdw配置，Type为TDW时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param DtsParam $DtsParam Dts配置，Type为DTS时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClickHouseParam $ClickHouseParam ClickHouse配置，Type为CLICKHOUSE时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClsParam $ClsParam Cls配置，Type为CLS时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosParam $CosParam Cos配置，Type为COS时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param MySQLParam $MySQLParam MySQL配置，Type为MYSQL时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostgreSQLParam $PostgreSQLParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param TopicParam $TopicParam Topic配置，Type为Topic时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param MariaDBParam $MariaDBParam MariaDB配置，Type为MARIADB时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param SQLServerParam $SQLServerParam SQLServer配置，Type为SQLSERVER时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param CtsdbParam $CtsdbParam Ctsdb配置，Type为CTSDB时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScfParam $ScfParam Scf配置，Type为SCF时必填
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
