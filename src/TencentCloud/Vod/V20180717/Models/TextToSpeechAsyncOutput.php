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
 * 语音合成任务输出。
 *
 * @method string getAudioUrl() 获取<p>合成音频结果URL</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>合成音频结果URL</p>
 * @method string getVoiceId() 获取<p>使用的音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>使用的音色ID</p>
 * @method string getExtInfo() 获取<p>扩展信息</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>扩展信息</p>
 * @method string getFileId() 获取<p>合成音频结果FileId</p>
 * @method void setFileId(string $FileId) 设置<p>合成音频结果FileId</p>
 */
class TextToSpeechAsyncOutput extends AbstractModel
{
    /**
     * @var string <p>合成音频结果URL</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>使用的音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>扩展信息</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>合成音频结果FileId</p>
     */
    public $FileId;

    /**
     * @param string $AudioUrl <p>合成音频结果URL</p>
     * @param string $VoiceId <p>使用的音色ID</p>
     * @param string $ExtInfo <p>扩展信息</p>
     * @param string $FileId <p>合成音频结果FileId</p>
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
        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
