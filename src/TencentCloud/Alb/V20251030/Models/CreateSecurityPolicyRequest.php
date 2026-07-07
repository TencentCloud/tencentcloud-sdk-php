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
 * CreateSecurityPolicy请求参数结构体
 *
 * @method array getCiphers() 获取安全策略支持的加密套件列表。加密套件用于协商客户端与服务端之间的加密算法。

**配置说明：**
- 加密套件的可选范围取决于所选的 TLS 协议版本（TLSVersions 参数）。
- 只要加密套件被任意一个已选 TLS 版本支持，即可添加到列表中。
- 若 TLSVersions 包含 TLSv1.3：可不指定 TLSv1.3 专属加密套件（系统将自动补全全部 TLSv1.3 套件）；若指定，则必须包含全部 TLSv1.3 专属加密套件，不支持仅指定部分。

**获取可用加密套件：**
请调用 [DescribeSecurityPolicyCapabilities](https://cloud.tencent.com/document/api/xxx) 接口查询各 TLS 版本支持的加密套件列表。

 * @method void setCiphers(array $Ciphers) 设置安全策略支持的加密套件列表。加密套件用于协商客户端与服务端之间的加密算法。

**配置说明：**
- 加密套件的可选范围取决于所选的 TLS 协议版本（TLSVersions 参数）。
- 只要加密套件被任意一个已选 TLS 版本支持，即可添加到列表中。
- 若 TLSVersions 包含 TLSv1.3：可不指定 TLSv1.3 专属加密套件（系统将自动补全全部 TLSv1.3 套件）；若指定，则必须包含全部 TLSv1.3 专属加密套件，不支持仅指定部分。

**获取可用加密套件：**
请调用 [DescribeSecurityPolicyCapabilities](https://cloud.tencent.com/document/api/xxx) 接口查询各 TLS 版本支持的加密套件列表。

 * @method array getTLSVersions() 获取安全策略支持的 TLS 协议版本列表。TLS（Transport Layer Security）协议用于保障客户端与负载均衡之间的通信安全。

**可选值：**
- **TLSv1.0**：兼容性最好，但安全性较低，不推荐在生产环境使用。
- **TLSv1.1**：安全性略优于 TLSv1.0，但仍不推荐。
- **TLSv1.2**：目前主流的安全协议版本，兼顾安全性与兼容性。
- **TLSv1.3**：最新版本，安全性最高，性能更优，推荐优先使用。

**建议：** 生产环境建议至少选择 TLSv1.2，若客户端支持，优先启用 TLSv1.3。

 * @method void setTLSVersions(array $TLSVersions) 设置安全策略支持的 TLS 协议版本列表。TLS（Transport Layer Security）协议用于保障客户端与负载均衡之间的通信安全。

**可选值：**
- **TLSv1.0**：兼容性最好，但安全性较低，不推荐在生产环境使用。
- **TLSv1.1**：安全性略优于 TLSv1.0，但仍不推荐。
- **TLSv1.2**：目前主流的安全协议版本，兼顾安全性与兼容性。
- **TLSv1.3**：最新版本，安全性最高，性能更优，推荐优先使用。

**建议：** 生产环境建议至少选择 TLSv1.2，若客户端支持，优先启用 TLSv1.3。

 * @method string getClientToken() 获取客户端幂等性令牌。

用于保证请求的幂等性，防止因网络超时或客户端重试导致的重复创建。建议使用 UUID 作为令牌值。相同的 ClientToken 在有效期内重复请求时，服务端将返回相同的结果。

 * @method void setClientToken(string $ClientToken) 设置客户端幂等性令牌。

用于保证请求的幂等性，防止因网络超时或客户端重试导致的重复创建。建议使用 UUID 作为令牌值。相同的 ClientToken 在有效期内重复请求时，服务端将返回相同的结果。

 * @method boolean getDryRun() 获取是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际创建资源。预检请求将验证参数格式、权限及资源配额等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接创建安全策略。

 * @method void setDryRun(boolean $DryRun) 设置是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际创建资源。预检请求将验证参数格式、权限及资源配额等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接创建安全策略。

 * @method string getSecurityPolicyName() 获取安全策略名称。用于标识和区分不同的安全策略。

**命名规则：**
- 长度为 2~128 个字符。
- 必须以英文字母或中文开头。
- 可包含英文字母、中文、数字、半角句号（.）、下划线（_）和短划线（-）。

**建议：** 使用具有业务含义的名称，例如 "prod-high-security" 或 "测试环境策略"。

 * @method void setSecurityPolicyName(string $SecurityPolicyName) 设置安全策略名称。用于标识和区分不同的安全策略。

**命名规则：**
- 长度为 2~128 个字符。
- 必须以英文字母或中文开头。
- 可包含英文字母、中文、数字、半角句号（.）、下划线（_）和短划线（-）。

**建议：** 使用具有业务含义的名称，例如 "prod-high-security" 或 "测试环境策略"。

 * @method array getTags() 获取安全策略的标签列表。标签用于对资源进行分类和管理，便于按业务、环境、部门等维度筛选和组织资源。

每个标签由键值对（Key-Value）组成，同一资源下标签键不可重复。

 * @method void setTags(array $Tags) 设置安全策略的标签列表。标签用于对资源进行分类和管理，便于按业务、环境、部门等维度筛选和组织资源。

每个标签由键值对（Key-Value）组成，同一资源下标签键不可重复。
 */
class CreateSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var array 安全策略支持的加密套件列表。加密套件用于协商客户端与服务端之间的加密算法。

**配置说明：**
- 加密套件的可选范围取决于所选的 TLS 协议版本（TLSVersions 参数）。
- 只要加密套件被任意一个已选 TLS 版本支持，即可添加到列表中。
- 若 TLSVersions 包含 TLSv1.3：可不指定 TLSv1.3 专属加密套件（系统将自动补全全部 TLSv1.3 套件）；若指定，则必须包含全部 TLSv1.3 专属加密套件，不支持仅指定部分。

**获取可用加密套件：**
请调用 [DescribeSecurityPolicyCapabilities](https://cloud.tencent.com/document/api/xxx) 接口查询各 TLS 版本支持的加密套件列表。

     */
    public $Ciphers;

    /**
     * @var array 安全策略支持的 TLS 协议版本列表。TLS（Transport Layer Security）协议用于保障客户端与负载均衡之间的通信安全。

**可选值：**
- **TLSv1.0**：兼容性最好，但安全性较低，不推荐在生产环境使用。
- **TLSv1.1**：安全性略优于 TLSv1.0，但仍不推荐。
- **TLSv1.2**：目前主流的安全协议版本，兼顾安全性与兼容性。
- **TLSv1.3**：最新版本，安全性最高，性能更优，推荐优先使用。

**建议：** 生产环境建议至少选择 TLSv1.2，若客户端支持，优先启用 TLSv1.3。

     */
    public $TLSVersions;

    /**
     * @var string 客户端幂等性令牌。

用于保证请求的幂等性，防止因网络超时或客户端重试导致的重复创建。建议使用 UUID 作为令牌值。相同的 ClientToken 在有效期内重复请求时，服务端将返回相同的结果。

     */
    public $ClientToken;

    /**
     * @var boolean 是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际创建资源。预检请求将验证参数格式、权限及资源配额等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接创建安全策略。

     */
    public $DryRun;

    /**
     * @var string 安全策略名称。用于标识和区分不同的安全策略。

**命名规则：**
- 长度为 2~128 个字符。
- 必须以英文字母或中文开头。
- 可包含英文字母、中文、数字、半角句号（.）、下划线（_）和短划线（-）。

**建议：** 使用具有业务含义的名称，例如 "prod-high-security" 或 "测试环境策略"。

     */
    public $SecurityPolicyName;

    /**
     * @var array 安全策略的标签列表。标签用于对资源进行分类和管理，便于按业务、环境、部门等维度筛选和组织资源。

每个标签由键值对（Key-Value）组成，同一资源下标签键不可重复。

     */
    public $Tags;

    /**
     * @param array $Ciphers 安全策略支持的加密套件列表。加密套件用于协商客户端与服务端之间的加密算法。

**配置说明：**
- 加密套件的可选范围取决于所选的 TLS 协议版本（TLSVersions 参数）。
- 只要加密套件被任意一个已选 TLS 版本支持，即可添加到列表中。
- 若 TLSVersions 包含 TLSv1.3：可不指定 TLSv1.3 专属加密套件（系统将自动补全全部 TLSv1.3 套件）；若指定，则必须包含全部 TLSv1.3 专属加密套件，不支持仅指定部分。

**获取可用加密套件：**
请调用 [DescribeSecurityPolicyCapabilities](https://cloud.tencent.com/document/api/xxx) 接口查询各 TLS 版本支持的加密套件列表。

     * @param array $TLSVersions 安全策略支持的 TLS 协议版本列表。TLS（Transport Layer Security）协议用于保障客户端与负载均衡之间的通信安全。

**可选值：**
- **TLSv1.0**：兼容性最好，但安全性较低，不推荐在生产环境使用。
- **TLSv1.1**：安全性略优于 TLSv1.0，但仍不推荐。
- **TLSv1.2**：目前主流的安全协议版本，兼顾安全性与兼容性。
- **TLSv1.3**：最新版本，安全性最高，性能更优，推荐优先使用。

**建议：** 生产环境建议至少选择 TLSv1.2，若客户端支持，优先启用 TLSv1.3。

     * @param string $ClientToken 客户端幂等性令牌。

用于保证请求的幂等性，防止因网络超时或客户端重试导致的重复创建。建议使用 UUID 作为令牌值。相同的 ClientToken 在有效期内重复请求时，服务端将返回相同的结果。

     * @param boolean $DryRun 是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际创建资源。预检请求将验证参数格式、权限及资源配额等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接创建安全策略。

     * @param string $SecurityPolicyName 安全策略名称。用于标识和区分不同的安全策略。

**命名规则：**
- 长度为 2~128 个字符。
- 必须以英文字母或中文开头。
- 可包含英文字母、中文、数字、半角句号（.）、下划线（_）和短划线（-）。

**建议：** 使用具有业务含义的名称，例如 "prod-high-security" 或 "测试环境策略"。

     * @param array $Tags 安全策略的标签列表。标签用于对资源进行分类和管理，便于按业务、环境、部门等维度筛选和组织资源。

每个标签由键值对（Key-Value）组成，同一资源下标签键不可重复。
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
        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("TLSVersions",$param) and $param["TLSVersions"] !== null) {
            $this->TLSVersions = $param["TLSVersions"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("SecurityPolicyName",$param) and $param["SecurityPolicyName"] !== null) {
            $this->SecurityPolicyName = $param["SecurityPolicyName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
