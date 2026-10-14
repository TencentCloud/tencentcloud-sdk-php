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
 * <p>模型限制信息</p>
 *
 * @method string getContextLengthDescription() 获取<p>模型上下文长度展示文案（如 128K、1000K）</p>
 * @method void setContextLengthDescription(string $ContextLengthDescription) 设置<p>模型上下文长度展示文案（如 128K、1000K）</p>
 * @method integer getInputLengthLimit() 获取<p>模型对话框输入长度字符数限制</p>
 * @method void setInputLengthLimit(integer $InputLengthLimit) 设置<p>模型对话框输入长度字符数限制</p>
 * @method string getMaxInputTokensDescription() 获取<p>最大输入 Tokens 展示文案（如 960k，服务端格式化，未配置为空串）</p>
 * @method void setMaxInputTokensDescription(string $MaxInputTokensDescription) 设置<p>最大输入 Tokens 展示文案（如 960k，服务端格式化，未配置为空串）</p>
 * @method string getMaxOutputTokensDescription() 获取<p>最大输出 Tokens 展示文案（如 64k，服务端格式化，未配置为空串）</p>
 * @method void setMaxOutputTokensDescription(string $MaxOutputTokensDescription) 设置<p>最大输出 Tokens 展示文案（如 64k，服务端格式化，未配置为空串）</p>
 * @method integer getPromptLengthLimit() 获取<p>模型提示词长度字符数限制</p>
 * @method void setPromptLengthLimit(integer $PromptLengthLimit) 设置<p>模型提示词长度字符数限制</p>
 */
class ModelLimit extends AbstractModel
{
    /**
     * @var string <p>模型上下文长度展示文案（如 128K、1000K）</p>
     */
    public $ContextLengthDescription;

    /**
     * @var integer <p>模型对话框输入长度字符数限制</p>
     */
    public $InputLengthLimit;

    /**
     * @var string <p>最大输入 Tokens 展示文案（如 960k，服务端格式化，未配置为空串）</p>
     */
    public $MaxInputTokensDescription;

    /**
     * @var string <p>最大输出 Tokens 展示文案（如 64k，服务端格式化，未配置为空串）</p>
     */
    public $MaxOutputTokensDescription;

    /**
     * @var integer <p>模型提示词长度字符数限制</p>
     */
    public $PromptLengthLimit;

    /**
     * @param string $ContextLengthDescription <p>模型上下文长度展示文案（如 128K、1000K）</p>
     * @param integer $InputLengthLimit <p>模型对话框输入长度字符数限制</p>
     * @param string $MaxInputTokensDescription <p>最大输入 Tokens 展示文案（如 960k，服务端格式化，未配置为空串）</p>
     * @param string $MaxOutputTokensDescription <p>最大输出 Tokens 展示文案（如 64k，服务端格式化，未配置为空串）</p>
     * @param integer $PromptLengthLimit <p>模型提示词长度字符数限制</p>
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
        if (array_key_exists("ContextLengthDescription",$param) and $param["ContextLengthDescription"] !== null) {
            $this->ContextLengthDescription = $param["ContextLengthDescription"];
        }

        if (array_key_exists("InputLengthLimit",$param) and $param["InputLengthLimit"] !== null) {
            $this->InputLengthLimit = $param["InputLengthLimit"];
        }

        if (array_key_exists("MaxInputTokensDescription",$param) and $param["MaxInputTokensDescription"] !== null) {
            $this->MaxInputTokensDescription = $param["MaxInputTokensDescription"];
        }

        if (array_key_exists("MaxOutputTokensDescription",$param) and $param["MaxOutputTokensDescription"] !== null) {
            $this->MaxOutputTokensDescription = $param["MaxOutputTokensDescription"];
        }

        if (array_key_exists("PromptLengthLimit",$param) and $param["PromptLengthLimit"] !== null) {
            $this->PromptLengthLimit = $param["PromptLengthLimit"];
        }
    }
}
