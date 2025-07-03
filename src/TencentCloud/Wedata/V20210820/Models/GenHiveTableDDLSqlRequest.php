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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenHiveTableDDLSql请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getSinkDatabase() 获取目标数据库
 * @method void setSinkDatabase(string $SinkDatabase) 设置目标数据库
 * @method string getId() 获取节点id
 * @method void setId(string $Id) 设置节点id
 * @method string getMsType() 获取元数据类型(MYSQL、ORACLE)
 * @method void setMsType(string $MsType) 设置元数据类型(MYSQL、ORACLE)
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getSourceDatabase() 获取来源库名
 * @method void setSourceDatabase(string $SourceDatabase) 设置来源库名
 * @method string getTableName() 获取来源表名
 * @method void setTableName(string $TableName) 设置来源表名
 * @method string getSinkType() 获取目标表元数据类型(HIVE、GBASE)
 * @method void setSinkType(string $SinkType) 设置目标表元数据类型(HIVE、GBASE)
 * @method string getSchemaName() 获取源端schema名称
 * @method void setSchemaName(string $SchemaName) 设置源端schema名称
 * @method array getSourceFieldInfoList() 获取上游节点的字段信息
 * @method void setSourceFieldInfoList(array $SourceFieldInfoList) 设置上游节点的字段信息
 * @method array getPartitions() 获取分区字段
 * @method void setPartitions(array $Partitions) 设置分区字段
 * @method array getProperties() 获取建表属性
 * @method void setProperties(array $Properties) 设置建表属性
 * @method integer getTableMode() 获取建表模式，0:向导模式，1:ddl
 * @method void setTableMode(integer $TableMode) 设置建表模式，0:向导模式，1:ddl
 * @method string getTableVersion() 获取DLC表版本，v1/v2
 * @method void setTableVersion(string $TableVersion) 设置DLC表版本，v1/v2
 * @method boolean getUpsertFlag() 获取是否upsert写入
 * @method void setUpsertFlag(boolean $UpsertFlag) 设置是否upsert写入
 * @method string getTableComment() 获取表描述信息
 * @method void setTableComment(string $TableComment) 设置表描述信息
 * @method integer getAddDataFiles() 获取增加的文件数量阈值, 超过值将触发小文件合并
 * @method void setAddDataFiles(integer $AddDataFiles) 设置增加的文件数量阈值, 超过值将触发小文件合并
 * @method integer getAddEqualityDeletes() 获取增加的Equality delete数量阈值, 超过值将触发小文件合并
 * @method void setAddEqualityDeletes(integer $AddEqualityDeletes) 设置增加的Equality delete数量阈值, 超过值将触发小文件合并
 * @method integer getAddPositionDeletes() 获取增加的Position delete数量阈值, 超过值将触发小文件合并
 * @method void setAddPositionDeletes(integer $AddPositionDeletes) 设置增加的Position delete数量阈值, 超过值将触发小文件合并
 * @method integer getAddDeleteFiles() 获取增加的delete file数量阈值
 * @method void setAddDeleteFiles(integer $AddDeleteFiles) 设置增加的delete file数量阈值
 * @method string getTargetDatasourceId() 获取下游节点数据源ID
 * @method void setTargetDatasourceId(string $TargetDatasourceId) 设置下游节点数据源ID
 * @method array getUpsertKeys() 获取dlc upsert主键
 * @method void setUpsertKeys(array $UpsertKeys) 设置dlc upsert主键
 * @method TableBaseInfo getTableBaseInfo() 获取dlc表治理信息
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) 设置dlc表治理信息
 * @method string getSinkSchemaName() 获取目标端schema名称
 * @method void setSinkSchemaName(string $SinkSchemaName) 设置目标端schema名称
 * @method string getEnv() 获取获取源信息的环境
 * @method void setEnv(string $Env) 设置获取源信息的环境
 * @method string getWriteMode() 获取doris写入模式配置
 * @method void setWriteMode(string $WriteMode) 设置doris写入模式配置
 * @method integer getTaskType() 获取任务类型 201（实时）， 202（离线） 
 * @method void setTaskType(integer $TaskType) 设置任务类型 201（实时）， 202（离线） 
 * @method string getSinkTableName() 获取目标端table名称
 * @method void setSinkTableName(string $SinkTableName) 设置目标端table名称
 */
class GenHiveTableDDLSqlRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 目标数据库
     */
    public $SinkDatabase;

    /**
     * @var string 节点id
     */
    public $Id;

    /**
     * @var string 元数据类型(MYSQL、ORACLE)
     */
    public $MsType;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 来源库名
     */
    public $SourceDatabase;

    /**
     * @var string 来源表名
     */
    public $TableName;

    /**
     * @var string 目标表元数据类型(HIVE、GBASE)
     */
    public $SinkType;

    /**
     * @var string 源端schema名称
     */
    public $SchemaName;

    /**
     * @var array 上游节点的字段信息
     */
    public $SourceFieldInfoList;

    /**
     * @var array 分区字段
     */
    public $Partitions;

    /**
     * @var array 建表属性
     */
    public $Properties;

    /**
     * @var integer 建表模式，0:向导模式，1:ddl
     */
    public $TableMode;

    /**
     * @var string DLC表版本，v1/v2
     */
    public $TableVersion;

    /**
     * @var boolean 是否upsert写入
     */
    public $UpsertFlag;

    /**
     * @var string 表描述信息
     */
    public $TableComment;

    /**
     * @var integer 增加的文件数量阈值, 超过值将触发小文件合并
     */
    public $AddDataFiles;

    /**
     * @var integer 增加的Equality delete数量阈值, 超过值将触发小文件合并
     */
    public $AddEqualityDeletes;

    /**
     * @var integer 增加的Position delete数量阈值, 超过值将触发小文件合并
     */
    public $AddPositionDeletes;

    /**
     * @var integer 增加的delete file数量阈值
     */
    public $AddDeleteFiles;

    /**
     * @var string 下游节点数据源ID
     */
    public $TargetDatasourceId;

    /**
     * @var array dlc upsert主键
     */
    public $UpsertKeys;

    /**
     * @var TableBaseInfo dlc表治理信息
     */
    public $TableBaseInfo;

    /**
     * @var string 目标端schema名称
     */
    public $SinkSchemaName;

    /**
     * @var string 获取源信息的环境
     */
    public $Env;

    /**
     * @var string doris写入模式配置
     */
    public $WriteMode;

    /**
     * @var integer 任务类型 201（实时）， 202（离线） 
     */
    public $TaskType;

    /**
     * @var string 目标端table名称
     */
    public $SinkTableName;

    /**
     * @param string $ProjectId 项目id
     * @param string $SinkDatabase 目标数据库
     * @param string $Id 节点id
     * @param string $MsType 元数据类型(MYSQL、ORACLE)
     * @param string $DatasourceId 数据源id
     * @param string $SourceDatabase 来源库名
     * @param string $TableName 来源表名
     * @param string $SinkType 目标表元数据类型(HIVE、GBASE)
     * @param string $SchemaName 源端schema名称
     * @param array $SourceFieldInfoList 上游节点的字段信息
     * @param array $Partitions 分区字段
     * @param array $Properties 建表属性
     * @param integer $TableMode 建表模式，0:向导模式，1:ddl
     * @param string $TableVersion DLC表版本，v1/v2
     * @param boolean $UpsertFlag 是否upsert写入
     * @param string $TableComment 表描述信息
     * @param integer $AddDataFiles 增加的文件数量阈值, 超过值将触发小文件合并
     * @param integer $AddEqualityDeletes 增加的Equality delete数量阈值, 超过值将触发小文件合并
     * @param integer $AddPositionDeletes 增加的Position delete数量阈值, 超过值将触发小文件合并
     * @param integer $AddDeleteFiles 增加的delete file数量阈值
     * @param string $TargetDatasourceId 下游节点数据源ID
     * @param array $UpsertKeys dlc upsert主键
     * @param TableBaseInfo $TableBaseInfo dlc表治理信息
     * @param string $SinkSchemaName 目标端schema名称
     * @param string $Env 获取源信息的环境
     * @param string $WriteMode doris写入模式配置
     * @param integer $TaskType 任务类型 201（实时）， 202（离线） 
     * @param string $SinkTableName 目标端table名称
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

        if (array_key_exists("SinkDatabase",$param) and $param["SinkDatabase"] !== null) {
            $this->SinkDatabase = $param["SinkDatabase"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("SourceDatabase",$param) and $param["SourceDatabase"] !== null) {
            $this->SourceDatabase = $param["SourceDatabase"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SinkType",$param) and $param["SinkType"] !== null) {
            $this->SinkType = $param["SinkType"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("SourceFieldInfoList",$param) and $param["SourceFieldInfoList"] !== null) {
            $this->SourceFieldInfoList = [];
            foreach ($param["SourceFieldInfoList"] as $key => $value){
                $obj = new SourceFieldInfo();
                $obj->deserialize($value);
                array_push($this->SourceFieldInfoList, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new Partition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("TableVersion",$param) and $param["TableVersion"] !== null) {
            $this->TableVersion = $param["TableVersion"];
        }

        if (array_key_exists("UpsertFlag",$param) and $param["UpsertFlag"] !== null) {
            $this->UpsertFlag = $param["UpsertFlag"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("AddDataFiles",$param) and $param["AddDataFiles"] !== null) {
            $this->AddDataFiles = $param["AddDataFiles"];
        }

        if (array_key_exists("AddEqualityDeletes",$param) and $param["AddEqualityDeletes"] !== null) {
            $this->AddEqualityDeletes = $param["AddEqualityDeletes"];
        }

        if (array_key_exists("AddPositionDeletes",$param) and $param["AddPositionDeletes"] !== null) {
            $this->AddPositionDeletes = $param["AddPositionDeletes"];
        }

        if (array_key_exists("AddDeleteFiles",$param) and $param["AddDeleteFiles"] !== null) {
            $this->AddDeleteFiles = $param["AddDeleteFiles"];
        }

        if (array_key_exists("TargetDatasourceId",$param) and $param["TargetDatasourceId"] !== null) {
            $this->TargetDatasourceId = $param["TargetDatasourceId"];
        }

        if (array_key_exists("UpsertKeys",$param) and $param["UpsertKeys"] !== null) {
            $this->UpsertKeys = $param["UpsertKeys"];
        }

        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("SinkSchemaName",$param) and $param["SinkSchemaName"] !== null) {
            $this->SinkSchemaName = $param["SinkSchemaName"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("WriteMode",$param) and $param["WriteMode"] !== null) {
            $this->WriteMode = $param["WriteMode"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("SinkTableName",$param) and $param["SinkTableName"] !== null) {
            $this->SinkTableName = $param["SinkTableName"];
        }
    }
}
