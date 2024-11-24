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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片编码格式参数
 *
 * @method string getFormat() 获取图片格式，取值范围：JPG、BMP、GIF、PNG、WebP，缺省为原图格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置图片格式，取值范围：JPG、BMP、GIF、PNG、WebP，缺省为原图格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuality() 获取图片的相对质量，取值范围：1 - 100，数值以原图质量为标准，缺省为原图质量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuality(integer $Quality) 设置图片的相对质量，取值范围：1 - 100，数值以原图质量为标准，缺省为原图质量。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageEncodeConfig extends AbstractModel
{
    /**
     * @var string 图片格式，取值范围：JPG、BMP、GIF、PNG、WebP，缺省为原图格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @var integer 图片的相对质量，取值范围：1 - 100，数值以原图质量为标准，缺省为原图质量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quality;

    /**
     * @param string $Format 图片格式，取值范围：JPG、BMP、GIF、PNG、WebP，缺省为原图格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Quality 图片的相对质量，取值范围：1 - 100，数值以原图质量为标准，缺省为原图质量。
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }
    }
}
