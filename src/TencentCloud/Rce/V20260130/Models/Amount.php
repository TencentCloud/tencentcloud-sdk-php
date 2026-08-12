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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 金额
 *
 * @method string getCurrency() 获取<p>原始货币类型</p><p>参数格式：符合ISO 4217标准</p>
 * @method void setCurrency(string $Currency) 设置<p>原始货币类型</p><p>参数格式：符合ISO 4217标准</p>
 * @method float getOriginalAmount() 获取<p>原始金额</p>
 * @method void setOriginalAmount(float $OriginalAmount) 设置<p>原始金额</p>
 * @method float getExchangeRateUSD() 获取<p>当前币种对美金的汇率</p>
 * @method void setExchangeRateUSD(float $ExchangeRateUSD) 设置<p>当前币种对美金的汇率</p>
 * @method float getExchangeRateCNY() 获取<p>当前币种对人民币的汇率</p>
 * @method void setExchangeRateCNY(float $ExchangeRateCNY) 设置<p>当前币种对人民币的汇率</p>
 */
class Amount extends AbstractModel
{
    /**
     * @var string <p>原始货币类型</p><p>参数格式：符合ISO 4217标准</p>
     */
    public $Currency;

    /**
     * @var float <p>原始金额</p>
     */
    public $OriginalAmount;

    /**
     * @var float <p>当前币种对美金的汇率</p>
     */
    public $ExchangeRateUSD;

    /**
     * @var float <p>当前币种对人民币的汇率</p>
     */
    public $ExchangeRateCNY;

    /**
     * @param string $Currency <p>原始货币类型</p><p>参数格式：符合ISO 4217标准</p>
     * @param float $OriginalAmount <p>原始金额</p>
     * @param float $ExchangeRateUSD <p>当前币种对美金的汇率</p>
     * @param float $ExchangeRateCNY <p>当前币种对人民币的汇率</p>
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
        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("OriginalAmount",$param) and $param["OriginalAmount"] !== null) {
            $this->OriginalAmount = $param["OriginalAmount"];
        }

        if (array_key_exists("ExchangeRateUSD",$param) and $param["ExchangeRateUSD"] !== null) {
            $this->ExchangeRateUSD = $param["ExchangeRateUSD"];
        }

        if (array_key_exists("ExchangeRateCNY",$param) and $param["ExchangeRateCNY"] !== null) {
            $this->ExchangeRateCNY = $param["ExchangeRateCNY"];
        }
    }
}
