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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建 AIGC 声音复刻输入信息。
 *
 * @method AigcAudioCloneInputFileInfo getAudioFileInfo() 获取<p>原音频文件，模型将以此参数中传入的音频音色为示例对音色进行复刻。</p>
 * @method void setAudioFileInfo(AigcAudioCloneInputFileInfo $AudioFileInfo) 设置<p>原音频文件，模型将以此参数中传入的音频音色为示例对音色进行复刻。</p>
 * @method string getVoiceId() 获取<p>自定义的声音ID。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>自定义的声音ID。</p>
 * @method string getText() 获取<p>复刻试听参数。</p>
 * @method void setText(string $Text) 设置<p>复刻试听参数。</p>
 * @method AigcAudioCloneInputFileInfo getPromptAudioFileInfo() 获取<p>音色复刻示例音频。</p>
 * @method void setPromptAudioFileInfo(AigcAudioCloneInputFileInfo $PromptAudioFileInfo) 设置<p>音色复刻示例音频。</p>
 * @method string getPromptText() 获取<p>示例音频对应的文本内容。</p>
 * @method void setPromptText(string $PromptText) 设置<p>示例音频对应的文本内容。</p>
 * @method string getPayload() 获取<p>透传参数。</p>
 * @method void setPayload(string $Payload) 设置<p>透传参数。</p>
 */
class CreateAigcAudioCloneInput extends AbstractModel
{
    /**
     * @var AigcAudioCloneInputFileInfo <p>原音频文件，模型将以此参数中传入的音频音色为示例对音色进行复刻。</p>
     */
    public $AudioFileInfo;

    /**
     * @var string <p>自定义的声音ID。</p>
     */
    public $VoiceId;

    /**
     * @var string <p>复刻试听参数。</p>
     */
    public $Text;

    /**
     * @var AigcAudioCloneInputFileInfo <p>音色复刻示例音频。</p>
     */
    public $PromptAudioFileInfo;

    /**
     * @var string <p>示例音频对应的文本内容。</p>
     */
    public $PromptText;

    /**
     * @var string <p>透传参数。</p>
     */
    public $Payload;

    /**
     * @param AigcAudioCloneInputFileInfo $AudioFileInfo <p>原音频文件，模型将以此参数中传入的音频音色为示例对音色进行复刻。</p>
     * @param string $VoiceId <p>自定义的声音ID。</p>
     * @param string $Text <p>复刻试听参数。</p>
     * @param AigcAudioCloneInputFileInfo $PromptAudioFileInfo <p>音色复刻示例音频。</p>
     * @param string $PromptText <p>示例音频对应的文本内容。</p>
     * @param string $Payload <p>透传参数。</p>
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
        if (array_key_exists("AudioFileInfo",$param) and $param["AudioFileInfo"] !== null) {
            $this->AudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->AudioFileInfo->deserialize($param["AudioFileInfo"]);
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("PromptAudioFileInfo",$param) and $param["PromptAudioFileInfo"] !== null) {
            $this->PromptAudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->PromptAudioFileInfo->deserialize($param["PromptAudioFileInfo"]);
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
