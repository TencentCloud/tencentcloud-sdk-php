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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TTS相关配置
 *
 * @method string getVoiceId() 获取音色ID
 * @method void setVoiceId(string $VoiceId) 设置音色ID
 * @method string getModel() 获取TTS 的模型，默认是：flow_01_turbo, 可选: [ flow_01_turbo, flow_01_ex]
 * @method void setModel(string $Model) 设置TTS 的模型，默认是：flow_01_turbo, 可选: [ flow_01_turbo, flow_01_ex]
 */
class TTSConfig extends AbstractModel
{
    /**
     * @var string 音色ID
     */
    public $VoiceId;

    /**
     * @var string TTS 的模型，默认是：flow_01_turbo, 可选: [ flow_01_turbo, flow_01_ex]
     */
    public $Model;

    /**
     * @param string $VoiceId 音色ID
     * @param string $Model TTS 的模型，默认是：flow_01_turbo, 可选: [ flow_01_turbo, flow_01_ex]
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
