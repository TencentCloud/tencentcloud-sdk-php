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
 * @method string getSourceDatabase() 获取来源库
 * @method void setSourceDatabase(string $SourceDatabase) 设置来源库
 * @method string getTableName() 获取来源表
 * @method void setTableName(string $TableName) 设置来源表
 * @method string getSinkType() 获取目标表元数据类型(HIVE、GBASE)
 * @method void setSinkType(string $SinkType) 设置目标表元数据类型(HIVE、GBASE)
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method array getSourceFieldInfoList() 获取上游节点的字段信息
 * @method void setSourceFieldInfoList(array $SourceFieldInfoList) 设置上游节点的字段信息
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
     * @var string 来源库
     */
    public $SourceDatabase;

    /**
     * @var string 来源表
     */
    public $TableName;

    /**
     * @var string 目标表元数据类型(HIVE、GBASE)
     */
    public $SinkType;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var array 上游节点的字段信息
     */
    public $SourceFieldInfoList;

    /**
     * @param string $ProjectId 项目id
     * @param string $SinkDatabase 目标数据库
     * @param string $Id 节点id
     * @param string $MsType 元数据类型(MYSQL、ORACLE)
     * @param string $DatasourceId 数据源id
     * @param string $SourceDatabase 来源库
     * @param string $TableName 来源表
     * @param string $SinkType 目标表元数据类型(HIVE、GBASE)
     * @param string $SchemaName schema名称
     * @param array $SourceFieldInfoList 上游节点的字段信息
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
    }
}
