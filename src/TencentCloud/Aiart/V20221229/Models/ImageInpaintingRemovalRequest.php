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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageInpaintingRemoval请求参数结构体
 *
 * @method string getInputImage() 获取输入图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputImage(string $InputImage) 设置输入图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method string getInputUrl() 获取输入图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputUrl(string $InputUrl) 设置输入图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method string getMask() 获取消除区域 Mask 图 Base64 数据。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
 * @method void setMask(string $Mask) 设置消除区域 Mask 图 Base64 数据。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
 * @method string getMaskUrl() 获取消除区域 Mask 图 Url。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
 * @method void setMaskUrl(string $MaskUrl) 设置消除区域 Mask 图 Url。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
 * @method string getRspImgType() 获取返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
 * @method integer getLogoAdd() 获取为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class ImageInpaintingRemovalRequest extends AbstractModel
{
    /**
     * @var string 输入图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputImage;

    /**
     * @var string 输入图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputUrl;

    /**
     * @var string 消除区域 Mask 图 Base64 数据。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
     */
    public $Mask;

    /**
     * @var string 消除区域 Mask 图 Url。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
     */
    public $MaskUrl;

    /**
     * @var string 返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
     */
    public $RspImgType;

    /**
     * @var integer 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $InputImage 输入图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param string $InputUrl 输入图 Url。
Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：单边分辨率小于5000，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param string $Mask 消除区域 Mask 图 Base64 数据。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
     * @param string $MaskUrl 消除区域 Mask 图 Url。
Mask 为单通道灰度图，待消除部分呈白色区域，原图保持部分呈黑色区域。
Mask 的 Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
图片限制：Mask 分辨率需要和输入原图保持一致，转成 Base64 字符串后小于 6MB。
     * @param string $RspImgType 返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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
        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("MaskUrl",$param) and $param["MaskUrl"] !== null) {
            $this->MaskUrl = $param["MaskUrl"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
