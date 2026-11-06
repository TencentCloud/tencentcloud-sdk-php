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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI对话的LLM参数配置
 *
 * @method string getLLMType() 获取<p>LLM 协议类型，如openai（OpenAI 兼容协议）。</p>
 * @method void setLLMType(string $LLMType) 设置<p>LLM 协议类型，如openai（OpenAI 兼容协议）。</p>
 * @method string getModel() 获取<p>模型名，如 gpt-4o-mini</p>
 * @method void setModel(string $Model) 设置<p>模型名，如 gpt-4o-mini</p>
 * @method string getAPIUrl() 获取<p>OpenAI 协议兼容的 endpoint。</p>
 * @method void setAPIUrl(string $APIUrl) 设置<p>OpenAI 协议兼容的 endpoint。</p>
 * @method string getAPIKey() 获取<p>厂商 API Key。</p>
 * @method void setAPIKey(string $APIKey) 设置<p>厂商 API Key。</p>
 * @method string getSystemPrompt() 获取<p>系统提示词。</p>
 * @method void setSystemPrompt(string $SystemPrompt) 设置<p>系统提示词。</p>
 * @method string getFailureMessage() 获取<p>LLM 调用失败后，使用此文本生成 TTS音频。</p>
 * @method void setFailureMessage(string $FailureMessage) 设置<p>LLM 调用失败后，使用此文本生成 TTS音频。</p>
 * @method integer getMaxTokens() 获取<p>单次回复最大 Token 数，0=不限制，默认值为0。注意：如果模型输出token数量大于设置的MaxTokens的值，会截断回复内容。</p>
 * @method void setMaxTokens(integer $MaxTokens) 设置<p>单次回复最大 Token 数，0=不限制，默认值为0。注意：如果模型输出token数量大于设置的MaxTokens的值，会截断回复内容。</p>
 * @method boolean getThinkingMode() 获取<p>是否开启思考模式（需结合提供厂商具体使用）。注意：开启思考模式会占用输出token数。</p>
 * @method void setThinkingMode(boolean $ThinkingMode) 设置<p>是否开启思考模式（需结合提供厂商具体使用）。注意：开启思考模式会占用输出token数。</p>
 * @method integer getMaxHistory() 获取<p>LLM 中缓存的对话轮次数量，范围 0~50。建议值[10, 30]。注意：指定轮次上下文的总 token 数不能超过 LLM 支持的上限。</p>
 * @method void setMaxHistory(integer $MaxHistory) 设置<p>LLM 中缓存的对话轮次数量，范围 0~50。建议值[10, 30]。注意：指定轮次上下文的总 token 数不能超过 LLM 支持的上限。</p>
 * @method integer getMaxToolRound() 获取<p>MCP 工具调用最大轮次，范围 0~50，默认 10。</p>
 * @method void setMaxToolRound(integer $MaxToolRound) 设置<p>MCP 工具调用最大轮次，范围 0~50，默认 10。</p>
 * @method integer getTimeout() 获取<p>单次请求的超时事件（毫秒），范围 1000~60000，默认 10000。</p><p>单位：毫秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>单次请求的超时事件（毫秒），范围 1000~60000，默认 10000。</p><p>单位：毫秒</p>
 * @method float getTemperature() 获取<p>采样温度，范围 0.0~2.0，默认 1.0。</p>
 * @method void setTemperature(float $Temperature) 设置<p>采样温度，范围 0.0~2.0，默认 1.0。</p>
 * @method float getTopP() 获取<p>采样概率，范围 0.0~1.0，默认 1.0。</p>
 * @method void setTopP(float $TopP) 设置<p>采样概率，范围 0.0~1.0，默认 1.0。</p>
 * @method VoiceConversationMcpServer getMcpServer() 获取<p>Mcp Server参数。</p>
 * @method void setMcpServer(VoiceConversationMcpServer $McpServer) 设置<p>Mcp Server参数。</p>
 * @method array getCustomHeaders() 获取<p>自定义 HTTP 请求头。</p>
 * @method void setCustomHeaders(array $CustomHeaders) 设置<p>自定义 HTTP 请求头。</p>
 * @method array getCustomFields() 获取<p>各厂商独有的扩展参数（如 DeepSeek 的<code>reasoning_effort</code>、混元的 <code>enable_enhancement</code> 等）。</p>
 * @method void setCustomFields(array $CustomFields) 设置<p>各厂商独有的扩展参数（如 DeepSeek 的<code>reasoning_effort</code>、混元的 <code>enable_enhancement</code> 等）。</p>
 * @method array getHistoryMessages() 获取<p>初始历史消息，每项为 <code>{&quot;Role&quot;: &quot;user&quot;/&quot;assistant&quot;/&quot;system&quot;, &quot;Content&quot;: &quot;xxx&quot;}</code>这种格式。</p>
 * @method void setHistoryMessages(array $HistoryMessages) 设置<p>初始历史消息，每项为 <code>{&quot;Role&quot;: &quot;user&quot;/&quot;assistant&quot;/&quot;system&quot;, &quot;Content&quot;: &quot;xxx&quot;}</code>这种格式。</p>
 */
class VoiceConversationLLMConfig extends AbstractModel
{
    /**
     * @var string <p>LLM 协议类型，如openai（OpenAI 兼容协议）。</p>
     */
    public $LLMType;

    /**
     * @var string <p>模型名，如 gpt-4o-mini</p>
     */
    public $Model;

    /**
     * @var string <p>OpenAI 协议兼容的 endpoint。</p>
     */
    public $APIUrl;

    /**
     * @var string <p>厂商 API Key。</p>
     */
    public $APIKey;

    /**
     * @var string <p>系统提示词。</p>
     */
    public $SystemPrompt;

    /**
     * @var string <p>LLM 调用失败后，使用此文本生成 TTS音频。</p>
     */
    public $FailureMessage;

    /**
     * @var integer <p>单次回复最大 Token 数，0=不限制，默认值为0。注意：如果模型输出token数量大于设置的MaxTokens的值，会截断回复内容。</p>
     */
    public $MaxTokens;

    /**
     * @var boolean <p>是否开启思考模式（需结合提供厂商具体使用）。注意：开启思考模式会占用输出token数。</p>
     */
    public $ThinkingMode;

    /**
     * @var integer <p>LLM 中缓存的对话轮次数量，范围 0~50。建议值[10, 30]。注意：指定轮次上下文的总 token 数不能超过 LLM 支持的上限。</p>
     */
    public $MaxHistory;

    /**
     * @var integer <p>MCP 工具调用最大轮次，范围 0~50，默认 10。</p>
     */
    public $MaxToolRound;

    /**
     * @var integer <p>单次请求的超时事件（毫秒），范围 1000~60000，默认 10000。</p><p>单位：毫秒</p>
     */
    public $Timeout;

    /**
     * @var float <p>采样温度，范围 0.0~2.0，默认 1.0。</p>
     */
    public $Temperature;

    /**
     * @var float <p>采样概率，范围 0.0~1.0，默认 1.0。</p>
     */
    public $TopP;

    /**
     * @var VoiceConversationMcpServer <p>Mcp Server参数。</p>
     */
    public $McpServer;

    /**
     * @var array <p>自定义 HTTP 请求头。</p>
     */
    public $CustomHeaders;

    /**
     * @var array <p>各厂商独有的扩展参数（如 DeepSeek 的<code>reasoning_effort</code>、混元的 <code>enable_enhancement</code> 等）。</p>
     */
    public $CustomFields;

    /**
     * @var array <p>初始历史消息，每项为 <code>{&quot;Role&quot;: &quot;user&quot;/&quot;assistant&quot;/&quot;system&quot;, &quot;Content&quot;: &quot;xxx&quot;}</code>这种格式。</p>
     */
    public $HistoryMessages;

    /**
     * @param string $LLMType <p>LLM 协议类型，如openai（OpenAI 兼容协议）。</p>
     * @param string $Model <p>模型名，如 gpt-4o-mini</p>
     * @param string $APIUrl <p>OpenAI 协议兼容的 endpoint。</p>
     * @param string $APIKey <p>厂商 API Key。</p>
     * @param string $SystemPrompt <p>系统提示词。</p>
     * @param string $FailureMessage <p>LLM 调用失败后，使用此文本生成 TTS音频。</p>
     * @param integer $MaxTokens <p>单次回复最大 Token 数，0=不限制，默认值为0。注意：如果模型输出token数量大于设置的MaxTokens的值，会截断回复内容。</p>
     * @param boolean $ThinkingMode <p>是否开启思考模式（需结合提供厂商具体使用）。注意：开启思考模式会占用输出token数。</p>
     * @param integer $MaxHistory <p>LLM 中缓存的对话轮次数量，范围 0~50。建议值[10, 30]。注意：指定轮次上下文的总 token 数不能超过 LLM 支持的上限。</p>
     * @param integer $MaxToolRound <p>MCP 工具调用最大轮次，范围 0~50，默认 10。</p>
     * @param integer $Timeout <p>单次请求的超时事件（毫秒），范围 1000~60000，默认 10000。</p><p>单位：毫秒</p>
     * @param float $Temperature <p>采样温度，范围 0.0~2.0，默认 1.0。</p>
     * @param float $TopP <p>采样概率，范围 0.0~1.0，默认 1.0。</p>
     * @param VoiceConversationMcpServer $McpServer <p>Mcp Server参数。</p>
     * @param array $CustomHeaders <p>自定义 HTTP 请求头。</p>
     * @param array $CustomFields <p>各厂商独有的扩展参数（如 DeepSeek 的<code>reasoning_effort</code>、混元的 <code>enable_enhancement</code> 等）。</p>
     * @param array $HistoryMessages <p>初始历史消息，每项为 <code>{&quot;Role&quot;: &quot;user&quot;/&quot;assistant&quot;/&quot;system&quot;, &quot;Content&quot;: &quot;xxx&quot;}</code>这种格式。</p>
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
        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("APIUrl",$param) and $param["APIUrl"] !== null) {
            $this->APIUrl = $param["APIUrl"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("FailureMessage",$param) and $param["FailureMessage"] !== null) {
            $this->FailureMessage = $param["FailureMessage"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("ThinkingMode",$param) and $param["ThinkingMode"] !== null) {
            $this->ThinkingMode = $param["ThinkingMode"];
        }

        if (array_key_exists("MaxHistory",$param) and $param["MaxHistory"] !== null) {
            $this->MaxHistory = $param["MaxHistory"];
        }

        if (array_key_exists("MaxToolRound",$param) and $param["MaxToolRound"] !== null) {
            $this->MaxToolRound = $param["MaxToolRound"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("McpServer",$param) and $param["McpServer"] !== null) {
            $this->McpServer = new VoiceConversationMcpServer();
            $this->McpServer->deserialize($param["McpServer"]);
        }

        if (array_key_exists("CustomHeaders",$param) and $param["CustomHeaders"] !== null) {
            $this->CustomHeaders = [];
            foreach ($param["CustomHeaders"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->CustomHeaders, $obj);
            }
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("HistoryMessages",$param) and $param["HistoryMessages"] !== null) {
            $this->HistoryMessages = [];
            foreach ($param["HistoryMessages"] as $key => $value){
                $obj = new VoiceConversationHistoryMessage();
                $obj->deserialize($value);
                array_push($this->HistoryMessages, $obj);
            }
        }
    }
}
