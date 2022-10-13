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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UDP类型监听器信息
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method integer getRealServerPort() 获取监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerPort(integer $RealServerPort) 设置监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealServerType() 获取监听器绑定源站类型
 * @method void setRealServerType(string $RealServerType) 设置监听器绑定源站类型
 * @method string getProtocol() 获取监听器协议， UDP
 * @method void setProtocol(string $Protocol) 设置监听器协议， UDP
 * @method integer getListenerStatus() 获取监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 * @method void setListenerStatus(integer $ListenerStatus) 设置监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 * @method string getScheduler() 获取监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method void setScheduler(string $Scheduler) 设置监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
 * @method integer getBindStatus() 获取监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
 * @method void setBindStatus(integer $BindStatus) 设置监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
 * @method array getRealServerSet() 获取监听器绑定的源站信息
 * @method void setRealServerSet(array $RealServerSet) 设置监听器绑定的源站信息
 * @method integer getCreateTime() 获取监听器创建时间，Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置监听器创建时间，Unix时间戳
 * @method integer getSessionPersist() 获取是否开启会话保持选项：0关闭， 非0开启，非0值为会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionPersist(integer $SessionPersist) 设置是否开启会话保持选项：0关闭， 非0开启，非0值为会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayLoop() 获取源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayLoop(integer $DelayLoop) 设置源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConnectTimeout() 获取源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthyThreshold() 获取健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthyThreshold(integer $HealthyThreshold) 设置健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnhealthyThreshold() 获取不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) 设置不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailoverSwitch() 获取源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailoverSwitch(integer $FailoverSwitch) 设置源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthCheck() 获取源站是否开启健康检查：1开启，0关闭。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(integer $HealthCheck) 设置源站是否开启健康检查：1开启，0关闭。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckType() 获取UDP源站健康类型。PORT表示检查端口，PING表示PING。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckType(string $CheckType) 设置UDP源站健康类型。PORT表示检查端口，PING表示PING。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckPort() 获取UDP源站健康检查探测端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckPort(integer $CheckPort) 设置UDP源站健康检查探测端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContextType() 获取UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextType(string $ContextType) 设置UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendContext() 获取UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendContext(string $SendContext) 设置UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecvContext() 获取UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecvContext(string $RecvContext) 设置UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyId() 获取监听器的通道ID，如果监听器属于通道组，则为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyId(string $ProxyId) 设置监听器的通道ID，如果监听器属于通道组，则为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取监听器的通道组ID，如果监听器属于通道，则为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置监听器的通道组ID，如果监听器属于通道，则为null
注意：此字段可能返回 null，表示取不到有效值。
 */
class UDPListener extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口
     */
    public $Port;

    /**
     * @var integer 监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerPort;

    /**
     * @var string 监听器绑定源站类型
     */
    public $RealServerType;

    /**
     * @var string 监听器协议， UDP
     */
    public $Protocol;

    /**
     * @var integer 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     */
    public $ListenerStatus;

    /**
     * @var string 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     */
    public $Scheduler;

    /**
     * @var integer 监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
     */
    public $BindStatus;

    /**
     * @var array 监听器绑定的源站信息
     */
    public $RealServerSet;

    /**
     * @var integer 监听器创建时间，Unix时间戳
     */
    public $CreateTime;

    /**
     * @var integer 是否开启会话保持选项：0关闭， 非0开启，非0值为会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionPersist;

    /**
     * @var integer 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayLoop;

    /**
     * @var integer 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectTimeout;

    /**
     * @var integer 健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthyThreshold;

    /**
     * @var integer 不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnhealthyThreshold;

    /**
     * @var integer 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailoverSwitch;

    /**
     * @var integer 源站是否开启健康检查：1开启，0关闭。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var string UDP源站健康类型。PORT表示检查端口，PING表示PING。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckType;

    /**
     * @var integer UDP源站健康检查探测端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckPort;

    /**
     * @var string UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextType;

    /**
     * @var string UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendContext;

    /**
     * @var string UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecvContext;

    /**
     * @var string 监听器的通道ID，如果监听器属于通道组，则为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyId;

    /**
     * @var string 监听器的通道组ID，如果监听器属于通道，则为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口
     * @param integer $RealServerPort 监听器转发源站端口，仅V1版本通道或通道组监听器有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealServerType 监听器绑定源站类型
     * @param string $Protocol 监听器协议， UDP
     * @param integer $ListenerStatus 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     * @param string $Scheduler 监听器源站访问策略，其中：rr表示轮询；wrr表示加权轮询；lc表示最小连接数；lrtt表示最小时延。
     * @param integer $BindStatus 监听器绑定源站状态， 0表示正常，1表示IP异常，2表示域名解析异常
     * @param array $RealServerSet 监听器绑定的源站信息
     * @param integer $CreateTime 监听器创建时间，Unix时间戳
     * @param integer $SessionPersist 是否开启会话保持选项：0关闭， 非0开启，非0值为会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayLoop 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConnectTimeout 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthyThreshold 健康阈值，表示连续检查成功多少次后认定源站健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnhealthyThreshold 不健康阈值，表示连续检查失败多少次数后认为源站不健康。范围为1到10
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailoverSwitch 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthCheck 源站是否开启健康检查：1开启，0关闭。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckType UDP源站健康类型。PORT表示检查端口，PING表示PING。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckPort UDP源站健康检查探测端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContextType UDP源站健康检查端口探测报文类型：TEXT表示文本。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendContext UDP源站健康检查端口探测发送报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecvContext UDP源站健康检查端口探测接收报文。仅在健康检查类型为PORT时使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyId 监听器的通道ID，如果监听器属于通道组，则为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 监听器的通道组ID，如果监听器属于通道，则为null
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
