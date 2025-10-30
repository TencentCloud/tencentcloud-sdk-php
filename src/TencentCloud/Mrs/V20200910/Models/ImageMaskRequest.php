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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageMask请求参数结构体
 *
 * @method ImageInfo getImage() 获取图片信息,目前只支持传图片base64
 * @method void setImage(ImageInfo $Image) 设置图片信息,目前只支持传图片base64
 * @method ImageMaskFlags getMaskFlag() 获取图片脱敏选项, 不传默认都脱敏
 * @method void setMaskFlag(ImageMaskFlags $MaskFlag) 设置图片脱敏选项, 不传默认都脱敏
 * @method boolean getAutoFixImageDirection() 获取是否自动矫正图片方向
 * @method void setAutoFixImageDirection(boolean $AutoFixImageDirection) 设置是否自动矫正图片方向
 */
class ImageMaskRequest extends AbstractModel
{
    /**
     * @var ImageInfo 图片信息,目前只支持传图片base64
     */
    public $Image;

    /**
     * @var ImageMaskFlags 图片脱敏选项, 不传默认都脱敏
     */
    public $MaskFlag;

    /**
     * @var boolean 是否自动矫正图片方向
     */
    public $AutoFixImageDirection;

    /**
     * @param ImageInfo $Image 图片信息,目前只支持传图片base64
     * @param ImageMaskFlags $MaskFlag 图片脱敏选项, 不传默认都脱敏
     * @param boolean $AutoFixImageDirection 是否自动矫正图片方向
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageInfo();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("MaskFlag",$param) and $param["MaskFlag"] !== null) {
            $this->MaskFlag = new ImageMaskFlags();
            $this->MaskFlag->deserialize($param["MaskFlag"]);
        }

        if (array_key_exists("AutoFixImageDirection",$param) and $param["AutoFixImageDirection"] !== null) {
            $this->AutoFixImageDirection = $param["AutoFixImageDirection"];
        }
    }
}
