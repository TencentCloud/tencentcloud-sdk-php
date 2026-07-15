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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关日志输出配置
 *
 * @method boolean getEnableRequestLogPayloads() 获取<p>是否开启请求 payload 记录日志</p>
 * @method void setEnableRequestLogPayloads(boolean $EnableRequestLogPayloads) 设置<p>是否开启请求 payload 记录日志</p>
 * @method boolean getEnableResponseLogPayloads() 获取<p>是否开启响应 payload 记录日志</p>
 * @method void setEnableResponseLogPayloads(boolean $EnableResponseLogPayloads) 设置<p>是否开启响应 payload 记录日志</p>
 * @method integer getRequestLogPayloadMaxSize() 获取<p>日志记录的请求body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableRequestLogPayloads 为true时必填</p>
 * @method void setRequestLogPayloadMaxSize(integer $RequestLogPayloadMaxSize) 设置<p>日志记录的请求body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableRequestLogPayloads 为true时必填</p>
 * @method integer getResponseLogPayloadMaxSize() 获取<p>日志记录的响应body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableResponseLogPayloads 为true时必填</p>
 * @method void setResponseLogPayloadMaxSize(integer $ResponseLogPayloadMaxSize) 设置<p>日志记录的响应body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableResponseLogPayloads 为true时必填</p>
 * @method string getRequestLogPayloadMode() 获取<p>请求 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始请求</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
 * @method void setRequestLogPayloadMode(string $RequestLogPayloadMode) 设置<p>请求 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始请求</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
 * @method string getResponseLogPayloadMode() 获取<p>上游原始 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始上游响应</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
 * @method void setResponseLogPayloadMode(string $ResponseLogPayloadMode) 设置<p>上游原始 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始上游响应</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
 */
class AIGWLogConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启请求 payload 记录日志</p>
     */
    public $EnableRequestLogPayloads;

    /**
     * @var boolean <p>是否开启响应 payload 记录日志</p>
     */
    public $EnableResponseLogPayloads;

    /**
     * @var integer <p>日志记录的请求body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableRequestLogPayloads 为true时必填</p>
     */
    public $RequestLogPayloadMaxSize;

    /**
     * @var integer <p>日志记录的响应body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableResponseLogPayloads 为true时必填</p>
     */
    public $ResponseLogPayloadMaxSize;

    /**
     * @var string <p>请求 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始请求</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
     */
    public $RequestLogPayloadMode;

    /**
     * @var string <p>上游原始 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始上游响应</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
     */
    public $ResponseLogPayloadMode;

    /**
     * @param boolean $EnableRequestLogPayloads <p>是否开启请求 payload 记录日志</p>
     * @param boolean $EnableResponseLogPayloads <p>是否开启响应 payload 记录日志</p>
     * @param integer $RequestLogPayloadMaxSize <p>日志记录的请求body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableRequestLogPayloads 为true时必填</p>
     * @param integer $ResponseLogPayloadMaxSize <p>日志记录的响应body的最大字节数</p><p>取值范围：[512, 1048576]</p><p>EnableResponseLogPayloads 为true时必填</p>
     * @param string $RequestLogPayloadMode <p>请求 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始请求</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
     * @param string $ResponseLogPayloadMode <p>上游原始 payload access log 输出模式</p><p>枚举值：</p><ul><li>raw： access log 中 body 记录客户端原始上游响应</li><li>processed： access log 中 body 记录 AI 网关协议适配、改写、归一化后的 OpenAI-compatible 内容</li></ul>
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
        if (array_key_exists("EnableRequestLogPayloads",$param) and $param["EnableRequestLogPayloads"] !== null) {
            $this->EnableRequestLogPayloads = $param["EnableRequestLogPayloads"];
        }

        if (array_key_exists("EnableResponseLogPayloads",$param) and $param["EnableResponseLogPayloads"] !== null) {
            $this->EnableResponseLogPayloads = $param["EnableResponseLogPayloads"];
        }

        if (array_key_exists("RequestLogPayloadMaxSize",$param) and $param["RequestLogPayloadMaxSize"] !== null) {
            $this->RequestLogPayloadMaxSize = $param["RequestLogPayloadMaxSize"];
        }

        if (array_key_exists("ResponseLogPayloadMaxSize",$param) and $param["ResponseLogPayloadMaxSize"] !== null) {
            $this->ResponseLogPayloadMaxSize = $param["ResponseLogPayloadMaxSize"];
        }

        if (array_key_exists("RequestLogPayloadMode",$param) and $param["RequestLogPayloadMode"] !== null) {
            $this->RequestLogPayloadMode = $param["RequestLogPayloadMode"];
        }

        if (array_key_exists("ResponseLogPayloadMode",$param) and $param["ResponseLogPayloadMode"] !== null) {
            $this->ResponseLogPayloadMode = $param["ResponseLogPayloadMode"];
        }
    }
}
