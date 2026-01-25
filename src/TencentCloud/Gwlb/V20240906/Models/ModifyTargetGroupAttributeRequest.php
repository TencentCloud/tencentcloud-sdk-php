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
 * @method string getTargetGroupId() 获取<p>目标组的ID，可以通过<a href="https://cloud.tencent.com/document/product/214/40554">DescribeTargetGroups</a>获取。</p>
 * @method void setTargetGroupId(string $TargetGroupId) 设置<p>目标组的ID，可以通过<a href="https://cloud.tencent.com/document/product/214/40554">DescribeTargetGroups</a>获取。</p>
 * @method string getTargetGroupName() 获取<p>目标组的新名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method void setTargetGroupName(string $TargetGroupName) 设置<p>目标组的新名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method TargetGroupHealthCheck getHealthCheck() 获取<p>健康检查详情。</p>
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置<p>健康检查详情。</p>
 * @method boolean getAllDeadToAlive() 获取<p>是否支持全死全活。</p>
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置<p>是否支持全死全活。</p>
 * @method integer getTcpIdleConnectTimeout() 获取<p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
 * @method void setTcpIdleConnectTimeout(integer $TcpIdleConnectTimeout) 设置<p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
 * @method integer getOthersIdleConnectTimeout() 获取<p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
 * @method void setOthersIdleConnectTimeout(integer $OthersIdleConnectTimeout) 设置<p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
 * @method boolean getRescheduleUnbindRs() 获取<p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
 * @method void setRescheduleUnbindRs(boolean $RescheduleUnbindRs) 设置<p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
 * @method integer getRescheduleUnbindRsStartTime() 获取<p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method void setRescheduleUnbindRsStartTime(integer $RescheduleUnbindRsStartTime) 设置<p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method boolean getRescheduleUnhealthy() 获取<p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) 设置<p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
 * @method integer getRescheduleUnhealthyStartTime() 获取<p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method void setRescheduleUnhealthyStartTime(integer $RescheduleUnhealthyStartTime) 设置<p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>目标组的ID，可以通过<a href="https://cloud.tencent.com/document/product/214/40554">DescribeTargetGroups</a>获取。</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>目标组的新名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     */
    public $TargetGroupName;

    /**
     * @var TargetGroupHealthCheck <p>健康检查详情。</p>
     */
    public $HealthCheck;

    /**
     * @var boolean <p>是否支持全死全活。</p>
     */
    public $AllDeadToAlive;

    /**
     * @var integer <p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
     */
    public $TcpIdleConnectTimeout;

    /**
     * @var integer <p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
     */
    public $OthersIdleConnectTimeout;

    /**
     * @var boolean <p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
     */
    public $RescheduleUnbindRs;

    /**
     * @var integer <p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
     */
    public $RescheduleUnbindRsStartTime;

    /**
     * @var boolean <p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
     */
    public $RescheduleUnhealthy;

    /**
     * @var integer <p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
     */
    public $RescheduleUnhealthyStartTime;

    /**
     * @param string $TargetGroupId <p>目标组的ID，可以通过<a href="https://cloud.tencent.com/document/product/214/40554">DescribeTargetGroups</a>获取。</p>
     * @param string $TargetGroupName <p>目标组的新名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     * @param TargetGroupHealthCheck $HealthCheck <p>健康检查详情。</p>
     * @param boolean $AllDeadToAlive <p>是否支持全死全活。</p>
     * @param integer $TcpIdleConnectTimeout <p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
     * @param integer $OthersIdleConnectTimeout <p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
     * @param boolean $RescheduleUnbindRs <p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
     * @param integer $RescheduleUnbindRsStartTime <p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
     * @param boolean $RescheduleUnhealthy <p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
     * @param integer $RescheduleUnhealthyStartTime <p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
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
