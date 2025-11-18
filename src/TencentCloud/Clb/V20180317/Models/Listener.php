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
 * @method string getListenerId() 获取负载均衡监听器 ID
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID
 * @method string getProtocol() 获取监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC
 * @method void setProtocol(string $Protocol) 设置监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC
 * @method integer getPort() 获取监听器端口，端口范围：1-65535
 * @method void setPort(integer $Port) 设置监听器端口，端口范围：1-65535
 * @method CertificateOutput getCertificate() 获取监听器绑定的证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(CertificateOutput $Certificate) 设置监听器绑定的证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheck getHealthCheck() 获取监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduler() 获取请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduler(string $Scheduler) 设置请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionExpireTime() 获取会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSniSwitch() 获取是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）
 * @method array getRules() 获取监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取监听器的名称
 * @method void setListenerName(string $ListenerName) 设置监听器的名称
 * @method string getCreateTime() 获取监听器的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置监听器的创建时间。
 * @method integer getEndPort() 获取端口段结束端口，端口范围：2-65535
 * @method void setEndPort(integer $EndPort) 设置端口段结束端口，端口范围：2-65535
 * @method string getTargetType() 获取后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(string $TargetType) 设置后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2
注意：此字段可能返回 null，表示取不到有效值。
 * @method BasicTargetGroupInfo getTargetGroup() 获取绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetGroup(BasicTargetGroupInfo $TargetGroup) 设置绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionType() 获取会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。
 * @method void setSessionType(string $SessionType) 设置会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。
 * @method integer getKeepaliveEnable() 获取是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeepaliveEnable(integer $KeepaliveEnable) 设置是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getToa() 获取仅支持Nat64 CLB TCP监听器
 * @method void setToa(boolean $Toa) 设置仅支持Nat64 CLB TCP监听器
 * @method boolean getDeregisterTargetRst() 获取重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
 * @method void setDeregisterTargetRst(boolean $DeregisterTargetRst) 设置重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
 * @method array getAttrFlags() 获取监听器的属性
 * @method void setAttrFlags(array $AttrFlags) 设置监听器的属性
 * @method array getTargetGroupList() 获取绑定的目标组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetGroupList(array $TargetGroupList) 设置绑定的目标组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConn() 获取监听器最大连接数，-1表示监听器维度不限速。
 * @method void setMaxConn(integer $MaxConn) 设置监听器最大连接数，-1表示监听器维度不限速。
 * @method integer getMaxCps() 获取监听器最大新增连接数，-1表示监听器维度不限速。
 * @method void setMaxCps(integer $MaxCps) 设置监听器最大新增连接数，-1表示监听器维度不限速。
 * @method integer getIdleConnectTimeout() 获取空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleConnectTimeout(integer $IdleConnectTimeout) 设置空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRescheduleInterval() 获取重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。
 * @method void setRescheduleInterval(integer $RescheduleInterval) 设置重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。
 * @method string getDataCompressMode() 获取数据压缩模式
 * @method void setDataCompressMode(string $DataCompressMode) 设置数据压缩模式
 * @method integer getRescheduleStartTime() 获取重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。
 * @method void setRescheduleStartTime(integer $RescheduleStartTime) 设置重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。
 */
class Listener extends AbstractModel
{
    /**
     * @var string 负载均衡监听器 ID
     */
    public $ListenerId;

    /**
     * @var string 监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC
     */
    public $Protocol;

    /**
     * @var integer 监听器端口，端口范围：1-65535
     */
    public $Port;

    /**
     * @var CertificateOutput 监听器绑定的证书信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var HealthCheck 监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var string 请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheduler;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionExpireTime;

    /**
     * @var integer 是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）
     */
    public $SniSwitch;

    /**
     * @var array 监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string 监听器的名称
     */
    public $ListenerName;

    /**
     * @var string 监听器的创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 端口段结束端口，端口范围：2-65535
     */
    public $EndPort;

    /**
     * @var string 后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var BasicTargetGroupInfo 绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetGroup;

    /**
     * @var string 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。
     */
    public $SessionType;

    /**
     * @var integer 是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeepaliveEnable;

    /**
     * @var boolean 仅支持Nat64 CLB TCP监听器
     */
    public $Toa;

    /**
     * @var boolean 重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
     */
    public $DeregisterTargetRst;

    /**
     * @var array 监听器的属性
     */
    public $AttrFlags;

    /**
     * @var array 绑定的目标组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetGroupList;

    /**
     * @var integer 监听器最大连接数，-1表示监听器维度不限速。
     */
    public $MaxConn;

    /**
     * @var integer 监听器最大新增连接数，-1表示监听器维度不限速。
     */
    public $MaxCps;

    /**
     * @var integer 空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleConnectTimeout;

    /**
     * @var integer 重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。
     */
    public $RescheduleInterval;

    /**
     * @var string 数据压缩模式
     */
    public $DataCompressMode;

    /**
     * @var integer 重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。
     */
    public $RescheduleStartTime;

    /**
     * @param string $ListenerId 负载均衡监听器 ID
     * @param string $Protocol 监听器协议，可选值：TCP、UDP、HTTP、HTTPS、TCP_SSL、QUIC
     * @param integer $Port 监听器端口，端口范围：1-65535
     * @param CertificateOutput $Certificate 监听器绑定的证书信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheck $HealthCheck 监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheduler 请求的调度方式。 WRR、LEAST_CONN、IP_HASH分别表示按权重轮询、最小连接数、IP Hash。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionExpireTime 会话保持时间，单位：秒。可选值：30~3600，默认 0，默认不开启。此参数仅适用于TCP/UDP监听器。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SniSwitch 是否开启SNI特性，1：表示开启，0：表示不开启（本参数仅对于HTTPS监听器有意义）
     * @param array $Rules 监听器下的全部转发规则（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName 监听器的名称
     * @param string $CreateTime 监听器的创建时间。
     * @param integer $EndPort 端口段结束端口，端口范围：2-65535
     * @param string $TargetType 后端服务器类型，可选值：NODE、POLARIS、TARGETGROUP、TARGETGROUP-V2
注意：此字段可能返回 null，表示取不到有效值。
     * @param BasicTargetGroupInfo $TargetGroup 绑定的目标组基本信息；当监听器绑定目标组时，会返回该字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionType 会话保持类型。NORMAL表示默认会话保持类型。QUIC_CID 表示根据Quic Connection ID做会话保持。
     * @param integer $KeepaliveEnable 是否开启长连接，1开启，0关闭，（本参数仅对于HTTP/HTTPS监听器有意义）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Toa 仅支持Nat64 CLB TCP监听器
     * @param boolean $DeregisterTargetRst 重新调度功能，解绑后端服务开关，打开此开关，当解绑后端服务时触发重新调度。仅TCP/UDP监听器支持。
     * @param array $AttrFlags 监听器的属性
     * @param array $TargetGroupList 绑定的目标组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConn 监听器最大连接数，-1表示监听器维度不限速。
     * @param integer $MaxCps 监听器最大新增连接数，-1表示监听器维度不限速。
     * @param integer $IdleConnectTimeout 空闲连接超时时间，仅支持TCP监听器。默认值:900；共享型实例和独占型实例取值范围：300～900，性能容量型实例取值范围:300～1980。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RescheduleInterval 重新调度触发持续时间，取值0~3600s。仅TCP/UDP监听器支持。触发重新调度后，长连接将会在设置的调度时间内断开并完成重新分配。
     * @param string $DataCompressMode 数据压缩模式
     * @param integer $RescheduleStartTime 重新调度启动时间，配置了重新调度启动时间后，会在启动时间到达时触发重新调度。
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
