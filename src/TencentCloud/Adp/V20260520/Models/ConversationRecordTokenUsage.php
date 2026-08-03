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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单次对话 token 消耗信息
 *
 * @method string getInputTokens() 获取<p>输入 token 总数</p>
 * @method void setInputTokens(string $InputTokens) 设置<p>输入 token 总数</p>
 * @method string getOutputTokens() 获取<p>输出 token 总数</p>
 * @method void setOutputTokens(string $OutputTokens) 设置<p>输出 token 总数</p>
 * @method string getTotalTokens() 获取<p>消耗 token 总数</p>
 * @method void setTotalTokens(string $TotalTokens) 设置<p>消耗 token 总数</p>
 * @method string getCachedTokens() 获取<p>缓存命中 token 总数</p>
 * @method void setCachedTokens(string $CachedTokens) 设置<p>缓存命中 token 总数</p>
 * @method string getReasoningTokens() 获取<p>推理 token 总数</p>
 * @method void setReasoningTokens(string $ReasoningTokens) 设置<p>推理 token 总数</p>
 */
class ConversationRecordTokenUsage extends AbstractModel
{
    /**
     * @var string <p>输入 token 总数</p>
     */
    public $InputTokens;

    /**
     * @var string <p>输出 token 总数</p>
     */
    public $OutputTokens;

    /**
     * @var string <p>消耗 token 总数</p>
     */
    public $TotalTokens;

    /**
     * @var string <p>缓存命中 token 总数</p>
     */
    public $CachedTokens;

    /**
     * @var string <p>推理 token 总数</p>
     */
    public $ReasoningTokens;

    /**
     * @param string $InputTokens <p>输入 token 总数</p>
     * @param string $OutputTokens <p>输出 token 总数</p>
     * @param string $TotalTokens <p>消耗 token 总数</p>
     * @param string $CachedTokens <p>缓存命中 token 总数</p>
     * @param string $ReasoningTokens <p>推理 token 总数</p>
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
        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("CachedTokens",$param) and $param["CachedTokens"] !== null) {
            $this->CachedTokens = $param["CachedTokens"];
        }

        if (array_key_exists("ReasoningTokens",$param) and $param["ReasoningTokens"] !== null) {
            $this->ReasoningTokens = $param["ReasoningTokens"];
        }
    }
}
