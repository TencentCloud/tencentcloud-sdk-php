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
 * CreateListener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method array getPorts() 获取要将监听器创建到哪些端口，每个端口对应一个新的监听器。
端口范围：1~65535
 * @method void setPorts(array $Ports) 设置要将监听器创建到哪些端口，每个端口对应一个新的监听器。
端口范围：1~65535
 * @method string getProtocol() 获取监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
 * @method void setProtocol(string $Protocol) 设置监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
 * @method array getListenerNames() 获取要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。
 * @method void setListenerNames(array $ListenerNames) 设置要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。
 * @method HealthCheck getHealthCheck() 获取健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method CertificateInput getCertificate() 获取证书相关信息。参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
 * @method void setCertificate(CertificateInput $Certificate) 设置证书相关信息。参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
 * @method integer getSessionExpireTime() 获取会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。
 * @method string getScheduler() 获取监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method void setScheduler(string $Scheduler) 设置监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
 * @method integer getSniSwitch() 获取是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。
 * @method string getTargetType() 获取后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。
 * @method void setTargetType(string $TargetType) 设置后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。
 * @method string getSessionType() 获取会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）
 * @method void setSessionType(string $SessionType) 设置会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）
 * @method integer getKeepaliveEnable() 获取是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
 * @method integer getEndPort() 获取创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)】。
 * @method void setEndPort(integer $EndPort) 设置创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)】。
 * @method boolean getDeregisterTargetRst() 获取解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
 * @method MultiCertInfo getMultiCertInfo() 获取证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
 * @method integer getMaxConn() 获取监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
 * @method void setMaxConn(integer $MaxConn) 设置监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
 * @method integer getMaxCps() 获取监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
 * @method void setMaxCps(integer $MaxCps) 设置监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
 * @method integer getIdleConnectTimeout() 获取空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。取值范围：共享型实例和独占型实例支持：300-900，性能容量型实例支持：300-1980。如需设置请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)。
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。取值范围：共享型实例和独占型实例支持：300-900，性能容量型实例支持：300-1980。如需设置请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)。
 * @method boolean getSnatEnable() 获取是否开启SNAT，True（开启）、False（关闭）。
默认为关闭。
 * @method void setSnatEnable(boolean $SnatEnable) 设置是否开启SNAT，True（开启）、False（关闭）。
默认为关闭。
 * @method array getFullEndPorts() 获取全端口段监听器的结束端口，端口范围：2 - 65535
 * @method void setFullEndPorts(array $FullEndPorts) 设置全端口段监听器的结束端口，端口范围：2 - 65535
 * @method boolean getH2cSwitch() 获取内网http监听器开启h2c开关，True（开启）、False（关闭）。
默认为关闭。
 * @method void setH2cSwitch(boolean $H2cSwitch) 设置内网http监听器开启h2c开关，True（开启）、False（关闭）。
默认为关闭。
 * @method boolean getSslCloseSwitch() 获取TCP_SSL监听器支持关闭SSL后仍然支持混绑，此参数为关闭开关。True（关闭）、False（开启）.
默认为关闭。
 * @method void setSslCloseSwitch(boolean $SslCloseSwitch) 设置TCP_SSL监听器支持关闭SSL后仍然支持混绑，此参数为关闭开关。True（关闭）、False（开启）.
默认为关闭。
 * @method string getDataCompressMode() 获取数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）
 * @method void setDataCompressMode(string $DataCompressMode) 设置数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var array 要将监听器创建到哪些端口，每个端口对应一个新的监听器。
端口范围：1~65535
     */
    public $Ports;

    /**
     * @var string 监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
     */
    public $Protocol;

    /**
     * @var array 要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。
     */
    public $ListenerNames;

    /**
     * @var HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     */
    public $HealthCheck;

    /**
     * @var CertificateInput 证书相关信息。参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
     */
    public $Certificate;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。
     */
    public $SessionExpireTime;

    /**
     * @var string 监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     */
    public $Scheduler;

    /**
     * @var integer 是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。
     */
    public $SniSwitch;

    /**
     * @var string 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。
     */
    public $TargetType;

    /**
     * @var string 会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）
     */
    public $SessionType;

    /**
     * @var integer 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
     */
    public $KeepaliveEnable;

    /**
     * @var integer 创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)】。
     */
    public $EndPort;

    /**
     * @var boolean 解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
     */
    public $DeregisterTargetRst;

    /**
     * @var MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
     */
    public $MultiCertInfo;

    /**
     * @var integer 监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
     */
    public $MaxConn;

    /**
     * @var integer 监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
     */
    public $MaxCps;

    /**
     * @var integer 空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。取值范围：共享型实例和独占型实例支持：300-900，性能容量型实例支持：300-1980。如需设置请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)。
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean 是否开启SNAT，True（开启）、False（关闭）。
默认为关闭。
     */
    public $SnatEnable;

    /**
     * @var array 全端口段监听器的结束端口，端口范围：2 - 65535
     */
    public $FullEndPorts;

    /**
     * @var boolean 内网http监听器开启h2c开关，True（开启）、False（关闭）。
默认为关闭。
     */
    public $H2cSwitch;

    /**
     * @var boolean TCP_SSL监听器支持关闭SSL后仍然支持混绑，此参数为关闭开关。True（关闭）、False（开启）.
默认为关闭。
     */
    public $SslCloseSwitch;

    /**
     * @var string 数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）
     */
    public $DataCompressMode;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param array $Ports 要将监听器创建到哪些端口，每个端口对应一个新的监听器。
端口范围：1~65535
     * @param string $Protocol 监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
     * @param array $ListenerNames 要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。
     * @param HealthCheck $HealthCheck 健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     * @param CertificateInput $Certificate 证书相关信息。参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
     * @param integer $SessionExpireTime 会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。
     * @param string $Scheduler 监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）、IP_HASH（按 IP 地址哈希）
默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。
     * @param integer $SniSwitch 是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。
     * @param string $TargetType 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。
     * @param string $SessionType 会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）
     * @param integer $KeepaliveEnable 是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。
若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 [内测申请](https://cloud.tencent.com/apply/p/tsodp6qm21)。
     * @param integer $EndPort 创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)】。
     * @param boolean $DeregisterTargetRst 解绑后端目标时，是否发RST给客户端，此参数仅适用于TCP监听器。
     * @param MultiCertInfo $MultiCertInfo 证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：
<li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li>
<li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
     * @param integer $MaxConn 监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
     * @param integer $MaxCps 监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。
     * @param integer $IdleConnectTimeout 空闲连接超时时间，此参数仅适用于TCP监听器，单位：秒。取值范围：共享型实例和独占型实例支持：300-900，性能容量型实例支持：300-1980。如需设置请通过 [工单申请](https://console.cloud.tencent.com/workorder/category)。
     * @param boolean $SnatEnable 是否开启SNAT，True（开启）、False（关闭）。
默认为关闭。
     * @param array $FullEndPorts 全端口段监听器的结束端口，端口范围：2 - 65535
     * @param boolean $H2cSwitch 内网http监听器开启h2c开关，True（开启）、False（关闭）。
默认为关闭。
     * @param boolean $SslCloseSwitch TCP_SSL监听器支持关闭SSL后仍然支持混绑，此参数为关闭开关。True（关闭）、False（开启）.
默认为关闭。
     * @param string $DataCompressMode 数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）
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

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerNames",$param) and $param["ListenerNames"] !== null) {
            $this->ListenerNames = $param["ListenerNames"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
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

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
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

        if (array_key_exists("SnatEnable",$param) and $param["SnatEnable"] !== null) {
            $this->SnatEnable = $param["SnatEnable"];
        }

        if (array_key_exists("FullEndPorts",$param) and $param["FullEndPorts"] !== null) {
            $this->FullEndPorts = $param["FullEndPorts"];
        }

        if (array_key_exists("H2cSwitch",$param) and $param["H2cSwitch"] !== null) {
            $this->H2cSwitch = $param["H2cSwitch"];
        }

        if (array_key_exists("SslCloseSwitch",$param) and $param["SslCloseSwitch"] !== null) {
            $this->SslCloseSwitch = $param["SslCloseSwitch"];
        }

        if (array_key_exists("DataCompressMode",$param) and $param["DataCompressMode"] !== null) {
            $this->DataCompressMode = $param["DataCompressMode"];
        }
    }
}
