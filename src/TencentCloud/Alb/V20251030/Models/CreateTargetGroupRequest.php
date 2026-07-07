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
 * CreateTargetGroup请求参数结构体
 *
 * @method string getTargetType() 获取目标组类型。取值：
- **Instance**（默认）：Cvm服务器类型或者Eni网卡类型。
 * @method void setTargetType(string $TargetType) 设置目标组类型。取值：
- **Instance**（默认）：Cvm服务器类型或者Eni网卡类型。
 * @method string getVpcId() 获取私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
 * @method boolean getDryRun() 获取是否预览此次请求。
- **false**（默认）：发送普通请求，直接创建目标组。
- **true**：发送预览请求，检查创建目标组的参数、格式、业务限制等是否符合要求。
 * @method void setDryRun(boolean $DryRun) 设置是否预览此次请求。
- **false**（默认）：发送普通请求，直接创建目标组。
- **true**：发送预览请求，检查创建目标组的参数、格式、业务限制等是否符合要求。
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
 * @method string getSchedulerAlgorithm() 获取调度算法。取值：
- **wrr**（默认）：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) 设置调度算法。取值：
- **wrr**（默认）：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
 * @method StickySessionConfig getStickySessionConfig() 获取会话保持配置。
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) 设置会话保持配置。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getTargetGroupName() 获取目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string 目标组类型。取值：
- **Instance**（默认）：Cvm服务器类型或者Eni网卡类型。
     */
    public $TargetType;

    /**
     * @var string 私有网络 ID。
     */
    public $VpcId;

    /**
     * @var boolean 是否预览此次请求。
- **false**（默认）：发送普通请求，直接创建目标组。
- **true**：发送预览请求，检查创建目标组的参数、格式、业务限制等是否符合要求。
     */
    public $DryRun;

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
     * @var string 调度算法。取值：
- **wrr**（默认）：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
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
     * @var string 目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     */
    public $TargetGroupName;

    /**
     * @param string $TargetType 目标组类型。取值：
- **Instance**（默认）：Cvm服务器类型或者Eni网卡类型。
     * @param string $VpcId 私有网络 ID。
     * @param boolean $DryRun 是否预览此次请求。
- **false**（默认）：发送普通请求，直接创建目标组。
- **true**：发送预览请求，检查创建目标组的参数、格式、业务限制等是否符合要求。
     * @param HealthCheckConfig $HealthCheckConfig 健康检查配置。
     * @param boolean $KeepaliveEnabled 是否开启长连接。
     * @param string $Protocol 后端服务协议类型。取值：
- **HTTP**（默认）：支持绑定HTTP、HTTPS的监听器
- **HTTPS**：支持绑定HTTPS类型的监听器
- **GRPC**：支持绑定HTTPS类型的监听器
- **GRPCS**：支持绑定HTTPS类型的监听器
     * @param string $SchedulerAlgorithm 调度算法。取值：
- **wrr**（默认）：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
     * @param StickySessionConfig $StickySessionConfig 会话保持配置。
     * @param array $Tags 标签。
     * @param string $TargetGroupName 目标组名称。默认为目标组ID。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
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
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
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

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }
    }
}
