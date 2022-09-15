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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体剪切水印信息。
 *
 * @method string getType() 获取水印类型，可选值：
<li>Image：图像水印；</li>
<li>Text：文字水印。</li>
 * @method void setType(string $Type) 设置水印类型，可选值：
<li>Image：图像水印；</li>
<li>Text：文字水印。</li>
 * @method MediaCuttingWatermarkImage getImage() 获取图像水印信息，当 Type=Image 时必选。
 * @method void setImage(MediaCuttingWatermarkImage $Image) 设置图像水印信息，当 Type=Image 时必选。
 * @method MediaCuttingWatermarkText getText() 获取文字水印信息，当 Type=Text 时必选。
 * @method void setText(MediaCuttingWatermarkText $Text) 设置文字水印信息，当 Type=Text 时必选。
 */
class MediaCuttingWatermark extends AbstractModel
{
    /**
     * @var string 水印类型，可选值：
<li>Image：图像水印；</li>
<li>Text：文字水印。</li>
     */
    public $Type;

    /**
     * @var MediaCuttingWatermarkImage 图像水印信息，当 Type=Image 时必选。
     */
    public $Image;

    /**
     * @var MediaCuttingWatermarkText 文字水印信息，当 Type=Text 时必选。
     */
    public $Text;

    /**
     * @param string $Type 水印类型，可选值：
<li>Image：图像水印；</li>
<li>Text：文字水印。</li>
     * @param MediaCuttingWatermarkImage $Image 图像水印信息，当 Type=Image 时必选。
     * @param MediaCuttingWatermarkText $Text 文字水印信息，当 Type=Text 时必选。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new MediaCuttingWatermarkImage();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new MediaCuttingWatermarkText();
            $this->Text->deserialize($param["Text"]);
        }
    }
}
