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
 * @method boolean getDryRun() 获取<p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改目标组。</li><li><strong>true</strong>：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。</li></ul>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改目标组。</li><li><strong>true</strong>：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。</li></ul>
 * @method HealthCheckConfig getHealthCheckConfig() 获取<p>健康检查配置。</p>
 * @method void setHealthCheckConfig(HealthCheckConfig $HealthCheckConfig) 设置<p>健康检查配置。</p>
 * @method boolean getKeepaliveEnabled() 获取<p>是否开启长连接。</p>
 * @method void setKeepaliveEnabled(boolean $KeepaliveEnabled) 设置<p>是否开启长连接。</p>
 * @method string getSchedulerAlgorithm() 获取<p>调度算法。取值：</p><ul><li><strong>wrr</strong>：加权轮询，按照权重选择后端服务器，权重越高的服务器被轮询到的概率越高。</li><li><strong>wlc</strong>：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。</li></ul>
 * @method void setSchedulerAlgorithm(string $SchedulerAlgorithm) 设置<p>调度算法。取值：</p><ul><li><strong>wrr</strong>：加权轮询，按照权重选择后端服务器，权重越高的服务器被轮询到的概率越高。</li><li><strong>wlc</strong>：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。</li></ul>
 * @method StickySessionConfig getStickySessionConfig() 获取<p>会话保持配置。</p>
 * @method void setStickySessionConfig(StickySessionConfig $StickySessionConfig) 设置<p>会话保持配置。</p>
 * @method string getTargetGroupId() 获取<p>目标组 ID，格式为 lbtg- 后接 8 位字母数字。</p>
 * @method void setTargetGroupId(string $TargetGroupId) 设置<p>目标组 ID，格式为 lbtg- 后接 8 位字母数字。</p>
 * @method string getTargetGroupName() 获取<p>目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。</p>
 * @method void setTargetGroupName(string $TargetGroupName) 设置<p>目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。</p>
 */
class ModifyTargetGroupAttributesRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改目标组。</li><li><strong>true</strong>：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。</li></ul>
     */
    public $DryRun;

    /**
     * @var HealthCheckConfig <p>健康检查配置。</p>
     */
    public $HealthCheckConfig;

    /**
     * @var boolean <p>是否开启长连接。</p>
     */
    public $KeepaliveEnabled;

    /**
     * @var string <p>调度算法。取值：</p><ul><li><strong>wrr</strong>：加权轮询，按照权重选择后端服务器，权重越高的服务器被轮询到的概率越高。</li><li><strong>wlc</strong>：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。</li></ul>
     */
    public $SchedulerAlgorithm;

    /**
     * @var StickySessionConfig <p>会话保持配置。</p>
     */
    public $StickySessionConfig;

    /**
     * @var string <p>目标组 ID，格式为 lbtg- 后接 8 位字母数字。</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。</p>
     */
    public $TargetGroupName;

    /**
     * @param boolean $DryRun <p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改目标组。</li><li><strong>true</strong>：发送预览请求，检查修改目标组的参数、格式、业务限制等是否符合要求。</li></ul>
     * @param HealthCheckConfig $HealthCheckConfig <p>健康检查配置。</p>
     * @param boolean $KeepaliveEnabled <p>是否开启长连接。</p>
     * @param string $SchedulerAlgorithm <p>调度算法。取值：</p><ul><li><strong>wrr</strong>：加权轮询，按照权重选择后端服务器，权重越高的服务器被轮询到的概率越高。</li><li><strong>wlc</strong>：加权最小连接数，当不同后端服务器权重值相同时，当前连接数越小的后端服务器被轮询到的概率越高。</li></ul>
     * @param StickySessionConfig $StickySessionConfig <p>会话保持配置。</p>
     * @param string $TargetGroupId <p>目标组 ID，格式为 lbtg- 后接 8 位字母数字。</p>
     * @param string $TargetGroupName <p>目标组名称。长度为 1~255 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。不传目标组名称时默认使用ID作为目标组名称。</p>
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
