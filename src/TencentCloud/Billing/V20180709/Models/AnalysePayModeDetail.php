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
 * 成本分析支付方式复杂类型
 *
 * @method string getPayMode() 获取<p>计费模式code</p><p>枚举值：</p><ul><li>prePay： 包年包月</li><li>postPay： 按量计费</li></ul>
 * @method void setPayMode(string $PayMode) 设置<p>计费模式code</p><p>枚举值：</p><ul><li>prePay： 包年包月</li><li>postPay： 按量计费</li></ul>
 * @method string getPayModeName() 获取<p>计费模式Name</p>
 * @method void setPayModeName(string $PayModeName) 设置<p>计费模式Name</p>
 */
class AnalysePayModeDetail extends AbstractModel
{
    /**
     * @var string <p>计费模式code</p><p>枚举值：</p><ul><li>prePay： 包年包月</li><li>postPay： 按量计费</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>计费模式Name</p>
     */
    public $PayModeName;

    /**
     * @param string $PayMode <p>计费模式code</p><p>枚举值：</p><ul><li>prePay： 包年包月</li><li>postPay： 按量计费</li></ul>
     * @param string $PayModeName <p>计费模式Name</p>
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }
    }
}
