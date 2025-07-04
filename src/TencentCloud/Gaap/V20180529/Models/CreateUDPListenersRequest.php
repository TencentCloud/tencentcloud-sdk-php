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
 * CreateUDPListeners请求参数结构体
 *
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method array getPorts() 获取监听器端口列表
 * @method void setPorts(array $Ports) 设置监听器端口列表
 * @method string getScheduler() 获取监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method void setScheduler(string $Scheduler) 设置监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method string getRealServerType() 获取监听器绑定源站类型。IP表示IP地址，DOMAIN表示域名。
 * @method void setRealServerType(string $RealServerType) 设置监听器绑定源站类型。IP表示IP地址，DOMAIN表示域名。
 * @method string getProxyId() 获取通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setProxyId(string $ProxyId) 设置通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method string getGroupId() 获取通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setGroupId(string $GroupId) 设置通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method array getRealServerPorts() 获取源站端口列表，该参数仅支持v1版本监听器和通道组监听器
 * @method void setRealServerPorts(array $RealServerPorts) 设置源站端口列表，该参数仅支持v1版本监听器和通道组监听器
 * @method integer getDelayLoop() 获取源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
 * @method void setDelayLoop(integer $DelayLoop) 设置源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
 * @method integer getConnectTimeout() 获取源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
 * @method integer getHealthyThreshold() 获取健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
 * @method void setHealthyThreshold(integer $HealthyThreshold) 设置健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
 * @method integer getUnhealthyThreshold() 获取不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) 设置不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
 * @method integer getFailoverSwitch() 获取源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
 * @method void setFailoverSwitch(integer $FailoverSwitch) 设置源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
 * @method integer getHealthCheck() 获取源站是否开启健康检查：1开启，0关闭。
 * @method void setHealthCheck(integer $HealthCheck) 设置源站是否开启健康检查：1开启，0关闭。
 * @method string getCheckType() 获取UDP源站健康类型。PORT表示检查端口，PING表示PING。
 * @method void setCheckType(string $CheckType) 设置UDP源站健康类型。PORT表示检查端口，PING表示PING。
 * @method integer getCheckPort() 获取UDP源站健康检查探测端口。
 * @method void setCheckPort(integer $CheckPort) 设置UDP源站健康检查探测端口。
 * @method string getContextType() 获取UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
 * @method void setContextType(string $ContextType) 设置UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
 * @method string getSendContext() 获取UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
 * @method void setSendContext(string $SendContext) 设置UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
 * @method string getRecvContext() 获取UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
 * @method void setRecvContext(string $RecvContext) 设置UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
 */
class CreateUDPListenersRequest extends AbstractModel
{
    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var array 监听器端口列表
     */
    public $Ports;

    /**
     * @var string 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     */
    public $Scheduler;

    /**
     * @var string 监听器绑定源站类型。IP表示IP地址，DOMAIN表示域名。
     */
    public $RealServerType;

    /**
     * @var string 通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     */
    public $ProxyId;

    /**
     * @var string 通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     */
    public $GroupId;

    /**
     * @var array 源站端口列表，该参数仅支持v1版本监听器和通道组监听器
     */
    public $RealServerPorts;

    /**
     * @var integer 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
     */
    public $DelayLoop;

    /**
     * @var integer 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
     */
    public $ConnectTimeout;

    /**
     * @var integer 健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
     */
    public $HealthyThreshold;

    /**
     * @var integer 不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
     */
    public $UnhealthyThreshold;

    /**
     * @var integer 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
     */
    public $FailoverSwitch;

    /**
     * @var integer 源站是否开启健康检查：1开启，0关闭。
     */
    public $HealthCheck;

    /**
     * @var string UDP源站健康类型。PORT表示检查端口，PING表示PING。
     */
    public $CheckType;

    /**
     * @var integer UDP源站健康检查探测端口。
     */
    public $CheckPort;

    /**
     * @var string UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
     */
    public $ContextType;

    /**
     * @var string UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
     */
    public $SendContext;

    /**
     * @var string UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
     */
    public $RecvContext;

    /**
     * @param string $ListenerName 监听器名称
     * @param array $Ports 监听器端口列表
     * @param string $Scheduler 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     * @param string $RealServerType 监听器绑定源站类型。IP表示IP地址，DOMAIN表示域名。
     * @param string $ProxyId 通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param string $GroupId 通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param array $RealServerPorts 源站端口列表，该参数仅支持v1版本监听器和通道组监听器
     * @param integer $DelayLoop 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
     * @param integer $ConnectTimeout 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
     * @param integer $HealthyThreshold 健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
     * @param integer $UnhealthyThreshold 不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
     * @param integer $FailoverSwitch 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
     * @param integer $HealthCheck 源站是否开启健康检查：1开启，0关闭。
     * @param string $CheckType UDP源站健康类型。PORT表示检查端口，PING表示PING。
     * @param integer $CheckPort UDP源站健康检查探测端口。
     * @param string $ContextType UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
     * @param string $SendContext UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
     * @param string $RecvContext UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RealServerPorts",$param) and $param["RealServerPorts"] !== null) {
            $this->RealServerPorts = $param["RealServerPorts"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }

        if (array_key_exists("FailoverSwitch",$param) and $param["FailoverSwitch"] !== null) {
            $this->FailoverSwitch = $param["FailoverSwitch"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }
    }
}
