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
 * DescribeListenerDetail返回参数结构体
 *
 * @method array getCaCertificateIds() 获取监听器绑定的CA证书ID列表。
 * @method void setCaCertificateIds(array $CaCertificateIds) 设置监听器绑定的CA证书ID列表。
 * @method boolean getCaEnabled() 获取是否开启双向认证。
 * @method void setCaEnabled(boolean $CaEnabled) 设置是否开启双向认证。
 * @method array getCertificateIds() 获取服务器证书 ID 列表。
 * @method void setCertificateIds(array $CertificateIds) 设置服务器证书 ID 列表。
 * @method string getCreateTime() 获取监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method void setCreateTime(string $CreateTime) 设置监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method array getDefaultActions() 获取规则动作列表。
 * @method void setDefaultActions(array $DefaultActions) 设置规则动作列表。
 * @method boolean getGzipEnabled() 获取是否启用 Gzip 压缩。
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置是否启用 Gzip 压缩。
 * @method boolean getHttp2Enabled() 获取是否开启HTTP/2特性。
 * @method void setHttp2Enabled(boolean $Http2Enabled) 设置是否开启HTTP/2特性。
 * @method integer getIdleTimeout() 获取指定连接空闲超时时间。单位：秒。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置指定连接空闲超时时间。单位：秒。
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getListenerName() 获取自定义监听名称。
 * @method void setListenerName(string $ListenerName) 设置自定义监听名称。
 * @method integer getListenerPort() 获取负载均衡实例前端使用的端口。
 * @method void setListenerPort(integer $ListenerPort) 设置负载均衡实例前端使用的端口。
 * @method string getListenerProtocol() 获取监听协议。
 * @method void setListenerProtocol(string $ListenerProtocol) 设置监听协议。
 * @method string getListenerStatus() 获取监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
 * @method void setListenerStatus(string $ListenerStatus) 设置监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method string getModifyTime() 获取监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method void setModifyTime(string $ModifyTime) 设置监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method integer getRequestTimeout() 获取请求超时时间。单位：秒。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置请求超时时间。单位：秒。
 * @method string getSecurityPolicyId() 获取安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method XForwardedForConfig getXForwardedForConfig() 获取XForwardedFor配置。
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置XForwardedFor配置。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeListenerDetailResponse extends AbstractModel
{
    /**
     * @var array 监听器绑定的CA证书ID列表。
     */
    public $CaCertificateIds;

    /**
     * @var boolean 是否开启双向认证。
     */
    public $CaEnabled;

    /**
     * @var array 服务器证书 ID 列表。
     */
    public $CertificateIds;

    /**
     * @var string 监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     */
    public $CreateTime;

    /**
     * @var array 规则动作列表。
     */
    public $DefaultActions;

    /**
     * @var boolean 是否启用 Gzip 压缩。
     */
    public $GzipEnabled;

    /**
     * @var boolean 是否开启HTTP/2特性。
     */
    public $Http2Enabled;

    /**
     * @var integer 指定连接空闲超时时间。单位：秒。
     */
    public $IdleTimeout;

    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var string 自定义监听名称。
     */
    public $ListenerName;

    /**
     * @var integer 负载均衡实例前端使用的端口。
     */
    public $ListenerPort;

    /**
     * @var string 监听协议。
     */
    public $ListenerProtocol;

    /**
     * @var string 监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
     */
    public $ListenerStatus;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var string 监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     */
    public $ModifyTime;

    /**
     * @var integer 请求超时时间。单位：秒。
     */
    public $RequestTimeout;

    /**
     * @var string 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyId;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var XForwardedForConfig XForwardedFor配置。
     */
    public $XForwardedForConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CaCertificateIds 监听器绑定的CA证书ID列表。
     * @param boolean $CaEnabled 是否开启双向认证。
     * @param array $CertificateIds 服务器证书 ID 列表。
     * @param string $CreateTime 监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     * @param array $DefaultActions 规则动作列表。
     * @param boolean $GzipEnabled 是否启用 Gzip 压缩。
     * @param boolean $Http2Enabled 是否开启HTTP/2特性。
     * @param integer $IdleTimeout 指定连接空闲超时时间。单位：秒。
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $ListenerName 自定义监听名称。
     * @param integer $ListenerPort 负载均衡实例前端使用的端口。
     * @param string $ListenerProtocol 监听协议。
     * @param string $ListenerStatus 监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param string $ModifyTime 监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     * @param integer $RequestTimeout 请求超时时间。单位：秒。
     * @param string $SecurityPolicyId 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     * @param array $Tags 标签。
     * @param XForwardedForConfig $XForwardedForConfig XForwardedFor配置。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CaCertificateIds",$param) and $param["CaCertificateIds"] !== null) {
            $this->CaCertificateIds = $param["CaCertificateIds"];
        }

        if (array_key_exists("CaEnabled",$param) and $param["CaEnabled"] !== null) {
            $this->CaEnabled = $param["CaEnabled"];
        }

        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DefaultActions",$param) and $param["DefaultActions"] !== null) {
            $this->DefaultActions = [];
            foreach ($param["DefaultActions"] as $key => $value){
                $obj = new DefaultAction();
                $obj->deserialize($value);
                array_push($this->DefaultActions, $obj);
            }
        }

        if (array_key_exists("GzipEnabled",$param) and $param["GzipEnabled"] !== null) {
            $this->GzipEnabled = $param["GzipEnabled"];
        }

        if (array_key_exists("Http2Enabled",$param) and $param["Http2Enabled"] !== null) {
            $this->Http2Enabled = $param["Http2Enabled"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
