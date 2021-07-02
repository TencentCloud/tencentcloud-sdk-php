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
 * 报告图片信息
 *
 * @method integer getConfidence() 获取文字内容可信度，0-100评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(integer $Confidence) 设置文字内容可信度，0-100评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取图片文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置图片文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRotateAngle() 获取文本旋转角度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotateAngle(float $RotateAngle) 设置文本旋转角度
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageText extends AbstractModel
{
    /**
     * @var integer 文字内容可信度，0-100评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var string 图片文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var float 文本旋转角度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotateAngle;

    /**
     * @param integer $Confidence 文字内容可信度，0-100评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 图片文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RotateAngle 文本旋转角度
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("RotateAngle",$param) and $param["RotateAngle"] !== null) {
            $this->RotateAngle = $param["RotateAngle"];
        }
    }
}
