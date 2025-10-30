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
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getBeginTime() 获取开始时间
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getMetrics() 获取统计指标（上行速率："TxRate":bit/s，下行速率："RxRate":bit/s，丢包："Loss":%，时延："RTT":ms）
 * @method void setMetrics(string $Metrics) 设置统计指标（上行速率："TxRate":bit/s，下行速率："RxRate":bit/s，丢包："Loss":%，时延："RTT":ms）
 * @method integer getGatewayType() 获取网关类型。0：公有云网关；1：自有网关。不传默认为0。
 * @method void setGatewayType(integer $GatewayType) 设置网关类型。0：公有云网关；1：自有网关。不传默认为0。
 */
class GetNetMonitorRequest extends AbstractModel
{
    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var integer 开始时间
     */
    public $BeginTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 统计指标（上行速率："TxRate":bit/s，下行速率："RxRate":bit/s，丢包："Loss":%，时延："RTT":ms）
     */
    public $Metrics;

    /**
     * @var integer 网关类型。0：公有云网关；1：自有网关。不传默认为0。
     */
    public $GatewayType;

    /**
     * @param string $DeviceId 设备id
     * @param integer $BeginTime 开始时间
     * @param integer $EndTime 结束时间
     * @param string $Metrics 统计指标（上行速率："TxRate":bit/s，下行速率："RxRate":bit/s，丢包："Loss":%，时延："RTT":ms）
     * @param integer $GatewayType 网关类型。0：公有云网关；1：自有网关。不传默认为0。
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
