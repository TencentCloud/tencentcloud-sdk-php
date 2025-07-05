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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移对象信息，在配置库表视图等对象信息时大小写敏感
 *
 * @method string getDbName() 获取需要迁移或同步的库名，当ObjectMode为partial时，此项必填
 * @method void setDbName(string $DbName) 设置需要迁移或同步的库名，当ObjectMode为partial时，此项必填
 * @method string getNewDbName() 获取迁移或同步后的库名，默认与源库相同
 * @method void setNewDbName(string $NewDbName) 设置迁移或同步后的库名，默认与源库相同
 * @method string getSchemaName() 获取迁移或同步的 schema
 * @method void setSchemaName(string $SchemaName) 设置迁移或同步的 schema
 * @method string getNewSchemaName() 获取迁移或同步后的 schema name
 * @method void setNewSchemaName(string $NewSchemaName) 设置迁移或同步后的 schema name
 * @method string getDBMode() 获取DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填
 * @method void setDBMode(string $DBMode) 设置DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填
 * @method string getSchemaMode() 获取schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)
 * @method void setSchemaMode(string $SchemaMode) 设置schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)
 * @method string getTableMode() 获取表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填
 * @method void setTableMode(string $TableMode) 设置表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填
 * @method array getTables() 获取表图对象集合，当 TableMode 为 partial 时，此项需要填写
 * @method void setTables(array $Tables) 设置表图对象集合，当 TableMode 为 partial 时，此项需要填写
 * @method string getViewMode() 获取视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象
 * @method void setViewMode(string $ViewMode) 设置视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象
 * @method array getViews() 获取视图对象集合，当 ViewMode 为 partial 时， 此项需要填写
 * @method void setViews(array $Views) 设置视图对象集合，当 ViewMode 为 partial 时， 此项需要填写
 * @method string getRoleMode() 获取postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象
 * @method void setRoleMode(string $RoleMode) 设置postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象
 * @method array getRoles() 获取postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写
 * @method void setRoles(array $Roles) 设置postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写
 * @method string getFunctionMode() 获取选择要同步的模式，partial为部分，all为整选
 * @method void setFunctionMode(string $FunctionMode) 设置选择要同步的模式，partial为部分，all为整选
 * @method string getTriggerMode() 获取选择要同步的模式，partial为部分，all为整选
 * @method void setTriggerMode(string $TriggerMode) 设置选择要同步的模式，partial为部分，all为整选
 * @method string getEventMode() 获取选择要同步的模式，partial为部分，all为整选
 * @method void setEventMode(string $EventMode) 设置选择要同步的模式，partial为部分，all为整选
 * @method string getProcedureMode() 获取选择要同步的模式，partial为部分，all为整选
 * @method void setProcedureMode(string $ProcedureMode) 设置选择要同步的模式，partial为部分，all为整选
 * @method array getFunctions() 获取FunctionMode取值为partial时需要填写
 * @method void setFunctions(array $Functions) 设置FunctionMode取值为partial时需要填写
 * @method array getProcedures() 获取ProcedureMode取值为partial时需要填写
 * @method void setProcedures(array $Procedures) 设置ProcedureMode取值为partial时需要填写
 * @method array getEvents() 获取EventMode取值为partial时需要填写
 * @method void setEvents(array $Events) 设置EventMode取值为partial时需要填写
 * @method array getTriggers() 获取TriggerMode取值为partial时需要填写
 * @method void setTriggers(array $Triggers) 设置TriggerMode取值为partial时需要填写
 */
class DBItem extends AbstractModel
{
    /**
     * @var string 需要迁移或同步的库名，当ObjectMode为partial时，此项必填
     */
    public $DbName;

    /**
     * @var string 迁移或同步后的库名，默认与源库相同
     */
    public $NewDbName;

    /**
     * @var string 迁移或同步的 schema
     */
    public $SchemaName;

    /**
     * @var string 迁移或同步后的 schema name
     */
    public $NewSchemaName;

    /**
     * @var string DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填
     */
    public $DBMode;

    /**
     * @var string schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)
     */
    public $SchemaMode;

    /**
     * @var string 表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填
     */
    public $TableMode;

    /**
     * @var array 表图对象集合，当 TableMode 为 partial 时，此项需要填写
     */
    public $Tables;

    /**
     * @var string 视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象
     */
    public $ViewMode;

    /**
     * @var array 视图对象集合，当 ViewMode 为 partial 时， 此项需要填写
     */
    public $Views;

    /**
     * @var string postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象
     */
    public $RoleMode;

    /**
     * @var array postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写
     */
    public $Roles;

    /**
     * @var string 选择要同步的模式，partial为部分，all为整选
     */
    public $FunctionMode;

    /**
     * @var string 选择要同步的模式，partial为部分，all为整选
     */
    public $TriggerMode;

    /**
     * @var string 选择要同步的模式，partial为部分，all为整选
     */
    public $EventMode;

    /**
     * @var string 选择要同步的模式，partial为部分，all为整选
     */
    public $ProcedureMode;

    /**
     * @var array FunctionMode取值为partial时需要填写
     */
    public $Functions;

    /**
     * @var array ProcedureMode取值为partial时需要填写
     */
    public $Procedures;

    /**
     * @var array EventMode取值为partial时需要填写
     */
    public $Events;

    /**
     * @var array TriggerMode取值为partial时需要填写
     */
    public $Triggers;

    /**
     * @param string $DbName 需要迁移或同步的库名，当ObjectMode为partial时，此项必填
     * @param string $NewDbName 迁移或同步后的库名，默认与源库相同
     * @param string $SchemaName 迁移或同步的 schema
     * @param string $NewSchemaName 迁移或同步后的 schema name
     * @param string $DBMode DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填
     * @param string $SchemaMode schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)
     * @param string $TableMode 表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填
     * @param array $Tables 表图对象集合，当 TableMode 为 partial 时，此项需要填写
     * @param string $ViewMode 视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象
     * @param array $Views 视图对象集合，当 ViewMode 为 partial 时， 此项需要填写
     * @param string $RoleMode postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象
     * @param array $Roles postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写
     * @param string $FunctionMode 选择要同步的模式，partial为部分，all为整选
     * @param string $TriggerMode 选择要同步的模式，partial为部分，all为整选
     * @param string $EventMode 选择要同步的模式，partial为部分，all为整选
     * @param string $ProcedureMode 选择要同步的模式，partial为部分，all为整选
     * @param array $Functions FunctionMode取值为partial时需要填写
     * @param array $Procedures ProcedureMode取值为partial时需要填写
     * @param array $Events EventMode取值为partial时需要填写
     * @param array $Triggers TriggerMode取值为partial时需要填写
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("NewDbName",$param) and $param["NewDbName"] !== null) {
            $this->NewDbName = $param["NewDbName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("NewSchemaName",$param) and $param["NewSchemaName"] !== null) {
            $this->NewSchemaName = $param["NewSchemaName"];
        }

        if (array_key_exists("DBMode",$param) and $param["DBMode"] !== null) {
            $this->DBMode = $param["DBMode"];
        }

        if (array_key_exists("SchemaMode",$param) and $param["SchemaMode"] !== null) {
            $this->SchemaMode = $param["SchemaMode"];
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new TableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("ViewMode",$param) and $param["ViewMode"] !== null) {
            $this->ViewMode = $param["ViewMode"];
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new ViewItem();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("RoleMode",$param) and $param["RoleMode"] !== null) {
            $this->RoleMode = $param["RoleMode"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleItem();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("FunctionMode",$param) and $param["FunctionMode"] !== null) {
            $this->FunctionMode = $param["FunctionMode"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("EventMode",$param) and $param["EventMode"] !== null) {
            $this->EventMode = $param["EventMode"];
        }

        if (array_key_exists("ProcedureMode",$param) and $param["ProcedureMode"] !== null) {
            $this->ProcedureMode = $param["ProcedureMode"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = $param["Procedures"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = $param["Triggers"];
        }
    }
}
