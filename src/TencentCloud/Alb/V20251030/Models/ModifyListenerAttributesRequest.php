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
 * ModifyListenerAttributes请求参数结构体
 *
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method array getCaCertificateIds() 获取监听器配置的CA证书ID列表。目前仅支持添加1个CA证书。
 * @method void setCaCertificateIds(array $CaCertificateIds) 设置监听器配置的CA证书ID列表。目前仅支持添加1个CA证书。
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
 * @method array getDefaultActions() 获取默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
 * @method void setDefaultActions(array $DefaultActions) 设置默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
 * @method boolean getGzipEnabled() 获取是否启用 Gzip 压缩。
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置是否启用 Gzip 压缩。
 * @method boolean getHttp2Enabled() 获取是否开启HTTP/2特性。只有 HTTPS 协议支持此参数。
 * @method void setHttp2Enabled(boolean $Http2Enabled) 设置是否开启HTTP/2特性。只有 HTTPS 协议支持此参数。
 * @method integer getIdleTimeout() 获取指定连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在设定时间内一直没有访问请求，负载均衡会暂时断开当前连接，下次请求来临时重新建立新的连接。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置指定连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在设定时间内一直没有访问请求，负载均衡会暂时断开当前连接，下次请求来临时重新建立新的连接。
 * @method string getListenerName() 获取自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 * @method void setListenerName(string $ListenerName) 设置自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 * @method integer getRequestTimeout() 获取指定请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置指定请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
 * @method string getSecurityPolicyId() 获取安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置安全策略 ID，格式为 tls- 后接 8 位字母数字。
 * @method XForwardedForConfig getXForwardedForConfig() 获取XForwardedFor配置。
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置XForwardedFor配置。
 */
class ModifyListenerAttributesRequest extends AbstractModel
{
    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var array 监听器配置的CA证书ID列表。目前仅支持添加1个CA证书。
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
     * @var array 默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
     */
    public $DefaultActions;

    /**
     * @var boolean 是否启用 Gzip 压缩。
     */
    public $GzipEnabled;

    /**
     * @var boolean 是否开启HTTP/2特性。只有 HTTPS 协议支持此参数。
     */
    public $Http2Enabled;

    /**
     * @var integer 指定连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在设定时间内一直没有访问请求，负载均衡会暂时断开当前连接，下次请求来临时重新建立新的连接。
     */
    public $IdleTimeout;

    /**
     * @var string 自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
     */
    public $ListenerName;

    /**
     * @var integer 指定请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
     */
    public $RequestTimeout;

    /**
     * @var string 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyId;

    /**
     * @var XForwardedForConfig XForwardedFor配置。
     */
    public $XForwardedForConfig;

    /**
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param array $CaCertificateIds 监听器配置的CA证书ID列表。目前仅支持添加1个CA证书。
     * @param boolean $CaEnabled 是否开启双向认证。
取值：
true：开启。
false（默认值）：不开启。
     * @param array $CertificateIds 服务器证书 ID 列表。
     * @param string $ClientToken 客户端Token，用于保证请求的幂等性。  

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
     * @param array $DefaultActions 默认转发规则动作列表。目前监听器仅支持添加 1 个默认转发规则动作。
     * @param boolean $GzipEnabled 是否启用 Gzip 压缩。
     * @param boolean $Http2Enabled 是否开启HTTP/2特性。只有 HTTPS 协议支持此参数。
     * @param integer $IdleTimeout 指定连接空闲超时时间。单位：秒。
取值范围：1~600。
默认值：15。
如果在设定时间内一直没有访问请求，负载均衡会暂时断开当前连接，下次请求来临时重新建立新的连接。
     * @param string $ListenerName 自定义监听名称。  长度为 1~255 个字符，必须是中文和无害字符串中的字符，  可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
     * @param integer $RequestTimeout 指定请求超时时间。单位：秒。
取值：1~600。
默认值：60。
如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，并给客户端返回HTTP 504错误码。
     * @param string $SecurityPolicyId 安全策略 ID，格式为 tls- 后接 8 位字母数字。
     * @param XForwardedForConfig $XForwardedForConfig XForwardedFor配置。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }
    }
}
