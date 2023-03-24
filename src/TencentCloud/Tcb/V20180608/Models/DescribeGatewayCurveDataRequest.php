<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatewayCurveData请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getGatewayId() 获取网关id
 * @method void setGatewayId(string $GatewayId) 设置网关id
 * @method string getMetricName() 获取监控类型 GWQps GWBandwidth GwHttpError GwHttp404 GwHttp502 GwConnect GwCircuit
 * @method void setMetricName(string $MetricName) 设置监控类型 GWQps GWBandwidth GwHttpError GwHttp404 GwHttp502 GwConnect GwCircuit
 * @method string getStartTime() 获取监控起始时间
 * @method void setStartTime(string $StartTime) 设置监控起始时间
 * @method string getEndTime() 获取监控结束时间
 * @method void setEndTime(string $EndTime) 设置监控结束时间
 * @method string getGatewayVersion() 获取网关版本
 * @method void setGatewayVersion(string $GatewayVersion) 设置网关版本
 * @method string getGatewayRoute() 获取网关路由名称
 * @method void setGatewayRoute(string $GatewayRoute) 设置网关路由名称
 */
class DescribeGatewayCurveDataRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 网关id
     */
    public $GatewayId;

    /**
     * @var string 监控类型 GWQps GWBandwidth GwHttpError GwHttp404 GwHttp502 GwConnect GwCircuit
     */
    public $MetricName;

    /**
     * @var string 监控起始时间
     */
    public $StartTime;

    /**
     * @var string 监控结束时间
     */
    public $EndTime;

    /**
     * @var string 网关版本
     */
    public $GatewayVersion;

    /**
     * @var string 网关路由名称
     */
    public $GatewayRoute;

    /**
     * @param string $EnvId 环境id
     * @param string $GatewayId 网关id
     * @param string $MetricName 监控类型 GWQps GWBandwidth GwHttpError GwHttp404 GwHttp502 GwConnect GwCircuit
     * @param string $StartTime 监控起始时间
     * @param string $EndTime 监控结束时间
     * @param string $GatewayVersion 网关版本
     * @param string $GatewayRoute 网关路由名称
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }

        if (array_key_exists("GatewayRoute",$param) and $param["GatewayRoute"] !== null) {
            $this->GatewayRoute = $param["GatewayRoute"];
        }
    }
}
