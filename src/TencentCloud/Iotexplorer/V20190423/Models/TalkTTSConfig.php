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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前仅支持 `flow`（TRTC Flow TTS）
 *
 * @method string getType() 获取TTS的类型
 * @method void setType(string $Type) 设置TTS的类型
 * @method TalkTTSFlow getFlow() 获取Flow TTS 的具体配置
 * @method void setFlow(TalkTTSFlow $Flow) 设置Flow TTS 的具体配置
 */
class TalkTTSConfig extends AbstractModel
{
    /**
     * @var string TTS的类型
     */
    public $Type;

    /**
     * @var TalkTTSFlow Flow TTS 的具体配置
     */
    public $Flow;

    /**
     * @param string $Type TTS的类型
     * @param TalkTTSFlow $Flow Flow TTS 的具体配置
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Flow",$param) and $param["Flow"] !== null) {
            $this->Flow = new TalkTTSFlow();
            $this->Flow->deserialize($param["Flow"]);
        }
    }
}
