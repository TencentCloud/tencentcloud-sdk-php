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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModelRouterResourcePackage请求参数结构体
 *
 * @method integer getModelRouterResourcePackageAmount() 获取<p>模型路由资源包容量</p><p>取值范围：[1000, 10000000]</p><p>单次购买的模型路由资源包容量下限为1000，上限为10000000</p>
 * @method void setModelRouterResourcePackageAmount(integer $ModelRouterResourcePackageAmount) 设置<p>模型路由资源包容量</p><p>取值范围：[1000, 10000000]</p><p>单次购买的模型路由资源包容量下限为1000，上限为10000000</p>
 * @method integer getAutoPurchaseFlag() 获取<p>是否自动续订。</p><p>0:不自动续订, 1:用尽到期续订</p>
 * @method void setAutoPurchaseFlag(integer $AutoPurchaseFlag) 设置<p>是否自动续订。</p><p>0:不自动续订, 1:用尽到期续订</p>
 * @method boolean getAutoVoucher() 获取<p>该笔订单是否自动选择代金券</p><p>默认值：false（不自动选择代金券）</p><p>true时会为本笔订单自动匹配满足条件、最优惠的代金券</p>
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置<p>该笔订单是否自动选择代金券</p><p>默认值：false（不自动选择代金券）</p><p>true时会为本笔订单自动匹配满足条件、最优惠的代金券</p>
 */
class CreateModelRouterResourcePackageRequest extends AbstractModel
{
    /**
     * @var integer <p>模型路由资源包容量</p><p>取值范围：[1000, 10000000]</p><p>单次购买的模型路由资源包容量下限为1000，上限为10000000</p>
     */
    public $ModelRouterResourcePackageAmount;

    /**
     * @var integer <p>是否自动续订。</p><p>0:不自动续订, 1:用尽到期续订</p>
     */
    public $AutoPurchaseFlag;

    /**
     * @var boolean <p>该笔订单是否自动选择代金券</p><p>默认值：false（不自动选择代金券）</p><p>true时会为本笔订单自动匹配满足条件、最优惠的代金券</p>
     */
    public $AutoVoucher;

    /**
     * @param integer $ModelRouterResourcePackageAmount <p>模型路由资源包容量</p><p>取值范围：[1000, 10000000]</p><p>单次购买的模型路由资源包容量下限为1000，上限为10000000</p>
     * @param integer $AutoPurchaseFlag <p>是否自动续订。</p><p>0:不自动续订, 1:用尽到期续订</p>
     * @param boolean $AutoVoucher <p>该笔订单是否自动选择代金券</p><p>默认值：false（不自动选择代金券）</p><p>true时会为本笔订单自动匹配满足条件、最优惠的代金券</p>
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
        if (array_key_exists("ModelRouterResourcePackageAmount",$param) and $param["ModelRouterResourcePackageAmount"] !== null) {
            $this->ModelRouterResourcePackageAmount = $param["ModelRouterResourcePackageAmount"];
        }

        if (array_key_exists("AutoPurchaseFlag",$param) and $param["AutoPurchaseFlag"] !== null) {
            $this->AutoPurchaseFlag = $param["AutoPurchaseFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
