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
 * 查询连接源具体数据的返参
 *
 * @method string getResourceId() 获取<p>连接源的Id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>连接源的Id</p>
 * @method string getResourceName() 获取<p>连接源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>连接源名称</p>
 * @method string getDescription() 获取<p>连接源描述</p>
 * @method void setDescription(string $Description) 设置<p>连接源描述</p>
 * @method string getType() 获取<p>连接源类型</p>
 * @method void setType(string $Type) 设置<p>连接源类型</p>
 * @method integer getStatus() 获取<p>连接源的状态</p>
 * @method void setStatus(integer $Status) 设置<p>连接源的状态</p>
 * @method string getCreateTime() 获取<p>连接源的创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>连接源的创建时间</p>
 * @method string getErrorMessage() 获取<p>连接源的异常信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>连接源的异常信息</p>
 * @method integer getDatahubTaskCount() 获取<p>该连接源关联的Datahub任务数</p>
 * @method void setDatahubTaskCount(integer $DatahubTaskCount) 设置<p>该连接源关联的Datahub任务数</p>
 * @method string getCurrentStep() 获取<p>连接源的当前所处步骤</p>
 * @method void setCurrentStep(string $CurrentStep) 设置<p>连接源的当前所处步骤</p>
 * @method float getTaskProgress() 获取<p>创建进度百分比</p>
 * @method void setTaskProgress(float $TaskProgress) 设置<p>创建进度百分比</p>
 * @method array getStepList() 获取<p>步骤列表</p>
 * @method void setStepList(array $StepList) 设置<p>步骤列表</p>
 * @method DtsConnectParam getDtsConnectParam() 获取<p>Dts配置，Type为DTS时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDtsConnectParam(DtsConnectParam $DtsConnectParam) 设置<p>Dts配置，Type为DTS时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoDBConnectParam getMongoDBConnectParam() 获取<p>MongoDB配置，Type为MONGODB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongoDBConnectParam(MongoDBConnectParam $MongoDBConnectParam) 设置<p>MongoDB配置，Type为MONGODB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsConnectParam getEsConnectParam() 获取<p>Es配置，Type为ES时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsConnectParam(EsConnectParam $EsConnectParam) 设置<p>Es配置，Type为ES时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClickHouseConnectParam getClickHouseConnectParam() 获取<p>ClickHouse配置，Type为CLICKHOUSE时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouseConnectParam(ClickHouseConnectParam $ClickHouseConnectParam) 设置<p>ClickHouse配置，Type为CLICKHOUSE时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MySQLConnectParam getMySQLConnectParam() 获取<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMySQLConnectParam(MySQLConnectParam $MySQLConnectParam) 设置<p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostgreSQLConnectParam getPostgreSQLConnectParam() 获取<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSQLConnectParam(PostgreSQLConnectParam $PostgreSQLConnectParam) 设置<p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MariaDBConnectParam getMariaDBConnectParam() 获取<p>MariaDB配置，Type为MARIADB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMariaDBConnectParam(MariaDBConnectParam $MariaDBConnectParam) 设置<p>MariaDB配置，Type为MARIADB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SQLServerConnectParam getSQLServerConnectParam() 获取<p>SQLServer配置，Type为SQLSERVER时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLServerConnectParam(SQLServerConnectParam $SQLServerConnectParam) 设置<p>SQLServer配置，Type为SQLSERVER时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CtsdbConnectParam getCtsdbConnectParam() 获取<p>Ctsdb配置，Type为CTSDB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCtsdbConnectParam(CtsdbConnectParam $CtsdbConnectParam) 设置<p>Ctsdb配置，Type为CTSDB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DorisConnectParam getDorisConnectParam() 获取<p>Doris 配置，Type 为 DORIS 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDorisConnectParam(DorisConnectParam $DorisConnectParam) 设置<p>Doris 配置，Type 为 DORIS 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaConnectParam getKafkaConnectParam() 获取<p>Kafka配置，Type 为 KAFKA 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaConnectParam(KafkaConnectParam $KafkaConnectParam) 设置<p>Kafka配置，Type 为 KAFKA 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MqttConnectParam getMqttConnectParam() 获取<p>MQTT配置，Type 为 MQTT 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMqttConnectParam(MqttConnectParam $MqttConnectParam) 设置<p>MQTT配置，Type 为 MQTT 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class DescribeConnectResource extends AbstractModel
{
    /**
     * @var string <p>连接源的Id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>连接源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>连接源描述</p>
     */
    public $Description;

    /**
     * @var string <p>连接源类型</p>
     */
    public $Type;

    /**
     * @var integer <p>连接源的状态</p>
     */
    public $Status;

    /**
     * @var string <p>连接源的创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>连接源的异常信息</p>
     */
    public $ErrorMessage;

    /**
     * @var integer <p>该连接源关联的Datahub任务数</p>
     */
    public $DatahubTaskCount;

    /**
     * @var string <p>连接源的当前所处步骤</p>
     */
    public $CurrentStep;

    /**
     * @var float <p>创建进度百分比</p>
     */
    public $TaskProgress;

    /**
     * @var array <p>步骤列表</p>
     */
    public $StepList;

    /**
     * @var DtsConnectParam <p>Dts配置，Type为DTS时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBConnectParam <p>MongoDB配置，Type为MONGODB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongoDBConnectParam;

    /**
     * @var EsConnectParam <p>Es配置，Type为ES时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBConnectParam <p>MariaDB配置，Type为MARIADB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerConnectParam <p>SQLServer配置，Type为SQLSERVER时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLServerConnectParam;

    /**
     * @var CtsdbConnectParam <p>Ctsdb配置，Type为CTSDB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CtsdbConnectParam;

    /**
     * @var DorisConnectParam <p>Doris 配置，Type 为 DORIS 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DorisConnectParam;

    /**
     * @var KafkaConnectParam <p>Kafka配置，Type 为 KAFKA 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaConnectParam;

    /**
     * @var MqttConnectParam <p>MQTT配置，Type 为 MQTT 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MqttConnectParam;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $ResourceId <p>连接源的Id</p>
     * @param string $ResourceName <p>连接源名称</p>
     * @param string $Description <p>连接源描述</p>
     * @param string $Type <p>连接源类型</p>
     * @param integer $Status <p>连接源的状态</p>
     * @param string $CreateTime <p>连接源的创建时间</p>
     * @param string $ErrorMessage <p>连接源的异常信息</p>
     * @param integer $DatahubTaskCount <p>该连接源关联的Datahub任务数</p>
     * @param string $CurrentStep <p>连接源的当前所处步骤</p>
     * @param float $TaskProgress <p>创建进度百分比</p>
     * @param array $StepList <p>步骤列表</p>
     * @param DtsConnectParam $DtsConnectParam <p>Dts配置，Type为DTS时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoDBConnectParam $MongoDBConnectParam <p>MongoDB配置，Type为MONGODB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsConnectParam $EsConnectParam <p>Es配置，Type为ES时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClickHouseConnectParam $ClickHouseConnectParam <p>ClickHouse配置，Type为CLICKHOUSE时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MySQLConnectParam $MySQLConnectParam <p>MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostgreSQLConnectParam $PostgreSQLConnectParam <p>PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MariaDBConnectParam $MariaDBConnectParam <p>MariaDB配置，Type为MARIADB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SQLServerConnectParam $SQLServerConnectParam <p>SQLServer配置，Type为SQLSERVER时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CtsdbConnectParam $CtsdbConnectParam <p>Ctsdb配置，Type为CTSDB时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DorisConnectParam $DorisConnectParam <p>Doris 配置，Type 为 DORIS 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaConnectParam $KafkaConnectParam <p>Kafka配置，Type 为 KAFKA 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MqttConnectParam $MqttConnectParam <p>MQTT配置，Type 为 MQTT 时返回</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("DatahubTaskCount",$param) and $param["DatahubTaskCount"] !== null) {
            $this->DatahubTaskCount = $param["DatahubTaskCount"];
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("TaskProgress",$param) and $param["TaskProgress"] !== null) {
            $this->TaskProgress = $param["TaskProgress"];
        }

        if (array_key_exists("StepList",$param) and $param["StepList"] !== null) {
            $this->StepList = $param["StepList"];
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

        if (array_key_exists("CtsdbConnectParam",$param) and $param["CtsdbConnectParam"] !== null) {
            $this->CtsdbConnectParam = new CtsdbConnectParam();
            $this->CtsdbConnectParam->deserialize($param["CtsdbConnectParam"]);
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
