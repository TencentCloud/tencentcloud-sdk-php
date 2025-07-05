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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * token使用量
 *
 * @method integer getPromptTokens() 获取表示prompt的tokens数，多次返回中保持不变
 * @method void setPromptTokens(integer $PromptTokens) 设置表示prompt的tokens数，多次返回中保持不变
 * @method integer getCompletionTokens() 获取回答的token总数，在流式返回中，表示到目前为止所有completion的tokens总数，多次返回中持续累加        
 * @method void setCompletionTokens(integer $CompletionTokens) 设置回答的token总数，在流式返回中，表示到目前为止所有completion的tokens总数，多次返回中持续累加        
 * @method integer getTotalTokens() 获取表示prompt_tokens和completion_tokens之和 
 * @method void setTotalTokens(integer $TotalTokens) 设置表示prompt_tokens和completion_tokens之和 
 */
class TokenUsage extends AbstractModel
{
    /**
     * @var integer 表示prompt的tokens数，多次返回中保持不变
     */
    public $PromptTokens;

    /**
     * @var integer 回答的token总数，在流式返回中，表示到目前为止所有completion的tokens总数，多次返回中持续累加        
     */
    public $CompletionTokens;

    /**
     * @var integer 表示prompt_tokens和completion_tokens之和 
     */
    public $TotalTokens;

    /**
     * @param integer $PromptTokens 表示prompt的tokens数，多次返回中保持不变
     * @param integer $CompletionTokens 回答的token总数，在流式返回中，表示到目前为止所有completion的tokens总数，多次返回中持续累加        
     * @param integer $TotalTokens 表示prompt_tokens和completion_tokens之和 
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
        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
