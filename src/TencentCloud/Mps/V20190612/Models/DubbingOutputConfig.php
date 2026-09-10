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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dubbing任务输出配置
 *
 * @method string getOutputMode() 获取<p>输出方式</p><p>枚举值：</p><ul><li>FinalVideoOnly： 默认，仅成片视频</li><li>AudioAndSubtitle： 译文音频+译文字幕</li><li>Custom： 自定义</li></ul><p>默认值：FinalVideoOnly</p><p>使用外部字幕时无译文音频+字幕返回</p>
 * @method void setOutputMode(string $OutputMode) 设置<p>输出方式</p><p>枚举值：</p><ul><li>FinalVideoOnly： 默认，仅成片视频</li><li>AudioAndSubtitle： 译文音频+译文字幕</li><li>Custom： 自定义</li></ul><p>默认值：FinalVideoOnly</p><p>使用外部字幕时无译文音频+字幕返回</p>
 * @method string getOutputFinalVideo() 获取<p>输出成片视频开关</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：ON</p><p>仅 Custom 模式生效</p>
 * @method void setOutputFinalVideo(string $OutputFinalVideo) 设置<p>输出成片视频开关</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：ON</p><p>仅 Custom 模式生效</p>
 * @method string getOutputSubtitle() 获取<p>输出字幕文件（同时包含原语音字幕、目标语言字幕）开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method void setOutputSubtitle(string $OutputSubtitle) 设置<p>输出字幕文件（同时包含原语音字幕、目标语言字幕）开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method string getOutputDstAudio() 获取<p>输出译文配音音频开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p><p>仅 Custom 模式生效</p>
 * @method void setOutputDstAudio(string $OutputDstAudio) 设置<p>输出译文配音音频开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p><p>仅 Custom 模式生效</p>
 * @method DubbingEmbedSubtitleConfig getEmbedSubtitleConfig() 获取<p>压制字幕配置信息。</p>
 * @method void setEmbedSubtitleConfig(DubbingEmbedSubtitleConfig $EmbedSubtitleConfig) 设置<p>压制字幕配置信息。</p>
 */
class DubbingOutputConfig extends AbstractModel
{
    /**
     * @var string <p>输出方式</p><p>枚举值：</p><ul><li>FinalVideoOnly： 默认，仅成片视频</li><li>AudioAndSubtitle： 译文音频+译文字幕</li><li>Custom： 自定义</li></ul><p>默认值：FinalVideoOnly</p><p>使用外部字幕时无译文音频+字幕返回</p>
     */
    public $OutputMode;

    /**
     * @var string <p>输出成片视频开关</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：ON</p><p>仅 Custom 模式生效</p>
     */
    public $OutputFinalVideo;

    /**
     * @var string <p>输出字幕文件（同时包含原语音字幕、目标语言字幕）开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     */
    public $OutputSubtitle;

    /**
     * @var string <p>输出译文配音音频开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p><p>仅 Custom 模式生效</p>
     */
    public $OutputDstAudio;

    /**
     * @var DubbingEmbedSubtitleConfig <p>压制字幕配置信息。</p>
     */
    public $EmbedSubtitleConfig;

    /**
     * @param string $OutputMode <p>输出方式</p><p>枚举值：</p><ul><li>FinalVideoOnly： 默认，仅成片视频</li><li>AudioAndSubtitle： 译文音频+译文字幕</li><li>Custom： 自定义</li></ul><p>默认值：FinalVideoOnly</p><p>使用外部字幕时无译文音频+字幕返回</p>
     * @param string $OutputFinalVideo <p>输出成片视频开关</p><p>枚举值：</p><ul><li>ON： 打开</li><li>OFF： 关闭</li></ul><p>默认值：ON</p><p>仅 Custom 模式生效</p>
     * @param string $OutputSubtitle <p>输出字幕文件（同时包含原语音字幕、目标语言字幕）开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     * @param string $OutputDstAudio <p>输出译文配音音频开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p><p>仅 Custom 模式生效</p>
     * @param DubbingEmbedSubtitleConfig $EmbedSubtitleConfig <p>压制字幕配置信息。</p>
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
        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("OutputFinalVideo",$param) and $param["OutputFinalVideo"] !== null) {
            $this->OutputFinalVideo = $param["OutputFinalVideo"];
        }

        if (array_key_exists("OutputSubtitle",$param) and $param["OutputSubtitle"] !== null) {
            $this->OutputSubtitle = $param["OutputSubtitle"];
        }

        if (array_key_exists("OutputDstAudio",$param) and $param["OutputDstAudio"] !== null) {
            $this->OutputDstAudio = $param["OutputDstAudio"];
        }

        if (array_key_exists("EmbedSubtitleConfig",$param) and $param["EmbedSubtitleConfig"] !== null) {
            $this->EmbedSubtitleConfig = new DubbingEmbedSubtitleConfig();
            $this->EmbedSubtitleConfig->deserialize($param["EmbedSubtitleConfig"]);
        }
    }
}
