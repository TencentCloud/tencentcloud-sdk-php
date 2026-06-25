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
 * 路由设置
 *
 * @method FallBackItem getFallBack() 获取<p>回退策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFallBack(FallBackItem $FallBack) 设置<p>回退策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoutingStrategy() 获取<p>模型内路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutingStrategy(string $RoutingStrategy) 设置<p>模型内路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrossModelGroupRoutingStrategy() 获取<p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossModelGroupRoutingStrategy(string $CrossModelGroupRoutingStrategy) 设置<p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouterSettingWithFallBack extends AbstractModel
{
    /**
     * @var FallBackItem <p>回退策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FallBack;

    /**
     * @var string <p>模型内路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutingStrategy;

    /**
     * @var string <p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossModelGroupRoutingStrategy;

    /**
     * @param FallBackItem $FallBack <p>回退策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoutingStrategy <p>模型内路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrossModelGroupRoutingStrategy <p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
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
        if (array_key_exists("FallBack",$param) and $param["FallBack"] !== null) {
            $this->FallBack = new FallBackItem();
            $this->FallBack->deserialize($param["FallBack"]);
        }

        if (array_key_exists("RoutingStrategy",$param) and $param["RoutingStrategy"] !== null) {
            $this->RoutingStrategy = $param["RoutingStrategy"];
        }

        if (array_key_exists("CrossModelGroupRoutingStrategy",$param) and $param["CrossModelGroupRoutingStrategy"] !== null) {
            $this->CrossModelGroupRoutingStrategy = $param["CrossModelGroupRoutingStrategy"];
        }
    }
}
