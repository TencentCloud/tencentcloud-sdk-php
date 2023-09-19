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
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method integer getCertType() 获取证书类型，0表示没有证书，CertType=1表示自有证书,2 为托管证书
 * @method void setCertType(integer $CertType) 设置证书类型，0表示没有证书，CertType=1表示自有证书,2 为托管证书
 * @method string getCert() 获取CertType=1时，需要填次参数，表示证书内容
 * @method void setCert(string $Cert) 设置CertType=1时，需要填次参数，表示证书内容
 * @method string getPrivateKey() 获取CertType=1时，需要填次参数，表示证书的私钥
 * @method void setPrivateKey(string $PrivateKey) 设置CertType=1时，需要填次参数，表示证书的私钥
 * @method string getSSLId() 获取CertType=2时，需要填次参数，表示证书的ID
 * @method void setSSLId(string $SSLId) 设置CertType=2时，需要填次参数，表示证书的ID
 * @method integer getIsCdn() 获取表示是否开启了CDN代理
 * @method void setIsCdn(integer $IsCdn) 设置表示是否开启了CDN代理
 * @method string getUpstreamScheme() 获取HTTPS回源协议
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置HTTPS回源协议
 * @method string getHttpsUpstreamPort() 获取HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
 * @method integer getHttpsRewrite() 获取表示是否强制跳转到HTTPS，1表示开启，0表示不开启
 * @method void setHttpsRewrite(integer $HttpsRewrite) 设置表示是否强制跳转到HTTPS，1表示开启，0表示不开启
 * @method integer getUpstreamType() 获取回源类型，0表示通过IP回源,1 表示通过域名回源
 * @method void setUpstreamType(integer $UpstreamType) 设置回源类型，0表示通过IP回源,1 表示通过域名回源
 * @method string getUpstreamDomain() 获取UpstreamType=1时，填次字段表示回源域名
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置UpstreamType=1时，填次字段表示回源域名
 * @method array getSrcList() 获取UpstreamType=0时，填次字段表示回源ip
 * @method void setSrcList(array $SrcList) 设置UpstreamType=0时，填次字段表示回源ip
 * @method integer getIsHttp2() 获取是否开启HTTP2，1表示开启，0表示不开启http2。开启HTTP2需要HTTPS支持
 * @method void setIsHttp2(integer $IsHttp2) 设置是否开启HTTP2，1表示开启，0表示不开启http2。开启HTTP2需要HTTPS支持
 * @method integer getIsWebsocket() 获取是否开启WebSocket， 1：开启WebSocket，0：不开启WebSocket
 * @method void setIsWebsocket(integer $IsWebsocket) 设置是否开启WebSocket， 1：开启WebSocket，0：不开启WebSocket
 * @method integer getLoadBalance() 获取负载均衡策略，0表示轮徇，1表示IP hash
 * @method void setLoadBalance(integer $LoadBalance) 设置负载均衡策略，0表示轮徇，1表示IP hash
 * @method integer getIsGray() 获取是否灰度
 * @method void setIsGray(integer $IsGray) 设置是否灰度
 * @method string getEdition() 获取WAF版本
 * @method void setEdition(string $Edition) 设置WAF版本
 * @method array getPorts() 获取端口信息
 * @method void setPorts(array $Ports) 设置端口信息
 * @method string getIsKeepAlive() 获取长短连接标志，仅IP回源时有效
 * @method void setIsKeepAlive(string $IsKeepAlive) 设置长短连接标志，仅IP回源时有效
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 * @method integer getAnycast() 获取是否为Anycast ip类型：1 Anycast 0 普通ip
 * @method void setAnycast(integer $Anycast) 设置是否为Anycast ip类型：1 Anycast 0 普通ip
 * @method array getWeights() 获取src的权重
 * @method void setWeights(array $Weights) 设置src的权重
 * @method integer getActiveCheck() 获取是否开启源站的主动健康检测，1表示开启，0表示不开启
 * @method void setActiveCheck(integer $ActiveCheck) 设置是否开启源站的主动健康检测，1表示开启，0表示不开启
 * @method integer getTLSVersion() 获取TLS版本信息
 * @method void setTLSVersion(integer $TLSVersion) 设置TLS版本信息
 * @method array getCiphers() 获取加密套件信息
 * @method void setCiphers(array $Ciphers) 设置加密套件信息
 * @method integer getCipherTemplate() 获取0:不支持选择：默认模板  1:通用型模板 2:安全型模板 3:自定义模板
 * @method void setCipherTemplate(integer $CipherTemplate) 设置0:不支持选择：默认模板  1:通用型模板 2:安全型模板 3:自定义模板
 * @method integer getProxyReadTimeout() 获取300s
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) 设置300s
 * @method integer getProxySendTimeout() 获取300s
 * @method void setProxySendTimeout(integer $ProxySendTimeout) 设置300s
 * @method integer getSniType() 获取0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
 * @method void setSniType(integer $SniType) 设置0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
 * @method string getSniHost() 获取SniType=3时，需要填此参数，表示自定义的host；
 * @method void setSniHost(string $SniHost) 设置SniType=3时，需要填此参数，表示自定义的host；
 * @method array getIpHeaders() 获取IsCdn=3时，需要填此参数，表示自定义header
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，需要填此参数，表示自定义header
 * @method integer getXFFReset() 获取0:关闭xff重置；1:开启xff重置，只有在IsCdn=0时可以开启
 * @method void setXFFReset(integer $XFFReset) 设置0:关闭xff重置；1:开启xff重置，只有在IsCdn=0时可以开启
 */
class ModifySpartaProtectionRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var integer 证书类型，0表示没有证书，CertType=1表示自有证书,2 为托管证书
     */
    public $CertType;

    /**
     * @var string CertType=1时，需要填次参数，表示证书内容
     */
    public $Cert;

    /**
     * @var string CertType=1时，需要填次参数，表示证书的私钥
     */
    public $PrivateKey;

    /**
     * @var string CertType=2时，需要填次参数，表示证书的ID
     */
    public $SSLId;

    /**
     * @var integer 表示是否开启了CDN代理
     */
    public $IsCdn;

    /**
     * @var string HTTPS回源协议
     */
    public $UpstreamScheme;

    /**
     * @var string HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer 表示是否强制跳转到HTTPS，1表示开启，0表示不开启
     */
    public $HttpsRewrite;

    /**
     * @var integer 回源类型，0表示通过IP回源,1 表示通过域名回源
     */
    public $UpstreamType;

    /**
     * @var string UpstreamType=1时，填次字段表示回源域名
     */
    public $UpstreamDomain;

    /**
     * @var array UpstreamType=0时，填次字段表示回源ip
     */
    public $SrcList;

    /**
     * @var integer 是否开启HTTP2，1表示开启，0表示不开启http2。开启HTTP2需要HTTPS支持
     */
    public $IsHttp2;

    /**
     * @var integer 是否开启WebSocket， 1：开启WebSocket，0：不开启WebSocket
     */
    public $IsWebsocket;

    /**
     * @var integer 负载均衡策略，0表示轮徇，1表示IP hash
     */
    public $LoadBalance;

    /**
     * @var integer 是否灰度
     */
    public $IsGray;

    /**
     * @var string WAF版本
     */
    public $Edition;

    /**
     * @var array 端口信息
     */
    public $Ports;

    /**
     * @var string 长短连接标志，仅IP回源时有效
     */
    public $IsKeepAlive;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @var integer 是否为Anycast ip类型：1 Anycast 0 普通ip
     */
    public $Anycast;

    /**
     * @var array src的权重
     */
    public $Weights;

    /**
     * @var integer 是否开启源站的主动健康检测，1表示开启，0表示不开启
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
     * @var integer 0:不支持选择：默认模板  1:通用型模板 2:安全型模板 3:自定义模板
     */
    public $CipherTemplate;

    /**
     * @var integer 300s
     */
    public $ProxyReadTimeout;

    /**
     * @var integer 300s
     */
    public $ProxySendTimeout;

    /**
     * @var integer 0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
     */
    public $SniType;

    /**
     * @var string SniType=3时，需要填此参数，表示自定义的host；
     */
    public $SniHost;

    /**
     * @var array IsCdn=3时，需要填此参数，表示自定义header
     */
    public $IpHeaders;

    /**
     * @var integer 0:关闭xff重置；1:开启xff重置，只有在IsCdn=0时可以开启
     */
    public $XFFReset;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名ID
     * @param integer $CertType 证书类型，0表示没有证书，CertType=1表示自有证书,2 为托管证书
     * @param string $Cert CertType=1时，需要填次参数，表示证书内容
     * @param string $PrivateKey CertType=1时，需要填次参数，表示证书的私钥
     * @param string $SSLId CertType=2时，需要填次参数，表示证书的ID
     * @param integer $IsCdn 表示是否开启了CDN代理
     * @param string $UpstreamScheme HTTPS回源协议
     * @param string $HttpsUpstreamPort HTTPS回源端口,仅UpstreamScheme为http时需要填当前字段
     * @param integer $HttpsRewrite 表示是否强制跳转到HTTPS，1表示开启，0表示不开启
     * @param integer $UpstreamType 回源类型，0表示通过IP回源,1 表示通过域名回源
     * @param string $UpstreamDomain UpstreamType=1时，填次字段表示回源域名
     * @param array $SrcList UpstreamType=0时，填次字段表示回源ip
     * @param integer $IsHttp2 是否开启HTTP2，1表示开启，0表示不开启http2。开启HTTP2需要HTTPS支持
     * @param integer $IsWebsocket 是否开启WebSocket， 1：开启WebSocket，0：不开启WebSocket
     * @param integer $LoadBalance 负载均衡策略，0表示轮徇，1表示IP hash
     * @param integer $IsGray 是否灰度
     * @param string $Edition WAF版本
     * @param array $Ports 端口信息
     * @param string $IsKeepAlive 长短连接标志，仅IP回源时有效
     * @param string $InstanceID 实例id
     * @param integer $Anycast 是否为Anycast ip类型：1 Anycast 0 普通ip
     * @param array $Weights src的权重
     * @param integer $ActiveCheck 是否开启源站的主动健康检测，1表示开启，0表示不开启
     * @param integer $TLSVersion TLS版本信息
     * @param array $Ciphers 加密套件信息
     * @param integer $CipherTemplate 0:不支持选择：默认模板  1:通用型模板 2:安全型模板 3:自定义模板
     * @param integer $ProxyReadTimeout 300s
     * @param integer $ProxySendTimeout 300s
     * @param integer $SniType 0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
     * @param string $SniHost SniType=3时，需要填此参数，表示自定义的host；
     * @param array $IpHeaders IsCdn=3时，需要填此参数，表示自定义header
     * @param integer $XFFReset 0:关闭xff重置；1:开启xff重置，只有在IsCdn=0时可以开启
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
    }
}
