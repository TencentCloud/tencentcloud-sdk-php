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
 * 接口调用节点的调用详情
 *
 * @method boolean getAsync() 获取<p>是否异步上报。节点配置「等待接口返回」关闭时为 true，此时不处理响应也不影响流程走向，Status、StatusCode、CostMS 等结果字段均为空，只记录 Attempts 中的请求详情。</p>
 * @method void setAsync(boolean $Async) 设置<p>是否异步上报。节点配置「等待接口返回」关闭时为 true，此时不处理响应也不影响流程走向，Status、StatusCode、CostMS 等结果字段均为空，只记录 Attempts 中的请求详情。</p>
 * @method string getStatus() 获取<p>本次接口调用的最终状态，重试场景为最后一次尝试的状态，Async 为 true 时为空。后续可能新增取值，请做好兼容。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
 * @method void setStatus(string $Status) 设置<p>本次接口调用的最终状态，重试场景为最后一次尝试的状态，Async 为 true 时为空。后续可能新增取值，请做好兼容。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
 * @method integer getStatusCode() 获取<p>最终 HTTP 状态码。调不通或异步上报时为 0。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>最终 HTTP 状态码。调不通或异步上报时为 0。</p>
 * @method string getSummary() 获取<p>失败摘要，格式为 {状态码或错误类型}：{错误信息}。调用成功时为空。</p>
 * @method void setSummary(string $Summary) 设置<p>失败摘要，格式为 {状态码或错误类型}：{错误信息}。调用成功时为空。</p>
 * @method integer getCostMS() 获取<p>接口调用总耗时，包含全部重试。异步上报时为 0。</p><p>单位：ms</p>
 * @method void setCostMS(integer $CostMS) 设置<p>接口调用总耗时，包含全部重试。异步上报时为 0。</p><p>单位：ms</p>
 * @method integer getRetryCount() 获取<p>重试次数。0 表示首次调用即结束，未发生重试。</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数。0 表示首次调用即结束，未发生重试。</p>
 * @method array getAttempts() 获取<p>每次尝试的明细，按时间顺序排列，至少包含首次调用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttempts(array $Attempts) 设置<p>每次尝试的明细，按时间顺序排列，至少包含首次调用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AICallAPICallDetail extends AbstractModel
{
    /**
     * @var boolean <p>是否异步上报。节点配置「等待接口返回」关闭时为 true，此时不处理响应也不影响流程走向，Status、StatusCode、CostMS 等结果字段均为空，只记录 Attempts 中的请求详情。</p>
     */
    public $Async;

    /**
     * @var string <p>本次接口调用的最终状态，重试场景为最后一次尝试的状态，Async 为 true 时为空。后续可能新增取值，请做好兼容。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>最终 HTTP 状态码。调不通或异步上报时为 0。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>失败摘要，格式为 {状态码或错误类型}：{错误信息}。调用成功时为空。</p>
     */
    public $Summary;

    /**
     * @var integer <p>接口调用总耗时，包含全部重试。异步上报时为 0。</p><p>单位：ms</p>
     */
    public $CostMS;

    /**
     * @var integer <p>重试次数。0 表示首次调用即结束，未发生重试。</p>
     */
    public $RetryCount;

    /**
     * @var array <p>每次尝试的明细，按时间顺序排列，至少包含首次调用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attempts;

    /**
     * @param boolean $Async <p>是否异步上报。节点配置「等待接口返回」关闭时为 true，此时不处理响应也不影响流程走向，Status、StatusCode、CostMS 等结果字段均为空，只记录 Attempts 中的请求详情。</p>
     * @param string $Status <p>本次接口调用的最终状态，重试场景为最后一次尝试的状态，Async 为 true 时为空。后续可能新增取值，请做好兼容。</p><p>枚举值：</p><ul><li>success： 调通且返回 2xx，进入成功分支</li><li>failed： 调用失败或返回非 2xx，进入失败分支</li><li>terminated： 调用过程中被用户新意图打断，无最终结果</li></ul>
     * @param integer $StatusCode <p>最终 HTTP 状态码。调不通或异步上报时为 0。</p>
     * @param string $Summary <p>失败摘要，格式为 {状态码或错误类型}：{错误信息}。调用成功时为空。</p>
     * @param integer $CostMS <p>接口调用总耗时，包含全部重试。异步上报时为 0。</p><p>单位：ms</p>
     * @param integer $RetryCount <p>重试次数。0 表示首次调用即结束，未发生重试。</p>
     * @param array $Attempts <p>每次尝试的明细，按时间顺序排列，至少包含首次调用。</p>
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
        if (array_key_exists("Async",$param) and $param["Async"] !== null) {
            $this->Async = $param["Async"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("CostMS",$param) and $param["CostMS"] !== null) {
            $this->CostMS = $param["CostMS"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("Attempts",$param) and $param["Attempts"] !== null) {
            $this->Attempts = [];
            foreach ($param["Attempts"] as $key => $value){
                $obj = new AICallAPICallAttempt();
                $obj->deserialize($value);
                array_push($this->Attempts, $obj);
            }
        }
    }
}
