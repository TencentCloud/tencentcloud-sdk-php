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
 * CreateHiveTable请求参数结构体
 *
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getDatabase() 获取数据库名称
 * @method void setDatabase(string $Database) 设置数据库名称
 * @method string getDDLSql() 获取base64转码之后的建表语句
 * @method void setDDLSql(string $DDLSql) 设置base64转码之后的建表语句
 * @method integer getPrivilege() 获取表权限 ，默认为0:项目共享;1:仅个人与管理员
 * @method void setPrivilege(integer $Privilege) 设置表权限 ，默认为0:项目共享;1:仅个人与管理员
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getIncharge() 获取责任人
 * @method void setIncharge(string $Incharge) 设置责任人
 * @method string getDataOptimizationResource() 获取数据优化引擎
 * @method void setDataOptimizationResource(string $DataOptimizationResource) 设置数据优化引擎
 * @method string getSmartOptimizerWritten() 获取是否开启数据优化
 * @method void setSmartOptimizerWritten(string $SmartOptimizerWritten) 设置是否开启数据优化
 * @method string getTableName() 获取数据优化针对的表
 * @method void setTableName(string $TableName) 设置数据优化针对的表
 */
class CreateHiveTableRequest extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
     */
    public $Database;

    /**
     * @var string base64转码之后的建表语句
     */
    public $DDLSql;

    /**
     * @var integer 表权限 ，默认为0:项目共享;1:仅个人与管理员
     */
    public $Privilege;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 责任人
     */
    public $Incharge;

    /**
     * @var string 数据优化引擎
     */
    public $DataOptimizationResource;

    /**
     * @var string 是否开启数据优化
     */
    public $SmartOptimizerWritten;

    /**
     * @var string 数据优化针对的表
     */
    public $TableName;

    /**
     * @param string $DatasourceId 数据源id
     * @param string $Database 数据库名称
     * @param string $DDLSql base64转码之后的建表语句
     * @param integer $Privilege 表权限 ，默认为0:项目共享;1:仅个人与管理员
     * @param string $ProjectId 项目Id
     * @param string $Incharge 责任人
     * @param string $DataOptimizationResource 数据优化引擎
     * @param string $SmartOptimizerWritten 是否开启数据优化
     * @param string $TableName 数据优化针对的表
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

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
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
