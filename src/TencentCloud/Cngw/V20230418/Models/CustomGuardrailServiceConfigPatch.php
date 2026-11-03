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
 * 局部更新配置。只更新显式提供字段；未传字段保留。条件必填按合并后的完整策略校验，不会要求每次重传全部配置。
 *
 * @method string getAddressMode() 获取<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核服务地址来源，必须显式选择 service（已有服务）或 manual（手动 URL）；不得省略、为空或 null。service 时 ServiceId 必填，manual 时 Endpoint 必填，两种地址互斥。</p>
 * @method void setAddressMode(string $AddressMode) 设置<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核服务地址来源，必须显式选择 service（已有服务）或 manual（手动 URL）；不得省略、为空或 null。service 时 ServiceId 必填，manual 时 Endpoint 必填，两种地址互斥。</p>
 * @method string getServiceId() 获取<p>AddressMode=service 时必填。填写审核引擎对应的 Kong Service ID，不是被审核的模型 API、MCP Server 或 Agent API ID。按该服务的 protocol、host、port、path 拼出审核 URL；直接请求该 URL，不是经过该服务的网关 Route，也不会自动继承其 Route 插件或业务鉴权。manual 模式不得填写。</p><p>修改时省略本字段保留原值。</p>
 * @method void setServiceId(string $ServiceId) 设置<p>AddressMode=service 时必填。填写审核引擎对应的 Kong Service ID，不是被审核的模型 API、MCP Server 或 Agent API ID。按该服务的 protocol、host、port、path 拼出审核 URL；直接请求该 URL，不是经过该服务的网关 Route，也不会自动继承其 Route 插件或业务鉴权。manual 模式不得填写。</p><p>修改时省略本字段保留原值。</p>
 * @method string getEndpoint() 获取<p>AddressMode=manual 时必填，审核引擎接受 POST 的 HTTP/HTTPS 完整 URL，例如 https://audit.example.com/v2/audit；路径以实际引擎为准，不会自动补 /v2/audit。service 模式不得填写。请填写 URL 原文，不要粘贴 Markdown 链接。</p><p>修改时省略本字段保留原值。</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>AddressMode=manual 时必填，审核引擎接受 POST 的 HTTP/HTTPS 完整 URL，例如 https://audit.example.com/v2/audit；路径以实际引擎为准，不会自动补 /v2/audit。service 模式不得填写。请填写 URL 原文，不要粘贴 Markdown 链接。</p><p>修改时省略本字段保留原值。</p>
 * @method boolean getSSLVerify() 获取<p>是否校验审核引擎 HTTPS 证书，创建默认 true；仅影响审核 HTTP 调用，不是客户端访问网关的 TLS 设置。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLVerify(boolean $SSLVerify) 设置<p>是否校验审核引擎 HTTPS 证书，创建默认 true；仅影响审核 HTTP 调用，不是客户端访问网关的 TLS 设置。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQueryPassthroughEnabled() 获取<p>是否把原业务请求的完整 Query 字符串写入送审包，创建默认 false。开启可能把 Query 中的凭据或个人信息传给审核服务，须确认接收方可信；不是审核服务 URL 自身的 Query 开关。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryPassthroughEnabled(boolean $QueryPassthroughEnabled) 设置<p>是否把原业务请求的完整 Query 字符串写入送审包，创建默认 false。开启可能把 Query 中的凭据或个人信息传给审核服务，须确认接收方可信；不是审核服务 URL 自身的 Query 开关。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaderAllowList() 获取<p>允许额外写入送审包的原始 HTTP Header 名称，最多 64 项，每项最长 128 字节；名称不区分大小写，默认 []。内置保留 content-type、accept、mcp-protocol-version、a2a-version；Authorization、Cookie、API Key、MCP 会话标识和内部 Relay 等受限头不会因加入本列表而放行。审核服务自身的鉴权请使用 AuthConfig。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderAllowList(array $HeaderAllowList) 设置<p>允许额外写入送审包的原始 HTTP Header 名称，最多 64 项，每项最长 128 字节；名称不区分大小写，默认 []。内置保留 content-type、accept、mcp-protocol-version、a2a-version；Authorization、Cookie、API Key、MCP 会话标识和内部 Relay 等受限头不会因加入本列表而放行。审核服务自身的鉴权请使用 AuthConfig。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomGuardrailServiceConfigPatch extends AbstractModel
{
    /**
     * @var string <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核服务地址来源，必须显式选择 service（已有服务）或 manual（手动 URL）；不得省略、为空或 null。service 时 ServiceId 必填，manual 时 Endpoint 必填，两种地址互斥。</p>
     */
    public $AddressMode;

    /**
     * @var string <p>AddressMode=service 时必填。填写审核引擎对应的 Kong Service ID，不是被审核的模型 API、MCP Server 或 Agent API ID。按该服务的 protocol、host、port、path 拼出审核 URL；直接请求该 URL，不是经过该服务的网关 Route，也不会自动继承其 Route 插件或业务鉴权。manual 模式不得填写。</p><p>修改时省略本字段保留原值。</p>
     */
    public $ServiceId;

    /**
     * @var string <p>AddressMode=manual 时必填，审核引擎接受 POST 的 HTTP/HTTPS 完整 URL，例如 https://audit.example.com/v2/audit；路径以实际引擎为准，不会自动补 /v2/audit。service 模式不得填写。请填写 URL 原文，不要粘贴 Markdown 链接。</p><p>修改时省略本字段保留原值。</p>
     */
    public $Endpoint;

    /**
     * @var boolean <p>是否校验审核引擎 HTTPS 证书，创建默认 true；仅影响审核 HTTP 调用，不是客户端访问网关的 TLS 设置。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLVerify;

    /**
     * @var boolean <p>是否把原业务请求的完整 Query 字符串写入送审包，创建默认 false。开启可能把 Query 中的凭据或个人信息传给审核服务，须确认接收方可信；不是审核服务 URL 自身的 Query 开关。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryPassthroughEnabled;

    /**
     * @var array <p>允许额外写入送审包的原始 HTTP Header 名称，最多 64 项，每项最长 128 字节；名称不区分大小写，默认 []。内置保留 content-type、accept、mcp-protocol-version、a2a-version；Authorization、Cookie、API Key、MCP 会话标识和内部 Relay 等受限头不会因加入本列表而放行。审核服务自身的鉴权请使用 AuthConfig。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderAllowList;

    /**
     * @param string $AddressMode <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核服务地址来源，必须显式选择 service（已有服务）或 manual（手动 URL）；不得省略、为空或 null。service 时 ServiceId 必填，manual 时 Endpoint 必填，两种地址互斥。</p>
     * @param string $ServiceId <p>AddressMode=service 时必填。填写审核引擎对应的 Kong Service ID，不是被审核的模型 API、MCP Server 或 Agent API ID。按该服务的 protocol、host、port、path 拼出审核 URL；直接请求该 URL，不是经过该服务的网关 Route，也不会自动继承其 Route 插件或业务鉴权。manual 模式不得填写。</p><p>修改时省略本字段保留原值。</p>
     * @param string $Endpoint <p>AddressMode=manual 时必填，审核引擎接受 POST 的 HTTP/HTTPS 完整 URL，例如 https://audit.example.com/v2/audit；路径以实际引擎为准，不会自动补 /v2/audit。service 模式不得填写。请填写 URL 原文，不要粘贴 Markdown 链接。</p><p>修改时省略本字段保留原值。</p>
     * @param boolean $SSLVerify <p>是否校验审核引擎 HTTPS 证书，创建默认 true；仅影响审核 HTTP 调用，不是客户端访问网关的 TLS 设置。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QueryPassthroughEnabled <p>是否把原业务请求的完整 Query 字符串写入送审包，创建默认 false。开启可能把 Query 中的凭据或个人信息传给审核服务，须确认接收方可信；不是审核服务 URL 自身的 Query 开关。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeaderAllowList <p>允许额外写入送审包的原始 HTTP Header 名称，最多 64 项，每项最长 128 字节；名称不区分大小写，默认 []。内置保留 content-type、accept、mcp-protocol-version、a2a-version；Authorization、Cookie、API Key、MCP 会话标识和内部 Relay 等受限头不会因加入本列表而放行。审核服务自身的鉴权请使用 AuthConfig。</p><p>修改时省略本字段保留原值。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AddressMode",$param) and $param["AddressMode"] !== null) {
            $this->AddressMode = $param["AddressMode"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("SSLVerify",$param) and $param["SSLVerify"] !== null) {
            $this->SSLVerify = $param["SSLVerify"];
        }

        if (array_key_exists("QueryPassthroughEnabled",$param) and $param["QueryPassthroughEnabled"] !== null) {
            $this->QueryPassthroughEnabled = $param["QueryPassthroughEnabled"];
        }

        if (array_key_exists("HeaderAllowList",$param) and $param["HeaderAllowList"] !== null) {
            $this->HeaderAllowList = $param["HeaderAllowList"];
        }
    }
}
