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
 * ImageOutpainting请求参数结构体
 *
 * @method string getRatio() 获取<p>扩展后的比例（宽:高），需要不等于原图比例。<br>支持：1:1、4:3、3:4、16:9、9:16</p>
 * @method void setRatio(string $Ratio) 设置<p>扩展后的比例（宽:高），需要不等于原图比例。<br>支持：1:1、4:3、3:4、16:9、9:16</p>
 * @method string getInputImage() 获取<p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputImage(string $InputImage) 设置<p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getInputUrl() 获取<p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 */
class ImageOutpaintingRequest extends AbstractModel
{
    /**
     * @var string <p>扩展后的比例（宽:高），需要不等于原图比例。<br>支持：1:1、4:3、3:4、16:9、9:16</p>
     */
    public $Ratio;

    /**
     * @var string <p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputImage;

    /**
     * @var string <p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputUrl;

    /**
     * @var string <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
     */
    public $RspImgType;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @param string $Ratio <p>扩展后的比例（宽:高），需要不等于原图比例。<br>支持：1:1、4:3、3:4、16:9、9:16</p>
     * @param string $InputImage <p>输入图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $InputUrl <p>输入图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
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
        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
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
