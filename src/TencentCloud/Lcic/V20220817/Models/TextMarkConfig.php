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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文字水印配置
 *
 * @method string getText() 获取文字水印内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文字水印内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取文字水印颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置文字水印颜色
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextMarkConfig extends AbstractModel
{
    /**
     * @var string 文字水印内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 文字水印颜色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @param string $Text 文字水印内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color 文字水印颜色
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
