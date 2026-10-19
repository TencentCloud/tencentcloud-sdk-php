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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSCPayInfo请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method boolean getNeedQuotaUsed() 获取<p>是否返回配额已使用量。默认为 false：不采集用量，QuotaList 中的 QuotaUsed 恒为 0；需要展示已用量的调用方显式传 true。只关心订单状态、到期时间或配额购买数量的调用方无需传入</p>
 * @method void setNeedQuotaUsed(boolean $NeedQuotaUsed) 设置<p>是否返回配额已使用量。默认为 false：不采集用量，QuotaList 中的 QuotaUsed 恒为 0；需要展示已用量的调用方显式传 true。只关心订单状态、到期时间或配额购买数量的调用方无需传入</p>
 */
class DescribeCSCPayInfoRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>是否返回配额已使用量。默认为 false：不采集用量，QuotaList 中的 QuotaUsed 恒为 0；需要展示已用量的调用方显式传 true。只关心订单状态、到期时间或配额购买数量的调用方无需传入</p>
     */
    public $NeedQuotaUsed;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param boolean $NeedQuotaUsed <p>是否返回配额已使用量。默认为 false：不采集用量，QuotaList 中的 QuotaUsed 恒为 0；需要展示已用量的调用方显式传 true。只关心订单状态、到期时间或配额购买数量的调用方无需传入</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NeedQuotaUsed",$param) and $param["NeedQuotaUsed"] !== null) {
            $this->NeedQuotaUsed = $param["NeedQuotaUsed"];
        }
    }
}
