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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoAnnotationJob请求参数结构体
 *
 * @method integer getInputType() 获取<p>输入源类型：1 S3 兼容存储，2 HTTP URL</p><p>枚举值：</p><ul><li>1： S3 兼容存储</li><li>2： HTTP URL</li></ul>
 * @method void setInputType(integer $InputType) 设置<p>输入源类型：1 S3 兼容存储，2 HTTP URL</p><p>枚举值：</p><ul><li>1： S3 兼容存储</li><li>2： HTTP URL</li></ul>
 * @method integer getAnnotationType() 获取<p>标注模式（当前仅开放精标注）</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
 * @method void setAnnotationType(integer $AnnotationType) 设置<p>标注模式（当前仅开放精标注）</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
 * @method S3SourceInfo getS3SourceInfo() 获取<p>S3 存储输入源信息，InputType=1 时必填</p>
 * @method void setS3SourceInfo(S3SourceInfo $S3SourceInfo) 设置<p>S3 存储输入源信息，InputType=1 时必填</p>
 * @method string getHttpUrl() 获取<p>视频 HTTP URL。InputType=2 时必填。格式如 https://example.com/video.mp4</p>
 * @method void setHttpUrl(string $HttpUrl) 设置<p>视频 HTTP URL。InputType=2 时必填。格式如 https://example.com/video.mp4</p>
 * @method AnnotationContext getAnnotationContext() 获取<p>标注上下文信息</p>
 * @method void setAnnotationContext(AnnotationContext $AnnotationContext) 设置<p>标注上下文信息</p>
 * @method ProcessParams getProcessParams() 获取<p>标注处理参数，预留字段，当前无效</p>
 * @method void setProcessParams(ProcessParams $ProcessParams) 设置<p>标注处理参数，预留字段，当前无效</p>
 * @method OutputInfo getOutputInfo() 获取<p>结果输出信息</p>
 * @method void setOutputInfo(OutputInfo $OutputInfo) 设置<p>结果输出信息</p>
 * @method CallbackInfo getCallbackInfo() 获取<p>回调信息，配置后当处理项状态从处理中变为其他状态时，服务端会向回调地址发送请求（退避重试三次，不保证回调一定送达，需保证目标地址接收服务有效），建议接收方做好幂等处理。回调请求格式如下：<br><strong>请求头</strong></p><table><thead><tr><th>名称</th><th>值</th></tr></thead><tbody><tr><td>X-Annotation-Signature</td><td>hex(HMAC-SHA256(请求体原始字节, CallbackInfo.Secret))</td></tr></tbody></table><p><strong>请求体</strong>（application/json）</p><table><thead><tr><th>参数名</th><th>类型</th><th>必选</th><th>描述</th></tr></thead><tbody><tr><td>JobId</td><td>string</td><td>是</td><td>任务 ID</td></tr><tr><td>TaskId</td><td>string</td><td>是</td><td>处理项 ID</td></tr><tr><td>FileName</td><td>string</td><td>是</td><td>视频文件名</td></tr><tr><td>Status</td><td>int</td><td>是</td><td>触发本次回调的处理项状态：3 超时，4 异常，5 待确认，6 成功</td></tr><tr><td>StatusChangedAt</td><td>int</td><td>是</td><td>状态变更时间，Unix 时间戳（秒）</td></tr><tr><td>RawResult</td><td>string</td><td>否</td><td>当前生效的结果 JSON 原文：成功=标注产物；待确认=原始标注；确认后=确认版内容。超时/异常无内容</td></tr></tbody></table>
 * @method void setCallbackInfo(CallbackInfo $CallbackInfo) 设置<p>回调信息，配置后当处理项状态从处理中变为其他状态时，服务端会向回调地址发送请求（退避重试三次，不保证回调一定送达，需保证目标地址接收服务有效），建议接收方做好幂等处理。回调请求格式如下：<br><strong>请求头</strong></p><table><thead><tr><th>名称</th><th>值</th></tr></thead><tbody><tr><td>X-Annotation-Signature</td><td>hex(HMAC-SHA256(请求体原始字节, CallbackInfo.Secret))</td></tr></tbody></table><p><strong>请求体</strong>（application/json）</p><table><thead><tr><th>参数名</th><th>类型</th><th>必选</th><th>描述</th></tr></thead><tbody><tr><td>JobId</td><td>string</td><td>是</td><td>任务 ID</td></tr><tr><td>TaskId</td><td>string</td><td>是</td><td>处理项 ID</td></tr><tr><td>FileName</td><td>string</td><td>是</td><td>视频文件名</td></tr><tr><td>Status</td><td>int</td><td>是</td><td>触发本次回调的处理项状态：3 超时，4 异常，5 待确认，6 成功</td></tr><tr><td>StatusChangedAt</td><td>int</td><td>是</td><td>状态变更时间，Unix 时间戳（秒）</td></tr><tr><td>RawResult</td><td>string</td><td>否</td><td>当前生效的结果 JSON 原文：成功=标注产物；待确认=原始标注；确认后=确认版内容。超时/异常无内容</td></tr></tbody></table>
 */
class CreateVideoAnnotationJobRequest extends AbstractModel
{
    /**
     * @var integer <p>输入源类型：1 S3 兼容存储，2 HTTP URL</p><p>枚举值：</p><ul><li>1： S3 兼容存储</li><li>2： HTTP URL</li></ul>
     */
    public $InputType;

    /**
     * @var integer <p>标注模式（当前仅开放精标注）</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
     */
    public $AnnotationType;

    /**
     * @var S3SourceInfo <p>S3 存储输入源信息，InputType=1 时必填</p>
     */
    public $S3SourceInfo;

    /**
     * @var string <p>视频 HTTP URL。InputType=2 时必填。格式如 https://example.com/video.mp4</p>
     */
    public $HttpUrl;

    /**
     * @var AnnotationContext <p>标注上下文信息</p>
     */
    public $AnnotationContext;

    /**
     * @var ProcessParams <p>标注处理参数，预留字段，当前无效</p>
     */
    public $ProcessParams;

    /**
     * @var OutputInfo <p>结果输出信息</p>
     */
    public $OutputInfo;

    /**
     * @var CallbackInfo <p>回调信息，配置后当处理项状态从处理中变为其他状态时，服务端会向回调地址发送请求（退避重试三次，不保证回调一定送达，需保证目标地址接收服务有效），建议接收方做好幂等处理。回调请求格式如下：<br><strong>请求头</strong></p><table><thead><tr><th>名称</th><th>值</th></tr></thead><tbody><tr><td>X-Annotation-Signature</td><td>hex(HMAC-SHA256(请求体原始字节, CallbackInfo.Secret))</td></tr></tbody></table><p><strong>请求体</strong>（application/json）</p><table><thead><tr><th>参数名</th><th>类型</th><th>必选</th><th>描述</th></tr></thead><tbody><tr><td>JobId</td><td>string</td><td>是</td><td>任务 ID</td></tr><tr><td>TaskId</td><td>string</td><td>是</td><td>处理项 ID</td></tr><tr><td>FileName</td><td>string</td><td>是</td><td>视频文件名</td></tr><tr><td>Status</td><td>int</td><td>是</td><td>触发本次回调的处理项状态：3 超时，4 异常，5 待确认，6 成功</td></tr><tr><td>StatusChangedAt</td><td>int</td><td>是</td><td>状态变更时间，Unix 时间戳（秒）</td></tr><tr><td>RawResult</td><td>string</td><td>否</td><td>当前生效的结果 JSON 原文：成功=标注产物；待确认=原始标注；确认后=确认版内容。超时/异常无内容</td></tr></tbody></table>
     */
    public $CallbackInfo;

    /**
     * @param integer $InputType <p>输入源类型：1 S3 兼容存储，2 HTTP URL</p><p>枚举值：</p><ul><li>1： S3 兼容存储</li><li>2： HTTP URL</li></ul>
     * @param integer $AnnotationType <p>标注模式（当前仅开放精标注）</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
     * @param S3SourceInfo $S3SourceInfo <p>S3 存储输入源信息，InputType=1 时必填</p>
     * @param string $HttpUrl <p>视频 HTTP URL。InputType=2 时必填。格式如 https://example.com/video.mp4</p>
     * @param AnnotationContext $AnnotationContext <p>标注上下文信息</p>
     * @param ProcessParams $ProcessParams <p>标注处理参数，预留字段，当前无效</p>
     * @param OutputInfo $OutputInfo <p>结果输出信息</p>
     * @param CallbackInfo $CallbackInfo <p>回调信息，配置后当处理项状态从处理中变为其他状态时，服务端会向回调地址发送请求（退避重试三次，不保证回调一定送达，需保证目标地址接收服务有效），建议接收方做好幂等处理。回调请求格式如下：<br><strong>请求头</strong></p><table><thead><tr><th>名称</th><th>值</th></tr></thead><tbody><tr><td>X-Annotation-Signature</td><td>hex(HMAC-SHA256(请求体原始字节, CallbackInfo.Secret))</td></tr></tbody></table><p><strong>请求体</strong>（application/json）</p><table><thead><tr><th>参数名</th><th>类型</th><th>必选</th><th>描述</th></tr></thead><tbody><tr><td>JobId</td><td>string</td><td>是</td><td>任务 ID</td></tr><tr><td>TaskId</td><td>string</td><td>是</td><td>处理项 ID</td></tr><tr><td>FileName</td><td>string</td><td>是</td><td>视频文件名</td></tr><tr><td>Status</td><td>int</td><td>是</td><td>触发本次回调的处理项状态：3 超时，4 异常，5 待确认，6 成功</td></tr><tr><td>StatusChangedAt</td><td>int</td><td>是</td><td>状态变更时间，Unix 时间戳（秒）</td></tr><tr><td>RawResult</td><td>string</td><td>否</td><td>当前生效的结果 JSON 原文：成功=标注产物；待确认=原始标注；确认后=确认版内容。超时/异常无内容</td></tr></tbody></table>
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("AnnotationType",$param) and $param["AnnotationType"] !== null) {
            $this->AnnotationType = $param["AnnotationType"];
        }

        if (array_key_exists("S3SourceInfo",$param) and $param["S3SourceInfo"] !== null) {
            $this->S3SourceInfo = new S3SourceInfo();
            $this->S3SourceInfo->deserialize($param["S3SourceInfo"]);
        }

        if (array_key_exists("HttpUrl",$param) and $param["HttpUrl"] !== null) {
            $this->HttpUrl = $param["HttpUrl"];
        }

        if (array_key_exists("AnnotationContext",$param) and $param["AnnotationContext"] !== null) {
            $this->AnnotationContext = new AnnotationContext();
            $this->AnnotationContext->deserialize($param["AnnotationContext"]);
        }

        if (array_key_exists("ProcessParams",$param) and $param["ProcessParams"] !== null) {
            $this->ProcessParams = new ProcessParams();
            $this->ProcessParams->deserialize($param["ProcessParams"]);
        }

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new OutputInfo();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = new CallbackInfo();
            $this->CallbackInfo->deserialize($param["CallbackInfo"]);
        }
    }
}
