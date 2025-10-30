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
 * 云原生网关健康检查配置
 *
 * @method boolean getEnableActiveHealthCheck() 获取开启主动健康检查
 * @method void setEnableActiveHealthCheck(boolean $EnableActiveHealthCheck) 设置开启主动健康检查
 * @method KongActiveHealthCheck getActiveHealthCheck() 获取主动健康检查配置
 * @method void setActiveHealthCheck(KongActiveHealthCheck $ActiveHealthCheck) 设置主动健康检查配置
 * @method boolean getEnablePassiveHealthCheck() 获取开启被动健康检查
 * @method void setEnablePassiveHealthCheck(boolean $EnablePassiveHealthCheck) 设置开启被动健康检查
 * @method KongPassiveHealthCheck getPassiveHealthCheck() 获取被动健康检查配置
 * @method void setPassiveHealthCheck(KongPassiveHealthCheck $PassiveHealthCheck) 设置被动健康检查配置
 * @method integer getSuccesses() 获取连续健康阈值，单位：次
 * @method void setSuccesses(integer $Successes) 设置连续健康阈值，单位：次
 * @method integer getFailures() 获取连续异常阈值，单位：次	
 * @method void setFailures(integer $Failures) 设置连续异常阈值，单位：次	
 * @method integer getTimeouts() 获取超时阈值，单位：次
 * @method void setTimeouts(integer $Timeouts) 设置超时阈值，单位：次
 * @method array getHealthyHttpStatuses() 获取健康HTTP状态码
 * @method void setHealthyHttpStatuses(array $HealthyHttpStatuses) 设置健康HTTP状态码
 * @method array getUnhealthyHttpStatuses() 获取异常HTTP状态码
 * @method void setUnhealthyHttpStatuses(array $UnhealthyHttpStatuses) 设置异常HTTP状态码
 * @method boolean getIgnoreZeroWeightNodes() 获取健康检查监控上报的数据屏蔽权重为0的节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreZeroWeightNodes(boolean $IgnoreZeroWeightNodes) 设置健康检查监控上报的数据屏蔽权重为0的节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getZeroWeightHeathCheck() 获取健康检查支持权重为0节点
 * @method void setZeroWeightHeathCheck(boolean $ZeroWeightHeathCheck) 设置健康检查支持权重为0节点
 */
class UpstreamHealthCheckConfig extends AbstractModel
{
    /**
     * @var boolean 开启主动健康检查
     */
    public $EnableActiveHealthCheck;

    /**
     * @var KongActiveHealthCheck 主动健康检查配置
     */
    public $ActiveHealthCheck;

    /**
     * @var boolean 开启被动健康检查
     */
    public $EnablePassiveHealthCheck;

    /**
     * @var KongPassiveHealthCheck 被动健康检查配置
     */
    public $PassiveHealthCheck;

    /**
     * @var integer 连续健康阈值，单位：次
     */
    public $Successes;

    /**
     * @var integer 连续异常阈值，单位：次	
     */
    public $Failures;

    /**
     * @var integer 超时阈值，单位：次
     */
    public $Timeouts;

    /**
     * @var array 健康HTTP状态码
     */
    public $HealthyHttpStatuses;

    /**
     * @var array 异常HTTP状态码
     */
    public $UnhealthyHttpStatuses;

    /**
     * @var boolean 健康检查监控上报的数据屏蔽权重为0的节点
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IgnoreZeroWeightNodes;

    /**
     * @var boolean 健康检查支持权重为0节点
     */
    public $ZeroWeightHeathCheck;

    /**
     * @param boolean $EnableActiveHealthCheck 开启主动健康检查
     * @param KongActiveHealthCheck $ActiveHealthCheck 主动健康检查配置
     * @param boolean $EnablePassiveHealthCheck 开启被动健康检查
     * @param KongPassiveHealthCheck $PassiveHealthCheck 被动健康检查配置
     * @param integer $Successes 连续健康阈值，单位：次
     * @param integer $Failures 连续异常阈值，单位：次	
     * @param integer $Timeouts 超时阈值，单位：次
     * @param array $HealthyHttpStatuses 健康HTTP状态码
     * @param array $UnhealthyHttpStatuses 异常HTTP状态码
     * @param boolean $IgnoreZeroWeightNodes 健康检查监控上报的数据屏蔽权重为0的节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ZeroWeightHeathCheck 健康检查支持权重为0节点
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
        if (array_key_exists("EnableActiveHealthCheck",$param) and $param["EnableActiveHealthCheck"] !== null) {
            $this->EnableActiveHealthCheck = $param["EnableActiveHealthCheck"];
        }

        if (array_key_exists("ActiveHealthCheck",$param) and $param["ActiveHealthCheck"] !== null) {
            $this->ActiveHealthCheck = new KongActiveHealthCheck();
            $this->ActiveHealthCheck->deserialize($param["ActiveHealthCheck"]);
        }

        if (array_key_exists("EnablePassiveHealthCheck",$param) and $param["EnablePassiveHealthCheck"] !== null) {
            $this->EnablePassiveHealthCheck = $param["EnablePassiveHealthCheck"];
        }

        if (array_key_exists("PassiveHealthCheck",$param) and $param["PassiveHealthCheck"] !== null) {
            $this->PassiveHealthCheck = new KongPassiveHealthCheck();
            $this->PassiveHealthCheck->deserialize($param["PassiveHealthCheck"]);
        }

        if (array_key_exists("Successes",$param) and $param["Successes"] !== null) {
            $this->Successes = $param["Successes"];
        }

        if (array_key_exists("Failures",$param) and $param["Failures"] !== null) {
            $this->Failures = $param["Failures"];
        }

        if (array_key_exists("Timeouts",$param) and $param["Timeouts"] !== null) {
            $this->Timeouts = $param["Timeouts"];
        }

        if (array_key_exists("HealthyHttpStatuses",$param) and $param["HealthyHttpStatuses"] !== null) {
            $this->HealthyHttpStatuses = $param["HealthyHttpStatuses"];
        }

        if (array_key_exists("UnhealthyHttpStatuses",$param) and $param["UnhealthyHttpStatuses"] !== null) {
            $this->UnhealthyHttpStatuses = $param["UnhealthyHttpStatuses"];
        }

        if (array_key_exists("IgnoreZeroWeightNodes",$param) and $param["IgnoreZeroWeightNodes"] !== null) {
            $this->IgnoreZeroWeightNodes = $param["IgnoreZeroWeightNodes"];
        }

        if (array_key_exists("ZeroWeightHeathCheck",$param) and $param["ZeroWeightHeathCheck"] !== null) {
            $this->ZeroWeightHeathCheck = $param["ZeroWeightHeathCheck"];
        }
    }
}
