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
 * @method string getDbName() 获取<p>需要迁移或同步的库名，当ObjectMode为partial时，此项必填</p>
 * @method void setDbName(string $DbName) 设置<p>需要迁移或同步的库名，当ObjectMode为partial时，此项必填</p>
 * @method string getNewDbName() 获取<p>迁移或同步后的库名，默认与源库相同</p>
 * @method void setNewDbName(string $NewDbName) 设置<p>迁移或同步后的库名，默认与源库相同</p>
 * @method string getSchemaName() 获取<p>迁移或同步的 schema</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>迁移或同步的 schema</p>
 * @method string getNewSchemaName() 获取<p>迁移或同步后的 schema name</p>
 * @method void setNewSchemaName(string $NewSchemaName) 设置<p>迁移或同步后的 schema name</p>
 * @method string getDBMode() 获取<p>DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填</p>
 * @method void setDBMode(string $DBMode) 设置<p>DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填</p>
 * @method string getSchemaMode() 获取<p>schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)</p>
 * @method void setSchemaMode(string $SchemaMode) 设置<p>schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)</p>
 * @method string getTableMode() 获取<p>表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填</p>
 * @method void setTableMode(string $TableMode) 设置<p>表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填</p>
 * @method array getTables() 获取<p>表图对象集合，当 TableMode 为 partial 时，此项需要填写</p>
 * @method void setTables(array $Tables) 设置<p>表图对象集合，当 TableMode 为 partial 时，此项需要填写</p>
 * @method string getViewMode() 获取<p>视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象</p>
 * @method void setViewMode(string $ViewMode) 设置<p>视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象</p>
 * @method array getViews() 获取<p>视图对象集合，当 ViewMode 为 partial 时， 此项需要填写</p>
 * @method void setViews(array $Views) 设置<p>视图对象集合，当 ViewMode 为 partial 时， 此项需要填写</p>
 * @method string getRoleMode() 获取<p>postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象</p>
 * @method void setRoleMode(string $RoleMode) 设置<p>postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象</p>
 * @method array getRoles() 获取<p>postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写</p>
 * @method void setRoles(array $Roles) 设置<p>postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写</p>
 * @method string getFunctionMode() 获取<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method void setFunctionMode(string $FunctionMode) 设置<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method string getTriggerMode() 获取<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method void setTriggerMode(string $TriggerMode) 设置<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method string getEventMode() 获取<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method void setEventMode(string $EventMode) 设置<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method string getProcedureMode() 获取<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method void setProcedureMode(string $ProcedureMode) 设置<p>选择要同步的模式，partial为部分，all为整选</p>
 * @method array getFunctions() 获取<p>FunctionMode取值为partial时需要填写</p>
 * @method void setFunctions(array $Functions) 设置<p>FunctionMode取值为partial时需要填写</p>
 * @method array getProcedures() 获取<p>ProcedureMode取值为partial时需要填写</p>
 * @method void setProcedures(array $Procedures) 设置<p>ProcedureMode取值为partial时需要填写</p>
 * @method array getEvents() 获取<p>EventMode取值为partial时需要填写</p>
 * @method void setEvents(array $Events) 设置<p>EventMode取值为partial时需要填写</p>
 * @method array getTriggers() 获取<p>TriggerMode取值为partial时需要填写</p>
 * @method void setTriggers(array $Triggers) 设置<p>TriggerMode取值为partial时需要填写</p>
 */
class DBItem extends AbstractModel
{
    /**
     * @var string <p>需要迁移或同步的库名，当ObjectMode为partial时，此项必填</p>
     */
    public $DbName;

    /**
     * @var string <p>迁移或同步后的库名，默认与源库相同</p>
     */
    public $NewDbName;

    /**
     * @var string <p>迁移或同步的 schema</p>
     */
    public $SchemaName;

    /**
     * @var string <p>迁移或同步后的 schema name</p>
     */
    public $NewSchemaName;

    /**
     * @var string <p>DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填</p>
     */
    public $DBMode;

    /**
     * @var string <p>schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)</p>
     */
    public $SchemaMode;

    /**
     * @var string <p>表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填</p>
     */
    public $TableMode;

    /**
     * @var array <p>表图对象集合，当 TableMode 为 partial 时，此项需要填写</p>
     */
    public $Tables;

    /**
     * @var string <p>视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象</p>
     */
    public $ViewMode;

    /**
     * @var array <p>视图对象集合，当 ViewMode 为 partial 时， 此项需要填写</p>
     */
    public $Views;

    /**
     * @var string <p>postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象</p>
     */
    public $RoleMode;

    /**
     * @var array <p>postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写</p>
     */
    public $Roles;

    /**
     * @var string <p>选择要同步的模式，partial为部分，all为整选</p>
     */
    public $FunctionMode;

    /**
     * @var string <p>选择要同步的模式，partial为部分，all为整选</p>
     */
    public $TriggerMode;

    /**
     * @var string <p>选择要同步的模式，partial为部分，all为整选</p>
     */
    public $EventMode;

    /**
     * @var string <p>选择要同步的模式，partial为部分，all为整选</p>
     */
    public $ProcedureMode;

    /**
     * @var array <p>FunctionMode取值为partial时需要填写</p>
     */
    public $Functions;

    /**
     * @var array <p>ProcedureMode取值为partial时需要填写</p>
     */
    public $Procedures;

    /**
     * @var array <p>EventMode取值为partial时需要填写</p>
     */
    public $Events;

    /**
     * @var array <p>TriggerMode取值为partial时需要填写</p>
     */
    public $Triggers;

    /**
     * @param string $DbName <p>需要迁移或同步的库名，当ObjectMode为partial时，此项必填</p>
     * @param string $NewDbName <p>迁移或同步后的库名，默认与源库相同</p>
     * @param string $SchemaName <p>迁移或同步的 schema</p>
     * @param string $NewSchemaName <p>迁移或同步后的 schema name</p>
     * @param string $DBMode <p>DB选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当ObjectMode为partial时，此项必填</p>
     * @param string $SchemaMode <p>schema选择模式: all(为当前对象下的所有对象)，partial(部分对象)</p>
     * @param string $TableMode <p>表选择模式: all(为当前对象下的所有对象)，partial(部分对象)，当DBMode为partial时此项必填</p>
     * @param array $Tables <p>表图对象集合，当 TableMode 为 partial 时，此项需要填写</p>
     * @param string $ViewMode <p>视图选择模式: all 为当前对象下的所有视图对象,partial 为部分视图对象</p>
     * @param array $Views <p>视图对象集合，当 ViewMode 为 partial 时， 此项需要填写</p>
     * @param string $RoleMode <p>postgresql独有参数，角色选择模式: all 为当前对象下的所有角色对象,partial 为部分角色对象</p>
     * @param array $Roles <p>postgresql独有参数，当 RoleMode 为 partial 时， 此项需要填写</p>
     * @param string $FunctionMode <p>选择要同步的模式，partial为部分，all为整选</p>
     * @param string $TriggerMode <p>选择要同步的模式，partial为部分，all为整选</p>
     * @param string $EventMode <p>选择要同步的模式，partial为部分，all为整选</p>
     * @param string $ProcedureMode <p>选择要同步的模式，partial为部分，all为整选</p>
     * @param array $Functions <p>FunctionMode取值为partial时需要填写</p>
     * @param array $Procedures <p>ProcedureMode取值为partial时需要填写</p>
     * @param array $Events <p>EventMode取值为partial时需要填写</p>
     * @param array $Triggers <p>TriggerMode取值为partial时需要填写</p>
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
