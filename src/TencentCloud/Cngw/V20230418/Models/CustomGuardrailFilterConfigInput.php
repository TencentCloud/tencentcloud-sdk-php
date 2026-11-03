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
 * 自定义安全护栏过滤与采样配置
 *
 * @method string getRequestStreamMode() 获取<p>请求方向的流式筛选：all 全部（创建默认）、streaming 流式、non_streaming 非流式。依据请求的流式意图/协议识别；无法可靠判别时保守保留送审资格，不应依赖该字段实现强隔离。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestStreamMode(string $RequestStreamMode) 设置<p>请求方向的流式筛选：all 全部（创建默认）、streaming 流式、non_streaming 非流式。依据请求的流式意图/协议识别；无法可靠判别时保守保留送审资格，不应依赖该字段实现强隔离。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseStreamMode() 获取<p>响应方向的流式筛选：all 全部（创建默认）、streaming 仅流式、non_streaming 仅非流式。开启输出审核并选择 streaming 可用于 SSE 响应审核。此字段不设置窗口大小或分片步长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseStreamMode(string $ResponseStreamMode) 设置<p>响应方向的流式筛选：all 全部（创建默认）、streaming 仅流式、non_streaming 仅非流式。开启输出审核并选择 streaming 可用于 SSE 响应审核。此字段不设置窗口大小或分片步长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestKeywords() 获取<p>请求送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤；非空时按 KeywordMatchMode 满足条件才送审，不是本地违禁词阻断列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestKeywords(array $RequestKeywords) 设置<p>请求送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤；非空时按 KeywordMatchMode 满足条件才送审，不是本地违禁词阻断列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResponseKeywords() 获取<p>响应送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤。流式审核按增量审核单元执行筛选，不代表等待完整响应后统一判断。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseKeywords(array $ResponseKeywords) 设置<p>响应送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤。流式审核按增量审核单元执行筛选，不代表等待完整响应后统一判断。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeywordMatchMode() 获取<p>关键词匹配方式：any 任一关键词命中（创建默认）；all 所有关键词命中。按文本字面子串匹配，不是正则表达式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywordMatchMode(string $KeywordMatchMode) 设置<p>关键词匹配方式：any 任一关键词命中（创建默认）；all 所有关键词命中。按文本字面子串匹配，不是正则表达式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getKeywordCaseSensitive() 获取<p>关键词匹配是否区分大小写，创建默认 false。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywordCaseSensitive(boolean $KeywordCaseSensitive) 设置<p>关键词匹配是否区分大小写，创建默认 false。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSamplingEnabled() 获取<p>是否启用送审采样，创建默认 false（不按采样率跳过）。采样与方向、流式、关键词过滤叠加；开启低比例采样会使未抽中的内容不送审。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSamplingEnabled(boolean $SamplingEnabled) 设置<p>是否启用送审采样，创建默认 false（不按采样率跳过）。采样与方向、流式、关键词过滤叠加；开启低比例采样会使未抽中的内容不送审。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestSamplingRate() 获取<p>请求送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。0 不抽取，1 全量，0.1 表示 10%，不是填写整数 10。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestSamplingRate(float $RequestSamplingRate) 设置<p>请求送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。0 不抽取，1 全量，0.1 表示 10%，不是填写整数 10。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getResponseSamplingRate() 获取<p>响应送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。同一请求响应流保持一致的采样选择，不是对每个 SSE 网络 chunk 独立抽样。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseSamplingRate(float $ResponseSamplingRate) 设置<p>响应送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。同一请求响应流保持一致的采样选择，不是对每个 SSE 网络 chunk 独立抽样。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomGuardrailFilterConfigInput extends AbstractModel
{
    /**
     * @var string <p>请求方向的流式筛选：all 全部（创建默认）、streaming 流式、non_streaming 非流式。依据请求的流式意图/协议识别；无法可靠判别时保守保留送审资格，不应依赖该字段实现强隔离。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestStreamMode;

    /**
     * @var string <p>响应方向的流式筛选：all 全部（创建默认）、streaming 仅流式、non_streaming 仅非流式。开启输出审核并选择 streaming 可用于 SSE 响应审核。此字段不设置窗口大小或分片步长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseStreamMode;

    /**
     * @var array <p>请求送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤；非空时按 KeywordMatchMode 满足条件才送审，不是本地违禁词阻断列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestKeywords;

    /**
     * @var array <p>响应送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤。流式审核按增量审核单元执行筛选，不代表等待完整响应后统一判断。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseKeywords;

    /**
     * @var string <p>关键词匹配方式：any 任一关键词命中（创建默认）；all 所有关键词命中。按文本字面子串匹配，不是正则表达式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeywordMatchMode;

    /**
     * @var boolean <p>关键词匹配是否区分大小写，创建默认 false。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeywordCaseSensitive;

    /**
     * @var boolean <p>是否启用送审采样，创建默认 false（不按采样率跳过）。采样与方向、流式、关键词过滤叠加；开启低比例采样会使未抽中的内容不送审。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SamplingEnabled;

    /**
     * @var float <p>请求送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。0 不抽取，1 全量，0.1 表示 10%，不是填写整数 10。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestSamplingRate;

    /**
     * @var float <p>响应送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。同一请求响应流保持一致的采样选择，不是对每个 SSE 网络 chunk 独立抽样。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseSamplingRate;

    /**
     * @param string $RequestStreamMode <p>请求方向的流式筛选：all 全部（创建默认）、streaming 流式、non_streaming 非流式。依据请求的流式意图/协议识别；无法可靠判别时保守保留送审资格，不应依赖该字段实现强隔离。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseStreamMode <p>响应方向的流式筛选：all 全部（创建默认）、streaming 仅流式、non_streaming 仅非流式。开启输出审核并选择 streaming 可用于 SSE 响应审核。此字段不设置窗口大小或分片步长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestKeywords <p>请求送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤；非空时按 KeywordMatchMode 满足条件才送审，不是本地违禁词阻断列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResponseKeywords <p>响应送审触发关键词；最多 64 项，每项非空且最长 128 字符。默认 [] 不按关键词过滤。流式审核按增量审核单元执行筛选，不代表等待完整响应后统一判断。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeywordMatchMode <p>关键词匹配方式：any 任一关键词命中（创建默认）；all 所有关键词命中。按文本字面子串匹配，不是正则表达式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $KeywordCaseSensitive <p>关键词匹配是否区分大小写，创建默认 false。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SamplingEnabled <p>是否启用送审采样，创建默认 false（不按采样率跳过）。采样与方向、流式、关键词过滤叠加；开启低比例采样会使未抽中的内容不送审。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestSamplingRate <p>请求送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。0 不抽取，1 全量，0.1 表示 10%，不是填写整数 10。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ResponseSamplingRate <p>响应送审采样比例，范围 0～1，创建默认 1；SamplingEnabled=true 时使用。同一请求响应流保持一致的采样选择，不是对每个 SSE 网络 chunk 独立抽样。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RequestStreamMode",$param) and $param["RequestStreamMode"] !== null) {
            $this->RequestStreamMode = $param["RequestStreamMode"];
        }

        if (array_key_exists("ResponseStreamMode",$param) and $param["ResponseStreamMode"] !== null) {
            $this->ResponseStreamMode = $param["ResponseStreamMode"];
        }

        if (array_key_exists("RequestKeywords",$param) and $param["RequestKeywords"] !== null) {
            $this->RequestKeywords = $param["RequestKeywords"];
        }

        if (array_key_exists("ResponseKeywords",$param) and $param["ResponseKeywords"] !== null) {
            $this->ResponseKeywords = $param["ResponseKeywords"];
        }

        if (array_key_exists("KeywordMatchMode",$param) and $param["KeywordMatchMode"] !== null) {
            $this->KeywordMatchMode = $param["KeywordMatchMode"];
        }

        if (array_key_exists("KeywordCaseSensitive",$param) and $param["KeywordCaseSensitive"] !== null) {
            $this->KeywordCaseSensitive = $param["KeywordCaseSensitive"];
        }

        if (array_key_exists("SamplingEnabled",$param) and $param["SamplingEnabled"] !== null) {
            $this->SamplingEnabled = $param["SamplingEnabled"];
        }

        if (array_key_exists("RequestSamplingRate",$param) and $param["RequestSamplingRate"] !== null) {
            $this->RequestSamplingRate = $param["RequestSamplingRate"];
        }

        if (array_key_exists("ResponseSamplingRate",$param) and $param["ResponseSamplingRate"] !== null) {
            $this->ResponseSamplingRate = $param["ResponseSamplingRate"];
        }
    }
}
