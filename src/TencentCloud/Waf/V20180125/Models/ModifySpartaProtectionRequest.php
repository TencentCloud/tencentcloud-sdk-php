<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifySpartaProtection请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取必填项。域名唯一ID
 * @method void setDomainId(string $DomainId) 设置必填项。域名唯一ID
 * @method integer getCertType() 获取必填项。证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
 * @method void setCertType(integer $CertType) 设置必填项。证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
 * @method string getCert() 获取CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method void setCert(string $Cert) 设置CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method string getPrivateKey() 获取CertType为1时，需要填充此参数，表示自有证书的私钥
 * @method void setPrivateKey(string $PrivateKey) 设置CertType为1时，需要填充此参数，表示自有证书的私钥
 * @method string getSSLId() 获取CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method void setSSLId(string $SSLId) 设置CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method integer getIsCdn() 获取必填项。waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method void setIsCdn(integer $IsCdn) 设置必填项。waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method string getUpstreamScheme() 获取服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
 * @method string getHttpsUpstreamPort() 获取HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
 * @method integer getHttpsRewrite() 获取必填项。是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
 * @method void setHttpsRewrite(integer $HttpsRewrite) 设置必填项。是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
 * @method integer getUpstreamType() 获取必填项。回源类型。
0：通过IP回源
1：通过域名回源
 * @method void setUpstreamType(integer $UpstreamType) 设置必填项。回源类型。
0：通过IP回源
1：通过域名回源
 * @method string getUpstreamDomain() 获取域名回源时的回源域名。UpstreamType为1时，需要填充此字段
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置域名回源时的回源域名。UpstreamType为1时，需要填充此字段
 * @method array getSrcList() 获取IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
 * @method void setSrcList(array $SrcList) 设置IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
 * @method integer getIsHttp2() 获取必填项。是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
 * @method void setIsHttp2(integer $IsHttp2) 设置必填项。是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
 * @method integer getIsWebsocket() 获取必填项。是否开启WebSocket支持。
0：关闭
1：开启
 * @method void setIsWebsocket(integer $IsWebsocket) 设置必填项。是否开启WebSocket支持。
0：关闭
1：开启
 * @method integer getLoadBalance() 获取必填项。回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
 * @method void setLoadBalance(integer $LoadBalance) 设置必填项。回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
 * @method integer getIsGray() 获取待废弃，可不填。是否开启灰度，0表示不开启灰度。
 * @method void setIsGray(integer $IsGray) 设置待废弃，可不填。是否开启灰度，0表示不开启灰度。
 * @method string getEdition() 获取域名所属实例类型
 * @method void setEdition(string $Edition) 设置域名所属实例类型
 * @method array getPorts() 获取必填项。端口信息，可通过DescribeDomains接口获取具体参数信息。
 * @method void setPorts(array $Ports) 设置必填项。端口信息，可通过DescribeDomains接口获取具体参数信息。
 * @method string getIsKeepAlive() 获取必填项。是否开启长连接。
0： 短连接
1： 长连接
 * @method void setIsKeepAlive(string $IsKeepAlive) 设置必填项。是否开启长连接。
0： 短连接
1： 长连接
 * @method string getInstanceID() 获取必填项。域名所属实例id
 * @method void setInstanceID(string $InstanceID) 设置必填项。域名所属实例id
 * @method integer getAnycast() 获取必填项，待废弃。目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP
 * @method void setAnycast(integer $Anycast) 设置必填项，待废弃。目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP
 * @method array getWeights() 获取回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []
 * @method void setWeights(array $Weights) 设置回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []
 * @method integer getActiveCheck() 获取必填项，是否开启主动健康检测。
0：不开启
1：开启
 * @method void setActiveCheck(integer $ActiveCheck) 设置必填项，是否开启主动健康检测。
0：不开启
1：开启
 * @method integer getTLSVersion() 获取TLS版本信息
 * @method void setTLSVersion(integer $TLSVersion) 设置TLS版本信息
 * @method array getCiphers() 获取加密套件信息
 * @method void setCiphers(array $Ciphers) 设置加密套件信息
 * @method integer getCipherTemplate() 获取必填项。加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
 * @method void setCipherTemplate(integer $CipherTemplate) 设置必填项。加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
 * @method integer getProxyReadTimeout() 获取WAF与源站的读超时时间，默认300s。
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) 设置WAF与源站的读超时时间，默认300s。
 * @method integer getProxySendTimeout() 获取WAF与源站的写超时时间，默认300s。
 * @method void setProxySendTimeout(integer $ProxySendTimeout) 设置WAF与源站的写超时时间，默认300s。
 * @method integer getSniType() 获取WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
 * @method void setSniType(integer $SniType) 设置WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
 * @method string getSniHost() 获取SniType为3时，需要填此参数，表示自定义的SNI；
 * @method void setSniHost(string $SniHost) 设置SniType为3时，需要填此参数，表示自定义的SNI；
 * @method array getIpHeaders() 获取IsCdn=3时，需要填此参数，表示自定义header
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，需要填此参数，表示自定义header
 * @method integer getXFFReset() 获取必填项。是否开启XFF重置。
0：关闭
1：开启
 * @method void setXFFReset(integer $XFFReset) 设置必填项。是否开启XFF重置。
0：关闭
1：开启
 * @method string getNote() 获取域名备注信息
 * @method void setNote(string $Note) 设置域名备注信息
 * @method string getUpstreamHost() 获取自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
 * @method void setUpstreamHost(string $UpstreamHost) 设置自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
 */
class ModifySpartaProtectionRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 必填项。域名唯一ID
     */
    public $DomainId;

    /**
     * @var integer 必填项。证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
     */
    public $CertType;

    /**
     * @var string CertType为1时，需要填充此参数，表示自有证书的证书链
     */
    public $Cert;

    /**
     * @var string CertType为1时，需要填充此参数，表示自有证书的私钥
     */
    public $PrivateKey;

    /**
     * @var string CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     */
    public $SSLId;

    /**
     * @var integer 必填项。waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     */
    public $IsCdn;

    /**
     * @var string 服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
     */
    public $UpstreamScheme;

    /**
     * @var string HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer 必填项。是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
     */
    public $HttpsRewrite;

    /**
     * @var integer 必填项。回源类型。
0：通过IP回源
1：通过域名回源
     */
    public $UpstreamType;

    /**
     * @var string 域名回源时的回源域名。UpstreamType为1时，需要填充此字段
     */
    public $UpstreamDomain;

    /**
     * @var array IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
     */
    public $SrcList;

    /**
     * @var integer 必填项。是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
     */
    public $IsHttp2;

    /**
     * @var integer 必填项。是否开启WebSocket支持。
0：关闭
1：开启
     */
    public $IsWebsocket;

    /**
     * @var integer 必填项。回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
     */
    public $LoadBalance;

    /**
     * @var integer 待废弃，可不填。是否开启灰度，0表示不开启灰度。
     */
    public $IsGray;

    /**
     * @var string 域名所属实例类型
     */
    public $Edition;

    /**
     * @var array 必填项。端口信息，可通过DescribeDomains接口获取具体参数信息。
     */
    public $Ports;

    /**
     * @var string 必填项。是否开启长连接。
0： 短连接
1： 长连接
     */
    public $IsKeepAlive;

    /**
     * @var string 必填项。域名所属实例id
     */
    public $InstanceID;

    /**
     * @var integer 必填项，待废弃。目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP
     */
    public $Anycast;

    /**
     * @var array 回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []
     */
    public $Weights;

    /**
     * @var integer 必填项，是否开启主动健康检测。
0：不开启
1：开启
     */
    public $ActiveCheck;

    /**
     * @var integer TLS版本信息
     */
    public $TLSVersion;

    /**
     * @var array 加密套件信息
     */
    public $Ciphers;

    /**
     * @var integer 必填项。加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
     */
    public $CipherTemplate;

    /**
     * @var integer WAF与源站的读超时时间，默认300s。
     */
    public $ProxyReadTimeout;

    /**
     * @var integer WAF与源站的写超时时间，默认300s。
     */
    public $ProxySendTimeout;

    /**
     * @var integer WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
     */
    public $SniType;

    /**
     * @var string SniType为3时，需要填此参数，表示自定义的SNI；
     */
    public $SniHost;

    /**
     * @var array IsCdn=3时，需要填此参数，表示自定义header
     */
    public $IpHeaders;

    /**
     * @var integer 必填项。是否开启XFF重置。
0：关闭
1：开启
     */
    public $XFFReset;

    /**
     * @var string 域名备注信息
     */
    public $Note;

    /**
     * @var string 自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
     */
    public $UpstreamHost;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 必填项。域名唯一ID
     * @param integer $CertType 必填项。证书类型。
0：仅配置HTTP监听端口，没有证书
1：证书来源为自有证书
2：证书来源为托管证书
     * @param string $Cert CertType为1时，需要填充此参数，表示自有证书的证书链
     * @param string $PrivateKey CertType为1时，需要填充此参数，表示自有证书的私钥
     * @param string $SSLId CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     * @param integer $IsCdn 必填项。waf前是否部署有七层代理服务。
0：没有部署代理服务
1：有部署代理服务，waf将使用XFF获取客户端IP
2：有部署代理服务，waf将使用remote_addr获取客户端IP
3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     * @param string $UpstreamScheme 服务配置有HTTPS端口时，HTTPS的回源协议。
http：使用http协议回源，和HttpsUpstreamPort配合使用
https：使用https协议回源
     * @param string $HttpsUpstreamPort HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
     * @param integer $HttpsRewrite 必填项。是否开启HTTP强制跳转到HTTPS。
0：不强制跳转
1：开启强制跳转
     * @param integer $UpstreamType 必填项。回源类型。
0：通过IP回源
1：通过域名回源
     * @param string $UpstreamDomain 域名回源时的回源域名。UpstreamType为1时，需要填充此字段
     * @param array $SrcList IP回源时的回源IP列表。UpstreamType为0时，需要填充此字段
     * @param integer $IsHttp2 必填项。是否开启HTTP2，需要开启HTTPS协议支持。
0：关闭
1：开启
     * @param integer $IsWebsocket 必填项。是否开启WebSocket支持。
0：关闭
1：开启
     * @param integer $LoadBalance 必填项。回源负载均衡策略。
0：轮询
1：IP hash
2：加权轮询
     * @param integer $IsGray 待废弃，可不填。是否开启灰度，0表示不开启灰度。
     * @param string $Edition 域名所属实例类型
     * @param array $Ports 必填项。端口信息，可通过DescribeDomains接口获取具体参数信息。
     * @param string $IsKeepAlive 必填项。是否开启长连接。
0： 短连接
1： 长连接
     * @param string $InstanceID 必填项。域名所属实例id
     * @param integer $Anycast 必填项，待废弃。目前填0即可。anycast IP类型开关： 0 普通IP 1 Anycast IP
     * @param array $Weights 回源IP列表各IP的权重，和SrcList一一对应。当且仅当UpstreamType为0，并且SrcList有多个IP，并且LoadBalance为2时需要填写，否则填 []
     * @param integer $ActiveCheck 必填项，是否开启主动健康检测。
0：不开启
1：开启
     * @param integer $TLSVersion TLS版本信息
     * @param array $Ciphers 加密套件信息
     * @param integer $CipherTemplate 必填项。加密套件模板。
0：不支持选择，使用默认模板  
1：通用型模板 
2：安全型模板
3：自定义模板
     * @param integer $ProxyReadTimeout WAF与源站的读超时时间，默认300s。
     * @param integer $ProxySendTimeout WAF与源站的写超时时间，默认300s。
     * @param integer $SniType WAF回源时的SNI类型。
0：关闭SNI，不配置client_hello中的server_name
1：开启SNI，client_hello中的server_name为防护域名
2：开启SNI，SNI为域名回源时的源站域名
3：开启SNI，SNI为自定义域名
     * @param string $SniHost SniType为3时，需要填此参数，表示自定义的SNI；
     * @param array $IpHeaders IsCdn=3时，需要填此参数，表示自定义header
     * @param integer $XFFReset 必填项。是否开启XFF重置。
0：关闭
1：开启
     * @param string $Note 域名备注信息
     * @param string $UpstreamHost 自定义回源Host。默认为空字符串，表示使用防护域名作为回源Host。
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
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

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new SpartaProtectionPort();
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

        if (array_key_exists("Anycast",$param) and $param["Anycast"] !== null) {
            $this->Anycast = $param["Anycast"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("ActiveCheck",$param) and $param["ActiveCheck"] !== null) {
            $this->ActiveCheck = $param["ActiveCheck"];
        }

        if (array_key_exists("TLSVersion",$param) and $param["TLSVersion"] !== null) {
            $this->TLSVersion = $param["TLSVersion"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("CipherTemplate",$param) and $param["CipherTemplate"] !== null) {
            $this->CipherTemplate = $param["CipherTemplate"];
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

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
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
    }
}
