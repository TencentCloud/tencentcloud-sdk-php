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
 * saas域名详情
 *
 * @method integer getHttpsRewrite() 获取是否开启httpRewrite
 * @method void setHttpsRewrite(integer $HttpsRewrite) 设置是否开启httpRewrite
 * @method string getHttpsUpstreamPort() 获取https回源端口
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置https回源端口
 * @method integer getIsCdn() 获取是否是cdn
 * @method void setIsCdn(integer $IsCdn) 设置是否是cdn
 * @method integer getIsGray() 获取是否开启gray
 * @method void setIsGray(integer $IsGray) 设置是否开启gray
 * @method integer getIsHttp2() 获取是否是http2
 * @method void setIsHttp2(integer $IsHttp2) 设置是否是http2
 * @method integer getIsWebsocket() 获取是否开启websocket
 * @method void setIsWebsocket(integer $IsWebsocket) 设置是否开启websocket
 * @method integer getLoadBalance() 获取负载均衡
 * @method void setLoadBalance(integer $LoadBalance) 设置负载均衡
 * @method integer getMode() 获取防御模式
 * @method void setMode(integer $Mode) 设置防御模式
 * @method string getPrivateKey() 获取私钥
 * @method void setPrivateKey(string $PrivateKey) 设置私钥
 * @method string getSSLId() 获取ssl id
 * @method void setSSLId(string $SSLId) 设置ssl id
 * @method string getUpstreamDomain() 获取回源域名
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置回源域名
 * @method integer getUpstreamType() 获取回源类型
 * @method void setUpstreamType(integer $UpstreamType) 设置回源类型
 * @method array getSrcList() 获取回源ip
 * @method void setSrcList(array $SrcList) 设置回源ip
 * @method array getPorts() 获取服务端口配置
 * @method void setPorts(array $Ports) 设置服务端口配置
 * @method integer getCertType() 获取证书类型
 * @method void setCertType(integer $CertType) 设置证书类型
 * @method string getUpstreamScheme() 获取回源方式
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置回源方式
 * @method integer getCls() 获取日志包
 * @method void setCls(integer $Cls) 设置日志包
 * @method string getCname() 获取一级cname
 * @method void setCname(string $Cname) 设置一级cname
 * @method integer getIsKeepAlive() 获取是否长连接
 * @method void setIsKeepAlive(integer $IsKeepAlive) 设置是否长连接
 * @method integer getActiveCheck() 获取是否开启主动健康检测，1表示开启，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveCheck(integer $ActiveCheck) 设置是否开启主动健康检测，1表示开启，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTLSVersion() 获取TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTLSVersion(integer $TLSVersion) 设置TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCiphers() 获取加密套件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCiphers(array $Ciphers) 设置加密套件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCipherTemplate() 获取模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCipherTemplate(integer $CipherTemplate) 设置模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyReadTimeout() 获取300s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) 设置300s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxySendTimeout() 获取300s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxySendTimeout(integer $ProxySendTimeout) 设置300s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSniType() 获取0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSniType(integer $SniType) 设置0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSniHost() 获取SniType=3时，需要填此参数，表示自定义的host；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSniHost(string $SniHost) 设置SniType=3时，需要填此参数，表示自定义的host；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeights() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeights(array $Weights) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpHeaders() 获取IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainsPartInfo extends AbstractModel
{
    /**
     * @var integer 是否开启httpRewrite
     */
    public $HttpsRewrite;

    /**
     * @var string https回源端口
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer 是否是cdn
     */
    public $IsCdn;

    /**
     * @var integer 是否开启gray
     */
    public $IsGray;

    /**
     * @var integer 是否是http2
     */
    public $IsHttp2;

    /**
     * @var integer 是否开启websocket
     */
    public $IsWebsocket;

    /**
     * @var integer 负载均衡
     */
    public $LoadBalance;

    /**
     * @var integer 防御模式
     */
    public $Mode;

    /**
     * @var string 私钥
     */
    public $PrivateKey;

    /**
     * @var string ssl id
     */
    public $SSLId;

    /**
     * @var string 回源域名
     */
    public $UpstreamDomain;

    /**
     * @var integer 回源类型
     */
    public $UpstreamType;

    /**
     * @var array 回源ip
     */
    public $SrcList;

    /**
     * @var array 服务端口配置
     */
    public $Ports;

    /**
     * @var integer 证书类型
     */
    public $CertType;

    /**
     * @var string 回源方式
     */
    public $UpstreamScheme;

    /**
     * @var integer 日志包
     */
    public $Cls;

    /**
     * @var string 一级cname
     */
    public $Cname;

    /**
     * @var integer 是否长连接
     */
    public $IsKeepAlive;

    /**
     * @var integer 是否开启主动健康检测，1表示开启，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveCheck;

    /**
     * @var integer TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TLSVersion;

    /**
     * @var array 加密套件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ciphers;

    /**
     * @var integer 模版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CipherTemplate;

    /**
     * @var integer 300s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyReadTimeout;

    /**
     * @var integer 300s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxySendTimeout;

    /**
     * @var integer 0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SniType;

    /**
     * @var string SniType=3时，需要填此参数，表示自定义的host；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SniHost;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weights;

    /**
     * @var array IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpHeaders;

    /**
     * @param integer $HttpsRewrite 是否开启httpRewrite
     * @param string $HttpsUpstreamPort https回源端口
     * @param integer $IsCdn 是否是cdn
     * @param integer $IsGray 是否开启gray
     * @param integer $IsHttp2 是否是http2
     * @param integer $IsWebsocket 是否开启websocket
     * @param integer $LoadBalance 负载均衡
     * @param integer $Mode 防御模式
     * @param string $PrivateKey 私钥
     * @param string $SSLId ssl id
     * @param string $UpstreamDomain 回源域名
     * @param integer $UpstreamType 回源类型
     * @param array $SrcList 回源ip
     * @param array $Ports 服务端口配置
     * @param integer $CertType 证书类型
     * @param string $UpstreamScheme 回源方式
     * @param integer $Cls 日志包
     * @param string $Cname 一级cname
     * @param integer $IsKeepAlive 是否长连接
     * @param integer $ActiveCheck 是否开启主动健康检测，1表示开启，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TLSVersion TLS版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ciphers 加密套件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CipherTemplate 模版
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyReadTimeout 300s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxySendTimeout 300s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SniType 0:关闭SNI；1:开启SNI，SNI=源请求host；2:开启SNI，SNI=修改为源站host；3：开启SNI，自定义host，SNI=SniHost；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SniHost SniType=3时，需要填此参数，表示自定义的host；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Weights 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpHeaders IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
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

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }
    }
}
