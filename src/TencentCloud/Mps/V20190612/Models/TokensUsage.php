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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * token 的用量
 *
 * @method integer getInputTokens() 获取<p>输入token量</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入token量</p>
 * @method integer getOutputTokens() 获取<p>输出token量</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出token量</p>
 * @method integer getTotalTokens() 获取<p>总token量，一般是输入+输出</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>总token量，一般是输入+输出</p>
 */
class TokensUsage extends AbstractModel
{
    /**
     * @var integer <p>输入token量</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>输出token量</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>总token量，一般是输入+输出</p>
     */
    public $TotalTokens;

    /**
     * @param integer $InputTokens <p>输入token量</p>
     * @param integer $OutputTokens <p>输出token量</p>
     * @param integer $TotalTokens <p>总token量，一般是输入+输出</p>
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
    }
}
