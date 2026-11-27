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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByProduct请求参数结构体
 *
 * @method string getBeginTime() 获取<p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
 * @method string getEndTime() 获取<p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
 * @method void setEndTime(string $EndTime) 设置<p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
 * @method string getPayerUin() 获取<p>查询账单数据的用户UIN</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>查询账单数据的用户UIN</p>
 * @method string getPayType() 获取<p>款项类别，与L0账单上的汇总类别对应。 此参数自账单3.0（即2021-01）之后开始生效。</p><p>枚举值：</p><ul><li>consume： 消费</li><li>refund： 退款</li><li>adjustment： 调账</li></ul>
 * @method void setPayType(string $PayType) 设置<p>款项类别，与L0账单上的汇总类别对应。 此参数自账单3.0（即2021-01）之后开始生效。</p><p>枚举值：</p><ul><li>consume： 消费</li><li>refund： 退款</li><li>adjustment： 调账</li></ul>
 */
class DescribeBillSummaryByProductRequest extends AbstractModel
{
    /**
     * @var string <p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
     */
    public $BeginTime;

    /**
     * @var string <p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询账单数据的用户UIN</p>
     */
    public $PayerUin;

    /**
     * @var string <p>款项类别，与L0账单上的汇总类别对应。 此参数自账单3.0（即2021-01）之后开始生效。</p><p>枚举值：</p><ul><li>consume： 消费</li><li>refund： 退款</li><li>adjustment： 调账</li></ul>
     */
    public $PayType;

    /**
     * @param string $BeginTime <p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
     * @param string $EndTime <p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2026-11，EndTime 为 2026-11，查询结果是 2026 年 11 月数据。格式为yyyy-mm，不能早于2021-01</p>
     * @param string $PayerUin <p>查询账单数据的用户UIN</p>
     * @param string $PayType <p>款项类别，与L0账单上的汇总类别对应。 此参数自账单3.0（即2021-01）之后开始生效。</p><p>枚举值：</p><ul><li>consume： 消费</li><li>refund： 退款</li><li>adjustment： 调账</li></ul>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }
    }
}
