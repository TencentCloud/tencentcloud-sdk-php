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
 * AI对话任务的STT配置参数
 *
 * @method string getProvider() 获取<p>ASR 提供方：trtc（腾讯自研）或第三方厂商名称（如 azure）。</p>
 * @method void setProvider(string $Provider) 设置<p>ASR 提供方：trtc（腾讯自研）或第三方厂商名称（如 azure）。</p>
 * @method string getParams() 获取<p>ASR厂商专属参数，填写JSON 序列化后的字符串。</p>
 * @method void setParams(string $Params) 设置<p>ASR厂商专属参数，填写JSON 序列化后的字符串。</p>
 */
class VoiceConversationSTTConfig extends AbstractModel
{
    /**
     * @var string <p>ASR 提供方：trtc（腾讯自研）或第三方厂商名称（如 azure）。</p>
     */
    public $Provider;

    /**
     * @var string <p>ASR厂商专属参数，填写JSON 序列化后的字符串。</p>
     */
    public $Params;

    /**
     * @param string $Provider <p>ASR 提供方：trtc（腾讯自研）或第三方厂商名称（如 azure）。</p>
     * @param string $Params <p>ASR厂商专属参数，填写JSON 序列化后的字符串。</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
