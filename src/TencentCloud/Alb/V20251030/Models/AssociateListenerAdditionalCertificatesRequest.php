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
 * AssociateListenerAdditionalCertificates请求参数结构体
 *
 * @method array getCertificateIds() 获取<p>扩展证书 ID 列表。</p>
 * @method void setCertificateIds(array $CertificateIds) 设置<p>扩展证书 ID 列表。</p>
 * @method string getListenerId() 获取<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method string getClientToken() 获取<p>客户端 Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。<br>若您未指定，则系统自动使用 API 请求的 RequestId 作为 ClientToken 标识。每次 API 请求的 RequestId 不一样。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>客户端 Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。<br>若您未指定，则系统自动使用 API 请求的 RequestId 作为 ClientToken 标识。每次 API 请求的 RequestId 不一样。</p>
 * @method string getDryRun() 获取<p>是否只预检此次请求，取值：true：发送检查请求，不会为HTTPS监听器添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。false（默认值）：发送正常请求，通过检查后返回HTTP2xx状态码并直接进行操作。</p>
 * @method void setDryRun(string $DryRun) 设置<p>是否只预检此次请求，取值：true：发送检查请求，不会为HTTPS监听器添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。false（默认值）：发送正常请求，通过检查后返回HTTP2xx状态码并直接进行操作。</p>
 */
class AssociateListenerAdditionalCertificatesRequest extends AbstractModel
{
    /**
     * @var array <p>扩展证书 ID 列表。</p>
     */
    public $CertificateIds;

    /**
     * @var string <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>客户端 Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。<br>若您未指定，则系统自动使用 API 请求的 RequestId 作为 ClientToken 标识。每次 API 请求的 RequestId 不一样。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>是否只预检此次请求，取值：true：发送检查请求，不会为HTTPS监听器添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。false（默认值）：发送正常请求，通过检查后返回HTTP2xx状态码并直接进行操作。</p>
     */
    public $DryRun;

    /**
     * @param array $CertificateIds <p>扩展证书 ID 列表。</p>
     * @param string $ListenerId <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     * @param string $LoadBalancerId <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     * @param string $ClientToken <p>客户端 Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。<br>若您未指定，则系统自动使用 API 请求的 RequestId 作为 ClientToken 标识。每次 API 请求的 RequestId 不一样。</p>
     * @param string $DryRun <p>是否只预检此次请求，取值：true：发送检查请求，不会为HTTPS监听器添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。false（默认值）：发送正常请求，通过检查后返回HTTP2xx状态码并直接进行操作。</p>
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
