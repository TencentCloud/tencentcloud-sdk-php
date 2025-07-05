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
 * 数据同步库表信息描述
 *
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getNewTableName() 获取新表名
 * @method void setNewTableName(string $NewTableName) 设置新表名
 * @method string getFilterCondition() 获取过滤条件
 * @method void setFilterCondition(string $FilterCondition) 设置过滤条件
 * @method string getColumnMode() 获取是否同步表中所有列，All：当前表下的所有列,Partial(ModifySyncJobConfig接口里的对应字段ColumnMode暂不支持Partial)：当前表下的部分列，通过填充Columns字段详细表信息
 * @method void setColumnMode(string $ColumnMode) 设置是否同步表中所有列，All：当前表下的所有列,Partial(ModifySyncJobConfig接口里的对应字段ColumnMode暂不支持Partial)：当前表下的部分列，通过填充Columns字段详细表信息
 * @method array getColumns() 获取同步的列信息，当ColumnMode为Partial时，必填
 * @method void setColumns(array $Columns) 设置同步的列信息，当ColumnMode为Partial时，必填
 * @method array getTmpTables() 获取同步临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在同步过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
 * @method void setTmpTables(array $TmpTables) 设置同步临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在同步过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
 * @method string getTableEditMode() 获取编辑表类型，rename(表映射)，pt(同步附加表)
 * @method void setTableEditMode(string $TableEditMode) 设置编辑表类型，rename(表映射)，pt(同步附加表)
 */
class Table extends AbstractModel
{
    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 新表名
     */
    public $NewTableName;

    /**
     * @var string 过滤条件
     */
    public $FilterCondition;

    /**
     * @var string 是否同步表中所有列，All：当前表下的所有列,Partial(ModifySyncJobConfig接口里的对应字段ColumnMode暂不支持Partial)：当前表下的部分列，通过填充Columns字段详细表信息
     */
    public $ColumnMode;

    /**
     * @var array 同步的列信息，当ColumnMode为Partial时，必填
     */
    public $Columns;

    /**
     * @var array 同步临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在同步过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
     */
    public $TmpTables;

    /**
     * @var string 编辑表类型，rename(表映射)，pt(同步附加表)
     */
    public $TableEditMode;

    /**
     * @param string $TableName 表名
     * @param string $NewTableName 新表名
     * @param string $FilterCondition 过滤条件
     * @param string $ColumnMode 是否同步表中所有列，All：当前表下的所有列,Partial(ModifySyncJobConfig接口里的对应字段ColumnMode暂不支持Partial)：当前表下的部分列，通过填充Columns字段详细表信息
     * @param array $Columns 同步的列信息，当ColumnMode为Partial时，必填
     * @param array $TmpTables 同步临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在同步过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
     * @param string $TableEditMode 编辑表类型，rename(表映射)，pt(同步附加表)
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("FilterCondition",$param) and $param["FilterCondition"] !== null) {
            $this->FilterCondition = $param["FilterCondition"];
        }

        if (array_key_exists("ColumnMode",$param) and $param["ColumnMode"] !== null) {
            $this->ColumnMode = $param["ColumnMode"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("TmpTables",$param) and $param["TmpTables"] !== null) {
            $this->TmpTables = $param["TmpTables"];
        }

        if (array_key_exists("TableEditMode",$param) and $param["TableEditMode"] !== null) {
            $this->TableEditMode = $param["TableEditMode"];
        }
    }
}
