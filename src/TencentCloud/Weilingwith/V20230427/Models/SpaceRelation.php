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
 * 空间层级关系
 *
 * @method string getElementId() 获取构件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementId(string $ElementId) 设置构件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElementName() 获取构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElementName(string $ElementName) 设置构件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取空间层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置空间层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpaceCode() 获取空间编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceCode(string $SpaceCode) 设置空间编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentSpaceCode() 获取父级空间编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSpaceCode(string $ParentSpaceCode) 设置父级空间编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子构件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子构件信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceRelation extends AbstractModel
{
    /**
     * @var string 构件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementId;

    /**
     * @var string 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElementName;

    /**
     * @var integer 空间层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 空间编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceCode;

    /**
     * @var string 父级空间编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSpaceCode;

    /**
     * @var array 子构件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @param string $ElementId 构件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElementName 构件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 空间层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpaceCode 空间编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentSpaceCode 父级空间编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子构件信息
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
        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SpaceCode",$param) and $param["SpaceCode"] !== null) {
            $this->SpaceCode = $param["SpaceCode"];
        }

        if (array_key_exists("ParentSpaceCode",$param) and $param["ParentSpaceCode"] !== null) {
            $this->ParentSpaceCode = $param["ParentSpaceCode"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new SpaceRelation();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
