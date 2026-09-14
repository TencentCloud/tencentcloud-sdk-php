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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接口调用的单次尝试明细
 *
 * @method integer getIndex() 获取<p>尝试序号，从 1 开始，1 表示首次调用。</p>
 * @method void setIndex(integer $Index) 设置<p>尝试序号，从 1 开始，1 表示首次调用。</p>
 * @method integer getTimestamp() 获取<p>本次尝试的发起时间戳，Unix 毫秒级时间戳。</p><p>单位：ms</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>本次尝试的发起时间戳，Unix 毫秒级时间戳。</p><p>单位：ms</p>
 * @method string getStatus() 获取<p>本次尝试的结果状态，取值同 APICall.Status。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>internal_fail： 内部调用失败</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
 * @method void setStatus(string $Status) 设置<p>本次尝试的结果状态，取值同 APICall.Status。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>internal_fail： 内部调用失败</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
 * @method integer getStatusCode() 获取<p>本次尝试的 HTTP 状态码。调不通时为 0。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>本次尝试的 HTTP 状态码。调不通时为 0。</p>
 * @method string getErrorType() 获取<p>本次尝试调不通时的错误类型，取值同 APICall.ErrorType。</p><p>枚举值：</p><ul><li>timeout： 请求超时</li><li>connect_failed： 建立连接失败</li><li>dns_failed： DNS 解析失败</li><li>tls_failed： TLS 证书校验失败</li><li>other： 其他错误</li></ul>
 * @method void setErrorType(string $ErrorType) 设置<p>本次尝试调不通时的错误类型，取值同 APICall.ErrorType。</p><p>枚举值：</p><ul><li>timeout： 请求超时</li><li>connect_failed： 建立连接失败</li><li>dns_failed： DNS 解析失败</li><li>tls_failed： TLS 证书校验失败</li><li>other： 其他错误</li></ul>
 * @method string getSummary() 获取<p>本次尝试的失败摘要，格式为 {状态码或错误类型}：{错误信息}。本次尝试成功时为空。</p>
 * @method void setSummary(string $Summary) 设置<p>本次尝试的失败摘要，格式为 {状态码或错误类型}：{错误信息}。本次尝试成功时为空。</p>
 * @method integer getCostMS() 获取<p>本次尝试耗时。</p><p>单位：ms</p>
 * @method void setCostMS(integer $CostMS) 设置<p>本次尝试耗时。</p><p>单位：ms</p>
 * @method AICallAPICallRequestDetail getRequest() 获取<p>本次尝试的请求详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequest(AICallAPICallRequestDetail $Request) 设置<p>本次尝试的请求详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AICallAPICallResponseDetail getResponse() 获取<p>本次尝试的响应详情。调不通（Status 为 unreachable）或异步上报时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponse(AICallAPICallResponseDetail $Response) 设置<p>本次尝试的响应详情。调不通（Status 为 unreachable）或异步上报时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AICallAPICallAttempt extends AbstractModel
{
    /**
     * @var integer <p>尝试序号，从 1 开始，1 表示首次调用。</p>
     */
    public $Index;

    /**
     * @var integer <p>本次尝试的发起时间戳，Unix 毫秒级时间戳。</p><p>单位：ms</p>
     */
    public $Timestamp;

    /**
     * @var string <p>本次尝试的结果状态，取值同 APICall.Status。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>internal_fail： 内部调用失败</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>本次尝试的 HTTP 状态码。调不通时为 0。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>本次尝试调不通时的错误类型，取值同 APICall.ErrorType。</p><p>枚举值：</p><ul><li>timeout： 请求超时</li><li>connect_failed： 建立连接失败</li><li>dns_failed： DNS 解析失败</li><li>tls_failed： TLS 证书校验失败</li><li>other： 其他错误</li></ul>
     */
    public $ErrorType;

    /**
     * @var string <p>本次尝试的失败摘要，格式为 {状态码或错误类型}：{错误信息}。本次尝试成功时为空。</p>
     */
    public $Summary;

    /**
     * @var integer <p>本次尝试耗时。</p><p>单位：ms</p>
     */
    public $CostMS;

    /**
     * @var AICallAPICallRequestDetail <p>本次尝试的请求详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Request;

    /**
     * @var AICallAPICallResponseDetail <p>本次尝试的响应详情。调不通（Status 为 unreachable）或异步上报时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Response;

    /**
     * @param integer $Index <p>尝试序号，从 1 开始，1 表示首次调用。</p>
     * @param integer $Timestamp <p>本次尝试的发起时间戳，Unix 毫秒级时间戳。</p><p>单位：ms</p>
     * @param string $Status <p>本次尝试的结果状态，取值同 APICall.Status。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>internal_fail： 内部调用失败</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
     * @param integer $StatusCode <p>本次尝试的 HTTP 状态码。调不通时为 0。</p>
     * @param string $ErrorType <p>本次尝试调不通时的错误类型，取值同 APICall.ErrorType。</p><p>枚举值：</p><ul><li>timeout： 请求超时</li><li>connect_failed： 建立连接失败</li><li>dns_failed： DNS 解析失败</li><li>tls_failed： TLS 证书校验失败</li><li>other： 其他错误</li></ul>
     * @param string $Summary <p>本次尝试的失败摘要，格式为 {状态码或错误类型}：{错误信息}。本次尝试成功时为空。</p>
     * @param integer $CostMS <p>本次尝试耗时。</p><p>单位：ms</p>
     * @param AICallAPICallRequestDetail $Request <p>本次尝试的请求详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AICallAPICallResponseDetail $Response <p>本次尝试的响应详情。调不通（Status 为 unreachable）或异步上报时为空。</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("CostMS",$param) and $param["CostMS"] !== null) {
            $this->CostMS = $param["CostMS"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = new AICallAPICallRequestDetail();
            $this->Request->deserialize($param["Request"]);
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = new AICallAPICallResponseDetail();
            $this->Response->deserialize($param["Response"]);
        }
    }
}
