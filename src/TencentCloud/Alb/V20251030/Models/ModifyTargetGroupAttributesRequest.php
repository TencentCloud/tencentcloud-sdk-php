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
 * ModifyTargetGroupAttributes请求参数结构体
 *
 * @method boolean getDryRun() 获取是否预览此次请求。
- **false**（默认）：发送普通请求，直接修改目标组。
- **true**：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。
 * @method void setDryRun(boolean $DryRun) 设置是否预览此次请求。
- **false**（默认）：发送普通请求，直接修改目标组。
- **true**：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。
 * @method HealthCheckConfig getHealthCheckConfig() 获取健康检查配置。

 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) 设置健康检查配置。

 * @method boolean getKeepaliveEnabled() 获取是否开启长连接。
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) 设置是否开启长连接。
 * @method string getSchedulerAlgorithm() 获取调度算法。取值：
- **wrr**：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) 设置调度算法。取值：
- **wrr**：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
 * @method StickySessionConfig getStickySessionConfig() 获取会话保持配置。
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) 设置会话保持配置。
 * @method string getTargetGroupId() 获取目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method string getTargetGroupName() 获取目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。
 */
class ModifyTargetGroupAttributesRequest extends AbstractModel
{
    /**
     * @var boolean 是否预览此次请求。
- **false**（默认）：发送普通请求，直接修改目标组。
- **true**：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。
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
     * @var string 调度算法。取值：
- **wrr**：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig 会话保持配置。
     */
    public $StickySessionConfig;

    /**
     * @var string 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。
     */
    public $TargetGroupName;

    /**
     * @param boolean $DryRun 是否预览此次请求。
- **false**（默认）：发送普通请求，直接修改目标组。
- **true**：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。
     * @param HealthCheckConfig $HealthCheckConfig 健康检查配置。

     * @param boolean $KeepaliveEnabled 是否开启长连接。
     * @param string $SchedulerAlgorithm 调度算法。取值：
- **wrr**：加权轮训，按照权重选择后端服务器，权重越高的服务器被轮训到的概率越高。
- **wlc**：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。
     * @param StickySessionConfig $StickySessionConfig 会话保持配置。
     * @param string $TargetGroupId 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     * @param string $TargetGroupName 目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。
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

        if (array_key_exists("SchedulerAlgorithm",$param) and $param["SchedulerAlgorithm"] !== null) {
            $this->SchedulerAlgorithm = $param["SchedulerAlgorithm"];
        }

        if (array_key_exists("StickySessionConfig",$param) and $param["StickySessionConfig"] !== null) {
            $this->StickySessionConfig = new StickySessionConfig();
            $this->StickySessionConfig->deserialize($param["StickySessionConfig"]);
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }
    }
}
