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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 中文声调检测结果
 *
 * @method boolean getValid() 获取检测结果是否有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValid(boolean $Valid) 设置检测结果是否有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefTone() 获取文本标准声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefTone(integer $RefTone) 设置文本标准声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHypothesisTone() 获取实际发音声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHypothesisTone(integer $HypothesisTone) 设置实际发音声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tone extends AbstractModel
{
    /**
     * @var boolean 检测结果是否有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Valid;

    /**
     * @var integer 文本标准声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefTone;

    /**
     * @var integer 实际发音声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HypothesisTone;

    /**
     * @param boolean $Valid 检测结果是否有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefTone 文本标准声调，数值范围[-1,1,2,3,4]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HypothesisTone 实际发音声调，数值范围[-1,1,2,3,4]
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
        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }

        if (array_key_exists("RefTone",$param) and $param["RefTone"] !== null) {
            $this->RefTone = $param["RefTone"];
        }

        if (array_key_exists("HypothesisTone",$param) and $param["HypothesisTone"] !== null) {
            $this->HypothesisTone = $param["HypothesisTone"];
        }
    }
}
