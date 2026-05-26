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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddSpartaProtection请求参数结构体
 *
 * @method string getDomain() 获取<p>需要防护的域名</p>
 * @method void setDomain(string $Domain) 设置<p>需要防护的域名</p>
 * @method integer getCertType() 获取<p>证书类型。<br>0：仅配置HTTP监听端口，没有证书<br>1：证书来源为自有证书<br>2：证书来源为托管证书</p>
 * @method void setCertType(integer $CertType) 设置<p>证书类型。<br>0：仅配置HTTP监听端口，没有证书<br>1：证书来源为自有证书<br>2：证书来源为托管证书</p>
 * @method integer getIsCdn() 获取<p>waf前是否部署有七层代理服务。<br>0：没有部署代理服务<br>1：有部署代理服务，waf将使用XFF获取客户端IP<br>2：有部署代理服务，waf将使用remote_addr获取客户端IP<br>3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
 * @method void setIsCdn(integer $IsCdn) 设置<p>waf前是否部署有七层代理服务。<br>0：没有部署代理服务<br>1：有部署代理服务，waf将使用XFF获取客户端IP<br>2：有部署代理服务，waf将使用remote_addr获取客户端IP<br>3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
 * @method integer getUpstreamType() 获取<p>回源类型。<br>0：通过IP回源<br>1：通过域名回源</p>
 * @method void setUpstreamType(integer $UpstreamType) 设置<p>回源类型。<br>0：通过IP回源<br>1：通过域名回源</p>
 * @method integer getIsWebsocket() 获取<p>是否开启WebSocket支持。<br>0：关闭<br>1：开启</p>
 * @method void setIsWebsocket(integer $IsWebsocket) 设置<p>是否开启WebSocket支持。<br>0：关闭<br>1：开启</p>
 * @method string getLoadBalance() 获取<p>回源负载均衡策略。<br>0：轮询<br>1：IP hash<br>2：加权轮询</p>
 * @method void setLoadBalance(string $LoadBalance) 设置<p>回源负载均衡策略。<br>0：轮询<br>1：IP hash<br>2：加权轮询</p>
 * @method array getPorts() 获取<p>服务端口列表配置。<br>NginxServerId：新增域名时填&#39;0&#39;<br>Port：监听端口号<br>Protocol：端口协议<br>UpstreamPort：与Port相同<br>UpstreamProtocol：与Protocol相同</p>
 * @method void setPorts(array $Ports) 设置<p>服务端口列表配置。<br>NginxServerId：新增域名时填&#39;0&#39;<br>Port：监听端口号<br>Protocol：端口协议<br>UpstreamPort：与Port相同<br>UpstreamProtocol：与Protocol相同</p>
 * @method string getIsKeepAlive() 获取<p>必填项，是否开启长连接。<br>0： 短连接<br>1： 长连接</p>
 * @method void setIsKeepAlive(string $IsKeepAlive) 设置<p>必填项，是否开启长连接。<br>0： 短连接<br>1： 长连接</p>
 * @method string getInstanceID() 获取<p>必填项，域名所属实例id</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>必填项，域名所属实例id</p>
 * @method integer getHttpsRewrite() 获取<p>是否开启HTTP强制跳转到HTTPS。0：不强制跳转1：开启强制跳转</p>
 * @method void setHttpsRewrite(integer $HttpsRewrite) 设置<p>是否开启HTTP强制跳转到HTTPS。0：不强制跳转1：开启强制跳转</p>
 * @method integer getIsHttp2() 获取<p>是否开启HTTP2，需要开启HTTPS协议支持。0：关闭1：开启</p>
 * @method void setIsHttp2(integer $IsHttp2) 设置<p>是否开启HTTP2，需要开启HTTPS协议支持。0：关闭1：开启</p>
 * @method integer getActiveCheck() 获取<p>是否开启主动健康检测。0：不开启1：开启</p>
 * @method void setActiveCheck(integer $ActiveCheck) 设置<p>是否开启主动健康检测。0：不开启1：开启</p>
 * @method integer getCipherTemplate() 获取<p>加密套件模板。0：不支持选择，使用默认模板  1：通用型模板 2：安全型模板3：自定义模板</p>
 * @method void setCipherTemplate(integer $CipherTemplate) 设置<p>加密套件模板。0：不支持选择，使用默认模板  1：通用型模板 2：安全型模板3：自定义模板</p>
 * @method string getCert() 获取<p>CertType为1时，需要填充此参数，表示自有证书的证书链</p>
 * @method void setCert(string $Cert) 设置<p>CertType为1时，需要填充此参数，表示自有证书的证书链</p>
 * @method string getPrivateKey() 获取<p>CertType为1时，需要填充此参数，表示自有证书的私钥</p>
 * @method void setPrivateKey(string $PrivateKey) 设置<p>CertType为1时，需要填充此参数，表示自有证书的私钥</p>
 * @method string getSSLId() 获取<p>CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
 * @method void setSSLId(string $SSLId) 设置<p>CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
 * @method string getResourceId() 获取<p>Waf的资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>Waf的资源ID。</p>
 * @method array getIpHeaders() 获取<p>IsCdn为3时，需要填此参数，表示自定义header</p>
 * @method void setIpHeaders(array $IpHeaders) 设置<p>IsCdn为3时，需要填此参数，表示自定义header</p>
 * @method string getUpstreamScheme() 获取<p>服务配置有HTTPS端口时，HTTPS的回源协议。<br>http：使用http协议回源，和HttpsUpstreamPort配合使用<br>https：使用https协议回源</p>
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置<p>服务配置有HTTPS端口时，HTTPS的回源协议。<br>http：使用http协议回源，和HttpsUpstreamPort配合使用<br>https：使用https协议回源</p>
 * @method string getHttpsUpstreamPort() 获取<p>HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段</p>
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置<p>HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段</p>
 * @method integer getIsGray() 获取<p>是否开启灰度，0表示不开启灰度。</p>
 * @method void setIsGray(integer $IsGray) 设置<p>是否开启灰度，0表示不开启灰度。</p>
 * @method array getGrayAreas() 获取<p>灰度的地区</p>
 * @method void setGrayAreas(array $GrayAreas) 设置<p>灰度的地区</p>
 * @method string getUpstreamDomain() 获取<p>域名回源时的回源域名。UpstreamType为1时，需要填充此字段</p>
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置<p>域名回源时的回源域名。UpstreamType为1时，需要填充此字段</p>
 * @method array getSrcList() 获取<p>IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段</p>
 * @method void setSrcList(array $SrcList) 设置<p>IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段</p>
 * @method string getEdition() 获取<p>WAF实例类型。<br>sparta-waf：SAAS型WAF<br>clb-waf：负载均衡型WAF<br>cdn-waf：CDN上的Web防护能力</p>
 * @method void setEdition(string $Edition) 设置<p>WAF实例类型。<br>sparta-waf：SAAS型WAF<br>clb-waf：负载均衡型WAF<br>cdn-waf：CDN上的Web防护能力</p>
 * @method integer getAnycast() 获取<p>目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP</p>
 * @method void setAnycast(integer $Anycast) 设置<p>目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP</p>
 * @method array getWeights() 获取<p>回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []</p>
 * @method void setWeights(array $Weights) 设置<p>回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []</p>
 * @method integer getTLSVersion() 获取<p>TLS版本信息</p>
 * @method void setTLSVersion(integer $TLSVersion) 设置<p>TLS版本信息</p>
 * @method array getCiphers() 获取<p>自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。</p>
 * @method void setCiphers(array $Ciphers) 设置<p>自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。</p>
 * @method integer getProxyConnectTimeout() 获取<p>WAF与源站的连接超时，默认10s。</p>
 * @method void setProxyConnectTimeout(integer $ProxyConnectTimeout) 设置<p>WAF与源站的连接超时，默认10s。</p>
 * @method integer getProxyReadTimeout() 获取<p>WAF与源站的读超时时间，默认300s。</p>
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) 设置<p>WAF与源站的读超时时间，默认300s。</p>
 * @method integer getProxySendTimeout() 获取<p>WAF与源站的写超时时间，默认300s。</p>
 * @method void setProxySendTimeout(integer $ProxySendTimeout) 设置<p>WAF与源站的写超时时间，默认300s。</p>
 * @method integer getSniType() 获取<p>WAF回源时的SNI类型。<br>0：关闭SNI，不配置client_hello中的server_name<br>1：开启SNI，client_hello中的server_name为防护域名<br>2：开启SNI，SNI为域名回源时的源站域名<br>3：开启SNI，SNI为自定义域名</p>
 * @method void setSniType(integer $SniType) 设置<p>WAF回源时的SNI类型。<br>0：关闭SNI，不配置client_hello中的server_name<br>1：开启SNI，client_hello中的server_name为防护域名<br>2：开启SNI，SNI为域名回源时的源站域名<br>3：开启SNI，SNI为自定义域名</p>
 * @method string getSniHost() 获取<p>SniType为3时，需要填此参数，表示自定义的SNI；</p>
 * @method void setSniHost(string $SniHost) 设置<p>SniType为3时，需要填此参数，表示自定义的SNI；</p>
 * @method integer getXFFReset() 获取<p>是否开启XFF重置。0：关闭 1：开启</p>
 * @method void setXFFReset(integer $XFFReset) 设置<p>是否开启XFF重置。0：关闭 1：开启</p>
 * @method string getNote() 获取<p>域名备注信息</p>
 * @method void setNote(string $Note) 设置<p>域名备注信息</p>
 * @method string getUpstreamHost() 获取<p>自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。</p>
 * @method void setUpstreamHost(string $UpstreamHost) 设置<p>自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。</p>
 * @method integer getProxyBuffer() 获取<p>是否开启缓存。 0：关闭 1：开启</p>
 * @method void setProxyBuffer(integer $ProxyBuffer) 设置<p>是否开启缓存。 0：关闭 1：开启</p>
 * @method integer getProbeStatus() 获取<p>是否开启拨测。 0: 禁用拨测  1: 启用拨测。默认启用拨测</p>
 * @method void setProbeStatus(integer $ProbeStatus) 设置<p>是否开启拨测。 0: 禁用拨测  1: 启用拨测。默认启用拨测</p>
 * @method integer getGmType() 获取<p>国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问</p>
 * @method void setGmType(integer $GmType) 设置<p>国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问</p>
 * @method integer getGmCertType() 获取<p>国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书</p>
 * @method void setGmCertType(integer $GmCertType) 设置<p>国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书</p>
 * @method string getGmCert() 获取<p>GmCertType为1时，需要填充此参数，表示自有国密证书的证书链</p>
 * @method void setGmCert(string $GmCert) 设置<p>GmCertType为1时，需要填充此参数，表示自有国密证书的证书链</p>
 * @method string getGmPrivateKey() 获取<p>GmCertType为1时，需要填充此参数，表示自有国密证书的私钥</p>
 * @method void setGmPrivateKey(string $GmPrivateKey) 设置<p>GmCertType为1时，需要填充此参数，表示自有国密证书的私钥</p>
 * @method string getGmEncCert() 获取<p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书</p>
 * @method void setGmEncCert(string $GmEncCert) 设置<p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书</p>
 * @method string getGmEncPrivateKey() 获取<p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥</p>
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) 设置<p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥</p>
 * @method string getGmSSLId() 获取<p>GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
 * @method void setGmSSLId(string $GmSSLId) 设置<p>GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
 * @method integer getUpstreamPolicy() 获取<p>回源策略，支持负载均衡回源和分流回源两种方式。0：默认值，负载均衡回源；1：分流回源</p>
 * @method void setUpstreamPolicy(integer $UpstreamPolicy) 设置<p>回源策略，支持负载均衡回源和分流回源两种方式。0：默认值，负载均衡回源；1：分流回源</p>
 * @method array getUpstreamRules() 获取<p>分流回源时生效，分流回源的规则。</p>
 * @method void setUpstreamRules(array $UpstreamRules) 设置<p>分流回源时生效，分流回源的规则。</p>
 * @method integer getUseCase() 获取<p>业务场景。0：默认值，表示常规业务场景 1：大模型业务场景</p>
 * @method void setUseCase(integer $UseCase) 设置<p>业务场景。0：默认值，表示常规业务场景 1：大模型业务场景</p>
 * @method integer getGzip() 获取<p>gzip开关。0：关闭 1：默认值，打开。</p>
 * @method void setGzip(integer $Gzip) 设置<p>gzip开关。0：关闭 1：默认值，打开。</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class AddSpartaProtectionRequest extends AbstractModel
{
    /**
     * @var string <p>需要防护的域名</p>
     */
    public $Domain;

    /**
     * @var integer <p>证书类型。<br>0：仅配置HTTP监听端口，没有证书<br>1：证书来源为自有证书<br>2：证书来源为托管证书</p>
     */
    public $CertType;

    /**
     * @var integer <p>waf前是否部署有七层代理服务。<br>0：没有部署代理服务<br>1：有部署代理服务，waf将使用XFF获取客户端IP<br>2：有部署代理服务，waf将使用remote_addr获取客户端IP<br>3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
     */
    public $IsCdn;

    /**
     * @var integer <p>回源类型。<br>0：通过IP回源<br>1：通过域名回源</p>
     */
    public $UpstreamType;

    /**
     * @var integer <p>是否开启WebSocket支持。<br>0：关闭<br>1：开启</p>
     */
    public $IsWebsocket;

    /**
     * @var string <p>回源负载均衡策略。<br>0：轮询<br>1：IP hash<br>2：加权轮询</p>
     */
    public $LoadBalance;

    /**
     * @var array <p>服务端口列表配置。<br>NginxServerId：新增域名时填&#39;0&#39;<br>Port：监听端口号<br>Protocol：端口协议<br>UpstreamPort：与Port相同<br>UpstreamProtocol：与Protocol相同</p>
     */
    public $Ports;

    /**
     * @var string <p>必填项，是否开启长连接。<br>0： 短连接<br>1： 长连接</p>
     */
    public $IsKeepAlive;

    /**
     * @var string <p>必填项，域名所属实例id</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>是否开启HTTP强制跳转到HTTPS。0：不强制跳转1：开启强制跳转</p>
     */
    public $HttpsRewrite;

    /**
     * @var integer <p>是否开启HTTP2，需要开启HTTPS协议支持。0：关闭1：开启</p>
     */
    public $IsHttp2;

    /**
     * @var integer <p>是否开启主动健康检测。0：不开启1：开启</p>
     */
    public $ActiveCheck;

    /**
     * @var integer <p>加密套件模板。0：不支持选择，使用默认模板  1：通用型模板 2：安全型模板3：自定义模板</p>
     */
    public $CipherTemplate;

    /**
     * @var string <p>CertType为1时，需要填充此参数，表示自有证书的证书链</p>
     */
    public $Cert;

    /**
     * @var string <p>CertType为1时，需要填充此参数，表示自有证书的私钥</p>
     */
    public $PrivateKey;

    /**
     * @var string <p>CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
     */
    public $SSLId;

    /**
     * @var string <p>Waf的资源ID。</p>
     * @deprecated
     */
    public $ResourceId;

    /**
     * @var array <p>IsCdn为3时，需要填此参数，表示自定义header</p>
     */
    public $IpHeaders;

    /**
     * @var string <p>服务配置有HTTPS端口时，HTTPS的回源协议。<br>http：使用http协议回源，和HttpsUpstreamPort配合使用<br>https：使用https协议回源</p>
     */
    public $UpstreamScheme;

    /**
     * @var string <p>HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段</p>
     * @deprecated
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer <p>是否开启灰度，0表示不开启灰度。</p>
     * @deprecated
     */
    public $IsGray;

    /**
     * @var array <p>灰度的地区</p>
     * @deprecated
     */
    public $GrayAreas;

    /**
     * @var string <p>域名回源时的回源域名。UpstreamType为1时，需要填充此字段</p>
     */
    public $UpstreamDomain;

    /**
     * @var array <p>IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段</p>
     */
    public $SrcList;

    /**
     * @var string <p>WAF实例类型。<br>sparta-waf：SAAS型WAF<br>clb-waf：负载均衡型WAF<br>cdn-waf：CDN上的Web防护能力</p>
     * @deprecated
     */
    public $Edition;

    /**
     * @var integer <p>目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP</p>
     * @deprecated
     */
    public $Anycast;

    /**
     * @var array <p>回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []</p>
     */
    public $Weights;

    /**
     * @var integer <p>TLS版本信息</p>
     */
    public $TLSVersion;

    /**
     * @var array <p>自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。</p>
     */
    public $Ciphers;

    /**
     * @var integer <p>WAF与源站的连接超时，默认10s。</p>
     */
    public $ProxyConnectTimeout;

    /**
     * @var integer <p>WAF与源站的读超时时间，默认300s。</p>
     */
    public $ProxyReadTimeout;

    /**
     * @var integer <p>WAF与源站的写超时时间，默认300s。</p>
     */
    public $ProxySendTimeout;

    /**
     * @var integer <p>WAF回源时的SNI类型。<br>0：关闭SNI，不配置client_hello中的server_name<br>1：开启SNI，client_hello中的server_name为防护域名<br>2：开启SNI，SNI为域名回源时的源站域名<br>3：开启SNI，SNI为自定义域名</p>
     */
    public $SniType;

    /**
     * @var string <p>SniType为3时，需要填此参数，表示自定义的SNI；</p>
     */
    public $SniHost;

    /**
     * @var integer <p>是否开启XFF重置。0：关闭 1：开启</p>
     */
    public $XFFReset;

    /**
     * @var string <p>域名备注信息</p>
     */
    public $Note;

    /**
     * @var string <p>自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。</p>
     */
    public $UpstreamHost;

    /**
     * @var integer <p>是否开启缓存。 0：关闭 1：开启</p>
     */
    public $ProxyBuffer;

    /**
     * @var integer <p>是否开启拨测。 0: 禁用拨测  1: 启用拨测。默认启用拨测</p>
     */
    public $ProbeStatus;

    /**
     * @var integer <p>国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问</p>
     */
    public $GmType;

    /**
     * @var integer <p>国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书</p>
     */
    public $GmCertType;

    /**
     * @var string <p>GmCertType为1时，需要填充此参数，表示自有国密证书的证书链</p>
     */
    public $GmCert;

    /**
     * @var string <p>GmCertType为1时，需要填充此参数，表示自有国密证书的私钥</p>
     */
    public $GmPrivateKey;

    /**
     * @var string <p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书</p>
     */
    public $GmEncCert;

    /**
     * @var string <p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥</p>
     */
    public $GmEncPrivateKey;

    /**
     * @var string <p>GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
     */
    public $GmSSLId;

    /**
     * @var integer <p>回源策略，支持负载均衡回源和分流回源两种方式。0：默认值，负载均衡回源；1：分流回源</p>
     */
    public $UpstreamPolicy;

    /**
     * @var array <p>分流回源时生效，分流回源的规则。</p>
     */
    public $UpstreamRules;

    /**
     * @var integer <p>业务场景。0：默认值，表示常规业务场景 1：大模型业务场景</p>
     */
    public $UseCase;

    /**
     * @var integer <p>gzip开关。0：关闭 1：默认值，打开。</p>
     */
    public $Gzip;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param string $Domain <p>需要防护的域名</p>
     * @param integer $CertType <p>证书类型。<br>0：仅配置HTTP监听端口，没有证书<br>1：证书来源为自有证书<br>2：证书来源为托管证书</p>
     * @param integer $IsCdn <p>waf前是否部署有七层代理服务。<br>0：没有部署代理服务<br>1：有部署代理服务，waf将使用XFF获取客户端IP<br>2：有部署代理服务，waf将使用remote_addr获取客户端IP<br>3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
     * @param integer $UpstreamType <p>回源类型。<br>0：通过IP回源<br>1：通过域名回源</p>
     * @param integer $IsWebsocket <p>是否开启WebSocket支持。<br>0：关闭<br>1：开启</p>
     * @param string $LoadBalance <p>回源负载均衡策略。<br>0：轮询<br>1：IP hash<br>2：加权轮询</p>
     * @param array $Ports <p>服务端口列表配置。<br>NginxServerId：新增域名时填&#39;0&#39;<br>Port：监听端口号<br>Protocol：端口协议<br>UpstreamPort：与Port相同<br>UpstreamProtocol：与Protocol相同</p>
     * @param string $IsKeepAlive <p>必填项，是否开启长连接。<br>0： 短连接<br>1： 长连接</p>
     * @param string $InstanceID <p>必填项，域名所属实例id</p>
     * @param integer $HttpsRewrite <p>是否开启HTTP强制跳转到HTTPS。0：不强制跳转1：开启强制跳转</p>
     * @param integer $IsHttp2 <p>是否开启HTTP2，需要开启HTTPS协议支持。0：关闭1：开启</p>
     * @param integer $ActiveCheck <p>是否开启主动健康检测。0：不开启1：开启</p>
     * @param integer $CipherTemplate <p>加密套件模板。0：不支持选择，使用默认模板  1：通用型模板 2：安全型模板3：自定义模板</p>
     * @param string $Cert <p>CertType为1时，需要填充此参数，表示自有证书的证书链</p>
     * @param string $PrivateKey <p>CertType为1时，需要填充此参数，表示自有证书的私钥</p>
     * @param string $SSLId <p>CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
     * @param string $ResourceId <p>Waf的资源ID。</p>
     * @param array $IpHeaders <p>IsCdn为3时，需要填此参数，表示自定义header</p>
     * @param string $UpstreamScheme <p>服务配置有HTTPS端口时，HTTPS的回源协议。<br>http：使用http协议回源，和HttpsUpstreamPort配合使用<br>https：使用https协议回源</p>
     * @param string $HttpsUpstreamPort <p>HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段</p>
     * @param integer $IsGray <p>是否开启灰度，0表示不开启灰度。</p>
     * @param array $GrayAreas <p>灰度的地区</p>
     * @param string $UpstreamDomain <p>域名回源时的回源域名。UpstreamType为1时，需要填充此字段</p>
     * @param array $SrcList <p>IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段</p>
     * @param string $Edition <p>WAF实例类型。<br>sparta-waf：SAAS型WAF<br>clb-waf：负载均衡型WAF<br>cdn-waf：CDN上的Web防护能力</p>
     * @param integer $Anycast <p>目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP</p>
     * @param array $Weights <p>回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []</p>
     * @param integer $TLSVersion <p>TLS版本信息</p>
     * @param array $Ciphers <p>自定义的加密套件列表。CipherTemplate为3时需要填此字段，表示自定义的加密套件，值通过DescribeCiphersDetail接口获取。</p>
     * @param integer $ProxyConnectTimeout <p>WAF与源站的连接超时，默认10s。</p>
     * @param integer $ProxyReadTimeout <p>WAF与源站的读超时时间，默认300s。</p>
     * @param integer $ProxySendTimeout <p>WAF与源站的写超时时间，默认300s。</p>
     * @param integer $SniType <p>WAF回源时的SNI类型。<br>0：关闭SNI，不配置client_hello中的server_name<br>1：开启SNI，client_hello中的server_name为防护域名<br>2：开启SNI，SNI为域名回源时的源站域名<br>3：开启SNI，SNI为自定义域名</p>
     * @param string $SniHost <p>SniType为3时，需要填此参数，表示自定义的SNI；</p>
     * @param integer $XFFReset <p>是否开启XFF重置。0：关闭 1：开启</p>
     * @param string $Note <p>域名备注信息</p>
     * @param string $UpstreamHost <p>自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。</p>
     * @param integer $ProxyBuffer <p>是否开启缓存。 0：关闭 1：开启</p>
     * @param integer $ProbeStatus <p>是否开启拨测。 0: 禁用拨测  1: 启用拨测。默认启用拨测</p>
     * @param integer $GmType <p>国密选项。0：不开启国密 1：在原有TLS选项的基础上追加支持国密 2：开启国密并仅支持国密客户端访问</p>
     * @param integer $GmCertType <p>国密证书类型。0：无国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书</p>
     * @param string $GmCert <p>GmCertType为1时，需要填充此参数，表示自有国密证书的证书链</p>
     * @param string $GmPrivateKey <p>GmCertType为1时，需要填充此参数，表示自有国密证书的私钥</p>
     * @param string $GmEncCert <p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书</p>
     * @param string $GmEncPrivateKey <p>GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥</p>
     * @param string $GmSSLId <p>GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id</p>
     * @param integer $UpstreamPolicy <p>回源策略，支持负载均衡回源和分流回源两种方式。0：默认值，负载均衡回源；1：分流回源</p>
     * @param array $UpstreamRules <p>分流回源时生效，分流回源的规则。</p>
     * @param integer $UseCase <p>业务场景。0：默认值，表示常规业务场景 1：大模型业务场景</p>
     * @param integer $Gzip <p>gzip开关。0：关闭 1：默认值，打开。</p>
     * @param array $Tags <p>标签信息</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortItem();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("ActiveCheck",$param) and $param["ActiveCheck"] !== null) {
            $this->ActiveCheck = $param["ActiveCheck"];
        }

        if (array_key_exists("CipherTemplate",$param) and $param["CipherTemplate"] !== null) {
            $this->CipherTemplate = $param["CipherTemplate"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("GrayAreas",$param) and $param["GrayAreas"] !== null) {
            $this->GrayAreas = $param["GrayAreas"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Anycast",$param) and $param["Anycast"] !== null) {
            $this->Anycast = $param["Anycast"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("TLSVersion",$param) and $param["TLSVersion"] !== null) {
            $this->TLSVersion = $param["TLSVersion"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("ProxyConnectTimeout",$param) and $param["ProxyConnectTimeout"] !== null) {
            $this->ProxyConnectTimeout = $param["ProxyConnectTimeout"];
        }

        if (array_key_exists("ProxyReadTimeout",$param) and $param["ProxyReadTimeout"] !== null) {
            $this->ProxyReadTimeout = $param["ProxyReadTimeout"];
        }

        if (array_key_exists("ProxySendTimeout",$param) and $param["ProxySendTimeout"] !== null) {
            $this->ProxySendTimeout = $param["ProxySendTimeout"];
        }

        if (array_key_exists("SniType",$param) and $param["SniType"] !== null) {
            $this->SniType = $param["SniType"];
        }

        if (array_key_exists("SniHost",$param) and $param["SniHost"] !== null) {
            $this->SniHost = $param["SniHost"];
        }

        if (array_key_exists("XFFReset",$param) and $param["XFFReset"] !== null) {
            $this->XFFReset = $param["XFFReset"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("ProxyBuffer",$param) and $param["ProxyBuffer"] !== null) {
            $this->ProxyBuffer = $param["ProxyBuffer"];
        }

        if (array_key_exists("ProbeStatus",$param) and $param["ProbeStatus"] !== null) {
            $this->ProbeStatus = $param["ProbeStatus"];
        }

        if (array_key_exists("GmType",$param) and $param["GmType"] !== null) {
            $this->GmType = $param["GmType"];
        }

        if (array_key_exists("GmCertType",$param) and $param["GmCertType"] !== null) {
            $this->GmCertType = $param["GmCertType"];
        }

        if (array_key_exists("GmCert",$param) and $param["GmCert"] !== null) {
            $this->GmCert = $param["GmCert"];
        }

        if (array_key_exists("GmPrivateKey",$param) and $param["GmPrivateKey"] !== null) {
            $this->GmPrivateKey = $param["GmPrivateKey"];
        }

        if (array_key_exists("GmEncCert",$param) and $param["GmEncCert"] !== null) {
            $this->GmEncCert = $param["GmEncCert"];
        }

        if (array_key_exists("GmEncPrivateKey",$param) and $param["GmEncPrivateKey"] !== null) {
            $this->GmEncPrivateKey = $param["GmEncPrivateKey"];
        }

        if (array_key_exists("GmSSLId",$param) and $param["GmSSLId"] !== null) {
            $this->GmSSLId = $param["GmSSLId"];
        }

        if (array_key_exists("UpstreamPolicy",$param) and $param["UpstreamPolicy"] !== null) {
            $this->UpstreamPolicy = $param["UpstreamPolicy"];
        }

        if (array_key_exists("UpstreamRules",$param) and $param["UpstreamRules"] !== null) {
            $this->UpstreamRules = [];
            foreach ($param["UpstreamRules"] as $key => $value){
                $obj = new UpstreamRule();
                $obj->deserialize($value);
                array_push($this->UpstreamRules, $obj);
            }
        }

        if (array_key_exists("UseCase",$param) and $param["UseCase"] !== null) {
            $this->UseCase = $param["UseCase"];
        }

        if (array_key_exists("Gzip",$param) and $param["Gzip"] !== null) {
            $this->Gzip = $param["Gzip"];
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
