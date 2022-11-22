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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectSecurity请求参数结构体
 *
 * @method string getImageUrl() 获取图片的 Url 。
ImageUrl和ImageBase64必须提供一个，同时存在时优先使用ImageUrl字段。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过3840 x 2160 pixel。
建议：
• 接口响应时间会受到图片下载时间的影响，建议使用更可靠的存储服务，推荐将图片存储在腾讯云COS。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 。
ImageUrl和ImageBase64必须提供一个，同时存在时优先使用ImageUrl字段。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过3840 x 2160 pixel。
建议：
• 接口响应时间会受到图片下载时间的影响，建议使用更可靠的存储服务，推荐将图片存储在腾讯云COS。
 * @method string getImageBase64() 获取图片经过base64编码的内容。
最大不超过4M。与ImageUrl同时存在时优先使用ImageUrl字段。
注意：图片需要base64编码，并且要去掉编码头部。
支持的图片格式：PNG、JPG、JPEG、暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过5M。
 * @method void setImageBase64(string $ImageBase64) 设置图片经过base64编码的内容。
最大不超过4M。与ImageUrl同时存在时优先使用ImageUrl字段。
注意：图片需要base64编码，并且要去掉编码头部。
支持的图片格式：PNG、JPG、JPEG、暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过5M。
 * @method boolean getEnableDetect() 获取人体检测模型开关，“true”为开启，“false”为关闭
开启后可先对图片中的人体进行检测之后再进行属性识别，默认为开启
 * @method void setEnableDetect(boolean $EnableDetect) 设置人体检测模型开关，“true”为开启，“false”为关闭
开启后可先对图片中的人体进行检测之后再进行属性识别，默认为开启
 * @method boolean getEnablePreferred() 获取人体优选开关，“true”为开启，“false”为关闭
开启后自动对检测质量低的人体进行优选过滤，有助于提高属性识别的准确率。
默认为开启，仅在人体检测开关开启时可配置，人体检测模型关闭时人体优选也关闭
如开启人体优选，检测到的人体分辨率需不大于1920*1080 pixel
 * @method void setEnablePreferred(boolean $EnablePreferred) 设置人体优选开关，“true”为开启，“false”为关闭
开启后自动对检测质量低的人体进行优选过滤，有助于提高属性识别的准确率。
默认为开启，仅在人体检测开关开启时可配置，人体检测模型关闭时人体优选也关闭
如开启人体优选，检测到的人体分辨率需不大于1920*1080 pixel
 */
class DetectSecurityRequest extends AbstractModel
{
    /**
     * @var string 图片的 Url 。
ImageUrl和ImageBase64必须提供一个，同时存在时优先使用ImageUrl字段。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过3840 x 2160 pixel。
建议：
• 接口响应时间会受到图片下载时间的影响，建议使用更可靠的存储服务，推荐将图片存储在腾讯云COS。
     */
    public $ImageUrl;

    /**
     * @var string 图片经过base64编码的内容。
最大不超过4M。与ImageUrl同时存在时优先使用ImageUrl字段。
注意：图片需要base64编码，并且要去掉编码头部。
支持的图片格式：PNG、JPG、JPEG、暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过5M。
     */
    public $ImageBase64;

    /**
     * @var boolean 人体检测模型开关，“true”为开启，“false”为关闭
开启后可先对图片中的人体进行检测之后再进行属性识别，默认为开启
     */
    public $EnableDetect;

    /**
     * @var boolean 人体优选开关，“true”为开启，“false”为关闭
开启后自动对检测质量低的人体进行优选过滤，有助于提高属性识别的准确率。
默认为开启，仅在人体检测开关开启时可配置，人体检测模型关闭时人体优选也关闭
如开启人体优选，检测到的人体分辨率需不大于1920*1080 pixel
     */
    public $EnablePreferred;

    /**
     * @param string $ImageUrl 图片的 Url 。
ImageUrl和ImageBase64必须提供一个，同时存在时优先使用ImageUrl字段。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过3840 x 2160 pixel。
建议：
• 接口响应时间会受到图片下载时间的影响，建议使用更可靠的存储服务，推荐将图片存储在腾讯云COS。
     * @param string $ImageBase64 图片经过base64编码的内容。
最大不超过4M。与ImageUrl同时存在时优先使用ImageUrl字段。
注意：图片需要base64编码，并且要去掉编码头部。
支持的图片格式：PNG、JPG、JPEG、暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过5M。
     * @param boolean $EnableDetect 人体检测模型开关，“true”为开启，“false”为关闭
开启后可先对图片中的人体进行检测之后再进行属性识别，默认为开启
     * @param boolean $EnablePreferred 人体优选开关，“true”为开启，“false”为关闭
开启后自动对检测质量低的人体进行优选过滤，有助于提高属性识别的准确率。
默认为开启，仅在人体检测开关开启时可配置，人体检测模型关闭时人体优选也关闭
如开启人体优选，检测到的人体分辨率需不大于1920*1080 pixel
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("EnableDetect",$param) and $param["EnableDetect"] !== null) {
            $this->EnableDetect = $param["EnableDetect"];
        }

        if (array_key_exists("EnablePreferred",$param) and $param["EnablePreferred"] !== null) {
            $this->EnablePreferred = $param["EnablePreferred"];
        }
    }
}
