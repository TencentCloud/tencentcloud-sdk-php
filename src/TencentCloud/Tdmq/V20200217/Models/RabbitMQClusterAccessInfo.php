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
 * @method string getPublicAccessEndpoint() 获取<p>集群公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置<p>集群公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebConsoleEndpoint() 获取<p>集群 Web 控制台公网访问地址</p>
 * @method void setWebConsoleEndpoint(string $WebConsoleEndpoint) 设置<p>集群 Web 控制台公网访问地址</p>
 * @method string getWebConsoleUsername() 获取<p>集群 Web 控制台登录用户名</p>
 * @method void setWebConsoleUsername(string $WebConsoleUsername) 设置<p>集群 Web 控制台登录用户名</p>
 * @method string getWebConsolePassword() 获取<p>集群 Web 控制台登录密码</p>
 * @method void setWebConsolePassword(string $WebConsolePassword) 设置<p>集群 Web 控制台登录密码</p>
 * @method boolean getPublicAccessEndpointStatus() 获取<p>已废弃</p>
 * @method void setPublicAccessEndpointStatus(boolean $PublicAccessEndpointStatus) 设置<p>已废弃</p>
 * @method boolean getPublicControlConsoleSwitchStatus() 获取<p>已废弃</p>
 * @method void setPublicControlConsoleSwitchStatus(boolean $PublicControlConsoleSwitchStatus) 设置<p>已废弃</p>
 * @method boolean getVpcControlConsoleSwitchStatus() 获取<p>已废弃</p>
 * @method void setVpcControlConsoleSwitchStatus(boolean $VpcControlConsoleSwitchStatus) 设置<p>已废弃</p>
 * @method string getVpcWebConsoleEndpoint() 获取<p>Web 管控台 VPC 访问地址</p>
 * @method void setVpcWebConsoleEndpoint(string $VpcWebConsoleEndpoint) 设置<p>Web 管控台 VPC 访问地址</p>
 * @method string getPublicWebConsoleSwitchStatus() 获取<p>Web 控制台公网访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method void setPublicWebConsoleSwitchStatus(string $PublicWebConsoleSwitchStatus) 设置<p>Web 控制台公网访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method string getVpcWebConsoleSwitchStatus() 获取<p>Web 控制台 VPC 访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method void setVpcWebConsoleSwitchStatus(string $VpcWebConsoleSwitchStatus) 设置<p>Web 控制台 VPC 访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method string getPublicDataStreamStatus() 获取<p>公网接入点开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) 设置<p>公网接入点开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
 * @method PrometheusEndpointInfo getPrometheusEndpointInfo() 获取<p>Prometheus信息</p>
 * @method void setPrometheusEndpointInfo(PrometheusEndpointInfo $PrometheusEndpointInfo) 设置<p>Prometheus信息</p>
 * @method string getWebConsoleDomainEndpoint() 获取<p>公网域名接入点</p>
 * @method void setWebConsoleDomainEndpoint(string $WebConsoleDomainEndpoint) 设置<p>公网域名接入点</p>
 * @method VpcEndpointInfo getControlPlaneEndpointInfo() 获取<p>控制面所使用的VPC信息</p>
 * @method void setControlPlaneEndpointInfo(VpcEndpointInfo $ControlPlaneEndpointInfo) 设置<p>控制面所使用的VPC信息</p>
 * @method string getPublicTlsAccessEndpoint() 获取<p>TLS加密的数据流公网接入点</p>
 * @method void setPublicTlsAccessEndpoint(string $PublicTlsAccessEndpoint) 设置<p>TLS加密的数据流公网接入点</p>
 * @method boolean getPublicIpReused() 获取<p>公网IP是否复用</p>
 * @method void setPublicIpReused(boolean $PublicIpReused) 设置<p>公网IP是否复用</p>
 * @method string getPublicWebConsoleErrorMessage() 获取<p>Web 控制台公网访问操作的错误信息</p>
 * @method void setPublicWebConsoleErrorMessage(string $PublicWebConsoleErrorMessage) 设置<p>Web 控制台公网访问操作的错误信息</p>
 * @method string getVpcWebConsoleErrorMessage() 获取<p>Web 控制台 VPC 访问操作的错误信息</p>
 * @method void setVpcWebConsoleErrorMessage(string $VpcWebConsoleErrorMessage) 设置<p>Web 控制台 VPC 访问操作的错误信息</p>
 * @method string getPublicDataStreamErrorMessage() 获取<p>公网接入点操作的错误信息</p>
 * @method void setPublicDataStreamErrorMessage(string $PublicDataStreamErrorMessage) 设置<p>公网接入点操作的错误信息</p>
 * @method string getPublicStreamAccessEndpoint() 获取<p>公网Stream接入点</p>
 * @method void setPublicStreamAccessEndpoint(string $PublicStreamAccessEndpoint) 设置<p>公网Stream接入点</p>
 */
class RabbitMQClusterAccessInfo extends AbstractModel
{
    /**
     * @var string <p>集群公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var string <p>集群 Web 控制台公网访问地址</p>
     */
    public $WebConsoleEndpoint;

    /**
     * @var string <p>集群 Web 控制台登录用户名</p>
     */
    public $WebConsoleUsername;

    /**
     * @var string <p>集群 Web 控制台登录密码</p>
     */
    public $WebConsolePassword;

    /**
     * @var boolean <p>已废弃</p>
     */
    public $PublicAccessEndpointStatus;

    /**
     * @var boolean <p>已废弃</p>
     */
    public $PublicControlConsoleSwitchStatus;

    /**
     * @var boolean <p>已废弃</p>
     */
    public $VpcControlConsoleSwitchStatus;

    /**
     * @var string <p>Web 管控台 VPC 访问地址</p>
     */
    public $VpcWebConsoleEndpoint;

    /**
     * @var string <p>Web 控制台公网访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     */
    public $PublicWebConsoleSwitchStatus;

    /**
     * @var string <p>Web 控制台 VPC 访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     */
    public $VpcWebConsoleSwitchStatus;

    /**
     * @var string <p>公网接入点开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     */
    public $PublicDataStreamStatus;

    /**
     * @var PrometheusEndpointInfo <p>Prometheus信息</p>
     */
    public $PrometheusEndpointInfo;

    /**
     * @var string <p>公网域名接入点</p>
     */
    public $WebConsoleDomainEndpoint;

    /**
     * @var VpcEndpointInfo <p>控制面所使用的VPC信息</p>
     */
    public $ControlPlaneEndpointInfo;

    /**
     * @var string <p>TLS加密的数据流公网接入点</p>
     */
    public $PublicTlsAccessEndpoint;

    /**
     * @var boolean <p>公网IP是否复用</p>
     */
    public $PublicIpReused;

    /**
     * @var string <p>Web 控制台公网访问操作的错误信息</p>
     */
    public $PublicWebConsoleErrorMessage;

    /**
     * @var string <p>Web 控制台 VPC 访问操作的错误信息</p>
     */
    public $VpcWebConsoleErrorMessage;

    /**
     * @var string <p>公网接入点操作的错误信息</p>
     */
    public $PublicDataStreamErrorMessage;

    /**
     * @var string <p>公网Stream接入点</p>
     */
    public $PublicStreamAccessEndpoint;

    /**
     * @param string $PublicAccessEndpoint <p>集群公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebConsoleEndpoint <p>集群 Web 控制台公网访问地址</p>
     * @param string $WebConsoleUsername <p>集群 Web 控制台登录用户名</p>
     * @param string $WebConsolePassword <p>集群 Web 控制台登录密码</p>
     * @param boolean $PublicAccessEndpointStatus <p>已废弃</p>
     * @param boolean $PublicControlConsoleSwitchStatus <p>已废弃</p>
     * @param boolean $VpcControlConsoleSwitchStatus <p>已废弃</p>
     * @param string $VpcWebConsoleEndpoint <p>Web 管控台 VPC 访问地址</p>
     * @param string $PublicWebConsoleSwitchStatus <p>Web 控制台公网访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     * @param string $VpcWebConsoleSwitchStatus <p>Web 控制台 VPC 访问开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     * @param string $PublicDataStreamStatus <p>公网接入点开关状态</p><p>枚举值：</p><ul><li>OFF： 已关闭</li><li>ON： 已开启</li><li>CREATING： 创建中</li><li>DELETING： 删除中</li><li>CREATE_FAILURE： 创建失败</li><li>DELETE_FAILURE： 删除失败</li></ul>
     * @param PrometheusEndpointInfo $PrometheusEndpointInfo <p>Prometheus信息</p>
     * @param string $WebConsoleDomainEndpoint <p>公网域名接入点</p>
     * @param VpcEndpointInfo $ControlPlaneEndpointInfo <p>控制面所使用的VPC信息</p>
     * @param string $PublicTlsAccessEndpoint <p>TLS加密的数据流公网接入点</p>
     * @param boolean $PublicIpReused <p>公网IP是否复用</p>
     * @param string $PublicWebConsoleErrorMessage <p>Web 控制台公网访问操作的错误信息</p>
     * @param string $VpcWebConsoleErrorMessage <p>Web 控制台 VPC 访问操作的错误信息</p>
     * @param string $PublicDataStreamErrorMessage <p>公网接入点操作的错误信息</p>
     * @param string $PublicStreamAccessEndpoint <p>公网Stream接入点</p>
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

        if (array_key_exists("PublicStreamAccessEndpoint",$param) and $param["PublicStreamAccessEndpoint"] !== null) {
            $this->PublicStreamAccessEndpoint = $param["PublicStreamAccessEndpoint"];
        }
    }
}
