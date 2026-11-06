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
 * AI对话任务端到端语音大模型的配置参数。
 *
 * @method string getProvider() 获取<p>S2S 厂商标识，例如&quot;tencent&quot;。</p>
 * @method void setProvider(string $Provider) 设置<p>S2S 厂商标识，例如&quot;tencent&quot;。</p>
 * @method string getParams() 获取<p>厂商专属参数，JSON 序列化后的字符串。</p>
 * @method void setParams(string $Params) 设置<p>厂商专属参数，JSON 序列化后的字符串。</p>
 * @method string getWelcomeMessage() 获取<p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置<p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
 */
class VoiceConversationS2SConfig extends AbstractModel
{
    /**
     * @var string <p>S2S 厂商标识，例如&quot;tencent&quot;。</p>
     */
    public $Provider;

    /**
     * @var string <p>厂商专属参数，JSON 序列化后的字符串。</p>
     */
    public $Params;

    /**
     * @var string <p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
     */
    public $WelcomeMessage;

    /**
     * @param string $Provider <p>S2S 厂商标识，例如&quot;tencent&quot;。</p>
     * @param string $Params <p>厂商专属参数，JSON 序列化后的字符串。</p>
     * @param string $WelcomeMessage <p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
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

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }
    }
}
