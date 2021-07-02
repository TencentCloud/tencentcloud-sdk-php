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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可见病症内容
 *
 * @method Attribute getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(Attribute $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getPart() 获取部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(Attribute $Part) 设置部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getGrade() 获取等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade(Attribute $Grade) 设置等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttrList() 获取性质
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrList(array $AttrList) 设置性质
注意：此字段可能返回 null，表示取不到有效值。
 */
class Symptom extends AbstractModel
{
    /**
     * @var Attribute 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var Attribute 部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var Attribute 等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade;

    /**
     * @var array 性质
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrList;

    /**
     * @param Attribute $Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Grade 等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttrList 性质
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
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = new Attribute();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Attribute();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = new Attribute();
            $this->Grade->deserialize($param["Grade"]);
        }

        if (array_key_exists("AttrList",$param) and $param["AttrList"] !== null) {
            $this->AttrList = [];
            foreach ($param["AttrList"] as $key => $value){
                $obj = new Attribute();
                $obj->deserialize($value);
                array_push($this->AttrList, $obj);
            }
        }
    }
}
