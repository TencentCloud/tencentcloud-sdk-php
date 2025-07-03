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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格内容检测
 *
 * @method array getCells() 获取单元格内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCells(array $Cells) 设置单元格内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取图像中的文本块类型：0为非表格文本、1为有线表格、2为无线表格，
有线表格：在表格内部，有横线/竖线纵跨整个表格的宽/高；
无线表格：在表格内部，无横线/竖线纵跨整个表格的宽/高。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置图像中的文本块类型：0为非表格文本、1为有线表格、2为无线表格，
有线表格：在表格内部，有横线/竖线纵跨整个表格的宽/高；
无线表格：在表格内部，无横线/竖线纵跨整个表格的宽/高。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableCoordPoint() 获取表格主体四个顶点坐标（依次为左上角，
右上角，右下角，左下角）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableCoordPoint(array $TableCoordPoint) 设置表格主体四个顶点坐标（依次为左上角，
右上角，右下角，左下角）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfo extends AbstractModel
{
    /**
     * @var array 单元格内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cells;

    /**
     * @var integer 图像中的文本块类型：0为非表格文本、1为有线表格、2为无线表格，
有线表格：在表格内部，有横线/竖线纵跨整个表格的宽/高；
无线表格：在表格内部，无横线/竖线纵跨整个表格的宽/高。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 表格主体四个顶点坐标（依次为左上角，
右上角，右下角，左下角）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableCoordPoint;

    /**
     * @param array $Cells 单元格内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 图像中的文本块类型：0为非表格文本、1为有线表格、2为无线表格，
有线表格：在表格内部，有横线/竖线纵跨整个表格的宽/高；
无线表格：在表格内部，无横线/竖线纵跨整个表格的宽/高。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableCoordPoint 表格主体四个顶点坐标（依次为左上角，
右上角，右下角，左下角）
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
        if (array_key_exists("Cells",$param) and $param["Cells"] !== null) {
            $this->Cells = [];
            foreach ($param["Cells"] as $key => $value){
                $obj = new TableCellInfo();
                $obj->deserialize($value);
                array_push($this->Cells, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableCoordPoint",$param) and $param["TableCoordPoint"] !== null) {
            $this->TableCoordPoint = [];
            foreach ($param["TableCoordPoint"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->TableCoordPoint, $obj);
            }
        }
    }
}
