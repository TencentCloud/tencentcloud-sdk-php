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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyListener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method string getListenerId() 获取负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method string getListenerName() 获取新的监听器名称，最大长度255。
 * @method void setListenerName(string $ListenerName) 设置新的监听器名称，最大长度255。
 * @method integer getSessionExpireTime() 获取会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
 * @method HealthCheck getHealthCheck() 获取健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method CertificateInput getCertificate() 获取证书相关信息，此参数仅适用于HTTPS/TCP_SSL/QUIC监听器；此参数和MultiCertInfo不能同时传入。
 * @method void setCertificate(CertificateInput $Certificate) 设置证书相关信息，此参数仅适用于HTTPS/TCP_SSL/QUIC监听器；此参数和MultiCertInfo不能同时传入。
 * @method string getScheduler() 获取监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
分别表示按权重轮询、最小连接数， 默认为 WRR。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。七层监听器的均衡方式应在转发规则中修改。
 * @method void setScheduler(string $Scheduler) 设置监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
分别表示按权重轮询、最小连接数， 默认为 WRR。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。七层监听器的均衡方式应在转发规则中修改。
 * @method integer getSniSwitch() 获取是否开启SNI特性，此参数仅适用于HTTPS监听器。默认0，表示不开启，1表示开启。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI特性，此参数仅适用于HTTPS监听器。默认0，表示不开启，1表示开启。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
 * @method string getTargetType() 获取后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
 * @method void setTargetType(string $TargetType) 设置后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
 * @method integer getKeepaliveEnable() 获取是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
默认值0表示不开启，1表示开启。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
默认值0表示不开启，1表示开启。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
 * @method boolean getDeregisterTargetRst() 获取重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
 * @method string getSessionType() 获取会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。
默认为 NORMAL。
 * @method void setSessionType(string $SessionType) 设置会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。
默认为 NORMAL。
 * @method MultiCertInfo getMultiCertInfo() 获取证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
 * @method integer getMaxConn() 获取监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。基础网络实例不支持该参数。
默认为 -1，表示不限速。
 * @method void setMaxConn(integer $MaxConn) 设置监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。基础网络实例不支持该参数。
默认为 -1，表示不限速。
 * @method integer getMaxCps() 获取监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。基础网络实例不支持该参数。
默认为 -1 表示不限速。
 * @method void setMaxCps(integer $MaxCps) 设置监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。基础网络实例不支持该参数。
默认为 -1 表示不限速。
 * @method integer getIdleConnectTimeout() 获取空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。TCP监听器默认值：900，UDP监听器默认值：300s。取值范围：共享型实例和独占型实例支持：10～900，性能容量型实例支持：10~1980。如需设置超过1980s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。TCP监听器默认值：900，UDP监听器默认值：300s。取值范围：共享型实例和独占型实例支持：10～900，性能容量型实例支持：10~1980。如需设置超过1980s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
 * @method boolean getProxyProtocol() 获取TCP_SSL和QUIC是否支持PP
 * @method void setProxyProtocol(boolean $ProxyProtocol) 设置TCP_SSL和QUIC是否支持PP
 * @method boolean getSnatEnable() 获取是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时`透传客户端源IP`选项关闭，反之亦然。
 * @method void setSnatEnable(boolean $SnatEnable) 设置是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时`透传客户端源IP`选项关闭，反之亦然。
 * @method string getDataCompressMode() 获取数据压缩模式
 * @method void setDataCompressMode(string $DataCompressMode) 设置数据压缩模式
 * @method boolean getRescheduleTargetZeroWeight() 获取重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。
 * @method void setRescheduleTargetZeroWeight(boolean $RescheduleTargetZeroWeight) 设置重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。
 * @method boolean getRescheduleUnhealthy() 获取重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。 
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) 设置重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。 
 * @method boolean getRescheduleExpandTarget() 获取重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。
 * @method void setRescheduleExpandTarget(boolean $RescheduleExpandTarget) 设置重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。
 * @method integer getRescheduleStartTime() 获取重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) 设置重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。
 * @method integer getRescheduleInterval() 获取重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。
 * @method void setRescheduleInterval(integer $RescheduleInterval) 设置重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     */
    public $ListenerId;

    /**
     * @var string 新的监听器名称，最大长度255。
     */
    public $ListenerName;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     */
    public $HealthCheck;

    /**
     * @var CertificateInput 证书相关信息，此参数仅适用于HTTPS/TCP_SSL/QUIC监听器；此参数和MultiCertInfo不能同时传入。
     */
    public $Certificate;

    /**
     * @var string 监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
分别表示按权重轮询、最小连接数， 默认为 WRR。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。七层监听器的均衡方式应在转发规则中修改。
     */
    public $Scheduler;

    /**
     * @var integer 是否开启SNI特性，此参数仅适用于HTTPS监听器。默认0，表示不开启，1表示开启。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
     */
    public $SniSwitch;

    /**
     * @var string 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
     */
    public $TargetType;

    /**
     * @var integer 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
默认值0表示不开启，1表示开启。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
     */
    public $KeepaliveEnable;

    /**
     * @var boolean 重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
     */
    public $DeregisterTargetRst;

    /**
     * @var string 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。
默认为 NORMAL。
     */
    public $SessionType;

    /**
     * @var MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
     */
    public $MultiCertInfo;

    /**
     * @var integer 监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。基础网络实例不支持该参数。
默认为 -1，表示不限速。
     */
    public $MaxConn;

    /**
     * @var integer 监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。基础网络实例不支持该参数。
默认为 -1 表示不限速。
     */
    public $MaxCps;

    /**
     * @var integer 空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。TCP监听器默认值：900，UDP监听器默认值：300s。取值范围：共享型实例和独占型实例支持：10～900，性能容量型实例支持：10~1980。如需设置超过1980s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean TCP_SSL和QUIC是否支持PP
     */
    public $ProxyProtocol;

    /**
     * @var boolean 是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时`透传客户端源IP`选项关闭，反之亦然。
     */
    public $SnatEnable;

    /**
     * @var string 数据压缩模式
     */
    public $DataCompressMode;

    /**
     * @var boolean 重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。
     */
    public $RescheduleTargetZeroWeight;

    /**
     * @var boolean 重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。 
     */
    public $RescheduleUnhealthy;

    /**
     * @var boolean 重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。
     */
    public $RescheduleExpandTarget;

    /**
     * @var integer 重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。
     */
    public $RescheduleStartTime;

    /**
     * @var integer 重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。
     */
    public $RescheduleInterval;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     * @param string $ListenerId 负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     * @param string $ListenerName 新的监听器名称，最大长度255。
     * @param integer $SessionExpireTime 会话保持时间，单位：秒。可选值：30~3600，默认 0，表示不开启。此参数仅适用于TCP/UDP监听器。
     * @param HealthCheck $HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     * @param CertificateInput $Certificate 证书相关信息，此参数仅适用于HTTPS/TCP_SSL/QUIC监听器；此参数和MultiCertInfo不能同时传入。
     * @param string $Scheduler 监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
分别表示按权重轮询、最小连接数， 默认为 WRR。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。七层监听器的均衡方式应在转发规则中修改。
     * @param integer $SniSwitch 是否开启SNI特性，此参数仅适用于HTTPS监听器。默认0，表示不开启，1表示开启。注意：未开启SNI的监听器可以开启SNI；已开启SNI的监听器不能关闭SNI。
     * @param string $TargetType 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。
     * @param integer $KeepaliveEnable 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器。
默认值0表示不开启，1表示开启。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
     * @param boolean $DeregisterTargetRst 重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
     * @param string $SessionType 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。
使用场景：适用于TCP/UDP/TCP_SSL/QUIC监听器。
默认为 NORMAL。
     * @param MultiCertInfo $MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书；此参数仅适用于未开启SNI特性的HTTPS监听器。此参数和Certificate不能同时传入。
     * @param integer $MaxConn 监听器粒度并发连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格并发连接上限，其中-1表示关闭监听器粒度并发连接数限速。基础网络实例不支持该参数。
默认为 -1，表示不限速。
     * @param integer $MaxCps 监听器粒度新建连接数上限，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持。取值范围：1-实例规格新建连接上限，其中-1表示关闭监听器粒度新建连接数限速。基础网络实例不支持该参数。
默认为 -1 表示不限速。
     * @param integer $IdleConnectTimeout 空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。TCP监听器默认值：900，UDP监听器默认值：300s。取值范围：共享型实例和独占型实例支持：10～900，性能容量型实例支持：10~1980。如需设置超过1980s，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category),最大可设置到3600s。
     * @param boolean $ProxyProtocol TCP_SSL和QUIC是否支持PP
     * @param boolean $SnatEnable 是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时`透传客户端源IP`选项关闭，反之亦然。
     * @param string $DataCompressMode 数据压缩模式
     * @param boolean $RescheduleTargetZeroWeight 重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。
     * @param boolean $RescheduleUnhealthy 重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。 
     * @param boolean $RescheduleExpandTarget 重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。
     * @param integer $RescheduleStartTime 重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。
     * @param integer $RescheduleInterval 重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。
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

        if (array_key_exists("ProxyProtocol",$param) and $param["ProxyProtocol"] !== null) {
            $this->ProxyProtocol = $param["ProxyProtocol"];
        }

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }

        if (array_key_exists("DataCompressMode",$param) and $param["DataCompressMode"] !== null) {
            $this->DataCompressMode = $param["DataCompressMode"];
        }

        if (array_key_exists("RescheduleTargetZeroWeight",$param) and $param["RescheduleTargetZeroWeight"] !== null) {
            $this->RescheduleTargetZeroWeight = $param["RescheduleTargetZeroWeight"];
        }

        if (array_key_exists("RescheduleUnhealthy",$param) and $param["RescheduleUnhealthy"] !== null) {
            $this->RescheduleUnhealthy = $param["RescheduleUnhealthy"];
        }

        if (array_key_exists("RescheduleExpandTarget",$param) and $param["RescheduleExpandTarget"] !== null) {
            $this->RescheduleExpandTarget = $param["RescheduleExpandTarget"];
        }

        if (array_key_exists("RescheduleStartTime",$param) and $param["RescheduleStartTime"] !== null) {
            $this->RescheduleStartTime = $param["RescheduleStartTime"];
        }

        if (array_key_exists("RescheduleInterval",$param) and $param["RescheduleInterval"] !== null) {
            $this->RescheduleInterval = $param["RescheduleInterval"];
        }
    }
}
