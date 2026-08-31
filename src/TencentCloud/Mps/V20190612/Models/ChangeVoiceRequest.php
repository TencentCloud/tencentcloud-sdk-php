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
 * ChangeVoice请求参数结构体
 *
 * @method string getAudioData() 获取<p>待转换音频base64编码</p>
 * @method void setAudioData(string $AudioData) 设置<p>待转换音频base64编码</p>
 * @method string getAudioUrl() 获取<p>待转换音频Url，AudioData为空时有效</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>待转换音频Url，AudioData为空时有效</p>
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method SyncDubbingOutputOption getOutput() 获取<p>输出相关参数</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) 设置<p>输出相关参数</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p>
 */
class ChangeVoiceRequest extends AbstractModel
{
    /**
     * @var string <p>待转换音频base64编码</p>
     */
    public $AudioData;

    /**
     * @var string <p>待转换音频Url，AudioData为空时有效</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var SyncDubbingOutputOption <p>输出相关参数</p>
     */
    public $Output;

    /**
     * @var string <p>扩展参数，json字符串</p>
     */
    public $ExtParam;

    /**
     * @param string $AudioData <p>待转换音频base64编码</p>
     * @param string $AudioUrl <p>待转换音频Url，AudioData为空时有效</p>
     * @param string $VoiceId <p>音色ID</p>
     * @param SyncDubbingOutputOption $Output <p>输出相关参数</p>
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
        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SyncDubbingOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
