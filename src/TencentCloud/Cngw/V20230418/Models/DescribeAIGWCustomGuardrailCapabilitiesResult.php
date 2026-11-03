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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询自定义安全护栏能力结果
 *
 * @method string getMinGatewayVersion() 获取<p>支持该能力的最低网关版本，当前为 3.9.6</p>
 * @method void setMinGatewayVersion(string $MinGatewayVersion) 设置<p>支持该能力的最低网关版本，当前为 3.9.6</p>
 * @method array getSupportedResourceTypes() 获取<p>支持绑定的业务资源类型</p>
 * @method void setSupportedResourceTypes(array $SupportedResourceTypes) 设置<p>支持绑定的业务资源类型</p>
 * @method array getSupportedProtocols() 获取<p>当前控制面允许绑定的协议分类，以返回值为准；不表示每种协议变体均可用。目前不开放 Dify、Custom Agent、Legacy SSE MCP。</p>
 * @method void setSupportedProtocols(array $SupportedProtocols) 设置<p>当前控制面允许绑定的协议分类，以返回值为准；不表示每种协议变体均可用。目前不开放 Dify、Custom Agent、Legacy SSE MCP。</p>
 * @method array getSupportedDirections() 获取<p>当前允许配置的审核方向，仅 input（仅输入）和 both（输入加输出）。</p>
 * @method void setSupportedDirections(array $SupportedDirections) 设置<p>当前允许配置的审核方向，仅 input（仅输入）和 both（输入加输出）。</p>
 * @method boolean getSupportsStreaming() 获取<p>是否支持流式请求与响应审核</p>
 * @method void setSupportsStreaming(boolean $SupportsStreaming) 设置<p>是否支持流式请求与响应审核</p>
 * @method boolean getSupportsFieldMapping() 获取<p>是否支持自定义审核响应字段映射</p>
 * @method void setSupportsFieldMapping(boolean $SupportsFieldMapping) 设置<p>是否支持自定义审核响应字段映射</p>
 * @method string getDefaultBlockMessage() 获取<p>系统默认拦截提示</p>
 * @method void setDefaultBlockMessage(string $DefaultBlockMessage) 设置<p>系统默认拦截提示</p>
 * @method integer getMaxBlockMessageLength() 获取<p>拦截提示最大字符数</p>
 * @method void setMaxBlockMessageLength(integer $MaxBlockMessageLength) 设置<p>拦截提示最大字符数</p>
 * @method CustomGuardrailCapabilityLimits getLimits() 获取<p>控制面公布的能力限制/默认值，不是当前请求可修改的配置对象，也不是逐个 DP 实时读取值。窗口大小、并发审核数等未作为策略 API 入参开放。</p>
 * @method void setLimits(CustomGuardrailCapabilityLimits $Limits) 设置<p>控制面公布的能力限制/默认值，不是当前请求可修改的配置对象，也不是逐个 DP 实时读取值。窗口大小、并发审核数等未作为策略 API 入参开放。</p>
 */
class DescribeAIGWCustomGuardrailCapabilitiesResult extends AbstractModel
{
    /**
     * @var string <p>支持该能力的最低网关版本，当前为 3.9.6</p>
     */
    public $MinGatewayVersion;

    /**
     * @var array <p>支持绑定的业务资源类型</p>
     */
    public $SupportedResourceTypes;

    /**
     * @var array <p>当前控制面允许绑定的协议分类，以返回值为准；不表示每种协议变体均可用。目前不开放 Dify、Custom Agent、Legacy SSE MCP。</p>
     */
    public $SupportedProtocols;

    /**
     * @var array <p>当前允许配置的审核方向，仅 input（仅输入）和 both（输入加输出）。</p>
     */
    public $SupportedDirections;

    /**
     * @var boolean <p>是否支持流式请求与响应审核</p>
     */
    public $SupportsStreaming;

    /**
     * @var boolean <p>是否支持自定义审核响应字段映射</p>
     */
    public $SupportsFieldMapping;

    /**
     * @var string <p>系统默认拦截提示</p>
     */
    public $DefaultBlockMessage;

    /**
     * @var integer <p>拦截提示最大字符数</p>
     */
    public $MaxBlockMessageLength;

    /**
     * @var CustomGuardrailCapabilityLimits <p>控制面公布的能力限制/默认值，不是当前请求可修改的配置对象，也不是逐个 DP 实时读取值。窗口大小、并发审核数等未作为策略 API 入参开放。</p>
     */
    public $Limits;

    /**
     * @param string $MinGatewayVersion <p>支持该能力的最低网关版本，当前为 3.9.6</p>
     * @param array $SupportedResourceTypes <p>支持绑定的业务资源类型</p>
     * @param array $SupportedProtocols <p>当前控制面允许绑定的协议分类，以返回值为准；不表示每种协议变体均可用。目前不开放 Dify、Custom Agent、Legacy SSE MCP。</p>
     * @param array $SupportedDirections <p>当前允许配置的审核方向，仅 input（仅输入）和 both（输入加输出）。</p>
     * @param boolean $SupportsStreaming <p>是否支持流式请求与响应审核</p>
     * @param boolean $SupportsFieldMapping <p>是否支持自定义审核响应字段映射</p>
     * @param string $DefaultBlockMessage <p>系统默认拦截提示</p>
     * @param integer $MaxBlockMessageLength <p>拦截提示最大字符数</p>
     * @param CustomGuardrailCapabilityLimits $Limits <p>控制面公布的能力限制/默认值，不是当前请求可修改的配置对象，也不是逐个 DP 实时读取值。窗口大小、并发审核数等未作为策略 API 入参开放。</p>
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
        if (array_key_exists("MinGatewayVersion",$param) and $param["MinGatewayVersion"] !== null) {
            $this->MinGatewayVersion = $param["MinGatewayVersion"];
        }

        if (array_key_exists("SupportedResourceTypes",$param) and $param["SupportedResourceTypes"] !== null) {
            $this->SupportedResourceTypes = $param["SupportedResourceTypes"];
        }

        if (array_key_exists("SupportedProtocols",$param) and $param["SupportedProtocols"] !== null) {
            $this->SupportedProtocols = $param["SupportedProtocols"];
        }

        if (array_key_exists("SupportedDirections",$param) and $param["SupportedDirections"] !== null) {
            $this->SupportedDirections = $param["SupportedDirections"];
        }

        if (array_key_exists("SupportsStreaming",$param) and $param["SupportsStreaming"] !== null) {
            $this->SupportsStreaming = $param["SupportsStreaming"];
        }

        if (array_key_exists("SupportsFieldMapping",$param) and $param["SupportsFieldMapping"] !== null) {
            $this->SupportsFieldMapping = $param["SupportsFieldMapping"];
        }

        if (array_key_exists("DefaultBlockMessage",$param) and $param["DefaultBlockMessage"] !== null) {
            $this->DefaultBlockMessage = $param["DefaultBlockMessage"];
        }

        if (array_key_exists("MaxBlockMessageLength",$param) and $param["MaxBlockMessageLength"] !== null) {
            $this->MaxBlockMessageLength = $param["MaxBlockMessageLength"];
        }

        if (array_key_exists("Limits",$param) and $param["Limits"] !== null) {
            $this->Limits = new CustomGuardrailCapabilityLimits();
            $this->Limits->deserialize($param["Limits"]);
        }
    }
}
