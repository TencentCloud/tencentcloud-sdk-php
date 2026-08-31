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
 * 音色克隆任务输入。
 *
 * @method string getAudioUrl() 获取<p>克隆音频Url，AudioData为空时有效</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>克隆音频Url，AudioData为空时有效</p>
 * @method string getAudioFileId() 获取<p>输入音频fileId</p>
 * @method void setAudioFileId(string $AudioFileId) 设置<p>输入音频fileId</p>
 * @method string getLanguageBoost() 获取<p>音频语言</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>音频语言</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p>
 */
class CloneVoiceAsyncInput extends AbstractModel
{
    /**
     * @var string <p>克隆音频Url，AudioData为空时有效</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>输入音频fileId</p>
     */
    public $AudioFileId;

    /**
     * @var string <p>音频语言</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>扩展参数，json字符串</p>
     */
    public $ExtParam;

    /**
     * @param string $AudioUrl <p>克隆音频Url，AudioData为空时有效</p>
     * @param string $AudioFileId <p>输入音频fileId</p>
     * @param string $LanguageBoost <p>音频语言</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p>
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

        if (array_key_exists("AudioFileId",$param) and $param["AudioFileId"] !== null) {
            $this->AudioFileId = $param["AudioFileId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
