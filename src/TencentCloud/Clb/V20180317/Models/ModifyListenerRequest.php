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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyListener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getListenerId() 获取负载均衡监听器ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID。
 * @method string getListenerName() 获取新的监听器名称。
 * @method void setListenerName(string $ListenerName) 设置新的监听器名称。
 * @method integer getSessionExpireTime() 获取会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
 * @method HealthCheck getHealthCheck() 获取健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL监听器。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL监听器。
 * @method CertificateInput getCertificate() 获取证书相关信息，此参数仅适用于HTTPS/TCP_SSL监听器；此参数和MultiCertInfo不能同时传入。
 * @method void setCertificate(CertificateInput $Certificate) 设置证书相关信息，此参数仅适用于HTTPS/TCP_SSL监听器；此参数和MultiCertInfo不能同时传入。
 * @method string getScheduler() 获取监听器转发的方式。可选值：WRR、LEAST_CONN
分别表示按权重轮询、最小连接数， 默认为 WRR。
 * @method void setScheduler(string $Scheduler) 设置监听器转发的方式。可选值：WRR、LEAST_CONN
分别表示按权重轮询、最小连接数， 默认为 WRR。
 * @method integer getSniSwitch() 获取是否开启SNI特性，此参数仅适用于HTTPS监听器。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI特性，此参数仅适用于HTTPS监听器。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
 * @method string getTargetType() 获取后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
 * @method void setTargetType(string $TargetType) 设置后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
 * @method integer getKeepaliveEnable() 获取是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
 * @method boolean getDeregisterTargetRst() 获取解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
 * @method string getSessionType() 获取会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
 * @method void setSessionType(string $SessionType) 设置会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
 * @method MultiCertInfo getMultiCertInfo() 获取证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
 * @method integer getMaxConn() 获取监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。
 * @method void setMaxConn(integer $MaxConn) 设置监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。
 * @method integer getMaxCps() 获取监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。
 * @method void setMaxCps(integer $MaxCps) 设置监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。
 * @method integer getIdleConnectTimeout() 获取空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。默认值：900，取值范围：共享型实例和独占型实例支持：300～900，性能容量型实例支持：300~2000。如需设置超过2000s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。默认值：900，取值范围：共享型实例和独占型实例支持：300～900，性能容量型实例支持：300~2000。如需设置超过2000s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 新的监听器名称。
     */
    public $ListenerName;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL监听器。
     */
    public $HealthCheck;

    /**
     * @var CertificateInput 证书相关信息，此参数仅适用于HTTPS/TCP_SSL监听器；此参数和MultiCertInfo不能同时传入。
     */
    public $Certificate;

    /**
     * @var string 监听器转发的方式。可选值：WRR、LEAST_CONN
分别表示按权重轮询、最小连接数， 默认为 WRR。
     */
    public $Scheduler;

    /**
     * @var integer 是否开启SNI特性，此参数仅适用于HTTPS监听器。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
     */
    public $SniSwitch;

    /**
     * @var string 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
     */
    public $TargetType;

    /**
     * @var integer 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
     */
    public $KeepaliveEnable;

    /**
     * @var boolean 解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
     */
    public $DeregisterTargetRst;

    /**
     * @var string 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
     */
    public $SessionType;

    /**
     * @var MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
     */
    public $MultiCertInfo;

    /**
     * @var integer 监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。
     */
    public $MaxConn;

    /**
     * @var integer 监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。
     */
    public $MaxCps;

    /**
     * @var integer 空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。默认值：900，取值范围：共享型实例和独占型实例支持：300～900，性能容量型实例支持：300~2000。如需设置超过2000s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
     */
    public $IdleConnectTimeout;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $ListenerId 负载均衡监听器ID。
     * @param string $ListenerName 新的监听器名称。
     * @param integer $SessionExpireTime 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
     * @param HealthCheck $HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL监听器。
     * @param CertificateInput $Certificate 证书相关信息，此参数仅适用于HTTPS/TCP_SSL监听器；此参数和MultiCertInfo不能同时传入。
     * @param string $Scheduler 监听器转发的方式。可选值：WRR、LEAST_CONN
分别表示按权重轮询、最小连接数， 默认为 WRR。
     * @param integer $SniSwitch 是否开启SNI特性，此参数仅适用于HTTPS监听器。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
     * @param string $TargetType 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
     * @param integer $KeepaliveEnable 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
     * @param boolean $DeregisterTargetRst 解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
     * @param string $SessionType 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
     * @param MultiCertInfo $MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
     * @param integer $MaxConn 监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。
     * @param integer $MaxCps 监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。
     * @param integer $IdleConnectTimeout 空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。默认值：900，取值范围：共享型实例和独占型实例支持：300～900，性能容量型实例支持：300~2000。如需设置超过2000s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("MultiCertInfo",$param) and $param["MultiCertInfo"] !== null) {
            $this->MultiCertInfo = new MultiCertInfo();
            $this->MultiCertInfo->deserialize($param["MultiCertInfo"]);
        }

        if (array_key_exists("MaxConn",$param) and $param["MaxConn"] !== null) {
            $this->MaxConn = $param["MaxConn"];
        }

        if (array_key_exists("MaxCps",$param) and $param["MaxCps"] !== null) {
            $this->MaxCps = $param["MaxCps"];
        }

        if (array_key_exists("IdleConnectTimeout",$param) and $param["IdleConnectTimeout"] !== null) {
            $this->IdleConnectTimeout = $param["IdleConnectTimeout"];
        }
    }
}
