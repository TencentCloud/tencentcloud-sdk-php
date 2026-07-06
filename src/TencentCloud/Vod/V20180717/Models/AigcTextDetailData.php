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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aigc生文明细数据
 *
 * @method string getTimestamp() 获取<p>请求开始时间(RFC3339)</p>
 * @method void setTimestamp(string $Timestamp) 设置<p>请求开始时间(RFC3339)</p>
 * @method string getReqId() 获取<p>网关层请求 ID</p>
 * @method void setReqId(string $ReqId) 设置<p>网关层请求 ID</p>
 * @method string getChatId() 获取<p>后端模型返回的对话 ID</p>
 * @method void setChatId(string $ChatId) 设置<p>后端模型返回的对话 ID</p>
 * @method integer getStatusCode() 获取<p>返回给客户端的 HTTP 状态码</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>返回给客户端的 HTTP 状态码</p>
 * @method string getModel() 获取<p>模型名</p>
 * @method void setModel(string $Model) 设置<p>模型名</p>
 * @method integer getSubAppId() 获取<p>应用ID</p>
 * @method void setSubAppId(integer $SubAppId) 设置<p>应用ID</p>
 * @method string getApiKey() 获取<p>脱敏后的 api_key:前 8 位 + ****(长度 ≤ 8 时原样返回)</p>
 * @method void setApiKey(string $ApiKey) 设置<p>脱敏后的 api_key:前 8 位 + ****(长度 ≤ 8 时原样返回)</p>
 * @method boolean getStream() 获取<p>是否流式返回</p>
 * @method void setStream(boolean $Stream) 设置<p>是否流式返回</p>
 * @method integer getInputTokens() 获取<p>输入 token 数</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入 token 数</p>
 * @method integer getOutputTokens() 获取<p>输出 token 数</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出 token 数</p>
 * @method integer getCacheInputTokens() 获取<p>命中 prompt 缓存的 token 数</p>
 * @method void setCacheInputTokens(integer $CacheInputTokens) 设置<p>命中 prompt 缓存的 token 数</p>
 * @method integer getTotalTokens() 获取<p>总 token 数</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>总 token 数</p>
 * @method float getTPS() 获取<p>生成阶段的tokens/秒</p>
 * @method void setTPS(float $TPS) 设置<p>生成阶段的tokens/秒</p>
 * @method float getTTFT() 获取<p>首字延迟(Time To First Token)</p><p>单位：秒</p>
 * @method void setTTFT(float $TTFT) 设置<p>首字延迟(Time To First Token)</p><p>单位：秒</p>
 * @method float getTotal() 获取<p>端到端总耗时</p><p>单位：秒</p>
 * @method void setTotal(float $Total) 设置<p>端到端总耗时</p><p>单位：秒</p>
 * @method string getApiType() 获取<p>入口协议:completions / responses / anthropic</p>
 * @method void setApiType(string $ApiType) 设置<p>入口协议:completions / responses / anthropic</p>
 */
class AigcTextDetailData extends AbstractModel
{
    /**
     * @var string <p>请求开始时间(RFC3339)</p>
     */
    public $Timestamp;

    /**
     * @var string <p>网关层请求 ID</p>
     */
    public $ReqId;

    /**
     * @var string <p>后端模型返回的对话 ID</p>
     */
    public $ChatId;

    /**
     * @var integer <p>返回给客户端的 HTTP 状态码</p>
     */
    public $StatusCode;

    /**
     * @var string <p>模型名</p>
     */
    public $Model;

    /**
     * @var integer <p>应用ID</p>
     */
    public $SubAppId;

    /**
     * @var string <p>脱敏后的 api_key:前 8 位 + ****(长度 ≤ 8 时原样返回)</p>
     */
    public $ApiKey;

    /**
     * @var boolean <p>是否流式返回</p>
     */
    public $Stream;

    /**
     * @var integer <p>输入 token 数</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>输出 token 数</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>命中 prompt 缓存的 token 数</p>
     */
    public $CacheInputTokens;

    /**
     * @var integer <p>总 token 数</p>
     */
    public $TotalTokens;

    /**
     * @var float <p>生成阶段的tokens/秒</p>
     */
    public $TPS;

    /**
     * @var float <p>首字延迟(Time To First Token)</p><p>单位：秒</p>
     */
    public $TTFT;

    /**
     * @var float <p>端到端总耗时</p><p>单位：秒</p>
     */
    public $Total;

    /**
     * @var string <p>入口协议:completions / responses / anthropic</p>
     */
    public $ApiType;

    /**
     * @param string $Timestamp <p>请求开始时间(RFC3339)</p>
     * @param string $ReqId <p>网关层请求 ID</p>
     * @param string $ChatId <p>后端模型返回的对话 ID</p>
     * @param integer $StatusCode <p>返回给客户端的 HTTP 状态码</p>
     * @param string $Model <p>模型名</p>
     * @param integer $SubAppId <p>应用ID</p>
     * @param string $ApiKey <p>脱敏后的 api_key:前 8 位 + ****(长度 ≤ 8 时原样返回)</p>
     * @param boolean $Stream <p>是否流式返回</p>
     * @param integer $InputTokens <p>输入 token 数</p>
     * @param integer $OutputTokens <p>输出 token 数</p>
     * @param integer $CacheInputTokens <p>命中 prompt 缓存的 token 数</p>
     * @param integer $TotalTokens <p>总 token 数</p>
     * @param float $TPS <p>生成阶段的tokens/秒</p>
     * @param float $TTFT <p>首字延迟(Time To First Token)</p><p>单位：秒</p>
     * @param float $Total <p>端到端总耗时</p><p>单位：秒</p>
     * @param string $ApiType <p>入口协议:completions / responses / anthropic</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("CacheInputTokens",$param) and $param["CacheInputTokens"] !== null) {
            $this->CacheInputTokens = $param["CacheInputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("TPS",$param) and $param["TPS"] !== null) {
            $this->TPS = $param["TPS"];
        }

        if (array_key_exists("TTFT",$param) and $param["TTFT"] !== null) {
            $this->TTFT = $param["TTFT"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }
    }
}
