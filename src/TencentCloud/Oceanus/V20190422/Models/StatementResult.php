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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sql Gateway 返回Result结构类型
 *
 * @method array getColumns() 获取返回结果列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置返回结果列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRowFormat() 获取格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowFormat(string $RowFormat) 设置格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取结果值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置结果值
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatementResult extends AbstractModel
{
    /**
     * @var array 返回结果列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var string 格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowFormat;

    /**
     * @var array 结果值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param array $Columns 返回结果列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RowFormat 格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 结果值
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
        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ResultColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("RowFormat",$param) and $param["RowFormat"] !== null) {
            $this->RowFormat = $param["RowFormat"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ResultData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
