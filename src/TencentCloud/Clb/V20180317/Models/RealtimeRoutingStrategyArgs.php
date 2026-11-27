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
 * Realtime 路由策略参数。LeastBusy 仅支持 LeastBusyBuffer，CostBasedRouting 仅支持 LowestCostBuffer，SimpleShuffle 不支持策略参数。Buffer 取值为 0～1000，最多两位小数，默认 0；修改时未传字段保留旧值。
 *
 * @method float getLeastBusyBuffer() 获取<p>LeastBusy 路由策略的缓冲参数，仅 RoutingStrategy=LeastBusy 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
 * @method void setLeastBusyBuffer(float $LeastBusyBuffer) 设置<p>LeastBusy 路由策略的缓冲参数，仅 RoutingStrategy=LeastBusy 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
 * @method float getLowestCostBuffer() 获取<p>CostBasedRouting 路由策略的缓冲参数，仅 RoutingStrategy=CostBasedRouting 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
 * @method void setLowestCostBuffer(float $LowestCostBuffer) 设置<p>CostBasedRouting 路由策略的缓冲参数，仅 RoutingStrategy=CostBasedRouting 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
 */
class RealtimeRoutingStrategyArgs extends AbstractModel
{
    /**
     * @var float <p>LeastBusy 路由策略的缓冲参数，仅 RoutingStrategy=LeastBusy 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
     */
    public $LeastBusyBuffer;

    /**
     * @var float <p>CostBasedRouting 路由策略的缓冲参数，仅 RoutingStrategy=CostBasedRouting 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
     */
    public $LowestCostBuffer;

    /**
     * @param float $LeastBusyBuffer <p>LeastBusy 路由策略的缓冲参数，仅 RoutingStrategy=LeastBusy 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
     * @param float $LowestCostBuffer <p>CostBasedRouting 路由策略的缓冲参数，仅 RoutingStrategy=CostBasedRouting 时允许设置。</p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>最多支持两位小数；不接受字符串、布尔值或 null。修改时未传保留旧值，显式 0 生效。</p>
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
        if (array_key_exists("LeastBusyBuffer",$param) and $param["LeastBusyBuffer"] !== null) {
            $this->LeastBusyBuffer = $param["LeastBusyBuffer"];
        }

        if (array_key_exists("LowestCostBuffer",$param) and $param["LowestCostBuffer"] !== null) {
            $this->LowestCostBuffer = $param["LowestCostBuffer"];
        }
    }
}
