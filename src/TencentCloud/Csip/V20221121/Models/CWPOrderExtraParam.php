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
 * 订单额外参数
 *
 * @method string getMode() 获取PrePay 包年包月
PostPay 按量计费
Disposable 一次性交付
 * @method void setMode(string $Mode) 设置PrePay 包年包月
PostPay 按量计费
Disposable 一次性交付
 * @method boolean getDisposableStatus() 获取一次性服务交付状态,仅一次性资源订单才有该值
false 未验收
true 已验收
 * @method void setDisposableStatus(boolean $DisposableStatus) 设置一次性服务交付状态,仅一次性资源订单才有该值
false 未验收
true 已验收
 */
class CWPOrderExtraParam extends AbstractModel
{
    /**
     * @var string PrePay 包年包月
PostPay 按量计费
Disposable 一次性交付
     */
    public $Mode;

    /**
     * @var boolean 一次性服务交付状态,仅一次性资源订单才有该值
false 未验收
true 已验收
     */
    public $DisposableStatus;

    /**
     * @param string $Mode PrePay 包年包月
PostPay 按量计费
Disposable 一次性交付
     * @param boolean $DisposableStatus 一次性服务交付状态,仅一次性资源订单才有该值
false 未验收
true 已验收
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DisposableStatus",$param) and $param["DisposableStatus"] !== null) {
            $this->DisposableStatus = $param["DisposableStatus"];
        }
    }
}
