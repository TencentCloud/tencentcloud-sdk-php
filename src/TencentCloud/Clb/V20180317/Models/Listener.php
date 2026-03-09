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
 * 监听器的信息
 *
 * @method string getListenerId() 获取<p>负载均衡监听器 ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>负载均衡监听器 ID</p>
 * @method string getProtocol() 获取<p>监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC</p>
 * @method void setProtocol(string $Protocol) 设置<p>监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC</p>
 * @method integer getPort() 获取<p>监听器端口，端口范围：1-65535</p>
 * @method void setPort(integer $Port) 设置<p>监听器端口，端口范围：1-65535</p>
 * @method CertificateOutput getCertificate() 获取<p>监听器绑定的证书信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(CertificateOutput $Certificate) 设置<p>监听器绑定的证书信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheck getHealthCheck() 获取<p>监听器的健康检查信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置<p>监听器的健康检查信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduler() 获取<p>请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduler(string $Scheduler) 设置<p>请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionExpireTime() 获取<p>会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置<p>会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSniSwitch() 获取<p>是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）</p>
 * @method void setSniSwitch(integer $SniSwitch) 设置<p>是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）</p>
 * @method array getRules() 获取<p>监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置<p>监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取<p>监听器的名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器的名称</p>
 * @method string getCreateTime() 获取<p>监听器的创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>监听器的创建时间。</p>
 * @method integer getEndPort() 获取<p>端口段结束端口，端口范围：2-65535</p>
 * @method void setEndPort(integer $EndPort) 设置<p>端口段结束端口，端口范围：2-65535</p>
 * @method string getTargetType() 获取<p>后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(string $TargetType) 设置<p>后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BasicTargetGroupInfo getTargetGroup() 获取<p>绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) 设置<p>绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionType() 获取<p>会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。</p>
 * @method void setSessionType(string $SessionType) 设置<p>会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。</p>
 * @method integer getKeepaliveEnable() 获取<p>是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置<p>是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getToa() 获取<p>仅支持Nat64 CLB TCP监听器</p>
 * @method void setToa(boolean $Toa) 设置<p>仅支持Nat64 CLB TCP监听器</p>
 * @method boolean getDeregisterTargetRst() 获取<p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置<p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
 * @method array getAttrFlags() 获取<p>监听器的属性</p>
 * @method void setAttrFlags(array $AttrFlags) 设置<p>监听器的属性</p>
 * @method array getTargetGroupList() 获取<p>绑定的目标组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetGroupList(array $TargetGroupList) 设置<p>绑定的目标组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConn() 获取<p>监听器最大连接数，-1表示监听器维度不限速。</p>
 * @method void setMaxConn(integer $MaxConn) 设置<p>监听器最大连接数，-1表示监听器维度不限速。</p>
 * @method integer getMaxCps() 获取<p>监听器最大新增连接数，-1表示监听器维度不限速。</p>
 * @method void setMaxCps(integer $MaxCps) 设置<p>监听器最大新增连接数，-1表示监听器维度不限速。</p>
 * @method integer getIdleConnectTimeout() 获取<p>空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置<p>空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRescheduleInterval() 获取<p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。</p><p>单位：秒</p>
 * @method void setRescheduleInterval(integer $RescheduleInterval) 设置<p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。</p><p>单位：秒</p>
 * @method string getDataCompressMode() 获取<p>数据压缩模式</p>
 * @method void setDataCompressMode(string $DataCompressMode) 设置<p>数据压缩模式</p>
 * @method integer getRescheduleStartTime() 获取<p>重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。</p>
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) 设置<p>重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。</p>
 */
class Listener extends AbstractModel
{
    /**
     * @var string <p>负载均衡监听器 ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC</p>
     */
    public $Protocol;

    /**
     * @var integer <p>监听器端口，端口范围：1-65535</p>
     */
    public $Port;

    /**
     * @var CertificateOutput <p>监听器绑定的证书信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var HealthCheck <p>监听器的健康检查信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var string <p>请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheduler;

    /**
     * @var integer <p>会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionExpireTime;

    /**
     * @var integer <p>是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）</p>
     */
    public $SniSwitch;

    /**
     * @var array <p>监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string <p>监听器的名称</p>
     */
    public $ListenerName;

    /**
     * @var string <p>监听器的创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>端口段结束端口，端口范围：2-65535</p>
     */
    public $EndPort;

    /**
     * @var string <p>后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo <p>绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetGroup;

    /**
     * @var string <p>会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。</p>
     */
    public $SessionType;

    /**
     * @var integer <p>是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeepaliveEnable;

    /**
     * @var boolean <p>仅支持Nat64 CLB TCP监听器</p>
     */
    public $Toa;

    /**
     * @var boolean <p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
     */
    public $DeregisterTargetRst;

    /**
     * @var array <p>监听器的属性</p>
     */
    public $AttrFlags;

    /**
     * @var array <p>绑定的目标组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetGroupList;

    /**
     * @var integer <p>监听器最大连接数，-1表示监听器维度不限速。</p>
     */
    public $MaxConn;

    /**
     * @var integer <p>监听器最大新增连接数，-1表示监听器维度不限速。</p>
     */
    public $MaxCps;

    /**
     * @var integer <p>空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleConnectTimeout;

    /**
     * @var integer <p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。</p><p>单位：秒</p>
     */
    public $RescheduleInterval;

    /**
     * @var string <p>数据压缩模式</p>
     */
    public $DataCompressMode;

    /**
     * @var integer <p>重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。</p>
     */
    public $RescheduleStartTime;

    /**
     * @param string $ListenerId <p>负载均衡监听器 ID</p>
     * @param string $Protocol <p>监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC</p>
     * @param integer $Port <p>监听器端口，端口范围：1-65535</p>
     * @param CertificateOutput $Certificate <p>监听器绑定的证书信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheck $HealthCheck <p>监听器的健康检查信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheduler <p>请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionExpireTime <p>会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SniSwitch <p>是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）</p>
     * @param array $Rules <p>监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName <p>监听器的名称</p>
     * @param string $CreateTime <p>监听器的创建时间。</p>
     * @param integer $EndPort <p>端口段结束端口，端口范围：2-65535</p>
     * @param string $TargetType <p>后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BasicTargetGroupInfo $TargetGroup <p>绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionType <p>会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。</p>
     * @param integer $KeepaliveEnable <p>是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Toa <p>仅支持Nat64 CLB TCP监听器</p>
     * @param boolean $DeregisterTargetRst <p>重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。</p>
     * @param array $AttrFlags <p>监听器的属性</p>
     * @param array $TargetGroupList <p>绑定的目标组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConn <p>监听器最大连接数，-1表示监听器维度不限速。</p>
     * @param integer $MaxCps <p>监听器最大新增连接数，-1表示监听器维度不限速。</p>
     * @param integer $IdleConnectTimeout <p>空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RescheduleInterval <p>重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。</p><p>单位：秒</p>
     * @param string $DataCompressMode <p>数据压缩模式</p>
     * @param integer $RescheduleStartTime <p>重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。</p>
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateOutput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleOutput();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetGroup",$param) and $param["TargetGroup"] !== null) {
            $this->TargetGroup = new BasicTargetGroupInfo();
            $this->TargetGroup->deserialize($param["TargetGroup"]);
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("Toa",$param) and $param["Toa"] !== null) {
            $this->Toa = $param["Toa"];
        }

        if (array_key_exists("DeregisterTargetRst",$param) and $param["DeregisterTargetRst"] !== null) {
            $this->DeregisterTargetRst = $param["DeregisterTargetRst"];
        }

        if (array_key_exists("AttrFlags",$param) and $param["AttrFlags"] !== null) {
            $this->AttrFlags = $param["AttrFlags"];
        }

        if (array_key_exists("TargetGroupList",$param) and $param["TargetGroupList"] !== null) {
            $this->TargetGroupList = [];
            foreach ($param["TargetGroupList"] as $key => $value){
                $obj = new BasicTargetGroupInfo();
                $obj->deserialize($value);
                array_push($this->TargetGroupList, $obj);
            }
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

        if (array_key_exists("RescheduleInterval",$param) and $param["RescheduleInterval"] !== null) {
            $this->RescheduleInterval = $param["RescheduleInterval"];
        }

        if (array_key_exists("DataCompressMode",$param) and $param["DataCompressMode"] !== null) {
            $this->DataCompressMode = $param["DataCompressMode"];
        }

        if (array_key_exists("RescheduleStartTime",$param) and $param["RescheduleStartTime"] !== null) {
            $this->RescheduleStartTime = $param["RescheduleStartTime"];
        }
    }
}
