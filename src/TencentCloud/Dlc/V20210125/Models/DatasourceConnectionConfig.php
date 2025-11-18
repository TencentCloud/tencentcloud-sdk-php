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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源属性
 *
 * @method MysqlInfo getMysql() 获取Mysql数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysql(MysqlInfo $Mysql) 设置Mysql数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method HiveInfo getHive() 获取Hive数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHive(HiveInfo $Hive) 设置Hive数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaInfo getKafka() 获取Kafka数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafka(KafkaInfo $Kafka) 设置Kafka数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtherDatasourceConnection getOtherDatasourceConnection() 获取其他数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherDatasourceConnection(OtherDatasourceConnection $OtherDatasourceConnection) 设置其他数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getPostgreSql() 获取PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSql(DataSourceInfo $PostgreSql) 设置PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getSqlServer() 获取SQLServer数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlServer(DataSourceInfo $SqlServer) 设置SQLServer数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getClickHouse() 获取ClickHouse数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouse(DataSourceInfo $ClickHouse) 设置ClickHouse数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method ElasticsearchInfo getElasticsearch() 获取Elasticsearch数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticsearch(ElasticsearchInfo $Elasticsearch) 设置Elasticsearch数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getTDSQLPostgreSql() 获取TDSQL-PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTDSQLPostgreSql(DataSourceInfo $TDSQLPostgreSql) 设置TDSQL-PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method TCHouseD getTCHouseD() 获取Doris数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTCHouseD(TCHouseD $TCHouseD) 设置Doris数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method TccHive getTccHive() 获取TccHive数据目录连接信息
 * @method void setTccHive(TccHive $TccHive) 设置TccHive数据目录连接信息
 * @method DataSourceInfo getMongoDB() 获取MongoDB 数据源
 * @method void setMongoDB(DataSourceInfo $MongoDB) 设置MongoDB 数据源
 */
class DatasourceConnectionConfig extends AbstractModel
{
    /**
     * @var MysqlInfo Mysql数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mysql;

    /**
     * @var HiveInfo Hive数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hive;

    /**
     * @var KafkaInfo Kafka数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kafka;

    /**
     * @var OtherDatasourceConnection 其他数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherDatasourceConnection;

    /**
     * @var DataSourceInfo PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSql;

    /**
     * @var DataSourceInfo SQLServer数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlServer;

    /**
     * @var DataSourceInfo ClickHouse数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouse;

    /**
     * @var ElasticsearchInfo Elasticsearch数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elasticsearch;

    /**
     * @var DataSourceInfo TDSQL-PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TDSQLPostgreSql;

    /**
     * @var TCHouseD Doris数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TCHouseD;

    /**
     * @var TccHive TccHive数据目录连接信息
     */
    public $TccHive;

    /**
     * @var DataSourceInfo MongoDB 数据源
     */
    public $MongoDB;

    /**
     * @param MysqlInfo $Mysql Mysql数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param HiveInfo $Hive Hive数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaInfo $Kafka Kafka数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtherDatasourceConnection $OtherDatasourceConnection 其他数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $PostgreSql PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $SqlServer SQLServer数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $ClickHouse ClickHouse数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param ElasticsearchInfo $Elasticsearch Elasticsearch数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $TDSQLPostgreSql TDSQL-PostgreSQL数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param TCHouseD $TCHouseD Doris数据源连接的属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param TccHive $TccHive TccHive数据目录连接信息
     * @param DataSourceInfo $MongoDB MongoDB 数据源
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
        if (array_key_exists("Mysql",$param) and $param["Mysql"] !== null) {
            $this->Mysql = new MysqlInfo();
            $this->Mysql->deserialize($param["Mysql"]);
        }

        if (array_key_exists("Hive",$param) and $param["Hive"] !== null) {
            $this->Hive = new HiveInfo();
            $this->Hive->deserialize($param["Hive"]);
        }

        if (array_key_exists("Kafka",$param) and $param["Kafka"] !== null) {
            $this->Kafka = new KafkaInfo();
            $this->Kafka->deserialize($param["Kafka"]);
        }

        if (array_key_exists("OtherDatasourceConnection",$param) and $param["OtherDatasourceConnection"] !== null) {
            $this->OtherDatasourceConnection = new OtherDatasourceConnection();
            $this->OtherDatasourceConnection->deserialize($param["OtherDatasourceConnection"]);
        }

        if (array_key_exists("PostgreSql",$param) and $param["PostgreSql"] !== null) {
            $this->PostgreSql = new DataSourceInfo();
            $this->PostgreSql->deserialize($param["PostgreSql"]);
        }

        if (array_key_exists("SqlServer",$param) and $param["SqlServer"] !== null) {
            $this->SqlServer = new DataSourceInfo();
            $this->SqlServer->deserialize($param["SqlServer"]);
        }

        if (array_key_exists("ClickHouse",$param) and $param["ClickHouse"] !== null) {
            $this->ClickHouse = new DataSourceInfo();
            $this->ClickHouse->deserialize($param["ClickHouse"]);
        }

        if (array_key_exists("Elasticsearch",$param) and $param["Elasticsearch"] !== null) {
            $this->Elasticsearch = new ElasticsearchInfo();
            $this->Elasticsearch->deserialize($param["Elasticsearch"]);
        }

        if (array_key_exists("TDSQLPostgreSql",$param) and $param["TDSQLPostgreSql"] !== null) {
            $this->TDSQLPostgreSql = new DataSourceInfo();
            $this->TDSQLPostgreSql->deserialize($param["TDSQLPostgreSql"]);
        }

        if (array_key_exists("TCHouseD",$param) and $param["TCHouseD"] !== null) {
            $this->TCHouseD = new TCHouseD();
            $this->TCHouseD->deserialize($param["TCHouseD"]);
        }

        if (array_key_exists("TccHive",$param) and $param["TccHive"] !== null) {
            $this->TccHive = new TccHive();
            $this->TccHive->deserialize($param["TccHive"]);
        }

        if (array_key_exists("MongoDB",$param) and $param["MongoDB"] !== null) {
            $this->MongoDB = new DataSourceInfo();
            $this->MongoDB->deserialize($param["MongoDB"]);
        }
    }
}
