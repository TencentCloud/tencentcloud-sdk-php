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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * logo参数
 *
 * @method FaceRect getLogoRect() 获取标识图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配。
Width、Height <= 2160。
 * @method void setLogoRect(FaceRect $LogoRect) 设置标识图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配。
Width、Height <= 2160。
 * @method string getLogoUrl() 获取标识图片Url地址

●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
 * @method void setLogoUrl(string $LogoUrl) 设置标识图片Url地址

●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
 * @method string getLogoImage() 获取输入图片base64。
●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
 * @method void setLogoImage(string $LogoImage) 设置输入图片base64。
●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
 */
class LogoParam extends AbstractModel
{
    /**
     * @var FaceRect 标识图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配。
Width、Height <= 2160。
     */
    public $LogoRect;

    /**
     * @var string 标识图片Url地址

●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
     */
    public $LogoUrl;

    /**
     * @var string 输入图片base64。
●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
     */
    public $LogoImage;

    /**
     * @param FaceRect $LogoRect 标识图片位于融合结果图中的坐标，将按照坐标对标识图片进行位置和大小的拉伸匹配。
Width、Height <= 2160。
     * @param string $LogoUrl 标识图片Url地址

●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
     * @param string $LogoImage 输入图片base64。
●base64 和 url 必须提供一个，如果都提供以 url 为准。
●支持图片格式：支持jpg或png
专业版：base64 编码后大小不超过10M。
非专业版：base64 编码后大小不超过5M。
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
        if (array_key_exists("LogoRect",$param) and $param["LogoRect"] !== null) {
            $this->LogoRect = new FaceRect();
            $this->LogoRect->deserialize($param["LogoRect"]);
        }

        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("LogoImage",$param) and $param["LogoImage"] !== null) {
            $this->LogoImage = $param["LogoImage"];
        }
    }
}
