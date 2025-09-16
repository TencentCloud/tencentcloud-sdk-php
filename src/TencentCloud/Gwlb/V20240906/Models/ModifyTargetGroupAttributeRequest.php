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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 * @method string getTargetGroupName() 获取目标组的新名称。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的新名称。
 * @method TargetGroupHealthCheck getHealthCheck() 获取健康检查详情。
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置健康检查详情。
 * @method boolean getAllDeadToAlive() 获取是否支持全死全活。
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置是否支持全死全活。
 * @method integer getTcpIdleConnectTimeout() 获取TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。
 * @method void setTcpIdleConnectTimeout(integer $TcpIdleConnectTimeout) 设置TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。
 * @method integer getOthersIdleConnectTimeout() 获取其他协议连接空闲超时时间，可配置5s-180s，默认120s
 * @method void setOthersIdleConnectTimeout(integer $OthersIdleConnectTimeout) 设置其他协议连接空闲超时时间，可配置5s-180s，默认120s
 * @method boolean getRescheduleUnbindRs() 获取重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。
 * @method void setRescheduleUnbindRs(boolean $RescheduleUnbindRs) 设置重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。
 * @method integer getRescheduleUnbindRsStartTime() 获取解绑RS后开启重调度的时间，可配置0s-3600s，默认0s
 * @method void setRescheduleUnbindRsStartTime(integer $RescheduleUnbindRsStartTime) 设置解绑RS后开启重调度的时间，可配置0s-3600s，默认0s
 * @method boolean getRescheduleUnhealthy() 获取重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) 设置重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。
 * @method integer getRescheduleUnhealthyStartTime() 获取后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s
 * @method void setRescheduleUnhealthyStartTime(integer $RescheduleUnhealthyStartTime) 设置后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的新名称。
     */
    public $TargetGroupName;

    /**
     * @var TargetGroupHealthCheck 健康检查详情。
     */
    public $HealthCheck;

    /**
     * @var boolean 是否支持全死全活。
     */
    public $AllDeadToAlive;

    /**
     * @var integer TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。
     */
    public $TcpIdleConnectTimeout;

    /**
     * @var integer 其他协议连接空闲超时时间，可配置5s-180s，默认120s
     */
    public $OthersIdleConnectTimeout;

    /**
     * @var boolean 重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。
     */
    public $RescheduleUnbindRs;

    /**
     * @var integer 解绑RS后开启重调度的时间，可配置0s-3600s，默认0s
     */
    public $RescheduleUnbindRsStartTime;

    /**
     * @var boolean 重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。
     */
    public $RescheduleUnhealthy;

    /**
     * @var integer 后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s
     */
    public $RescheduleUnhealthyStartTime;

    /**
     * @param string $TargetGroupId 目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
     * @param string $TargetGroupName 目标组的新名称。
     * @param TargetGroupHealthCheck $HealthCheck 健康检查详情。
     * @param boolean $AllDeadToAlive 是否支持全死全活。
     * @param integer $TcpIdleConnectTimeout TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。
     * @param integer $OthersIdleConnectTimeout 其他协议连接空闲超时时间，可配置5s-180s，默认120s
     * @param boolean $RescheduleUnbindRs 重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。
     * @param integer $RescheduleUnbindRsStartTime 解绑RS后开启重调度的时间，可配置0s-3600s，默认0s
     * @param boolean $RescheduleUnhealthy 重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。
     * @param integer $RescheduleUnhealthyStartTime 后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }

        if (array_key_exists("TcpIdleConnectTimeout",$param) and $param["TcpIdleConnectTimeout"] !== null) {
            $this->TcpIdleConnectTimeout = $param["TcpIdleConnectTimeout"];
        }

        if (array_key_exists("OthersIdleConnectTimeout",$param) and $param["OthersIdleConnectTimeout"] !== null) {
            $this->OthersIdleConnectTimeout = $param["OthersIdleConnectTimeout"];
        }

        if (array_key_exists("RescheduleUnbindRs",$param) and $param["RescheduleUnbindRs"] !== null) {
            $this->RescheduleUnbindRs = $param["RescheduleUnbindRs"];
        }

        if (array_key_exists("RescheduleUnbindRsStartTime",$param) and $param["RescheduleUnbindRsStartTime"] !== null) {
            $this->RescheduleUnbindRsStartTime = $param["RescheduleUnbindRsStartTime"];
        }

        if (array_key_exists("RescheduleUnhealthy",$param) and $param["RescheduleUnhealthy"] !== null) {
            $this->RescheduleUnhealthy = $param["RescheduleUnhealthy"];
        }

        if (array_key_exists("RescheduleUnhealthyStartTime",$param) and $param["RescheduleUnhealthyStartTime"] !== null) {
            $this->RescheduleUnhealthyStartTime = $param["RescheduleUnhealthyStartTime"];
        }
    }
}
