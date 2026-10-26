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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 延迟优先路由配置
 *
 * @method array getRules() 获取<p>路由规则列表</p>
 * @method void setRules(array $Rules) 设置<p>路由规则列表</p>
 * @method string getLatencyMetric() 获取<p>延迟指标</p><p>枚举值：</p><ul><li>LLMLatency： LLM 延迟</li><li>NetworkLatency： 网络延迟</li></ul>
 * @method void setLatencyMetric(string $LatencyMetric) 设置<p>延迟指标</p><p>枚举值：</p><ul><li>LLMLatency： LLM 延迟</li><li>NetworkLatency： 网络延迟</li></ul>
 * @method string getRouteMode() 获取<p>路由策略</p><p>枚举值：</p><ul><li>FastMode： 快速模式</li><li>BalanceMode： 均衡模式</li></ul>
 * @method void setRouteMode(string $RouteMode) 设置<p>路由策略</p><p>枚举值：</p><ul><li>FastMode： 快速模式</li><li>BalanceMode： 均衡模式</li></ul>
 * @method integer getProbeIntervalMs() 获取<p>网络延迟探测间隔</p><p>单位：毫秒</p>
 * @method void setProbeIntervalMs(integer $ProbeIntervalMs) 设置<p>网络延迟探测间隔</p><p>单位：毫秒</p>
 * @method integer getProbeTimeoutMs() 获取<p>网络延迟探测超时时间</p><p>单位：毫秒</p>
 * @method void setProbeTimeoutMs(integer $ProbeTimeoutMs) 设置<p>网络延迟探测超时时间</p><p>单位：毫秒</p>
 */
class AIGWLatencyPriorityConfig extends AbstractModel
{
    /**
     * @var array <p>路由规则列表</p>
     */
    public $Rules;

    /**
     * @var string <p>延迟指标</p><p>枚举值：</p><ul><li>LLMLatency： LLM 延迟</li><li>NetworkLatency： 网络延迟</li></ul>
     */
    public $LatencyMetric;

    /**
     * @var string <p>路由策略</p><p>枚举值：</p><ul><li>FastMode： 快速模式</li><li>BalanceMode： 均衡模式</li></ul>
     */
    public $RouteMode;

    /**
     * @var integer <p>网络延迟探测间隔</p><p>单位：毫秒</p>
     */
    public $ProbeIntervalMs;

    /**
     * @var integer <p>网络延迟探测超时时间</p><p>单位：毫秒</p>
     */
    public $ProbeTimeoutMs;

    /**
     * @param array $Rules <p>路由规则列表</p>
     * @param string $LatencyMetric <p>延迟指标</p><p>枚举值：</p><ul><li>LLMLatency： LLM 延迟</li><li>NetworkLatency： 网络延迟</li></ul>
     * @param string $RouteMode <p>路由策略</p><p>枚举值：</p><ul><li>FastMode： 快速模式</li><li>BalanceMode： 均衡模式</li></ul>
     * @param integer $ProbeIntervalMs <p>网络延迟探测间隔</p><p>单位：毫秒</p>
     * @param integer $ProbeTimeoutMs <p>网络延迟探测超时时间</p><p>单位：毫秒</p>
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AIGWLatencyPriorityRouteRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("LatencyMetric",$param) and $param["LatencyMetric"] !== null) {
            $this->LatencyMetric = $param["LatencyMetric"];
        }

        if (array_key_exists("RouteMode",$param) and $param["RouteMode"] !== null) {
            $this->RouteMode = $param["RouteMode"];
        }

        if (array_key_exists("ProbeIntervalMs",$param) and $param["ProbeIntervalMs"] !== null) {
            $this->ProbeIntervalMs = $param["ProbeIntervalMs"];
        }

        if (array_key_exists("ProbeTimeoutMs",$param) and $param["ProbeTimeoutMs"] !== null) {
            $this->ProbeTimeoutMs = $param["ProbeTimeoutMs"];
        }
    }
}
