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
 * SketchToImage请求参数结构体
 *
 * @method string getPrompt() 获取用于线稿生图的文本描述。
最多支持200个 utf-8 字符。
建议格式：线稿中的主体对象+画面场景+配色/材质/元素/风格等
 * @method void setPrompt(string $Prompt) 设置用于线稿生图的文本描述。
最多支持200个 utf-8 字符。
建议格式：线稿中的主体对象+画面场景+配色/材质/元素/风格等
 * @method string getInputImage() 获取线稿图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputImage(string $InputImage) 设置线稿图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method string getInputUrl() 获取线稿图 Url。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setInputUrl(string $InputUrl) 设置线稿图 Url。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
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
 * @method string getRspImgType() 获取返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
 */
class SketchToImageRequest extends AbstractModel
{
    /**
     * @var string 用于线稿生图的文本描述。
最多支持200个 utf-8 字符。
建议格式：线稿中的主体对象+画面场景+配色/材质/元素/风格等
     */
    public $Prompt;

    /**
     * @var string 线稿图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputImage;

    /**
     * @var string 线稿图 Url。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $InputUrl;

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
     * @var string 返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
     */
    public $RspImgType;

    /**
     * @param string $Prompt 用于线稿生图的文本描述。
最多支持200个 utf-8 字符。
建议格式：线稿中的主体对象+画面场景+配色/材质/元素/风格等
     * @param string $InputImage 线稿图 Base64 数据。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param string $InputUrl 线稿图 Url。
Base64 和 Url 必须提供一个，如果都提供以Url 为准。
图片限制：黑白线稿图片，单边分辨率小于5000且大于128（分辨率过小会导致效果受损），转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param string $RspImgType 返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }
    }
}
