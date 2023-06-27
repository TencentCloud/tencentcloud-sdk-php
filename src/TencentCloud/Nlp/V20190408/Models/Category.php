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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类详细信息
 *
 * @method integer getId() 获取分类id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置分类id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取分类英文名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置分类英文名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取分类中文名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置分类中文名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取分类置信度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置分类置信度。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Category extends AbstractModel
{
    /**
     * @var integer 分类id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 分类英文名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 分类中文名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var float 分类置信度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param integer $Id 分类id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 分类英文名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 分类中文名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Score 分类置信度。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
