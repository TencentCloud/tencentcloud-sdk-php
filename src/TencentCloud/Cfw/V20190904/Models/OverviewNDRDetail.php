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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览 NDR 带宽详情
 *
 * @method integer getStatus() 获取<p>NDR 能力或服务状态标识。</p>
 * @method void setStatus(integer $Status) 设置<p>NDR 能力或服务状态标识。</p>
 * @method integer getTotalMbps() 获取<p>NDR 总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setTotalMbps(integer $TotalMbps) 设置<p>NDR 总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getInMaxBps() 获取<p>入方向峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setInMaxBps(integer $InMaxBps) 设置<p>入方向峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method integer getOutMaxBps() 获取<p>出方向峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setOutMaxBps(integer $OutMaxBps) 设置<p>出方向峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method integer getMaxFlowBps() 获取<p>总体峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setMaxFlowBps(integer $MaxFlowBps) 设置<p>总体峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method float getFlowPercent() 获取<p>当前流量使用率。</p><p>单位：%</p>
 * @method void setFlowPercent(float $FlowPercent) 设置<p>当前流量使用率。</p><p>单位：%</p>
 */
class OverviewNDRDetail extends AbstractModel
{
    /**
     * @var integer <p>NDR 能力或服务状态标识。</p>
     */
    public $Status;

    /**
     * @var integer <p>NDR 总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $TotalMbps;

    /**
     * @var integer <p>入方向峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $InMaxBps;

    /**
     * @var integer <p>出方向峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $OutMaxBps;

    /**
     * @var integer <p>总体峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $MaxFlowBps;

    /**
     * @var float <p>当前流量使用率。</p><p>单位：%</p>
     */
    public $FlowPercent;

    /**
     * @param integer $Status <p>NDR 能力或服务状态标识。</p>
     * @param integer $TotalMbps <p>NDR 总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $InMaxBps <p>入方向峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param integer $OutMaxBps <p>出方向峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param integer $MaxFlowBps <p>总体峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param float $FlowPercent <p>当前流量使用率。</p><p>单位：%</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalMbps",$param) and $param["TotalMbps"] !== null) {
            $this->TotalMbps = $param["TotalMbps"];
        }

        if (array_key_exists("InMaxBps",$param) and $param["InMaxBps"] !== null) {
            $this->InMaxBps = $param["InMaxBps"];
        }

        if (array_key_exists("OutMaxBps",$param) and $param["OutMaxBps"] !== null) {
            $this->OutMaxBps = $param["OutMaxBps"];
        }

        if (array_key_exists("MaxFlowBps",$param) and $param["MaxFlowBps"] !== null) {
            $this->MaxFlowBps = $param["MaxFlowBps"];
        }

        if (array_key_exists("FlowPercent",$param) and $param["FlowPercent"] !== null) {
            $this->FlowPercent = $param["FlowPercent"];
        }
    }
}
