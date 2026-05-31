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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token 汇总计费项
 *
 * @method string getBillingItem() 获取计费项。取值：input（输入 Token）、output（输出 Token）、cache（缓存 Token）、call_count（调用次数）。
 * @method void setBillingItem(string $BillingItem) 设置计费项。取值：input（输入 Token）、output（输出 Token）、cache（缓存 Token）、call_count（调用次数）。
 * @method integer getTotalQty() 获取该计费项在周期内的原始用量汇总，单位：tokens。
 * @method void setTotalQty(integer $TotalQty) 设置该计费项在周期内的原始用量汇总，单位：tokens。
 */
class TokenSummaryBillingItem extends AbstractModel
{
    /**
     * @var string 计费项。取值：input（输入 Token）、output（输出 Token）、cache（缓存 Token）、call_count（调用次数）。
     */
    public $BillingItem;

    /**
     * @var integer 该计费项在周期内的原始用量汇总，单位：tokens。
     */
    public $TotalQty;

    /**
     * @param string $BillingItem 计费项。取值：input（输入 Token）、output（输出 Token）、cache（缓存 Token）、call_count（调用次数）。
     * @param integer $TotalQty 该计费项在周期内的原始用量汇总，单位：tokens。
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("TotalQty",$param) and $param["TotalQty"] !== null) {
            $this->TotalQty = $param["TotalQty"];
        }
    }
}
