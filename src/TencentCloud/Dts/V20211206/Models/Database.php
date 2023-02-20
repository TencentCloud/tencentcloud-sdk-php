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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要同步的库表对象
 *
 * @method string getDbName() 获取需要迁移或同步的库名，当ObjectMode为Partial时，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置需要迁移或同步的库名，当ObjectMode为Partial时，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewDbName() 获取迁移或同步后的库名，默认与源库相同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewDbName(string $NewDbName) 设置迁移或同步后的库名，默认与源库相同
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbMode() 获取DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbMode(string $DbMode) 设置DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取迁移或同步的 schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置迁移或同步的 schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewSchemaName() 获取迁移或同步后的 schema name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewSchemaName(string $NewSchemaName) 设置迁移或同步后的 schema name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableMode() 获取表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableMode(string $TableMode) 设置表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTables() 获取表图对象集合，当 TableMode 为 Partial 时，此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(array $Tables) 设置表图对象集合，当 TableMode 为 Partial 时，此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewMode() 获取视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewMode(string $ViewMode) 设置视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getViews() 获取视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViews(array $Views) 设置视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFunctionMode() 获取选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctionMode(string $FunctionMode) 设置选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFunctions() 获取FunctionMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctions(array $Functions) 设置FunctionMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcedureMode() 获取选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureMode(string $ProcedureMode) 设置选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcedures() 获取ProcedureMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedures(array $Procedures) 设置ProcedureMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerMode() 获取触发器迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMode(string $TriggerMode) 设置触发器迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggers() 获取当TriggerMode为partial，指定要迁移的触发器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggers(array $Triggers) 设置当TriggerMode为partial，指定要迁移的触发器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventMode() 获取事件迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventMode(string $EventMode) 设置事件迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEvents() 获取当EventMode为partial，指定要迁移的事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvents(array $Events) 设置当EventMode为partial，指定要迁移的事件名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Database extends AbstractModel
{
    /**
     * @var string 需要迁移或同步的库名，当ObjectMode为Partial时，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string 迁移或同步后的库名，默认与源库相同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewDbName;

    /**
     * @var string DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbMode;

    /**
     * @var string 迁移或同步的 schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string 迁移或同步后的 schema name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewSchemaName;

    /**
     * @var string 表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableMode;

    /**
     * @var array 表图对象集合，当 TableMode 为 Partial 时，此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @var string 视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewMode;

    /**
     * @var array 视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Views;

    /**
     * @var string 选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunctionMode;

    /**
     * @var array FunctionMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Functions;

    /**
     * @var string 选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureMode;

    /**
     * @var array ProcedureMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procedures;

    /**
     * @var string 触发器迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMode;

    /**
     * @var array 当TriggerMode为partial，指定要迁移的触发器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Triggers;

    /**
     * @var string 事件迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventMode;

    /**
     * @var array 当EventMode为partial，指定要迁移的事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Events;

    /**
     * @param string $DbName 需要迁移或同步的库名，当ObjectMode为Partial时，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewDbName 迁移或同步后的库名，默认与源库相同
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbMode DB选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当Mode为Partial时，此项必填。注意，高级对象的同步不依赖此值，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 迁移或同步的 schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewSchemaName 迁移或同步后的 schema name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableMode 表选择模式: All(为当前对象下的所有对象)，Partial(部分对象)，当DBMode为Partial时此项必填，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tables 表图对象集合，当 TableMode 为 Partial 时，此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewMode 视图选择模式: All 为当前对象下的所有视图对象,Partial 为部分视图对象，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Views 视图对象集合，当 ViewMode 为 Partial 时， 此项需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FunctionMode 选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Functions FunctionMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcedureMode 选择要同步的模式，Partial为部分，All为整选，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Procedures ProcedureMode取值为Partial时需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerMode 触发器迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Triggers 当TriggerMode为partial，指定要迁移的触发器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventMode 事件迁移模式，All(为当前对象下的所有对象)，partial(部分对象)，如果整库同步此处应该为All。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Events 当EventMode为partial，指定要迁移的事件名称
注意：此字段可能返回 null，表示取不到有效值。
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
