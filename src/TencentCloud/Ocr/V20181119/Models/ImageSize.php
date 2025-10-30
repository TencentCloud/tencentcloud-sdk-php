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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片分辨率信息
 *
 * @method integer getWidth() 获取图片的宽，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置图片的宽，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取图片的高，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置图片的高，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageSize extends AbstractModel
{
    /**
     * @var integer 图片的宽，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 图片的高，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @param integer $Width 图片的宽，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 图片的高，单位像素
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
