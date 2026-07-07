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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组简要信息出参
 *
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method HealthCheckConfig getHealthCheckConfig() 获取健康检查配置。
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) 设置健康检查配置。
 * @method boolean getKeepaliveEnabled() 获取是否开启长连接。
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) 设置是否开启长连接。
 * @method string getProtocol() 获取后端服务协议类型。取值：
- **HTTP**（默认）：支持绑定HTTP、HTTPS的监听器
- **HTTPS**：支持绑定HTTPS类型的监听器
- **GRPC**：支持绑定HTTPS类型的监听器
- **GRPCS**：支持绑定HTTPS类型的监听器
 * @method void setProtocol(string $Protocol) 设置后端服务协议类型。取值：
- **HTTP**（默认）：支持绑定HTTP、HTTPS的监听器
- **HTTPS**：支持绑定HTTPS类型的监听器
- **GRPC**：支持绑定HTTPS类型的监听器
- **GRPCS**：支持绑定HTTPS类型的监听器
 * @method integer getRelatedLoadBalancersCount() 获取目标组关联的负载均衡数量。
 * @method void setRelatedLoadBalancersCount(integer $RelatedLoadBalancersCount) 设置目标组关联的负载均衡数量。
 * @method string getSchedulerAlgorithm() 获取调度算法。
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) 设置调度算法。
 * @method StickySessionConfig getStickySessionConfig() 获取会话保持配置。
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) 设置会话保持配置。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getTargetGroupId() 获取目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method string getTargetGroupName() 获取目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method string getTargetGroupStatus() 获取目标组状态。取值：
- **Provisioning**：创建中。
- **ProvisionFailed**：创建失败。
- **Active**: 运行中。
- **Configuring**：配置变更中。
 * @method void setTargetGroupStatus(string $TargetGroupStatus) 设置目标组状态。取值：
- **Provisioning**：创建中。
- **ProvisionFailed**：创建失败。
- **Active**: 运行中。
- **Configuring**：配置变更中。
 * @method string getTargetType() 获取目标组类型。取值：
- **Instance**：Cvm服务器类型或Eni弹性网卡类型
 * @method void setTargetType(string $TargetType) 设置目标组类型。取值：
- **Instance**：Cvm服务器类型或Eni弹性网卡类型
 * @method string getVpcId() 获取私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
 */
class TargetGroupOutput extends AbstractModel
{
    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var HealthCheckConfig 健康检查配置。
     */
    public $HealthCheckConfig;

    /**
     * @var boolean 是否开启长连接。
     */
    public $KeepaliveEnabled;

    /**
     * @var string 后端服务协议类型。取值：
- **HTTP**（默认）：支持绑定HTTP、HTTPS的监听器
- **HTTPS**：支持绑定HTTPS类型的监听器
- **GRPC**：支持绑定HTTPS类型的监听器
- **GRPCS**：支持绑定HTTPS类型的监听器
     */
    public $Protocol;

    /**
     * @var integer 目标组关联的负载均衡数量。
     */
    public $RelatedLoadBalancersCount;

    /**
     * @var string 调度算法。
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig 会话保持配置。
     */
    public $StickySessionConfig;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     */
    public $TargetGroupName;

    /**
     * @var string 目标组状态。取值：
- **Provisioning**：创建中。
- **ProvisionFailed**：创建失败。
- **Active**: 运行中。
- **Configuring**：配置变更中。
     */
    public $TargetGroupStatus;

    /**
     * @var string 目标组类型。取值：
- **Instance**：Cvm服务器类型或Eni弹性网卡类型
     */
    public $TargetType;

    /**
     * @var string 私有网络 ID。
     */
    public $VpcId;

    /**
     * @param string $CreateTime 创建时间。
     * @param HealthCheckConfig $HealthCheckConfig 健康检查配置。
     * @param boolean $KeepaliveEnabled 是否开启长连接。
     * @param string $Protocol 后端服务协议类型。取值：
- **HTTP**（默认）：支持绑定HTTP、HTTPS的监听器
- **HTTPS**：支持绑定HTTPS类型的监听器
- **GRPC**：支持绑定HTTPS类型的监听器
- **GRPCS**：支持绑定HTTPS类型的监听器
     * @param integer $RelatedLoadBalancersCount 目标组关联的负载均衡数量。
     * @param string $SchedulerAlgorithm 调度算法。
     * @param StickySessionConfig $StickySessionConfig 会话保持配置。
     * @param array $Tags 标签。
     * @param string $TargetGroupId 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     * @param string $TargetGroupName 目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     * @param string $TargetGroupStatus 目标组状态。取值：
- **Provisioning**：创建中。
- **ProvisionFailed**：创建失败。
- **Active**: 运行中。
- **Configuring**：配置变更中。
     * @param string $TargetType 目标组类型。取值：
- **Instance**：Cvm服务器类型或Eni弹性网卡类型
     * @param string $VpcId 私有网络 ID。
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new HealthCheckConfig();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }

        if (array_key_exists("KeepaliveEnabled",$param) and $param["KeepaliveEnabled"] !== null) {
            $this->KeepaliveEnabled = $param["KeepaliveEnabled"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RelatedLoadBalancersCount",$param) and $param["RelatedLoadBalancersCount"] !== null) {
            $this->RelatedLoadBalancersCount = $param["RelatedLoadBalancersCount"];
        }

        if (array_key_exists("SchedulerAlgorithm",$param) and $param["SchedulerAlgorithm"] !== null) {
            $this->SchedulerAlgorithm = $param["SchedulerAlgorithm"];
        }

        if (array_key_exists("StickySessionConfig",$param) and $param["StickySessionConfig"] !== null) {
            $this->StickySessionConfig = new StickySessionConfig();
            $this->StickySessionConfig->deserialize($param["StickySessionConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("TargetGroupStatus",$param) and $param["TargetGroupStatus"] !== null) {
            $this->TargetGroupStatus = $param["TargetGroupStatus"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
