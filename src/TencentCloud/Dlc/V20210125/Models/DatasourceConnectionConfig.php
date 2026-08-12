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
 * @method MysqlInfo getMysql() 获取<p>Mysql数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysql(MysqlInfo $Mysql) 设置<p>Mysql数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HiveInfo getHive() 获取<p>Hive数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHive(HiveInfo $Hive) 设置<p>Hive数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaInfo getKafka() 获取<p>Kafka数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafka(KafkaInfo $Kafka) 设置<p>Kafka数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtherDatasourceConnection getOtherDatasourceConnection() 获取<p>其他数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherDatasourceConnection(OtherDatasourceConnection $OtherDatasourceConnection) 设置<p>其他数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getPostgreSql() 获取<p>PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSql(DataSourceInfo $PostgreSql) 设置<p>PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getSqlServer() 获取<p>SQLServer数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlServer(DataSourceInfo $SqlServer) 设置<p>SQLServer数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getClickHouse() 获取<p>ClickHouse数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouse(DataSourceInfo $ClickHouse) 设置<p>ClickHouse数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ElasticsearchInfo getElasticsearch() 获取<p>Elasticsearch数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticsearch(ElasticsearchInfo $Elasticsearch) 设置<p>Elasticsearch数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSourceInfo getTDSQLPostgreSql() 获取<p>TDSQL-PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTDSQLPostgreSql(DataSourceInfo $TDSQLPostgreSql) 设置<p>TDSQL-PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TCHouseD getTCHouseD() 获取<p>Doris数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTCHouseD(TCHouseD $TCHouseD) 设置<p>Doris数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TccHive getTccHive() 获取<p>TccHive数据目录连接信息</p>
 * @method void setTccHive(TccHive $TccHive) 设置<p>TccHive数据目录连接信息</p>
 * @method DataSourceInfo getMongoDB() 获取<p>MongoDB 数据源</p>
 * @method void setMongoDB(DataSourceInfo $MongoDB) 设置<p>MongoDB 数据源</p>
 * @method TCHousePInfo getTCHouseP() 获取<p>TCHouseP数据源</p>
 * @method void setTCHouseP(TCHousePInfo $TCHouseP) 设置<p>TCHouseP数据源</p>
 */
class DatasourceConnectionConfig extends AbstractModel
{
    /**
     * @var MysqlInfo <p>Mysql数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mysql;

    /**
     * @var HiveInfo <p>Hive数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hive;

    /**
     * @var KafkaInfo <p>Kafka数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kafka;

    /**
     * @var OtherDatasourceConnection <p>其他数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherDatasourceConnection;

    /**
     * @var DataSourceInfo <p>PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSql;

    /**
     * @var DataSourceInfo <p>SQLServer数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlServer;

    /**
     * @var DataSourceInfo <p>ClickHouse数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouse;

    /**
     * @var ElasticsearchInfo <p>Elasticsearch数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elasticsearch;

    /**
     * @var DataSourceInfo <p>TDSQL-PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TDSQLPostgreSql;

    /**
     * @var TCHouseD <p>Doris数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TCHouseD;

    /**
     * @var TccHive <p>TccHive数据目录连接信息</p>
     */
    public $TccHive;

    /**
     * @var DataSourceInfo <p>MongoDB 数据源</p>
     */
    public $MongoDB;

    /**
     * @var TCHousePInfo <p>TCHouseP数据源</p>
     */
    public $TCHouseP;

    /**
     * @param MysqlInfo $Mysql <p>Mysql数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HiveInfo $Hive <p>Hive数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaInfo $Kafka <p>Kafka数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtherDatasourceConnection $OtherDatasourceConnection <p>其他数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $PostgreSql <p>PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $SqlServer <p>SQLServer数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $ClickHouse <p>ClickHouse数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ElasticsearchInfo $Elasticsearch <p>Elasticsearch数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSourceInfo $TDSQLPostgreSql <p>TDSQL-PostgreSQL数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TCHouseD $TCHouseD <p>Doris数据源连接的属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TccHive $TccHive <p>TccHive数据目录连接信息</p>
     * @param DataSourceInfo $MongoDB <p>MongoDB 数据源</p>
     * @param TCHousePInfo $TCHouseP <p>TCHouseP数据源</p>
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

        if (array_key_exists("TCHouseP",$param) and $param["TCHouseP"] !== null) {
            $this->TCHouseP = new TCHousePInfo();
            $this->TCHouseP->deserialize($param["TCHouseP"]);
        }
    }
}
