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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密码复杂度
 *
 * @method boolean getEnable() 获取<p>是否开启密码复杂度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置<p>是否开启密码复杂度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMixedCaseCount() 获取<p>大写和小写字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMixedCaseCount(integer $MixedCaseCount) 设置<p>大写和小写字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumberCount() 获取<p>数字字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberCount(integer $NumberCount) 设置<p>数字字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpecialCharCount() 获取<p>特殊字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialCharCount(integer $SpecialCharCount) 设置<p>特殊字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLength() 获取<p>密码的最小长度</p><p>取值范围：[8, 64]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置<p>密码的最小长度</p><p>取值范围：[8, 64]</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PasswordComplexity extends AbstractModel
{
    /**
     * @var boolean <p>是否开启密码复杂度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer <p>大写和小写字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MixedCaseCount;

    /**
     * @var integer <p>数字字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberCount;

    /**
     * @var integer <p>特殊字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialCharCount;

    /**
     * @var integer <p>密码的最小长度</p><p>取值范围：[8, 64]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @param boolean $Enable <p>是否开启密码复杂度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MixedCaseCount <p>大写和小写字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumberCount <p>数字字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpecialCharCount <p>特殊字符的最小长度</p><p>取值范围：[1, 16]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Length <p>密码的最小长度</p><p>取值范围：[8, 64]</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MixedCaseCount",$param) and $param["MixedCaseCount"] !== null) {
            $this->MixedCaseCount = $param["MixedCaseCount"];
        }

        if (array_key_exists("NumberCount",$param) and $param["NumberCount"] !== null) {
            $this->NumberCount = $param["NumberCount"];
        }

        if (array_key_exists("SpecialCharCount",$param) and $param["SpecialCharCount"] !== null) {
            $this->SpecialCharCount = $param["SpecialCharCount"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }
    }
}
