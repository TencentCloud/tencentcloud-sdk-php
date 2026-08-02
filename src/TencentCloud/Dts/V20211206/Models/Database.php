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
 * 需要同步的库表对象
 *
 * @method string getDbName() 获取<p>需要迁移或同步的库名，当ObjectMode为Partial时，此项必填</p>
 * @method void setDbName(string $DbName) 设置<p>需要迁移或同步的库名，当ObjectMode为Partial时，此项必填</p>
 * @method string getNewDbName() 获取<p>迁移或同步后的库名，默认与源库相同</p>
 * @method void setNewDbName(string $NewDbName) 设置<p>迁移或同步后的库名，默认与源库相同</p>
 * @method string getDbMode() 获取<p>DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。</p>
 * @method void setDbMode(string $DbMode) 设置<p>DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。</p>
 * @method string getSchemaName() 获取<p>迁移或同步的 schema</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>迁移或同步的 schema</p>
 * @method string getNewSchemaName() 获取<p>迁移或同步后的 schema name</p>
 * @method void setNewSchemaName(string $NewSchemaName) 设置<p>迁移或同步后的 schema name</p>
 * @method string getSchemaMode() 获取<p>schema选择模式，pg和sqlserver需要使用</p><p>枚举值：</p><ul><li>All： 当前对象下的所有对象</li><li>Partial： 部分对象</li></ul>
 * @method void setSchemaMode(string $SchemaMode) 设置<p>schema选择模式，pg和sqlserver需要使用</p><p>枚举值：</p><ul><li>All： 当前对象下的所有对象</li><li>Partial： 部分对象</li></ul>
 * @method string getTableMode() 获取<p>表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。</p>
 * @method void setTableMode(string $TableMode) 设置<p>表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。</p>
 * @method array getTables() 获取<p>表图对象集合，当 TableMode 为 Partial 时，此项需要填写</p>
 * @method void setTables(array $Tables) 设置<p>表图对象集合，当 TableMode 为 Partial 时，此项需要填写</p>
 * @method string getViewMode() 获取<p>视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。</p>
 * @method void setViewMode(string $ViewMode) 设置<p>视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。</p>
 * @method array getViews() 获取<p>视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写</p>
 * @method void setViews(array $Views) 设置<p>视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写</p>
 * @method string getFunctionMode() 获取<p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
 * @method void setFunctionMode(string $FunctionMode) 设置<p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
 * @method array getFunctions() 获取<p>FunctionMode取值为Partial时需要填写</p>
 * @method void setFunctions(array $Functions) 设置<p>FunctionMode取值为Partial时需要填写</p>
 * @method string getProcedureMode() 获取<p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
 * @method void setProcedureMode(string $ProcedureMode) 设置<p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
 * @method array getProcedures() 获取<p>ProcedureMode取值为Partial时需要填写</p>
 * @method void setProcedures(array $Procedures) 设置<p>ProcedureMode取值为Partial时需要填写</p>
 * @method string getTriggerMode() 获取<p>触发器迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
 * @method void setTriggerMode(string $TriggerMode) 设置<p>触发器迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
 * @method array getTriggers() 获取<p>当TriggerMode为partial，指定要迁移的触发器名称</p>
 * @method void setTriggers(array $Triggers) 设置<p>当TriggerMode为partial，指定要迁移的触发器名称</p>
 * @method string getEventMode() 获取<p>事件迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
 * @method void setEventMode(string $EventMode) 设置<p>事件迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
 * @method array getEvents() 获取<p>当EventMode为partial，指定要迁移的事件名称</p>
 * @method void setEvents(array $Events) 设置<p>当EventMode为partial，指定要迁移的事件名称</p>
 */
class Database extends AbstractModel
{
    /**
     * @var string <p>需要迁移或同步的库名，当ObjectMode为Partial时，此项必填</p>
     */
    public $DbName;

    /**
     * @var string <p>迁移或同步后的库名，默认与源库相同</p>
     */
    public $NewDbName;

    /**
     * @var string <p>DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。</p>
     */
    public $DbMode;

    /**
     * @var string <p>迁移或同步的 schema</p>
     */
    public $SchemaName;

    /**
     * @var string <p>迁移或同步后的 schema name</p>
     */
    public $NewSchemaName;

    /**
     * @var string <p>schema选择模式，pg和sqlserver需要使用</p><p>枚举值：</p><ul><li>All： 当前对象下的所有对象</li><li>Partial： 部分对象</li></ul>
     */
    public $SchemaMode;

    /**
     * @var string <p>表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。</p>
     */
    public $TableMode;

    /**
     * @var array <p>表图对象集合，当 TableMode 为 Partial 时，此项需要填写</p>
     */
    public $Tables;

    /**
     * @var string <p>视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。</p>
     */
    public $ViewMode;

    /**
     * @var array <p>视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写</p>
     */
    public $Views;

    /**
     * @var string <p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
     */
    public $FunctionMode;

    /**
     * @var array <p>FunctionMode取值为Partial时需要填写</p>
     */
    public $Functions;

    /**
     * @var string <p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
     */
    public $ProcedureMode;

    /**
     * @var array <p>ProcedureMode取值为Partial时需要填写</p>
     */
    public $Procedures;

    /**
     * @var string <p>触发器迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
     */
    public $TriggerMode;

    /**
     * @var array <p>当TriggerMode为partial，指定要迁移的触发器名称</p>
     */
    public $Triggers;

    /**
     * @var string <p>事件迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
     */
    public $EventMode;

    /**
     * @var array <p>当EventMode为partial，指定要迁移的事件名称</p>
     */
    public $Events;

    /**
     * @param string $DbName <p>需要迁移或同步的库名，当ObjectMode为Partial时，此项必填</p>
     * @param string $NewDbName <p>迁移或同步后的库名，默认与源库相同</p>
     * @param string $DbMode <p>DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。</p>
     * @param string $SchemaName <p>迁移或同步的 schema</p>
     * @param string $NewSchemaName <p>迁移或同步后的 schema name</p>
     * @param string $SchemaMode <p>schema选择模式，pg和sqlserver需要使用</p><p>枚举值：</p><ul><li>All： 当前对象下的所有对象</li><li>Partial： 部分对象</li></ul>
     * @param string $TableMode <p>表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。</p>
     * @param array $Tables <p>表图对象集合，当 TableMode 为 Partial 时，此项需要填写</p>
     * @param string $ViewMode <p>视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。</p>
     * @param array $Views <p>视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写</p>
     * @param string $FunctionMode <p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
     * @param array $Functions <p>FunctionMode取值为Partial时需要填写</p>
     * @param string $ProcedureMode <p>选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。</p>
     * @param array $Procedures <p>ProcedureMode取值为Partial时需要填写</p>
     * @param string $TriggerMode <p>触发器迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
     * @param array $Triggers <p>当TriggerMode为partial，指定要迁移的触发器名称</p>
     * @param string $EventMode <p>事件迁移模式，All(为当前对象下的所有对象)，Partial(部分对象)，如果整库同步此处应该为All。数据同步暂不支持此高级对象。</p>
     * @param array $Events <p>当EventMode为partial，指定要迁移的事件名称</p>
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

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("NewSchemaName",$param) and $param["NewSchemaName"] !== null) {
            $this->NewSchemaName = $param["NewSchemaName"];
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
                $obj = new Table();
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
                $obj = new View();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }

        if (array_key_exists("FunctionMode",$param) and $param["FunctionMode"] !== null) {
            $this->FunctionMode = $param["FunctionMode"];
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("ProcedureMode",$param) and $param["ProcedureMode"] !== null) {
            $this->ProcedureMode = $param["ProcedureMode"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = $param["Procedures"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = $param["Triggers"];
        }

        if (array_key_exists("EventMode",$param) and $param["EventMode"] !== null) {
            $this->EventMode = $param["EventMode"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }
    }
}
