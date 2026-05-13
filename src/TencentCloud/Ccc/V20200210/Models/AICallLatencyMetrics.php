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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体的响应延时
 *
 * @method integer getAsrLatency() 获取<p>asr时延（毫秒）</p><p>-1 表示无 asr时延</p>
 * @method void setAsrLatency(integer $AsrLatency) 设置<p>asr时延（毫秒）</p><p>-1 表示无 asr时延</p>
 * @method integer getLLMFirstTokenLatency() 获取<p>llm首token时延(毫秒)</p>
 * @method void setLLMFirstTokenLatency(integer $LLMFirstTokenLatency) 设置<p>llm首token时延(毫秒)</p>
 * @method integer getTTSLatency() 获取<p>tts时延（毫秒）</p><p>-1 表示无 tts时延</p>
 * @method void setTTSLatency(integer $TTSLatency) 设置<p>tts时延（毫秒）</p><p>-1 表示无 tts时延</p>
 * @method integer getTotalLatency() 获取<p>总时延</p>
 * @method void setTotalLatency(integer $TotalLatency) 设置<p>总时延</p>
 */
class AICallLatencyMetrics extends AbstractModel
{
    /**
     * @var integer <p>asr时延（毫秒）</p><p>-1 表示无 asr时延</p>
     */
    public $AsrLatency;

    /**
     * @var integer <p>llm首token时延(毫秒)</p>
     */
    public $LLMFirstTokenLatency;

    /**
     * @var integer <p>tts时延（毫秒）</p><p>-1 表示无 tts时延</p>
     */
    public $TTSLatency;

    /**
     * @var integer <p>总时延</p>
     */
    public $TotalLatency;

    /**
     * @param integer $AsrLatency <p>asr时延（毫秒）</p><p>-1 表示无 asr时延</p>
     * @param integer $LLMFirstTokenLatency <p>llm首token时延(毫秒)</p>
     * @param integer $TTSLatency <p>tts时延（毫秒）</p><p>-1 表示无 tts时延</p>
     * @param integer $TotalLatency <p>总时延</p>
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
        if (array_key_exists("AsrLatency",$param) and $param["AsrLatency"] !== null) {
            $this->AsrLatency = $param["AsrLatency"];
        }

        if (array_key_exists("LLMFirstTokenLatency",$param) and $param["LLMFirstTokenLatency"] !== null) {
            $this->LLMFirstTokenLatency = $param["LLMFirstTokenLatency"];
        }

        if (array_key_exists("TTSLatency",$param) and $param["TTSLatency"] !== null) {
            $this->TTSLatency = $param["TTSLatency"];
        }

        if (array_key_exists("TotalLatency",$param) and $param["TotalLatency"] !== null) {
            $this->TotalLatency = $param["TotalLatency"];
        }
    }
}
