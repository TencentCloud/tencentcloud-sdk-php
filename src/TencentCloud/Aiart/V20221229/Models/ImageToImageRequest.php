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
 * ImageToImage请求参数结构体
 *
 * @method string getInputImage() 获取<p>输入图 Base64 数据。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputImage(string $InputImage) 设置<p>输入图 Base64 数据。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getInputUrl() 获取<p>输入图 Url。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>输入图 Url。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getPrompt() 获取<p>文本描述。<br>用于在输入图的基础上引导生成图效果，增加生成结果中出现描述内容的可能。<br>推荐使用中文。最多支持256个 utf-8 字符。</p>
 * @method void setPrompt(string $Prompt) 设置<p>文本描述。<br>用于在输入图的基础上引导生成图效果，增加生成结果中出现描述内容的可能。<br>推荐使用中文。最多支持256个 utf-8 字符。</p>
 * @method string getNegativePrompt() 获取<p>反向文本描述。<br>用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。<br>推荐使用中文。最多可传256个 utf-8 字符。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>反向文本描述。<br>用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。<br>推荐使用中文。最多可传256个 utf-8 字符。</p>
 * @method array getStyles() 获取<p>绘画风格。<br>请在  <a href="https://cloud.tencent.com/document/product/1668/86250">图像风格化风格列表</a> 中选择期望的风格，传入风格编号。<br>推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。</p>
 * @method void setStyles(array $Styles) 设置<p>绘画风格。<br>请在  <a href="https://cloud.tencent.com/document/product/1668/86250">图像风格化风格列表</a> 中选择期望的风格，传入风格编号。<br>推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。</p>
 * @method ResultConfig getResultConfig() 获取<p>生成图结果的配置，包括输出图片分辨率和尺寸等。<br>支持生成以下分辨率的图片：origin（与输入图分辨率一致，长边最高为2000，超出将做等比例缩小）、768:768（1:1）、768:1024（3:4）、1024:768（4:3）。<br>不传默认使用origin。<br>单位为 px。</p>
 * @method void setResultConfig(ResultConfig $ResultConfig) 设置<p>生成图结果的配置，包括输出图片分辨率和尺寸等。<br>支持生成以下分辨率的图片：origin（与输入图分辨率一致，长边最高为2000，超出将做等比例缩小）、768:768（1:1）、768:1024（3:4）、1024:768（4:3）。<br>不传默认使用origin。<br>单位为 px。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method float getStrength() 获取<p>生成自由度。<br>Strength 值越小，生成图和原图越接近，取值范围(0, 1]，不传使用模型内置的默认值。<br>推荐的取值范围为0.6 - 0.8。</p>
 * @method void setStrength(float $Strength) 设置<p>生成自由度。<br>Strength 值越小，生成图和原图越接近，取值范围(0, 1]，不传使用模型内置的默认值。<br>推荐的取值范围为0.6 - 0.8。</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
 * @method integer getEnhanceImage() 获取<p>画质增强开关，默认关闭。<br>1：开启<br>0：关闭<br>开启后将增强图像的画质清晰度，生成耗时有所增加。</p>
 * @method void setEnhanceImage(integer $EnhanceImage) 设置<p>画质增强开关，默认关闭。<br>1：开启<br>0：关闭<br>开启后将增强图像的画质清晰度，生成耗时有所增加。</p>
 * @method integer getRestoreFace() 获取<p>细节优化的面部数量上限，支持0 ~ 6，默认为0。<br>若上传大于0的值，将以此为上限对每张图片中面积占比较小的面部进行细节修复，生成耗时根据实际优化的面部个数有所增加。</p>
 * @method void setRestoreFace(integer $RestoreFace) 设置<p>细节优化的面部数量上限，支持0 ~ 6，默认为0。<br>若上传大于0的值，将以此为上限对每张图片中面积占比较小的面部进行细节修复，生成耗时根据实际优化的面部个数有所增加。</p>
 */
class ImageToImageRequest extends AbstractModel
{
    /**
     * @var string <p>输入图 Base64 数据。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputImage;

    /**
     * @var string <p>输入图 Url。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputUrl;

    /**
     * @var string <p>文本描述。<br>用于在输入图的基础上引导生成图效果，增加生成结果中出现描述内容的可能。<br>推荐使用中文。最多支持256个 utf-8 字符。</p>
     */
    public $Prompt;

    /**
     * @var string <p>反向文本描述。<br>用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。<br>推荐使用中文。最多可传256个 utf-8 字符。</p>
     */
    public $NegativePrompt;

    /**
     * @var array <p>绘画风格。<br>请在  <a href="https://cloud.tencent.com/document/product/1668/86250">图像风格化风格列表</a> 中选择期望的风格，传入风格编号。<br>推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。</p>
     */
    public $Styles;

    /**
     * @var ResultConfig <p>生成图结果的配置，包括输出图片分辨率和尺寸等。<br>支持生成以下分辨率的图片：origin（与输入图分辨率一致，长边最高为2000，超出将做等比例缩小）、768:768（1:1）、768:1024（3:4）、1024:768（4:3）。<br>不传默认使用origin。<br>单位为 px。</p>
     */
    public $ResultConfig;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @var float <p>生成自由度。<br>Strength 值越小，生成图和原图越接近，取值范围(0, 1]，不传使用模型内置的默认值。<br>推荐的取值范围为0.6 - 0.8。</p>
     */
    public $Strength;

    /**
     * @var string <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
     */
    public $RspImgType;

    /**
     * @var integer <p>画质增强开关，默认关闭。<br>1：开启<br>0：关闭<br>开启后将增强图像的画质清晰度，生成耗时有所增加。</p>
     */
    public $EnhanceImage;

    /**
     * @var integer <p>细节优化的面部数量上限，支持0 ~ 6，默认为0。<br>若上传大于0的值，将以此为上限对每张图片中面积占比较小的面部进行细节修复，生成耗时根据实际优化的面部个数有所增加。</p>
     */
    public $RestoreFace;

    /**
     * @param string $InputImage <p>输入图 Base64 数据。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $InputUrl <p>输入图 Url。<br>算法将根据输入的图片，结合文本描述智能生成与之相关的图像。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px且大于50px，转成 Base64 字符串后小于 8MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $Prompt <p>文本描述。<br>用于在输入图的基础上引导生成图效果，增加生成结果中出现描述内容的可能。<br>推荐使用中文。最多支持256个 utf-8 字符。</p>
     * @param string $NegativePrompt <p>反向文本描述。<br>用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。<br>推荐使用中文。最多可传256个 utf-8 字符。</p>
     * @param array $Styles <p>绘画风格。<br>请在  <a href="https://cloud.tencent.com/document/product/1668/86250">图像风格化风格列表</a> 中选择期望的风格，传入风格编号。<br>推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。</p>
     * @param ResultConfig $ResultConfig <p>生成图结果的配置，包括输出图片分辨率和尺寸等。<br>支持生成以下分辨率的图片：origin（与输入图分辨率一致，长边最高为2000，超出将做等比例缩小）、768:768（1:1）、768:1024（3:4）、1024:768（4:3）。<br>不传默认使用origin。<br>单位为 px。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param float $Strength <p>生成自由度。<br>Strength 值越小，生成图和原图越接近，取值范围(0, 1]，不传使用模型内置的默认值。<br>推荐的取值范围为0.6 - 0.8。</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。</p>
     * @param integer $EnhanceImage <p>画质增强开关，默认关闭。<br>1：开启<br>0：关闭<br>开启后将增强图像的画质清晰度，生成耗时有所增加。</p>
     * @param integer $RestoreFace <p>细节优化的面部数量上限，支持0 ~ 6，默认为0。<br>若上传大于0的值，将以此为上限对每张图片中面积占比较小的面部进行细节修复，生成耗时根据实际优化的面部个数有所增加。</p>
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

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("Styles",$param) and $param["Styles"] !== null) {
            $this->Styles = $param["Styles"];
        }

        if (array_key_exists("ResultConfig",$param) and $param["ResultConfig"] !== null) {
            $this->ResultConfig = new ResultConfig();
            $this->ResultConfig->deserialize($param["ResultConfig"]);
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Strength",$param) and $param["Strength"] !== null) {
            $this->Strength = $param["Strength"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("EnhanceImage",$param) and $param["EnhanceImage"] !== null) {
            $this->EnhanceImage = $param["EnhanceImage"];
        }

        if (array_key_exists("RestoreFace",$param) and $param["RestoreFace"] !== null) {
            $this->RestoreFace = $param["RestoreFace"];
        }
    }
}
