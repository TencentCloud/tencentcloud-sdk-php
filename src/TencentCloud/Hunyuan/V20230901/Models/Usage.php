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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token 数量
 *
 * @method integer getPromptTokens() 获取输入 Token 数量。
 * @method void setPromptTokens(integer $PromptTokens) 设置输入 Token 数量。
 * @method integer getCompletionTokens() 获取输出 Token 数量。
 * @method void setCompletionTokens(integer $CompletionTokens) 设置输出 Token 数量。
 * @method integer getTotalTokens() 获取总 Token 数量。
 * @method void setTotalTokens(integer $TotalTokens) 设置总 Token 数量。
 * @method PromptTokensDetails getPromptTokensDetails() 获取输入 token 的详情。
 * @method void setPromptTokensDetails(PromptTokensDetails $PromptTokensDetails) 设置输入 token 的详情。
 */
class Usage extends AbstractModel
{
    /**
     * @var integer 输入 Token 数量。
     */
    public $PromptTokens;

    /**
     * @var integer 输出 Token 数量。
     */
    public $CompletionTokens;

    /**
     * @var integer 总 Token 数量。
     */
    public $TotalTokens;

    /**
     * @var PromptTokensDetails 输入 token 的详情。
     */
    public $PromptTokensDetails;

    /**
     * @param integer $PromptTokens 输入 Token 数量。
     * @param integer $CompletionTokens 输出 Token 数量。
     * @param integer $TotalTokens 总 Token 数量。
     * @param PromptTokensDetails $PromptTokensDetails 输入 token 的详情。
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

        if (array_key_exists("PromptTokensDetails",$param) and $param["PromptTokensDetails"] !== null) {
            $this->PromptTokensDetails = new PromptTokensDetails();
            $this->PromptTokensDetails->deserialize($param["PromptTokensDetails"]);
        }
    }
}
