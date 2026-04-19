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
 * @method string getPrompt() 获取<p>文本描述。将根据输入的文本智能生成与之相关的图像。<br>不能为空，推荐使用中文。最多可传1024个 utf-8 字符。</p>
 * @method void setPrompt(string $Prompt) 设置<p>文本描述。将根据输入的文本智能生成与之相关的图像。<br>不能为空，推荐使用中文。最多可传1024个 utf-8 字符。</p>
 * @method string getNegativePrompt() 获取<p>反向提示词。 减少生成结果中出现描述内容。<br>推荐使用中文。最多可传1024个 utf-8 字符。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>反向提示词。 减少生成结果中出现描述内容。<br>推荐使用中文。最多可传1024个 utf-8 字符。</p>
 * @method string getResolution() 获取<p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为px。</p>
 * @method void setResolution(string $Resolution) 设置<p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为px。</p>
 * @method integer getSeed() 获取<p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 */
class TextToImageLiteRequest extends AbstractModel
{
    /**
     * @var string <p>文本描述。将根据输入的文本智能生成与之相关的图像。<br>不能为空，推荐使用中文。最多可传1024个 utf-8 字符。</p>
     */
    public $Prompt;

    /**
     * @var string <p>反向提示词。 减少生成结果中出现描述内容。<br>推荐使用中文。最多可传1024个 utf-8 字符。</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为px。</p>
     */
    public $Resolution;

    /**
     * @var integer <p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
     */
    public $Seed;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @var string <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
     */
    public $RspImgType;

    /**
     * @param string $Prompt <p>文本描述。将根据输入的文本智能生成与之相关的图像。<br>不能为空，推荐使用中文。最多可传1024个 utf-8 字符。</p>
     * @param string $NegativePrompt <p>反向提示词。 减少生成结果中出现描述内容。<br>推荐使用中文。最多可传1024个 utf-8 字符。</p>
     * @param string $Resolution <p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为px。</p>
     * @param integer $Seed <p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
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
