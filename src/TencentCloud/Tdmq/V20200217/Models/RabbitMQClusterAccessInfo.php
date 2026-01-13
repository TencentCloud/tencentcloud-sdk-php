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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ集群访问信息
 *
 * @method string getPublicAccessEndpoint() 获取集群公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置集群公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebConsoleEndpoint() 获取集群控制台访问地址
 * @method void setWebConsoleEndpoint(string $WebConsoleEndpoint) 设置集群控制台访问地址
 * @method string getWebConsoleUsername() 获取集群控制台登录用户名
 * @method void setWebConsoleUsername(string $WebConsoleUsername) 设置集群控制台登录用户名
 * @method string getWebConsolePassword() 获取集群控制台登录密码
 * @method void setWebConsolePassword(string $WebConsolePassword) 设置集群控制台登录密码
 * @method boolean getPublicAccessEndpointStatus() 获取已废弃
 * @method void setPublicAccessEndpointStatus(boolean $PublicAccessEndpointStatus) 设置已废弃
 * @method boolean getPublicControlConsoleSwitchStatus() 获取已废弃
 * @method void setPublicControlConsoleSwitchStatus(boolean $PublicControlConsoleSwitchStatus) 设置已废弃
 * @method boolean getVpcControlConsoleSwitchStatus() 获取已废弃
 * @method void setVpcControlConsoleSwitchStatus(boolean $VpcControlConsoleSwitchStatus) 设置已废弃
 * @method string getVpcWebConsoleEndpoint() 获取Vpc管控台访问地址，示例值，http://1.1.1.1:15672
 * @method void setVpcWebConsoleEndpoint(string $VpcWebConsoleEndpoint) 设置Vpc管控台访问地址，示例值，http://1.1.1.1:15672
 * @method string getPublicWebConsoleSwitchStatus() 获取公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
 * @method void setPublicWebConsoleSwitchStatus(string $PublicWebConsoleSwitchStatus) 设置公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
 * @method string getVpcWebConsoleSwitchStatus() 获取Vpc管控台开关状态，示例值，
OFF/ON/CREATING/DELETING
 * @method void setVpcWebConsoleSwitchStatus(string $VpcWebConsoleSwitchStatus) 设置Vpc管控台开关状态，示例值，
OFF/ON/CREATING/DELETING
 * @method string getPublicDataStreamStatus() 获取公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) 设置公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
 * @method PrometheusEndpointInfo getPrometheusEndpointInfo() 获取Prometheus信息
 * @method void setPrometheusEndpointInfo(PrometheusEndpointInfo $PrometheusEndpointInfo) 设置Prometheus信息
 * @method string getWebConsoleDomainEndpoint() 获取公网域名接入点
 * @method void setWebConsoleDomainEndpoint(string $WebConsoleDomainEndpoint) 设置公网域名接入点
 * @method VpcEndpointInfo getControlPlaneEndpointInfo() 获取控制面所使用的VPC信息
 * @method void setControlPlaneEndpointInfo(VpcEndpointInfo $ControlPlaneEndpointInfo) 设置控制面所使用的VPC信息
 * @method string getPublicTlsAccessEndpoint() 获取TLS加密的数据流公网接入点
 * @method void setPublicTlsAccessEndpoint(string $PublicTlsAccessEndpoint) 设置TLS加密的数据流公网接入点
 * @method boolean getPublicIpReused() 获取公网IP是否复用
 * @method void setPublicIpReused(boolean $PublicIpReused) 设置公网IP是否复用
 * @method string getPublicWebConsoleErrorMessage() 获取公网控制台接入点操作的错误信息
 * @method void setPublicWebConsoleErrorMessage(string $PublicWebConsoleErrorMessage) 设置公网控制台接入点操作的错误信息
 * @method string getVpcWebConsoleErrorMessage() 获取内网控制台接入点操作的错误信息
 * @method void setVpcWebConsoleErrorMessage(string $VpcWebConsoleErrorMessage) 设置内网控制台接入点操作的错误信息
 * @method string getPublicDataStreamErrorMessage() 获取公网接入点操作的错误信息
 * @method void setPublicDataStreamErrorMessage(string $PublicDataStreamErrorMessage) 设置公网接入点操作的错误信息
 */
class RabbitMQClusterAccessInfo extends AbstractModel
{
    /**
     * @var string 集群公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var string 集群控制台访问地址
     */
    public $WebConsoleEndpoint;

    /**
     * @var string 集群控制台登录用户名
     */
    public $WebConsoleUsername;

    /**
     * @var string 集群控制台登录密码
     */
    public $WebConsolePassword;

    /**
     * @var boolean 已废弃
     */
    public $PublicAccessEndpointStatus;

    /**
     * @var boolean 已废弃
     */
    public $PublicControlConsoleSwitchStatus;

    /**
     * @var boolean 已废弃
     */
    public $VpcControlConsoleSwitchStatus;

    /**
     * @var string Vpc管控台访问地址，示例值，http://1.1.1.1:15672
     */
    public $VpcWebConsoleEndpoint;

    /**
     * @var string 公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
     */
    public $PublicWebConsoleSwitchStatus;

    /**
     * @var string Vpc管控台开关状态，示例值，
OFF/ON/CREATING/DELETING
     */
    public $VpcWebConsoleSwitchStatus;

    /**
     * @var string 公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
     */
    public $PublicDataStreamStatus;

    /**
     * @var PrometheusEndpointInfo Prometheus信息
     */
    public $PrometheusEndpointInfo;

    /**
     * @var string 公网域名接入点
     */
    public $WebConsoleDomainEndpoint;

    /**
     * @var VpcEndpointInfo 控制面所使用的VPC信息
     */
    public $ControlPlaneEndpointInfo;

    /**
     * @var string TLS加密的数据流公网接入点
     */
    public $PublicTlsAccessEndpoint;

    /**
     * @var boolean 公网IP是否复用
     */
    public $PublicIpReused;

    /**
     * @var string 公网控制台接入点操作的错误信息
     */
    public $PublicWebConsoleErrorMessage;

    /**
     * @var string 内网控制台接入点操作的错误信息
     */
    public $VpcWebConsoleErrorMessage;

    /**
     * @var string 公网接入点操作的错误信息
     */
    public $PublicDataStreamErrorMessage;

    /**
     * @param string $PublicAccessEndpoint 集群公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebConsoleEndpoint 集群控制台访问地址
     * @param string $WebConsoleUsername 集群控制台登录用户名
     * @param string $WebConsolePassword 集群控制台登录密码
     * @param boolean $PublicAccessEndpointStatus 已废弃
     * @param boolean $PublicControlConsoleSwitchStatus 已废弃
     * @param boolean $VpcControlConsoleSwitchStatus 已废弃
     * @param string $VpcWebConsoleEndpoint Vpc管控台访问地址，示例值，http://1.1.1.1:15672
     * @param string $PublicWebConsoleSwitchStatus 公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
     * @param string $VpcWebConsoleSwitchStatus Vpc管控台开关状态，示例值，
OFF/ON/CREATING/DELETING
     * @param string $PublicDataStreamStatus 公网管控台开关状态，示例值，OFF/ON/CREATING/DELETING
     * @param PrometheusEndpointInfo $PrometheusEndpointInfo Prometheus信息
     * @param string $WebConsoleDomainEndpoint 公网域名接入点
     * @param VpcEndpointInfo $ControlPlaneEndpointInfo 控制面所使用的VPC信息
     * @param string $PublicTlsAccessEndpoint TLS加密的数据流公网接入点
     * @param boolean $PublicIpReused 公网IP是否复用
     * @param string $PublicWebConsoleErrorMessage 公网控制台接入点操作的错误信息
     * @param string $VpcWebConsoleErrorMessage 内网控制台接入点操作的错误信息
     * @param string $PublicDataStreamErrorMessage 公网接入点操作的错误信息
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
        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("WebConsoleEndpoint",$param) and $param["WebConsoleEndpoint"] !== null) {
            $this->WebConsoleEndpoint = $param["WebConsoleEndpoint"];
        }

        if (array_key_exists("WebConsoleUsername",$param) and $param["WebConsoleUsername"] !== null) {
            $this->WebConsoleUsername = $param["WebConsoleUsername"];
        }

        if (array_key_exists("WebConsolePassword",$param) and $param["WebConsolePassword"] !== null) {
            $this->WebConsolePassword = $param["WebConsolePassword"];
        }

        if (array_key_exists("PublicAccessEndpointStatus",$param) and $param["PublicAccessEndpointStatus"] !== null) {
            $this->PublicAccessEndpointStatus = $param["PublicAccessEndpointStatus"];
        }

        if (array_key_exists("PublicControlConsoleSwitchStatus",$param) and $param["PublicControlConsoleSwitchStatus"] !== null) {
            $this->PublicControlConsoleSwitchStatus = $param["PublicControlConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcControlConsoleSwitchStatus",$param) and $param["VpcControlConsoleSwitchStatus"] !== null) {
            $this->VpcControlConsoleSwitchStatus = $param["VpcControlConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcWebConsoleEndpoint",$param) and $param["VpcWebConsoleEndpoint"] !== null) {
            $this->VpcWebConsoleEndpoint = $param["VpcWebConsoleEndpoint"];
        }

        if (array_key_exists("PublicWebConsoleSwitchStatus",$param) and $param["PublicWebConsoleSwitchStatus"] !== null) {
            $this->PublicWebConsoleSwitchStatus = $param["PublicWebConsoleSwitchStatus"];
        }

        if (array_key_exists("VpcWebConsoleSwitchStatus",$param) and $param["VpcWebConsoleSwitchStatus"] !== null) {
            $this->VpcWebConsoleSwitchStatus = $param["VpcWebConsoleSwitchStatus"];
        }

        if (array_key_exists("PublicDataStreamStatus",$param) and $param["PublicDataStreamStatus"] !== null) {
            $this->PublicDataStreamStatus = $param["PublicDataStreamStatus"];
        }

        if (array_key_exists("PrometheusEndpointInfo",$param) and $param["PrometheusEndpointInfo"] !== null) {
            $this->PrometheusEndpointInfo = new PrometheusEndpointInfo();
            $this->PrometheusEndpointInfo->deserialize($param["PrometheusEndpointInfo"]);
        }

        if (array_key_exists("WebConsoleDomainEndpoint",$param) and $param["WebConsoleDomainEndpoint"] !== null) {
            $this->WebConsoleDomainEndpoint = $param["WebConsoleDomainEndpoint"];
        }

        if (array_key_exists("ControlPlaneEndpointInfo",$param) and $param["ControlPlaneEndpointInfo"] !== null) {
            $this->ControlPlaneEndpointInfo = new VpcEndpointInfo();
            $this->ControlPlaneEndpointInfo->deserialize($param["ControlPlaneEndpointInfo"]);
        }

        if (array_key_exists("PublicTlsAccessEndpoint",$param) and $param["PublicTlsAccessEndpoint"] !== null) {
            $this->PublicTlsAccessEndpoint = $param["PublicTlsAccessEndpoint"];
        }

        if (array_key_exists("PublicIpReused",$param) and $param["PublicIpReused"] !== null) {
            $this->PublicIpReused = $param["PublicIpReused"];
        }

        if (array_key_exists("PublicWebConsoleErrorMessage",$param) and $param["PublicWebConsoleErrorMessage"] !== null) {
            $this->PublicWebConsoleErrorMessage = $param["PublicWebConsoleErrorMessage"];
        }

        if (array_key_exists("VpcWebConsoleErrorMessage",$param) and $param["VpcWebConsoleErrorMessage"] !== null) {
            $this->VpcWebConsoleErrorMessage = $param["VpcWebConsoleErrorMessage"];
        }

        if (array_key_exists("PublicDataStreamErrorMessage",$param) and $param["PublicDataStreamErrorMessage"] !== null) {
            $this->PublicDataStreamErrorMessage = $param["PublicDataStreamErrorMessage"];
        }
    }
}
