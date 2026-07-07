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
 * 安全策略信息。
 *
 * @method array getCiphers() 获取支持的加密套件列表。
支持的加密套件，具体依赖 TLSVersions 的取值。
Cipher 只要被任何一个传入的 TLSVersions 支持即可。

说明：若选择了 TLSv1.3，那么 Cipher 列表必须包含 TLSv1.3 支持的 Cipher。

请调用 DescribeSecurityPolicyCapabilities 接口获取支持的加密套件列表。
 * @method void setCiphers(array $Ciphers) 设置支持的加密套件列表。
支持的加密套件，具体依赖 TLSVersions 的取值。
Cipher 只要被任何一个传入的 TLSVersions 支持即可。

说明：若选择了 TLSv1.3，那么 Cipher 列表必须包含 TLSv1.3 支持的 Cipher。

请调用 DescribeSecurityPolicyCapabilities 接口获取支持的加密套件列表。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getSecurityPolicyId() 获取安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method string getSecurityPolicyName() 获取安全策略名称。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
 * @method void setSecurityPolicyName(string $SecurityPolicyName) 设置安全策略名称。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
 * @method string getStatus() 获取安全策略状态。当前接口最常返回 Active，表示安全策略处于可用状态。
 * @method void setStatus(string $Status) 设置安全策略状态。当前接口最常返回 Active，表示安全策略处于可用状态。
 * @method array getTLSVersions() 获取支持的 TLS 协议版本列表。可选值包括：TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3。
 * @method void setTLSVersions(array $TLSVersions) 设置支持的 TLS 协议版本列表。可选值包括：TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3。
 * @method array getTags() 获取标签信息。
 * @method void setTags(array $Tags) 设置标签信息。
 */
class SecurityPolicyInfo extends AbstractModel
{
    /**
     * @var array 支持的加密套件列表。
支持的加密套件，具体依赖 TLSVersions 的取值。
Cipher 只要被任何一个传入的 TLSVersions 支持即可。

说明：若选择了 TLSv1.3，那么 Cipher 列表必须包含 TLSv1.3 支持的 Cipher。

请调用 DescribeSecurityPolicyCapabilities 接口获取支持的加密套件列表。
     */
    public $Ciphers;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyId;

    /**
     * @var string 安全策略名称。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
     */
    public $SecurityPolicyName;

    /**
     * @var string 安全策略状态。当前接口最常返回 Active，表示安全策略处于可用状态。
     */
    public $Status;

    /**
     * @var array 支持的 TLS 协议版本列表。可选值包括：TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3。
     */
    public $TLSVersions;

    /**
     * @var array 标签信息。
     */
    public $Tags;

    /**
     * @param array $Ciphers 支持的加密套件列表。
支持的加密套件，具体依赖 TLSVersions 的取值。
Cipher 只要被任何一个传入的 TLSVersions 支持即可。

说明：若选择了 TLSv1.3，那么 Cipher 列表必须包含 TLSv1.3 支持的 Cipher。

请调用 DescribeSecurityPolicyCapabilities 接口获取支持的加密套件列表。
     * @param string $CreateTime 创建时间。
     * @param string $SecurityPolicyId 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     * @param string $SecurityPolicyName 安全策略名称。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
     * @param string $Status 安全策略状态。当前接口最常返回 Active，表示安全策略处于可用状态。
     * @param array $TLSVersions 支持的 TLS 协议版本列表。可选值包括：TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3。
     * @param array $Tags 标签信息。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("SecurityPolicyName",$param) and $param["SecurityPolicyName"] !== null) {
            $this->SecurityPolicyName = $param["SecurityPolicyName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TLSVersions",$param) and $param["TLSVersions"] !== null) {
            $this->TLSVersions = $param["TLSVersions"];
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
