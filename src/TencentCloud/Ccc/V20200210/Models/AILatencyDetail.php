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
 * AI时延明细
 *
 * @method string getRoundId() 获取对话ID
 * @method void setRoundId(string $RoundId) 设置对话ID
 * @method integer getASRLatency() 获取asr时延（毫秒）
 * @method void setASRLatency(integer $ASRLatency) 设置asr时延（毫秒）
 * @method integer getTTSLatency() 获取tts时延（毫秒）
 * @method void setTTSLatency(integer $TTSLatency) 设置tts时延（毫秒）
 * @method integer getLLMLatency() 获取llm时延（毫秒）
 * @method void setLLMLatency(integer $LLMLatency) 设置llm时延（毫秒）
 * @method integer getLLMFirstTokenLatency() 获取llm首token时延(毫秒)
 * @method void setLLMFirstTokenLatency(integer $LLMFirstTokenLatency) 设置llm首token时延(毫秒)
 * @method integer getETELatency() 获取端到端时延（毫秒）
 * @method void setETELatency(integer $ETELatency) 设置端到端时延（毫秒）
 */
class AILatencyDetail extends AbstractModel
{
    /**
     * @var string 对话ID
     */
    public $RoundId;

    /**
     * @var integer asr时延（毫秒）
     */
    public $ASRLatency;

    /**
     * @var integer tts时延（毫秒）
     */
    public $TTSLatency;

    /**
     * @var integer llm时延（毫秒）
     */
    public $LLMLatency;

    /**
     * @var integer llm首token时延(毫秒)
     */
    public $LLMFirstTokenLatency;

    /**
     * @var integer 端到端时延（毫秒）
     */
    public $ETELatency;

    /**
     * @param string $RoundId 对话ID
     * @param integer $ASRLatency asr时延（毫秒）
     * @param integer $TTSLatency tts时延（毫秒）
     * @param integer $LLMLatency llm时延（毫秒）
     * @param integer $LLMFirstTokenLatency llm首token时延(毫秒)
     * @param integer $ETELatency 端到端时延（毫秒）
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
        if (array_key_exists("RoundId",$param) and $param["RoundId"] !== null) {
            $this->RoundId = $param["RoundId"];
        }

        if (array_key_exists("ASRLatency",$param) and $param["ASRLatency"] !== null) {
            $this->ASRLatency = $param["ASRLatency"];
        }

        if (array_key_exists("TTSLatency",$param) and $param["TTSLatency"] !== null) {
            $this->TTSLatency = $param["TTSLatency"];
        }

        if (array_key_exists("LLMLatency",$param) and $param["LLMLatency"] !== null) {
            $this->LLMLatency = $param["LLMLatency"];
        }

        if (array_key_exists("LLMFirstTokenLatency",$param) and $param["LLMFirstTokenLatency"] !== null) {
            $this->LLMFirstTokenLatency = $param["LLMFirstTokenLatency"];
        }

        if (array_key_exists("ETELatency",$param) and $param["ETELatency"] !== null) {
            $this->ETELatency = $param["ETELatency"];
        }
    }
}
