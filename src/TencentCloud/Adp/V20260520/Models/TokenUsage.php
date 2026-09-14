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
 * Token 使用统计
 *
 * @method integer getCompletionTokens() 获取<p>completion token 数</p>
 * @method void setCompletionTokens(integer $CompletionTokens) 设置<p>completion token 数</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method integer getPromptTokens() 获取<p>prompt token 数</p>
 * @method void setPromptTokens(integer $PromptTokens) 设置<p>prompt token 数</p>
 * @method integer getTotalTokens() 获取<p>总 token 数</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>总 token 数</p>
 */
class TokenUsage extends AbstractModel
{
    /**
     * @var integer <p>completion token 数</p>
     */
    public $CompletionTokens;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var integer <p>prompt token 数</p>
     */
    public $PromptTokens;

    /**
     * @var integer <p>总 token 数</p>
     */
    public $TotalTokens;

    /**
     * @param integer $CompletionTokens <p>completion token 数</p>
     * @param string $ModelName <p>模型名称</p>
     * @param integer $PromptTokens <p>prompt token 数</p>
     * @param integer $TotalTokens <p>总 token 数</p>
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
        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
