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
 * 体检报告-眼科-矫正视力
 *
 * @method KeyValueItem getLeftEyeVisual() 获取左眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftEyeVisual(KeyValueItem $LeftEyeVisual) 设置左眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getText() 获取矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getRightEyeVisual() 获取右眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRightEyeVisual(KeyValueItem $RightEyeVisual) 设置右眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 */
class OphthalmologyCorrectedVisualAcuity extends AbstractModel
{
    /**
     * @var KeyValueItem 左眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftEyeVisual;

    /**
     * @var KeyValueItem 矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 右眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RightEyeVisual;

    /**
     * @param KeyValueItem $LeftEyeVisual 左眼矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Text 矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $RightEyeVisual 右眼矫正视力
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
        if (array_key_exists("LeftEyeVisual",$param) and $param["LeftEyeVisual"] !== null) {
            $this->LeftEyeVisual = new KeyValueItem();
            $this->LeftEyeVisual->deserialize($param["LeftEyeVisual"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("RightEyeVisual",$param) and $param["RightEyeVisual"] !== null) {
            $this->RightEyeVisual = new KeyValueItem();
            $this->RightEyeVisual->deserialize($param["RightEyeVisual"]);
        }
    }
}
