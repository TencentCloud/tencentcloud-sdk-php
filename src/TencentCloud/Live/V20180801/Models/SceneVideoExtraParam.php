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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于场景化创作视频时用到的扩展参数信息。
 *
 * @method string getResolution() 获取<p>指定输出分辨率。选项:720P, 1080P, 2K, 4K。</p>
 * @method void setResolution(string $Resolution) 设置<p>指定输出分辨率。选项:720P, 1080P, 2K, 4K。</p>
 * @method string getAspectRatio() 获取<p>指定输出视频的宽高比，示例：16:9。</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定输出视频的宽高比，示例：16:9。</p>
 * @method boolean getOffPeak() 获取<p>错峰模型，仅支持的模型可使用。</p>
 * @method void setOffPeak(boolean $OffPeak) 设置<p>错峰模型，仅支持的模型可使用。</p>
 * @method boolean getLogoAdd() 获取<p>自动添加水印，默认左上角添加 &quot;AI生成&quot; 标识。</p>
 * @method void setLogoAdd(boolean $LogoAdd) 设置<p>自动添加水印，默认左上角添加 &quot;AI生成&quot; 标识。</p>
 * @method boolean getEnableAudio() 获取<p>使用音画同出。</p>
 * @method void setEnableAudio(boolean $EnableAudio) 设置<p>使用音画同出。</p>
 * @method boolean getEnableBgm() 获取<p>生成背景音乐。</p>
 * @method void setEnableBgm(boolean $EnableBgm) 设置<p>生成背景音乐。</p>
 * @method boolean getEnablePromptEnhance() 获取<p>对输入的Prompt进行优化。</p>
 * @method void setEnablePromptEnhance(boolean $EnablePromptEnhance) 设置<p>对输入的Prompt进行优化。</p>
 * @method string getCallbackUrl() 获取<p>回调URL。</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调URL。</p>
 */
class SceneVideoExtraParam extends AbstractModel
{
    /**
     * @var string <p>指定输出分辨率。选项:720P, 1080P, 2K, 4K。</p>
     */
    public $Resolution;

    /**
     * @var string <p>指定输出视频的宽高比，示例：16:9。</p>
     */
    public $AspectRatio;

    /**
     * @var boolean <p>错峰模型，仅支持的模型可使用。</p>
     */
    public $OffPeak;

    /**
     * @var boolean <p>自动添加水印，默认左上角添加 &quot;AI生成&quot; 标识。</p>
     */
    public $LogoAdd;

    /**
     * @var boolean <p>使用音画同出。</p>
     */
    public $EnableAudio;

    /**
     * @var boolean <p>生成背景音乐。</p>
     */
    public $EnableBgm;

    /**
     * @var boolean <p>对输入的Prompt进行优化。</p>
     */
    public $EnablePromptEnhance;

    /**
     * @var string <p>回调URL。</p>
     */
    public $CallbackUrl;

    /**
     * @param string $Resolution <p>指定输出分辨率。选项:720P, 1080P, 2K, 4K。</p>
     * @param string $AspectRatio <p>指定输出视频的宽高比，示例：16:9。</p>
     * @param boolean $OffPeak <p>错峰模型，仅支持的模型可使用。</p>
     * @param boolean $LogoAdd <p>自动添加水印，默认左上角添加 &quot;AI生成&quot; 标识。</p>
     * @param boolean $EnableAudio <p>使用音画同出。</p>
     * @param boolean $EnableBgm <p>生成背景音乐。</p>
     * @param boolean $EnablePromptEnhance <p>对输入的Prompt进行优化。</p>
     * @param string $CallbackUrl <p>回调URL。</p>
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("EnableBgm",$param) and $param["EnableBgm"] !== null) {
            $this->EnableBgm = $param["EnableBgm"];
        }

        if (array_key_exists("EnablePromptEnhance",$param) and $param["EnablePromptEnhance"] !== null) {
            $this->EnablePromptEnhance = $param["EnablePromptEnhance"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
