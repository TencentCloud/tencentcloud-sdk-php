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
 * CreateHiveTableByDDL请求参数结构体
 *
 * @method string getDatasourceId() 获取数据源ID
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getDDLSql() 获取建hive表ddl
 * @method void setDDLSql(string $DDLSql) 设置建hive表ddl
 * @method integer getPrivilege() 获取表权限 ，默认为0:项目共享;1:仅个人与管理员
 * @method void setPrivilege(integer $Privilege) 设置表权限 ，默认为0:项目共享;1:仅个人与管理员
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getType() 获取目标表类型(HIVE或GBASE)
 * @method void setType(string $Type) 设置目标表类型(HIVE或GBASE)
 * @method string getIncharge() 获取责任人
 * @method void setIncharge(string $Incharge) 设置责任人
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method boolean getAsync() 获取是否异步建表
 * @method void setAsync(boolean $Async) 设置是否异步建表
 * @method string getDataOptimizationResource() 获取数据优化使用的资源
 * @method void setDataOptimizationResource(string $DataOptimizationResource) 设置数据优化使用的资源
 * @method string getSmartOptimizerWritten() 获取是否开启数据优化
 * @method void setSmartOptimizerWritten(string $SmartOptimizerWritten) 设置是否开启数据优化
 * @method string getTableName() 获取数据优化表名
 * @method void setTableName(string $TableName) 设置数据优化表名
 */
class CreateHiveTableByDDLRequest extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DatasourceId;

    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string 建hive表ddl
     */
    public $DDLSql;

    /**
     * @var integer 表权限 ，默认为0:项目共享;1:仅个人与管理员
     */
    public $Privilege;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 目标表类型(HIVE或GBASE)
     */
    public $Type;

    /**
     * @var string 责任人
     */
    public $Incharge;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var boolean 是否异步建表
     */
    public $Async;

    /**
     * @var string 数据优化使用的资源
     */
    public $DataOptimizationResource;

    /**
     * @var string 是否开启数据优化
     */
    public $SmartOptimizerWritten;

    /**
     * @var string 数据优化表名
     */
    public $TableName;

    /**
     * @param string $DatasourceId 数据源ID
     * @param string $Database 数据库
     * @param string $DDLSql 建hive表ddl
     * @param integer $Privilege 表权限 ，默认为0:项目共享;1:仅个人与管理员
     * @param string $ProjectId 项目ID
     * @param string $Type 目标表类型(HIVE或GBASE)
     * @param string $Incharge 责任人
     * @param string $SchemaName schema名称
     * @param boolean $Async 是否异步建表
     * @param string $DataOptimizationResource 数据优化使用的资源
     * @param string $SmartOptimizerWritten 是否开启数据优化
     * @param string $TableName 数据优化表名
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("DDLSql",$param) and $param["DDLSql"] !== null) {
            $this->DDLSql = $param["DDLSql"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Async",$param) and $param["Async"] !== null) {
            $this->Async = $param["Async"];
        }

        if (array_key_exists("DataOptimizationResource",$param) and $param["DataOptimizationResource"] !== null) {
            $this->DataOptimizationResource = $param["DataOptimizationResource"];
        }

        if (array_key_exists("SmartOptimizerWritten",$param) and $param["SmartOptimizerWritten"] !== null) {
            $this->SmartOptimizerWritten = $param["SmartOptimizerWritten"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
