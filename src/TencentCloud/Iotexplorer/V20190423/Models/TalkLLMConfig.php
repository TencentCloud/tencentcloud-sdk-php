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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型配置。基础对话必填；如使用平台默认能力，请显式设置 Type=default。
 *
 * @method string getType() 获取<p>LLM类型：default-平台默认；openai-OpenAI兼容模型</p>
 * @method void setType(string $Type) 设置<p>LLM类型：default-平台默认；openai-OpenAI兼容模型</p>
 * @method string getSystemPrompt() 获取<p>系统提示词</p>
 * @method void setSystemPrompt(string $SystemPrompt) 设置<p>系统提示词</p>
 * @method float getTemperature() 获取<p>采样温度，建议范围0-2</p>
 * @method void setTemperature(float $Temperature) 设置<p>采样温度，建议范围0-2</p>
 * @method integer getHistory() 获取<p>上下文历史轮数，建议范围0-50</p>
 * @method void setHistory(integer $History) 设置<p>上下文历史轮数，建议范围0-50</p>
 * @method integer getTimeout() 获取<p>超时时间，秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，秒</p>
 * @method string getBaseUrl() 获取<p>OpenAI兼容模型Base URL，仅支持 80 和 443 端口，Type=openai时必填</p>
 * @method void setBaseUrl(string $BaseUrl) 设置<p>OpenAI兼容模型Base URL，仅支持 80 和 443 端口，Type=openai时必填</p>
 * @method string getModel() 获取<p>模型名称，Type=openai时必填</p>
 * @method void setModel(string $Model) 设置<p>模型名称，Type=openai时必填</p>
 * @method string getApiKey() 获取<p>模型API Key，Type=openai时必填</p>
 * @method void setApiKey(string $ApiKey) 设置<p>模型API Key，Type=openai时必填</p>
 * @method string getExtraBody() 获取<p>额外模型请求体参数，JSON对象字符串，只允许JSON object，不允许普通字符串</p>
 * @method void setExtraBody(string $ExtraBody) 设置<p>额外模型请求体参数，JSON对象字符串，只允许JSON object，不允许普通字符串</p>
 */
class TalkLLMConfig extends AbstractModel
{
    /**
     * @var string <p>LLM类型：default-平台默认；openai-OpenAI兼容模型</p>
     */
    public $Type;

    /**
     * @var string <p>系统提示词</p>
     */
    public $SystemPrompt;

    /**
     * @var float <p>采样温度，建议范围0-2</p>
     */
    public $Temperature;

    /**
     * @var integer <p>上下文历史轮数，建议范围0-50</p>
     */
    public $History;

    /**
     * @var integer <p>超时时间，秒</p>
     */
    public $Timeout;

    /**
     * @var string <p>OpenAI兼容模型Base URL，仅支持 80 和 443 端口，Type=openai时必填</p>
     */
    public $BaseUrl;

    /**
     * @var string <p>模型名称，Type=openai时必填</p>
     */
    public $Model;

    /**
     * @var string <p>模型API Key，Type=openai时必填</p>
     */
    public $ApiKey;

    /**
     * @var string <p>额外模型请求体参数，JSON对象字符串，只允许JSON object，不允许普通字符串</p>
     */
    public $ExtraBody;

    /**
     * @param string $Type <p>LLM类型：default-平台默认；openai-OpenAI兼容模型</p>
     * @param string $SystemPrompt <p>系统提示词</p>
     * @param float $Temperature <p>采样温度，建议范围0-2</p>
     * @param integer $History <p>上下文历史轮数，建议范围0-50</p>
     * @param integer $Timeout <p>超时时间，秒</p>
     * @param string $BaseUrl <p>OpenAI兼容模型Base URL，仅支持 80 和 443 端口，Type=openai时必填</p>
     * @param string $Model <p>模型名称，Type=openai时必填</p>
     * @param string $ApiKey <p>模型API Key，Type=openai时必填</p>
     * @param string $ExtraBody <p>额外模型请求体参数，JSON对象字符串，只允许JSON object，不允许普通字符串</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = $param["History"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("ExtraBody",$param) and $param["ExtraBody"] !== null) {
            $this->ExtraBody = $param["ExtraBody"];
        }
    }
}
