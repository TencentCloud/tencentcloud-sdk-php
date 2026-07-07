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
 * CreateListener请求参数结构体
 *
 * @method array getDefaultActions() 获取默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
 * @method void setDefaultActions(array $DefaultActions) 设置默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
 * @method integer getListenerPort() 获取负载均衡实例前端使用的端口。  取值：1~65535。
 * @method void setListenerPort(integer $ListenerPort) 设置负载均衡实例前端使用的端口。  取值：1~65535。
 * @method string getListenerProtocol() 获取监听协议。  取值：HTTP、HTTPS 或 QUIC。
 * @method void setListenerProtocol(string $ListenerProtocol) 设置监听协议。  取值：HTTP、HTTPS 或 QUIC。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method array getCaCertificateIds() 获取监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。
当 CaEnabled 参数取值为 true 时，此参数必填。
 * @method void setCaCertificateIds(array $CaCertificateIds) 设置监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。
当 CaEnabled 参数取值为 true 时，此参数必填。
 * @method boolean getCaEnabled() 获取是否开启双向认证。
取值：
true：开启。
false（默认值）：不开启。
 * @method void setCaEnabled(boolean $CaEnabled) 设置是否开启双向认证。
取值：
true：开启。
false（默认值）：不开启。
 * @method array getCertificateIds() 获取服务器证书 ID 列表。
 * @method void setCertificateIds(array $CertificateIds) 设置服务器证书 ID 列表。
 * @method string getClientToken() 获取客户端Token，用于保证请求的幂等性。  

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
 * @method void setClientToken(string $ClientToken) 设置客户端Token，用于保证请求的幂等性。  

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
 * @method boolean getGzipEnabled() 获取是否开启Gzip压缩。取值:true(默认值):是。false:否
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置是否开启Gzip压缩。取值:true(默认值):是。false:否
 * @method boolean getHttp2Enabled() 获取是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。
 * @method void setHttp2Enabled(boolean $Http2Enabled) 设置是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。
 * @method integer getIdleTimeout() 获取连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。
 * @method string getListenerName() 获取自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 * @method void setListenerName(string $ListenerName) 设置自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 * @method integer getRequestTimeout() 获取请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
 * @method string getSecurityPolicyId() 获取安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method array getTags() 获取标签列表。最大支持20个。
 * @method void setTags(array $Tags) 设置标签列表。最大支持20个。
 * @method XForwardedForConfig getXForwardedForConfig() 获取X-Forwarded-For配置
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置X-Forwarded-For配置
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var array 默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
     */
    public $DefaultActions;

    /**
     * @var integer 负载均衡实例前端使用的端口。  取值：1~65535。
     */
    public $ListenerPort;

    /**
     * @var string 监听协议。  取值：HTTP、HTTPS 或 QUIC。
     */
    public $ListenerProtocol;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var array 监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。
当 CaEnabled 参数取值为 true 时，此参数必填。
     */
    public $CaCertificateIds;

    /**
     * @var boolean 是否开启双向认证。
取值：
true：开启。
false（默认值）：不开启。
     */
    public $CaEnabled;

    /**
     * @var array 服务器证书 ID 列表。
     */
    public $CertificateIds;

    /**
     * @var string 客户端Token，用于保证请求的幂等性。  

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
     */
    public $ClientToken;

    /**
     * @var boolean 是否开启Gzip压缩。取值:true(默认值):是。false:否
     */
    public $GzipEnabled;

    /**
     * @var boolean 是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。
     */
    public $Http2Enabled;

    /**
     * @var integer 连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。
     */
    public $IdleTimeout;

    /**
     * @var string 自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
     */
    public $ListenerName;

    /**
     * @var integer 请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
     */
    public $RequestTimeout;

    /**
     * @var string 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyId;

    /**
     * @var array 标签列表。最大支持20个。
     */
    public $Tags;

    /**
     * @var XForwardedForConfig X-Forwarded-For配置
     */
    public $XForwardedForConfig;

    /**
     * @param array $DefaultActions 默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
     * @param integer $ListenerPort 负载均衡实例前端使用的端口。  取值：1~65535。
     * @param string $ListenerProtocol 监听协议。  取值：HTTP、HTTPS 或 QUIC。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param array $CaCertificateIds 监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。
当 CaEnabled 参数取值为 true 时，此参数必填。
     * @param boolean $CaEnabled 是否开启双向认证。
取值：
true：开启。
false（默认值）：不开启。
     * @param array $CertificateIds 服务器证书 ID 列表。
     * @param string $ClientToken 客户端Token，用于保证请求的幂等性。  

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
     * @param boolean $GzipEnabled 是否开启Gzip压缩。取值:true(默认值):是。false:否
     * @param boolean $Http2Enabled 是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。
     * @param integer $IdleTimeout 连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。
     * @param string $ListenerName 自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
     * @param integer $RequestTimeout 请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
     * @param string $SecurityPolicyId 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     * @param array $Tags 标签列表。最大支持20个。
     * @param XForwardedForConfig $XForwardedForConfig X-Forwarded-For配置
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
        if (array_key_exists("DefaultActions",$param) and $param["DefaultActions"] !== null) {
            $this->DefaultActions = [];
            foreach ($param["DefaultActions"] as $key => $value){
                $obj = new DefaultAction();
                $obj->deserialize($value);
                array_push($this->DefaultActions, $obj);
            }
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
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
    }
}
