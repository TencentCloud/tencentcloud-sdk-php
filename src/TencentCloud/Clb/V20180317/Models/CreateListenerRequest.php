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
 * CreateListener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
 * @method array getPorts() 获取<p>要将监听器创建到哪些端口，每个端口对应一个新的监听器。<br>端口范围：1~65535</p>
 * @method void setPorts(array $Ports) 设置<p>要将监听器创建到哪些端口，每个端口对应一个新的监听器。<br>端口范围：1~65535</p>
 * @method string getProtocol() 获取<p>监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。</p>
 * @method void setProtocol(string $Protocol) 设置<p>监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。</p>
 * @method array getListenerNames() 获取<p>要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method void setListenerNames(array $ListenerNames) 设置<p>要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method HealthCheck getHealthCheck() 获取<p>健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置<p>健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
 * @method CertificateInput getCertificate() 获取<p>证书相关信息。参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
 * @method void setCertificate(CertificateInput $Certificate) 设置<p>证书相关信息。参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
 * @method integer getSessionExpireTime() 获取<p>会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置<p>会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。</p>
 * @method string getScheduler() 获取<p>监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）<br>默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
 * @method void setScheduler(string $Scheduler) 设置<p>监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）<br>默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
 * @method integer getSniSwitch() 获取<p>是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。</p>
 * @method void setSniSwitch(integer $SniSwitch) 设置<p>是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。</p>
 * @method string getTargetType() 获取<p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。</p>
 * @method void setTargetType(string $TargetType) 设置<p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。</p>
 * @method string getSessionType() 获取<p>会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）</p>
 * @method void setSessionType(string $SessionType) 设置<p>会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）</p>
 * @method integer getKeepaliveEnable() 获取<p>是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。<br>若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 <a href="https://cloud.tencent.com/apply/p/tsodp6qm21">内测申请</a>。</p>
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置<p>是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。<br>若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 <a href="https://cloud.tencent.com/apply/p/tsodp6qm21">内测申请</a>。</p>
 * @method integer getEndPort() 获取<p>创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】。</p>
 * @method void setEndPort(integer $EndPort) 设置<p>创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】。</p>
 * @method boolean getDeregisterTargetRst() 获取<p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置<p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method MultiCertInfo getMultiCertInfo() 获取<p>证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置<p>证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
 * @method integer getMaxConn() 获取<p>监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
 * @method void setMaxConn(integer $MaxConn) 设置<p>监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
 * @method integer getMaxCps() 获取<p>监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
 * @method void setMaxCps(integer $MaxCps) 设置<p>监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
 * @method integer getIdleConnectTimeout() 获取<p>空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。默认值：TCP监听器默认值为900s，UDP监听器默认值为300s。取值范围：共享型实例和独占型实例支持：10-900，性能容量型实例支持：10-1980。如需设置超过取值范围的值请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>。</p>
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置<p>空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。默认值：TCP监听器默认值为900s，UDP监听器默认值为300s。取值范围：共享型实例和独占型实例支持：10-900，性能容量型实例支持：10-1980。如需设置超过取值范围的值请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>。</p>
 * @method boolean getProxyProtocol() 获取<p>TCP_SSL和QUIC是否支持PP</p>
 * @method void setProxyProtocol(boolean $ProxyProtocol) 设置<p>TCP_SSL和QUIC是否支持PP</p>
 * @method boolean getSnatEnable() 获取<p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
 * @method void setSnatEnable(boolean $SnatEnable) 设置<p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
 * @method array getFullEndPorts() 获取<p>全端口段监听器的结束端口，端口范围：2 - 65535</p>
 * @method void setFullEndPorts(array $FullEndPorts) 设置<p>全端口段监听器的结束端口，端口范围：2 - 65535</p>
 * @method boolean getH2cSwitch() 获取<p>内网http监听器开启h2c开关，True（开启）、False（关闭）。<br>默认为关闭。</p>
 * @method void setH2cSwitch(boolean $H2cSwitch) 设置<p>内网http监听器开启h2c开关，True（开启）、False（关闭）。<br>默认为关闭。</p>
 * @method boolean getSslCloseSwitch() 获取<p>控制 TCP_SSL 类型的监听器是否移除 SSL 加密层。开启后，监听器将作为普通 TCP 协议运行。 可选值：</p><ul><li>True： 关闭 SSL 功能（协议降级为纯文本 TCP）。</li><li>False（默认）： 保持 SSL 功能开启。</li></ul>
 * @method void setSslCloseSwitch(boolean $SslCloseSwitch) 设置<p>控制 TCP_SSL 类型的监听器是否移除 SSL 加密层。开启后，监听器将作为普通 TCP 协议运行。 可选值：</p><ul><li>True： 关闭 SSL 功能（协议降级为纯文本 TCP）。</li><li>False（默认）： 保持 SSL 功能开启。</li></ul>
 * @method string getDataCompressMode() 获取<p>数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）</p>
 * @method void setDataCompressMode(string $DataCompressMode) 设置<p>数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）</p>
 * @method boolean getRescheduleTargetZeroWeight() 获取<p>重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method void setRescheduleTargetZeroWeight(boolean $RescheduleTargetZeroWeight) 设置<p>重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method boolean getRescheduleUnhealthy() 获取<p>重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) 设置<p>重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method boolean getRescheduleExpandTarget() 获取<p>重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method void setRescheduleExpandTarget(boolean $RescheduleExpandTarget) 设置<p>重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method integer getRescheduleStartTime() 获取<p>重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) 设置<p>重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
 * @method integer getRescheduleInterval() 获取<p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
 * @method void setRescheduleInterval(integer $RescheduleInterval) 设置<p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string <p>负载均衡实例 ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>要将监听器创建到哪些端口，每个端口对应一个新的监听器。<br>端口范围：1~65535</p>
     */
    public $Ports;

    /**
     * @var string <p>监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。</p>
     */
    public $Protocol;

    /**
     * @var array <p>要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     */
    public $ListenerNames;

    /**
     * @var HealthCheck <p>健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
     */
    public $HealthCheck;

    /**
     * @var CertificateInput <p>证书相关信息。参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
     */
    public $Certificate;

    /**
     * @var integer <p>会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）<br>默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
     */
    public $Scheduler;

    /**
     * @var integer <p>是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。</p>
     */
    public $SniSwitch;

    /**
     * @var string <p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。</p>
     */
    public $TargetType;

    /**
     * @var string <p>会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）</p>
     */
    public $SessionType;

    /**
     * @var integer <p>是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。<br>若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 <a href="https://cloud.tencent.com/apply/p/tsodp6qm21">内测申请</a>。</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】。</p>
     */
    public $EndPort;

    /**
     * @var boolean <p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
     */
    public $DeregisterTargetRst;

    /**
     * @var MultiCertInfo <p>证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
     */
    public $MultiCertInfo;

    /**
     * @var integer <p>监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
     */
    public $MaxConn;

    /**
     * @var integer <p>监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
     */
    public $MaxCps;

    /**
     * @var integer <p>空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。默认值：TCP监听器默认值为900s，UDP监听器默认值为300s。取值范围：共享型实例和独占型实例支持：10-900，性能容量型实例支持：10-1980。如需设置超过取值范围的值请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>。</p>
     */
    public $IdleConnectTimeout;

    /**
     * @var boolean <p>TCP_SSL和QUIC是否支持PP</p>
     */
    public $ProxyProtocol;

    /**
     * @var boolean <p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
     */
    public $SnatEnable;

    /**
     * @var array <p>全端口段监听器的结束端口，端口范围：2 - 65535</p>
     */
    public $FullEndPorts;

    /**
     * @var boolean <p>内网http监听器开启h2c开关，True（开启）、False（关闭）。<br>默认为关闭。</p>
     */
    public $H2cSwitch;

    /**
     * @var boolean <p>控制 TCP_SSL 类型的监听器是否移除 SSL 加密层。开启后，监听器将作为普通 TCP 协议运行。 可选值：</p><ul><li>True： 关闭 SSL 功能（协议降级为纯文本 TCP）。</li><li>False（默认）： 保持 SSL 功能开启。</li></ul>
     */
    public $SslCloseSwitch;

    /**
     * @var string <p>数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）</p>
     */
    public $DataCompressMode;

    /**
     * @var boolean <p>重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。</p>
     */
    public $RescheduleTargetZeroWeight;

    /**
     * @var boolean <p>重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。</p>
     */
    public $RescheduleUnhealthy;

    /**
     * @var boolean <p>重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。</p>
     */
    public $RescheduleExpandTarget;

    /**
     * @var integer <p>重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
     */
    public $RescheduleStartTime;

    /**
     * @var integer <p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
     */
    public $RescheduleInterval;

    /**
     * @param string $LoadBalancerId <p>负载均衡实例 ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
     * @param array $Ports <p>要将监听器创建到哪些端口，每个端口对应一个新的监听器。<br>端口范围：1~65535</p>
     * @param string $Protocol <p>监听器协议： TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。</p>
     * @param array $ListenerNames <p>要创建的监听器名称列表，名称与Ports数组按序一一对应，如不需立即命名，则无需提供此参数。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     * @param HealthCheck $HealthCheck <p>健康检查相关参数，此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
     * @param CertificateInput $Certificate <p>证书相关信息。参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数MultiCertInfo至少需要传一个， 但不能同时传入。</li>
     * @param integer $SessionExpireTime <p>会话保持时间，单位：秒。可选值：30~3600，默认为0，默认不开启。此参数仅适用于TCP/UDP监听器。</p>
     * @param string $Scheduler <p>监听器转发的方式。可选值：WRR（按权重轮询）、LEAST_CONN（按最小连接数）<br>默认为 WRR。此参数仅适用于TCP/UDP/TCP_SSL/QUIC监听器。</p>
     * @param integer $SniSwitch <p>是否开启SNI特性，此参数仅适用于HTTPS监听器。0表示未开启，1表示开启。</p>
     * @param string $TargetType <p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。</p>
     * @param string $SessionType <p>会话保持类型。不传或传NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。QUIC_CID只支持UDP协议。此参数仅适用于TCP/UDP监听器。七层监听器应在转发规则中设置。（若选择QUIC_CID，则Protocol必须为UDP，Scheduler必须为WRR，同时只支持ipv4）</p>
     * @param integer $KeepaliveEnable <p>是否开启长连接，此参数仅适用于HTTP/HTTPS监听器，0:关闭；1:开启， 默认关闭。<br>若后端服务对连接数上限有限制，则建议谨慎开启。此功能目前处于内测中，如需使用，请提交 <a href="https://cloud.tencent.com/apply/p/tsodp6qm21">内测申请</a>。</p>
     * @param integer $EndPort <p>创建端口段监听器时必须传入此参数，用以标识结束端口。同时，入参Ports只允许传入一个成员，用以标识开始端口。【如果您需要体验端口段功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】。</p>
     * @param boolean $DeregisterTargetRst <p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
     * @param MultiCertInfo $MultiCertInfo <p>证书信息，支持同时传入不同算法类型的多本服务端证书，参数限制如下：</p><li>此参数仅适用于TCP_SSL监听器和未开启SNI特性的HTTPS监听器。</li><li>创建TCP_SSL监听器和未开启SNI特性的HTTPS监听器时，此参数和参数Certificate至少需要传一个， 但不能同时传入。</li>
     * @param integer $MaxConn <p>监听器最大连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
     * @param integer $MaxCps <p>监听器最大新增连接数，当前仅性能容量型实例且仅TCP/UDP/TCP_SSL/QUIC监听器支持，不传或者传-1表示监听器维度不限速。基础网络实例不支持该参数。</p>
     * @param integer $IdleConnectTimeout <p>空闲连接超时时间，此参数仅适用于TCP/UDP监听器，单位：秒。默认值：TCP监听器默认值为900s，UDP监听器默认值为300s。取值范围：共享型实例和独占型实例支持：10-900，性能容量型实例支持：10-1980。如需设置超过取值范围的值请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>。</p>
     * @param boolean $ProxyProtocol <p>TCP_SSL和QUIC是否支持PP</p>
     * @param boolean $SnatEnable <p>是否开启SNAT（源IP替换），True（开启）、False（关闭）。默认为关闭。注意：SnatEnable开启时会替换客户端源IP，此时<code>透传客户端源IP</code>选项关闭，反之亦然。</p>
     * @param array $FullEndPorts <p>全端口段监听器的结束端口，端口范围：2 - 65535</p>
     * @param boolean $H2cSwitch <p>内网http监听器开启h2c开关，True（开启）、False（关闭）。<br>默认为关闭。</p>
     * @param boolean $SslCloseSwitch <p>控制 TCP_SSL 类型的监听器是否移除 SSL 加密层。开启后，监听器将作为普通 TCP 协议运行。 可选值：</p><ul><li>True： 关闭 SSL 功能（协议降级为纯文本 TCP）。</li><li>False（默认）： 保持 SSL 功能开启。</li></ul>
     * @param string $DataCompressMode <p>数据压缩模式。可选值：transparent（透传模式）、compatibility（兼容模式）</p>
     * @param boolean $RescheduleTargetZeroWeight <p>重新调度功能，权重调为0开关，打开此开关，后端服务器权重调为0时触发重新调度。仅TCP/UDP监听器支持。</p>
     * @param boolean $RescheduleUnhealthy <p>重新调度功能，健康检查异常开关，打开此开关，后端服务器健康检查异常时触发重新调度。仅TCP/UDP监听器支持。</p>
     * @param boolean $RescheduleExpandTarget <p>重新调度功能，扩容后端服务开关，打开此开关，后端服务器增加或者减少时触发重新调度。仅TCP/UDP监听器支持。</p>
     * @param integer $RescheduleStartTime <p>重新调度触发开始时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
     * @param integer $RescheduleInterval <p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。</p>
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

        if (array_key_exists("ProxyProtocol",$param) and $param["ProxyProtocol"] !== null) {
            $this->ProxyProtocol = $param["ProxyProtocol"];
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
