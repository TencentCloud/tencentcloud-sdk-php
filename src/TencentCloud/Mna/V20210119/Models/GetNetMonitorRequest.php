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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetNetMonitor请求参数结构体
 *
 * @method string getDeviceId() 获取<p>设备id</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备id</p>
 * @method integer getBeginTime() 获取<p>开始时间</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method string getMetrics() 获取<p>统计指标（上行速率：&quot;TxRate&quot;:bit/s，下行速率：&quot;RxRate&quot;:bit/s，丢包：&quot;Loss&quot;:%，时延：&quot;RTT&quot;:ms）</p>
 * @method void setMetrics(string $Metrics) 设置<p>统计指标（上行速率：&quot;TxRate&quot;:bit/s，下行速率：&quot;RxRate&quot;:bit/s，丢包：&quot;Loss&quot;:%，时延：&quot;RTT&quot;:ms）</p>
 * @method integer getGatewayType() 获取<p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
 * @method void setGatewayType(integer $GatewayType) 设置<p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
 */
class GetNetMonitorRequest extends AbstractModel
{
    /**
     * @var string <p>设备id</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>开始时间</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>统计指标（上行速率：&quot;TxRate&quot;:bit/s，下行速率：&quot;RxRate&quot;:bit/s，丢包：&quot;Loss&quot;:%，时延：&quot;RTT&quot;:ms）</p>
     */
    public $Metrics;

    /**
     * @var integer <p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
     */
    public $GatewayType;

    /**
     * @param string $DeviceId <p>设备id</p>
     * @param integer $BeginTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param string $Metrics <p>统计指标（上行速率：&quot;TxRate&quot;:bit/s，下行速率：&quot;RxRate&quot;:bit/s，丢包：&quot;Loss&quot;:%，时延：&quot;RTT&quot;:ms）</p>
     * @param integer $GatewayType <p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }
    }
}
