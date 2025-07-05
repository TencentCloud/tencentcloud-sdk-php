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
 * TextToImageLite请求参数结构体
 *
 * @method string getPrompt() 获取文本描述。将根据输入的文本智能生成与之相关的图像。
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
 * @method void setPrompt(string $Prompt) 设置文本描述。将根据输入的文本智能生成与之相关的图像。
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
 * @method string getNegativePrompt() 获取反向提示词。 减少生成结果中出现描述内容。
推荐使用中文。最多可传1024个 utf-8 字符。
 * @method void setNegativePrompt(string $NegativePrompt) 设置反向提示词。 减少生成结果中出现描述内容。
推荐使用中文。最多可传1024个 utf-8 字符。
 * @method string getResolution() 获取生成图分辨率，默认1024:1024。
支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。
支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。
 * @method void setResolution(string $Resolution) 设置生成图分辨率，默认1024:1024。
支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。
支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。
 * @method integer getSeed() 获取随机种子，默认随机。
0：随机种子生成。
不传：随机种子生成。
正数：固定种子生成。

 * @method void setSeed(integer $Seed) 设置随机种子，默认随机。
0：随机种子生成。
不传：随机种子生成。
正数：固定种子生成。

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
 * @method string getRspImgType() 获取返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
 */
class TextToImageLiteRequest extends AbstractModel
{
    /**
     * @var string 文本描述。将根据输入的文本智能生成与之相关的图像。
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
     */
    public $Prompt;

    /**
     * @var string 反向提示词。 减少生成结果中出现描述内容。
推荐使用中文。最多可传1024个 utf-8 字符。
     */
    public $NegativePrompt;

    /**
     * @var string 生成图分辨率，默认1024:1024。
支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。
支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。
     */
    public $Resolution;

    /**
     * @var integer 随机种子，默认随机。
0：随机种子生成。
不传：随机种子生成。
正数：固定种子生成。

     */
    public $Seed;

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
     * @var string 返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
     */
    public $RspImgType;

    /**
     * @param string $Prompt 文本描述。将根据输入的文本智能生成与之相关的图像。
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
     * @param string $NegativePrompt 反向提示词。 减少生成结果中出现描述内容。
推荐使用中文。最多可传1024个 utf-8 字符。
     * @param string $Resolution 生成图分辨率，默认1024:1024。
支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。
支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。
     * @param integer $Seed 随机种子，默认随机。
0：随机种子生成。
不传：随机种子生成。
正数：固定种子生成。

     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param string $RspImgType 返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。
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

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
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
