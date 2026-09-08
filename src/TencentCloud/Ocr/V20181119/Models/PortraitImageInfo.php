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
 * 头像照片和坐标
 *
 * @method string getPortraitImage() 获取<p>头像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortraitImage(string $PortraitImage) 设置<p>头像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageCoordinates getImageCoordinates() 获取<p>头像坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCoordinates(ImageCoordinates $ImageCoordinates) 设置<p>头像坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PortraitImageInfo extends AbstractModel
{
    /**
     * @var string <p>头像</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortraitImage;

    /**
     * @var ImageCoordinates <p>头像坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCoordinates;

    /**
     * @param string $PortraitImage <p>头像</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageCoordinates $ImageCoordinates <p>头像坐标</p>
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
        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("ImageCoordinates",$param) and $param["ImageCoordinates"] !== null) {
            $this->ImageCoordinates = new ImageCoordinates();
            $this->ImageCoordinates->deserialize($param["ImageCoordinates"]);
        }
    }
}
