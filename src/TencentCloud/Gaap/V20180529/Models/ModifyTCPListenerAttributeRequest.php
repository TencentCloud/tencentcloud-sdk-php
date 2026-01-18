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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTCPListenerAttribute请求参数结构体
 *
 * @method string getListenerId() 获取<p>监听器ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID</p>
 * @method string getGroupId() 获取<p>通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
 * @method void setGroupId(string $GroupId) 设置<p>通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
 * @method string getProxyId() 获取<p>通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
 * @method void setProxyId(string $ProxyId) 设置<p>通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
 * @method string getListenerName() 获取<p>监听器名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器名称</p>
 * @method string getScheduler() 获取<p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。注意：lrtt需要开通白名单；RealServerType 为 DOMAIN 不支持wrr 和 lrtt。</p>
 * @method void setScheduler(string $Scheduler) 设置<p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。注意：lrtt需要开通白名单；RealServerType 为 DOMAIN 不支持wrr 和 lrtt。</p>
 * @method integer getDelayLoop() 获取<p>源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。</p>
 * @method void setDelayLoop(integer $DelayLoop) 设置<p>源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。</p>
 * @method integer getConnectTimeout() 获取<p>源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置<p>源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。</p>
 * @method integer getHealthCheck() 获取<p>是否开启健康检查，1开启，0关闭。</p>
 * @method void setHealthCheck(integer $HealthCheck) 设置<p>是否开启健康检查，1开启，0关闭。</p>
 * @method integer getFailoverSwitch() 获取<p>源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启</p>
 * @method void setFailoverSwitch(integer $FailoverSwitch) 设置<p>源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启</p>
 * @method integer getHealthyThreshold() 获取<p>健康阈值，表示连续检查成功多少次数后认定源站健康。范围为1到10</p>
 * @method void setHealthyThreshold(integer $HealthyThreshold) 设置<p>健康阈值，表示连续检查成功多少次数后认定源站健康。范围为1到10</p>
 * @method integer getUnhealthyThreshold() 获取<p>不健康阈值，表示连续检查失败次数后认定源站不健康。范围为1到10</p>
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) 设置<p>不健康阈值，表示连续检查失败次数后认定源站不健康。范围为1到10</p>
 */
class ModifyTCPListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>监听器ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
     */
    public $GroupId;

    /**
     * @var string <p>通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
     */
    public $ProxyId;

    /**
     * @var string <p>监听器名称</p>
     */
    public $ListenerName;

    /**
     * @var string <p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。注意：lrtt需要开通白名单；RealServerType 为 DOMAIN 不支持wrr 和 lrtt。</p>
     */
    public $Scheduler;

    /**
     * @var integer <p>源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。</p>
     */
    public $DelayLoop;

    /**
     * @var integer <p>源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>是否开启健康检查，1开启，0关闭。</p>
     */
    public $HealthCheck;

    /**
     * @var integer <p>源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启</p>
     */
    public $FailoverSwitch;

    /**
     * @var integer <p>健康阈值，表示连续检查成功多少次数后认定源站健康。范围为1到10</p>
     */
    public $HealthyThreshold;

    /**
     * @var integer <p>不健康阈值，表示连续检查失败次数后认定源站不健康。范围为1到10</p>
     */
    public $UnhealthyThreshold;

    /**
     * @param string $ListenerId <p>监听器ID</p>
     * @param string $GroupId <p>通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
     * @param string $ProxyId <p>通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。</p>
     * @param string $ListenerName <p>监听器名称</p>
     * @param string $Scheduler <p>监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。注意：lrtt需要开通白名单；RealServerType 为 DOMAIN 不支持wrr 和 lrtt。</p>
     * @param integer $DelayLoop <p>源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。</p>
     * @param integer $ConnectTimeout <p>源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。</p>
     * @param integer $HealthCheck <p>是否开启健康检查，1开启，0关闭。</p>
     * @param integer $FailoverSwitch <p>源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启</p>
     * @param integer $HealthyThreshold <p>健康阈值，表示连续检查成功多少次数后认定源站健康。范围为1到10</p>
     * @param integer $UnhealthyThreshold <p>不健康阈值，表示连续检查失败次数后认定源站不健康。范围为1到10</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("FailoverSwitch",$param) and $param["FailoverSwitch"] !== null) {
            $this->FailoverSwitch = $param["FailoverSwitch"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }
    }
}
