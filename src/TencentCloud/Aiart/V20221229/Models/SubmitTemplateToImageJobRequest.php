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
 * SubmitTemplateToImageJob请求参数结构体
 *
 * @method Image getImage() 获取<p>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。Base64 和 Url 必须提供一个，如果都提供以 Url 为准。图片限制：单边分辨率小于5000且大于50，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setImage(Image $Image) 设置<p>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。Base64 和 Url 必须提供一个，如果都提供以 Url 为准。图片限制：单边分辨率小于5000且大于50，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getStyle() 获取<p>绘画风格当前仅支持美术馆风格（gallerying）。</p>
 * @method void setStyle(string $Style) 设置<p>绘画风格当前仅支持美术馆风格（gallerying）。</p>
 * @method string getMode() 获取<p>特效模式，默认使用人像模式。</p>枚举值：<ul><li> Person： 人像模式，仅支持上传人像图片。</li><li> Pet： 宠物模式，支持宠物等非人像图片。</li></ul>默认值：Person
 * @method void setMode(string $Mode) 设置<p>特效模式，默认使用人像模式。</p>枚举值：<ul><li> Person： 人像模式，仅支持上传人像图片。</li><li> Pet： 宠物模式，支持宠物等非人像图片。</li></ul>默认值：Person
 * @method integer getLogoAdd() 获取<p>为生成结果图添加显式水印标识的开关，默认为1。<br />1：添加。<br />0：不添加。<br />其他数值：默认按1处理。<br />建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加显式水印标识的开关，默认为1。<br />1：添加。<br />0：不添加。<br />其他数值：默认按1处理。<br />建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 */
class SubmitTemplateToImageJobRequest extends AbstractModel
{
    /**
     * @var Image <p>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。Base64 和 Url 必须提供一个，如果都提供以 Url 为准。图片限制：单边分辨率小于5000且大于50，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $Image;

    /**
     * @var string <p>绘画风格当前仅支持美术馆风格（gallerying）。</p>
     */
    public $Style;

    /**
     * @var string <p>特效模式，默认使用人像模式。</p>枚举值：<ul><li> Person： 人像模式，仅支持上传人像图片。</li><li> Pet： 宠物模式，支持宠物等非人像图片。</li></ul>默认值：Person
     */
    public $Mode;

    /**
     * @var integer <p>为生成结果图添加显式水印标识的开关，默认为1。<br />1：添加。<br />0：不添加。<br />其他数值：默认按1处理。<br />建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @param Image $Image <p>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。Base64 和 Url 必须提供一个，如果都提供以 Url 为准。图片限制：单边分辨率小于5000且大于50，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $Style <p>绘画风格当前仅支持美术馆风格（gallerying）。</p>
     * @param string $Mode <p>特效模式，默认使用人像模式。</p>枚举值：<ul><li> Person： 人像模式，仅支持上传人像图片。</li><li> Pet： 宠物模式，支持宠物等非人像图片。</li></ul>默认值：Person
     * @param integer $LogoAdd <p>为生成结果图添加显式水印标识的开关，默认为1。<br />1：添加。<br />0：不添加。<br />其他数值：默认按1处理。<br />建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
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
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
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
