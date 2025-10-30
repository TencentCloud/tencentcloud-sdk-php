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
 * AI时延统计
 *
 * @method AILatencyStatisticsInfo getASRLatency() 获取asr时延统计
 * @method void setASRLatency(AILatencyStatisticsInfo $ASRLatency) 设置asr时延统计
 * @method AILatencyStatisticsInfo getTTSLatency() 获取tts时延统计
 * @method void setTTSLatency(AILatencyStatisticsInfo $TTSLatency) 设置tts时延统计
 * @method AILatencyStatisticsInfo getLLMLatency() 获取llm时延统计
 * @method void setLLMLatency(AILatencyStatisticsInfo $LLMLatency) 设置llm时延统计
 * @method AILatencyStatisticsInfo getETELatency() 获取端到端时延统计
 * @method void setETELatency(AILatencyStatisticsInfo $ETELatency) 设置端到端时延统计
 */
class AILatencyStatistics extends AbstractModel
{
    /**
     * @var AILatencyStatisticsInfo asr时延统计
     */
    public $ASRLatency;

    /**
     * @var AILatencyStatisticsInfo tts时延统计
     */
    public $TTSLatency;

    /**
     * @var AILatencyStatisticsInfo llm时延统计
     */
    public $LLMLatency;

    /**
     * @var AILatencyStatisticsInfo 端到端时延统计
     */
    public $ETELatency;

    /**
     * @param AILatencyStatisticsInfo $ASRLatency asr时延统计
     * @param AILatencyStatisticsInfo $TTSLatency tts时延统计
     * @param AILatencyStatisticsInfo $LLMLatency llm时延统计
     * @param AILatencyStatisticsInfo $ETELatency 端到端时延统计
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
        if (array_key_exists("ASRLatency",$param) and $param["ASRLatency"] !== null) {
            $this->ASRLatency = new AILatencyStatisticsInfo();
            $this->ASRLatency->deserialize($param["ASRLatency"]);
        }

        if (array_key_exists("TTSLatency",$param) and $param["TTSLatency"] !== null) {
            $this->TTSLatency = new AILatencyStatisticsInfo();
            $this->TTSLatency->deserialize($param["TTSLatency"]);
        }

        if (array_key_exists("LLMLatency",$param) and $param["LLMLatency"] !== null) {
            $this->LLMLatency = new AILatencyStatisticsInfo();
            $this->LLMLatency->deserialize($param["LLMLatency"]);
        }

        if (array_key_exists("ETELatency",$param) and $param["ETELatency"] !== null) {
            $this->ETELatency = new AILatencyStatisticsInfo();
            $this->ETELatency->deserialize($param["ETELatency"]);
        }
    }
}
