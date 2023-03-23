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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageToImage请求参数结构体
 *
 * @method string getInputImage() 获取输入图 Base64 数据。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
 * @method void setInputImage(string $InputImage) 设置输入图 Base64 数据。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
 * @method string getInputUrl() 获取输入图 Url。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
 * @method void setInputUrl(string $InputUrl) 设置输入图 Url。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
 * @method string getPrompt() 获取文本描述。
用于在输入图的基础上引导生成图效果，建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。推荐使用中文。最多支持512个 utf-8 字符。
注意：如果不输入任何文本描述，可能导致较差的效果，建议根据期望的效果输入相应的文本描述。
 * @method void setPrompt(string $Prompt) 设置文本描述。
用于在输入图的基础上引导生成图效果，建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。推荐使用中文。最多支持512个 utf-8 字符。
注意：如果不输入任何文本描述，可能导致较差的效果，建议根据期望的效果输入相应的文本描述。
 * @method string getNegativePrompt() 获取反向文本描述。
用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。
推荐使用中文。最多可传512个 utf-8 字符。
 * @method void setNegativePrompt(string $NegativePrompt) 设置反向文本描述。
用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。
推荐使用中文。最多可传512个 utf-8 字符。
 * @method array getStyles() 获取绘画风格。
请在  [智能图生图风格列表](https://cloud.tencent.com/document/product/1668/86250) 中选择期望的风格，传入风格编号。
推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。
如果想要探索风格列表之外的风格，也可以尝试在 Prompt 中输入其他的风格描述。
 * @method void setStyles(array $Styles) 设置绘画风格。
请在  [智能图生图风格列表](https://cloud.tencent.com/document/product/1668/86250) 中选择期望的风格，传入风格编号。
推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。
如果想要探索风格列表之外的风格，也可以尝试在 Prompt 中输入其他的风格描述。
 * @method ResultConfig getResultConfig() 获取生成图结果的配置，包括输出图片分辨率和尺寸等。
 * @method void setResultConfig(ResultConfig $ResultConfig) 设置生成图结果的配置，包括输出图片分辨率和尺寸等。
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
 * @method float getStrength() 获取生成自由度。
Strength 值越小，生成图和原图越接近。取值范围0~1，不传默认为0.65。
 * @method void setStrength(float $Strength) 设置生成自由度。
Strength 值越小，生成图和原图越接近。取值范围0~1，不传默认为0.65。
 */
class ImageToImageRequest extends AbstractModel
{
    /**
     * @var string 输入图 Base64 数据。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
     */
    public $InputImage;

    /**
     * @var string 输入图 Url。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
     */
    public $InputUrl;

    /**
     * @var string 文本描述。
用于在输入图的基础上引导生成图效果，建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。推荐使用中文。最多支持512个 utf-8 字符。
注意：如果不输入任何文本描述，可能导致较差的效果，建议根据期望的效果输入相应的文本描述。
     */
    public $Prompt;

    /**
     * @var string 反向文本描述。
用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。
推荐使用中文。最多可传512个 utf-8 字符。
     */
    public $NegativePrompt;

    /**
     * @var array 绘画风格。
请在  [智能图生图风格列表](https://cloud.tencent.com/document/product/1668/86250) 中选择期望的风格，传入风格编号。
推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。
如果想要探索风格列表之外的风格，也可以尝试在 Prompt 中输入其他的风格描述。
     */
    public $Styles;

    /**
     * @var ResultConfig 生成图结果的配置，包括输出图片分辨率和尺寸等。
     */
    public $ResultConfig;

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
     * @var float 生成自由度。
Strength 值越小，生成图和原图越接近。取值范围0~1，不传默认为0.65。
     */
    public $Strength;

    /**
     * @param string $InputImage 输入图 Base64 数据。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
     * @param string $InputUrl 输入图 Url。
算法将根据输入的图片，结合文本描述智能生成与之相关的图像。
Base64 和 Url 必须提供一个，如果都提供以 Base64 为准。
图片限制：单边分辨率小于2000，转成 Base64 字符串后小于 5MB。
     * @param string $Prompt 文本描述。
用于在输入图的基础上引导生成图效果，建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。推荐使用中文。最多支持512个 utf-8 字符。
注意：如果不输入任何文本描述，可能导致较差的效果，建议根据期望的效果输入相应的文本描述。
     * @param string $NegativePrompt 反向文本描述。
用于一定程度上从反面引导模型生成的走向，减少生成结果中出现描述内容的可能，但不能完全杜绝。
推荐使用中文。最多可传512个 utf-8 字符。
     * @param array $Styles 绘画风格。
请在  [智能图生图风格列表](https://cloud.tencent.com/document/product/1668/86250) 中选择期望的风格，传入风格编号。
推荐使用且只使用一种风格。不传默认使用201（日系动漫风格）。
如果想要探索风格列表之外的风格，也可以尝试在 Prompt 中输入其他的风格描述。
     * @param ResultConfig $ResultConfig 生成图结果的配置，包括输出图片分辨率和尺寸等。
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param float $Strength 生成自由度。
Strength 值越小，生成图和原图越接近。取值范围0~1，不传默认为0.65。
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
    }
}
