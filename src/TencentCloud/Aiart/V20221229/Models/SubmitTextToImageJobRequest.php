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
 * SubmitTextToImageJob请求参数结构体
 *
 * @method string getPrompt() 获取文本描述。 
算法将根据输入的文本智能生成与之相关的图像。 
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
 * @method void setPrompt(string $Prompt) 设置文本描述。 
算法将根据输入的文本智能生成与之相关的图像。 
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
 * @method string getResolution() 获取生成图分辨率，默认1024:1024：
 - 宽高维度均在 [512, 2048] 像素范围内;
 - 如果宽高乘积（即图像面积）超过 1024×1024 像素，则宽高维度须在 [1024, 2048] 像素范围内;
 - 宽高乘积（即图像面积）不超过 2048×2048 像素;
 * @method void setResolution(string $Resolution) 设置生成图分辨率，默认1024:1024：
 - 宽高维度均在 [512, 2048] 像素范围内;
 - 如果宽高乘积（即图像面积）超过 1024×1024 像素，则宽高维度须在 [1024, 2048] 像素范围内;
 - 宽高乘积（即图像面积）不超过 2048×2048 像素;
 * @method integer getSeed() 获取随机种子，默认随机。
不传：随机种子生成。
正数：固定种子生成。
扩写开启时固定种子不生效，将保持随机。
 * @method void setSeed(integer $Seed) 设置随机种子，默认随机。
不传：随机种子生成。
正数：固定种子生成。
扩写开启时固定种子不生效，将保持随机。
 * @method integer getLogoAdd() 获取为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method integer getRevise() 获取是否开启prompt改写，为空时默认开启，改写预计会增加20s左右耗时。
0：关闭改写
1：开启改写
建议默认开启，如果关闭改写，需要调用方自己接改写，否则对生图效果有较大影响，改写方法可以参考：[改写](https://github.com/Tencent-Hunyuan/HunyuanImage-3.0/tree/main/PE)
示例值：1
 * @method void setRevise(integer $Revise) 设置是否开启prompt改写，为空时默认开启，改写预计会增加20s左右耗时。
0：关闭改写
1：开启改写
建议默认开启，如果关闭改写，需要调用方自己接改写，否则对生图效果有较大影响，改写方法可以参考：[改写](https://github.com/Tencent-Hunyuan/HunyuanImage-3.0/tree/main/PE)
示例值：1
 */
class SubmitTextToImageJobRequest extends AbstractModel
{
    /**
     * @var string 文本描述。 
算法将根据输入的文本智能生成与之相关的图像。 
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
     */
    public $Prompt;

    /**
     * @var string 生成图分辨率，默认1024:1024：
 - 宽高维度均在 [512, 2048] 像素范围内;
 - 如果宽高乘积（即图像面积）超过 1024×1024 像素，则宽高维度须在 [1024, 2048] 像素范围内;
 - 宽高乘积（即图像面积）不超过 2048×2048 像素;
     */
    public $Resolution;

    /**
     * @var integer 随机种子，默认随机。
不传：随机种子生成。
正数：固定种子生成。
扩写开启时固定种子不生效，将保持随机。
     */
    public $Seed;

    /**
     * @var integer 为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
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
     * @var integer 是否开启prompt改写，为空时默认开启，改写预计会增加20s左右耗时。
0：关闭改写
1：开启改写
建议默认开启，如果关闭改写，需要调用方自己接改写，否则对生图效果有较大影响，改写方法可以参考：[改写](https://github.com/Tencent-Hunyuan/HunyuanImage-3.0/tree/main/PE)
示例值：1
     */
    public $Revise;

    /**
     * @param string $Prompt 文本描述。 
算法将根据输入的文本智能生成与之相关的图像。 
不能为空，推荐使用中文。最多可传1024个 utf-8 字符。
     * @param string $Resolution 生成图分辨率，默认1024:1024：
 - 宽高维度均在 [512, 2048] 像素范围内;
 - 如果宽高乘积（即图像面积）超过 1024×1024 像素，则宽高维度须在 [1024, 2048] 像素范围内;
 - 宽高乘积（即图像面积）不超过 2048×2048 像素;
     * @param integer $Seed 随机种子，默认随机。
不传：随机种子生成。
正数：固定种子生成。
扩写开启时固定种子不生效，将保持随机。
     * @param integer $LogoAdd 为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param integer $Revise 是否开启prompt改写，为空时默认开启，改写预计会增加20s左右耗时。
0：关闭改写
1：开启改写
建议默认开启，如果关闭改写，需要调用方自己接改写，否则对生图效果有较大影响，改写方法可以参考：[改写](https://github.com/Tencent-Hunyuan/HunyuanImage-3.0/tree/main/PE)
示例值：1
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

        if (array_key_exists("Revise",$param) and $param["Revise"] !== null) {
            $this->Revise = $param["Revise"];
        }
    }
}
