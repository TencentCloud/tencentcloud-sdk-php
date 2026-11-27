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
 * Realtime 路由配置。支持 SimpleShuffle、LeastBusy、CostBasedRouting，创建时默认 SimpleShuffle、NumRetries=2。修改时仅更新显式传入字段；切换策略时清理旧策略参数。所有字段选填，不接受显式 null。
 *
 * @method string getRoutingStrategy() 获取<p>Realtime 模型路由策略。</p><p>入参限制：仅支持 SimpleShuffle（随机）、LeastBusy（最少繁忙）、CostBasedRouting（最低成本）。</p><p>默认值：SimpleShuffle</p><p>修改时未传保留旧策略；切换策略会清理旧策略的 RoutingStrategyArgs。不接受 null。</p>
 * @method void setRoutingStrategy(string $RoutingStrategy) 设置<p>Realtime 模型路由策略。</p><p>入参限制：仅支持 SimpleShuffle（随机）、LeastBusy（最少繁忙）、CostBasedRouting（最低成本）。</p><p>默认值：SimpleShuffle</p><p>修改时未传保留旧策略；切换策略会清理旧策略的 RoutingStrategyArgs。不接受 null。</p>
 * @method integer getNumRetries() 获取<p>Realtime 路由重试次数。</p><p>取值范围：[0, 5]</p><p>默认值：2</p><p>仅接受整数，0 表示不重试。修改时未提供此字段则保留旧值，不接受 null。</p>
 * @method void setNumRetries(integer $NumRetries) 设置<p>Realtime 路由重试次数。</p><p>取值范围：[0, 5]</p><p>默认值：2</p><p>仅接受整数，0 表示不重试。修改时未提供此字段则保留旧值，不接受 null。</p>
 * @method RealtimeRoutingStrategyArgs getRoutingStrategyArgs() 获取<p>Realtime 路由策略的附加参数。</p><p>入参限制：LeastBusy 仅接受 LeastBusyBuffer；CostBasedRouting 仅接受 LowestCostBuffer；SimpleShuffle 仅接受空对象。</p><p>修改时未提供的参数保留旧值，切换策略时清理旧参数；适用的 Buffer 默认 0。不接受 null。</p>
 * @method void setRoutingStrategyArgs(RealtimeRoutingStrategyArgs $RoutingStrategyArgs) 设置<p>Realtime 路由策略的附加参数。</p><p>入参限制：LeastBusy 仅接受 LeastBusyBuffer；CostBasedRouting 仅接受 LowestCostBuffer；SimpleShuffle 仅接受空对象。</p><p>修改时未提供的参数保留旧值，切换策略时清理旧参数；适用的 Buffer 默认 0。不接受 null。</p>
 */
class RealtimeConfig extends AbstractModel
{
    /**
     * @var string <p>Realtime 模型路由策略。</p><p>入参限制：仅支持 SimpleShuffle（随机）、LeastBusy（最少繁忙）、CostBasedRouting（最低成本）。</p><p>默认值：SimpleShuffle</p><p>修改时未传保留旧策略；切换策略会清理旧策略的 RoutingStrategyArgs。不接受 null。</p>
     */
    public $RoutingStrategy;

    /**
     * @var integer <p>Realtime 路由重试次数。</p><p>取值范围：[0, 5]</p><p>默认值：2</p><p>仅接受整数，0 表示不重试。修改时未提供此字段则保留旧值，不接受 null。</p>
     */
    public $NumRetries;

    /**
     * @var RealtimeRoutingStrategyArgs <p>Realtime 路由策略的附加参数。</p><p>入参限制：LeastBusy 仅接受 LeastBusyBuffer；CostBasedRouting 仅接受 LowestCostBuffer；SimpleShuffle 仅接受空对象。</p><p>修改时未提供的参数保留旧值，切换策略时清理旧参数；适用的 Buffer 默认 0。不接受 null。</p>
     */
    public $RoutingStrategyArgs;

    /**
     * @param string $RoutingStrategy <p>Realtime 模型路由策略。</p><p>入参限制：仅支持 SimpleShuffle（随机）、LeastBusy（最少繁忙）、CostBasedRouting（最低成本）。</p><p>默认值：SimpleShuffle</p><p>修改时未传保留旧策略；切换策略会清理旧策略的 RoutingStrategyArgs。不接受 null。</p>
     * @param integer $NumRetries <p>Realtime 路由重试次数。</p><p>取值范围：[0, 5]</p><p>默认值：2</p><p>仅接受整数，0 表示不重试。修改时未提供此字段则保留旧值，不接受 null。</p>
     * @param RealtimeRoutingStrategyArgs $RoutingStrategyArgs <p>Realtime 路由策略的附加参数。</p><p>入参限制：LeastBusy 仅接受 LeastBusyBuffer；CostBasedRouting 仅接受 LowestCostBuffer；SimpleShuffle 仅接受空对象。</p><p>修改时未提供的参数保留旧值，切换策略时清理旧参数；适用的 Buffer 默认 0。不接受 null。</p>
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
        if (array_key_exists("RoutingStrategy",$param) and $param["RoutingStrategy"] !== null) {
            $this->RoutingStrategy = $param["RoutingStrategy"];
        }

        if (array_key_exists("NumRetries",$param) and $param["NumRetries"] !== null) {
            $this->NumRetries = $param["NumRetries"];
        }

        if (array_key_exists("RoutingStrategyArgs",$param) and $param["RoutingStrategyArgs"] !== null) {
            $this->RoutingStrategyArgs = new RealtimeRoutingStrategyArgs();
            $this->RoutingStrategyArgs->deserialize($param["RoutingStrategyArgs"]);
        }
    }
}
