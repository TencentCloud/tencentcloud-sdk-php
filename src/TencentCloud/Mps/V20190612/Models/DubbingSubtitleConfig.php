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
 * dubbing任务翻译配置
 *
 * @method string getSubtitleSource() 获取<p>字幕来源。</p><p>枚举值：</p><ul><li>OCR： OCR文本识别，识别视频画面上的文本。</li><li>ASR： ASR语音识别，识别视频语音对话。</li><li>External： 外部字幕文件，提供原文/译文字幕URL。</li></ul>
 * @method void setSubtitleSource(string $SubtitleSource) 设置<p>字幕来源。</p><p>枚举值：</p><ul><li>OCR： OCR文本识别，识别视频画面上的文本。</li><li>ASR： ASR语音识别，识别视频语音对话。</li><li>External： 外部字幕文件，提供原文/译文字幕URL。</li></ul>
 * @method string getAsrAssistOcr() 获取<p>使用ASR辅助OCR。</p><p>枚举值：</p><ul><li>ON： 开启使用ASR辅助OCR。</li><li>OFF： 不开启使用ASR辅助OCR。</li></ul><p>默认值：OFF</p><p>仅 SubtitleSource=OCR 时允许设为 ON</p>
 * @method void setAsrAssistOcr(string $AsrAssistOcr) 设置<p>使用ASR辅助OCR。</p><p>枚举值：</p><ul><li>ON： 开启使用ASR辅助OCR。</li><li>OFF： 不开启使用ASR辅助OCR。</li></ul><p>默认值：OFF</p><p>仅 SubtitleSource=OCR 时允许设为 ON</p>
 * @method string getEraseOriginalSubtitle() 获取<p>擦除原字幕。</p><p>枚举值：</p><ul><li>ON： 擦除原字幕。</li><li>OFF： 保留原字幕。</li></ul><p>默认值：OFF</p><p>SubtitleSource=External 时不允许设为 ON</p>
 * @method void setEraseOriginalSubtitle(string $EraseOriginalSubtitle) 设置<p>擦除原字幕。</p><p>枚举值：</p><ul><li>ON： 擦除原字幕。</li><li>OFF： 保留原字幕。</li></ul><p>默认值：OFF</p><p>SubtitleSource=External 时不允许设为 ON</p>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() 获取<p>字幕位置信息。</p>
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) 设置<p>字幕位置信息。</p>
 */
class DubbingSubtitleConfig extends AbstractModel
{
    /**
     * @var string <p>字幕来源。</p><p>枚举值：</p><ul><li>OCR： OCR文本识别，识别视频画面上的文本。</li><li>ASR： ASR语音识别，识别视频语音对话。</li><li>External： 外部字幕文件，提供原文/译文字幕URL。</li></ul>
     */
    public $SubtitleSource;

    /**
     * @var string <p>使用ASR辅助OCR。</p><p>枚举值：</p><ul><li>ON： 开启使用ASR辅助OCR。</li><li>OFF： 不开启使用ASR辅助OCR。</li></ul><p>默认值：OFF</p><p>仅 SubtitleSource=OCR 时允许设为 ON</p>
     */
    public $AsrAssistOcr;

    /**
     * @var string <p>擦除原字幕。</p><p>枚举值：</p><ul><li>ON： 擦除原字幕。</li><li>OFF： 保留原字幕。</li></ul><p>默认值：OFF</p><p>SubtitleSource=External 时不允许设为 ON</p>
     */
    public $EraseOriginalSubtitle;

    /**
     * @var SelectingSubtitleAreasConfig <p>字幕位置信息。</p>
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @param string $SubtitleSource <p>字幕来源。</p><p>枚举值：</p><ul><li>OCR： OCR文本识别，识别视频画面上的文本。</li><li>ASR： ASR语音识别，识别视频语音对话。</li><li>External： 外部字幕文件，提供原文/译文字幕URL。</li></ul>
     * @param string $AsrAssistOcr <p>使用ASR辅助OCR。</p><p>枚举值：</p><ul><li>ON： 开启使用ASR辅助OCR。</li><li>OFF： 不开启使用ASR辅助OCR。</li></ul><p>默认值：OFF</p><p>仅 SubtitleSource=OCR 时允许设为 ON</p>
     * @param string $EraseOriginalSubtitle <p>擦除原字幕。</p><p>枚举值：</p><ul><li>ON： 擦除原字幕。</li><li>OFF： 保留原字幕。</li></ul><p>默认值：OFF</p><p>SubtitleSource=External 时不允许设为 ON</p>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>字幕位置信息。</p>
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
        if (array_key_exists("SubtitleSource",$param) and $param["SubtitleSource"] !== null) {
            $this->SubtitleSource = $param["SubtitleSource"];
        }

        if (array_key_exists("AsrAssistOcr",$param) and $param["AsrAssistOcr"] !== null) {
            $this->AsrAssistOcr = $param["AsrAssistOcr"];
        }

        if (array_key_exists("EraseOriginalSubtitle",$param) and $param["EraseOriginalSubtitle"] !== null) {
            $this->EraseOriginalSubtitle = $param["EraseOriginalSubtitle"];
        }

        if (array_key_exists("SelectingSubtitleAreasConfig",$param) and $param["SelectingSubtitleAreasConfig"] !== null) {
            $this->SelectingSubtitleAreasConfig = new SelectingSubtitleAreasConfig();
            $this->SelectingSubtitleAreasConfig->deserialize($param["SelectingSubtitleAreasConfig"]);
        }
    }
}
