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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构件属性信息响应体
 *
 * @method string getBuildingId() 获取建筑id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildingId(string $BuildingId) 设置建筑id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElementId() 获取构件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementId(string $ElementId) 设置构件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPropertySet() 获取构件属性集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertySet(array $PropertySet) 设置构件属性集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method ElementCoordinates getCoordinates() 获取构件地理坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoordinates(ElementCoordinates $Coordinates) 设置构件地理坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method ElementTranslate getTranslate() 获取构件偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranslate(ElementTranslate $Translate) 设置构件偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElementName() 获取构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementName(string $ElementName) 设置构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntityTypeCode() 获取构件类型代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityTypeCode(string $EntityTypeCode) 设置构件类型代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntityTypeName() 获取构件类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityTypeName(string $EntityTypeName) 设置构件类型名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ElementPropertyRes extends AbstractModel
{
    /**
     * @var string 建筑id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildingId;

    /**
     * @var string 构件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementId;

    /**
     * @var array 构件属性集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertySet;

    /**
     * @var ElementCoordinates 构件地理坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coordinates;

    /**
     * @var ElementTranslate 构件偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Translate;

    /**
     * @var string 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementName;

    /**
     * @var string 构件类型代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityTypeCode;

    /**
     * @var string 构件类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityTypeName;

    /**
     * @param string $BuildingId 建筑id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElementId 构件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PropertySet 构件属性集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param ElementCoordinates $Coordinates 构件地理坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param ElementTranslate $Translate 构件偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElementName 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EntityTypeCode 构件类型代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EntityTypeName 构件类型名称
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
        if (array_key_exists("BuildingId",$param) and $param["BuildingId"] !== null) {
            $this->BuildingId = $param["BuildingId"];
        }

        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("PropertySet",$param) and $param["PropertySet"] !== null) {
            $this->PropertySet = [];
            foreach ($param["PropertySet"] as $key => $value){
                $obj = new ElementProperty();
                $obj->deserialize($value);
                array_push($this->PropertySet, $obj);
            }
        }

        if (array_key_exists("Coordinates",$param) and $param["Coordinates"] !== null) {
            $this->Coordinates = new ElementCoordinates();
            $this->Coordinates->deserialize($param["Coordinates"]);
        }

        if (array_key_exists("Translate",$param) and $param["Translate"] !== null) {
            $this->Translate = new ElementTranslate();
            $this->Translate->deserialize($param["Translate"]);
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("EntityTypeCode",$param) and $param["EntityTypeCode"] !== null) {
            $this->EntityTypeCode = $param["EntityTypeCode"];
        }

        if (array_key_exists("EntityTypeName",$param) and $param["EntityTypeName"] !== null) {
            $this->EntityTypeName = $param["EntityTypeName"];
        }
    }
}
