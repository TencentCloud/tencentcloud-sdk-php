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
 * 模型限制信息
 *
 * @method string getContextLengthDescription() 获取模型上下文长度展示文案（如 "128K"、"1000K"）
 * @method void setContextLengthDescription(string $ContextLengthDescription) 设置模型上下文长度展示文案（如 "128K"、"1000K"）
 * @method integer getInputLengthLimit() 获取模型对话框输入长度字符数限制
 * @method void setInputLengthLimit(integer $InputLengthLimit) 设置模型对话框输入长度字符数限制
 * @method integer getPromptLengthLimit() 获取模型提示词长度字符数限制
 * @method void setPromptLengthLimit(integer $PromptLengthLimit) 设置模型提示词长度字符数限制
 */
class ModelLimit extends AbstractModel
{
    /**
     * @var string 模型上下文长度展示文案（如 "128K"、"1000K"）
     */
    public $ContextLengthDescription;

    /**
     * @var integer 模型对话框输入长度字符数限制
     */
    public $InputLengthLimit;

    /**
     * @var integer 模型提示词长度字符数限制
     */
    public $PromptLengthLimit;

    /**
     * @param string $ContextLengthDescription 模型上下文长度展示文案（如 "128K"、"1000K"）
     * @param integer $InputLengthLimit 模型对话框输入长度字符数限制
     * @param integer $PromptLengthLimit 模型提示词长度字符数限制
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

        if (array_key_exists("PromptLengthLimit",$param) and $param["PromptLengthLimit"] !== null) {
            $this->PromptLengthLimit = $param["PromptLengthLimit"];
        }
    }
}
