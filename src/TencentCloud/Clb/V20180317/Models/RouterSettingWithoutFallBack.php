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
 * @method string getRoutingStrategy() 获取<p>路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
 * @method void setRoutingStrategy(string $RoutingStrategy) 设置<p>路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
 * @method string getCrossModelGroupRoutingStrategy() 获取<p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
 * @method void setCrossModelGroupRoutingStrategy(string $CrossModelGroupRoutingStrategy) 设置<p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
 * @method RoutingStrategyArgs getRoutingStrategyArgs() 获取<p>L2模型组内路由调度算法参数</p>
 * @method void setRoutingStrategyArgs(RoutingStrategyArgs $RoutingStrategyArgs) 设置<p>L2模型组内路由调度算法参数</p>
 * @method integer getNumRetries() 获取<p>CMR实例级别请求组内重试次数</p><p>取值范围：[0, 5]</p><p>默认值：2</p>
 * @method void setNumRetries(integer $NumRetries) 设置<p>CMR实例级别请求组内重试次数</p><p>取值范围：[0, 5]</p><p>默认值：2</p>
 */
class RouterSettingWithoutFallBack extends AbstractModel
{
    /**
     * @var string <p>路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
     */
    public $RoutingStrategy;

    /**
     * @var string <p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
     */
    public $CrossModelGroupRoutingStrategy;

    /**
     * @var RoutingStrategyArgs <p>L2模型组内路由调度算法参数</p>
     */
    public $RoutingStrategyArgs;

    /**
     * @var integer <p>CMR实例级别请求组内重试次数</p><p>取值范围：[0, 5]</p><p>默认值：2</p>
     */
    public $NumRetries;

    /**
     * @param string $RoutingStrategy <p>路由策略</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>LeastBusy： 最低繁忙路由</li><li>LatencyBasedRouting： 最低延迟路由</li><li>UsageBasedRouting： 用量均衡路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
     * @param string $CrossModelGroupRoutingStrategy <p>模型间路由策略。</p><p>枚举值：</p><ul><li>SimpleShuffle： 简单随机路由</li><li>CostBasedRouting： 最低积分路由</li></ul>
     * @param RoutingStrategyArgs $RoutingStrategyArgs <p>L2模型组内路由调度算法参数</p>
     * @param integer $NumRetries <p>CMR实例级别请求组内重试次数</p><p>取值范围：[0, 5]</p><p>默认值：2</p>
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

        if (array_key_exists("CrossModelGroupRoutingStrategy",$param) and $param["CrossModelGroupRoutingStrategy"] !== null) {
            $this->CrossModelGroupRoutingStrategy = $param["CrossModelGroupRoutingStrategy"];
        }

        if (array_key_exists("RoutingStrategyArgs",$param) and $param["RoutingStrategyArgs"] !== null) {
            $this->RoutingStrategyArgs = new RoutingStrategyArgs();
            $this->RoutingStrategyArgs->deserialize($param["RoutingStrategyArgs"]);
        }

        if (array_key_exists("NumRetries",$param) and $param["NumRetries"] !== null) {
            $this->NumRetries = $param["NumRetries"];
        }
    }
}
