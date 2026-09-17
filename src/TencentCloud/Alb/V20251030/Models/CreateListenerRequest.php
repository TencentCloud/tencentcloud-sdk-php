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
 * @method array getDefaultActions() 获取<p>默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。</p>
 * @method void setDefaultActions(array $DefaultActions) 设置<p>默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。</p>
 * @method integer getListenerPort() 获取<p>负载均衡实例前端使用的端口。  取值：1~65535。</p>
 * @method void setListenerPort(integer $ListenerPort) 设置<p>负载均衡实例前端使用的端口。  取值：1~65535。</p>
 * @method string getListenerProtocol() 获取<p>监听协议。  取值：HTTP、HTTPS 或 QUIC。</p>
 * @method void setListenerProtocol(string $ListenerProtocol) 设置<p>监听协议。  取值：HTTP、HTTPS 或 QUIC。</p>
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method array getCaCertificateIds() 获取<p>监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。<br>当 CaEnabled 参数取值为 true 时，此参数必填。</p>
 * @method void setCaCertificateIds(array $CaCertificateIds) 设置<p>监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。<br>当 CaEnabled 参数取值为 true 时，此参数必填。</p>
 * @method boolean getCaEnabled() 获取<p>是否开启双向认证。<br>取值：<br>true：开启。<br>false（默认值）：不开启。</p>
 * @method void setCaEnabled(boolean $CaEnabled) 设置<p>是否开启双向认证。<br>取值：<br>true：开启。<br>false（默认值）：不开启。</p>
 * @method array getCertificateIds() 获取<p>服务器证书 ID 列表。</p>
 * @method void setCertificateIds(array $CertificateIds) 设置<p>服务器证书 ID 列表。</p>
 * @method string getClientToken() 获取<p>客户端Token，用于保证请求的幂等性。  </p><p>从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>客户端Token，用于保证请求的幂等性。  </p><p>从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。</p>
 * @method boolean getGzipEnabled() 获取<p>是否开启Gzip压缩。取值:true(默认值):是。false:否</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置<p>是否开启Gzip压缩。取值:true(默认值):是。false:否</p>
 * @method boolean getHttp2Enabled() 获取<p>是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。</p>
 * @method void setHttp2Enabled(boolean $Http2Enabled) 设置<p>是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。</p>
 * @method integer getIdleTimeout() 获取<p>连接空闲超时时间。单位：秒。<br>取值范围：1~600。<br>默认值：15。<br>如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。</p>
 * @method void setIdleTimeout(integer $IdleTimeout) 设置<p>连接空闲超时时间。单位：秒。<br>取值范围：1~600。<br>默认值：15。<br>如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。</p>
 * @method string getListenerName() 获取<p>自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。</p>
 * @method void setListenerName(string $ListenerName) 设置<p>自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。</p>
 * @method integer getRequestTimeout() 获取<p>连接请求超时时间。单位：秒。取值：1~600。默认值：60。如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。</p>
 * @method void setRequestTimeout(integer $RequestTimeout) 设置<p>连接请求超时时间。单位：秒。取值：1~600。默认值：60。如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。</p>
 * @method string getSecurityPolicyId() 获取<p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置<p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
 * @method array getTags() 获取<p>标签列表。最大支持20个。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表。最大支持20个。</p>
 * @method XForwardedForConfig getXForwardedForConfig() 获取<p>X-Forwarded-For配置</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置<p>X-Forwarded-For配置</p>
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var array <p>默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。</p>
     */
    public $DefaultActions;

    /**
     * @var integer <p>负载均衡实例前端使用的端口。  取值：1~65535。</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>监听协议。  取值：HTTP、HTTPS 或 QUIC。</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。<br>当 CaEnabled 参数取值为 true 时，此参数必填。</p>
     */
    public $CaCertificateIds;

    /**
     * @var boolean <p>是否开启双向认证。<br>取值：<br>true：开启。<br>false（默认值）：不开启。</p>
     */
    public $CaEnabled;

    /**
     * @var array <p>服务器证书 ID 列表。</p>
     */
    public $CertificateIds;

    /**
     * @var string <p>客户端Token，用于保证请求的幂等性。  </p><p>从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>是否开启Gzip压缩。取值:true(默认值):是。false:否</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。</p>
     */
    public $Http2Enabled;

    /**
     * @var integer <p>连接空闲超时时间。单位：秒。<br>取值范围：1~600。<br>默认值：15。<br>如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>连接请求超时时间。单位：秒。取值：1~600。默认值：60。如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。</p>
     */
    public $RequestTimeout;

    /**
     * @var string <p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
     */
    public $SecurityPolicyId;

    /**
     * @var array <p>标签列表。最大支持20个。</p>
     */
    public $Tags;

    /**
     * @var XForwardedForConfig <p>X-Forwarded-For配置</p>
     */
    public $XForwardedForConfig;

    /**
     * @param array $DefaultActions <p>默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。</p>
     * @param integer $ListenerPort <p>负载均衡实例前端使用的端口。  取值：1~65535。</p>
     * @param string $ListenerProtocol <p>监听协议。  取值：HTTP、HTTPS 或 QUIC。</p>
     * @param string $LoadBalancerId <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     * @param array $CaCertificateIds <p>监听器配置的CA证书ID列表。目前监听器仅支持添加 1 个 CA 证书。<br>当 CaEnabled 参数取值为 true 时，此参数必填。</p>
     * @param boolean $CaEnabled <p>是否开启双向认证。<br>取值：<br>true：开启。<br>false（默认值）：不开启。</p>
     * @param array $CertificateIds <p>服务器证书 ID 列表。</p>
     * @param string $ClientToken <p>客户端Token，用于保证请求的幂等性。  </p><p>从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。</p>
     * @param boolean $GzipEnabled <p>是否开启Gzip压缩。取值:true(默认值):是。false:否</p>
     * @param boolean $Http2Enabled <p>是否开启HTTP/2特性。HTTP 协议默认 false，HTTPS 协议默认 true。只有 HTTPS 协议支持此参数。</p>
     * @param integer $IdleTimeout <p>连接空闲超时时间。单位：秒。<br>取值范围：1~600。<br>默认值：15。<br>如果在超时时间内一直没有访问请求，负载均衡会断开当前连接，在下次请求到来时创建新的连接。</p>
     * @param string $ListenerName <p>自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。</p>
     * @param integer $RequestTimeout <p>连接请求超时时间。单位：秒。取值：1~600。默认值：60。如果在超时时间内后端服务器没有返回响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。</p>
     * @param string $SecurityPolicyId <p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
     * @param array $Tags <p>标签列表。最大支持20个。</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>X-Forwarded-For配置</p>
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
