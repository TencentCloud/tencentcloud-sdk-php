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
 * CSV读取结果
 *
 * @method integer getRowCount() 获取行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowCount(integer $RowCount) 设置行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsHeadLineSchema() 获取首行是否为列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsHeadLineSchema(boolean $IsHeadLineSchema) 设置首行是否为列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnCount() 获取列总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnCount(integer $ColumnCount) 设置列总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取列 Schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置列 Schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRows() 获取Csv 全部行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(array $Rows) 设置Csv 全部行数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class CsvReadDTO extends AbstractModel
{
    /**
     * @var integer 行总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowCount;

    /**
     * @var boolean 首行是否为列名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsHeadLineSchema;

    /**
     * @var integer 列总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnCount;

    /**
     * @var array 列 Schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array Csv 全部行数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @param integer $RowCount 行总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsHeadLineSchema 首行是否为列名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnCount 列总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 列 Schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rows Csv 全部行数据
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
        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("IsHeadLineSchema",$param) and $param["IsHeadLineSchema"] !== null) {
            $this->IsHeadLineSchema = $param["IsHeadLineSchema"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new RowColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new CsvRow();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }
    }
}
